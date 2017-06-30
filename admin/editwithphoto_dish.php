<?include("../blocks/db.php");
if (isset($_GET['id'])); {$id=($_GET['id']);}
if (isset($_POST['id'])); {$id1=$_POST['id'];}
if (isset($_POST['food'])); {$food=$_POST['food'];}
if (isset($_POST['weight'])); {$weight=$_POST['weight'];}
if (isset($_POST['price'])); {$price=$_POST['price'];}
if (isset($_POST['foodtime'])); {$foodtime=$_POST['foodtime'];}
if (isset($_POST['photo'])); {$photo=$_POST['photo'];}
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Restaurant</title>
		</head>
		<body>
		<?if ($food):?>
		<?
		if (($_FILES['photo']['error'])==0) {
			$err=($_FILES['photo']['error']);
			$type=($_FILES['photo']['type']);
			$type1=explode('/', $type);
			$typephoto1 = $type1[1];
			$myrow_pict=mysqli_query($db, "SELECT picture FROM dishs WHERE id='$id1'");
			$result_pict=mysqli_fetch_array($myrow_pict);
			if (isset($result_pict['picture'])) {
				$pict=$result_pict['picture'];
				unlink($pict);
				$picture=substr($pict, 7, 14);
				$typephoto1=substr($pict, 22);
			} else {
				$picture=date(YmdHis);
			}

			if (($typephoto1=="jpeg" || $typephoto1=="jpg" || $typephoto1=="png" || $typephoto1=="tiff") && (isset($food)) && (isset($weight)) && (isset($price)) && ($err==0)) {
					$loadphoto='../img/'.$picture.'.'.$typephoto1;
					$savefile=move_uploaded_file($_FILES['photo']['tmp_name'], $loadphoto);
			if ($savefile==true) {
				$myrow=mysqli_query($db, "UPDATE dishs SET food='$food', weight='$weight', price='$price', time_id='$timeofeat', picture='$loadphoto' WHERE id='$id1'");
				if ($myrow==true) {
					echo "Данные обновлены.<a href='editwithphoto_dish.php'>Вернуться к редактированию</a>";
					} else {
						unlink($loadphoto);
						echo "Данные НЕ обновлены";
						}
					} else {
					echo "Файл не загрузился";
				}
			} else {
				echo "Неустранимая ошибка. Обратитесь к разработчику";
			}
		} else {
			$myrow=mysqli_query($db, "UPDATE dishs SET food='$food', weight='$weight', price='$price', time_id='$timeofeat', WHERE id='$id1'");
			if ($myrow==true) {
				echo "Данные добавлены на сервер";
			} else {
				echo "Данные на сервер не добавлены";
			}
		}
		?>

		<?elseif ($_GET['id']):?>

			<form name="editwithphoto" method="post" action="editwithphoto_dish.php" enctype="multipart/form-data">
				<?
				$myrow=mysqli_query($db, "SELECT * FROM dishs WHERE id='$id'");
				$result=mysqli_fetch_array($myrow);
				$type = $result['time_id'];
				?>
				<div style="background: #F7A15E; width: 300px; padding: 10px;">
						<h2>Редактирование блюда</h2>
						<label style="display: block;" for="food">Название</label>
						<input type="text" name="food" id="food" value="<?=$result['food']?>">
						<label style="display: block;" for="weight">Вес в граммах</label>
						<input type="text" name="weight" id="weight" value="<?=$result['weight']?>">
						<label style="display: block;" for="price">Цена руб.</label>
						<input type="text" name="price" id="price" value="<?=$result['price']?>">
						<input type="hidden" name="id" id="id" value="<?=$result['id']?>">
						<label style="display: block;" for="foodtime">Категория блюда</label>
						<select name="foodtime" id="foodtime">

							<?
							$myrow_now=mysqli_query($db, "SELECT * FROM foodtime WHERE id='$type'");
							$result_now=mysqli_fetch_array($myrow_now);
							?>

							<option value='<?=$result_now["id"]?>' selected><?=$result_now["timeofeat"]?></option>
							
							<?
							$myrow_type=mysqli_query($db, "SELECT * FROM foodtime WHERE id!='$type'");
							$result_type=mysqli_fetch_array($myrow_type);
							do {
								printf ("<option value='%s'>%s</option>", $result_type['id'], $result_type['timeofeat']);
							}
							while ($result_type=mysqli_fetch_array($myrow_type));
							?>

						</select>
						<label style="display: block;" for="photo">Загрузите фото</label>
						<input style="margin-bottom: 20px;" type="file" name="photo" id="photo">
						<img src="<?=$result['picture']?>">
						<button type="submit" style="margin-top: 20px;">Сохранить изменения</button>
				</div>
			</form>

							<?else:?>
							<?
							$myrow=mysqli_query($db, "SELECT * FROM dishs");
							$result=mysqli_fetch_array($myrow);
							do {
								$type = $result['time_id'];
								$myrow_type=mysqli_query($db, "SELECT timeofeat FROM foodtime WHERE id='$type'");
								$result_type=mysqli_fetch_array($myrow_type);
								printf ("<a href='editwithphoto_dish.php?id=%s'><div style='margin-bottom: 40px; text-shadow: 0 0 1px gray; color: gray; font-size: 20px; width: 300px; height: 300px; display: inline-block; text-align: center;'>%s<br> %sгр.<br> %sруб.<br>%s<img src='%s'></div></a>", $result['id'], $result['food'], $result['weight'], $result['price'], $result_type['timeofeat'], $result['picture']);
										}
							while ($result=mysqli_fetch_array($myrow));
							?>
		<?endif?>

		<a href="../index.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться на главную</a>

		</body>
	</html>
<?include("../blocks/db.php");
if (isset($_POST['food'])) {$food=$_POST['food'];
if ($food=='') {unset($food);}}

if (isset($_POST['weight'])) {$weight=$_POST['weight'];
if ($weight=='') {unset($weight);}}

if (isset($_POST['price'])) {$price=$_POST['price'];
if ($price=='') {unset($price);}}

if (isset($_POST['foodtime'])) {$foodtime=$_POST['foodtime'];
if ($foodtime=='') {unset($foodtime);}}

if (isset($_POST['photo'])) {$photo=$_POST['photo'];
if ($photo=='') {unset($photo);}}
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
		$err=($_FILES['photo']['error']);
		$type=($_FILES['photo']['type']);
		$type1 = explode('/', $type);
		$typephoto1 = $type1[1];

		if (($typephoto1=="jpeg" || $typephoto1=="jpg" || $typephoto1=="png" || $typephoto1=="tiff") && (isset($food)) && (isset($weight)) && (isset($price)) && ($err==0)) {
			$createdate=date(YmdHis);
			$loadphoto='../img/'.$createdate.'.'.$typephoto1;
			$savefile=move_uploaded_file($_FILES['photo']['tmp_name'], $loadphoto);
			if ($savefile==true) {
				$myrow=mysqli_query($db, "INSERT INTO dishs (food, weight, price, time_id, picture, createdate) VALUES ('$food', '$weight', '$price', '$foodtime', '$loadphoto', (NOW()))");
				if ($myrow==true) {
					echo "Блюдо <b>$food</b> добавлено на сервер.<a href='addwithphoto_dish.php'>Добавить еще.</a>";
					} else {
						unlink($loadphoto);
						echo "Данные НЕ добавлены";
					}
				} else {
					echo "Файл не загрузился";
				}
			} else {
				echo "Неустранимая ошибка. Обратитесь к разработчику";
		}
		?>

		<?else:?>
			<form name="add_dish" method="post" action="addwithphoto_dish.php" enctype="multipart/form-data">
				<div style="background: #e89999; width: 220px; padding: 10px;">
						<h2>Добавление блюда</h2>
						<label style="display: block;" for="food">Название</label>
						<input type="text" name="food" id="food" placeholder="Название блюда">
						<label style="display: block;" for="weight">Вес в граммах</label>
						<input type="text" name="weight" id="weight" placeholder="Вес блюда">
						<label style="display: block;" for="price">Цена руб.</label>
						<input type="text" name="price" id="price" placeholder="Цена блюда">
						<label style="display: block;" for="foodtime">Категория блюда</label>
						<select name="foodtime" id="foodtime">

							<?
							$myrow=mysqli_query($db, "SELECT * FROM foodtime");
							$result=mysqli_fetch_array($myrow);
							do {
								printf ("<option value=\"%s\">%s</option>", $result['id'], $result['timeofeat']);
							}
							while ($result=mysqli_fetch_array($myrow));
							?>

						</select>
						<label style="display: block;" for="photo">Загрузите фото</label>
						<input type="file" name="photo" id="photo">
						<button type="submit" style="margin-top: 20px;">Добавить блюдо</button>
				</div>
			<?endif?>
			</form>
			<a href="../index.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться на главную</a>
		</body>
	</html>
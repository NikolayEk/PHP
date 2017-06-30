<?include("../blocks/db.php");
if (isset($_GET['id'])); {$id=$_GET['id'];}
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Restaurant</title>
		</head>
		<body>

		<?if (isset($id)):?>
		<?	$myrow_food=mysqli_query($db, "DELETE FROM dishs WHERE id=$id");
		if ($myrow_food==true) {
			echo "<p>Блюдо удалено из перечня блюд</p>
					<p><a href='del_dish.php'>Вернуться к удалению блюд</a></p>";
		}else {
			echo "<p>Блюдо НЕ УДАЛЕНО!Для устранения ошибки обратитесь к разработчикам.</p>";
	}
		?>
		<?else:?>
			<?
							$myrow=mysqli_query($db, "SELECT * FROM dishs");
							$result=mysqli_fetch_array($myrow);
							do {
								$type = $result['time_id'];
								$myrow_type=mysqli_query($db, "SELECT timeofeat FROM foodtime WHERE id='$type'");
								$result_type=mysqli_fetch_array($myrow_type);
								printf ("<a href='del_dish.php?id=%s'><div style='margin-bottom: 40px; text-shadow: 0 0 1px gray; color: gray; font-size: 20px; width: 300px; height: 300px; display: inline-block; text-align: center;'>%s<br> %sгр.<br> %sруб.<br>%s<img src='%s'></div></a>", $result['id'], $result['food'], $result['weight'], $result['price'], $result_type['timeofeat'], $result['picture']);
										}
							while ($result=mysqli_fetch_array($myrow));
							?>
		<?endif?>
		<a href="../index.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться на главную</a>
		</body>
	</html>
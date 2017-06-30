<?include("../blocks/db.php");
if (isset($_POST['id'])) {$id=$_POST['id'];}
if (isset($_POST['food'])) {$food=$_POST['food'];}
if (isset($_POST['weight'])) {$weight=$_POST['weight'];}
if (isset($_POST['price'])) {$price=$_POST['price'];}
?>
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Restaurant</title>
		</head>
		<body>
			<?
			$myrow_food=mysqli_query($db, "UPDATE dishs SET food='$food', weight='$weight', price='$price' WHERE id=$id");
				if ($myrow_food==true) {
					echo "<p>Блюдо <b>$food</b> обновлено в перечне блюд.<a href='all_dish.php'>Вернуться к редактированию.</a> </p>
						<p><a href='../index.php'>Вернуться к заказу блюд</a></p>";
				} else{
					echo "<p>Блюдо НЕ ОБНОВЛЕНО! Обратитесь к разработчику</p>";
				}
			?>
		</body>
	</html>
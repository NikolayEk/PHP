<?include("../blocks/db.php");
if (isset($_POST['id'])) {$id=$_POST['id'];}
if (isset($_POST['food'])) {$food=$_POST['food'];}
if (isset($_POST['price'])) {$price=$_POST['price'];}
if (isset($_POST['order'])) {$order=$_POST['order'];}
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Restaurant</title>
		</head>
		<body>
			<div style="background: #f069d5; width: 300px;">
				<h2>Заказано</h2>
				<?
					 foreach ($order as $value) {
					 	$allorder=mysqli_query($db, "SELECT * FROM dishs WHERE id=$value");
						$result=mysqli_fetch_array($allorder);
		    		 	printf ('%s %s руб.<br>', $result['food'], $result['price']);
		    		 	$price[]=$result['price'];
		   				 }
				?>

				<p>Стоимость заказанных блюд: <?=array_sum($price)?> руб.</p>
			</div>


		<a href="category.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться к заказу блюд</a>
		<a href="../index.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться на главную</a>

		</body>
	</html>
<?include("../blocks/db.php");
if (isset($_POST['id'])) {$id=$_POST['id'];}
if (isset($_POST['food'])) {$food=$_POST['food'];}
if (isset($_POST['price'])) {$price=$_POST['price'];}
if (isset($_POST['order'])) {$order[]=$_POST['order'];}
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Restaurant</title>
		</head>
		<body>
		<?
			 foreach ($order as $key => $value) {
    		 echo "$key=$value<br>";
   				 }
		?>



		<a href="../index.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться к заказу блюд</a>

		</body>
	</html>
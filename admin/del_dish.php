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
								printf ("<p><a href='del_dish.php?id=%s'>%s %s %s %s</a></p>", $result['id'], $result['food'], $result['weight'], $result['price'], $result['time_id']);
							}
							while ($result=mysqli_fetch_array($myrow));
			?>
		<?endif?>
		<a href="../index.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться на главную</a>
		</body>
	</html>
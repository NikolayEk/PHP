<?include("../blocks/db.php");
if (isset($_GET['id'])); {$id=($_GET['id']);}
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Restaurant</title>
		</head>
		<body>

		<style type="text/css">
			td{
				padding: 5px;
				text-align: left;
				width: 200px;
				border: 1px solid black;
			}
		</style>

		<form name="made_order" method="post" action="order.php">
			<table style='background: #f069d5;'>
				<tr>
					<td>
						<h2>Супы</h2>
					</td>
					<td>
						<h2>Салаты</h2>
					</td>
					<td>
						<h2>Гарнир</h2>
					</td>
					<td>
						<h2>Горячее</h2>
					</td>
					<td>
						<h2>Десерт</h2>
					</td>
					<td>
						<h2>Напитки</h2>
					</td>
				</tr>

				<tr>
					<td>
						<?
						$soup=mysqli_query($db, "SELECT * FROM dishs WHERE time_id=1");
						$result=mysqli_fetch_array($soup);
						do {
							printf ('<input type="checkbox" name="order[]" value="%s">%s<br>', $result['id'], $result['food']);
							$all_dishs[]=$result['price'];
							}
						while ($result=mysqli_fetch_array($soup));
						?>
					</td>
					<td>
						<?
						$salad=mysqli_query($db, "SELECT * FROM dishs WHERE time_id=2");
						$result=mysqli_fetch_array($salad);
						do {
							printf ('<input type="checkbox" name="order[]" value="%s">%s<br>', $result['id'], $result['food']);
							$all_dishs[]=$result['price'];
							}
						while ($result=mysqli_fetch_array($salad));
						?>
					</td>
					<td>
						<?
						$garnish=mysqli_query($db, "SELECT * FROM dishs WHERE time_id=3");
						$result=mysqli_fetch_array($garnish);
						do {
							printf ('<input type="checkbox" name="order[]" value="%s">%s<br>', $result['id'], $result['food']);
							$all_dishs[]=$result['price'];
							}
						while ($result=mysqli_fetch_array($garnish));
						?>
					</td>
					<td>
						<?
						$hot=mysqli_query($db, "SELECT * FROM dishs WHERE time_id=4");
						$result=mysqli_fetch_array($hot);
						do {
							printf ('<input type="checkbox" name="order[]" value="%s">%s<br>', $result['id'], $result['food']);
							$all_dishs[]=$result['price'];
							}
						while ($result=mysqli_fetch_array($hot));
						?>
					</td>
					<td>
						<?
						$dessert=mysqli_query($db, "SELECT * FROM dishs WHERE time_id=5");
						$result=mysqli_fetch_array($dessert);
						do {
							printf ('<input type="checkbox" name="order[]" value="%s">%s<br>', $result['id'], $result['food']);
							$all_dishs[]=$result['price'];
							}
						while ($result=mysqli_fetch_array($dessert));
						?>
					</td>
					<td>
						<?
						$drink=mysqli_query($db, "SELECT * FROM dishs WHERE time_id=6");
						$result=mysqli_fetch_array($drink);
						do {
							printf ('<input type="checkbox" name="order[]" value="%s">%s<br>', $result['id'], $result['food']);
							$all_dishs[]=$result['price'];
							}
						while ($result=mysqli_fetch_array($drink));
						?>
					</td>
				</tr>
			</table>
			<button type="submit" style="margin: 20px 0;">Посчитать выбранные блюда</button>
		</form>


		<?
		echo "Сумма всех блюд =".array_sum($all_dishs)." руб. <br>";
		echo "Всего блюд ".count($all_dishs);
		?>
		<br>

		<?
			$order[]=$order;
			 foreach ($order as $key => $value) {
    		 echo "$value<br>";
   				 }
		?>


		<a href="../index.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться на главную</a>

		</body>
	</html>
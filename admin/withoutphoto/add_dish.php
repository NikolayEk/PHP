<?include("../blocks/db.php");
if (isset($_POST['food'])) {$food=$_POST['food'];
if ($food=='') {unset($food);}}

if (isset($_POST['weight'])) {$weight=$_POST['weight'];
if ($weight=='') {unset($weight);}}

if (isset($_POST['price'])) {$price=$_POST['price'];
if ($price=='') {unset($price);}}

if (isset($_POST['foodtime'])) {$foodtime=$_POST['foodtime'];
if ($foodtime=='') {unset($foodtime);}}
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Restaurant</title>
		</head>
		<body>

		<?
		if (isset ($food) || isset($weight) || isset($price) || isset($foodtime)):?>
		<?	{$myrow_food=mysqli_query($db, "INSERT INTO dishs(food, weight, price, time_id) VALUES ('$food', '$weight', '$price', '$foodtime')");
		if (isset ($myrow_food)) {
			echo "<p>Блюдо <b>$food</b> добавлено в базу!<a href='add_dish.php'>Добавить еще одно блюдо</a></p>";
		}
		else {"<p>Блюдо НЕ добавлено в базу!Для устранения ошибки обратитесь к разработчикам.</p>";
	}
	}
		?>

		<?else:?>
			<form name="add_dish" method="post" action="add_dish.php">
				<div style="background: #e89999; width: 220px; padding: 10px;">
						<h2>Добавление блюда</h2>
						<label style="display: block;" for="food">Название</label>
						<input type="text" name="food" id="food" placeholder="Название блюда">
						<label style="display: block;" for="weight">Вес в граммах</label>
						<input type="text" name="weight" id="weight" placeholder="Вес блюда">
						<label style="display: block;" for="price">Цена руб.</label>
						<input type="text" name="price" id="price" placeholder="Цена блюда">
						<label style="display: block;" for="foodtime">Категория блюда</label>
						<select name="foodtime" id="foodtime" style="margin: 20px 20px 20px 0px;">

							<?
							$myrow=mysqli_query($db, "SELECT * FROM foodtime");
							$result=mysqli_fetch_array($myrow);
							do {
								printf ("<option value=\"%s\">%s</option>", $result['id'], $result['timeofeat']);
							}
							while ($result=mysqli_fetch_array($myrow));
							?>

						</select>
						<button type="submit" style="margin-left: 20px;">Добавить блюдо</button>
				</div>
			<?endif?>
			</form>
			<a href="../index.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться на главную</a>
		</body>
	</html>
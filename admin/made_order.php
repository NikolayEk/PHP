<?include("../blocks/db.php");
if (isset($_POST['food'])) {$food=$_POST['food'];}

if (isset($_POST['count'])) {$count=$_POST['count'];}

if (isset($_POST['surname'])) {$surname=$_POST['surname'];}

if (isset($_POST['name'])) {$name=$_POST['name'];}

if (isset($_POST['patronymic'])) {$patronymic=$_POST['patronymic'];}

if (isset($_POST['waiter'])) {$waiter=$_POST['waiter'];}

if (isset($_POST['numoftable'])) {$numoftable=$_POST['numoftable'];}

if (isset($_POST['numoforder'])) {$numoforder=$_POST['numoforder'];}
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Restaurant</title>
		</head>
		<body>


		<?
		if (isset ($food) || isset($count) || isset($waiter) || isset($numoftable) || isset($numofchange)):?>
		<?	{$myrow_order=mysqli_query($db, "INSERT INTO orders (food_id, count, waiter, numoftable, numoforder) VALUES ('$food', '$count', '$waiter', '$numoftable', '$numoforder')");
		if (isset ($myrow_order)) {
			echo "<p>Заказ сделан!<a href='made_order.php'>Добавить еще заказ</a></p>";
		}
		else {"<p>Заказ НЕ сделан!Для устранения ошибки обратитесь к разработчикам.</p>";
	}
	}
		?>

		<?else:?>

			<form name="made_order" method="post" action="made_order.php">
				<div style="background: #e89999; width: 220px; padding: 10px;">
						<h2>Добавление заказа</h2>

						<label style="display: block;" for="food">Выберите блюдо</label>
						<select name="food" id="food">
							<?
							$myrow=mysqli_query($db, "SELECT * FROM dishs");
							$result=mysqli_fetch_array($myrow);
							do {
								printf ("<option value=\"%s\">%s</option>", $result['food'], $result['food']);
							}
							while ($result=mysqli_fetch_array($myrow));
							?>
						</select>

						<label style="display: block;" for="count">Количество</label>
							<select name="count" id="count" style="padding: 0px 50px;">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>

						<label style="display: block;" for="wait">Выберите официанта</label>
							<select name="waiter" id="wait">
								<?
								$myrow=mysqli_query($db, "SELECT * FROM waiters");
								$result=mysqli_fetch_array($myrow);
								do {
									printf ("<option value=\"%s\">%s %s. %s.</option>", $result['surname'], $result['surname'], mb_substr($result['name'],0,1,"utf-8"), mb_substr($result['patronymic'],0,1,"utf-8"));
								}
								while ($result=mysqli_fetch_array($myrow));
								?>
							</select>

						<label style="display: block;" for="numoftable">Номер стола</label>
						<input type="text" name="numoftable" id="numoftable" placeholder="Номер">
						<label style="display: block;" for="numoforder">Номер заказа</label>
						<input type="text" name="numoforder" id="numoforder" placeholder="Номер">

						<button type="submit" style="margin: 20px;">Сделать заказ</button>
				</div>
			<?endif?>
			</form>
			<a href="../index.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться на главную</a>
		</body>
	</html>
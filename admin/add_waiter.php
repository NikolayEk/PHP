<?include("../blocks/db.php");
if (isset($_POST['surname'])) {$surname=$_POST['surname'];
if ($surname=='') {unset($surname);}}

if (isset($_POST['name'])) {$name=$_POST['name'];
if ($name=='') {unset($name);}}

if (isset($_POST['patronymic'])) {$patronymic=$_POST['patronymic'];
if ($patronymic=='') {unset($patronymic);}}

if (isset($_POST['numofchange'])) {$numofchange=$_POST['numofchange'];
if ($numofchange=='') {unset($numofchange);}}
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Restaurant</title>
		</head>
		<body>

		<?
		if (isset ($surname) || isset($name) || isset($patronymic) || isset($numofchange)):?>
		<?	{$myrow_waiter=mysqli_query($db, "INSERT INTO waiters (surname, name, patronymic, numofchange) VALUES ('$surname', '$name', '$patronymic', '$numofchange')");
		if (isset ($myrow_waiter)) {
			echo "<p>Официант <b>$surname</b> добавлен!<a href='add_waiter.php'>Добавить еще</a></p>";
		}
		else {"<p>Добавление НЕ произошло!Для устранения ошибки обратитесь к разработчикам.</p>";
	}
	}
		?>

		<?else:?>
			<form name="add_waiter" method="post" action="add_waiter.php">
				<div style="background: #e89999; width: 220px; padding: 10px;">
						<h2>Добавление официанта</h2>
						<label style="display: block;" for="surname">Фамилия</label>
						<input type="text" name="surname" id="surname" placeholder="Фамилия">
						<label style="display: block;" for="name">Имя</label>
						<input type="text" name="name" id="name" placeholder="Имя">
						<label style="display: block;" for="patronymic">Отчество</label>
						<input type="text" name="patronymic" id="patronymic" placeholder="Отчество">
						<label style="display: block;" for="numofchange">Выбор смены</label>
						<select name="numofchange" id="numofchange" style="margin: 10px 0;">
							<option>Выберите номер смены</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>	
						<button type="submit" style="margin-left: 20px;">Добавить официанта</button>
				</div>
			<?endif?>
			</form>
			<a href="../index.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться на главную</a>
		</body>
	</html>
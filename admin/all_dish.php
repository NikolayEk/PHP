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
		<?if (isset($id)):?>
		<?$myrow=mysqli_query($db, "SELECT * FROM dishs WHERE id='$id'");
		$result=mysqli_fetch_array($myrow);
		$time_id=$result['time_id'];
		?>
			<form name="edit_dish" method="post" action="edit_dish.php">
				<div style="background: #F7A15E; width: 220px; padding: 10px;">
						<h2>Редактирование блюда</h2>
						<label style="display: block;" for="food">Название</label>
						<input type="text" name="food" id="food" value='<?=$result['food']?>'>
						<label style="display: block;" for="weight">Вес в граммах</label>
						<input type="text" name="weight" id="weight" value='<?=$result['weight']?>'>
						<label style="display: block;" for="price">Цена руб.</label>
						<input type="text" name="price" id="price" value='<?=$result['price']?>'>
						<label style="display: block;" for="foodtime">Время приема пищи</label>
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
						<input id="id" type="hidden" name="id" value=<?=$id?>>
						<button type="submit" name="submit">Сохранить</button>
				</div>
			</form>

							<?else:?>
							<?
							$myrow=mysqli_query($db, "SELECT * FROM dishs");
							$result=mysqli_fetch_array($myrow);
							do {
								printf ("<p><a href='all_dish.php?id=%s'>%s %s %s %s</a></p>", $result['id'], $result['food'], $result['weight'], $result['price'], $result['time_id']);
							}
							while ($result=mysqli_fetch_array($myrow));
							?>
		<?endif?>


<!--вывод юлюд по времени приема пищи-->
		<table style='background: #f069d5; float: left; width: 660px; padding: 10px;'>

			<tr>
				<td>
					<h2>Блюда на завтрак</h2>
				</td>
				<td>
					<h2>Блюда на обед</h2>
				</td>
				<td>
					<h2>Блюда на ужин</h2>
				</td>
			</tr>

			<tr>
				<td>
					<?
					$bfast=mysqli_query($db, "SELECT * FROM dishs WHERE time_id=1");
					$result=mysqli_fetch_array($bfast);
					do {
						printf ("<p>%s</p>", $result['food']);
						}
					while ($result=mysqli_fetch_array($bfast));
					?>
				</td>
				<td>
					<?
					$lunch=mysqli_query($db, "SELECT * FROM dishs WHERE time_id=2");
					$result=mysqli_fetch_array($lunch);
					do {
						printf ("<p>%s</p>", $result['food']);
						}
					while ($result=mysqli_fetch_array($lunch));
					?>
				</td>
				<td>
					<?
					$dinner=mysqli_query($db, "SELECT * FROM dishs WHERE time_id=3");
					$result=mysqli_fetch_array($dinner);
					do {
						printf ("<p>%s</p>", $result['food']);
						}
					while ($result=mysqli_fetch_array($dinner));
					?>
				</td>
			</tr>
		</table>

		<?
		$qwert=mysqli_query($db, "SELECT price FROM dishs WHERE");
		$result=mysqli_fetch_array($qwert);
		echo "Сумма всех блюд =".array_sum($result)." руб. <br>";
		?>

		<?
		$qwert=mysqli_query($db, "SELECT price FROM dishs");
		$result=mysqli_fetch_array($qwert);
		echo "Всего блюд ".count($result);
		?>

		</body>
	</html>
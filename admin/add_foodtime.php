<?include("../blocks/db.php");
if (isset($_POST['time'])) {$time=$_POST['time'];
if ($time=='') {unset($time);}}
?>
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Restaurant</title>
		</head>
		<body>
<?
		if (isset ($time)):?>
		<?	{$myrow_time=mysqli_query($db, "INSERT INTO foodtime(timeofeat) VALUES ('$time')");
		if (isset ($myrow_time)) {
			echo "<p>Время приема пищи <b>$time</b> добавлено в базу!<a href='add_foodtime.php'>Добавить еще одну позицию</a></p>";
		}
		else {"<p>Время приема пищи НЕ добавлено в базу!Для устранения ошибки обратитесь к разработчикам.</p>";
	}
	}
?>

		<?else:?>
			<div style="background: aqua; width: 220px; padding: 20px;">
				<form name="add_foodtime" method="post" action="add_foodtime.php">
					<label for="time"><b>Категория блюда</b></label>
					<input type="text" name="time" id="time" placeholder="Введите категорию блюда" style="width: 200px; margin: 10px 0;">
					<button type="submit">Добавить</button>
				</form>
			</div>
		<?endif?>
		<a href="../index.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться к заказу блюд</a>
		</body>
	</html>
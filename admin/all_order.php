<?
include("../blocks/db.php");
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Restaurant</title>
		</head>
		<body>
			<?

						$waiter=mysqli_query($db, "SELECT * FROM orders");
						$resultwaiter=mysqli_fetch_array($waiter);
						$order=mysqli_query($db, "SELECT * FROM orders");
						$resultorder=mysqli_fetch_array($order);
						do {
							printf ('%sОфициант %s %s принял заказы:<br>', $resultwaiter['id'], $resultwaiter['surname'], $resultwaiter['name']);
							do {
								printf ('%s %s - %sшт.<br>', $resultorder['id'], $resultorder['food_id'], $resultorder['count']);
								}
							while ($resultorder=mysqli_fetch_array($order));
							}
						while ($resultwaiter=mysqli_fetch_array($waiter));

						?>

		
		<a href="../index.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться на главную</a>

		</body>
	</html>
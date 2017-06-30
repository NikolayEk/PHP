<?include("blocks/db.php");
if (isset($_GET['page'])); {$page=$_GET['page'];}
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Restaurant</title>
		</head>
		<body>
			<p align="center"></p>
				<?php
					require_once "functions.php";
					// текущая страница
					$page = $_GET["page"];
					if ($page < 1 or $page == "") $page = 1;
					// количество строк-статей на стр.
					$limit = 4;
					// начало выборки из БД
					$start = getStart($page, $limit);
					
					$dishs = getdishs($start, $limit);
					for ($i = 0; $i < count($dishs); $i++)
					 echo $dishs[$i]["food"]."<br>";
					echo "<div style='clear: both; text-align: center; margin-top: 100px; font-weight: bold; font-size: 24px;'>".pagination($page, $limit)."</div>";
				?>

				<?
				/*			$myrow=mysqli_query($db, "SELECT * FROM dishs");
							$result=mysqli_fetch_array($myrow);
							do {
								$type = $result['time_id'];
								$myrow_type=mysqli_query($db, "SELECT timeofeat FROM foodtime WHERE id='$type'");
								$result_type=mysqli_fetch_array($myrow_type);
								printf ("<div style='margin-bottom: 40px; text-shadow: 0 0 1px gray; color: gray; font-size: 20px; width: 300px; height: 300px; display: inline-block; text-align: center;'>%s<br> %sгр.<br> %sруб.<br>%s<img src='%s'></div>", $result['food'], $result['weight'], $result['price'], $result_type['timeofeat'], $result['picture']);
										}
							while ($result=mysqli_fetch_array($myrow));*/
							?>

		

		<a href="../index.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться на главную</a>

		</body>
	</html>
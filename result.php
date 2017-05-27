<?php
if (isset($_POST['dish1'])) {$dish1=$_POST['dish1'];
if ($dish1=='') {unset($dish1);}}

if (isset($_POST['dish2'])) {$dish2=$_POST['dish2'];
if ($dish2=='') {unset($dish2);}}

if (isset($_POST['dish3'])) {$dish3=$_POST['dish3'];
if ($dish3=='') {unset($dish3);}}

if (isset($_POST['dish4'])) {$dish4=$_POST['dish4'];
if ($dish4=='') {unset($dish4);}}

if (isset($_POST['dish5'])) {$dish5=$_POST['dish5'];
if ($dish5=='') {unset($dish5);}}

if (isset($_POST['price1'])) {$price1=$_POST['price1'];
if ($price1=='') {unset($price1);}}

if (isset($_POST['price2'])) {$price2=$_POST['price2'];
if ($price2=='') {unset($price2);}}

if (isset($_POST['price3'])) {$price3=$_POST['price3'];
if ($price3=='') {unset($price3);}}

if (isset($_POST['price4'])) {$price5=$_POST['price4'];
if ($price4=='') {unset($price4);}}

if (isset($_POST['price5'])) {$price5=$_POST['price5'];
if ($price5=='') {unset($price5);}}

if (isset($_POST['foodtime'])) {$foodtime=$_POST['foodtime'];
if ($foodtime=='') {unset($foodtime);}}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$foodtime?></title>
</head>
<body>
	<h1>Заказано</h1>
	<div style="background: #F0F362; float: left; width: 200px;">
		<p><?=$dish1?></p>
		<p><?=$dish2?></p>
		<p><?=$dish3?></p>
		<p><?=$dish4?></p>
		<p><?=$dish5?></p>
	</div>
	<div style="background: #8DF362; display: inline-block; width: 200px;">
		<p><?=$price1?></p>
		<p><?=$price2?></p>
		<p><?=$price3?></p>
		<p><?=$price4?></p>
		<p><?=$price5?></p>
	</div>
	<div>
		<p><?=$foodtime?></p>
		<p>СУММА  <?=$price1+$price2+$price3+$price4+$price5?>руб. </p>
	</div>
</body>
</html>
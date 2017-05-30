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

if (isset($_POST['price4'])) {$price4=$_POST['price4'];
if ($price4=='') {unset($price4);}}

if (isset($_POST['price5'])) {$price5=$_POST['price5'];
if ($price5=='') {unset($price5);}}

if (isset($_POST['unit1'])) {$unit1=$_POST['unit1'];
if ($unit1=='') {unset($unit1);}}

if (isset($_POST['unit2'])) {$unit2=$_POST['unit2'];
if ($unit2=='') {unset($unit2);}}

if (isset($_POST['unit3'])) {$unit3=$_POST['unit3'];
if ($unit3=='') {unset($unit3);}}

if (isset($_POST['unit4'])) {$unit4=$_POST['unit4'];
if ($unit4=='') {unset($unit4);}}

if (isset($_POST['unit5'])) {$unit5=$_POST['unit5'];
if ($unit5=='') {unset($unit5);}}

if (isset($_POST['foodtime'])) {$foodtime=$_POST['foodtime'];
if ($foodtime=='') {unset($foodtime);}}

$sale;
$summ_sale;
$summ=$price1*$unit1+$price2*$unit2+$price3*$unit3+$price4*$unit4+$price5*$unit5;

if ($summ>100 && $summ<=105) {$summ_sale=100;}
elseif ($summ>105 && $summ<=150) {$summ_sale=($price1*$unit1+$price2*$unit2+$price3*$unit3+$price4*$unit4+$price5*$unit5)*0.95;}
elseif ($summ>150 && $summ<=160.5) {$summ_sale=150;}
elseif ($summ>160.5 && $summ<=200) {$summ_sale=($price1*$unit1+$price2*$unit2+$price3*$unit3+$price4*$unit4+$price5*$unit5)*0.93;}
elseif ($summ>200 && $summ<=220) {$summ_sale=200;}
elseif ($summ>220) {$summ_sale=($price1*$unit1+$price2*$unit2+$price3*$unit3+$price4*$unit4+$price5*$unit5)*0.9;}
else {$summ_sale=$summ;}

if ($summ>100 && $summ<=105) {$sale=$summ-100;}
elseif ($summ>105 && $summ<=150) {$sale=($price1*$unit1+$price2*$unit2+$price3*$unit3+$price4*$unit4+$price5*$unit5)*0.05;}
elseif ($summ>150 && $summ<=160.5) {$sale=$summ-150;}
elseif ($summ>160.5 && $summ<=200) {$sale=($price1*$unit1+$price2*$unit2+$price3*$unit3+$price4*$unit4+$price5*$unit5)*0.07;}
elseif ($summ>200 && $summ<=220) {$sale=$summ-200;}
elseif ($summ>220) {$sale=($price1*$unit1+$price2*$unit2+$price3*$unit3+$price4*$unit4+$price5*$unit5)*0.1;}
else {$sale=0;}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$foodtime?></title>
</head>
<body>
	<h1>Заказано</h1>
<!--Блюдо-->
	<div style="background: #F0F362; float: left; width: 200px;">
		<p><b>Блюдо</b></p>
		<p><?=$dish1?></p>
		<p><?=$dish2?></p>
		<p><?=$dish3?></p>
		<p><?=$dish4?></p>
		<p><?=$dish5?></p>
	</div>
<!--количество-->
	<div style="background: #33bdc4; float: left; width: 200px;">
		<p><b>Количество</b></p>
		<p><?=$unit1?></p>
		<p><?=$unit2?></p>
		<p><?=$unit3?></p>
		<p><?=$unit4?></p>
		<p><?=$unit5?></p>
	</div>
<!--цена-->
	<div style="background: #8DF362; display: inline-block; width: 200px;">
		<p><b>Цена</b></p>
		<p><?=$price1?></p>
		<p><?=$price2?></p>
		<p><?=$price3?></p>
		<p><?=$price4?></p>
		<p><?=$price5?></p>
	</div>
<!--итог-->
	<div>
		<p>СУММА БЕЗ СКИДКИ <?=$summ?>руб. </p>
		<p>ВАША СКИДКА <?=$sale?>руб. </p>
		<p>СУММА С УЧЕТОМ СКИДКИ <?=$summ_sale?>руб. </p>
	</div>
</body>
</html>
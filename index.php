<?php
include("blocks/db.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Restaurant</title>
</head>
<body>

		<form name="eda" method="post" action="result.php">
<!--блюдо-->
			<div style="background: #F0F362; float: left; width: 220px; padding: 10px;">
				<h2>Выберите блюдо</h2>
				<label style="display: block;" for="food1">Блюдо1</label>
				<input type="text" name="dish1" id="food1">
				<label style="display: block;" for="food2">Блюдо2</label>
				<input type="text" name="dish2" id="food2">
				<label style="display: block;" for="food3">Блюдо3</label>
				<input type="text" name="dish3" id="food3">
				<label style="display: block;" for="food4">Блюдо4</label>
				<input type="text" name="dish4" id="food4">
				<label style="display: block;" for="food5">Блюдо5</label>
				<input type="text" name="dish5" id="food5">
			</div>
<!--количество-->
			<div style="background: #33bdc4; float: left; width: 220px; padding: 10px;">
				<h2>Количество порций</h2>
				<label style="display: block;" for="unit1">Количество</label>
				<input type="text" name="unit1" id="unit1">
				<label style="display: block;" for="unit2">Количество</label>
				<input type="text" name="unit2" id="unit2">
				<label style="display: block;" for="unit3">Количество</label>
				<input type="text" name="unit3" id="unit3">
				<label style="display: block;" for="unit4">Количество</label>
				<input type="text" name="unit4" id="unit4">
				<label style="display: block;" for="unit5">Количество</label>
				<input type="text" name="unit5" id="unit5">
			</div>
<!--цена-->
			<div style="background: #8DF362; float: left; width: 220px;  padding: 10px;">
				<h2>Цена блюда</h2>
				<label style="display: block;" for="cost1">Цена1</label>
				<input type="text" name="price1" id="cost1">
				<label style="display: block;" for="cost2">Цена2</label>
				<input type="text" name="price2" id="cost2">
				<label style="display: block;" for="cost3">Цена3</label>
				<input type="text" name="price3" id="cost3">
				<label style="display: block;" for="cost4">Цена4</label>
				<input type="text" name="price4" id="cost4">
				<label style="display: block;" for="cost5">Цена5</label>
				<input type="text" name="price5" id="cost5">
			</div>

			<div style="background: #d8e899; padding: 10px; width: 220px; display: inline-block;">
				<select name="foodtime">
					<option>Выберите время приема пищи</option>
					<option value="ЗАВТРАК">Завтрак</option>
					<option value="ОБЕД">Обед</option>
					<option value="УЖИН">Ужин</option>
				</select>
				<br>
				<button type="submit" style="margin: 20px 0;">Сформировать счет</button>
			</div>


		  </form> 
		  <a href="admin/add_dish.php" style="display: block; text-decoration: none; font-weight: bold;">Добавить новое блюдо в базу</a>
		  <a href="admin/add_foodtime.php" style="display: block; text-decoration: none;font-weight: bold;">Добавить категорию блюд</a>
		  <a href="admin/all_dish.php" style="display: block; text-decoration: none;font-weight: bold;">Посмотреть/отредактировать блюда</a>
		  <a href="admin/del_dish.php" style="display: block; text-decoration: none;font-weight: bold;">Удалить блюдо из списка</a>
		  <a href="admin/category.php" style="display: block; text-decoration: none;font-weight: bold;">Сортировка блюд по категориям</a>

<!--Date-->
		
		<div style="clear: both; width: 180px; height: 50px; color: white; background: black; padding: 30px; font-weight: bold; ">
		<?
			$months=array(1=>' Января ',' Февраля ',' Марта ',' Апреля ',' Мая ',' Июня ',' Июля ',' Августа ',' Сентября ',' Октября ',' Ноября ',' Декабря ');
			 echo "Сегодня - ".date('d'.$months[date('n')].'Y')."<br>";
    		 echo "Время - ".date("H:i:s");
		?>
		</div>


</body>
</html>
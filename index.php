<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>maket</title>
</head>
<body>

		<form name="eda" method="post" action="result.php">

			<div style="background: #F0F362; float: left; width: 200px; padding: 20px;">
				<label for="food1">Блюдо1</label>
				<input type="text" name="dish1" id="food1">
				<label for="food2">Блюдо2</label>
				<input type="text" name="dish2" id="food2">
				<label for="food3">Блюдо3</label>
				<input type="text" name="dish3" id="food3">
				<label for="food4">Блюдо4</label>
				<input type="text" name="dish4" id="food4">
				<label for="food5">Блюдо1</label>
				<input type="text" name="dish5" id="food5">
			</div>
			<div style="background: #8DF362; display: inline-block; width: 200px;  padding: 20px;">
				<label for="cost1">Цена1</label>
				<input type="text" name="price1" id="cost1">
				<label for="cost2">Цена2</label>
				<input type="text" name="price2" id="cost2">
				<label for="cost3">Цена3</label>
				<input type="text" name="price3" id="cost3">
				<label for="cost4">Цена4</label>
				<input type="text" name="price4" id="cost4">
				<label for="cost5">Цена1</label>
				<input type="text" name="price5" id="cost5">
			</div>
			<div>
				<select name="foodtime" style="margin: 20px 20px 20px 0px;">
					<option>Выберите время приема пищи</option>
					<option value="ЗАВТРАК">Завтрак</option>
					<option value="ОБЕД">Обед</option>
					<option value="УЖИН">Ужин</option>
				</select>
				<button type="submit" style="margin-left: 20px;">ОТПРАВИТЬ</button>
			</div>
		  </form> 


</body>
</html>
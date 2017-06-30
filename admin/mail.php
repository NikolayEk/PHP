<?include("../blocks/db.php");
if (isset($_POST['answermail'])); {$answermail=$_POST['answermail'];}
if (isset($_POST['user'])); {$user=$_POST['user'];}
if (isset($_POST['text'])); {$text=$_POST['text'];}
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Restaurant</title>
		</head>
		<body>
		<style type="text/css">
/*Стиль для формы*/
form {
    margin: 0 auto;
    max-width: 35%;
    padding: 30px 30px 6px 30px;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 5px;
    background-clip: padding-box;
    background: rgba(0, 0, 0, 0.5); 
    box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    overflow: hidden; 
}

/* Поле сообщения */
textarea{
    background: rgba(255, 255, 255, 0.4); 
    width: 90%;
    height: 110px;
    resize: none;
    border: 1px solid rgba(255,255,255,.6);
    border-radius: 4px;
    background-clip: padding-box; 
    display:block;
    font-family: 'Open Sans', sans-serif;
    font-size:18px;
    font-weight: 300;
    color:#fff;
    padding-left:25px;
    padding-right:20px;
    padding-top:12px;
    margin-bottom:20px;
    overflow:hidden;
}

/* Поля ввода */
input {
    width: 90%;
    height: 48px;
    border: 1px solid rgba(255,255,255,.4);
    border-radius: 4px;
    background-clip: padding-box; 
    display:block;
    font-family: 'Open Sans', sans-serif;
    font-size:18px;
    font-weight: 300;    
    color:#fff;
    padding-left:20px;
    padding-right:20px;
    margin-bottom:20px;
}
input[type=submit] {
    cursor:pointer;
}
input.name {
    background: rgba(255, 255, 255, 0.4); 
    padding-left:25px;
}
input.email {
    background: rgba(255, 255, 255, 0.4);
    padding-left:25px;
}
input.message {
    background: rgba(255, 255, 255, 0.4);
    padding-left:25px;
}
::-webkit-input-placeholder {
    color: #fff;
}
:-moz-placeholder{ 
    color: #fff; 
}
::-moz-placeholder {
    color: #fff;
}
:-ms-input-placeholder {  
    color: #fff; 
}
input:focus, textarea:focus { 
    background-color: rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 5px 1px rgba(255,255,255,.5);
    overflow: hidden; 
}

/* Стили для кнопки отправить */
.btn {
    width: 138px;
    height: 44px;
    border-radius: 4px;
    float:right;
    border: 1px solid #253737;
    background: #416b68;
    background: -webkit-gradient(linear, left top, left bottom, from(#6da5a3), to(#416b68));
    background: -webkit-linear-gradient(top, #6da5a3, #416b68);
    background: -moz-linear-gradient(top, #6da5a3, #416b68);
    background: -ms-linear-gradient(top, #6da5a3, #416b68);
    background: -o-linear-gradient(top, #6da5a3, #416b68);
    background-image: -ms-linear-gradient(top, #6da5a3 0%, #416b68 100%);
    padding: 10.5px 21px;
    border-radius: 6px;
    box-shadow: rgba(255,255,255,0.1) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
    text-shadow: #333333 0 1px 0;
    color: #e1e1e1;
}
.btn:hover {
    border: 1px solid #253737;
    text-shadow: #333333 0 1px 0;
    background: #416b68;
    background: -webkit-gradient(linear, left top, left bottom, from(#77b2b0), to(#416b68));
    background: -webkit-linear-gradient(top, #77b2b0, #416b68);
    background: -moz-linear-gradient(top, #77b2b0, #416b68);
    background: -ms-linear-gradient(top, #77b2b0, #416b68);
    background: -o-linear-gradient(top, #77b2b0, #416b68);
    background-image: -ms-linear-gradient(top, #77b2b0 0%, #416b68 100%);
    color: #fff;
 }
.btn:active {
    margin-top:1px;
    text-shadow: #333333 0 -1px 0;
    border: 1px solid #333333;
    background: #ffCC00;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffCC00), to(#ff6600));
    background: -webkit-linear-gradient(top, #ffcc00, #ff6600);
    background: -moz-linear-gradient(top, #ffcc00, #ff6600);
    background: -ms-linear-gradient(top, #ffcc00, #ff6600);
    background: -o-linear-gradient(top, #ffcc00, #ff6600);
    background-image: -ms-linear-gradient(top, #ffcc00 0%, #ff6600 100%);
    color: #fff;
    box-shadow: rgba(255,255,255,0) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
    outline: none;
}
		</style>

		<form name="mail" method="post" action="mail.php" enctype="multipart/form-data">
			<input name="user" placeholder="Укажите ваше имя!" class="name" required />
		    <input name="answermail" placeholder="Укажите ваш Email!" class="email" type="email" required />
		    <textarea name="text" rows="4" cols="50" placeholder="Введите ваше сообщение:" class="message" required></textarea>
		    <input name="submit" class="btn" type="submit" value="Отправить" />
		</form>
		<?php
		if ($answermail) {
			$sendmail=mail($answermail, $user, $text);
			if ($sendmail==true) {
				echo "Сообщение успешно отправлено";
			} else {
				echo "Сообщение не удалось отправить";
				}
			}
			mail ("klesh85@mail.ru", "$answermail", "Пользователь $user пишет: $text");
		?>

		<a href="../index.php" style="display: block; text-decoration: none; font-weight: bold;">Вернуться на главную</a>
		</body>
	</html>
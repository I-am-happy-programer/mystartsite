<?php
require_once 'engine.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Регистрация</title>
	</head>
	<body>
<fieldset style="width: 200px" style="margin-left: 1500px" >  
<p>Регистрация</p>
<p>Введите логин, пароль и email</p>
<form method="post">
<input type="text" style="margin-bottom: 5px" name="login">
<input type="text" style="margin-bottom: 5px" name="pass">
<input type="text" style="margin-bottom: 5px" name="mail">
<button style="width: 100px" name = "banfack">Войти</button>
<p>
						<?php
									 whyban();
						?>
					</p>
</form>
</fieldset>
	</body>
	</html>
	
<?php 
function whyban(){
	if (isset($_POST['banfack']))
	{
		 $data = $_POST;
		 if(($data['login'] != null) and ($data['pass'] != null) and ($data['mail'] != null))
		{
			$str='Вы успешно вошли. Нажмите чтобы перейти';
			echo $str;?>
			<a href="second.html">
				<?php

		}
		 else if (($data['login'] == null))
		 {

			$str='Укажите логин';
			echo $str;
		}
		else if (($data['pass'] == null))
		 {

			$str='Введите пароль';
			echo $str;
		}
		else if (($data['mail'] == null))
		 {

			$str='Укажите email';
			echo $str;
		}
		
	}
}
?>
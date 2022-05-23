<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<title>Мой сайт</title>
<link rel="stylesheet" href="/style1.css">
<link rel="stylesheet" href="style.css">


</head>
<body bgcolor="white">
<tr>
<div class="panelnav">
		<a href="главная.php"><font size=5>Главная</font></a></td>
		<a href="о себе.php"><font size=5>О себе</font></a></td>
		<a href="лабы.php"><font size=5>Лабы по дискретке</font></a></td>
		<a href="галерея.php"><font size=5>Галерея</font></a></td>
		<a href="контакты.php"><font size=5>Контакты</font></a></td>
		<div class="avtorisator">
        <?php
				if($_COOKIE['user']==''):
			?>
			
			
			<a href="registr.php"><font size=5>Регистрация/вход</font></a></td>
			
			</a>
			<?php else:?>
				<div>
					<a href="exit.php"><font size=5>Выход</font></a>
					<a href="userpage.php"><font size=5><?=$_COOKIE['user']?></font></a> 
				</div>
			<?php endif;?>
		</div>
</div>
</tr>
<div class="userpage">
	<div class="userpage1">
		<?php
		$login=$_COOKIE['login'];
		$mysql=new mysqli('127.0.0.1','root','','lab4');
		$result=$mysql -> query("SELECT * FROM users WHERE login='$login'");
		$user=$result->fetch_assoc();
		$img=base64_encode($user['img']);
		?>
		<img class="userimg" src="data:image/jpeg;base64, <?php echo $img?>" alt="">
	</div>
	<div class="polsovatel">
		<?php if($_COOKIE['admin']==1):?>
				Админ:
				<?php echo ($_COOKIE['user']) ?><br>
				<a href="adminpage.php" class="button12">Панель админа</a>
		<?php else:?>
				Пользователь:
				<?php echo ($_COOKIE['user']) ?>
		<?php endif;?>
	</div>
</div>
</body> 
</html>
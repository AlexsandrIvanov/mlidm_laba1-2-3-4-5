<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<title>Регистрация</title>
<link rel="stylesheet" href="/style1.css">
</head>
<body>
<a href="index.php"><img class="button1" src="/img/назад.png"></a>
<div class="registr">
    <?php
        if ($_COOKIE['user'] == ''):
    ?>
    <div class="row">
        <div class="reg2">
        <h1>Регистрация</h1>
            <form class="form1" action= "validation/check.php" method="post" enctype="multipart/form-data">
             <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <input type="file" class="file" name="img_upload" id="img_upload"/>
                <button class="btn btn-success" type="submit">Зарегистрироваться</button>
            </form>
        </div>
        <div class="reg2">
            <h1>Авторизация</h1>
            <form action= "validation/auth.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success" type="submit">Авторизироваться</button>
            </form>
        </div>
    </div>
    <?php endif; ?>
</div>

</body> 
</html>
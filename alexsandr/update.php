<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<title>Изменить пользователя</title>
<link rel="stylesheet" href="/style1.css">

</head>

<body>
<a href="adminpage.php"><img class="button1" src="/images/назад.png"></a>
<div class="head">
     
    <div class="headText">
        Изменить пользователя с логином <?=$_GET['id'];?>
    </div>
        <div class="username">Пользователь:<a href="userpage.php" class="username"><?=$_COOKIE['user']?></a> <a href="/exit.php">Выход</a></div>
</div>

<div class="registr">

<?php if($_COOKIE['admin']==1):?>
    <div class="reg2">
    <form action="edituser.php?id=<?=$_GET['id'];?>" method="post" enctype="multipart/form-data" class="admininput">
        <h1>Изменить пользователя</h1>
        <input type="text"  placeholder="Новый логин" class="form-control" name="login" id="login"/>
        <input type="text"  placeholder="Новое имя" class="form-control" name="name" id="name"/>
        <input type="password"  placeholder="Новый пароль" class="form-control" name="pass" id="pass"/>
        <input type="file" class="file" name="img_upload" id="img_upload"/>
        <button class="btn btn-success" type="submit" id="add" name="add">Изменить пользователя</button>
    </form>
    <?php else:?>
        Данный пользователь не является админом
    <?php endif;?>

</body>

</html>
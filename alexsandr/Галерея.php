<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link  rel = "stylesheet"  href= "/style.css" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <link href='http://fonts.googleapis.com/css?family=Stalinist+One&amp;amp;amp;subset=cyrillic' rel='stylesheet' type='text/css' />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/gallerya.js"></script>
</head>
<body bgcolor="white">
    
    <tr>
    <div class="panelnav">
            <a href="главная.php"><font size=5>Главная</font></a></td>
            <a href="о себе.php"><font size=5>О себе</font></a></td>
            <a href="мои фотографии.php"><font size=5>Мои фотографии </font></a></td>
            <a href="галерея.php"><font size=5>Галерея</font></a></td>
            <a href="выполненные работы.php"><font size=5>мои лабы</font></a></td>
            <div class="avtorisator">
                <a href="enter.php"><font size=5>Вход</font></a></td>
                <a href="registration.php"><font size=5>Регистрация</font></a></td>
            </div>
    </div> 
</div>
<div class="gallery">
		<div class="main_gallery">
        <div class="knopki"> 		
							<div class="buttonGallery" onclick="leftChangeImage()"> <img class="button" src="/img/img1/лево.jpg"> </div>
							
								<div id="mainImage">  
                  
				  					</div>
								
							<div class="buttonGallery" onclick="rightChangeImage()"> <img class="button" src="/img/img1/право.jpg"> </div>
						</div>
                        </div>
</div> 
</body>
</html>
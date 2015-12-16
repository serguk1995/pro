<!DOCTYPE html>
<html>
	<head>
		<title> Fred Shop </title>	
		<script src="jquery-1.11.2.min.js"></script>
		<link id="dyncss" rel="stylesheet" type="text/css" href="style.css">  
			<script type="text/javascript"> 
				function setDynCSS(url) 
				{  
					if (!arguments.length) 
						{  
							url = (url = document.cookie.match(/\bdyncss=([^;]*)/)) && url[1];  
							if (!url) return '';  
						}  
						document.getElementById('dyncss').href = url;  
						var d = new Date();  
						d.setFullYear(d.getFullYear() + 1);  
						document.cookie = ['dyncss=', url, ';expires=', d.toGMTString(), ';path=/;'].join('');  
						return url;  
				}  
				setDynCSS();  
			</script>
				<script type="text/javascript" src="cortona.js"></script>
				<script type="text/javascript" src="script.js"></script>
				<script type="text/javascript" src="scrol.js"></script>
	</head>
	
	<body>
	
		 <div id="header">
					 
			<div id="block1">
				<a href="#top1 "><strong>Fred Shop </strong></a>
			</div>
			<div id="exit">
				<form action="index.php">
					<button type="submit">
						Exit
					</button>
				</form>
			</div>
		
			<div id="block8">
				<a href="basket.php" target="blank"><img class="i16" src="image/basket.jpg" title="Корзина"></a> 
			</div>
				
		</div>
		
			<div id="block10">
				
				<div id="block81">
					
					 				
				</div>
				<div class="tel11" id="tel1"><a href="#tel"><img src="image/tel1.jpg"></a></div>
			</div>
			
			
			
			
			<div id="zite">
			<section id="top1"></section>
			<div id="photos">
			<section id="top3"></section>
				<div id="photos1">
				<img id="1111" class="1111" src="image/photos/12.jpg" >
				
					
				</div>
			</div>
			</div>

			
			
			<div id="cortona">
				<section id="top5"></section>
				<div id="cortona1">
					
				</div>
					<?php
					$con = mysql_connect("localhost","user","toor");
					$db = mysql_select_db("mydb");
					if(!$con||!$db)
					{
					exit(mysql_error());
					}

					$items = mysql_query("SELECT * FROM tovar");

					while($row = mysql_fetch_array($items))
					{
					?>
					<div id="content">
					<h4>Title: <?php echo $row['name']?></h4>
					<p>Description: <?php echo $row['description']?></p>
					<img src=<?php echo $row['photo'] ?>><br>
					<form method="post" action="insert.php">
					<input type="submit" name = "buy" value=<?php echo $row['price']?>$>
					</input>
					<input type="hidden" name = "i_id" value=<?php echo $row['id']?>>
					</input>
					<input type="hidden" name = "i_name" value=<?php echo $row['name']?>>
					</input>
					<input type="hidden" name = "i_img" value=<?php echo $row['photo']?>>
					</input>
					</form>
					<hr>

					</div>
					<?php

					}
					mysql_close();

					?>
			</div>
					
				
			<div id="bottom">
				<div id="cortona">
					Отзывы
					<form>
						<textarea cols="100" rows="10" >
						<?php
								$f = fopen("text.txt", "r");
									while(!feof($f)) 
									{ 
										echo fgets($f) . "\r\n";
									}
								fclose($f);
						?>
						</textarea>
					</form>
					
					<form method="post" action="form.php">
						<input type="text" name="name">
						<input type="text" name="comm">
						<input type="submit" value="Оставить отзыв">
					</form>
				</div>
				
				<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.480911884472!2d36.243651483539516!3d50.002340797752794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0c2b81de1d5%3A0x263b5845d325dd90!2z0LLRg9C7LiDQn9GD0YjQutGW0L3RgdGM0LrQsCwgNjUvMSwg0KXQsNGA0LrRltCyLCDQpdCw0YDQutGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDQuNC90LA!5e0!3m2!1sru!2sru!4v1450114193594" width="1345" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div id="bottom1">
								
				
					<div>
						<a href="https://vk.com/id68973821" target="_blank"><img class="i7" src="image/id/vk.jpg" title="Vkontakte" ></a>
					</div>
				
					<div>
						<a href="https://plus.google.com/getstarted/getstarted?fww=1" target="_blank"><img class="i7" src="image/id/google.jpg" title="Google+" ></a>
					</div>		
								
					<div>
						<a href="https://instagram.com/" target="_blank"><img class="i7" src="image/id/instagram.jpg" title="Instagram" ></a>
					</div>
					
					<div>
						<a href="https://www.skype.com/ru/" target="_blank"><img class="i7" src="image/id/skype.jpg" title="Skype" ></a>
					</div>
				
					<div>
						<a href="https://twitter.com/?lang=ru" target="_blank"><img class="i7" src="image/id/twitter.jpg" title="Twitter" ></a>
					</div>
				
					<div>
						<a href="https://www.facebook.com/" target="_blank"><img class="i7" src="image/id/facebook.jpg" title="Facebook" ></a>
					</div>
				
					<div>
						<a href="https://www.youtube.com/" target="_blank"><img class="i7" src="image/id/youtube.jpg" title="Youtube" ></a>
					</div>
				
						<div id="bottom2">
							<section id="tel"></section>
								<div>
									serguk1995@yandex.ru<br>+38 (099) 248-68-32<br>Харьков 2015
								</div>
						</div>
				</div>
				
			</div>
			<script type="text/javascript">
$(document).ready(function(){
$("#header").on("click","a", function (event) {
//отменяем стандартную обработку нажатия по ссылке
event.preventDefault();

//забираем идентификатор бока с атрибута href
var id = $(this).attr('href'),

//узнаем высоту от начала страницы до блока на который ссылается якорь
top = $(id).offset().top;

//анимируем переход на расстояние - top за 1500 мс
$('body,html').animate({scrollTop: top-85}, 1500);
});
});
</script>


			<script type="text/javascript">
$(document).ready(function(){
$("#tel1").on("click","a", function (event) {
//отменяем стандартную обработку нажатия по ссылке
event.preventDefault();

//забираем идентификатор бока с атрибута href
var id = $(this).attr('href'),

//узнаем высоту от начала страницы до блока на который ссылается якорь
top = $(id).offset().top;

//анимируем переход на расстояние - top за 1500 мс
$('body,html').animate({scrollTop: top-85}, 1500);
});
});
</script>


	</body>
</html>


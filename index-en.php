<!DOCTYPE html>
<html>
	<head>
		<title> Buinyi Sergey </title>	
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
				<a href="#top1 "><strong>Fred Shop</strong></a>

			</div>
			
			<div id="block2">
				<br><br><a href="#top2"  ><strong>ABOUT ME</strong></a>
			</div>
			
			<div id="block3">
				<br><br><a href=" #top "><strong>PROGRESS</strong></a>
			</div>
			
			<div id="block4">
				<br><br><a href="#top3"><strong>PHOTOS</strong></a>
			</div>
			
			<div id="block5">
				<br><br><a href="#top4 "><strong>MY FAVORITE FILMS</strong></a>
			</div>
			
			<div id="block6">
				<br><br><a href="#top5"><strong>CORTONA</strong></a>
			</div>
			
			<div id="block8">
				<img class="i14" src="image/light.jpg" title="Light" onclick="setDynCSS('style-light.css')">
				<img class="i15" src="image/en.jpg" title="Dark"  onclick="setDynCSS('style.css')"> 
			</div>
				
		</div>
		
			<div id="block10">
				<div id="block81">
					<a href="index-en.php"><img class="i16" src="image/eng.jpg" title="English"></a> 
					<a href="index.php"><img class="i16" src="image/ru.jpg" title="Руский"> </a> 				
				</div>
				<div class="tel11" id="tel1"><a href="#tel"><img src="image/tel1.jpg"></a></div>
			</div>
			
			<div id="zite">
			<section id="top1"></section>
				<div id="zite1">
					<br><br><a target="_blank"><img class="i8" src="image/mike-tyson-en.jpg" ></a>
				</div>
			</div>
								
			<div id="about_me"<br>	
				
				<section id="top2" style="padding-top:-180px"></section>
				<div id="about_me1">
				
					WHAT I AM TODAY
					
				<div id="about_me1">
					<br><br><a target="_blank"><img class="i9" src="image/i/hq-wallpapers_ru_animals_36028_1280x1024.jpg" title="PENSIVE" ></a>
				</div>
				
				<div id="about_me1">
					<a target="_blank"><img class="i9" src="image/i/hqdefault.jpg" title="ENIGMATICAL"></a>
				</div>
				
				<div id="about_me1">
					<a target="_blank"><img class="i9" src="image/i/Smeshnye-fotografii-mopsa-Norma.jpg" title="SELF-ASSURED"></a>
				</div>
			
				</div>

			</div>
		
					
			<div id="my_marks">
				<section id="top"></section>
				<div id="my_marks1">
					PROGRESS
						<br><br><table border="0"  cellspacing="0" cellpadding="0">
				
						<tr>
						
							<th> №  </th>
							<th> Discipline  </th>
							<th> Lecturer  </th>
							<th> Mark  </th>
		
						</tr>
						
						<tr>
							<td colspan = "4" text-align:center> Exams </td>
						</tr>	
						
						<tr>
						
							<th> 1  </th>
							<th> Design technology  </th>
							<th> Larin А.А.  </th>
							<th> A  </th>
		
						</tr>
						
						<tr>
							<th> 2  </th>
							<th> Fluctuatins systems  </th>
							<th> Trubaev A.I.  </th>
							<th> A  </th>
		
						</tr>	
						
						<tr>
						
							<th> 3  </th>
							<th> Network  </th>
							<th> Trubaev A.I.  </th>
							<th> A  </th>
		
						</tr>
						
						<tr>
							<th> 4  </th>
							<th> Occupational Safety and Health  </th>
							<th> Pitak O.Y.  </th>
							<th> A  </th>
		
						</tr>						
						<tr>
							<th> 5  </th>
							<th> Simulation systems  </th>
							<th> Krasnikov S.V.  </th>
							<th> A  </th>
		
						</tr>
						
						<tr>
							<th> 6  </th>
							<th> Ukr.Lang.  </th>
							<th> Mikhnov I.P.  </th>
							<th> A  </th>
		
						</tr>
						
						<tr>
							<th> 7  </th>
							<th> Linear programming  </th>
							<th> Iglin S.P.  </th>
							<th> A  </th>
		
						</tr>
						
						<tr>
							<td colspan = "4" text-align:center> Credits </td>
		
						</tr>	
						
						<tr>
							<th> 1  </th>
							<th> Physical education </th>
							<th> Nedbaylo I.A. </th>
							<th> A  </th>
		
						</tr>	
						
						<tr>
							<th> 2  </th>
							<th> Law  </th>
							<th> Gaevaya O.V.  </th>
							<th> A  </th>
		
						</tr>
						
						<tr>
							<th> 3  </th>
							<th> Life Safety  </th>
							<th> Kotlarova O.S.  </th>
							<th> A  </th>
		
						</tr>

					</table>

				</div>
				
			</div>
		
			
			<div id="photos">
			<section id="top3"></section>
				<div id="photos1">
					PHOTOS
					<script src="slider.js"></script>
						<div id="slider">
							 <a href="https://ru.wikipedia.org/wiki/%D0%91%D1%83%D0%B0%D0%BA%D1%85%D0%B0%D1%83_%D0%9F%D0%BE._%D0%9F%D1%80%D0%B0%D0%BC%D1%83%D0%BA" target="_blank">
								<div 
									class="thumb" style="display:none; 
									background: url(image/photos/buakav.jpg)  no-repeat center top;" 
									id="1">
									<div class="bottom"></div>
								</div>
							</a>
 
							<a href="https://ru.wikipedia.org/wiki/%D0%9C%D0%B5%D0%B9%D0%B2%D0%B5%D0%B7%D0%B5%D1%80,_%D0%A4%D0%BB%D0%BE%D0%B9%D0%B4" target="_blank">
								<div 
									class="thumb" style="display:none; 
									background: url(image/photos/floyd.jpg) no-repeat center top;" 
									id="2">
									<div class="bottom"></div>
								</div>
							</a>
 
							<a href="https://ru.wikipedia.org/wiki/%D0%94%D0%B6%D0%BE%D0%BD%D1%81,_%D0%A0%D0%BE%D0%B9" target="_blank">
								<div 
									class="thumb" style="display:none; 
									background: url(image/photos/jons.jpg) no-repeat center top;" 
									id="3">
									<div class="bottom"></div>
								</div>
							</a>
 
							<a href="https://ru.wikipedia.org/wiki/%D0%9B%D0%BE%D0%BC%D0%B0%D1%87%D0%B5%D0%BD%D0%BA%D0%BE,_%D0%92%D0%B0%D1%81%D0%B8%D0%BB%D0%B8%D0%B9_%D0%90%D0%BD%D0%B0%D1%82%D0%BE%D0%BB%D1%8C%D0%B5%D0%B2%D0%B8%D1%87" target="_blank">
								<div 
									class="thumb" style="display:none; 
									background: url(image/photos/lomachenko.jpg) no-repeat center top;" 
									id="4">
									<div class="bottom"></div>
								</div>
							</a>
 
							<a href="https://ru.wikipedia.org/wiki/%D0%A2%D0%B0%D0%B9%D1%81%D0%BE%D0%BD,_%D0%9C%D0%B0%D0%B9%D0%BA" target="_blank">
								<div 
									class="thumb" style="display:none; 
									background: url(image/photos/tayson.jpg) no-repeat center top;" 
									id="5">
									<div class="bottom"></div>
								</div>
							</a>
 
						</div>
				</div>
			</div>
			
			
			<div id="films">
				<section id="top4"></section>
				<div id="films1">
					MY FAVORITE FILMS
				</div>
				
				<div id="films2">
					<a href="http://www.imdb.com/title/tt1675434/?ref_=fn_al_tt_1" target="_blank"><img class="i2" src="image/films/1+1.jpg" title="Intouchables" ></a>
				</div>
				
				<div id="films3">
					<a href="http://www.imdb.com/title/tt0944947/?ref_=nv_sr_1" target="_blank"><img class="i3" src="image/films/gameofthrones.jpg" title="Game of Thrones" ></a>
				</div>
				
				<div id="films4">
					<a href="http://www.imdb.com/title/tt1032755" target="_blank"><img class="i4" src="image/films/rocknrolla_1.jpg" title="RocknRolla" ></a>
				</div>
				
				<div id="films5">
					<a href="http://www.imdb.com/title/tt0111161/" target="_blank"><img class="i5" src="image/films/shawshank.jpg" title="The Shawshank Redemption" ></a>
				</div>
				
				<div id="films6">
					<a href="http://www.imdb.com/title/tt1475582/" target="_blank"><img class="i6" src="image/films/sherlok.jpg" title="Sherlock" ></a>
				</div>
			</div>
			
			
			<div id="cortona">
				<section id="top5"></section>
				<div id="cortona1">
					CORTONA
					<br><embed id="model" src="WOODCHIPPER_WI.wrl"
						width="80%"
						height="520px"
						type="application/x-cortona"
						pluginspage="http://www.cortona3d.com/cortona"
						vrml_splashscreen="true"
						vrml_dashboard="true"
						vrml_background_color="#CDCDCD"
						contextmenu="true">
					<div id="button1">
						<img src="image/num/1.jpg" title="Detail1" onclick="Switch('cortona/111.wrl')">
							<div id="button2">
								<img src="image/num/1.jpg" title="Detail2" onclick="Switch('cortona/MLG with training scenario.wrl')">
									<div id="button3">
										<img src="image/num/1.jpg" title="Detail3" onclick="Switch('cortona/Nanobox_IPC.wrl')">
											<div id="button4">
												<img src="image/num/1.jpg" title="Detail4" onclick="Switch('cortona/WOODCHIPPER_WI.wrl')">
														<div id="button5">
													<img src="image/num/1.jpg" title="Detail5" onclick="Switch('cortona/wtr. Water sample collection.wrl')">
														</div>
											</div>
									</div>
							</div>
					</div>

				</div>
				<div>
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
						<input type="submit" value="Leave feedback">
					</form>
				</div>

			</div>
					
				
			<div id="bottom">
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
									serguk1995@yandex.ru<br>+38 (099) 248-68-32<br>Kharkov 2015
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


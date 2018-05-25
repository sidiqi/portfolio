<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!--Custom CSS-->
		<link rel="stylesheet" type="text/css" href="css/social.css"/>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link rel="stylesheet" href="css/animate.css"/>
		<style type="text/css">
		.br2 {
	    border-radius: 0px !important;
	    width: 290px ;
	    height: 55px;
		}
		a {
		color: white ;
		font-size: 16px;
		text-decoration: none !important;
		}
		a:focus,a:hover {
	    color: white ;

		}
		li {
			font-family: Verdana;
			font-size: 16px;
		}
		</style>


		<?php include 'functions.php' ?>
		<title>Портфолио</title>
		 <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
	</head >


	<body>

<style type="text/css">

/*Мобильная версия*/
@media only screen and (max-width: 1024px) {

	#test11 {
		height: 1050px;
	}

	#works {
 padding: 3px;
	}

    #border {
        font-size:14px;
        letter-spacing: 2px;
    }

    #about {
    	height: 1700px !important;
    }

    #my_works {
    	height: 350px !important;
    }

    #contacts {
    	margin-bottom:  -500px !important;
    	position: relative;
    }
    #order_service {
	height: 1200px !important;
	}

	h3 {
	  letter-spacing: 2px;
	  text-transform: uppercase;
	  font: 20px "Lato", sans-serif;
	  color: #111;
	}
     .bgimg-2, .bgimg-3 {
        background-attachment: ;
        min-height: 70px;
    }
    #carouselExampleControls{
    	margin-top: -60px;
    }
    #show_works{
    margin-top: 15% ;
    }
}
/*Мобильная версия*/

</style>
<!--Section 1-->
<div class="bgimg-1">
	<nav class="navbar navbar-expand-lg" id="menu">
		<div  id="home" class="container wow fadeInDown">
			<a class="navbar-brand"><h4>Павел Ипатов</h4></a>
				<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="#"><h4></h4></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="#about"><h4>Обо мне</h4></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="#my_works"><h4>Мои работы</h4></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="#order_service"><h4>Заказать услугу</h4></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="#contacts"><h4>Контакты</h4></a>
							</li>
						</ul>
				</div>
		</div>
	</nav>
	<div class="caption wow fadeInDown">
		<span class="border" id="border">Портфолио Web-разработчика</span>
	</div>
</div>

<!--/Section 1 -->

<!--Section 2-->
<div id="about" style="height:950px;">
	<div class="container" id="test11">
		<h2 class="text-center p-5"><b>Мои навыки</b></h2>
			<div class="row">
					<div class="col-xs-12 col-md-4 text-center">
						<img class="card-img-top" style="width:250px;" src="img/bootstrap-html5-css3.png" alt="Card image cap">
					</div>
					<div style="padding-top:10px" class="col-md-8"> 
						<li>Cоздание web-страницы, содержащие все необходимые компоненты: текстовое наполнение, гиперссылки, графическое наполнение</li>
						<li>Умение пользоваться библиотекой компонентов Bootstrap 4</li>
						<li>Стилизовать элементы текста на странице HTML5, используя CSS3 эффективно использовать возможности каскадных таблиц стилей CSS</li>
						<li>Владение системой контроля версий Git</li>
					</div>
			</div>
			<br>
			<hr>	
			<br>
			<div class="row">
					<div class="col-md-4 text-center">
						<img style="width:140px" src="img/javascript.png" alt="Card image cap">
					</div>
					<div style="padding-top:70px" class="col-md-8"> 
						<li>Знание синтаксиса JavaScript и его использование в HTML5</li>
						<li>Использование JavaScript для управления DOM и обработкой событий</li>
						<li>Использование библиотеки jQuery для упрощения кода на JavaScript</li>
					</div>
			</div>
			<br>
			<hr>
			<br>
			<div class="row">
					<div class="col-md-4 text-center">
						<img style="width:140px" src="img/php.png" alt="Card image cap">
					</div>
					<div style="padding-top:30px" class="col-md-8"> 
						<li>Знание синтаксиса PHP</li>
						<li>Знание основных функций и конструкций PHP</li>
						<li>Работа с веб-формами: принимать данные HTML форм и обрабатывать их</li>
						<li>Основы объектно-ориентированного программирования в PHP</li>
						<li>Основы СУБД MySQL и ее связи с функциями PHP</li>
					</div>					
			</div>


  		</div>
	</div>
			<div class="bgimg-2 col-xs-12 hidden-xs">
				<div class="caption">
			</div>
</div>
<!--/Section 2-->

<!--Section 3-->

<div id="my_works" class="img1" style="height:1000px">
	<div class="container">
		<h2 class="text-center p-5"><b>Мои работы</b></h2>
<!--Carousel-->
<div id="works">
	<div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="img/slide4.png">
	     <div class=" d-none d-md-block text-center">
   			 <h5>Реплика сайта ladressenyc.com на Bootstrap 4</h5>
  		</div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/slide5.png">
	       <div class=" d-none d-md-block text-center">
   			 <h5>Реплика сайта ladressenyc.com на Bootstrap 4</h5>
  		</div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/slide8.png">
	       <div class=" d-none d-md-block text-center">
   			 <h5>Книга отзывов на PHP</h5>
  		</div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/slide3.png">
	       <div class=" d-none d-md-block text-center">
   			 <h5>Набросок сайта из Paint на чистом Bootstrap 4</h5>
  		</div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/slide9.png">
	       <div class=" d-none d-md-block text-center">
   			 <h5>Прототип сайта e46nrr.axshare.com</h5>
  		</div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/slide10.png">
	       <div class=" d-none d-md-block text-center">
   			 <h5>Прототип сайта e46nrr.axshare.com</h5>
  		</div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/slide11.png">
	       <div class=" d-none d-md-block text-center">
   			 <h5>Парсинг товатор с возможностью фильтрации</h5>
  		</div>
	    </div>
		<div class="carousel-item">
	      <img class="d-block w-100" src="img/slide7.png">
	       <div class=" d-none d-md-block text-center">
   			 <h5>Анимация автомобиля JS</h5>
  		</div>
	    </div>
		<div class="carousel-item">
	      <img class="d-block w-100" src="img/slide1.png">
	       <div class=" d-none d-md-block text-center">
   			 <h5>HTML И СSS сетка</h5>
  		</div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/slide2.png">
	       <div class=" d-none d-md-block text-center">
   			 <h5>Сетка с использование только возможностей Bootstrap 4</h5>
  		</div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="img/slide6.png">
	       <div class=" d-none d-md-block text-center">
   			 <h5>Калькулятор</h5>
  		</div>
	   </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>	

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	</div>
</div>			
<!--/Carousel-->
	<div class="wow fadeInUp text-center" style="margin-top: -150px; padding-bottom: 90px">
			<button onclick="location.href = 'projects.php'" id="show_works" type="button" class="btn btn-dark br2 "><h6>Посмотреть все работы</h6></button>
		</div>
			<div class="bgimg-3">
			  	<div class="caption">

			</div>

	</div>

</div>

<!--/Section 3-->

<style type="text/css">
.br2 {
    border-radius: 0px !important;
    width: 315px ;
    height: 50px;
}
h5 {
background-color: black;
  letter-spacing: 0px;
  font: 25px "Lato", sans-serif;
  color: white;
  text-shadow: 1px 1px 1px black, 0 0 2em; /* Параметры тени */
}
h6 {

  letter-spacing: 0px;
  font: 25px "Lato", sans-serif;
  color: white;
  text-shadow: 1px 1px 1px black, 0 0 2em; /* Параметры тени */
}
</style>

<!--Section 4-->
<div  id="order_service" class="img1" style="height:100vh">
	<div class="container">
		<h2 class="text-center p-5"><b>Заказать услугу</b></h2>
			<div class="row">
				<div class="col-xs-12 col-md-6 wow fadeInLeft">
				  	<table class="table">
					  <thead>
						 <tr>
							<th scope="col">Вид работы</th>
							<th scope="col">Сроки</th>
							<th scope="col"></th>
							<th scope="col">Стоимость</th>
						 </tr>
					  </thead>
					  <tbody>
						 <tr>
							<th scope="row">Сайт-визитка</th>
							<td>1-2 дн.</td>
							<td></td>
							<td>990 Руб.</td>
						 </tr>
						 <tr>
							<th scope="row">Лендинг-пейдж</th>
							<td>3-4 дн.</td>
							<td></td>
							<td>2990 Руб.</td>
						 </tr>
						 <tr>
							<th scope="row">Частичная верстка</th>
							<td>1-2 дн.</td>
							<td></td>
							<td>1000 Руб.</td>
						 </tr>
						  <tr>
							<th scope="row">Проверка на вирусы</th>
							<td>1-2 дн.</td>
							<td></td>
							<td>1500 Руб.</td>
						 </tr>
						  <tr>
							<th scope="row">Консультация</th>
							<td>1-2 дн.</td>
							<td></td>
							<td>500 Руб.</td>
						 </tr>
						  <tr>
							<th scope="row">Изменение разделов</th>
							<td>1-2 дн.</td>
							<td></td>
							<td>990 Руб.</td>
						 </tr>
						  <tr>
							<th scope="row">Устранение ошибок</th>
							<td>2-3 дн.</td>
							<td></td>
							<td>2000 Руб.</td>
						 </tr>
					  </tbody>
					</table>
				</div>

				<div class="col-xs-12 col-md-6  wow fadeInRight">

<style type="text/css">
	#b15:checked ~ #list1 { display: none; }
	#a15:checked ~ #list2 { display: none; }
</style>

<script type="text/javascript">
function calc(){
if (document.getElementById('a15').checked)
	  var flag15 = document.getElementById('list1').options[document.getElementById('list1').selectedIndex].value;
if (document.getElementById('b15').checked)
	  var flag15 = document.getElementById('list2').options[document.getElementById('list2').selectedIndex].value;
document.getElementById('rezult').innerHTML = parseFloat(flag15);
}
 function output1()
        {
            alert("Заявка принята!");
        }
</script>



<form method="post" onchange="calc()">
	<div class="form-group">
	<input  type="text" name="name" class="form-control br0" id="exampleFormControlInput1" placeholder="Имя" required>
	</div>
	<div class="form-group">
	<input  type="email" name="email" class="form-control br0" id="exampleFormControlInput1" placeholder="Email" required>
	</div>
	<div class="form-group">
	<input type="text" name="number" class="form-control br0" id="exampleFormControlInput1" placeholder="Контактный телефон" required>
	</div>
	<div class="form-group">
	<textarea name="comment" class="form-control br0" id="exampleFormControlTextarea1" placeholder="Комментарий" rows="6"></textarea>
	</div>


<!--Криво работает-->
<input type="radio" id="a15" checked="checked" name="r1az15" />Поддержка сайта 
<input type="radio" id="b15" name="r1az15"/>Создание сайта

<select class="custom-select br0" id="list1">
<option value="0">Заказать бесплатный звонок</option>
<option value="1000">Частичная верстка</option>
<option value="1500">Проверка сайта на вирусы</option>
<option value="500">Консультация</option>
<option value="990">Добавление и изменение разделов</option>
<option value="2000">Устранение ошибок</option>
</select>

<select class="custom-select" id="list2">
<option value="0">Заказать бесплатный звонок</option>
<option value="990">Сайт-визитка</option>
<option value="2990">Лендинг-пейдж</option>
</select>
<br>
<br>


<div class="container">
	<div class="row">
		<h3>Цена: <output id="rezult">0</output> Руб.</h3>

<!-- Button -->
	
			<input style="margin-top: -10px;" type="submit" name="submit" id="submit" class="btn btn-dark br0 right"  data-toggle="modal" data-target="#exampleModalCenter" type="submit" value="Оставить заявку"  onClick="output()">
		
	</div>
</div>
</form>

				  </div>
  
			  </div>



  </div>
  </div>


  <script type="text/javascript">
var t;
function up() {
  var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);
  if(top > 0) {
    window.scrollBy(0,-100);
    t = setTimeout('up()',20);
  } else clearTimeout(t);
  return false;
}
</script>
			  <div class="container-fluid wow fadeInUp" align="right"><a  onclick="return up()"><img src="img/u1p.png"></a></div>

			 
  </div>
</div>
<!--/Section 4-->


<!--footer-->
<footer class="py-4" id="contacts" style="background-color:black">
	<div class="container  wow fadeInUp ">
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="social github">
				<a href="https://github.com/sidiqi/portfolio" target="_blank"><i class="fa fa-github fa-2x"></i></a>
				</div>
				<div class="social google-pluse">
				<a href="https://plus.google.com/+yapavel96" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>
				</div>
				<div class="social telegram">
				<a href="https://t.me/IpatovP96" target="_blank"><i class="fa fa-paper-plane fa-2x"></i></a>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 ">	
				<p class="m-0 text-center text-white"><b>app-lab.ru</b> </p>
				<p class="m-0 text-center text-white">Портфолио 2018</p>
			</div>			
		</div>
	</div>
</footer>
<!--/footer-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>




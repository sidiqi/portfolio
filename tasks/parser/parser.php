<?php $link = mysqli_connect('localhost', 'root', '', 'products');?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!--My CSS-->
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link rel="stylesheet" type="text/css" href="css/animate.css" />
		<title>Купить процессоры Intel</title>
		<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
	</head>

	<body>

	<div class="bgimg-2">
		<div class="caption">
	</div>

<!--Navbar-->
<nav class="navbar navbar-light  justify-content-between line generator" style="background-color: #0071c5">
	<div id="home" class="container">
	<a  class="logo"><img style="width: 70px; margin-right: 30px" src="https://cdn.freebiesupply.com/logos/large/2x/intel-logo-black-and-white.png"><font size="5" color="white">Intel Store</font></a>
		
	</div>
</nav>
<!--/Navbar-->

<style type="text/css">
	
</style>


<!--Section 1-->
<div class="container " style="height: 100%; background-color:white;">
	<div class="row">
			<div class="col-md-3">
				<br><div class="page-header"><h5>Процессор</h5></div><br>
				<div class="list-group">
  <a href="?cpu=cpu" class="list-group-item list-group-item-action">Показать все</a>
  <a href="?cpu=cpui9" class="list-group-item list-group-item-action">Intel Core i9</a>
  <a href="?cpu=cpui7" class="list-group-item list-group-item-action">Intel Core i7</a>
  <a href="?cpu=cpui5" class="list-group-item list-group-item-action">Intel Core i5</a>
  <a href="?cpu=cpui3" class="list-group-item list-group-item-action">Intel Core i3</a>
  <a href="?cpu=cpuP" class="list-group-item list-group-item-action">Intel Core Pentium</a>
</div>



			</div>

			<div class="col-md-9">
				<br><h5>Каталог товаров</h5> <br>
			




			
			<?php 
			$sql = $link->query('SELECT * FROM ' . $_GET['cpu'] );
			$link->close;

			while($result = $sql->fetch_assoc()): ?>

							
<div class="media" style="background-color: ">
  <img class="mr-2" width="140px" src="<?=$result['img']?>">
  <div class="media-body">
    <h5 class="mt-0"><?=$result['title']?></h5>
	<p><?=$result['text']?></p>
	<h5><?=$result['price']?></h5>
  </div>
</div>

<hr>

			<? endwhile ?>	
						
		</div>

	</div>

<script type="text/javascript">
var t;
function up() {
  var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);
  if(top > 0) {
    window.scrollBy(0,-200);
    t = setTimeout('up()',20);
  } else clearTimeout(t);
  return false;
}
</script>
  <div style="width: 1300px; margin-bottom: 10px "  class="container-fluid wow fadeInUp" align="right"><a onclick="return up()" ><img  style="width: 50px" src="img/up.png"></a></div>
</div>
<!--/Section 1-->


<!--footer-->
<footer class="py-4 line2 generator " style="background-color: #0071c5;">
	<div class="container">
		<p class="m-0 text-center text-light"><b>app-lab.ru</b></p>
	</div>
</footer>
<!--/footer-->


	 <!-- Optional JavaScript -->
	 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	 			<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
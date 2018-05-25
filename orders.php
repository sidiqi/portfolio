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
		<?php include 'functions.php' ?>
		<title>Заказы</title>
	</head>


	<body>

<!--Navbar-->
<div style="background-color:black" class="">
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand"><h4>Павел Ипатов</h4></a>
				<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php"><h4>Главная</h4></a>
							</li>
							
						</ul>
				</div>
		</div>
	</nav>
	
<!--/Navbar-->


<!--Section 1-->
<div style="min-height: 100vh; background-color:white;">
	<div class="container">
<br>
	<h3>Заказы:</h3>
		
<?php 
$f = fopen('orders.txt', 'r');
while (!feof($f) ) {
      echo fgets($f).'<br>';
     }
?>

  		</div>
	</div>


<!--/Section 1-->

<style type="text/css">
	
</style>

<!--footer-->
<link rel="stylesheet" type="text/css" href="css/social.css" />
<footer class="py-4" style="background-color: black;">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="social github">
				<a href="https://sidiqi.github.io/" target="_blank"><i class="fa fa-github fa-2x"></i></a>
				</div>
				<div class="social google-pluse">
				<a href="https://plus.google.com/+yapavel96" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>
				</div>
				<div class="social telegram">
				<a href="https://t.me/IpatovP96" target="_blank"><i class="fa fa-paper-plane fa-2x"></i></a>
				</div>
			</div>
			<div class="col-md-4">	
				<p class="m-0 text-center text-white"><b>app-lab.ru</b> </p>
				<p class="m-0 text-center text-white">Портфолио 2018</p>
			</div>
		</div>
	</div>
</footer>



<!--/footer-->


	 <!-- Optional JavaScript -->
	 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
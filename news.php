<?php

			session_start();
	    	require 'reg/connect.php';

			if (isset($_POST['username']) and isset($_POST['password'])) 
			{
				$username = $_POST['username'];
				$password = $_POST['password'];

				$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
				$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
				$count = mysqli_num_rows($result);

				if($count == 1)
				{
					$_SESSION['username'] = $username;
				}else
				{
					$flsmsng = 'Ошибка!';
				}
			}

			if (isset($_SESSION['username'])) {
				$username = $_SESSION['username'];
			}
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="styles/news.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	<title>Новости</title>
	<style type="text/css">
			#reg
			{
				margin-left: -200px;
				margin-top: 10px;
			}
	</style>
</head>
<body>
	<div class="top_menu">
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark" id="top">
				<a class="navbar-brand" href="index.php">Jornd News</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation" id="buter">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="navbar-collapse collapse" id="navbarsExample03">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Главная</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="news.php">Новости</a>
						</li>
						<li class="nav-item dropdown">
							<form class="form-inline my-2 my-lg-0">
									<div class="d6">
										<form>
										<input type="text" placeholder="Поиск" id="search">
										<button type="submit"></button>
										</form>
								</div>
							</form>
						</li>
		     <li class="nav-item dropdown">
						<div class="wrapper">
							<input type="checkbox" id="checkbox"/>
							<label for="checkbox"></label>
						</div>
				 </li>

				<?

					if (isset($_SESSION['username'])) {
						$username = $_SESSION['username'];
						echo "<div class='btn-group' role='group' aria-label='Basic example' id='reg'>
							    <a href='reg/profile.php'>
								 <button type='button' class='btn btn-secondary'>Ваш профиль</button>
							   </a>
							 </div>";
					}else
					{
						echo "<div class='btn-group' role='group' aria-label='Basic example' id='reg'>
					<a href='reg/index.php'>
						<button type='button' class='btn btn-secondary'>Регестрация</button>
					</a>
					</div>";
					}

				?>

					</ul>
				</div>
			</nav>
</div>
<br><br><br><br><br>
<div id="test">
<div id="test2">
<div id='search_result'>
		<div class="card" id="prog">
		  <div class="card-body">
		    <h5 class="card-title">MacOs Catalina</h5>
		    <p class="card-text">Поддерживать новую операционную систему из ноутбуков Apple официально будут Macbook Air, Macbook Pro, Mac Mini, iMac, выпущенные с середины 2012 года или позже. А также все iMac Pro, Mac Pro - с середины 2013 года или позднее, Macbook – с начала 2015 года и позднее. Иными словами, все компьютеры, имеющие предустановленную OS X 10.9 Mavericks на борту или более новую. macOS Catalina может быть успешно также установлена и на компьютеры, выпущенные не Apple (что именуется на жаргоне как Hackintosh). Общими минимальными системными требованиями для установки является Intel i5-процессор, и Intel HD Graphics от 4000 и выше, 4 ГБ ОЗУ, и около 20 ГБ места на жестком диске.</p>
		    <a href="#" class="card-link" id="button_1">Подробнее</a>
		  </div>
		</div>
		<img src="photos/catalina.png" id="news_aga">
				<div class="card text-center" id="news">
		  <div class="card-body">
		    <h5 class="card-title">Joker</h5>
		    <p class="card-text">If you’ve been waiting to buy a Nespresso single-serve coffee machine, now is the time to pull the trigger. The Nespresso Vertuoline coffee and espresso maker is now just $100 on Amazon, and we haven’t seen its price this low since November 2018. But if you’re interested, act quickly, as this is a one-day sale.</p>
		    <a href="#" id="more_a">Подробнее</a>
		  </div>
		</div>
<br><br><br><br><br><br><br><br><br>
		<div class="card text-center" id="news_l">
		  <div class="card-body">
		    <h5 class="card-title">Vertiv</h5>
		    <p class="card-text">В 2019 году Vertiv объявила о запуске новой партнерской программы VPP, краеугольным камнем которой стала новая система поощрения EMEA Vertiv Incentive (VIP), позволяющая авторизованным реселлерам зарабатывать бонусные баллы за каждую продажу и быстро получать денежные вознаграждения. Стимулы также включают специальные скидки и фонды для развития бизнеса для «золотых» и «платиновых» партнеров. Как вы можете прокомментировать этот шаг?</p>
		    <a href="#" id="more_a">Подробнее</a>
		  </div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br>
		<div class="card text-center" id="news_w">
		  <div class="card-body">
		    <h5 class="card-title">Joker</h5>
		    <p class="card-text">Depending on which capsules you buy, this machine can make espresso (1.35 oz.), double espresso (2.7 oz.), gran lungo (5 oz.), coffee (7.7 oz.) and alto (14 oz.) preparations. This package also comes with 30 coffee capsules (10 Stormio, 10 Odacio, 10 Melozio) so you can start drinking immediately before you visit a Nespresso retail kiosk or sign up for Nespresso pod deliveries. Make sure to order some espresso capsules, as this is where the machine really shines.</p>
		    <a href="#" id="more_a">Подробнее</a>
		  </div>
		</div>

		<div class="card" id="news_q">
		  <div class="card-body">
		    <h5 class="card-title">MacOs Catalina</h5>
		    <p class="card-text">Every time Google updates its browser, it publishes release notes aimed at enterprises to highlight upcoming additions, substitutions, enhancements and modifications. Here's some of what's coming</p>
		    <a href="#" class="card-link" id="button_1">Подробнее</a>
		  </div>
		</div>
		<img src="photos/google.png" id="news_aga_1">
</div>
</div>
</div>
	<script src="js/search.js"></script>
	<script src="js/darktheme.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" ></script>
</body>
</html>

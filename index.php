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
	<title>Главная</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">Jornd News</a>
		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation" id="buter">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse" id="navbarsExample03">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item" id="href-1">
					<a class="nav-link active" id="home" href="index.php">Главная</a>
				</li>
				<li class="nav-item" id="href-2">
					<a class="nav-link"  id="news_1" href="news.php">Новости</a>
				</li>
				<li class="nav-item dropdown">
					<form class="form-inline my-2 my-lg-0">
							<div class="d6">
								<form>
								<input type="text" placeholder="Поиск" id="search" autocomplete="off">
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
		
			</ul>
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
				<button type='button' class='btn btn-secondary'>Регистрация</button>
			</a>
			</div>";
			}

			?>

		</div>
	</nav>
<br><br><br><br><br>
<div id="test">
<div id="test2">
<div id='search_result'>
	<div class="news">
		<div class="card" id="prog">
		  <div class="card-body">
		    <h5 class="card-title">Мы обновили дизайн верхнего меню</h5>
		    <p class="card-text">для оптимизации на мобильные устройста. Говоря проще мы сделали вам и разработчикам легче. Мы думаем вы уже замечали проблемы в верхнем меню. Теперь ссылки на другие страницы сайта не будут смещаться вверх, вниз и т.д. Никакого гемароя для разработчиков. Так же это фиксит проблему того, что раньше у вас не было тёмной темы. Теперь кнопки поиска и переключатель рядом, и никуда не улетают.</p>
		  </div>
		</div>

		<img src="photos/update.png" id="news_aga">

		<div class="card text-center" id="news">
		  <div class="card-body">
		    <h5 class="card-title">Народ, мы сделали темную тему! </h5>
		    <p class="card-text">Теперь ваши глаза, когда вы читайте новости на нашем сайте не будут болеть.</p>
		  </div>
		</div>
<br><br><br><br><br><br><br><br><br>
		<div class="card text-center" id="news_l">
		  <div class="card-body">
		    <h5 class="card-title">Мы скоро сделаем несколько статей,</h5>
		    <p class="card-text">пофиксим несколько багов, и наш проект будет готов. Возможно скоро добавим чатик и комментарии. После этого будем делать предложку, где вы сами сможете писать статьи, они будут приходить в модерацию, и если они соответветствуют правилам (которые мы тоже скоро добавим), статьи будут опубликованы. Скоро будет сделана предложка того, что мы можем добавить на сайт. Планируется куча идей, которые довольно просто реализуются, по этому скоро вы их увидите. Думаю это будет интересно.</p>
		  </div>
		</div>

		<br><br><br><br><br><br><br><br><br><br><br>
				<div class="card text-center" id="news_w">
		  <div class="card-body">
		    <h5 class="card-title">Спасибо что вы нас читайте.</h5>
		    <p class="card-text">Мы стараемся для вас! Можете рассказывать о нас друзьям, а чем читателей больше, тем вам же и лучше. Скоро поймете почему, идею я думаю мы напишем на главной странице сайта. Надеюсь вам понравится!</p>
		  </div>
		</div>

		<div class="card" style="width: 18rem;" id="news_q">
		  <img src="photos/updade_on.png" class="card-img-top" alt="...">
		  <div class="card-body">
		    <p class="card-text">Переключать тему вы можете в верхнем меню, кружком-переключателем.</p>
		  </div>
		</div>
		</div>
</div>
</div>
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

<div style="position: fixed; float: right; width: 50px; height: 100%; top: 0px; z-index: 2" id='chaticon'></div>
<div id="chat" style="position: fixed; float: right; width: 400px; height: 100%; top: 0px; z-index: 2; background: white; display: none"></div>

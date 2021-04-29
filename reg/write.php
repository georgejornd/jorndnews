	

	<?
			session_start();
	    	require 'connect.php';

			if (isset($_POST['username']) and isset($_POST['password'])) 
			{
				$username = $_POST['username'];
				$password = $_POST['password'];
				$admin = false;

				$query = "SELECT * FROM users WHERE username='$username' and password='$password' and admin='$admin";
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

	    	$data = $_POST;

	    	if (isset($data['ready'])) 
	    	{

	    		$errors =  array();

	    		if (trim($data['title']) == '') 
	    		{
	    			$errors[] = 'Вы не ввели название';
	    		}

	    		if (trim($data['text']) == '') 
	    		{
	    			$errors[] = 'Вы не ввели текст';
	    		}

	    		if (empty($errors)) 
	    		{
			    	if (isset($_POST['title']) && isset($_POST['text'])) 
					{
						$title = $_POST['title'];
						$text = $_POST['text'];

						$query = "INSERT INTO articles_user (title, text) VALUES ('$title','$text')";
						$result = mysqli_query($connection, $query);

						if ($result) {
							echo "<script type='text/javascript'>
									alert('Ваша статья добавлена в очередь на модерацию :D');
								  </script>";
						}else
						{
								echo "<script type='text/javascript'>
									alert('Какая-то ошибка, повторите снова ');
								      </script>";
						}
					}
	    		}else
	    		{
	    			echo "<script type='text/javascript'>
									alert(.array_shift($errors).);
								  </script>";
	    		}
	    	}
	?>
			

<!DOCTYPE html>
<html>
<head>
	<title>Написать стаьтью</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script type="text/javascript" nonce="259b01e0ace746be9fb4e90360b" src="//local.adguard.org?ts=1573487093934&amp;name=AdGuard%20Assistant&amp;name=AdGuard%20Extra&amp;type=user-script"></script><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

	<style type="text/css">
		
		#emailHelp
		{
			position: absolute;
			margin-left: 400px;
		}

	</style>

</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Jornd News</a>
		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation" id="buter">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse" id="navbarsExample03">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item" id="href-1">
					<a class="nav-link" id="home" style="cursor: default;" href="../index.php">Главная</a>
				</li>
				<li class="nav-item" id="href-2">
					<a class="nav-link"  id="news_1" style="cursor: pointer;" href="../news.php">Новости</a>
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
					<label for="checkbox" id="ladel1"></label>
				</div>
		 </li>
			</ul>

					<div class='btn-group' role='group' aria-label='Basic example' id='reg'>
					    <a href='profile.php'>
						 <button type='button' class='btn btn-secondary'>Ваш профиль</button>
					   </a>
					</div>
		</div>
	</nav>


			<?php

	    	require 'connect.php';

	    	$data = $_POST;

	    	if (isset($data['ready'])) 
	    	{

	    		$errors =  array();

	    		if (trim($data['title']) == '') 
	    		{
	    			$errors[] = 'Вы не ввели название';
	    		}

	    		if (trim($data['text']) == '') 
	    		{
	    			$errors[] = 'Вы не ввели текст';
	    		}

	    		if (empty($errors)) 
	    		{
			    	if (isset($_POST['title']) && isset($_POST['text'])) 
					{
						$title = $_POST['title'];
						$text = $_POST['text'];
						$author = $username;

						$query = "INSERT INTO articles (title, text, author) VALUES ('$title','$text','$author')";
						$result = mysqli_query($connection, $query);

						if ($result) {
							echo "<script type='text/javascript'>
									alert('Ваша статья добавлена в очередь на модерацию :D');
								  </script>";
						}else
						{
								echo "<script type='text/javascript'>
									alert('Какая-то ошибка, повторите снова ');
								      </script>";
						}
					}
	    		}else
	    		{
	    			echo "<script type='text/javascript'>
									alert(.array_shift($errors).);
								  </script>";
	    		}
	    	}	
			?>


				<form method='POST'>
					  <div class='form-group' id='login'>
					    <label for='exampleInputEmail1'>Название</label>
					    <input class='form-control' placeholder='Введите названия для статьи' name='title'>
					  </div>
					  <div class='form-group' id='password'>
					    <label>Текст</label>
					    <input class='form-control' id='text_article' placeholder='Напиште текст который будет находиться в статье' name='text'>
					  </div>
					  <button type='submit' class='btn btn-dark' id='ready' name="ready">Предложить статью</button>
					   <small id='emailHelp' class='form-text text-muted'>Если ваша статья похожа на статью, она появиться на сайте</small>

					</form>
	<script src="js/search.js"></script>
	<script src="js/darktheme.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" ></script>
</body>
</html>







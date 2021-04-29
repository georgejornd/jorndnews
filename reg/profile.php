<?php

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
	<title>Ваш профиль</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script type="text/javascript" nonce="259b01e0ace746be9fb4e90360b" src="//local.adguard.org?ts=1573487093934&amp;name=AdGuard%20Assistant&amp;name=AdGuard%20Extra&amp;type=user-script"></script><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	<style type="text/css">
		body
		{
			background: white;
		}

		#hello_user
		{
			position: absolute;
			background: white;
			margin-top: 0%;
			transition: 1s;
			float: right;
			left: 0;
		}

		#next:hover
		{
			background-color: black;
			transition: 0.2s;
		}

		#previous:hover
		{
			background-color: black;
			transition: 0.5s;
		}

		#previous:not:(hover)
		{
			transition: 0.5s;
		}


		#next:not:(hover)
		{

			transition: 0.2s;
		}

		#carouselExampleControls
		{
			position: absolute;
			width: 500px;
			right: 0px;
			float: right;
		}

		@media (min-width: 0px) and (max-width: 500px)
		{
			#write
			{
				position: relative;
				margin-top: 5px;
			}
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
			<?

			if (isset($_SESSION['username'])) {
				$username = $_SESSION['username'];
				echo "<div class='btn-group' role='group' aria-label='Basic example' id='reg'>
					    <a href='profile.php'>
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
		</div>
	</nav>

		

					
			<div id='carouselExampleControls' class='carousel slide' data-ride='carouse'>
			<h1>Ваши статьи</h1>
			<div class='carousel-inner'>
			<?php

			$articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 100");

				while ( $article = mysqli_fetch_assoc($articles) ) 
			{

				if ($article['author'] == $username) {
					?> 
			     <div class="carousel-item active">
			      <h2><? echo $article['title']; ?></h2>
			      	  <? echo $article['text']."<hr>"; ?>
			    </div>
			    </div>
			   
			
			   <?
				}
			}
			?> </div>
			  <a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
			    <span class='carousel-control-prev-icon' aria-hidden='true' id='previous'></span>
			    <span class='sr-only'>Previous</span>
			  </a>
			  <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
			    <span class='carousel-control-next-icon' aria-hidden='true' id='next'></span>
			    <span class='sr-only'>Next</span>
			  </a>
			</div>

	<?php

	    		if ($username == "georgejornd" | $username ==  "Shigen" | $username == "Stuff")
	  			{
	    			echo "<div class='jumbotron' id='hello_user';'>
	    				<h1 class='display-4'>".$username."</h1>
						  <hr class='my-4'>
						  <a href='write.php'><button type='button' style='background-color: #00cc00;' class='btn btn-secondary' id='write'>Написать статью</button></a>
						  <a href='logout.php'><button type='button' style='background-color: #ff5c33;' class='btn btn-secondary' id='write'>Выйти из аккаунта</button>
						  </a>
						  <a href='administration.php'><button type='button' style='background-color: #4f6ed1;' class='btn btn-secondary' id='write'>Администрация</button></a>";
	    		}else
	    		{
	    			echo "<div class='jumbotron' id='hello_user'>
				  <h1 class='display-4' id='write'>".$username."</h1>
				  <hr class='my-4'>
				  <a href='write.php'><button type='button' style='background-color: #00cc00;' class='btn btn-secondary' id='write'>Написать статью</button></a>
				  <a href='logout.php'><button type='button' style='background-color: #ff5c33;' class='btn btn-secondary' id='write'>Выйти из аккаунта</button></a>";
	    		}


		  ?>
		</div>

	<script src="js/search.js"></script>
	<script src="js/darktheme.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" ></script>
</body>
</html>













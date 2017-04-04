
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Leader Assistance</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="jquery/jquery-3.2.0.min.js"></script>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<link href="css/style.css" rel="stylesheet">
	
	<script src="js/modal.js"></script>
	<link rel="shortcut icon" href="image\favicon.ico" type="image/x-icon">
</head>
<body>
	<!-- Modal -->
	<section class="container login-modal-window" id="card-container">
  		<div id="card">
    		
    		<figure class="login-form">
				<div class="row inner-container">
					<div class="col-md-7 modal-white">
						<h4> Вход в личный кабинет </h4>						
						<form class="form-group">
							<input type="email" class="form-control" placeholder="Введите email">
						</form>
						<button type="button" class="btn btn-success">Войти в личный кабинет</button>
					</div>
					<div class="col-md-5 modal-grey">
						<h4> Регистрация </h4>
						<p> Если вы здесь впервые, создайте личный кабинет для начала работы</p>
						<form>
							<button type="button" class="btn btn-default" id="signin-button">Создать кабинет</button>
						</form>
					</div>
				</div>				
			</figure>
			<figure class="signin-form">
            	<div class="row inner-container">
					<div class="col-md-7 modal-white">
						<h4> Регистрация </h4>
						<p> На указанный email Вам придет пароль от Личного кабинета </p>						
						<form class="form-group">
							<input type="email" class="form-control" placeholder="Введите email">
												
						</form>
						<button type="button" class="btn btn-success">Создать кабинет</button>
					</div>
					<div class="col-md-5 modal-grey">
						<h4>Войти в личный кабинет </h4>
						<p>Если вы зарегистрированы, войдите в личный кабинет для начала работы.</p>
						<form>
							<button type="button" class="btn btn-default" id="login-button">Войти</button>
						</form>
					</div>
				</div>	
			</figure>
                    
    			
  		</div>
	</section>
	<div class="bg-window" id="bg-window">
	</div>



	<header>
		
			<nav class="navbar navbar-static-top">
			  <div class="container">
				<div class="navbar-right form-group" role="group">
					
						<a class="modal-link"  href="#" id="navbar-link-login" >Вход в личный кабинет</a>
						<button type="button" class="btn btn-default navbar-btn" id="navbar-link-signin">Регистрация</button>
					
				</div>
				
				<div class="navbar-header">
				   <a class="navbar-brand" href="#"><img src="image\logo-min.png" height="30">
					<p> <strong> AsLeader </strong> </p>
				   </a>
				</div>
					

			  </div><!-- /.container-fluid -->
			</nav>
			<div class="clearfix">...</div>
			<nav class="navbar navbar-second ">
			  <div class="container">
				<form class="navbar navbar-form navbar-right">
					<div class="form-group">
						<h4> <a href="#">Задать вопрос</a>
						<span> 8-800-000-00-01 </span>
						</h4>
					</div>
					
				</form> 
			</div>
			</nav>
		
	<nav class="navbar navbar-inverse navbar-main-page">
		<div class="container">
			<ul class="nav navbar-nav ">
				<li><a href="#">О проекте</a></li>
				<li><a href="#">Документы</a></li>
				<li><a href="#">Цены</a></li>
				<li><a href="#">Отзывы</a></li>
				<li><a href="#">Контакты</a></li>				
			</ul>
				
			
		</div>
	</nav>

	

	</header>
	
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<div class="item active">
		  <img src="image\Office-Door-1Small.jpg" alt="...">
		  <div class="carousel-caption">
			OFFICE
		  </div>
		</div>
		<div class="item">
		  <img src="image\print-divorce-papers-online_b51a6e7dbee3df2d_dV1j04lPQ42KGK1zd33Vqg.jpg" alt="...">
		  <div class="carousel-caption">
			PAPERS
		  </div>
		</div>
		<div class="item">
		  <img src="image\Technology-Company.jpg" alt="...">
		  <div class="carousel-caption">
			LAWERS
		  </div>
		</div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
	<div class="jumbotron">
		<div class="container">
		  <h1>Для кого этот сервис</h1>
		  <div class="row">
			<div class="col-md-4">
				<h2> Для собственников бизнеса </h2>
			</div>
			<div class="col-md-4">
				<h2> Для руководителей </h2>
			</div>
			<div class="col-md-4">
				<h2> Для юристов </h2>
			</div>
		  </div>
		  
		  
		  <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button" id="start-work-button">Начать работу</a></p>
		</div>
	
	</div>
	
	
	
	<SCRIPT>
		var card = document.getElementById('card'); 
		var card_container = document.getElementById('card-container');
		var bg_window = document.getElementById('bg-window');
		console.log(card_container); 
			//console.log(document.getElementById('login'));

  		document.getElementById('navbar-link-login').addEventListener( 'click', function(){
			card_container.style.display = "block";
			bg_window.style.display = "block";

			//card.classList.toggle("flipping");
  		}, false);

  		document.getElementById('navbar-link-signin').addEventListener( 'click', function(){
			card_container.style.display = "block";
			bg_window.style.display = "block";

			if(!card.classList.contains("flipping"))
				card.classList.add("flipping");
  		}, false);
			
  		document.getElementById('signin-button').addEventListener( 'click', function(){
			card.classList.toggle("flipping");
  		}, false);

		document.getElementById('login-button').addEventListener( 'click', function(){
			card.classList.toggle("flipping");
  		}, false);  
  		bg_window.addEventListener( 'click', function(){
				///console.log(card);    				
				card_container.style.display = "none";
				bg_window.style.display = "none";
		}, false);			

			/*
			document.getElementById('signin').addEventListener( 'click', function(){
				card_container.style.display = "block";
				bg_window.style.display = "block";

				card.classList.toggle("flipping");
  			}, false);

			document.getElementById('signin-button').addEventListener( 'click', function(){
				console.log(card);    				
				
				card.classList.toggle("flipping");
  			}, false);
			document.getElementById('login-button').addEventListener( 'click', function(){
				console.log(card);    				
				
				card.classList.toggle("flipping");
  			}, false);
			
			*/
	
	</SCRIPT>

</body>
</html>


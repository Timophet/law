
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Leader Assistance</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="jquery/jquery-3.2.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	
	

	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<link href="css/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="image\favicon.ico" type="image/x-icon">
</head>
<body>
	<!-- Modal -->
	<div class="bg-window" id="bg-window">
		<section class="container login-modal-window" id="card-container" onClick="if(event.stopPropagation){event.stopPropagation();}event.cancelBubble=true;">
  			<div id="card">
    		
	    		<figure class="login-figure">
					<div class="row inner-container">
						<div class="col-md-7 modal-white">
							<h4> Вход в личный кабинет </h4>						
							<form class="form-group" id="login-form" action="logged.php" method="post">
								<input type="email" name="email" class="form-control" id="login-email-input" placeholder="Введите email" required>
								<input type="submit" class="btn btn-success" id="enter-login-button" value = "Войти в личный кабинет">
							</form>
							
						</div>
						<div class="col-md-5 modal-grey">
							<h4> Регистрация </h4>
							<p> Если Вы здесь впервые, создайте личный кабинет для начала работы</p>
							<form>
								<button type="button" class="btn btn-default" id="signin-button">Создать кабинет</button>
							</form>
						</div>
					</div>				
				</figure>
				<figure class="signin-figure">
	            	<div class="row inner-container">
						<div class="col-md-7 modal-white">
							<h4> Регистрация </h4>
							<p id="submit-info-text"> На указанный email Вам придет пароль от личного кабинета </p>						
							<form class="form-group" id="signin-form">
								<input type="email" name="email" class="form-control" placeholder="Введите email" required>
								<label class="checkbox small">
									<input type="checkbox" checked="checked" name="checkbox_agreement" required>
									<span>Принимаю условия <a href="#"> Лицензионного соглашения</a> </span>
								</label>
								<input type="submit" class="btn btn-success" id="enter-signin-button" value = "Создать кабинет">					
							</form>
							
						</div>
						<div class="col-md-5 modal-grey">
							<h4>Вход в личный кабинет </h4>
							<p>Если Вы зарегистрированы, войдите в личный кабинет для начала работы.</p>
							<form>
								<button type="button" class="btn btn-default" id="login-button">Войти в кабинет</button>
							</form>
						</div>
					</div>	
				</figure>
	                    
	    			
	  		</div>
		</section>
	
	</div>



	<header class="header-main-page">
		

			<nav class="navbar navbar-fixed-top top-navbar">
			  <div class="container">
				
			  	<div class="navbar-header">
				   <a class="navbar-brand" href="#"><img src="image\logo-min.png" height="30">
					<p> <strong> AsLeader </strong> </p>
				   </a>
				</div>

				<div class="navbar-right form-group" role="group">
					<a class="modal-link"  href="#" id="navbar-link-login" >Вход в личный кабинет</a>
					<button type="button" class="btn btn-default navbar-btn" id="navbar-link-signin">Регистрация</button>
					<h4> <a href="#">Задать вопрос</a>
							<span> 8-800-000-00-01 </span>
					</h4>
				</div>
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
			<form class="navbar-form navbar-right" id="search-form">
		        <div class="form-group">
		          <label>
		          	<input type="text" class="form-control" placeholder="Поиск" id="navbar-search" name="search-text"> 
		          	<span class="clear-search-field" id="navbar-clear-search">х</span>		
		          </label> 
		        </div>
		        
		     </form>	
			
		</div>
	</nav>

	

	</header>
	
	

	<div class="clearfix"> </div>
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
	
	
	<script src="js/validation.js"></script>
	<script src="js/main.js"></script>


</body>
</html>



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
	<div class="bg-window" id="bg-window">
		<div class="modal-dialog">
	  			<div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Регистрационные данные </h4>
			      </div>
			      <div class="modal-body">
			        <table class="table table-striped">
	  				<tr>
	  					<td>Полное наименование</td> <td>Общество с ограниченной ответственностью "Торум"</td>
	  				</tr>
	  				<tr>	
	  					<td>Краткое наименование</td> <td>ООО "Торум"</td>
	  				</tr>
	  				<tr>
	  					<td>ОГРН</td> <td>3810101014</td>
	  				</tr>
	  				<tr>
	  					<td>ИНН</td> <td>3810101014</td>
	  				</tr>
	  				<tr>
	  					<td>КПП</td> <td>3810101001</td>
	  				</tr>
	  				<tr>
	  					<td>ОКВЭД</td> <td>51.55</td>
	  				</tr>
	  				<tr>
	  					<td>Юридический адрес</td> <td>664047, г. Иркутск, ул. Трилиссера, 38, 58</td>
	  				</tr>
	  				<tr>
	  					<td>Фактический адрес</td> <td>664047, г. Иркутск, ул. Трилиссера, 38, 58</td>
	  				</tr>
	  			</table>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
	  		</div>	
			
	</div>


	<header>
		<nav class="navbar">
		  <div class="container">
			<div class="navbar-header">
			   <a class="navbar-brand" href="#"><img src="image\logo-min.png" height="30">
			   	<p> <strong> AsLeader </strong> </p>
			   </a>
			</div>
				<div class="navbar-right btn-group" role="group">
					<button type="button" class="btn btn-warning navbar-btn">Купить подписку</button>
					<button type="button" class="btn btn-default navbar-btn">Профиль</button>
					<button type="button" class="btn btn-default navbar-btn">Выйти</button>
				</div>

		  </div><!-- /.container-fluid -->
		</nav>
		<nav class="navbar navbar-second">
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

	<nav class="navbar navbar-main">
		<div class="container-fluid">
			<h3 class="navbar-text"> ООО "Торум" </h3>
			<form class="navbar navbar-form navbar-right">
				<div class="form-group">
			 		 <h4 class="navbar-text" id="link-organization-info"> <a href="#">Регистрационные данные</a> </h4>
				</div>
				
			</form> 
		</div>
	</nav>

	

	</header>
	
	<div class="container">
		<ul class="nav nav-tabs nav-justified main-logged-menu">
	  		<li role="presentation" class="active"><a data-toggle="tab" href="#panel1">Органы управления</a></li>
	  		<li role="presentation"><a data-toggle="tab" href="#panel2">Государственные органы</a></li>
	  		<li role="presentation"><a data-toggle="tab" href="#panel3">Контрагенты</a></li>
			<li role="presentation"><a data-toggle="tab" href="#panel4">Работники организации</a></li>
			<li role="presentation"><a data-toggle="tab" href="#panel5">Организация учета и документооборота</a></li>
	  		<li role="presentation"><a data-toggle="tab" href="#panel6">Реорганизация и ликвидация</a></li>
		</ul>	
	</div>
	<div class="container">
		
		<div class="tab-content">
	  		<div id="panel1" class="tab-pane fade in active">
	    		<h3>Общее собрание участников</h3>
	    		<h3>Совет директоров</h3>
	    		<h3>Единоличный исполнительный орган</h3>
		  	</div>
		  	<div id="panel2" class="tab-pane fade">
		    	<h3>Государственные органы</h3>
		    	<ul> 
		    		<li> Федеральная налоговая служба </li>
		    		<li> Роспотребнадзор </li>
		    	</ul>
		    	<h3>Порядок и сроки предоставления отчетности</h3>
		    	<ul> 
		    		<li> Бухгалтерская отчетность </li>
		    		<li> Налоговая отчетность </li>
		    		<li> Отчетность в ПФР </li>
		    		<li> Иная постоянная отчетность</li>
		    		<li> Отчетность по запросу контролирующего органа</li>
		    	</ul>
		    	<h3>Порядок и сроки проведения проверок</h3>
		    	
		  	</div>
		  	<div id="panel3" class="tab-pane fade">
		    	<h3>Контрагенты</h3>
		    	<ul> 
		    		<li> Поставщики </li>
		    		<li> Покупатели </li>
		    		<li> Прочие контрагенты </li>		    		
		    	</ul>	
		    	<h3>Организация договорной работы</h3>
		    	<ul> 
		    		<li> Заключение договора </li>
		    		<li> Проведение расчетов </li>
		    		<li> Сверки и претензионная работа </li>		    		
		    	</ul>
		    	<h3>Разовые операции</h3>
		    	<ul> 
		    		<li> Заключение договора </li>
		    		<li> Проведение расчетов </li>
		    		<li> Сверки и претензионная работа </li>		    		
		    	</ul>

		    	<h3>Банки</h3>
		    	
		    	
		  	</div>
		  	<div id="panel4" class="tab-pane fade">
		    	<h3>Работники организации</h3>
		    	<ul> 
		    		<li> Прием работника </li>
		    		<li> Порядок перевода, перемещения </li>
		    		<li> Порядок применения дисциплинарного взыскания </li>	
		    		<li> Порядок применения дисциплинарного взыскания </li>	
		    		<li> Порядок прекращения (увольнения) трудового договора </li>	    		
		    	</ul>
		    	
		  	</div>
		  	<div id="panel5" class="tab-pane fade">
		    	<h3>Организация бухгалтерского учета</h3>
		    	<h3>Организация налогового учета</h3>
		    	<h3>Организация документооборота</h3>
		    			    	
		  	</div>
		  	<div id="panel6" class="tab-pane fade">
		    	<h3>Реорганизация организации</h3>
		    	<h3>Ликвидация организации</h3>
		    	
		  	</div>

		  	
		</div>
	</div>

	<script src="js/main.js"></script>

</body>
</html>


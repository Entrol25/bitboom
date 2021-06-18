<?php include "includes/myrb.php"; ?>

<!DOCTYPE html>
<html>
<head>

<?php 
     echo "$gymc0"; // Google Analytics & Yandex.Metrika counter 
?>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="icon" href="favicon.png" type="image/png">
	<link rel="shortcut icon" href="favicon.png" type="image/png">
	<meta name="yandex-verification" content="c10ad20d7a4f5580" /> <!-- yandex -->
    <title>
	     <?php 
			 $indexphp = R::load('indexphp', 1);
		     echo $indexphp['title'];  
		 ?>
	</title>
	<!-- description -->
	<meta name="description" <?php echo'content="'.$indexphp['description'].'"'; ?> 
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<!-- CSS -->
	<link rel="stylesheet" href="CSS/style.css" type="text/css"> 
</head>
<body>
     <?php 
	     echo "$myuptolike0"; // uptolike
	 ?>
     <div class="container-fluid"> 
	     <div class="container" id="headerfooter">
		     <div class="row text-center">
			     <div class="col-sm-12">
				     <nav class="navbar navbar-expand-lg navbar-dark" id="headerfooter">  
	                     <div id="mymenu">
	                     <!-- <a href="index.php" class="navbar-brand"> -->
						 <a <?php echo'href="'.$myindexhref.'"'; ?> class="navbar-brand">
		                     <img src="img/index/favicon.png" width="32" height="32" alt="биткоин" title="Биткоин">
							 <strong>bitboom.info</strong>
		                 </a>
						 </div>
						 <div id="mymenu2">
	                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
		                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Mеню
		                     <span class="navbar-toggler-icon"></span>
		                 </button>
		                 </div>
						 
		                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
		                     <ul class="navbar-nav mr-auto">
			                     <li class="nav-item active">
				                     <a <?php echo'href="'.$myindexhref.'"'; ?> class="nav-link">Главная</a>
				                 </li>
								 <li class="nav-item">
				                     <a href="pages/junior.php" class="nav-link">Новичкам</a>
				                 </li>
								 <li class="nav-item">
				                     <a href="pages/investments.php" class="nav-link">Инвестиции</a>
				                 </li>
								 <li class="nav-item">
				                     <a href="pages/analytics.php" class="nav-link">ХомаЛитика</a>
				                 </li>
								 <!-- 
								 <li class="nav-item">
				                     <a href="pages/different.php" class="nav-link">Разное</a>
				                 </li> 
								 -->
				                 <li class="nav-item">
				                     <a href="pages/about.php" class="nav-link">О проекте</a>
				                 </li>
			                 </ul>
		                 </div>
						 
	                 </nav>
				 </div>
			 </div>
		 </div>
	 </div>
	 
	 <br/>
	 
	 <?php 
	     // в <title>
	     //echo $indexphp['description']; 
	 ?>
	 
	 <div class="container-fluid">
	     <div class="container">
		     <div class="row text-left">
			     <div class="col-sm-12">
				     <!--Noindex-->
	                 <div align="center" class="nav-link">
					     <div>
				             <a href="https://go.50x.com/34000" rel="nofollow" target="_blank">
                                 <img src="img/reklamma/mybaner50x.png" border="0" 
                                 class="img-fluid"  alt="криптобиржа 50Х" title='Криптобиржа 50Х. Подробнее в разделе Инвестиции, статья - Инвестиции в криптобиржу 50Х.'>
                             </a>
						 </div>
				     </div>
					 <!--/noindex-->
				 </div>
			</div>
		</div>
	 </div>
	 
	 <br/>
 
	 <div class="container-fluid">
	     <div class="container">
		     <div class="row text-left">
			     <div class="col-sm-1">
				         
                 <br/>
				 </div>
				 <div class="col-sm-5">
				 <a href="pages/junior.php">
				 <img src="img/index/mjunior.jpg" class="img-fluid" alt="биткоин" title="Новичкам о биткоине">
				 </a>
				 <div id="mymargin">
				     <h1><strong id="zagolovokh1">Что такое биткоин</strong></h1>
					 
			     </div>
				 <div id="mymargin1">
				     <h2><b><a id="zagolovokh2" href="pages/junior.php" alt="биткоин" title="Новичкам о биткоине">Новичкам</a></b></h2>
					 <h2 id="textzagolovokh2"><small>
					 <a id="ssilkazagolovokh2" href="pages/juniorq.php?id=5" alt="биткоин" title="Что такое биткоин">
					     <strong>Что такое биткоин</strong></a>,
					 <a id="ssilkazagolovokh2" href="pages/juniorq.php?id=4" alt="криптовалюта" title="Что такое криптовалюта">
						 <strong>криптовалюта</strong></a> и 
					 <a id="ssilkazagolovokh2" href="pages/juniorq.php?id=3" alt="блокчейн" title="Что такое блокчейн">
						 <strong>блокчейн</strong></a>.<br/>
					 <a id="ssilkazagolovokh2" href="pages/juniorq.php?id=7" alt="трейдинг" title="Заработок трейдингом">
						 Как <strong>заработать на криптовалюте</strong>.</a><br/>
					 <a id="ssilkazagolovokh2" href="pages/investmentsq.php?id=2" alt="биржа 50Х" title="Биржа 50Х">
						<strong>Биржа 50Х.</strong></a>
					 <a id="ssilkazagolovokh2" href="pages/juniorq.php?id=6" alt="криптобиржа" title="Что такое криптобиржа">
						Что такое <strong>криптобиржа</strong></a>.<br/>
					 <a id="ssilkazagolovokh2" href="pages/juniorq.php?id=10" alt="биткоин" title="Как купить биткоин">
						 Как <strong>купить биткоин</strong></a>.
                     <a id="ssilkazagolovokh2" href="pages/juniorq.php?id=11" alt="биткоин" title="Как майнить биткоин">
						 Как <strong>майнить биткоин</strong></a>.<br/>
                     <a id="ssilkazagolovokh2" href="pages/investmentsq.php?id=4" alt="биткоин" title="Партнёрская программа 50Х">
						 Зачем <strong>тебе биткоин</strong></a>.
					 </small></h2>
				 </div>
				 </div>
				 
				 <div class="col-sm-5">
				 <a href="pages/investments.php">
				 <img src="img/index/minvestments.jpg" class="img-fluid" alt="ивестиции" title="Криптоинвесторам">
				 </a>
				 <div id="mymargin007">
				     <h2><strong id="zagolovokh1">Криптоинвестиции</strong></h2>
					 
			     </div>
				 <div id="mymargin2">
				     <h2><a id="zagolovokh2" href="pages/investments.php" alt="инвестиции" title="Инвестиции"><strong>Инвестиции</strong></a></h2>
					 <h2 id="textzagolovokh2"><small>
					 <a id="ssilkazagolovokh2" href="pages/investmentsq.php?id=2" alt="криптопроекты" title="Перспективные криптопроекты">
						 Вы узнаете, в какие <strong>перспективные криптопроекты</strong> можно выгодно вложиться.</a>
					 <br/>
					 <a id="ssilkazagolovokh2" href="pages/investmentsq.php?id=1"  alt="криптоинвестиции" title="Криптопроекты">
						 Один лишь <strong>биткоин ценен</strong>?</a>
					 <br/>
					 <a id="ssilkazagolovokh2" href="pages/investmentsq.php?id=4"  alt="партнёрская программа 50х" title="Партнёрская программа 50Х">
						 <strong>Заработай биткоины</strong> <b>без вложений</b> на партнёрской программе <strong>криптобиржи</strong> <strong>50Х</strong>.</a>
					 </small></h2>
				 </div>
				 </div>
				 <div class="col-sm-1"></div>
			 </div>
		 </div>
	 </div>
	 
	 <div class="container-fluid">
	     <div class="container">
		     <div class="row text-left">
			     <div class="col-sm-1"></div>
				 <div class="col-sm-5">
				 <a href="pages/about.php">
				 <img src="img/index/mabout.jpg" class="img-fluid" alt="о проекте" title="О проекте">
				 </a>
				 <div id="mymargin">
				     <h2><a id="zagolovokh2" href="pages/about.php" alt="о проекте" title="О проекте"><b>О проекте</b></a></h2>
					 <h2 id="textzagolovokh2"><small>
					 <a id="ssilkazagolovokh2" href="pages/about.php" alt="о проекте" title="О проекте">
					     Вы узнаете <strong>о биткоине</strong>, и о том, что подтолкнуло меня для создания этого сайта.</a>
					 <br/>
					 <a id="ssilkazagolovokh2" href="pages/aboutq.php?id=1" alt="о проекте" title="О проекте">
					     Узнаете, как <strong>биткоин меняет</strong> мировоззрение.
					 </small></a></h2>
			     </div>
				 </div>
				 
				 <div class="col-sm-5">
				 <a href="pages/aboutq.php?id=3">
				 <img src="img/index/mphpcode.jpg" class="img-fluid" alt="сайт развивается" title="Сайт развивается">
				 </a>
				 <div id="mymargin">
				     <h2><a id="zagolovokh2" href="pages/aboutq.php?id=3"  alt="сайт развивается" title="Сайт развивается"><b>Сайт развивается</b></a></h2>
					 <h2 id="textzagolovokh2"><small>
					 <a id="ssilkazagolovokh2" href="pages/aboutq.php?id=3" alt="сайт развивается" title="Сайт развивается">
					     Сайт будет развиваться, а информация обновляться.
					 <br/>
					     Не забывайте нас посещать.
					 </a></small></h2>
			     </div>
				 </div>
				 <div class="col-sm-1"></div>
			 </div>
		 </div>
	 </div>
	 <br/>
	 <script type="text/javascript">(function(w,doc) {
     if (!w.__utlWdgt ) {
     w.__utlWdgt = true;
     var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
     s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
     s.src = ('https:' == w.location.protocol ? 'https' : 'http') + '://w.uptolike.com/widgets/v1/uptolike.js';
     var h=d[g]('body')[0];
     h.appendChild(s);
     }})(window,document);
</script>
<div align="center" data-mobile-view="true" data-share-size="30" data-like-text-enable="false" data-background-alpha="0.0" data-pid="1846680" 
data-mode="share" data-background-color="#ffffff" data-hover-effect="scale" data-share-shape="round-rectangle" 
data-share-counter-size="12" data-icon-color="#ffffff" data-mobile-sn-ids="fb.vk.tw.ok.wh.tm.vb." data-text-color="#000000" 
data-buttons-color="#ffffff" data-counter-background-color="#ffffff" data-share-counter-type="disable" data-orientation="horizontal" 
data-following-enable="false" data-sn-ids="fb.vk.tw.ok.wh.tm.vb." data-preview-mobile="false" data-selection-enable="true" 
data-exclude-show-more="true" data-share-style="1" data-counter-background-alpha="1.0" data-top-button="true" 
class="uptolike-buttons" >
</div>
	 <br/>
	 <div class="container-fluid">
	     <div class="container">
		     <div class="row text-left">
			     <div class="col-sm-12">
				     <!--Noindex-->
	                 <div align="center" class="nav-link">
					     <div>
				             <a href="https://go.50x.com/ref/34000" rel="nofollow" target="_blank">
                                 <img src="img/reklamma/mybaner50x2.png" border="0" 
                                 class="img-fluid"  alt="партнёрская программа 50Х" title='Партнёрская программа 50Х. Подробнее в разделе Инвестиции, статья - Партнёрская программа 50Х.'>
                             </a>
						 </div>
				     </div>
					 <!--/noindex-->
				 </div>
			</div>
		</div>
	 </div>
	 
	 <br/>
	 
	 <?php include "includes/futer.php"; ?>

<!-- Bootstrap / Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!--  -->
</body>
</html>




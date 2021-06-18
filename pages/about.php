<?php include "../includes/myrb.php";  ?>

<!DOCTYPE html>
<html>
<head>

<?php 
     echo "$gymc0"; // Google Analytics & Yandex.Metrika counter 
?>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="icon" href="../favicon.png" type="image/png">
	<link rel="shortcut icon" href="../favicon.png" type="image/png">
    <title>О проекте</title>
	<!-- description -->
	<meta name="description" content="Список статей о проекте.">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<!-- CSS -->
	<link rel="stylesheet" href="../CSS/style.css" type="text/css"> 
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
	                     <!-- <a href="../index.php" class="navbar-brand"> -->
						 <a <?php echo'href="'.$myindexhref2.'"'; ?> class="navbar-brand">
		                     <img src="../img/index/favicon.png" width="32" height="32"  alt="биткоин" title="Биткоин">
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
			                     <li class="nav-item">
				                     <a <?php echo'href="'.$myindexhref2.'"'; ?> class="nav-link">Главная</a>
				                 </li>
				                 <li class="nav-item">
				                     <a href="junior.php" class="nav-link">Новичкам</a>
				                 </li>
								 <li class="nav-item">
				                     <a href="investments.php" class="nav-link">Инвестиции</a>
				                 </li>
								 <li class="nav-item">
				                     <a href="analytics.php" class="nav-link">ХомаЛитика</a>
				                 </li>
								 <!--
								 <li class="nav-item">
				                     <a href="different.php" class="nav-link">Разное</a>
				                 </li>
								 -->
				                 <li class="nav-item active">
				                     <a href="about.php" class="nav-link">О проекте</a>
				                 </li>
			                 </ul>
		                 </div>
						 
	                 </nav>
				 </div>
			 </div>
		 </div>
	 </div>
	 
	 <br/>
	 
	 <div class="container-fluid">
	     <div class="container">
		     <div class="row text-left">
			     <div class="col-sm-3">
				 <!--Noindex-->
				 <div align="center" class="nav-link">
				     <div>
					     <a href="https://www.bestchange.ru/?p=943002" rel="nofollow" target="_blank">
						     <img src="https://www.bestchange.ru/images/banners/240x400-13.jpg" class="img-fluid"
						     alt="Обмен электронных валют" title="BestChange.ru - Мониторинг обменников в интернете. Подробнее в разделе Новичкам,  статья - Как купить криптовалюту." width="220" border="0" />
						 </a>
					 </div>
			     </div>
				 
				 <div align="center" class="nav-link">
					 <div>
				         <a href="https://promopult.ru/ref/cec0ac7949da2956" rel="nofollow" target="_blank">
                             <img src="../img/reklamma/molodoy.gif" border="0" width="220"
                             class="img-fluid"  alt="promopult" title='Promopult'>
                         </a>
				     </div>
				 </div>
				 <!--/noindex-->
				 </div>
				 
				 <div class="col-sm-1">
				     <div id="spisocenter">
					 </div>
				 </div>
				 
				 <div class="col-sm-5">
				  <div id="spisoccenter" align="left">
				         <br/><br/><br/><br/>
					     <?php 
							     $i = 0;
							     while(true)
								 {
									 $i++;
									 echo '<a href="aboutq.php?id='.$i.'" id="title">';
									 
									 $titleid = $i;
									 $about = R::load('about', $titleid);
									 echo '<strong>'; echo $about['title'];  echo '</strong>';
									 echo '<br/><br/>';
									 if($i >= 3)
									 { break;}
								     
								     echo '</a>';
								 }
	                         ?>
							 <a href="#" ></a>
			     </div>
				 </div>
				 <div class="col-sm-3">
				 <!--Noindex-->
				 <div align="center" class="nav-link">
				     <a href="https://shop.trezor.io/?offer_id=10&aff_id=2829&file_id=155" rel="nofollow" target="_blank" alt="trezor" 
                     title='Холодный аппаратный кошелёк Trezor. Подробнее в разделе Новичкам,  статья - Что такое криптокошелёк.'>
                         <img class="img-fluid" src="https://media.go2speed.org/brand/files/trezor/10/20181024084903-336x280.jpg" width="220" border="0" />
                     </a>
				     <div>
						 <img src="https://trezor.go2cloud.org/aff_i?offer_id=10&file_id=155&aff_id=2829" width="1" height="1" />
					 </div>
				 </div>
				 
				 <div align="center" class="nav-link">
				     <div>
				         <a href="https://www.epacash.com/c_l0mdxenk" rel="nofollow" target="_blank">
                             <img src="../img/junior/mepayments.jpg" border="0" width="220"
                             class="img-fluid"  alt="epayments" title='Покупай криптовалюту в Epayments. Подробнее в разделе Новичкам,  статья - Как купить криптовалюту.'>
                         </a>
					 </div>
				 </div>
				 
				 <div align="center" class="nav-link">
				     <div>
				         <a href="https://go.50x.com/ref/34000" rel="nofollow" target="_blank">
                             <img src="../img/reklamma/mybaner50x4.png" border="0" width="220"
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
				             <a href="https://go.50x.com/34000" rel="nofollow" target="_blank">
                                 <img src="../img/reklamma/mybaner50x.png" border="0" 
                                 class="img-fluid"  alt="криптобиржа 50Х" title='Криптобиржа 50Х. Подробнее в разделе Инвестиции, статья - Инвестиции в криптобиржу 50Х.'>
                             </a>
						 </div>
			         <br/>
				     </div>
					 <!--/noindex-->
				 </div>
			</div>
		</div>
	 </div>

	 <?php include "../includes/futer.php"; ?>

<!-- Bootstrap / Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!--  -->
</body>
</html>




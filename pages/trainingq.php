<!DOCTYPE html>
<html>
<head>

<!-- Global site tag (gtag.js) - Google Analytics
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141377426-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141377426-1');
</script>
 -->
<!-- Yandex.Metrika counter
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(53929015, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/53929015" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
 -->
<!-- /Yandex.Metrika counter -->  

    <!-- Required meta tags -->
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="icon" href="../favicon.png" type="image/png">
	<link rel="shortcut icon" href="../favicon.png" type="image/png">
    <title>
	     <?php 
	         include "../includes/myrb.php";
	         $training = R::load('training', (int)$_GET['id']);
		     echo $training['title'];  
		 ?>
	</title>
	<!-- description -->
	<meta name="description" <?php echo'content="'.$training['description'].'"'; ?> 
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<!-- CSS -->
	<link rel="stylesheet" href="../CSS/style.css" type="text/css"> 
</head>
<body>
     
	 <!-- uptolike
	 <script async="async" src="https://w.uptolike.com/widgets/v1/zp.js?pid=1846669" 
     type="text/javascript"></script>
	  -->

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
								 <li class="nav-item active">
				                     <a href="training.php" class="nav-link">Учебка</a>
				                 </li>
								 <li class="nav-item">
				                     <a href="investments.php" class="nav-link">Инвестиции</a>
				                 </li>
								 <li class="nav-item">
				                     <a href="analytics.php" class="nav-link">ХомаЛитика</a>
				                 </li>
								 <li class="nav-item">
				                     <a href="relax.php" class="nav-link">Крипто-Отдых</a>
				                 </li>
								 <li class="nav-item">
				                     <a href="different.php" class="nav-link">Разное</a>
				                 </li>
				                 <li class="nav-item">
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
	 
	 <?php 
		 // в <title>
		 //echo $training['description'];
	 ?>
	 
	 <div class="container-fluid">
	     <div class="container">
		     <div class="row text-left">
			     <div class="col-sm-1"></div>
			     <div class="col-sm-10">
					     <?php 
						     if($training['id'] % 2 == 1) // не чётное 
							 {
								 echo '
								 <div align="center">
								     <a href="https://shop.trezor.io/?offer_id=10&aff_id=2829&file_id=159" target="_blank" alt="trezor" 
                                     title="Холодный аппаратный кошелёк Trezor. Подробнее в статье - Что такое криптокошелёк.">
                                         <img src="https://media.go2speed.org/brand/files/trezor/10/20181024084916-468x60.jpg" class="img-fluid" width="728" height="90" border="0" />
                                     </a><img align="left" src="https://trezor.go2cloud.org/aff_i?offer_id=10&file_id=159&aff_id=2829" width="1" height="1" />
								 </div>
								 ';
							 }
							 if($training['id'] % 2 == 0) // чётное
							 {
								 $myrandom = rand(1,6);
								// echo $myrandom;
								 if($myrandom == 1)
								 {
									 echo '
								     <div align="center">
								     <a target="_blank" href="https://www.bestchange.ru/?p=943002">
                                     <img src="https://www.bestchange.ru/images/banners/728x90-11.gif" class="img-fluid"
                                     alt="Обмен электронных валют" title="BestChange.ru - Мониторинг обменников в интернете" width="728" height="90" border="0" /></a>
								     </div>
								     ';
								 }
								 if($myrandom == 2)
								 {
									 echo '
								     <div align="center">
									 <a target="_blank" href="https://www.bestchange.ru/?p=943002">
                                     <img src="https://www.bestchange.ru/images/banners/728x90-10.gif" class="img-fluid"
                                     alt="Обмен электронных валют" title="BestChange.ru - Мониторинг обменников в интернете" width="728" height="90" border="0" /></a>
									 </div>
									 ';
								 }
								 if($myrandom == 3)
								 {
									 echo '
								     <div align="center">
									 <a target="_blank" href="https://www.bestchange.ru/?p=943002">
                                     <img src="https://www.bestchange.ru/images/banners/728x90-17.gif" class="img-fluid"
                                     alt="Обмен электронных валют" title="BestChange.ru - Мониторинг обменников в интернете" width="728" height="90" border="0" /></a>
									 </div>
									 ';
								 }
								 if($myrandom == 4)
								 {
									 echo '
								     <div align="center">
									 <a target="_blank" href="https://www.bestchange.ru/?p=943002">
                                     <img src="https://www.bestchange.ru/images/banners/728x90-4.gif" class="img-fluid"
                                     alt="Обмен электронных валют" title="BestChange.ru - Мониторинг обменников в интернете" width="728" height="90" border="0" /></a>
									 </div>
									 ';
								 }
								 if($myrandom == 5)
								 {
									 echo '
								     <div align="center">
									 <a target="_blank" href="https://www.bestchange.ru/?p=943002">
                                     <img src="https://www.bestchange.ru/images/banners/728x90-15.jpg" class="img-fluid"
                                     alt="Обмен электронных валют" title="BestChange.ru - Мониторинг обменников в интернете" width="728" height="90" border="0" /></a>
									 </div>
									 ';
								 }
								 if($myrandom == 6)
								 {
									 echo '
								     <div align="center">
									 <a target="_blank" href="https://www.bestchange.ru/?p=943002">
                                     <img src="https://www.bestchange.ru/images/banners/728x90-13.jpg" class="img-fluid"
                                     alt="Обмен электронных валют" title="BestChange.ru - Мониторинг обменников в интернете" width="728" height="90" border="0" /></a>
									 </div>
									 ';
								 }
							 }
						 
						     // в <title> / $training = R::load('training', (int)$_GET['id']);
							 echo '<br/>';
							 echo '<h1><small><strong>'; echo $training['title']; echo '</strong></small></h1>'; 
							 echo '<h2><small><small><small>'; 
							 echo $training['pubdate']; echo '<br/><br/>'; echo "
							 <script type="."text/javascript".">(function(w,doc) {
if (!w.__utlWdgt ) {
w.__utlWdgt = true;
var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
s.src = ('https:' == w.location.protocol ? 'https' : 'http') + '://w.uptolike.com/widgets/v1/uptolike.js';
var h=d[g]('body')[0];
h.appendChild(s);
}})(window,document);
</script>
<div data-mobile-view="."false"." data-share-size="."30"." data-like-text-enable="."false"." data-background-alpha="."0.0"." 
data-pid="."1846684"." data-mode="."share"." data-background-color="."#ffffff"." data-hover-effect="."scale"." 
data-share-shape="."round-rectangle"." data-share-counter-size="."12"." data-icon-color="."#ffffff"." 
data-mobile-sn-ids="."fb.vk.tw.ok.wh.tm.vb."." data-text-color="."#000000"." data-buttons-color="."#FFFFFF"." 
data-counter-background-color="."#ffffff"." data-share-counter-type="."disable"." data-orientation="."horizontal"." 
data-following-enable="."false"." data-sn-ids="."fb.vk.tw.ok.wh.tm.vb."." data-preview-mobile="."false"." data-selection-enable="."true"." 
data-exclude-show-more="."true"." data-share-style="."1"." data-counter-background-alpha="."1.0"." data-top-button="."false"." 
class="."uptolike-buttons"." ></div>
							 ";
							 echo '<br/>';  
							 echo '</small></small></small></h2>';
							 echo '<div><h2 id="stzagolovokh2"><small>'; 
							 echo $training['text'];
							 echo '</small></h2></div>'; echo '<br/><br/>';
							 
							 if($training['id'] % 2 == 1) // не чётное 
							 {
								 echo '
								 <div align="center">
				                     <a href="https://www.epacash.com/c_l0mdxenk" target="_blank">
                                         <img src="../img/junior/mepayments.jpg" border="0" 
                                         class="img-fluid"  alt="epayments" title="Покупай криптовалюту в Epayments. Подробнее в статье - Как купить криптовалюту.">
                                     </a>
				                 </div>
								 ';
							 }
							 if($training['id'] % 2 == 0) // не чётное 
							 {
								 $myrandom2 = rand(1,4);
								 if($myrandom2 == 1)
								 {
									 echo '
								     <div align="center">
					                 <a href="https://www.gvgmall.com/?aid=742025" target="_blank">
                                         <img src="../img/junior/mgvgmall.jpg" border="0" 
                                         class="img-fluid" alt="компьютерные игры" title="Компьютерные игры">
                                     </a>
					                 </div>
								     ';
								 }
								 if($myrandom2 == 2)
								 {
									 echo '
								     <div align="center">
					                     <a href="https://www.gvgmall.com/fifa18/coins/35.html?aid=742025" target="_blank">
                                         <img src="https://file-cdn.gvgmall.com/protome/20171226102915_gvgmall.jpg" border="0" 
                                         class="img-fluid" alt="компьютерные игры" title="Компьютерные игры">
                                         </a>
					                 </div>
								     ';
								 }
								 if($myrandom2 == 3)
								 {
									 echo '
								     <div align="center">
					                     <a href="https://www.gvgmall.com/forzahorizon3/forza-horizon-3-credits/145.html?aid=742025" target="_blank">
	                                         <img src="https://file-cdn.gvgmall.com/protome/20180124173142_gvgmall.jpg" border="0"
		                                     class="img-fluid" alt="компьютерные игры" title="Компьютерные игры">
	                                     </a>
					                 </div>
								     ';
								 }
								 if($myrandom2 == 4)
								 {
									 echo '
								     <div align="center">
					                     <a href="https://www.gvgmall.com/forzamotorsport7/forza-motorsport-7-credits/143.html?aid=742025" 
                                             target="_blank"><img src="https://file-cdn.gvgmall.com/protome/20180124172140_gvgmall.jpg" border="0" 
                                             class="img-fluid" alt="компьютерные игры" title="Компьютерные игры">
	                                     </a>
					                 </div>
								     ';
								 }
								 
							 }
	                         ?>
							 
							 <br/><br/>
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
<div data-mobile-view="true" data-share-size="40" data-like-text-enable="false" data-background-alpha="0.0" data-pid="1846691" 
data-mode="share" data-background-color="#ffffff" data-hover-effect="scale" data-share-shape="round-rectangle" 
data-share-counter-size="12" data-icon-color="#ffffff" data-mobile-sn-ids="fb.vk.tw.ok.wh.tm.vb." data-text-color="#000000" 
data-buttons-color="#FFFFFF" data-counter-background-color="#ffffff" data-share-counter-type="disable" data-orientation="horizontal" 
data-following-enable="false" data-sn-ids="fb.vk.tw.ok.wh.tm.vb." data-preview-mobile="false" data-selection-enable="true" 
data-exclude-show-more="true" data-share-style="1" data-counter-background-alpha="1.0" data-top-button="true" 
class="uptolike-buttons" ></div>
                 <br/>
				 </div>
				 <div class="col-sm-1"></div>
			 </div>
		 </div>
	 </div>
	 
	 <br/>
	 
	 <?php include "../includes/futer.php"; ?>

<!-- Bootstrap / Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<!--  -->
</body>
</html>

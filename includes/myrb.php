<?php
     require "rb.php";// подкл файл 
	 
	 $mywebconnect = 0;// 0 = Локально, 1 = На сервер 
	 
	 $gymc = '';// metrika
	 $gymc0 = '
	 <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141377426-1"></script>
     <script>
         window.dataLayer = window.dataLayer || [];
		 function gtag(){dataLayer.push(arguments);}
		 gtag("js", new Date());

		 gtag("config", "UA-141377426-1");
     </script>
	 
	 <!-- Yandex.Metrika counter -->
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
     <noscript><div>
	     <img src="https://mc.yandex.ru/watch/53929015" style="position:absolute; left:-9999px;" alt="" /></div>
	 </noscript>
     ';
	 
	 $myuptolike0 = '';// uptolike
	 $myuptolike = '
	 <!-- uptolike -->
	 <script async="async" src="https://w.uptolike.com/widgets/v1/zp.js?pid=1846669" 
     type="text/javascript"></script>
	 ';
	 
	 $indexphplocal = 'index.php';
	 $indexphplocal2 = '../index.php';
	 
	 $indexphpweb = 'https://www.bitboom.info';
	 
	 $myindexhref = 'a';
	 $myindexhref2 = 'b';
	 
	 if($mywebconnect == false)// Локально
	 {
		// $gymc0 = '';// metrika
		// $myuptolike0 = '';// uptolike
		 
		 $myindexhref = $indexphplocal;// $indexphplocal
		 $myindexhref2 = $indexphplocal2;// $indexphplocal2 
		 // Локально       host            dbname          'user' 'password' 
		 R::setup('mysql:host=127.0.0.1;dbname=blockchain', 'root', '');//'root', '' root/логин, пароль
	 }
	 if($mywebconnect == true)// На сервер
	 {
		 $gymc0 = $gymc;// metrika
		 $myuptolike0 = $myuptolike;// uptolike
		 
		 $myindexhref = $indexphpweb;// $indexphpweb 
		 $myindexhref2 = $indexphpweb;// $indexphpweb
		 // На сервер       host            dbname                    'user'          'password'  
		 R::setup('mysql:host=localhost;dbname=bitboom_blockcha','bitboom_blockcha','RdnPnMjs1Ooc');//'root', '' root/логин, пароль
	 }
	 R::freeze(true);// заморозка создания таблиц бд (true), но не строк
	 
	 if(!R::testConnection()) // Connection
	 {
		 exit('myrb.php No Connection!');
	 }
	 else
	 {
		// echo 'Connection! ^';
		// echo '<br>'; echo '<br>';
	 }
	 R::close();// закрыть соединение Connection
	 
?>
<!--cachetime:1342101482--><?php
			App::uses('ZoomboxController', 'Controller');
			
				$request = unserialize('O:11:"CakeRequest":10:{s:6:"params";a:6:{s:6:"plugin";N;s:10:"controller";s:7:"zoombox";s:6:"action";s:3:"faq";s:5:"named";a:0:{}s:4:"pass";a:0:{}s:6:"models";a:1:{s:7:"Zoombox";a:2:{s:6:"plugin";N;s:9:"className";s:7:"Zoombox";}}}s:4:"data";a:0:{}s:5:"query";a:0:{}s:3:"url";s:11:"zoombox/faq";s:4:"base";s:0:"";s:7:"webroot";s:1:"/";s:4:"here";s:12:"/zoombox/faq";s:13:" * _detectors";a:10:{s:3:"get";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"GET";}s:4:"post";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"POST";}s:3:"put";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:3:"PUT";}s:6:"delete";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:6:"DELETE";}s:4:"head";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:4:"HEAD";}s:7:"options";a:2:{s:3:"env";s:14:"REQUEST_METHOD";s:5:"value";s:7:"OPTIONS";}s:3:"ssl";a:2:{s:3:"env";s:5:"HTTPS";s:5:"value";i:1;}s:4:"ajax";a:2:{s:3:"env";s:21:"HTTP_X_REQUESTED_WITH";s:5:"value";s:14:"XMLHttpRequest";}s:5:"flash";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"pattern";s:26:"/^(Shockwave|Adobe) Flash/";}s:6:"mobile";a:2:{s:3:"env";s:15:"HTTP_USER_AGENT";s:7:"options";a:24:{i:0;s:7:"Android";i:1;s:7:"AvantGo";i:2;s:10:"BlackBerry";i:3;s:6:"DoCoMo";i:4;s:6:"Fennec";i:5;s:4:"iPod";i:6;s:6:"iPhone";i:7;s:4:"J2ME";i:8;s:4:"MIDP";i:9;s:8:"NetFront";i:10;s:5:"Nokia";i:11;s:10:"Opera Mini";i:12;s:10:"Opera Mobi";i:13;s:6:"PalmOS";i:14;s:10:"PalmSource";i:15;s:9:"portalmmm";i:16;s:7:"Plucker";i:17;s:14:"ReqwirelessWeb";i:18;s:12:"SonyEricsson";i:19;s:7:"Symbian";i:20;s:11:"UP\.Browser";i:21;s:5:"webOS";i:22;s:10:"Windows CE";i:23;s:5:"Xiino";}}}s:9:" * _input";s:0:"";s:10:"controller";s:8:"zoomboxc";}');
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new ZoomboxController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo4OntpOjA7czo0OiJIdG1sIjtpOjE7czo0OiJUZXh0IjtpOjI7czo0OiJGb3JtIjtpOjM7czo3OiJTZXNzaW9uIjtpOjQ7czozOiJSc3MiO2k6NTtzOjU6IkNhY2hlIjtpOjY7czo0OiJEYXRlIjtpOjc7czo4OiJEdXJhdGlvbiI7fQ=='));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo0OntzOjE0OiJjc3NfZm9yX2xheW91dCI7czoxMzc6IjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Ii9qcy96b29tYm94L3pvb21ib3guY3NzIiAvPjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Ii9jc3Mvem9vbWJveC5jc3MiIC8+IjtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6OTg0OiI8ZGl2IGNsYXNzPSJncmlkMTIiPg0gICAgPGRpdiBjbGFzcz0ic3ViaGVhZCI+DSAgICAgICAgPGRpdiBjbGFzcz0ibG9nbyI+PGltZyBzcmM9Ii9pbWcvem9vbWJveC96b29tYm94LnBuZyIgYWx0PSIiIC8+PC9kaXY+DSAgICAgICAgPHVsPg0gICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGEgaHJlZj0iL3pvb21ib3giPkhvbWU8L2E+PC9saT4NICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii96b29tYm94L2hvd3RvIj5Ib3cgdG8gdXNlPC9hPjwvbGk+DSAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvem9vbWJveC9hcGkiPkFQSSAmYW1wOyBPcHRpb25zPC9hPjwvbGk+DSAgICAgICAgICAgICAgICAgICAgICAgIDxsaSBjbGFzcz0iY3VycmVudCI+PGEgaHJlZj0iL3pvb21ib3gvZmFxIj5GQVE8L2E+PC9saT4NICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9jb250YWN0Ij5Db250YWN0PC9hPjwvbGk+DSAgICAgICAgPC91bD4NICAgIDwvZGl2Pg08L2Rpdj4NPGRpdiBjbGFzcz0iY2IiPjwvZGl2PjwvZGl2PjxkaXYgY2xhc3M9ImNvbnRlbnQiPgogICAgPGRpdiBjbGFzcz0id3JhcCI+Cgk8aDI+Q2FuIEkgdXNlIHpvb21ib3ggZm9yIGNvbW1lcmNpYWwgcHJvamVjdHMgKGUtY29tbWVyY2UgZm9yIGV4YW1wbGUpID8gPC9oMj4KCTxwPlllcyAhIFpvb21ib3ggY2FuIGJlIHVzZWQgZm9yIGV2ZXJ5IGtpbmQgb2YgcHJvamVjdHMgYnV0IGlmIHlvdSB3YW50IHRvIHNlbGwgYSB0ZW1wbGF0ZSB3aXRoIHpvb21ib3ggaW4gaXQgKG9uIHRoZW1lZm9yZXN0IGZvciBleGFtcGxlKSBwbGVhc2UgaW5mb3JtIG1lLCBJIGxpa2UgdG8gc2VlIGhvdyBwZW9wbGUgaW50ZWdyYXRlIHpvb21ib3guPC9wPgoJCgk8aDI+SXMgdGhlcmUgYW55IHBsdWdpbiBmb3IgV29yZHByZXNzID88L2gyPgoJPHA+Tm90IG5vdyBidXQgSSdtIHdvcmtpbmcgb24gaXQgOik8L3A+CiAgICA8L2Rpdj4iO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czoxOTE6IjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Ii9qcy96b29tYm94L3pvb21ib3guanMiPjwvc2NyaXB0PgoJPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgovLzwhW0NEQVRBWwogICAgJChmdW5jdGlvbigpew0gICAgICAgICQoJ2Euem9vbWJveCcpLnpvb21ib3goKTsNICAgIH0pOw0KLy9dXT4KPC9zY3JpcHQ+IjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjc6Ilpvb21ib3giO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" /> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Zoombox | Grafikart.fr</title>

        <meta property="og:site_name" content="Grafikart.fr" /> 
        <meta property="og:title" content="Zoombox" /> 
        <meta property="og:url" content="http://www.grafikart.fr/zoombox/faq" /> 
        <meta property="og:language" content="fr" /> 
	    
        <meta name="copyright" content="http://grafikart.fr" /> 
        <meta name="author" content="Grafikart.fr" /> 
        <meta name="language" content="fr" /> 
        <meta http-equiv="content-language" content="fr" />

        <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	    <link rel="alternate" type="application/rss+xml" title="Grafikart.fr | Flux" href="http://feeds.feedburner.com/Grafikart" /> 
        <link rel="stylesheet" type="text/css" href="/css/style.css?v=05012012" />        <link rel="stylesheet" type="text/css" href="/js/zoombox/zoombox.css" /><link rel="stylesheet" type="text/css" href="/css/zoombox.css" />    	
        <script type="text/javascript">
    	var _gaq = _gaq || [];
    	_gaq.push(['_setAccount', 'UA-6250784-1']);
    	_gaq.push(['_trackPageview']);
    	(function() {
    	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    	})();
    	</script>

    </head>
    <body id="zoomboxc" class="white">
        <div class="header" id="header">
            <div class="wrap">
                    <a href="/" class="logo" id="logo">
                        <img src="/img/logo.png" alt="" />                    </a>
                    <ul class="menu">
                        <li><a href="/blog/" title="Blog">Blog</a></li>
                        <li><a href="/tutoriels" title="Tutoriel vidéo">Tutoriels</a></li>
                        <li><a href="/themes" title="Themes">Themes</a></li>
                        <li><a href="/ressources" title="Ressources web">Freebies</a></li>
                        <li><a href="/forum" title="Forum">Forum</a></li>
                        <li><a href="/contact" title="Contact">Contact</a></li>
                        <li><a href="/irc">Irc</a></li>
                    </ul>
                    <ul class="account">
                        
                        <?php if($this->Session->read('Auth.User.id')): ?>
                            <li>
                                <a href="<?php echo $this->Html->url(array('plugin'=>false,'controller'=>'users','action'=>'index')); ?>">
                                    <?php echo $this->Html->image($this->Session->read('Auth.User.avatar'),array('width'=>'35')); ?>
                                    <?php if($this->Session->read('News.count')): ?>
                                    <span class="count"><?php echo $this->Session->read('News.count'); ?></span>
                                    <?php endif; ?>
                                    Mon compte
                                </a>
                            </li>
                        <?php else: ?>
                            <li><?php echo $this->Html->link("S'inscrire",array('plugin'=>false,'controller'=>'users','action'=>'signup')); ?></li>
                            <li><?php echo $this->Html->link("Se connecter",array('plugin'=>false,'controller'=>'users','action'=>'login')); ?></li>
                        <?php endif; ?>
                        
                    </ul>
            </div>
        </div>

        <div class="top wrap">
                <div class="grid12">    <div class="subhead">        <div class="logo"><img src="/img/zoombox/zoombox.png" alt="" /></div>        <ul>                        <li><a href="/zoombox">Home</a></li>                        <li><a href="/zoombox/howto">How to use</a></li>                        <li><a href="/zoombox/api">API &amp; Options</a></li>                        <li class="current"><a href="/zoombox/faq">FAQ</a></li>                        <li><a href="/contact">Contact</a></li>        </ul>    </div></div><div class="cb"></div></div><div class="content">
    <div class="wrap">
	<h2>Can I use zoombox for commercial projects (e-commerce for example) ? </h2>
	<p>Yes ! Zoombox can be used for every kind of projects but if you want to sell a template with zoombox in it (on themeforest for example) please inform me, I like to see how people integrate zoombox.</p>
	
	<h2>Is there any plugin for Wordpress ?</h2>
	<p>Not now but I'm working on it :)</p>
    </div>                <div class="cb"></div>
        </div>
	
	   <div class="footer">
    <div class="wrap">
	<div class="grid4">
	    <a href="/"><img src="/img/logo.png" alt="" /></a>
	    <p>Après avoir appris sur Internet quoi de plus normal que de partager à son tour ? Passionné par le web depuis un peu plus de 5 ans maintenant j'aime partager mes compétences et mes découvertes avec les personnes qui ont cette même passion pour le web : <strong>Vous</strong>.</p>
	    <p><a href="http://feeds.feedburner.com/Grafikart" title="RSS"><img src="/img/icons/social/rss.png" height="32" alt="" /></a> &nbsp;
<a href="http://twitter.com/grafikart_fr" title="Twitter"><img src="/img/icons/social/twitter.png" height="32" alt="" /></a> &nbsp;
<a href="https://plus.google.com/100351884537756861903" title="Google plus"><img src="/img/icons/social/googleplus.png" height="32" alt="" /></a> &nbsp;
<a href="http://www.facebook.com/pages/Grafikart/483920250642" title="Facebook"><img src="/img/icons/social/facebook.png" height="32" alt="" /></a> &nbsp;
<a href="http://www.formspring.me/Grafikart" title="Formspring"><img src="/img/icons/social/formspring.png" height="32" alt="" /></a> &nbsp;
<a href="http://fr.linkedin.com/in/grafikartfr" title="Linkedin"><img src="/img/icons/social/linkedin.png" height="32" alt="" /></a> &nbsp;
<a href="http://www.lastfm.fr/listen/user/Grafikart" title="LastFM"><img src="/img/icons/social/lastfm.png" height="32" alt="" /></a> &nbsp;</p>
	</div>
	<div class="grid4">
	    <div class="title">Dernier tweets</div>
	    	    		<div class="tweet">Lier plusieurs &lt;select&gt; entre eux <a href="http://t.co/41GCUNBs">http://t.co/41GCUNBs</a> #tutoriel #jQuery</div>
	    		<div class="tweet">@zyrtec06200 laquelle ?</div>
	    		<div class="tweet">Et si Game Of Thrones était un RPG ? <a href="http://t.co/rqfSHqGe">http://t.co/rqfSHqGe</a> #spoiler</div>
	    	</div>
	<div class="grid4 prestas">
	    <div class="title">Nos prestations</div>
	    <p class="aligncenter"><img src="/img/graf-idee.png" alt="" /></p>
	    <p>Grafikart est associée à l'<a href="http://www.ideematic.com" title="Agence web et de communication Idéematic à Strasbourg">Agence web Idéematic</a>  pour vous proposer un
concentré de compétences en :</p>
		<p><a href="/creation-site-internet-hebergement-dedie-formation-developpeur-web-communication-toulon-strasbourg">Voir nos prestations »</a></p>
	</div>
	<div class="cb"></div>
    </div>
</div>	
	
        
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->Session->flash('Auth'); ?>
        
        
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>    <script type="text/javascript" src="/js/zoombox/zoombox.js"></script>
	<script type="text/javascript">
//<![CDATA[
    $(function(){        $('a.zoombox').zoombox();    });
//]]>
</script>                    
    </body>
    
</html>
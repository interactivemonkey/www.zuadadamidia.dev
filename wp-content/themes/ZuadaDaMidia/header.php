<?php session_start(); ?>
<?php global $DIR; 
$DIR = "http://localhost/wordpress/wp-content/themes/ZuadaDaMidia"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
  <meta name="keywords" content="Rádio Sampaio 92,5 FM & 870 AM">
  <meta name="description" content="Rádio Sampaio 92,5 FM & 870 AM">
  <meta name="author" content="Agência Interactive MOnkey">
  <meta name="robots" content="index,follow">
    <title>Zuada da Mídia</title>
    
    <link rel="icon" href="<?php echo get_bloginfo('template_url'); ?>/img/icon.png" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	 <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/css/swiper.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/style.css" />  
		
    <script type="text/javascript" src="<?php echo get_bloginfo('template_url'); ?>/js/jquery-1.7.1.min.js"></script>
    <?php wp_head();?>
	 <script>
		$(document).ready(function(){
			var face = $('.fb-page').length;
			if(face > 0){
				//$('.fb-page span').attr('style','');
			}
		});
	 </script>
</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<body>
<!-- BARRA HEADER -->
<div class="container-fluid full-container">
   <div class="container barra-header">
		<div class="col-lg-12 col-md-12">
	
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
				<img class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/logo.png"/>
			</div>
			
			<div class="full-container col-lg-8 col-md-8 pull-right">
				<img style="width:100%;height:95px;margin-top:10px;" class="pull-right" src="<?php echo get_bloginfo('template_url'); ?>/img/pub.jpg"/>
			</div>	
			
			<div class="full-container col-lg-8 col-md-8 pull-right">
				<div class="col-lg-12 col-md-12 pull-right full-container">
					<a class="pull-right social" href="#"><img src="<?php echo get_bloginfo('template_url'); ?>/img/facebook.png" /></a>
					<a class="pull-right social" href="#"><img src="<?php echo get_bloginfo('template_url'); ?>/img/twitter.png" /></a>
					<a class="pull-right social" href="#"><img src="<?php echo get_bloginfo('template_url'); ?>/img/youtube.png" /></a>
					<a class="pull-right social" href="#"><img src="<?php echo get_bloginfo('template_url'); ?>/img/instagram.png" /></a>
				</div>
			</div>
			<!-- LOGO -->  
      
		<!-- MENU NAVEGACAO-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 menu">
       	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 full-container">
               <nav class="navbar navbar-default full-container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button>
                  </div>
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse full-container" id="bs-example-navbar-collapse-1">
                     <ul class="nav navbar-nav">
                        <li><a href="#">Tv</a></li>
                        <li><a href="#">Rádio</a></li>
                        <li><a href="#">Impresso</a></li>
                        <li><a href="#">Assessoria</a></li>
                        <li><a href="#">Web</a></li>
                        <li><a href="#">Séries</a></li>
								<li><a href="#">Nacional</a></li>
								<li><a href="#">Especial</a></li>
								<li><a href="#">Contato</a></li>
                     </ul>
                   </div><!-- /.navbar-collapse -->
               </nav>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 full-container">
               <div class="search pull-right">
						<div class="search-in">
						  <input type="text" placeholder="buscar...">
						  <button type="submit" class="btn-search pull-right"><i class="glyphicon glyphicon-search"></i></button>
						</div>
               </div>
            </div>
                <!-- SEARCH-->   
        </div>
        <!-- MENU NAVEGACAO -->
     </div>   
   </div>
</div>
<!-- FIM DA BARRA HEADER -->
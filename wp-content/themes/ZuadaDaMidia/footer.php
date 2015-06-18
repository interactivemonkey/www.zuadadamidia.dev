<?php wp_footer(); ?>
<div class="container-fluid full-container footer">
	<div class="container">
    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
    	<div class="col-lg-12">
			<h1 class="logo-footer"> </h1>
            <h6>&copy;Copyright - <?php echo date('Y') ?> - Zuada da Mídia. Todos os direitos reservados.</h6>
            <h6>Rua Tal e tal, nº 99 - Bairro - Maceió - AL.</h6>
        </div>
    </div>
   </div> 
</div>   
<div class="container-fluid full-container AgenciaInteractiveMonkey">
	<div class="container">
    	<div class="col-lg-12">
            <h6><a href="http://www.interactivemonkey.com.br" target="_blank">Desenvolvido por Agência Interactive MOnkey</a></h6>
        </div>
    </div>
</div>   

	<!-- Swiper JS -->
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/swiper.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
		loop: true
    });
    </script> 
</body>
</html>
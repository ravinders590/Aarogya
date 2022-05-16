<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
	jQuery(function(){
	jQuery('.main-slider').slick({
		dots: true,
		arrows: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2000,
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
			{
			breakpoint: 1024,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				dots: true
			}
			},
			{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
			},
			{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
		});
	
		if(jQuery(".back-to-top").length){jQuery(document).on('click','#back-to-top',function(){jQuery('html,body').animate({'scrollTop':0},1000,'easeInOutExpo');return false;});jQuery(document).scroll(function(){var y=jQuery(this).scrollTop();if(y>300)
		jQuery('#back-to-top').fadeIn();else
		jQuery('#back-to-top').fadeOut();});}
	})
</script> 
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:600%2C700%2C800%7CRoboto:500%2C400&amp;display=swap" rel="stylesheet" property="stylesheet" media="all" type="text/css" >
     
      <link rel="preload" as="font" id="rs-icon-set-revicon-woff" href="wp-content/plugins/revslider/public/assets/fonts/revicons/revicons90c6.woff?5510888" type="font/woff" crossorigin="anonymous" media="all" />
      <link rel='stylesheet' id='breno_vc_google_fonts_shortcode_rand_40-css'  href='http://fonts.googleapis.com/css?family=Dancing+Script%3Aregular%2C700&amp;ver=5.9.3' type='text/css' media='all' />
      <link rel='stylesheet' id='breno_vc_google_fonts_shortcode_rand_51-css'  href='http://fonts.googleapis.com/css?family=Dancing+Script%3Aregular%2C700&amp;ver=5.9.3' type='text/css' media='all' />
      <link rel='stylesheet' id='breno_vc_google_fonts_shortcode_rand_53-css'  href='http://fonts.googleapis.com/css?family=Dancing+Script%3Aregular%2C700&amp;ver=5.9.3' type='text/css' media='all' />
      <link rel='stylesheet' id='breno_vc_google_fonts_shortcode_rand_61-css'  href='http://fonts.googleapis.com/css?family=Dancing+Script%3Aregular%2C700&amp;ver=5.9.3' type='text/css' media='all' />
      <link rel='stylesheet' id='breno_vc_google_fonts_shortcode_rand_64-css'  href='http://fonts.googleapis.com/css?family=Dancing+Script%3Aregular%2C700&amp;ver=5.9.3' type='text/css' media='all' />
      <link rel='stylesheet' id='breno_vc_google_fonts_shortcode_rand_67-css'  href='http://fonts.googleapis.com/css?family=Dancing+Script%3Aregular%2C700&amp;ver=5.9.3' type='text/css' media='all' />
      <link rel='stylesheet' id='lean-modal-css-css'  href='<?php echo SITE_ASSETS; ?>/css/modal.min.css' type='text/css' media='all' />
      <script src="<?php echo SITE_ASSETS; ?>/js/other.js"></script>
   </body>
   
</html>
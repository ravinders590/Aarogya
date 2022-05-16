<?php
include_once 'basicConf.php';
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">
   
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo SITE_TITLE; ?></title>
        <link rel='stylesheet' id='wp-block-library-css'  href='<?php echo SITE_ASSETS; ?>/css/style.min.css' type='text/css' media='all' />
        <link href="<?php echo SITE_ASSETS; ?>/css/top_head.css" type="text/css" rel="stylesheet">
        <link rel='stylesheet' id='wc-blocks-vendors-style-css'  href='<?php echo SITE_ASSETS; ?>/css/vendor.css' type='text/css' media='all' />
        <link rel='stylesheet' id='wc-blocks-style-css'  href='<?php echo SITE_ASSETS; ?>/css/wp-block-style.css' type='text/css' media='all' />
        <style id='global-styles-inline-css' type='text/css'>body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #FFF;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--dark-gray: #111;--wp--preset--color--light-gray: #767676;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}</style>
        <link rel='stylesheet' id='contact-form-7-css'  href='<?php echo SITE_ASSETS; ?>/css/contact7.css' type='text/css' media='all' />
        <link rel='stylesheet' id='charitable-styles-css'  href='<?php echo SITE_ASSETS; ?>/css/charitable.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='js_composer_front-css'  href='<?php echo SITE_ASSETS; ?>/css/js_composer.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='breno-min-css'  href='<?php echo SITE_ASSETS; ?>/css/theme.min.css' type='text/css' media='all' />
        <link rel='stylesheet' id='breno-style-css'  href='<?php echo SITE_ASSETS; ?>/css/breno-theme.css' type='text/css' media='all' />
        <link rel='stylesheet' id='breno-shortcode-css'  href='<?php echo SITE_ASSETS; ?>/css/breno-shortcode.css' type='text/css' media='all' />
        <link rel='stylesheet' id='breno-theme-style-css'  href='<?php echo SITE_ASSETS; ?>/css/theme_29.css' type='text/css' media='all' />
        <style id='breno-theme-style-inline-css' type='text/css'>/*
        * Breno Theme Page Style
        */
        body {
        }.breno-content > .breno-content-inner{padding-top: 0px;padding-bottom: 0px;
        }
        </style>
        

        <link rel='stylesheet' id='breno_vc_google_fonts_shortcode_rand_6-css'  href='http://fonts.googleapis.com/css?family=Dancing+Script%3Aregular%2C700&amp;ver=5.9.3' type='text/css' media='all' />
        <link rel='stylesheet' id='breno_vc_google_fonts_shortcode_rand_17-css'  href='http://fonts.googleapis.com/css?family=Dancing+Script%3Aregular%2C700&amp;ver=5.9.3' type='text/css' media='all' />
        <link rel='stylesheet' id='breno_vc_google_fonts_shortcode_rand_19-css'  href='http://fonts.googleapis.com/css?family=Dancing+Script%3Aregular%2C700&amp;ver=5.9.3' type='text/css' media='all' />
        <link rel='stylesheet' id='breno_vc_google_fonts_shortcode_rand_27-css'  href='http://fonts.googleapis.com/css?family=Dancing+Script%3Aregular%2C700&amp;ver=5.9.3' type='text/css' media='all' />
        <link rel='stylesheet' id='breno_vc_google_fonts_shortcode_rand_30-css'  href='http://fonts.googleapis.com/css?family=Dancing+Script%3Aregular%2C700&amp;ver=5.9.3' type='text/css' media='all' />
        <link rel='stylesheet' id='breno_vc_google_fonts_shortcode_rand_33-css'  href='http://fonts.googleapis.com/css?family=Dancing+Script%3Aregular%2C700&amp;ver=5.9.3' type='text/css' media='all' />
        <script type='text/javascript' id='charitable-sessions-js-extra'>
        var CHARITABLE_SESSION = {"ajaxurl":"","id":"","cookie_name":"charitable_session","expiration":"86400","expiration_variant":"82800","secure":"","cookie_path":"\/","cookie_domain":"","generated_id":"babda1dc68d86b2f824226c5776f5667","disable_cookie":""};
        </script>
        <script type='text/javascript' src='<?php echo SITE_ASSETS; ?>/js/jquery.min.js' id='jquery-core-js'></script> 
        <link rel="icon" href="<?php echo SITE_FAVICON;?>" sizes="32x32" />

        <link href="<?php echo SITE_ASSETS; ?>/css/vc_composer.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="<?php echo SITE_ASSETS; ?>/css/main.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

      <noscript>
         <style>.wpb_animate_when_almost_visible { opacity: 1; }</style>
      </noscript>
   </head>
   <body class="home page-template-default page page-id-5670 wp-embed-responsive theme-breno woocommerce-no-js wpb-js-composer js-comp-ver-6.8.0 vc_responsive" data-scroll-time="" data-scroll-distance="">
      <div class="mobile-header">
         <div class="mobile-header-inner hidden-lg-up hidden-lg-land-up">
            <div class="container">
               <ul class="mobile-header-items nav pull-left">
                  <li class="nav-item">
                     <div class="nav-item-inner">
                        <div class="mobile-logo"><a href="<?php echo SITE_URL;?>/" title="Breno" ><img class="custom-logo img-responsive" src="<?php echo SITE_LOGO;?>" alt="Aarogya Wellness" title="Aarogya Wellness" /></a></div>
                     </div>
                  </li>
               </ul>
               <ul class="mobile-header-items nav pull-right">
                  <li class="nav-item">
                     <div class="nav-item-inner"> <a class="mobile-bar-toggle" href="#"><i class="fa fa-bars"></i></a></div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="mobile-bar animate-from-top">
         <a class="mobile-bar-toggle close" href="#"></a>
         <div class="mobile-bar-inner">
            <div class="container">
               <ul class="mobile-bar-items nav flex-column mobile-bar-middle">
                  <li class="nav-item">
                     <div class="nav-item-inner">
                        <div class="mobile-logo"><a href="index.html" title="Breno" ><img class="img-responsive" src="wp-content/uploads/sites/29/2019/02/logo-dark1.png" alt="Breno" title="Breno" /></a></div>
                     </div>
                  </li>
                  <li class="nav-item">
                     <div class="nav-item-inner">
                        <div class="breno-mobile-main-menu"></div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
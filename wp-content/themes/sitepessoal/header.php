<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <!-- Site fica responsivo -->
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
  <?php wp_head(); ?>
  <style type="text/css">
  .half_bg,
  .social_area2,
  .welcome_box {
    background-color: <?php echo get_theme_mod('as_color'); ?>;
  }
  .welcome_name span {
    color: <?php echo get_theme_mod('as_color'); ?>;
  }
  </style>

</head>
<body <?php body_class(); ?>>
  <div class="half_bg"></div>
<header>
  <div class="container header_height">
    <div class="row">
      <div class="col-sm">
        <h1><?php bloginfo('name'); ?></h1>
        <h3><?php bloginfo('description'); ?></h3>
      </div>
      <div class="col-sm d-flex justify-content-end align-items-center">
        <div class="social_area">

          <?php if(get_theme_mod('as_facebook')): ?>
            <div class="social_button">
              <a href="<?php echo get_theme_mod('as_facebook'); ?>">
                <img src="<?php echo get_template_directory_uri().'/assets/images/facebook.png'; ?>"/>
              </a>
            </div>  
          <?php endif; ?> 

          <?php if(get_theme_mod('as_instagram')): ?>      
            <div class="social_button">
              <a href="<?php echo get_theme_mod('as_instagram'); ?>">
                <img src="<?php echo get_template_directory_uri().'/assets/images/instagram.png'; ?>"/>
              </a>
            </div>
          <?php endif; ?>

          <?php if(get_theme_mod('as_twitter')): ?>
            <div class="social_button">
              <a href="<?php echo get_theme_mod('as_twitter'); ?>">
                <img src="<?php echo get_template_directory_uri().'/assets/images/twitter.png'; ?>"/>
              </a>
            </div>
          <?php endif; ?>

          <?php if(get_theme_mod('as_wordpress')): ?>
            <div class="social_button">
              <a href="<?php echo get_theme_mod('as_wordpress'); ?>">
                <img src="<?php echo get_template_directory_uri().'/assets/images/wordpress.png'; ?>"/>
              </a>
            </div>
          <?php endif; ?>

          <?php if(get_theme_mod('as_youtube')): ?>
            <div class="social_button">
              <a href="<?php echo get_theme_mod('as_youtube'); ?>">
                <img src="<?php echo get_template_directory_uri().'/assets/images/youtube.png'; ?>"/>
              </a>
            </div>
          <?php endif; ?>

        </div>        
      </div>
    </div>
  </div>
</header>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700|Unna:400,400i,700" rel="stylesheet">
    <style>
      .jumbotron {
        background: url(<?php echo get_theme_mod('jumbotron_image', get_template_directory_uri().'/img/jumbotron.jpg'); ?>);
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-position: center center;
      }
    </style>
    <?php wp_head(); ?>
</head>
<body id="top" <?php body_class(); ?>>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
          <div class="logo-group">
            <a class="navbar-brand logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php
            // Display the Custom Logo
            the_custom_logo();

            // No Custom Logo, just display the site's name
            if (!has_custom_logo()) {
                ?>
                <h1><?php bloginfo('name'); ?></h1>
                <?php
            }
            ?></a>
          </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            		wp_nav_menu( array(
            			'theme_location'    => 'primary',
            			'depth'             => 2,
            			'container'         => 'div',
            			'container_class'   => 'collapse navbar-collapse',
            			'container_id'      => 'navbarsExample01',
            			'menu_class'        => 'navbar-nav mr-auto',
            			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            			'walker'            => new WP_Bootstrap_Navwalker(),
            		) );
            		?>
                <!-- collapse navbar-collapse -->
        </div>
        <!-- container -->
    </nav>

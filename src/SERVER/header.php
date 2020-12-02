<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-fixed-footer="<?php echo get_theme_mod('footer_fixed'); ?>">
<header class="main-header">
    <nav class="navbar navbar-light">
        <h3>
            <a class="navbar-brand" href="/" title="<?php echo get_bloginfo() ?>">
				<?php echo get_bloginfo() ?>
            </a>
        </h3>
    </nav>
</header>

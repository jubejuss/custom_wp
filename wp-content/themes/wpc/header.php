<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
</head>
 
<body <?php body_class(); ?>>
<div class="container">
    <header class="site-header">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <?php 
        /* laeb sisse header widget area */
        if ( is_active_sidebar( 'header-widget-area' ) ) : ?>
<ul id="header-widgets">
<?php dynamic_sidebar( 'header-widget-area' ); ?>
</ul>
<?php endif; ?>

        <h4><?php bloginfo( 'description' ); ?></h4>
        
        <nav class="main-navigation">
			<?php $args = [ 'theme_location' => 'primary' ]; ?>
			<?php wp_nav_menu( $args ) ?>
        </nav>     
    </header>
    <?php if(is_page( 'demoleht' )) : ?>
       <!-- siis ilmub kommentaar kui on demoleht-->
	<?php endif ?>
    <?php 
        /* laeb sisse center widget area */
        if ( is_active_sidebar( 'center-widget-area' ) ) : ?>
<ul id="center-widgets">
<?php dynamic_sidebar( 'center-widget-area' ); ?>
</ul>
<?php endif; ?>
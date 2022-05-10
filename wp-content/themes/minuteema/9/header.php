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
        <h4><?php bloginfo( 'description' ); ?></h4>
        <nav class="main-navigation">
			<?php $args = [ 'theme_location' => 'primary' ]; ?>
			<?php wp_nav_menu( $args ) ?>
        </nav>
    </header>
    <?php if(is_page( 'suur-galerii' )) : ?>
        <h3>Tore, et külastate lehte</h3>
	<?php endif ?>
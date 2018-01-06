<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?> </title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"/>

</head>
<body>
    <section class="body">
        <header>
            <h1>
                <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                } else {
                    echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                }
                ?>
            </h1>
            <nav>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </nav>
        </header>


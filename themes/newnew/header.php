<!doctype html>
<html <?php language_attributes() ?>>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>" />
	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
	<?php wp_body_open() ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
                wp_nav_menu(
                    [
                        'menu'            => 'header',
                        'link_before'     => '',
                        'link_after'      => '',
                        'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0',
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarSupportedContent',
                        'add_li_class'    => 'nav-item',
                        'add_a_class'     => 'nav-link',
                    ]
                );
            ?>
        </div>
    </div>
</nav>
	
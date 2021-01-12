<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
</head>
<!--<body class="bg-light">-->

<body data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">

<div class="site-wrap">

    <nav class="site-menu" id="ftco-navbar-spy">
        <?php  
            echo wp_nav_menu(array(
                'localtion' => 'primary',
                'container_class' => 'site-menu-inner',
                'container_id' => 'ftco-navbar',
                'menu_class' => 'list-unstyled',
            ));
        ?>
    </nav>

    <header class="site-header">
        <div class="row align-items-center">
            <div class="col-5 col-md-3">

            </div>
            <div class="col-2 col-md-6 text-center site-logo-wrap">
                
                <?php  
                    if(has_custom_logo()){
                        echo get_custom_logo();
                    }else{
                ?>
                    <a href="<?php echo site_url(); ?>" class="site-logo"><?php echo get_bloginfo('name'); ?></a>
                <?php
                }
                ?>
            </div>
            <div class="col-5 col-md-3 text-right menu-burger-wrap">
                <a href="#" class="site-nav-toggle js-site-nav-toggle"><i></i></a>

            </div>
        </div>

    </header> <!-- site-header -->
<!doctype html>
<html lang=en>

<head>
    <meta name=generator content="Hugo 0.62.1">
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta http-equiv=x-ua-compatible content="ie=edge">
    <style>
        .rad-fade-in {
            will-change: opacity, transform;
            animation-name: rad-fade-in-fallback;
            animation-duration: 5s;
            animation-fill-mode: both
        }
        
        @keyframes rad-fade-in-fallback {
            0% {
                opacity: 0
            }
            75% {
                opacity: 0
            }
            100% {
                opacity: 1
            }
        }
        
        .fonts-loaded .rad-fade-in.rad-waiting {
            animation-name: none;
            opacity: 0
        }
        
        .fonts-loaded .rad-fade-in.rad-animate {
            animation-name: rad-fade-in;
            animation-duration: 1.1s;
            animation-fill-mode: both
        }
        
        @keyframes rad-fade-in {
            0% {
                opacity: 0
            }
            100% {
                opacity: 1
            }
        }
        
        .rad-fade-in-long {
            will-change: opacity, transform;
            animation-name: rad-fade-in-long-fallback;
            animation-duration: 8s;
            animation-fill-mode: both
        }
        
        @keyframes rad-fade-in-long-fallback {
            0% {
                opacity: 0
            }
            75% {
                opacity: 0
            }
            100% {
                opacity: 1
            }
        }
        
        .fonts-loaded .rad-fade-in-long.rad-waiting {
            animation-name: none;
            opacity: 0
        }
        
        .fonts-loaded .rad-fade-in-long.rad-animate {
            animation-name: rad-fade-in-long;
            animation-duration: 2s;
            animation-fill-mode: both
        }
        
        @keyframes rad-fade-in-long {
            0% {
                opacity: 0
            }
            20% {
                opacity: 0
            }
            100% {
                opacity: 1
            }
        }
        
        .rad-fade-down {
            will-change: opacity, transform;
            animation-name: rad-fade-down-fallback;
            animation-duration: 5s;
            animation-fill-mode: both;
            transform: translateY(-30px)
        }
        
        @keyframes rad-fade-down-fallback {
            0% {
                opacity: 0;
                transform: translateY(-30px)
            }
            75% {
                opacity: 0;
                transform: translateY(-30px)
            }
            100% {
                opacity: 1;
                transform: translateY(0)
            }
        }
        
        .fonts-loaded .rad-fade-down.rad-waiting {
            animation-name: none;
            opacity: 0;
            transform: translateY(-30px)
        }
        
        .fonts-loaded .rad-fade-down.rad-animate {
            animation-name: rad-fade-down;
            animation-duration: 1.1s
        }
        
        @keyframes rad-fade-down {
            0% {
                opacity: 0;
                transform: translateY(-30px)
            }
            100% {
                opacity: 1;
                transform: translateY(0)
            }
        }
        
        .rad-scale-down {
            will-change: opacity, transform;
            animation-name: rad-scale-down-fallback;
            animation-duration: 5s;
            animation-fill-mode: both;
            transform-origin: 50% 0
        }
        
        @keyframes rad-scale-down-fallback {
            0% {
                opacity: 0;
                transform: scaleY(0.95)
            }
            75% {
                opacity: 0;
                transform: scaleY(0.95)
            }
            100% {
                opacity: 1;
                transform: scaleY(1)
            }
        }
        
        .fonts-loaded .rad-scale-down.rad-waiting {
            animation-name: none;
            opacity: 0;
            transform: scaleY(0.95)
        }
        
        .fonts-loaded .rad-scale-down.rad-animate {
            animation-name: rad-scale-down;
            animation-duration: 1.1s;
            animation-fill-mode: both
        }
        
        @keyframes rad-scale-down {
            0% {
                opacity: 0;
                transform: scaleY(0.95)
            }
            100% {
                opacity: 1;
                transform: scaleY(1)
            }
        }
    </style>
    <link rel=stylesheet href="<?php bloginfo('template_url'); ?>/assets/css/main.css">
    <link rel=stylesheet href="<?php bloginfo('template_url'); ?>/assets/css/rad-icons.css">
    <link rel=stylesheet href="<?php bloginfo('template_url'); ?>/assets/css/custom.css">
    <?php wp_head(''); ?>
</head>

<body>
    <header class="header fixed-top rad-animation-group" id=header>
        <div class="container rad-fade-in">
            <nav class="navbar navbar-expand-lg navbar-light p-0"><a class=navbar-brand href="<?php bloginfo('url'); ?>"><span><?php echo rdty_option('rdty_name'); ?></span>
<span><?php echo rdty_option('rdty_surname'); ?></span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent, #header" aria-controls=navbarSupportedContent aria-expanded=false aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                    <?php if ( has_nav_menu( 'primary' ) ){ wp_nav_menu(array ('theme_location'=> 'primary','container'=> FALSE,'container_id'=> FALSE,'menu_class'=> false,'menu_id'=> false,'items_wrap'      => '%3$s','add_li_class'  => 'nav-item','add_link_class'  => 'nav-link','depth'=> 0)); } else { } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    
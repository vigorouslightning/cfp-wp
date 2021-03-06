<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,600i,800" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.0.0.slim.min.js" integrity="sha256-Rf4BadfyCtsvHmO89BUZcbYvNNvZvOT08ALfEzvCsD0=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title><?php the_title(); ?> | Capital Financial Planners</title>
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/CFP/style.css">
	<script>
	    /*$(function() {
            $('.scroll-down-button').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                         $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });*/
        
        $(document).ready(function () {
            $('.scroll-down-button').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top + 'px'
                        }, 750);
                    return false;
                    }
                }
            });
        });
	</script>
</head>
<body>
    <nav class="nav">
        
        <div class="container nav-wrapper" style="display: flex; flexwrap: nowrap; position: relative;">
                <a class="main-logo" href="/"><img src="/wp-content/themes/CFP/cfp_logo.gif" /></a>
            <div class="right-nav-wrapper">
                <div class="top-menu">
                    <a href="#"><span class="fi flaticon-facebook"></span></a>
                    <a href="#"><span class="fi flaticon-linkedin"></span></a>
                    <a href="#"><span class="fi flaticon-twitter"></span></a>
                    <a href="#"><span class="fi flaticon-youtube"></span></a>
                    <!-- <a href="#"><span class="fi flaticon-login"></span><span class="nav-text">Login</span></a> -->
                </div>
                <div id="main-nav">
                    <?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'primary',
					) );
				    ?>
                </div>
            </div>
        </div>
    </nav>

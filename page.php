<?php
/**
 * Template Name: Generic Page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="container content">
    <h1><span><?php the_title(); ?></span></h1>
    <?php
    while ( have_posts() ) : the_post(); 
        the_content();
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
</div>
<?php get_footer() ?>
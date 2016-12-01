<?php
/**
 * Template Name: Two Column Page
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="container content">
    <h1><?php the_title(); ?></h1>
    <div class="row">
        <div class="col-md-6 first-column">
            <?php
            while ( have_posts() ) : the_post(); 
                the_field("firstColumn");
            ?>
        </div>
        <div class="col-md-6">
            <?php
                the_field("secondColumn");
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
            ?>
        </div>
    </div>
</div>
<?php get_footer() ?>
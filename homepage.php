<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<section class="home">
    <div class="container">
        <!--
        <div class="xl" style="display: none">Extra Large</div>
        <div class="lg" style="display: none">Large</div>
        <div class="md" style="display: none">Medium</div>
        <div class="sm" style="display: none">Small</div>
        <div class="xs" style="display: none">Extra Small</div> -->
        <div class="row">
            <div class="col-lg-7">
                <p class="intro">We are a team of experienced professionals that pride ourselves in helping you pursue your short and long term goals by creating a well-defined and realistic financial plan to help lead you towards a comfortable and more enjoyable
                    retirement. We focus heavily on strategic tax and estate planning to create a tax friendly distribution and legacy plan for clients. In addition, we focus on strategies that strive to maximize your social security as well as incorporate
                    important employee benefits into your retirement plan, specifically for the public sector and federal employees.</p>
                <a class="button" href="#">Meet The Team</a>
                <a class="button" href="#">Contact Us</a>
            </div>
            <div class="col-lg-5" style="padding-top: 50px">
                <?php
                    $sidebar_page = new WP_Query('pagename=Home');
                    $sidebar_page->the_post();
                ?>
                    <div class="embed-responsive embed-responsive-16by9"">
                        <?php the_field("home_page_video"); ?>
                    </div>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <a class="scroll-down-button" href="#second"><span class="fi flaticon-down-chevron"></span></a>
    <div class="intro-footer"></div>
</section>
<div class="content" id="second">
    <div class="container">
        <div class="card-wrapper row">
            <div class="col-lg-6">
                <div class="card">
                    <h3 class="card-header">Our Process<span class="fi flaticon-process pull-xs-right"></span></h3>
                    <div class="card-block">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="cfp-link">Our Process&nbsp;<span class="fi flaticon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <h3 class="card-header">Seminars<span class="fi flaticon-presentation pull-xs-right"></span></h3>
                    <div class="card-block">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="cfp-link">Learn More&nbsp;<span class="fi flaticon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <h3 class="card-header">Business Relationships<span class="fi flaticon-handshake pull-xs-right"></span></h3>
                    <div class="card-block">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="cfp-link">Learn More&nbsp;<span class="fi flaticon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <h3 class="card-header">FAQs<span class="fi flaticon-question pull-xs-right"></span></h3>
                    <div class="card-block">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="cfp-link">View our FAQs&nbsp;<span class="fi flaticon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
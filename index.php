<?php 
/* 
Template name: home
Author: Madbunny
*/
?>
<?php get_header(); ?>
<!-- banner -->
<section style="background:url(<?=get_template_directory_uri(); ?>/img/banner.jpg)" class="bg" id="home">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center" data-aos="fade-up">
                <div class="home-content">
                    <h1><?php the_field("title_banner"); ?></h1>
                    <p><?php the_field('text_banner'); ?></p>                          
                    <div class="btn-border">
                        <a href="#">Download Free</a>
                    </div>   
                    <div class="btn-border">
                        <a href="#">Contact us</a>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <div class="banner-phone">
        <img src="<?=get_template_directory_uri(); ?>/img/smartphone.png">
    </div>
    <div class="banner-white-element">
        <img src="<?=get_template_directory_uri(); ?>/img/white-element.png)" >
    </div>
</section>



<!-- about -->
<section id="about">
    <div class="container">
        <div class="row">        
            <div class="col-xl-3 col-md-4 col-sm-4 offset-xl-1 align-center-flex col-hide" data-aos="fade-up">
                <img class="smartphone-img" src="<?=get_template_directory_uri(); ?>/img/smartphone.png">
            </div>
            <div class="col-xl-7 col-md-8 col-sm-8 col-12 offset-xl-1 text-center">
                <div class="row">
                    <div class="col-xl-5 col-md-6 offset-xl-1" data-aos="fade-up">
                        <div class="icon-content icon1">
                            <img src="<?php the_field('icon_about_1'); ?>" >
                            <h5><?php the_field('title_about_1'); ?></h5>
                            <div><?php the_field('text_about_1'); ?></div>                            
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6 offset-xl-1"data-aos="fade-up">
                        <div class="icon-content icon2">
                            <img src="<?php the_field('icon_about_2'); ?>" >
                            <h5><?php the_field('title_about_2'); ?></h5>
                            <div><?php the_field('text_about_2'); ?></div>                            
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6"data-aos="fade-up">
                        <div class="icon-content icon3">
                            <img src="<?php the_field('icon_about_3'); ?>" >
                            <h5><?php the_field('title_about_3'); ?></h5>
                            <div><?php the_field('text_about_3'); ?></div>                            
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6 offset-xl-1"data-aos="fade-up">
                        <div class="icon-content icon4">
                            <img src="<?php the_field('icon_about_4'); ?>" >
                            <h5><?php the_field('title_about_4'); ?></h5>
                            <div><?php the_field('text_about_4'); ?></div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- advantages -->
<section id="advantages">
    <div class="container">
        <div class="row">
            <div class="col-md-5"data-aos="fade-up">
                <h2><?php the_field('title_adv'); ?></h2>
                <div class="left-content"><?php the_field('text_adv'); ?></div>
                <div class="blue-btn"><a href="#">Download</a></div>
            </div>
            <div class="col-md-6 offset-md-1">
            <?php
                $args = array(               
                    'post_type'         => 'advantages',
                    'post_status'       => 'publish',
                    'posts_per_page'    => -1
                );
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) : 
                    while ( $my_query->have_posts() ) : 
                        $my_query->the_post();
            ?>

                <div class="advantages-content"  hidden-text data-aos="fade-up">
                    <div class="row">
                        <div class="col-md-2 col-2">
                            <img src="<?php the_field('icon')?>">
                        </div>
                        <div class="col-md-10 col-10 ">
                            <h4><?php echo $post->post_title; ?></h4>
                            <div class="hidden-text"><?php the_field('text'); ?></div>
                        </div>
                    </div>
                </div>

            <?php   endwhile; 
                endif;
                wp_reset_query();
            ?>  
            </div>
        </div>
    </div>
</section>
<!-- requirements -->
<section id="requirements">
    <div class="container">
        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
                <img src="<?php the_field('left_image_req');?>">
            </div>
            <div class="col-md-5 offset-lg-1" data-aos="fade-up">
                <h2><?php the_field('right_title_req'); ?></h2>
                <div class="req"><?php the_field('right_content_req'); ?></div>
            </div>
        </div>
    </div>
</section>
<!-- app -->
<section id="app" style="background:url(<?php the_field('background_app');?>);" class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-3 offset-md-2" data-aos="fade-up">
                <img src="<?=get_template_directory_uri()?>/img/smartphone.png">
            </div>
            <div class="col-md-5 offset-md-1 align-center-flex-column" data-aos="fade-up">
                <h2><?php the_field('title_app'); ?></h2>
                <div class="white-text"><?php the_field('text_app'); ?></div>
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-6"><a href="#"><img class="platform-logo" src="<?=get_template_directory_uri()?>/img/ios.png"></a></div>
                    <div class="col-md-5 col-sm-6 col-6"><a href="#"><img  class="platform-logo" src="<?=get_template_directory_uri()?>/img/android.png"></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="special-btn" >
        <a href="#">GET THE APP TODAY</a>
    </div>
</section>
<!-- Subscribe -->
<section id="subscribe">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-md-12 text-center" >
                <h2><?php the_field('title_sub'); ?></h2>
                <div>
                    <?php the_field('text_sub'); ?>
                </div>
            </div>
        </div>
        <form action="<?=get_template_directory_uri()?>/action.php" id="myForm" method="POST">
            <div class="row justify-content-center">        
                <div class="col-md-6">
                    <input type="email" name="email" placeholder="E-mail">
                </div>
                <div class="col-md-3">
                    <button type="submit">Count me in</button>
                </div>
            
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                <p id="message"></p>
                </div>
            </div>
        </form>
    </div>
</section>
<?php get_footer(); ?>
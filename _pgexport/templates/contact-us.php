<?php
/*
 Template Name: Contact Us
 Template Post Type: post, page
*/
?>
<?php get_header(); ?>

<section class="hero-banner py-120" style="position: relative;"> 
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="flex"> 
            <div class="w-10/12"> 
                <h1 class="hero-title"><?php echo get_field( 'banner_title' ); ?></h1> 
                <div class="hero-content mb-5">
                    <?php echo get_field( 'banner_content' ); ?>
                </div>                     
            </div>                 
        </div>             
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-eclipse-left.svg" class="cirle-left"> 
</section>     
<section class="your-project py-120 border-y border-#F2F2F2" style="position: relative;"> 
    <div class="max-w-[90vw] mx-auto py-8 w-full lg:container"> 
        <div class="flex flex-row sm:flex gap-10"> 
            <div class="sm:w-12/12 md:w-6/12"> 
                <h3 class="large-inner-heading pb-5"> <?php _e( 'LEt’s work on your project', 'mage_hd_theme' ); ?></h3> 
                <?php echo get_field( 'choose_form' ); ?> 
            </div>                 
            <div class="sm:w-12/12 md:w-6/12"> 
                <div class="contact-list">
                    <div class="flex flex-col gap-5"> 
                        <div class="contact-location">
                            <?php echo get_theme_mod( 'contact_info_location', __( '610 E Zack St. Ste 110-2177Tampa, FL 33602', 'mage_hd_theme' ) ); ?>
                        </div>                             
                        <div class="contact-no">
                            <?php echo get_theme_mod( 'contact_info_phone', __( '800-344-5345', 'mage_hd_theme' ) ); ?>
                        </div>                             
                        <div class="contact-email">
                            <?php echo get_theme_mod( 'contact_info_email', __( 'hello@magehd.com', 'mage_hd_theme' ) ); ?>
                        </div>                             
                    </div>                         
                    <div class="social-list flex gap-4"> <a href="<?php echo get_theme_mod( 'facebook', '#' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="" class="social-icon"></a>
                        <a href="<?php echo get_theme_mod( 'twitter', '#' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt="" class="social-icon"></a>
                        <a href="<?php echo get_theme_mod( 'linkedin', '#' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="" class="social-icon"></a>
                        <a href="<?php echo get_theme_mod( 'instagram', '#' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="" class="social-icon"></a>
                    </div>                         
                </div>                     
            </div>                 
        </div>             
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-left.svg" class="cirle-left"> 
</section>    

<?php get_footer(); ?>
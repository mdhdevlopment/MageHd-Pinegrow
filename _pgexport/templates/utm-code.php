<?php
/*
 Template Name: UTM Code
 Template Post Type: post, page
*/
?>
<?php get_header(); ?>

<section class="hero-banner py-120 relative"> 
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
<section class="build-tool py-120 relative border-y border-#F2F2F2"> 
    <div class="max-w-[90vw] mx-auto py-8 w-full lg:container"> 
        <h3 class="large-inner-heading pb-60"><?php echo get_field( 'utm_heading' ); ?></h3> 
        <h4 class="build-tool-heading pb-10"><?php echo get_field( 'utm_sub_heading' ); ?></h4> 
        <div class="large-content-text">
            <?php echo get_field( 'utm_content' ); ?>
        </div>             
        <div class="utm-url-form-wrap"> 
            <h4 class="text-center form-inner-title"><?php _e( 'Fill out the form to get your UTM url', 'mage_hd_theme' ); ?></h4> 
            <?php echo get_field( 'choose_form' ); ?> 
            <div class="large-content-text utm-description-text"> 
                <?php _e( 'Fill the required fields like Website URL , UTM Source , UTM Medium , UTM Campaign and the optional fields UTM Content and UTM Term.The URL builder will automatically generate your UTM URL. Copy the generated URL and use it in your campaigns.', 'mage_hd_theme' ); ?> 
            </div>                 
            <div class="utm-social-share"> 
                <ul> 
                    <li>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="facebook" class="utm-social-img"></a>
                    </li>                         
                    <li>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt="twitter" class="utm-social-img"></a>
                    </li>                         
                    <li>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="linkedin" class="utm-social-img"></a>
                    </li>                         
                    <li>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.svg" alt="email" class="utm-social-img"></a>
                    </li>                         
                    <li>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/reddit.svg" alt="reddit" class="utm-social-img"></a>
                    </li>                         
                </ul>                     
            </div>                 
        </div>             
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-left.svg" class="cirle-left"> 
</section>     
<section class="utm-parameter py-120 relative border-y border-#F2F2F2"> 
    <div class="max-w-[90vw] mx-auto py-8 w-full lg:container"> 
        <h3 class="large-inner-heading pb-60"><?php echo get_field( 'utm_parameters_heading' ); ?></h3> 
        <div class="large-content-text pb-60">
            <?php echo get_field( 'utm_parameters_content' ); ?>
        </div>             
        <div class="conclution-wrapper"> 
            <h3 class="large-inner-heading pb-60"><?php _e( 'Conclusion', 'mage_hd_theme' ); ?></h3> 
            <div class="large-content-text">
                <?php echo get_field( 'utm_conclusion' ); ?>
            </div>                 
        </div>             
    </div>         
</section>    

<?php get_footer(); ?>
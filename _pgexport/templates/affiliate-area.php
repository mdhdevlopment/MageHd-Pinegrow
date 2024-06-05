<?php
/*
 Template Name: Affiliate Area
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
<section class="affiliate-account py-120 border-y border-#F2F2F2">
    <div class="affiliate-container mx-auto"> 
        <h3 class="large-inner-heading pb-5 text-center"> <?php _e( 'Register a new affiliate account', 'mage_hd_theme' ); ?></h3> 
        <div class="affiliate-form-wrap">
            <h4 class="text-center affiliate-form-title"><?php _e( 'Register a new affiliate account', 'mage_hd_theme' ); ?></h4>
            <?php echo get_field( 'choose_form' ); ?> 
        </div>             
    </div>
</section>     
<section class="become-affiliate py-120 relative"> 
    <div class="max-w-[90vw] mx-auto py-8 w-full lg:container"> 
        <h3 class="large-inner-heading pb-5"><?php echo get_field( 'become_an_affiliate_heading' ); ?></h3> 
        <div class="flex flex-row sm:flex become-affiliate-row"> 
            <div class="sm:w-12/12 md:w-6/12"> 
                <div class="large-content-text">
                    <?php echo get_field( 'become_an_affiliate_content' ); ?>
                </div>
                <div class="benefit-warpper">
                    <h3 class="benefit-title"><?php _e( 'benefits', 'mage_hd_theme' ); ?></h3>
                    <div class="benefit-list">
                        <?php echo get_field( 'become_an_affiliate_benefits' ); ?>
                    </div>
                </div>                     
            </div>                 
            <div class="sm:w-12/12 md:w-6/12"> 
                <img class="benefit-img" alt="" src="<?php echo PG_Image::getUrl( get_field( 'become_an_affiliate_image' ), 'large' ) ?>"/> 
            </div>                 
        </div>             
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-left.svg" class="cirle-left"> 
</section>     
<section class="featured py-120 border-y border-#F2F2F2"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container featured-container"> 
        <h3 class="large-inner-heading text-center"><?php _e( 'We Featured IN', 'mage_hd_theme' ); ?></h3> 
        <div class="featured-list"> 
            <?php
                $industry_partners_query_args = array(
                    'post__not_in' => PG_Helper_v2::getShownPosts(),
                    'post_type' => 'industry_partners',
                    'posts_per_page' => 5,
                    'paged' => get_query_var( 'paged' ) ?: 1,
                    'order' => 'ASC',
                    'orderby' => 'date'
                )
            ?>
            <?php $industry_partners_query = new WP_Query( $industry_partners_query_args ); ?>
            <?php if ( $industry_partners_query->have_posts() ) : ?>
                <?php while ( $industry_partners_query->have_posts() ) : $industry_partners_query->the_post(); ?>
                    <?php PG_Helper_v2::rememberShownPost(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class( 'featured-logo' ); ?>> 
                        <?php echo PG_Image::getPostImage( null, 'large', array(
                                'class' => 'capa-2-icon'
                        ), 'both', null ) ?> 
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'mage_hd_theme' ); ?></p>
            <?php endif; ?> 
        </div>             
    </div>         
</section>
<section class="recog-section py-120 relative"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <h3 class="large-inner-heading text-center"> <?php _e( 'Our recognitions', 'mage_hd_theme' ); ?> </h3> 
        <div class="recog-list"> 
            <div class="recog-list-logo flex justify-center gap-5"> 
                <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/BBB-logo.svg"/> 
            </div>                 
            <div class="recog-list-logo flex justify-center gap-5"> 
                <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clucth-florida.svg"/> 
                <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clucth-us.svg"/> 
                <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clucth-black-owned.svg"/> 
                <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clucth-tampa.svg"/> 
            </div>                 
        </div>             
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-left.svg" class="cirle-left"> 
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-right.svg" class="cirle-right"> 
    </div>         
</section>
<section class="contact-us-before-footer py-120 border-y border-#F2F2F2"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <div class="contact-us-before-footer-col contact-us-before-footer-col flex flex-wrap justify-center"> 
            <h3 class="large-inner-heading text-center">  <?php _e( 'let’s create remarkable experience for your business', 'mage_hd_theme' ); ?> </h3>
            <a href="/contact-us/" class="bg-blue-btn view-all-btn"> <span><?php _e( 'Contact us', 'mage_hd_theme' ); ?></span> <i class="fa-solid fa-arrow-right"></i> </a> 
        </div>             
    </div>         
</section>    

<?php get_footer(); ?>
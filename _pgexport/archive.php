<?php
/*
 Template Name: Blog
 Template Post Type: post, page
*/
?>
<?php get_header(); ?>

<section class="hero-banner py-120" style="position: relative;"> 
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="flex"> 
            <div class="w-10/12"> 
                <h1 class="hero-title" style="font-family: 'Audiowide', sans-serif; color: #3B65AF; font-weight: 400; font-size: 70px; line-height: 100px; text-transform: uppercase;"> <?php _e( 'our recent blog post archive', 'mage_hd_theme' ); ?> </h1> 
                <div class="hero-content mb-5" style="font-family: 'Questrial', sans-serif; font-size: 26px; font-weight: 500; padding-top: 40px; padding-bottom: 40px; line-height: 36px; color: #F2F2F2;"> 
                    <?php _e( 'Learn valuable information about digital marketing.', 'mage_hd_theme' ); ?>
                </div>                     
            </div>                 
        </div>             
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-eclipse-left.svg" class="cirle-left"> 
</section>     
<section class="project py-120 border-y border-#F2F2F2"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <div class="blog-category"> 
            <!-- <button class="border-btn blog-filter-btn active" id="all">
                        All
                    </button> -->                 
            <button class="border-btn blog-filter-btn" id="category-web-design"> 
                <?php _e( 'Web Design', 'mage_hd_theme' ); ?> 
            </button>                 
            <button class="border-btn blog-filter-btn" id="category-web-development"> 
                <?php _e( 'Web Development', 'mage_hd_theme' ); ?>
            </button>                 
            <button class="border-btn blog-filter-btn" id="category-digital-marketing"> 
                <?php _e( 'Digital Marketing', 'mage_hd_theme' ); ?> 
            </button>                 
            <button class="border-btn blog-filter-btn" id="category-ecommerce"> 
                <?php _e( 'Ecommerce', 'mage_hd_theme' ); ?>
            </button>                 
        </div>             
        <?php
            $service_query_args = array(
                'post_type' => 'service',
                'posts_per_page' => 100,
                'paged' => get_query_var( 'paged' ) ?: 1,
                'order' => 'ASC',
                'orderby' => 'name'
            )
        ?>
        <?php $service_query = new WP_Query( $service_query_args ); ?>
        <?php if ( $service_query->have_posts() ) : ?>
            <?php while ( $service_query->have_posts() ) : $service_query->the_post(); ?>
                <?php PG_Helper_v2::rememberShownPost(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class( 'project-main-wrap blog-detail flex flex-wrap justify-between gap-5' ); ?>> 
                    <div class="md:w-6/12"> 
                        <?php echo PG_Image::getPostImage( null, 'large', array(
                                'class' => 'project-cover-img'
                        ), 'both', null ) ?> 
                    </div>                         
                    <div class="md:w-6/12"> 
                        <h4 class="project-title"><?php the_title(); ?></h4> 
                        <p class="medium-content-text"><?php echo get_the_excerpt(); ?></p> <a href="<?php echo esc_url( get_permalink() ); ?>" class="explore-more medium-content-text"> <span><?php _e( 'Explore', 'mage_hd_theme' ); ?></span> </a> 
                    </div>                         
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'mage_hd_theme' ); ?></p>
        <?php endif; ?> 
    </div>         
</section>     
<section class="recog-section py-120" style="position: relative;"> 
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

<?php get_footer(); ?>
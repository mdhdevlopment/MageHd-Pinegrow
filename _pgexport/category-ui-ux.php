<?php get_header(); ?>

<section class="hero-banner py-120 relative"> 
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="flex"> 
            <div class="w-10/12"> 
                <div class="hero-title"> 
                    <?php echo single_cat_title(); ?> 
                </div>                     
                <div class="hero-content mb-5"> 
                    <?php echo category_description(); ?> 
                </div>                     
            </div>                 
        </div>             
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-left.svg" class="cirle-left"> 
</section>     
<section class="our-mission py-120 border-y border-#F2F2F2 relative"> 
    <div class="max-w-[90vw] mx-auto py-8 w-full lg:container"> 
        <div class="flex flex-row sm:flex gap-5"> 
            <div class="sm:w-12/12 md:w-6/12"> 
                <img class="our-mission-img" alt="" src="<?php echo PG_Image::getUrl( get_field( 'feature_image' ), 'large' ) ?>"/> 
            </div>                 
            <div class="sm:w-12/12 md:w-6/12"> 
                <div class="large-inner-heading pb-5"> 
                    <?php _e( 'UI/UX design services', 'mage_hd_theme' ); ?> 
                </div>
                <div class="large-content-text flex flex-col gap-5">
                    <?php echo get_field( 'category_description' ); ?>
                </div>                     
            </div>                 
        </div>             
    </div>         
</section>     
<section class="uiux-design-service py-120">
    <div class="max-w-[90vw] mx-auto py-8 w-full lg:container"> 
        <div class="large-inner-heading text-center pb-60"> 
            <?php _e( 'OUR UI/UX SERVICES', 'mage_hd_theme' ); ?> 
        </div>
        <div class="large-content-text text-center flex flex-col gap-5"> 
            <?php echo category_description(); ?> 
        </div>             
        <div class="flex flex-wrap sm:flex gap-5 uixu-cat-warpper">
            <div class="sm:w-12/12 md:w-6/12 uixu-cat-info">
                <div class="large-inner-heading pb-5 uiux-title"> 
                    <?php _e( '01 Website design', 'mage_hd_theme' ); ?> 
                </div>
                <div class="large-content-text flex flex-col gap-5"> 
                    <?php echo category_description( '238,13' ); ?> 
                </div>                     
            </div>
            <div class="sm:w-12/12 md:w-6/12 uixu-cat-info">
                <div class="large-inner-heading pb-5 uiux-title"> 
                    <?php _e( '02 Mobile app design', 'mage_hd_theme' ); ?> 
                </div>
                <div class="large-content-text flex flex-col gap-5"> 
                    <?php echo category_description( '239,14' ); ?> 
                </div>                     
            </div>
            <div class="sm:w-12/12 md:w-6/12 uixu-cat-info">
                <div class="large-inner-heading pb-5 uiux-title"> 
                    <?php _e( '03 Wireframe & prototype', 'mage_hd_theme' ); ?> 
                </div>
                <div class="large-content-text flex flex-col gap-5"> 
                    <?php echo category_description( '241,15' ); ?> 
                </div>                     
            </div>
            <div class="sm:w-12/12 md:w-6/12 uixu-cat-info">
                <div class="large-inner-heading pb-5 uiux-title"> 
                    <?php _e( '04 ui/UX Audit', 'mage_hd_theme' ); ?> 
                </div>
                <div class="large-content-text flex flex-col gap-5"> 
                    <?php echo category_description( '240,16' ); ?> 
                </div>                     
            </div>
        </div>             
    </div>
</section>     
<section class="uiux-process py-120 border-y border-#F2F2F2"> 
    <div class="max-w-[90vw] mx-auto py-8 w-full lg:container"> 
        <div class="large-inner-heading text-center pb-60"> 
            <?php _e( 'OUR UI/UX process', 'mage_hd_theme' ); ?> 
        </div>
        <div class="flex flex-wrap sm:flex gap-5 justify-center uiux-process-wrapper"> 
            <div class="uiux-process-block">
                <h5><?php _e( 'Step 01', 'mage_hd_theme' ); ?></h5>
                <h4><?php _e( 'understand', 'mage_hd_theme' ); ?></h4>
            </div>
            <div class="uiux-process-block">
                <h5><?php _e( 'Step 02', 'mage_hd_theme' ); ?></h5>
                <h4><?php _e( 'Research', 'mage_hd_theme' ); ?></h4>
            </div>
            <div class="uiux-process-block">
                <h5><?php _e( 'Step 03', 'mage_hd_theme' ); ?></h5>
                <h4><?php _e( 'analyze', 'mage_hd_theme' ); ?></h4>
            </div>
            <div class="uiux-process-block">
                <h5><?php _e( 'Step 06', 'mage_hd_theme' ); ?></h5>
                <h4><?php _e( 'testing', 'mage_hd_theme' ); ?></h4>
            </div>
            <div class="uiux-process-block">
                <h5><?php _e( 'Step 05', 'mage_hd_theme' ); ?></h5>
                <h4><?php _e( 'Prototype', 'mage_hd_theme' ); ?></h4>
            </div>
            <div class="uiux-process-block">
                <h5><?php _e( 'Step 04', 'mage_hd_theme' ); ?></h5>
                <h4><?php _e( 'Wireframing', 'mage_hd_theme' ); ?></h4>
            </div>
            <div class="uiux-process-block">
                <h5><?php _e( 'final Step', 'mage_hd_theme' ); ?></h5>
                <h4><?php _e( 'Ready to launch', 'mage_hd_theme' ); ?></h4>
            </div>
        </div>
    </div>
</section>     
<section class="project py-120"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <h3 class="large-inner-heading text-center"><?php _e( 'Check out or recent website projects', 'mage_hd_theme' ); ?></h3> 
        <div class="blog-category uiux-category"> 
            <button class="border-btn uiux-btn active" id="all"> 
                <?php _e( 'All', 'mage_hd_theme' ); ?>
            </button>                 
            <button class="border-btn uiux-btn" id="category-website-project"> 
                <?php _e( 'Website Project', 'mage_hd_theme' ); ?> 
            </button>                 
            <button class="border-btn uiux-btn" id="category-mobile-app-project"> 
                <?php _e( 'Mobile App Project', 'mage_hd_theme' ); ?>
            </button>                 
        </div>             
        <div class="project-main-wrapper flex flex-wrap justify-between gap-5"> 
            <?php
                $service_query_args = array(
                    'post_type' => 'service',
                    'posts_per_page' => 10,
                    'paged' => get_query_var( 'paged' ) ?: 1,
                    'order' => 'ASC',
                    'orderby' => 'name',
                    'tax_query' => array_filter( array(PG_Helper_v2::getTaxonomyQuery( 'category', 'ui-ux' )) )
                )
            ?>
            <?php $service_query = new WP_Query( $service_query_args ); ?>
            <?php if ( $service_query->have_posts() ) : ?>
                <?php while ( $service_query->have_posts() ) : $service_query->the_post(); ?>
                    <?php PG_Helper_v2::rememberShownPost(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class( 'project-detail md:w-6/12' ); ?>> 
                        <?php echo PG_Image::getPostImage( null, 'large', array(
                                'class' => 'project-cover-img'
                        ), 'both', null ) ?> 
                        <h4 class="project-title"><?php the_title(); ?></h4>
                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="explore-more"> <span><?php _e( 'Explore', 'mage_hd_theme' ); ?></span> </a> 
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'mage_hd_theme' ); ?></p>
            <?php endif; ?> 
        </div>             
        <div class="view-all-btn-warp"> <a href="<?php echo esc_url( get_permalink() ); ?>" class="border-btn view-all-btn"> <span><?php _e( 'View All', 'mage_hd_theme' ); ?></span> <i class="fa-solid fa-arrow-right"></i> </a> 
        </div>             
        <?php _e( 'featured', 'mage_hd_theme' ); ?> 
    </div>         
</section>     
<section class="featured py-120"> 
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
                <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/templates/assets/images/BBB-logo.svg"/> 
            </div>                 
            <div class="recog-list-logo flex justify-center gap-5"> 
                <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/templates/assets/images/clucth-florida.svg"/> 
                <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/templates/assets/images/clucth-us.svg"/> 
                <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/templates/assets/images/clucth-black-owned.svg"/> 
                <img alt="logo" src="<?php echo get_template_directory_uri(); ?>/templates/assets/images/clucth-tampa.svg"/> 
            </div>                 
        </div>             
        <img src="<?php echo get_template_directory_uri(); ?>/templates/assets/images/eclipse-left.svg" class="cirle-left"> 
        <img src="<?php echo get_template_directory_uri(); ?>/templates/assets/images/eclipse-right.svg" class="cirle-right"> 
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
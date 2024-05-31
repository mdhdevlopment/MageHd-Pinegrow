<?php get_header(); ?>

<section class="hero-banner py-120 relative"> 
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="flex"> 
            <div class="w-10/12"> 
                <div class="hero-title"> 
                    <?php _e( 'our case studies', 'mage_hd_theme' ); ?>
                </div>                     
                <div class="hero-content mb-5"> 
                    <?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'mage_hd_theme' ); ?> 
                </div>                     
            </div>                 
        </div>             
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-left.svg" class="cirle-left"> 
</section>     
<section class="project py-120 border-y border-#F2F2F2"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <h3 class="large-inner-heading text-center"><?php _e( 'Check out or recent website projects', 'mage_hd_theme' ); ?></h3> 
        <div class="blog-category uiux-category"> 
            <button class="border-btn uiux-btn active" id="all"> 
                <?php _e( 'All', 'mage_hd_theme' ); ?>
            </button>                 
            <button class="border-btn uiux-btn" id="case_study_category-website-project"> 
                <?php _e( 'Website Project', 'mage_hd_theme' ); ?> 
            </button>                 
            <button class="border-btn uiux-btn" id="case_study_category-mobile-app-project"> 
                <?php _e( 'Mobile App Project', 'mage_hd_theme' ); ?>
            </button>                 
        </div>             
        <div class="project-main-wrapper flex flex-wrap justify-between gap-5"> 
            <?php
                $casestudy_query_args = array(
                    'post_type' => 'casestudy',
                    'posts_per_page' => 10,
                    'paged' => get_query_var( 'paged' ) ?: 1,
                    'order' => 'ASC',
                    'orderby' => 'date'
                )
            ?>
            <?php $casestudy_query = new WP_Query( $casestudy_query_args ); ?>
            <?php if ( $casestudy_query->have_posts() ) : ?>
                <?php while ( $casestudy_query->have_posts() ) : $casestudy_query->the_post(); ?>
                    <?php PG_Helper_v2::rememberShownPost(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class( 'project-detail md:w-6/12' ); ?>> 
                        <?php echo PG_Image::getPostImage( null, 'large', array(
                                'class' => 'project-cover-img'
                        ), 'both', null ) ?> 
                        <h4 class="project-title"><?php the_title(); ?></h4> <a href="<?php echo esc_url( get_permalink() ); ?>" class="explore-more"> <span><?php _e( 'Explore', 'mage_hd_theme' ); ?></span> </a> 
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'mage_hd_theme' ); ?></p>
            <?php endif; ?> 
        </div>             
        <div class="view-all-btn-warp"> <a href="<?php echo esc_url( get_permalink() ); ?>" class="border-btn view-all-btn"> <span><?php _e( 'View All', 'mage_hd_theme' ); ?></span> <i class="fa-solid fa-arrow-right"></i> </a> 
        </div>             
    </div>         
</section>     
<section class="case-study-service py-120"> 
    <div class="max-w-[90vw] mx-auto py-8 w-full lg:container"> 
        <div class="large-inner-heading text-center pb-60"> 
            <?php _e( 'Services we provide', 'mage_hd_theme' ); ?> 
        </div>             
        <div class="large-content-text text-center flex flex-col gap-5"> 
            <?php echo category_description(); ?> 
        </div>             
        <div class="flex flex-wrap sm:flex gap-5 case-study-service-warpper"> 
            <div class="sm:w-12/12 md:w-6/12 case-study-info"> 
                <h3 class="case-sr-no"><?php _e( '01', 'mage_hd_theme' ); ?></h3> 
                <div class="large-inner-heading pb-5  case-study-title"> 
                    <?php _e( 'DIGITAL MARKETING SERVICES', 'mage_hd_theme' ); ?>
                </div>                     <a href="/category/digital-marketing/" class="border-btn"><?php _e( 'Explore', 'mage_hd_theme' ); ?></a> 
            </div>                 
            <div class="sm:w-12/12 md:w-6/12 case-study-info"> 
                <h3 class="case-sr-no"><?php _e( '02', 'mage_hd_theme' ); ?></h3> 
                <div class="large-inner-heading pb-5  case-study-title"> 
                    <?php _e( 'web design & development services', 'mage_hd_theme' ); ?> 
                </div>                     <a href="/category/web-development/" class="border-btn"><?php _e( 'Explore', 'mage_hd_theme' ); ?></a> 
            </div>                 
        </div>             
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
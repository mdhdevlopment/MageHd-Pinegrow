<?php get_header(); ?>

<section class="hero-banner py-120" style="position: relative;"> 
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="flex"> 
            <div class="w-10/12"> 
                <div class="hero-title" style="font-family: 'Audiowide', sans-serif; color: #3B65AF; font-weight: 400; font-size: 70px; line-height: 100px; text-transform: uppercase;"> 
                    <?php _e( 'Check out or recent website projects', 'mage_hd_theme' ); ?> 
                </div>                     
                <div class="hero-content mb-5" style="font-family: 'Questrial', sans-serif; font-size: 26px; font-weight: 500; padding-top: 40px; padding-bottom: 40px; line-height: 36px; color: #F2F2F2;"> 
                    <?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'mage_hd_theme' ); ?> 
                </div>                     
            </div>                 
        </div>             
    </div>         
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-left.svg" class="cirle-left"> 
</section>     
<section class="project py-120 border-y border-#F2F2F2"> 
    <div class="max-w-[90vw] mx-auto w-full lg:container"> 
        <div class="blog-category uiux-category case-stydy-category"> 
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
        <div class="project-main-wrapper flex flex-wrap justify-between"> 
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
                    <div id="post-<?php the_ID(); ?>" <?php post_class( 'project-detail case-study-cat-detail flex flex-wrap justify-between gap-5' ); ?>> 
                        <div class="md:w-6/12"> 
                            <?php echo PG_Image::getPostImage( null, 'large', array(
                                    'class' => 'project-cover-img'
                            ), 'both', null ) ?> 
                        </div>                             
                        <div class="md:w-6/12"> 
                            <h4 class="project-title"><?php the_title(); ?></h4> 
                            <p class="medium-content-text"><?php echo get_the_excerpt(); ?></p> <a href="<?php echo esc_url( get_permalink() ); ?>" class="explore-more medium-content-text"> <span><?php _e( 'Explore More', 'mage_hd_theme' ); ?></span> </a> 
                        </div>                             
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'mage_hd_theme' ); ?></p>
            <?php endif; ?> 
        </div>             
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
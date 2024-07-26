<?php get_header(); ?>

    <?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'full' ) : null; ?>
    <section class="casestudy-single-hero" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
</section>     
    <section class="blog-content  service-post-content py-120 border-y border-#F2F2F2">
        <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
            <h1 class="large-inner-heading pb-60"><?php the_title(); ?></h1> 
            <div class="large-content-text pb-60">
                <?php the_content(); ?>
            </div>             
            <div class="flex flex-wrap sm:flex gap-5 case-study-service-warpper"> 
                <div class="sm:w-12/12 md:w-6/12 case-study-challenge case-study-detail"> 
                    <h4 class="medium-inner-heading pb-9"><?php _e( 'The Challenge', 'mage_hd_theme' ); ?></h4>
                    <div class="medium-content-text">
                        <?php echo get_field( 'the_challenge' ); ?>
                    </div>
                </div>
                <div class="sm:w-12/12 md:w-6/12 case-study-desciplines case-study-detail"> 
                    <h4 class="medium-inner-heading pb-9"><?php _e( 'Desciplines', 'mage_hd_theme' ); ?></h4>
                    <div class="medium-content-text">
                        <?php echo get_field( 'desciplines' ); ?>
                    </div>
                </div>
            </div>             
        </div>
    </section>
    <section class="py-120 border-y border-#F2F2F2 relative"> 
        <div class="max-w-[90vw] mx-auto py-8 w-full lg:container"> 
            <div class="flex flex-row sm:flex gap-10"> 
                <div class="sm:w-12/12 md:w-6/12"> 
                    <img class="company-logo-img" alt="" src="<?php echo PG_Image::getUrl( get_field( 'company_logo' ), 'large' ) ?>"/> 
                </div>                 
                <div class="sm:w-12/12 md:w-6/12"> 
                    <div class="case-study-discovery case-study-detail"> 
                        <h4 class="medium-inner-heading pb-9"><?php _e( 'Discovery', 'mage_hd_theme' ); ?></h4>
                        <div class="medium-content-text">
                            <?php echo get_field( 'discovery' ); ?>
                        </div>
                    </div>
                    <div class="case-study-design case-study-detail pt-10"> 
                        <h4 class="medium-inner-heading pb-9"><?php _e( 'Design', 'mage_hd_theme' ); ?></h4>
                        <div class="medium-content-text">
                            <?php echo get_field( 'design' ); ?>
                        </div>
                    </div>
                    <div class="case-study-future-priorities case-study-detail pt-10"> 
                        <h4 class="medium-inner-heading pb-9"><?php _e( 'Future Priorities', 'mage_hd_theme' ); ?></h4>
                        <div class="medium-content-text">
                            <?php echo get_field( 'future_priorities' ); ?>
                        </div>
                    </div>
                </div>                 
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
    <section class="client-testimonial-section py-120 border-y border-#F2F2F2 relative"> 
        <div class="max-w-[90vw] mx-auto w-full lg:container"> 
            <h3 class="large-inner-heading text-center pb-60"><?php _e( 'Client’s Testimonials', 'mage_hd_theme' ); ?></h3> 
            <div class="large-content-text text-center"> 
                <?php _e( 'Our clients love our services because they appreciate the quality of work that we deliver and the attentive customer service that they receive. They also enjoy the convenience of our fast turnaround times, which helps them meet their deadlines.', 'mage_hd_theme' ); ?>
            </div>             
        </div>         
        <div class="testimonial-wrapper owl-carousel"> 
            <?php
                $testimonial_query_args = array(
                    'post_type' => 'testimonial',
                    'nopaging' => true,
                    'order' => 'DESC',
                    'orderby' => 'date'
                )
            ?>
            <?php $testimonial_query = new WP_Query( $testimonial_query_args ); ?>
            <?php if ( $testimonial_query->have_posts() ) : ?>
                <?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
                    <?php PG_Helper_v2::rememberShownPost(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class( 'item testimonial-item' ); ?>> 
                        <div class="testimonial-img"> 
                            <?php echo PG_Image::getPostImage( null, 'large', array(
                                    'class' => 'testimonial-image-icon'
                            ), 'both', null ) ?> 
                        </div>                         
                        <div class="testimonial-list"> 
                            <div class="quote-warp"> 
                                <img class="quote-icon" alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/quote.svg"/> 
                            </div>                             
                            <div class="testimonial-comment large-content-text">
                                <?php the_content(); ?>
                            </div>                             
                            <div class="testimonial-info"> 
                                <h4 class="testimonial-name"><?php the_title(); ?></h4>
                                <a href="#" class="testimonial-web-link large-content-text"><?php echo get_field( 'website_url' ); ?></a> 
                            </div>                             
                        </div>                         
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'mage_hd_theme' ); ?></p>
            <?php endif; ?> 
        </div>         
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-left.svg" class="cirle-left"> 
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-right.svg" class="cirle-right"> 
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
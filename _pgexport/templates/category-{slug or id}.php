<?php get_header(); ?>

<section class="hero-banner py-120" style="position: relative;"> 
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="flex"> 
            <div class="w-10/12"> 
                <?php echo single_cat_title(); ?> 
                <div class="hero-content mb-5" style="font-family: 'Questrial', sans-serif; font-size: 26px; font-weight: 500; padding-top: 40px; padding-bottom: 40px; line-height: 36px; color: #F2F2F2;"> 
                    <?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'mage_hd_theme' ); ?> 
                </div>                     
            </div>                 
        </div>             
    </div>         
</section>    

<?php get_footer(); ?>
<?php get_header(); ?>

<section class="hero-banner py-120" style="position: relative;"> 
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="flex"> 
            <div class="w-10/12"> 
                <h1 class="hero-title" style="font-family: 'Audiowide', sans-serif; color: #3B65AF; font-weight: 400; font-size: 70px; line-height: 100px; text-transform: uppercase;"><?php the_title(); ?></h1> 
                <?php if ( has_excerpt() ) : ?>
                    <div class="hero-content mb-5" style="font-family: 'Questrial', sans-serif; font-size: 26px; font-weight: 500; padding-top: 40px; padding-bottom: 40px; line-height: 36px; color: #F2F2F2;">
                        <?php echo get_the_excerpt(); ?>
                    </div>
                <?php endif; ?> 
            </div>                         
        </div>                     
    </div>                 
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-eclipse-left.svg" class="cirle-left"> 
</section>             
<section class="page-content py-120 border-y border-#F2F2F2"> 
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="page-content">
            <?php the_content(); ?>
        </div>
    </div>
</section>            

<?php get_footer(); ?>
<?php get_header(); ?>

<section class="hero-banner py-120" style="position: relative;"> 
    <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
        <div class="flex"> 
            <div class="w-10/12"> 
                <h1 class="hero-title"><?php the_title(); ?></h1> 
                <?php if ( has_excerpt() ) : ?>
                    <div class="hero-content mb-5">
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

        </main>
        <footer>
            <div class="max-w-[90vw] mx-auto  w-full lg:container"> 
                <div class="footer-news-letters py-120">
                    <h3 class="large-inner-heading text-center pb-60"><?php _e( 'Subscribe to our newsletter', 'mage_hd_theme' ); ?></h3>
                    <?php $mailer = new PG_Simple_Form_Mailer(); ?>
                    <?php $mailer->process( array(
                            'form_id' => 'subscribe-form_mailer_id',
                            'send_to_email' => true,
                            'save_to_post_type' => true,
                            'email' => 'developmentMHD@outlook.com',
                            'post_type' => 'newsletter',
                            'title' => 'Subscribe Newsletter'
                    ) ); ?>
                    <?php if( !$mailer->processed || $mailer->error) : ?>
                        <form class="subscribe-form" id="subscribe-form_mailer_id" action="<?php echo '#subscribe-form_mailer_id'; ?>" method="post" onsubmit="event.stopImmediatePropagation();event.stopPropagation();">
                            <input class="subscribe-input" placeholder="Enter email" type="text" name="subscribe-form_mailer_id_1" value="<?php echo ( isset( $_POST['subscribe-form_mailer_id_1'] ) ? $_POST['subscribe-form_mailer_id_1'] : '' ); ?>"/>
                            <button class="subscribe-btn">
                                <i class="fa fa-long-arrow-right"></i>
                            </button>
                            <input type="hidden" name="subscribe-form_mailer_id" value="1"/>
                        </form>
                    <?php endif; ?>
                    <?php if( $mailer->processed ) : ?>
                        <?php echo $mailer->message; ?>
                        <?php if( !$mailer->error ) echo $mailer->html; ?>
                    <?php endif; ?> 
                </div>
                <div class="footer-menus">
                    <div class="footer-logo pb-60"><a class="logo" href="<?php echo esc_url( home_url() ); ?>"> <?php if( get_theme_mod( 'custom_logo' ) ) : ?><img src="<?php echo PG_Image::getUrl( get_theme_mod( 'custom_logo', esc_url( get_template_directory_uri() . '/assets/images/logo.png' ) ), 'full' ) ?>" class="h-14 object-cover" loading="lazy" alt="Logo"><?php endif; ?> </a>
                    </div>
                    <div class="footer-menu-wraper flex flex-row flex-wrap gap-2">
                        <div class="footer-menu pb-60">
                            <h4 class="footer-title"><?php _e( 'Quick links', 'mage_hd_theme' ); ?></h4>
                            <ul class="footer-nav">
                                <?php if ( has_nav_menu( 'quick_links' ) ) : ?>
                                    <?php
                                        PG_Smart_Walker_Nav_Menu::init();
                                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="footer-menu-item {CLASSES}" id="{ID}"><a {ATTRS}>{TITLE}</a>
                                                                        </li>';
                                        wp_nav_menu( array(
                                            'container' => '',
                                            'theme_location' => 'quick_links',
                                            'items_wrap' => '%3$s',
                                            'walker' => new PG_Smart_Walker_Nav_Menu()
                                    ) ); ?>
                                <?php endif; ?> 
                            </ul>
                        </div>
                        <div class="footer-menu pb-60">
                            <h4 class="footer-title"><?php _e( 'Tools', 'mage_hd_theme' ); ?></h4>
                            <ul class="footer-nav">
                                <?php if ( has_nav_menu( 'tools' ) ) : ?>
                                    <?php
                                        PG_Smart_Walker_Nav_Menu::init();
                                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="footer-menu-item {CLASSES}" id="{ID}"><a {ATTRS}>{TITLE}</a>
                                                                        </li>';
                                        wp_nav_menu( array(
                                            'container' => '',
                                            'theme_location' => 'tools',
                                            'items_wrap' => '%3$s',
                                            'walker' => new PG_Smart_Walker_Nav_Menu()
                                    ) ); ?>
                                <?php endif; ?> 
                            </ul>
                        </div>
                        <div class="footer-menu pb-60">
                            <h4 class="footer-title"><?php _e( 'Clients Links', 'mage_hd_theme' ); ?></h4>
                            <ul class="footer-nav">
                                <?php if ( has_nav_menu( 'clients_links' ) ) : ?>
                                    <?php
                                        PG_Smart_Walker_Nav_Menu::init();
                                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="footer-menu-item {CLASSES}" id="{ID}"><a {ATTRS}>{TITLE}</a>
                                                                        </li>';
                                        wp_nav_menu( array(
                                            'container' => '',
                                            'theme_location' => 'clients_links',
                                            'items_wrap' => '%3$s',
                                            'walker' => new PG_Smart_Walker_Nav_Menu()
                                    ) ); ?>
                                <?php endif; ?> 
                            </ul>
                        </div>
                        <div class="footer-menu pb-60">
                            <h4 class="footer-title"><?php _e( 'Contact US', 'mage_hd_theme' ); ?></h4>
                            <div class="footer-contact-info">
                                <div class="footer-contact-location footer-nav">
                                    <?php echo get_theme_mod( 'contact_info_location', __( '610 E Zack St. Ste 110-2177Tampa, FL 33602', 'mage_hd_theme' ) ); ?>
                                </div>                                 
                                <div class="footer-contact-no footer-nav">
                                    <?php echo get_theme_mod( 'contact_info_phone', __( '800-344-5345', 'mage_hd_theme' ) ); ?>
                                </div>                                 
                                <div class="footer-contact-email footer-nav">
                                    <?php echo get_theme_mod( 'contact_info_email', __( 'hello@magehd.com', 'mage_hd_theme' ) ); ?>
                                </div>                                 
                            </div>
                        </div>
                        <div class="footer-menu pb-60">
                            <h4 class="footer-title"><?php _e( 'Digital Marketing', 'mage_hd_theme' ); ?></h4>
                            <ul class="footer-nav">
                                <?php if ( has_nav_menu( 'digital_marketing' ) ) : ?>
                                    <?php
                                        PG_Smart_Walker_Nav_Menu::init();
                                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="footer-menu-item {CLASSES}" id="{ID}"><a {ATTRS}>{TITLE}</a>
                                                                        </li>';
                                        wp_nav_menu( array(
                                            'container' => '',
                                            'theme_location' => 'digital_marketing',
                                            'items_wrap' => '%3$s',
                                            'walker' => new PG_Smart_Walker_Nav_Menu()
                                    ) ); ?>
                                <?php endif; ?> 
                            </ul>
                        </div>
                        <div class="footer-menu pb-60">
                            <h4 class="footer-title"><?php _e( 'Web Design & Development', 'mage_hd_theme' ); ?></h4>
                            <ul class="footer-nav">
                                <?php if ( has_nav_menu( 'web_design_development' ) ) : ?>
                                    <?php
                                        PG_Smart_Walker_Nav_Menu::init();
                                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="footer-menu-item {CLASSES}" id="{ID}"><a {ATTRS}>{TITLE}</a>
                                                                        </li>';
                                        wp_nav_menu( array(
                                            'container' => '',
                                            'theme_location' => 'web_design_development',
                                            'items_wrap' => '%3$s',
                                            'walker' => new PG_Smart_Walker_Nav_Menu()
                                    ) ); ?>
                                <?php endif; ?> 
                            </ul>
                        </div>
                        <div class="footer-menu pb-60">
                            <h4 class="footer-title"><?php _e( 'Mobile App Development', 'mage_hd_theme' ); ?></h4>
                            <ul class="footer-nav">
                                <?php if ( has_nav_menu( 'mobile_app_development' ) ) : ?>
                                    <?php
                                        PG_Smart_Walker_Nav_Menu::init();
                                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="footer-menu-item {CLASSES}" id="{ID}"><a {ATTRS}>{TITLE}</a>
                                                                        </li>';
                                        wp_nav_menu( array(
                                            'container' => '',
                                            'theme_location' => 'mobile_app_development',
                                            'items_wrap' => '%3$s',
                                            'walker' => new PG_Smart_Walker_Nav_Menu()
                                    ) ); ?>
                                <?php endif; ?> 
                            </ul>
                        </div>
                        <div class="footer-menu pb-60">
                            <h4 class="footer-title"><?php _e( 'UI/UX Design Services', 'mage_hd_theme' ); ?></h4>
                            <ul class="footer-nav">
                                <?php if ( has_nav_menu( 'uiux_design_services' ) ) : ?>
                                    <?php
                                        PG_Smart_Walker_Nav_Menu::init();
                                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="footer-menu-item {CLASSES}" id="{ID}"><a {ATTRS}>{TITLE}</a>
                                                                        </li>';
                                        wp_nav_menu( array(
                                            'container' => '',
                                            'theme_location' => 'uiux_design_services',
                                            'items_wrap' => '%3$s',
                                            'walker' => new PG_Smart_Walker_Nav_Menu()
                                    ) ); ?>
                                <?php endif; ?> 
                            </ul>
                        </div>
                        <div class="footer-menu pb-60">
                            <h4 class="footer-title"><?php _e( 'Digital Marketing by Industry', 'mage_hd_theme' ); ?></h4>
                            <ul class="footer-nav">
                                <?php if ( has_nav_menu( 'digital_marketing_industry' ) ) : ?>
                                    <?php
                                        PG_Smart_Walker_Nav_Menu::init();
                                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="footer-menu-item {CLASSES}" id="{ID}"><a {ATTRS}>{TITLE}</a>
                                                                        </li>';
                                        wp_nav_menu( array(
                                            'container' => '',
                                            'theme_location' => 'digital_marketing_industry',
                                            'items_wrap' => '%3$s',
                                            'walker' => new PG_Smart_Walker_Nav_Menu()
                                    ) ); ?>
                                <?php endif; ?> 
                            </ul>
                        </div>
                        <div class="footer-menu pb-60">
                            <h4 class="footer-title"><?php _e( 'Web Design Services by Industry', 'mage_hd_theme' ); ?></h4>
                            <ul class="footer-nav">
                                <?php if ( has_nav_menu( 'web_design_services_industry' ) ) : ?>
                                    <?php
                                        PG_Smart_Walker_Nav_Menu::init();
                                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="footer-menu-item {CLASSES}" id="{ID}"><a {ATTRS}>{TITLE}</a>
                                                                        </li>';
                                        wp_nav_menu( array(
                                            'container' => '',
                                            'theme_location' => 'web_design_services_industry',
                                            'items_wrap' => '%3$s',
                                            'walker' => new PG_Smart_Walker_Nav_Menu()
                                    ) ); ?>
                                <?php endif; ?> 
                            </ul>
                        </div>
                        <div class="footer-menu pb-60">
                            <h4 class="footer-title"><?php _e( 'Mobile App Development by Type', 'mage_hd_theme' ); ?></h4>
                            <ul class="footer-nav">
                                <?php if ( has_nav_menu( 'mobile_app_development_type' ) ) : ?>
                                    <?php
                                        PG_Smart_Walker_Nav_Menu::init();
                                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="footer-menu-item {CLASSES}" id="{ID}"><a {ATTRS}>{TITLE}</a>
                                                                        </li>';
                                        wp_nav_menu( array(
                                            'container' => '',
                                            'theme_location' => 'mobile_app_development_type',
                                            'items_wrap' => '%3$s',
                                            'walker' => new PG_Smart_Walker_Nav_Menu()
                                    ) ); ?>
                                <?php endif; ?> 
                            </ul>
                        </div>
                        <div class="footer-menu pb-60">
                            <h4 class="footer-title"><?php _e( 'UI/UX by Type', 'mage_hd_theme' ); ?></h4>
                            <ul class="footer-nav">
                                <?php if ( has_nav_menu( 'ui-ux-by-type' ) ) : ?>
                                    <?php
                                        PG_Smart_Walker_Nav_Menu::init();
                                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="footer-menu-item {CLASSES}" id="{ID}"><a {ATTRS}>{TITLE}</a>
                                                                        </li>';
                                        wp_nav_menu( array(
                                            'container' => '',
                                            'theme_location' => 'ui-ux-by-type',
                                            'items_wrap' => '%3$s',
                                            'walker' => new PG_Smart_Walker_Nav_Menu()
                                    ) ); ?>
                                <?php endif; ?> 
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer-logos flex justify-center gap-5  ">
                    <img alt="logo" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-clucth-florida.svg"/> 
                    <img alt="logo" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-clucth-us.svg"/> 
                    <img alt="logo" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/BBB-footer.svg"/> 
                    <img alt="logo" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-clucth-tampa.svg"/> 
                    <img alt="logo" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-clucth-black-owned.svg"/> 
                </div>
                <div class="footer-copyright flex justify-between">
                    <p class="footer-copyright-info"><?php _e( 'Copyright © Mage H.D. Inc.', 'mage_hd_theme' ); ?></p>
                    <div class="footer-social-list social-list flex gap-5"> <a href="<?php echo get_theme_mod( 'facebook', '#' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="Facebook" class="social-icon" loading="lazy"></a>
                        <a href="<?php echo get_theme_mod( 'twitter', '#' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt="twitter" class="social-icon" loading="lazy"></a>
                        <a href="<?php echo get_theme_mod( 'linkedin', '#' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="linkedin" class="social-icon" loading="lazy"></a>
                        <a href="<?php echo get_theme_mod( 'instagram', '#' ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="instagram" class="social-icon" loading="lazy"></a>
                    </div>                     
                    <div class="privacy-terms-menu">
                        <ul class="flex gap-8 privacy-menu-list">
                            <?php if ( has_nav_menu( 'privacy-terms' ) ) : ?>
                                <?php
                                    PG_Smart_Walker_Nav_Menu::init();
                                    PG_Smart_Walker_Nav_Menu::$options['template'] = '<li id="{ID}" class="{CLASSES}"><a {ATTRS}>{TITLE}</a>
                                                                </li>';
                                    wp_nav_menu( array(
                                        'container' => '',
                                        'theme_location' => 'privacy-terms',
                                        'items_wrap' => '%3$s',
                                        'walker' => new PG_Smart_Walker_Nav_Menu()
                                ) ); ?>
                            <?php endif; ?> 
                        </ul>
                    </div>                     
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>     
</html>

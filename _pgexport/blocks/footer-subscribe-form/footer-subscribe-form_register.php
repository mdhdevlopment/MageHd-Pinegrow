<?php

        PG_Blocks_v2::register_block_type( array(
            'name' => 'mage-hd-theme/footer-subscribe-form',
            'title' => __( 'Footer Newsleter', 'mage_hd_theme' ),
            'category' => 'theme',
            'render_template' => 'blocks/footer-subscribe-form/footer-subscribe-form.php',
            'supports' => array(  ),
            'base_url' => get_template_directory_uri(),
            'base_path' => get_template_directory(),
            'js_file' => 'blocks/footer-subscribe-form/footer-subscribe-form.js',
            'attributes' => array(

            ),
            'example' => array(

            ),
            'dynamic' => true,
            'version' => '1.0.0'
        ) );

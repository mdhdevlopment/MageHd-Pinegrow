<div <?php if(empty($_GET['context']) || $_GET['context'] !== 'edit') echo get_block_wrapper_attributes( array('class' => "", ) ); else echo 'data-wp-block-props="true"'; ?>>
    <?php echo get_theme_mod( 'subscribe_form_subscribe_form_newsletter', __( 'Form Shortcode', 'mage_hd_theme' ) ); ?>
</div>
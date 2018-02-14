<?phpif(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];    header('HTTP/1.1 301 Moved Permanently');    header('Location: ' . $redirect);    exit();}use Roots\Sage\Setup;use Roots\Sage\Wrapper;?><!doctype html><html <?php language_attributes(); ?>>  <?php get_template_part('templates/head'); ?>  <body <?php body_class(); ?>>    <!--[if IE]>      <div class="alert alert-warning">        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>      </div>    <![endif]-->    <p>Does this fire before the header?</p>    <?php      do_action('get_header');      get_template_part('templates/header');    ?>    <div class="wrap container" role="document">      <div class="content row">        <main class="main">          <?php include Wrapper\template_path(); ?>        </main><!-- /.main -->       <secondary class="widget-area" id="secondary" role="complementary">                      <?php get_template_part('adverts/in', 'sidebar'); ?>                              <?php $images = get_post_meta($post->ID, 'vdw_gallery_id', true); ?><?php $author_id = get_the_author_meta('ID');    /* get file ID */    $id = get_post_meta($post->ID, 'vdw_gallery_id', true);    if($id) {                 echo '<h2 class="widget-title"><span>Match Gallery</span></h2>';        /* Array Loop! */        foreach($id as $attachments) {            /* get file URL */            $url10 = wp_get_attachment_image( $attachments, 'custom-size' );            $url = wp_get_attachment_url( $attachments ); ?>                        <div class="match-image">            <a rel="lightbox[matchimages]" href="<?php echo $url; ?>" data-lightbox="image-1" data-title=""><?php echo wp_get_attachment_image($attachments, 'custom-size'); ?></a>            </div>                                            <?php            }    echo '<div style="clear: both; height: 7px; display: block;"></div>';} else { echo ''; } ?><style>.match-image img {bottom: -100%; left: -100%; max-width: 300% !important; margin: auto; min-width: 100%; position: absolute; width: auto !important; height: auto !important; right: -100%; top: -20%;} .match-image{position: relative;}</style>          <?php if (Setup\display_sidebar()) : ?>            <?php include Wrapper\sidebar_path(); ?>          <?php endif; ?>        </secondary>      </div><!-- /.content -->    </div><!-- /.wrap -->    <?php      do_action('get_footer');      get_template_part('templates/footer');      wp_footer();    ?>  </body></html>
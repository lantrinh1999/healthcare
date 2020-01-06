<?php
function header_default()
{
    ?>
    <?php global $theme_options; ?>
    <!DOCTYPE html <?php language_attributes(); ?>>
    <html>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(''); ?></title>
    <?php if (!empty($theme_options['favicon']['url'])): ?>
    <link rel="icon" href="<?php echo $theme_options['favicon']['url']; ?>" type="image/x-icon" />
    <?php endif; ?>
    <?php wp_head(); ?>
    <?php echo pveser_option($theme_options['header-code']); ?>
    </head>
    <?php
}
add_action('pveser_header', 'header_default', 10);


function footer_default()
{
    global $theme_options;
    wp_footer();
    echo pveser_option($theme_options['footer-code']);
    ?>
    <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
    </body>
    </html>
    <?php
}

add_action('pveser_footer', 'footer_default', 10);
?>
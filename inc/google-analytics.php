<?php

function add_google_analytics() {

  // disabled for logged-in users
  // an alternative is !current_user_can('manage_options') if customers can login like WooCommerce
  if ( !is_user_logged_in() ) {
    ?>
      <!-- Start Google Analytics Script -->
      <!-- Global Site Tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=ADD_TRACKING_CODE_HERE"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments)};
        gtag('js', new Date());

        gtag('config', 'ADD_TRACKING_CODE_HERE');
      </script>
      <!-- End Google Analytics Script -->
    <?php
  }
}

add_action('wp_head', 'add_google_analytics');

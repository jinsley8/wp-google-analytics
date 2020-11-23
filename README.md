# WP Google Analytics

Use this to include your Google Analytics script in a WordPress child theme without tracking logged-in Admin users.

## Install

Make an **/inc** folder in your child theme if one doesn't exist and place **google-analytics.php** within folder.

Next, we need to require the **google-analytics.php** file in your **function.php** file.

```bash
require_once( 'inc/google-analytics.php' );
```

Replace **ADD_TRACKING_CODE_HERE** with your own Measurement ID.

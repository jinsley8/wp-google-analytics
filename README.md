# WP Google Analytics

Use this to include your Google Analytics script in a WordPress child theme without tracking logged-in Admin users.

## Install

Make an **/inc** folder in your child theme if one doesn't exist and place **google-analytics.php** within folder.

Next, we need to require the **google-analytics.php** file in your **function.php** file.

```bash
require_once( 'inc/google-analytics.php' );
```

Replace **UA-XXXXX-Y** with your own UA property.

If using the new GA4, replace **G-XXXXX** with your own GA4 Measurement ID and uncomment line 18.

- [More about implementing GA4 with a UA Property](https://developers.google.com/analytics/devguides/collection/ga4/basic-tag)
- [More about implementing GA4 events](https://developers.google.com/analytics/devguides/collection/ga4/translate-events)
- [More about implementing GA4 eCommerce](https://developers.google.com/analytics/devguides/collection/ga4/ecommerce-migration)

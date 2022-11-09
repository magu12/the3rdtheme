<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <script>
        function setCookie(name, value, options = {}) {

            options = {
                path: '/',
                ...options
            };

            if (options.expires instanceof Date) {
                options.expires = options.expires.toUTCString();
            }

            let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

            for (let optionKey in options) {
                updatedCookie += "; " + optionKey;
                let optionValue = options[optionKey];
                if (optionValue !== true) {
                    updatedCookie += "=" + optionValue;
                }
            }

            document.cookie = updatedCookie;
        }

        setCookie('width', screen.width);
    </script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <!--  <link rel="stylesheet" href="https://use.typekit.net/cjb8kdw.css">
    <link rel="stylesheet" href="./css/bootstrap-reboot.min.css">
    -->
    <?php wp_head(); ?>

    <?php
    if (!isset($_COOKIE["width"])) {
    ?>
        <script>
            window.location.reload();
        </script>
    <?php
    } else {
        if ($_COOKIE["width"] > 650) :
            echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/assets/css/style.min.css">';
        elseif ($_COOKIE["width"] < 650) :
            echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/assets/css/style-mobile.min.css">';
        endif;
    } ?>
    <!-- <title>the3rd</title> -->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MFHNDVP');
    </script>
    <!-- End Google Tag Manager -->
</head>
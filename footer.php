<div class="loader">
    <div class="lds-grid">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<?php wp_footer(); ?>


<?php
if ($_COOKIE["width"] > 650) :
?>
    <script type="module">
        import {
            menuJs
        } from "<?php echo bloginfo('template_url'); ?>/assets/js/pc/blocks/menu.js";
        import {
            heroJs
        } from "<?php echo bloginfo('template_url'); ?>/assets/js/pc/blocks/hero.js";
        import {
            sliderJs
        } from "<?php echo bloginfo('template_url'); ?>/assets/js/pc/blocks/slider.js";
        import {
            serviceJs
        } from "<?php echo bloginfo('template_url'); ?>/assets/js/pc/blocks/service.js";
        import {
            casesJs
        } from "<?php echo bloginfo('template_url'); ?>/assets/js/pc/blocks/cases.js";
        import {
            teamJs
        } from "<?php echo bloginfo('template_url'); ?>/assets/js/pc/blocks/team.js";
        import {
            linkJs
        } from "<?php echo bloginfo('template_url'); ?>/assets/js/pc/blocks/link.js";


        menuJs;
        heroJs;
        sliderJs;
        serviceJs;
        casesJs;
        teamJs;
        linkJs;
    </script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/pc/main.js' ?>"></script>
    <script>
        function initMap() {
            const place = {
                lat: 52.5129271,
                lng: 13.3031109
            };



            var map = new google.maps.Map(document.getElementById('map'), {
                center: place,
                scrollwheel: false,
                zoom: 10,
                disableDefaultUI: true,
                styles: [{
                    "featureType": "administrative",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": "-100"
                    }]
                }, {
                    "featureType": "administrative.province",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "lightness": 65
                    }, {
                        "visibility": "on"
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "lightness": "50"
                    }, {
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": "-100"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "all",
                    "stylers": [{
                        "lightness": "30"
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "all",
                    "stylers": [{
                        "lightness": "40"
                    }]
                }, {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "hue": "#ffff00"
                    }, {
                        "lightness": -25
                    }, {
                        "saturation": -97
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "labels",
                    "stylers": [{
                        "lightness": -25
                    }, {
                        "saturation": -100
                    }]
                }]
            });

            const marker = new google.maps.Marker({
                position: place,
                map: map,

            });

        } // close function here
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOjjaHlTo8aQLfek6e-874tzxzxv4tZD0&callback=initMap"></script>

<?php
else :
?>
    <script type="module">
        import {
            menuJs
        } from "<?php echo bloginfo('template_url'); ?>/assets/js/mobile/blocks/menu.js";
        import {
            heroJs
        } from "<?php echo bloginfo('template_url'); ?>/assets/js/mobile/blocks/hero.js";
        import {
            sliderJs
        } from "<?php echo bloginfo('template_url'); ?>/assets/js/mobile/blocks/slider.js";
        import {
            serviceJs
        } from "<?php echo bloginfo('template_url'); ?>/assets/js/mobile/blocks/service.js";
        import {
            casesJs
        } from "<?php echo bloginfo('template_url'); ?>/assets/js/mobile/blocks/cases.js";
        import {
            teamJs
        } from "<?php echo bloginfo('template_url'); ?>/assets/js/mobile/blocks/team.js";
        import {
            linkJs
        } from "<?php echo bloginfo('template_url'); ?>/assets/js/mobile/blocks/link.js";


        menuJs;
        heroJs;
        sliderJs;
        serviceJs;
        casesJs;
        teamJs;
        linkJs;
    </script>
    <script src="<?php echo get_template_directory_uri() . '/assets/js/mobile/main.js' ?>"></script>
<?php
endif; ?>


</body>

</html>
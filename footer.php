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

<script type="module">
    import {
        menuJs
    } from "<?php echo bloginfo('template_url'); ?>/assets/js/blocks/menu.js";
    import {
        heroJs
    } from "<?php echo bloginfo('template_url'); ?>/assets/js/blocks/hero.js";
    import {
        sliderJs
    } from "<?php echo bloginfo('template_url'); ?>/assets/js/blocks/slider.js";
    import {
        serviceJs
    } from "<?php echo bloginfo('template_url'); ?>/assets/js/blocks/service.js";
    import {
        casesJs
    } from "<?php echo bloginfo('template_url'); ?>/assets/js/blocks/cases.js";
    import {
        teamJs
    } from "<?php echo bloginfo('template_url'); ?>/assets/js/blocks/team.js";
    import {
        linkJs
    } from "<?php echo bloginfo('template_url'); ?>/assets/js/blocks/link.js";


    menuJs;
    heroJs;
    sliderJs;
    serviceJs;
    casesJs;
    teamJs;
    linkJs;
</script>

</body>

</html>
<?php

function th3_shortcode_icon($attr) {
    return get_theme_svg($attr['name']);
}
add_shortcode('icon', 'th3_shortcode_icon');

function th3_shortcode_year() {
    return date('Y');
}
add_shortcode('year', 'th3_shortcode_year');
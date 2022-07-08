<?php

function get_theme_svg($key)
{
    global $svgs;
    return isset($svgs[$key]) ? $svgs[$key] : '';
}




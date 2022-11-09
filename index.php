<?php
get_header();
?>

<?php
if ($_COOKIE["width"] > 650) :
    get_template_part('index-for-pk');
else :
    get_template_part('index-for-mobile');
endif;

get_footer();

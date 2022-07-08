export let menuJs = jQuery(document).ready(function () {
    $('.menu__open').on('click', function(){
        $(this).toggleClass('active').closest('.menu').toggleClass('active');
    });
});
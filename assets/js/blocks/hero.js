export let heroJs = jQuery(document).ready(function () {
    $('.next-slide').on('click', function () {
        let activeNextBtn = $(this).find('svg.active');
        if (activeNextBtn.hasClass('start-btn')) {
            $(this).find('svg.next-btn').addClass('active').siblings().removeClass('active');
            $('#hero-slide-1').addClass('hide');
        } else if (activeNextBtn.hasClass('next-btn')) {
            $(this).find('svg.end-btn').addClass('active').siblings().removeClass('active');
            $('#hero-slide-2').addClass('hide');
        } else if (activeNextBtn.hasClass('end-btn')) {
            $(this).find('svg.start-btn').addClass('active').siblings().removeClass('active');
            $('.hero__slide').removeClass('hide');
        }
    });

    var heroScroll;

    const heroSlider = () => {
        if (heroScroll) clearTimeout(heroScroll);
        heroScroll = setTimeout(() => {
            $('.next-slide').click();
        }, 200)
    }

    $(window).bind('mousewheel DOMMouseScroll', function (event) {
        let activeNextBtn = $('.next-slide').find('svg.active');
        if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
            if (activeNextBtn.hasClass('end-btn') && $('.hero').hasClass('active') && !$('.hero').hasClass('view'))
                heroSlider();
        }
        else {
            if (!activeNextBtn.hasClass('end-btn') && $('.hero').hasClass('active'))
                heroSlider();
        }
    });
});
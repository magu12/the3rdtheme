export let serviceJs = jQuery(document).ready(function () {
    $('.consulting-open').on('click', function () {/* 
        $('.service').addClass('steping').addClass('step-consulting'); */
        $('.consulting').addClass('active');
        $('.digital').removeClass('active');
    });

    $('.digital-open').on('click', function () {/* 
        $('.service').addClass('steping').addClass('step-digital'); */
        $('.digital').addClass('active');
        $('.consulting').removeClass('active');
    });

    $('.consulting__close').on('click', function () {
        $('.consulting').removeClass('active');
        $('.consulting__item').removeClass('close').removeClass('active');
        $('.consulting__item:eq(0)').addClass('active');/* 
        $('.service').removeClass('steping').removeClass('step-consulting'); */
    });


    $('.digital__close').on('click', function () {
        $('.digital').removeClass('active');
        $('.digital__item').removeClass('close').removeClass('active');
        $('.digital__item:eq(0)').addClass('active');/* 
        $('.service').removeClass('steping').removeClass('step-digital');    */     
        $('.service').addClass('service-end');
    });

    var serviceConsultingScroll;
    var serviceDigitalScroll;

    const handelConsultingSlide = (prev = false) => {
        let slide = $('.consulting__item.active');
        if (serviceConsultingScroll) clearTimeout(serviceConsultingScroll);
        serviceConsultingScroll = setTimeout(() => {
            if (!prev) {
                $(`.consulting__item:eq(${+$(slide).index() + 1})`).addClass('active');
                $(slide).removeClass('active').addClass('close');
                if ($(slide).index() == +$('.consulting__item').length - 1) {
                    $('.digital-open').click();
                }
            } else {
                $(`.consulting__item:eq(${+$(slide).index() - 1})`).addClass('active').removeClass('close');
                $(slide).removeClass('active');
            }
        }, 200);
    }

    const handelDigitalSlide = (prev = false) => {
        let slide = $('.digital__item.active');
        if (serviceDigitalScroll) clearTimeout(serviceDigitalScroll);
        serviceDigitalScroll = setTimeout(() => {
            if (!prev) {
                $(`.digital__item:eq(${+$(slide).index() + 1})`).addClass('active');
                $(slide).removeClass('active').addClass('close'); 
                if ($(slide).index() == +$('.consulting__item').length - 1) {
                    $('.digital__close').click();
                }
            } else {
                $(`.digital__item:eq(${+$(slide).index() - 1})`).addClass('active').removeClass('close');
                $(slide).removeClass('active');
            }
        }, 200);
    }

    $(window).bind('mousewheel DOMMouseScroll', function (event) {
        if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
            if ($('.consulting').hasClass('active') && $('.consulting__item.active').index() != 0)
                handelConsultingSlide(true);
            else if ($('.consulting').hasClass('active') && $('.consulting__item.active').index() == 0) {
                if (serviceConsultingScroll) clearTimeout(serviceConsultingScroll);
                serviceConsultingScroll = setTimeout(() => {
                    $('.consulting__close').click();
                }, 200);
            }
            if ($('.digital').hasClass('active') && $('.digital__item.active').index() != 0)
                handelDigitalSlide(true);
            else if ($('.digital').hasClass('active') && $('.digital__item.active').index() == 0) {
                if (serviceDigitalScroll) clearTimeout(serviceDigitalScroll);
                serviceDigitalScroll = setTimeout(() => {
                    $('.digital__close').click();
                }, 200);
            }
        }
        else {
            if ($('.service').hasClass('active') && !$('.service').hasClass('service-end') && !$('.consulting').hasClass('active') && !$('.digital').hasClass('active')) {
                $('.consulting-open').click();
                return
            }
            if ($('.consulting').hasClass('active'))
                handelConsultingSlide();
            if ($('.digital').hasClass('active'))
                handelDigitalSlide();
        }
    });
});
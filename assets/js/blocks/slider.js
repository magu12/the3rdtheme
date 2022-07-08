export let sliderJs = jQuery(document).ready(function () {

    const handleSlide = (slideIndex, toNext = true) => {
        $('body').removeClass().addClass($(`.slider section[index=${slideIndex}]`).attr('bg-color'));
        if (toNext) {
            $(`.slider section`).removeClass('prev');
            $(`.slider section[index=${slideIndex}]`).addClass('active').removeClass('next');
            $(`.slider section[index=${slideIndex - 1}]`).addClass('prev').removeClass('active');
            $(`.slider section[index=${slideIndex + 1}]`).addClass('next');
        } else {
            $(`.slider section`).removeClass('next');
            $(`.slider section[index=${slideIndex}]`).addClass('active').removeClass('prev');
            $(`.slider section[index=${slideIndex + 1}]`).addClass('next').removeClass('active');
            $(`.slider section[index=${slideIndex - 1}]`).addClass('prev');
        }
        $(`.slider section[index=${slideIndex}]`).addClass('view');
        setTimeout(() => {
            $(`.slider section[index=${slideIndex}]`).removeClass('view');
        }, 150);
        window.history.pushState(null, null, `#${$(`.slider section.active`).attr('link')}`);
        $(`.menu__item[for="${$(`.slider section[index=${slideIndex}]`).attr('link')}"`).addClass('active').siblings().removeClass('active');
    }

    var sliderScroll;

    $(window).bind('mousewheel DOMMouseScroll', function (event) {
        let activeNextBtn = $('.next-slide').find('svg.active');
        let activeSlideIndex = $('.slider section.active').attr('index');
        if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
            if (!$('.hero').hasClass('active') && !$('.consulting').hasClass('active') && !$('.digital').hasClass('active') && !$('.cases').hasClass('show-cases')) {
                
                if ($('.team').hasClass('active')) {
                    if (!$('.team').hasClass('show-team')) {
                        if (sliderScroll)
                            clearTimeout(sliderScroll);
                        sliderScroll = setTimeout(() => {
                            handleSlide(+activeSlideIndex - 1, false)
                        }, 200);
                    }
                    return
                }
                
                if (sliderScroll)
                    clearTimeout(sliderScroll);
                sliderScroll = setTimeout(() => {
                    handleSlide(+activeSlideIndex - 1, false)
                }, 200);
            } else if (!$('.cases').hasClass('active') && $('.cases').hasClass('show-cases') && !$('.team').hasClass('show-team')) {
                if (sliderScroll)
                    clearTimeout(sliderScroll);
                sliderScroll = setTimeout(() => {
                    console.log('2');
                    handleSlide(+activeSlideIndex - 1, false)
                }, 200);
            }
        }
        else {
            if ((activeNextBtn.hasClass('end-btn') || !$('.hero').hasClass('active')) && activeSlideIndex != $('.slider section').length && !$('.consulting').hasClass('active') && !$('.digital').hasClass('active')) {
                if ($('.cases').hasClass('active')) {
                    if ($('.cases').hasClass('cases-end')) {
                        if (sliderScroll)
                            clearTimeout(sliderScroll);
                        sliderScroll = setTimeout(() => {
                            handleSlide(+activeSlideIndex + 1);
                        }, 200);
                    }
                    return
                }

                if ($('.service').hasClass('active')) {
                    if ($('.service').hasClass('service-end')) {
                        if (sliderScroll)
                            clearTimeout(sliderScroll);
                        sliderScroll = setTimeout(() => {
                            handleSlide(+activeSlideIndex + 1);
                        }, 200);
                        setTimeout(() => {
                            $('.service').removeClass('service-end');
                            $('.service').find('.close').removeClass('close');
                        }, 300)
                    }
                    return
                }

                if ($('.team').hasClass('active')) {
                    if ($('.team').hasClass('team-end')) {
                        if (sliderScroll)
                            clearTimeout(sliderScroll);
                        sliderScroll = setTimeout(() => {
                            handleSlide(+activeSlideIndex + 1);
                        }, 200);
                    }
                    return
                }
                
                if (sliderScroll)
                    clearTimeout(sliderScroll);
                sliderScroll = setTimeout(() => {
                    handleSlide(+activeSlideIndex + 1)
                }, 200);
            }
        }
    });
});
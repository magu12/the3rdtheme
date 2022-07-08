export let casesJs = jQuery(document).ready(function () {

    const showCases = () => {
        $('.cases').addClass('show-cases');
    }

    const hideCases = () => {
        $('.cases').removeClass('show-cases');
    }

    const nextStep = () => {
        $('.cases__item.active').addClass('step-p10n');
        $('.cases__prev').removeClass('disabled');
    }

    const prevStep = () => {
        $('.cases__item.active').removeClass('step-p10n');
        $('.cases').removeClass('cases-end');
    }

    const prevCase = () => {
        let activeCase = $('.cases__item.active');
        if (activeCase.index() - 1 >= 0) {
            activeCase.removeClass('active').addClass('next');
            $(`.cases__item:eq(${+activeCase.index() - 1})`).addClass('active').removeClass('prev');
            $(`.cases__item:eq(${+activeCase.index() - 2})`).addClass('prev');
            $(`.cases__tab:eq(${+activeCase.index() - 1})`).addClass('active');
            $(`.cases__tab:eq(${activeCase.index()})`).removeClass('active').addClass('next');;
        }
        /*   if (activeCase.index() - 1 == 0) {
              $('.cases__prev').addClass('disabled')
          } */
        /*  if (activeCase.index() != +$('.cases__item').length - 1) {
             $('.cases__next').removeClass('disabled');
         } */
        if (+activeCase.index() - 1 >= 6)
            tabsAnim();
        else
            tabsAnim(false);
    }

    const tabsAnim = (toEnd = true) => {
        let distance = 1000;
        if (!toEnd) distance = 0;
        $('.cases__tabs').animate({
            scrollLeft: distance
        });
    }


    const nextCase = () => {
        let activeCase = $('.cases__item.active');
        if (activeCase.index() != +$('.cases__item').length - 1) {
            /* setTimeout(() => { $('.cases__item').removeClass('step-p10n'); }, 500); */

            activeCase.removeClass('active').addClass('prev');
            $(`.cases__item:eq(${+activeCase.index() + 1})`).addClass('active').removeClass('next');
            $(`.cases__item:eq(${+activeCase.index() + 2})`).addClass('next');
            $(`.cases__tab:eq(${+activeCase.index() + 1})`).addClass('active');
            $(`.cases__tab:eq(${activeCase.index()})`).removeClass('active').addClass('prev');
        } /* else {
            $('.cases__next').addClass('disabled')
        } */
        if (+activeCase.index() + 1 >= 7)
            tabsAnim();
        else
            tabsAnim(false);

        if ($(`.cases__item.active`).index() == +$(`.cases__item`).length - 1) {
            if ($(`.cases__item.active`).hasClass('step-p10n'))
                $(`.cases`).addClass('cases-end');
        } else {
            $(`.cases`).removeClass('cases-end');
        }
    }



    $('.cases__next').on('click', function () {
        if ($('.cases__item.active').hasClass('step-p10n')) {
            nextCase();
        } else {
            nextStep();
        }
    });

    $('.cases__prev').on('click', function () {
        if ($('.cases__item.active').hasClass('step-p10n')) {
            prevStep();
        } else {
            prevCase();
        }
    });

    $('.cases__tab').on('click', function () {
        $(`.cases__item`).removeClass('active next prev');
        $(`.cases__item:eq(${+$(this).index()})`).addClass('active').removeClass('next');
        $(`.cases__item:eq(${+$(this).index() + 1})`).addClass('next');
        $(`.cases__item:eq(${+$(this).index() - 1})`).addClass('prev');
        $(this).addClass('active').siblings().removeClass('active');
        if ($(this).index() + 1 >= 6)
            tabsAnim();
        else
            tabsAnim(false);

        if ($(`.cases__item.active`).index() == +$(`.cases__item`).length - 1) {
            if ($(`.cases__item.active`).hasClass('step-p10n'))
                $(`.cases`).addClass('cases-end');
        } else {
            $(`.cases`).removeClass('cases-end');
        }
    });

    var casesScroll;



    $(window).bind('mousewheel DOMMouseScroll', function (event) {
        if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
            if ($('.cases').hasClass('show-cases') && $('.cases').hasClass('active') && $(`.cases__item:eq(0)`).hasClass('active') && !$(`.cases__item:eq(0)`).hasClass('step-p10n')) {
                if (casesScroll) clearTimeout(casesScroll);
                casesScroll = setTimeout(() => {
                    hideCases();
                }, 200);
            } else if ($('.cases').hasClass('show-cases')) {
                if (casesScroll) clearTimeout(casesScroll);
                casesScroll = setTimeout(() => {
                    $('.cases__prev').click();
                }, 200);
            }
        }
        else {
            if (!$('.cases').hasClass('show-cases') && $('.cases').hasClass('active')) {
                if (casesScroll) clearTimeout(casesScroll);
                casesScroll = setTimeout(() => {
                    showCases();
                }, 200);
            } else if ($('.cases').hasClass('show-cases')) {
                if (casesScroll) clearTimeout(casesScroll);
                casesScroll = setTimeout(() => {
                    $('.cases__next').click();
                }, 200);
            }
        }
    });
});
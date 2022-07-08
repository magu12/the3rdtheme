export let teamJs = jQuery(document).ready(function () {

    const showTeam = () => {
        $('.team').addClass('show-team');
    }

    const hideTeam = () => {
        $('.team').removeClass('show-team');
    }

    $('.team__open').on('click', function () {
        $('.team').toggleClass('show-team');
    });

    var distance = 0;

    const teamAnim = () => {
        animFinal = false;
        $('.team__items').animate({
            scrollLeft: distance
        }, 300, () => {
            animFinal = true;
        });
    }

    const backScroll = () => {
        if (distance > 0)
            distance -= 150;
        else {
            distance = 0;

        }
        $('.team').removeClass('team-end');
        teamAnim();
    }

    const nextScroll = () => {
        if (distance <= (window.innerWidth - $('.team__items').width()))
            distance += 150
        else
            $('.team').addClass('team-end');
        teamAnim();
    }

    $('.team__prev').on('click', function () {
        if (animFinal)
            backScroll();
    });

    $('.team__next').on('click', function () {
        if (animFinal)
            nextScroll();
    });

    var animFinal = true;

    var teamScroll;


    $(window).bind('mousewheel DOMMouseScroll', function (event) {
        if (event.originalEvent.wheelDelta > 0 || event.originalEvent.detail < 0) {
            if ($('.team').hasClass('active'))
                if ($('.team').hasClass('show-team') && distance == 0) {
                    if (teamScroll) clearTimeout(teamScroll);
                    teamScroll = setTimeout(() => {
                        hideTeam();
                    }, 200);
                } else if (distance != 0) {
                    if (animFinal)
                        backScroll();
                }
        }
        else {
            if ($('.team').hasClass('active'))
                if (!$('.team').hasClass('show-team')) {
                    if (teamScroll) clearTimeout(teamScroll);
                    teamScroll = setTimeout(() => {
                        showTeam();
                    }, 200);
                } else {
                    if (animFinal)
                        nextScroll();
                }
        }
    });
});
export let linkJs = jQuery(document).ready(function () {
    if (!window.location.hash) {
        window.history.pushState(null, null, `#hero`);
        setTimeout(() => {
            $('body').removeClass('load').addClass($(`[link="${window.location.hash.replace('#', '')}`).closest('section').attr('bg-color'));
        }, 1000)
    } else {
        if ($(`[link="${window.location.hash.replace('#', '')}`).prop("tagName") == 'SECTION') {
            $('.section').removeClass('active prev next');
            $(`.section[link="${window.location.hash.replace('#', '')}"`).addClass('active');
            if ($(`.section[link="${window.location.hash.replace('#', '')}"`).index() != 0)
                $('.section').eq($(`.section[link="${window.location.hash.replace('#', '')}"`).index() - 1).addClass('prev');
            $('.section').eq($(`.section[link="${window.location.hash.replace('#', '')}"`).index() + 1).addClass('next');
            setTimeout(() => {
                $('body').removeClass('load').addClass($(`.section[link="${window.location.hash.replace('#', '')}"`).attr('bg-color'));
            }, 1000)
        } else {
            $(`[link="${window.location.hash.replace('#', '')}`).siblings().addClass('hide');
            // need refactoring 
            $(`.end-btn`).addClass('active').siblings().removeClass('active');
            $(`[link="${window.location.hash.replace('#', '')}`).closest('section').addClass('active').siblings().removeClass('active');
            if ($(`[link="${window.location.hash.replace('#', '')}`).closest('section').index() != 0)
                $('.section').eq($(`[link="${window.location.hash.replace('#', '')}`).closest('section').index() - 1).addClass('prev');
            $('.section').eq($(`[link="${window.location.hash.replace('#', '')}`).closest('section').index() + 1).addClass('next');
            setTimeout(() => {
                $('body').removeClass('load').addClass($(`[link="${window.location.hash.replace('#', '')}`).closest('section').attr('bg-color'));
            }, 1000)
        }

        $(`.menu__item[for="${window.location.hash.replace('#', '')}"]`).addClass('active').siblings().removeClass('active');
    }

    $('[for]').on('click', function () {
            $(`.menu__item[for="${$(this).attr('for')}"]`).addClass('active').siblings().removeClass('active');
        if ($(`[link="${$(this).attr('for')}`).prop("tagName") == 'SECTION') {
            $(`.end-btn`).removeClass('active');
            $('.section').removeClass('active prev next')
            $(`.section[link="${$(this).attr('for')}"`).addClass('active').find('div').removeClass('hide');
            if ($(`.section[link="${$(this).attr('for')}"`).index() != 0)
                $('.section').eq($(`.section[link="${$(this).attr('for')}"`).index() - 1).addClass('prev');
            $('.section').eq($(`.section[link="${$(this).attr('for')}"`).index() + 1).addClass('next');
            $('body').removeClass().addClass($(`.section[link="${$(this).attr('for')}"`).attr('bg-color'));
            window.history.pushState(null, null, `#${$(this).attr('for')}`);
        } else {
            $('.section').removeClass('active prev next');
            $(`[link="${$(this).attr('for')}`).siblings().addClass('hide');
            // need refactoring 
            $(`.end-btn`).addClass('active').siblings().removeClass('active');
            $(`[link="${$(this).attr('for')}`).closest('section').addClass('active').siblings().removeClass('active');
            if ($(`[link="${$(this).attr('for')}`).closest('section').index() != 0)
                $('.section').eq($(`[link="${$(this).attr('for')}`).closest('section').index() - 1).addClass('prev');
            $('.section').eq($(`[link="${$(this).attr('for')}`).closest('section').index() + 1).addClass('next');
            $('body').removeClass().addClass($(`[link="${$(this).attr('for')}`).closest('section').attr('bg-color'));
            window.history.pushState(null, null, `#${$(this).attr('for')}`);
        }
    });
});
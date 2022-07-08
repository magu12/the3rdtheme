<?php
get_header();
?>

<div class="slider">

    <?php get_template_part('template-parts/hero'); ?>
    <?php get_template_part('template-parts/service'); ?>
    <?php get_template_part('template-parts/cases'); ?>
    <?php get_template_part('template-parts/team'); ?>
    <?php get_template_part('template-parts/contact'); ?>
    <section index="6" bg-color="black" class="impressum text-block section" link="impressum">
        <div class="text-block__content">
            <h2 class="text-block__title">
                <?php the_field('title', 174); ?>
            </h2>
            <h3 class="text-block__text">
                <?php the_field('text', 174); ?>
            </h3>
        </div>
        <div class="text-page-menu">
            <div class="text-page-menu__item active">
                IMPRINT
            </div>
            <div class="text-page-menu__item" for="datenschutz">
                PRIVACY POLICY
            </div>
            <div class="text-page-menu__item" for="abg">
                AGB
            </div>
        </div>
    </section>
    <section index="7" bg-color="black" class="datenschutz text-block section" link="datenschutz">
        <div class="text-block__content">
            <h2 class="text-block__title">
                <?php the_field('title', 177); ?>
            </h2>
            <h3 class="text-block__text">
                <?php the_field('text', 177); ?>
            </h3>
        </div>
        <div class="text-page-menu">
            <div class="text-page-menu__item" for="impressum">
                IMPRINT
            </div>
            <div class="text-page-menu__item active">
                PRIVACY POLICY
            </div>
            <div class="text-page-menu__item" for="abg">
                AGB
            </div>
        </div>
    </section>
    <section index="8" bg-color="black" class="abg text-block section" link="abg">
        <div class="text-block__content">
            <h2 class="text-block__title">
                <?php the_field('title', 180); ?>
            </h2>
            <h3 class="text-block__text">
                <?php the_field('text', 180); ?>
            </h3>
        </div>
        <div class="text-page-menu">
            <div class="text-page-menu__item" for="impressum">
                IMPRINT
            </div>
            <div class="text-page-menu__item" for="datenschutz">
                PRIVACY POLICY
            </div>
            <div class="text-page-menu__item active">
                AGB
            </div>
        </div>
    </section>
</div>
<div class="to-top" for="hero">
    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="5" cy="23" r="5" fill="black" />
        <circle cx="5" cy="41" r="5" fill="black" />
        <circle cx="23" cy="5" r="5" fill="black" />
        <circle cx="41" cy="23" r="5" fill="black" />
        <circle cx="41" cy="41" r="5" fill="black" />
    </svg>
</div>
</main>
<?php

get_footer();

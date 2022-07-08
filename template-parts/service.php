<section index="2" bg-color="black" class="service next section" link="service">
    <div class="service__tabs">
        <div class="service__tab consulting-open">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/image/consulting-bg.jpg" alt="">
        </div>
        <div class="service__tab digital-open">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/image/digital-bg.jpg" alt="">
        </div>
    </div>
    <div class="service__items">
        <div class="consulting">
            <div class="consulting__close">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/image/consulting-close-bg.jpg" alt="">
            </div>
            <div class="consulting__items">
                <div class="consulting__item active" style="background-color: <?php the_field('bg_color', 79); ?>;">
                    <h2 class="text">
                        <?php the_field('text', 79); ?>
                    </h2>
                    <ul>
                        <?php the_field('list', 79); ?>
                    </ul>
                    <h2 class="service__title">
                        <?php the_field('name', 79); ?>
                    </h2>
                </div>
                <div class="consulting__item" style="background-color:  <?php the_field('bg_color', 89); ?>;">
                    <h2 class="text">
                        <?php the_field('text', 89); ?>
                    </h2>
                    <ul>
                        <?php the_field('list', 89); ?>
                    </ul>
                    <h2 class="service__title">
                        <?php the_field('name', 89); ?>
                    </h2>
                </div>
                <div class="consulting__item" style="background-color:  <?php the_field('bg_color', 92); ?>;">
                    <h2 class="text">
                        <?php the_field('text', 92); ?>
                    </h2>
                    <ul>
                        <?php the_field('list', 92); ?>
                    </ul>
                    <h2 class="service__title">
                        <?php the_field('name', 92); ?>
                    </h2>
                </div>
            </div>
            <div class="digital-open">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/image/open-digital.jpg" alt="">
            </div>
        </div>
        <div class="digital">
            <div class="digital__close">
            </div>
            <div class="digital__items">
                <div class="digital__item" class="active">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/image/digital-open-bg.png" class="digital__item-bg" alt="">
                    <h2 class="right-text">
                        <?php the_field('text', 95); ?>
                    </h2>
                </div>
                <div class="digital__item" style="background-color:<?php the_field('bg_color', 98); ?>;">
                    <h2 class="text">
                        <?php the_field('text', 98); ?>
                    </h2>
                    <ul>
                        <?php the_field('list', 98); ?>
                    </ul>
                    <h2 class="service__title">
                        <?php the_field('name', 98); ?>
                    </h2>
                </div>
                <div class="digital__item" style="background-color: <?php the_field('bg_color', 101); ?>;">
                    <h2 class="text">
                        <?php the_field('text', 101); ?>
                    </h2>
                    <ul>
                        <?php the_field('list', 101); ?>
                    </ul>
                    <h2 class="service__title">
                        <?php the_field('name', 101); ?>
                    </h2>
                </div>
            </div>
            <div class="consulting-open">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/image/open-consulting.jpg" alt="">
            </div>
        </div>
    </div>    
    <div class="btn" for="cases">OUR CASES</div>
</section>
<section index="3" bg-color="white" class="cases section" link="cases">
    <div class="cases__front">
        <div class="cases__feedback">
            <h3 class="cases__feedback-text">
                <?php the_field('feedback', 161); ?>
            </h3>
            <h3 class="cases__feedback-author">
                <?php the_field('name', 161); ?>
            </h3>
            <div class="cases__feedback-img">
                <img src="<?php the_field('img', 161); ?>" alt="">
            </div>
        </div>
        <img class="cases__front-img" src="<?php echo bloginfo('template_url'); ?>/assets/img/image/cases-front.jpg" alt="">
    </div>
    <?php
    $cases =  get_posts(array(
        'numberposts' => -1,
        'orderby'     => 'date',
        'order'       => 'ASC',
        'post_type'   => 'cases',
        'suppress_filters' => true,
    ));

    ?>
    <div class="cases__back">
        <div class="cases__tabs">
            <?php $k = 0;
            foreach ($cases as $post) : ?>
                <div class="cases__tab <?php if ($k == 0) : echo 'active';
                                        endif; ?>">
                    <?php echo $post->name; ?>
                </div>
            <?php $k++;
            endforeach; ?>
        </div>
        <div class="cases__items">

            <?php $k = 0;
            foreach ($cases as $post) : $image = get_field("img"); ?>
                <div class="cases__item <?php if ($k == 0) echo 'active';
                                        elseif ($k == 1) echo 'next'; ?>">
                    <div id="cases__item-step-1" class="cases__item-step cases__item-descr active">
                        <h3 class="cases__title">
                            <?php the_field('title') ?>
                        </h3>
                        <div class="cases__year">
                            <?php the_field('year') ?>
                        </div>
                    </div>
                    <div id="cases__item-step-2" class="cases__item-step cases__item-p10n">
                        <img src="<?php echo $image['url']; ?>" alt="">
                    </div>
                    <h4 class="cases__text">
                        <?php the_field('list') ?>
                        </ul>
                    </h4>
                </div>
            <?php $k++;
            endforeach;
            ?>
        </div>
        <div class="cases__btns">
            <div class="cases__prev">
                <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L12 12L1 23" stroke="white" stroke-width="2" />
                </svg>
            </div>
            <div class="cases__next">
                <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L12 12L1 23" stroke="white" stroke-width="2" />
                </svg>
            </div>
        </div>
    </div>
</section>
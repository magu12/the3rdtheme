<section index="4" bg-color="yellow-hide-header" class="team section" link="team">
    <div class="team__text">
        <?php the_field('text', 154); ?>
    </div>
    <div class="team__open">
        Meet our team
        <svg width="25" height="15" viewBox="0 0 25 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.5 1.5L12.5 12.5L1.5 1.5" stroke="black" stroke-width="3" />
        </svg>
    </div>
    <div class="team__items">
        <?php

        $team_members =  get_posts(array(
            'numberposts' => -1,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'team',
            'suppress_filters' => true,
        ));

        ?>
        <?php foreach ($team_members as $post) : $image = get_field("photo"); ?>
            <?php if ($post->linkedin != '') : ?>
                <a href="<?php echo $post->linkedin; ?>" target="_blank" class="team__item">
                <?php else : ?>
                    <div class="team__item">
                    <?php
                endif;
                    ?>
                    <div class="team__img">
                        <img src="<?php echo $image; ?>" alt="">
                    </div>
                    <h3 class="team__name">
                        <?php the_field("name"); ?>
                    </h3>
                    <div class="team__hover">
                        <h3 class="team__post">
                            <?php echo $post->post; ?>
                        </h3>
                        <h4 class="team__descr">
                            <?php echo $post->descr; ?>
                        </h4>
                    </div>
                    <?php if ($post->linkedin != '') : ?>
                </a>
            <?php else : ?>
    </div>
<?php
                    endif;
?>
<?php endforeach; ?>
</div>
<div class="team__btns">
    <div class="team__prev">
        <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L12 12L1 23" stroke="white" stroke-width="2" />
        </svg>
    </div>
    <div class="team__next">
        <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L12 12L1 23" stroke="white" stroke-width="2" />
        </svg>
    </div>
</div>
<div class="btn" for="contact">CONTACT US</div>
</section>
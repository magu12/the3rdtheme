<section index="5" bg-color="pink" class="contact section" link="contact">
    <h2 class="contact__title">
        Let’s start
        the journey
        to<span>gether.</span>
    </h2>
    <img class="strokes" src="<?php echo bloginfo('template_url'); ?>/assets/img/image/strokes.png" alt="">
    <div class="contact__content">
        <form>
            <?php echo do_shortcode('[contact-form-7 id="186" title="Contact form"]'); ?>
        </form>
        <div class="contact__info">
            <h3 class="contact__info-title">
                Contact us now!
            </h3>
            <a href="/" class="contact__place">

                <?php the_field('adress', 187); ?>
            </a>
            <a href="mailto:
            <?php the_field('adress', 187); ?>" class="contact__email">
                <?php the_field('email', 187); ?>
            </a>
            <a href="tel:<?php $phone = get_field('phone', 187);
                            $res = preg_replace("/[^0-9]/", "", $phone);
                            echo $res; ?>" class="contact__phone">
                <?php the_field('phone', 187); ?>
            </a>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2428.114517844807!2d13.30301521580721!3d52.5132665798129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a85120f03adf05%3A0xc68304bb569e4203!2zV2lsbWVyc2RvcmZlciBTdHIuIDE0NS0xNDYsIDEwNTg1IEJlcmxpbiwg0JPQtdGA0LzQsNC90LjRjw!5e0!3m2!1sen!2sen!4v1657010867490!5m2!1sen!2sen" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <img class="pieces" src="<?php echo bloginfo('template_url'); ?>/assets/img/image/pieces.png" alt="">
    <div class="text-page-menu">
        <div class="text-page-menu__item" for="impressum">
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
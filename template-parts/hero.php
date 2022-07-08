<section index="1" bg-color="yellow" class="hero active section" link="hero">
    <div class="hero__slider">
        <div id="hero-slide-1" class="hero__slide">
            <img class="hero__bg" src=" <?php echo get_field('bg-img', 53); ?>" alt="">
            <div class="hero__content">
                <h2 class="title">
                    <?php the_field('title', 53); ?>
                </h2>
                <div class="dots">
                    <div class="dot">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="5" fill="white" />
                        </svg>
                    </div>
                    <div class="dot">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="5" fill="white" />
                        </svg>
                    </div>
                    <div class="dot">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="5" fill="white" />
                        </svg>
                    </div>
                </div>
                <div for="about" class="btn">ABOUT US</div>
            </div>
        </div>
        <div id="hero-slide-2" class="hero__slide about"  link="about">
            <img class="hero__bg" src="<?php echo get_field('bg-img', 64); ?>" alt="">
            <div class="hero__content">
                <h3 class="title">
                    <?php the_field('subtitle', 64); ?>
                </h3>
                <h2 class="title">
                    <?php the_field('title', 64); ?>
                </h2>
                <h4 class="text">
                    <?php the_field('text', 64); ?>
                </h4>
                <div class="dots">
                    <div class="dot">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="5" fill="white" />
                        </svg>
                    </div>
                    <div class="dot">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="5" fill="white" />
                        </svg>
                    </div>
                    <div class="dot">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="5" fill="white" />
                        </svg>
                    </div>
                </div>
                <div for="service" class="btn btn_white btn_text-pink">SERVICE</div>
            </div>
        </div>
        <div id="hero-slide-3" class="hero__slide">
        <img class="hero__bg" src=" <?php echo get_field('bg-img', 69); ?>" alt="">
            <div class="hero__content">
                <h3 class="title">
                    <?php the_field('subtitle', 69); ?>
                </h3>
                <h2 class="title">
                    <?php the_field('title', 69); ?>
                </h2>
                <h4 class="text">
                    <?php the_field('text', 69); ?>
                </h4>
                <div class="dots">
                    <div class="dot">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="5" fill="white" />
                        </svg>
                    </div>
                    <div class="dot">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="5" fill="white" />
                        </svg>
                    </div>
                    <div class="dot">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="5" fill="white" />
                        </svg>
                    </div>
                </div>
                <div for="service" class="btn">SERVICE</div>
            </div>
        </div>
    </div>
    <div class="next-slide">
        <svg class="start-btn active" style="opacity: 0;" width="47" height="50" viewBox="0 0 47 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M46.84 49.84L46.84 0.230042L38.11 0.230042L38.11 49.84L46.84 49.84Z" fill="white" />
            <path d="M28.17 49.84L28.17 0.230042L19.44 0.230042L19.44 49.84L28.17 49.84Z" fill="white" />
            <path d="M9.5 49.84L9.5 0.230042L0.77 0.230042L0.769998 49.84L9.5 49.84Z" fill="white" />
        </svg>
        <svg class="next-btn" width="54" height="71" viewBox="0 0 54 71" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M53.9904 35.0796L18.9109 0L12.7378 6.17307L47.8174 41.2526L53.9904 35.0796Z" fill="#F4D924" />
            <path d="M47.8235 28.8599L12.7439 63.9395L18.9169 70.1125L53.9965 35.0329L47.8235 28.8599Z" fill="#F4D924" />
            <path d="M49.61 30.6433H0V39.3733H49.61V30.6433Z" fill="white" />
        </svg>
        <svg class="end-btn" width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="31" cy="31" r="26.635" stroke="white" stroke-width="8.73" />
        </svg>
    </div>
</section>
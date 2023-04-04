<?php get_header(); ?>

<main>
    <!-- HERO SECTION -->
    <section>
        <div class="container-fluid py-lg-4 hero" style="background-image: url('<?php echo esc_url(get_field('hero_bg')['url']); ?>');">
            <div class="container-fluid py-5 px-2 hero__bluebox" data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <header>
                            <div class="col-lg-7">
                                <h1 class="hero__header"><?php the_field('hero_header'); ?></h1>
                                <p class="pt-2 hero__desc"><?php the_field('hero_desc'); ?></p>
                            </div>
                        </header>
                    </div>
                </div>
            </div>
            <div class="container hero__form" data-aos="fade-left" data-aos-delay="800">
                <div class="row py-5 d-flex justify-content-end">
                    <div class="col-lg-5">
                        <div class="hero__form-box p-4 p-lg-5">
                            <p class="hero__form-header"><?php the_field('hero_form-header'); ?></p>
                            <div class="hero__contact-form">
                                <?php echo (do_shortcode('[contact-form-7 id="82" title="Formularz"]')); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section>
        <div class="container-fluid py-5 about">
            <div class="container py-lg-5">
                <div class="row">
                    <div class="col-12 col-lg-9" data-aos="fade-up">
                        <div data-aos="fade-up">
                            <h2 class="about__bigheader"><?php the_field('about_bigheader'); ?></h2>
                        </div>
                        <div data-aos="fade-up">
                            <h3 class="about__header"><?php the_field('about_header'); ?></h3>
                        </div>
                        <div data-aos="fade-up">
                            <p class="about__desc"><?php the_field('about_desc'); ?></p>
                        </div>
                        <div class="pt-4" data-aos="fade-up">
                            <?php $link = get_field('about_btn');
                            if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                                <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>
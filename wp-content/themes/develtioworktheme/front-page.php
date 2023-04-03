<?php get_header(); ?>

<div class="container-fluid py-4 hero" style="background-image: url('<?php echo esc_url(get_field('hero_bg')['url']); ?>');">
    <div class="container hero__form">
        <div class="row py-5 d-flex justify-content-end">
            <div class="col-lg-5">
                <div class="hero__form-box p-5">
                    <p class="hero__form-header"><?php the_field('hero_form-header'); ?></p>
                    <div class="hero__contact-form">
                        <?php echo(do_shortcode('[contact-form-7 id="82" title="Formularz"]')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 hero__bluebox">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1 class="hero__header"><?php the_field('hero_header'); ?></h1>
                    <h2 class="hero__desc"><?php the_field('hero_desc'); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
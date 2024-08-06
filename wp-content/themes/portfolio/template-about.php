<?php /* Template Name: About me */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <h1 class="visually_hidden">Main content</h1>
        <section class="hero">
            <h2><?= get_field('about_title'); ?></h2>
            <article class="about-me">
                <h3><?= get_field('about_me_title'); ?></h3>
                <div class="my-career">
                    <h4><?= get_field('career_title'); ?></h4>
                    <p><?= get_field('career_content'); ?></p>
                </div>
                <div class="my-vision">
                    <h4><?= get_field('vision_title'); ?></h4>
                    <p><?= get_field('vision_content'); ?></p>
                </div>
                <?php $image = get_field('about_image');
                if ($image): ?>
                    <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="me__img">
                <?php else: ?>
                    <p>Image not found</p>
                <?php endif; ?>
            </article>
        </section>
        <?php get_template_part('home/skills') ?>
        <section class="formation">
            <h2 role="heading" aria-level="2" class="formation__title">
                MY FORMATION
            </h2>
            <div class="formation__container">
                <?php
                $args = [
                    'post_type' => 'formation',
                    'posts_per_page' => 3,
                ];
                $formation_query = new WP_Query($args);
                if ($formation_query->have_posts()) :
                    while ($formation_query->have_posts()) : $formation_query->the_post();
                        $year = get_field('year');
                        $title = get_field('title');
                        $desc = get_field('description');
                        ?>
                        <div data-animation="showUp" class="formation__container__item" itemscope
                             itemtype="https://schema.org/Organization">
                            <h3 class="formation__container__item__year" role="heading" aria-level="3"
                                itemprop="name">
                                <?= $year; ?>
                            </h3>
                            <span class="formation__container__item__title">
                                 <?= $title; ?>
                            </span>
                            <p class="formation__container__item__desc" itemprop="description">
                                <?= $desc; ?>
                            </p>
                        </div>
                    <?php endwhile;
               endif; ?>
            </div>
        </section>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

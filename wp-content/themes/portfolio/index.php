<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <h1 class="visually_hidden">Main content</h1>
        <section class="hero">
            <h2>Portfolio</h2>
            <article class="me">
                <h3>Web Developer</h3>
                <p>Amélie Siquet</p>
                <?php $image = get_field('home_image');
                if ($image): ?>
                    <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="me__img">
                <?php else: ?>
                    <p>Image not found</p>
                <?php endif; ?>
                <p class="me__scroll">scroll</p>
            </article>
        </section>
        <?php get_template_part('home/recent-projects'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

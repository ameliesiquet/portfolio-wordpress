<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="home">
        <h1 class="visually_hidden">Main content</h1>
        <section class="hero">
            <h2>Portfolio</h2>
            <article class="me">
                <div class="gradient__line"></div>
                <h3> Web <span class="gradient__line__black"> </span> Developer</h3>
                <p class="me__name">Amélie Siquet</p>
                <?php $image = get_field('home_image');
                if ($image): ?>
                    <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="me__img">
                <?php else: ?>
                    <p>Image not found</p>
                <?php endif; ?>
                <div class="gradient__line__bottom"></div>
                <p class="me__scroll">scroll</p>
                <div class="me__social">
                    <p>Social Media Icons</p>
                    <ul role="list" id="social" class="me__social">
                        <?php
                        $social_post_id = 50;

                        $social_medias = [
                            'facebook' => 'Facebook',
                            'instagram' => 'Instagram',
                            'github' => 'GitHub',
                        ];
                        foreach ($social_medias as $slug => $name) :
                            $image = get_field("{$slug}_image", $social_post_id);
                            $link = get_field("{$slug}_link", $social_post_id);
                            if ($image && $link) : ?>
                                <li itemscope itemtype="http://schema.org/SiteNavigationElement">
                                    <a href="<?= esc_url($link); ?>" tabindex="0" title="Vers la page du réseau <?= esc_attr($name); ?>" itemprop="url">
                                        <img class="social_logo" src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                                    </a>
                                </li>
                            <?php else : ?>
                                <li>Error: No image or link found for <?= esc_html($name); ?></li>
                            <?php endif;
                        endforeach;
                        ?>
                    </ul>
                </div>
            </article>
        </section>
        <?php get_template_part('home/recent-projects'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

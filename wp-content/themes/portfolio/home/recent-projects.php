<section class="recent showUp">
    <?php if (is_page('my-projects')): ?>
        <h2 class="recent__title second_title" role="heading" aria-level="2">My projects</h2>
    <?php else: ?>
        <h2 class="recent__title second_title" role="heading" aria-level="2">Recent projects</h2>
    <?php endif; ?>
    <div class="recent__container" itemscope itemtype="https://schema.org/CreativeWork">
        <?php
        $projects = new WP_Query([
            'post_type' => 'project',
            'posts_per_page' => 4,
        ]);

        if ($projects->have_posts()) :
            while ($projects->have_posts()) : $projects->the_post();
                $title = get_the_title();
                $link = get_permalink();
                $image = get_field('image');
                $alt = get_field('alt_text');
                $image_url = $image['url'] ?? '';
                ?>
                <div class="recent__container__card">
                    <a href="<?= esc_url($link); ?>" title="Open the project">
                        <h3 aria-level="3" role="heading" itemprop="name"><?= esc_html($title); ?></h3>
                    </a>
                    <a href="<?= esc_url($link); ?>" title="Open the project" class="recent__container__card__img">
                        <?php if ($image_url): ?>
                            <img src="<?= esc_url($image_url); ?>" alt="<?= esc_attr($alt); ?>" width="30%">
                        <?php else: ?>
                            <img src="path/to/default/image.png" alt="Default image" width="30%">
                        <?php endif; ?>
                    </a>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No projects found</p>';
        endif;
        ?>
    </div>
    <?php if (is_page('home')) : ?>
        <div class="cta">
            <a class="cta__btn" href="<?= get_post_type_archive_link('my-projects'); ?>"
               title="Link to my projects page">View all</a>
        </div>
    <?php else: ?>
    <?php endif; ?>
</section>
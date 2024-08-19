<section class="skills">
    <h2>My Skills</h2>
    <ul class="skills__block">
        <?php
        $skills = new WP_Query([
                'post_type' => 'skill',
                'posts_per_page' => 12,
        ]);
        if($skills->have_posts()):
            while ($skills->have_posts()) : $skills->the_post();
                $image = get_field('image');
                $alt = get_field('alt_text');
                $image_url = $image['url'] ?? '';
                ?>
                <li class="skills__block__item">
                    <?php if ($image_url): ?>
                        <img src="<?= ($image_url); ?>" alt="<?= ($alt); ?>" width="30%">
                    <?php else: ?>
                        <img src="path/to/default/image.png" alt="Default image" width="30%">
                    <?php endif; ?>
                </li>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<li>No skills found</li>';
        endif;
        ?>
    </ul>
</section>

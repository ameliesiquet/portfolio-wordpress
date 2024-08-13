<nav id="navigation" class="navigation" role="navigation" itemscope>
    <h2 class="visually_hidden" role="heading" aria-level="2">Navigation</h2>
    <div class="burger-menu">
        <input type="checkbox" name="burger-toggle" id="burger__toggle">
        <label class="visually_hidden" for="burger__toggle">Burger Menu</label>
        <div class="burger-wrapper">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="burger-menu__list">
            <?php
            $nav = new WP_Query([
                'post_type' => 'navigation-list',
                'posts_per_page' => 4,
            ]);
            if ($nav->have_posts()) :
                while ($nav->have_posts()) : $nav->the_post();
                    $title = get_field('title');
                    $link = get_field('link');

                    // Check if the current page URL matches the link URL
                    $active_class = (strpos($_SERVER['REQUEST_URI'], parse_url($link, PHP_URL_PATH)) !== false) ? 'active' : '';
                    ?>
                    <li class="<?= $active_class; ?>">
                        <a href="<?= esc_url($link); ?>" title="<?= esc_attr($title); ?>">
                            <?= esc_html($title); ?>
                        </a>
                    </li>
                <?php endwhile;
            endif; ?>
        </ul>
    </div>
</nav>

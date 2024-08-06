<?php /* Template Name: Privacy Policy Template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <h2 role="heading" aria-level="2" class="main_title">Privacy Policy</h2>
        <section class="privacy-policy">
            <p class="privacy-policy__update">Last updated on: <span><?= get_field('privacy-date'); ?></span></p>
            <p>We place great importance on protecting your personal data. Our commitment is reflected in our confidential handling of this data and its use strictly within the scope of its initial collection. Please note that your data may be stored in our databases and will not be disclosed to third parties without your explicit consent. Additionally, you have the right to request access to, correction of, or deletion of your data at any time.</p>
            <article class="privacy-policy__card">
                <h3 role="heading" aria-level="3">Identity</h3>
                <p>Requena Sam<br> 4860, Pepinster<br> Belgium</p>
            </article>
            <article class="privacy-policy__card">
                <h3 role="heading" aria-level="3">Contact</h3>
                <p>You can contact us at:<br> Phone: +32 (0)472 86 02 18<br>Email: <a href="mailto:samrequena15@gmail.com">samrequena15@gmail.com</a></p>
            </article>
            <article class="privacy-policy__card">
                <h3 role="heading" aria-level="3">Hosting</h3>
                <p>INFOMANIAK<br> Located at 26 Avenue de la Praille,<br> 1227 Geneva,<br> Switzerland.<br> For more information, please visit Infomaniak's website: <a href="https://www.infomaniak.com/fr" target="_blank">Infomaniak</a></p>
            </article>
            <?php if (have_rows('privacy-list')) :
                while (have_rows('privacy-list')) : the_row();
                    $title = get_sub_field('privacy-title');
                    $text = get_sub_field('privacy-text');
                    ?>
                    <article class="privacy-policy__card">
                        <h3 role="heading" aria-level="3"><?= esc_html($title); ?></h3>
                        <p><?= esc_html($text); ?></p>
                    </article>
                <?php endwhile;
            endif; ?>
        </section>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>

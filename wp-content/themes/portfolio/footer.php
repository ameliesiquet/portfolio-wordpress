<footer role="contentinfo" tabindex="0" class="footer" id="footer">
    <h2 role="heading" aria-level="2" class="visually-hidden">Amélie Siquet</h2>
    <hr data-animation="showUp"><!--Barre de séparation-->
    <section class="footer__container">
        <div class="footer__container__contact">
            <h3 role="heading" aria-level="3">Contact</h3>
            <ul role="list" class="footer__contact__list">
                <li>
                    <a title="Send a mail to Amélie Siquet" href="mailto:ameliesiquet@gmail.com">Email</a>
                </li>
                <li>
                    <a title="Call Amélie Siquet" href="tel:+32475642367">Téléphone</a>
                </li>
            </ul>
        </div>
        <div class="footer__container__navigation">
        </div>
        <div class="footer__container__social">
            <h3 role="heading" aria-level="3">Socials</h3>
            <ul role="list" id="social">
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
    </section>
    <hr data-animation="showUp"><!--Barre de séparation-->
    <div data-animation="showUp" class="footer__bottom">
        <p>© 2024 Amélie Siquet - All rights reserved</p>
        <a href="<?= get_field('footer-confi-link', 'options'); ?>" title="Go to the terms of use page">Terms of use</a>
    </div>
</footer>
<script type="module" src="<?= dw_asset('js/site.js') ?>" defer></script>
</body>
</html>

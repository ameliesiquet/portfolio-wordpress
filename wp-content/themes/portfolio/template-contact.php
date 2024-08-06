<?php /* Template Name: Contact*/ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <h2 role="heading" aria-level="2" class="contact_title main_title">Contact</h2>
        <section class="contact">
            <h3>Let's get in touch!</h3>
            <div class="contact__content" itemscope itemtype="https://schema.org/Person">
                <p>Do you have questions or a project? Feel free to contact me using the form or the information
                    below!</p>
                <div class="contact__content__way">
                    <p><b>Email</b></p>
                    <a title="Send a email to Amélie Siquet"
                       href="mailto:<?= get_field('contact-email'); ?>"
                       itemprop="email"><?= get_field('contact-email'); ?></a>
                </div>
                <div class="contact__content__way">
                    <p><b>Phone</b></p>
                    <a title="Click here to call Amélie Siquet"
                       href="tel:<?= get_field('contact-phone'); ?>"
                       itemprop="telephone"><?= get_field('contact-phone'); ?></a>
                </div>
            </div>
            <div class="contact__form">
                <h3 role="heading" aria-level="3">Contact form</h3>
                <?php get_template_part('components/contact-form'); ?>
            </div>
        </section>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
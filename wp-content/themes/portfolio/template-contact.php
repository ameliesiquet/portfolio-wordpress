<?php /* Template Name: Contact*/ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="contact">
        <h2 role="heading" aria-level="2" class="contact_title main_title">Contact</h2>
        <section class="contact__container showUp">
            <div class="contact__container__content" itemscope itemtype="https://schema.org/Person">
                <h3>Let's get in touch!</h3>
                <p>Do you have questions or a project? Feel free to contact me using the form or the information
                    below!</p>
                <div class="contact__container__content__way">
                    <p>Email</p>
                    <a title="Send a mail to Amélie Siquet" href="mailto:ameliesiquet@gmail.com">ameliesiquet@gmail.com</a>
                </div>
                <div class="contact__container__content__way">
                    <p>Phone</p>
                    <a title="Call Amélie Siquet" href="tel:+32475642367">+32 475 642 367</a>
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
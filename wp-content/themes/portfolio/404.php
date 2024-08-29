<?php get_header(); ?>
<main class="error showUp">
    <h2 class="hidden" role="heading" aria-level="2">Error404</h2>
    <section class="error__content">
        <h3 role="heading" aria-level="3">Error 404</h3>
        <p>Sorry, page not found!</p>
        <div class="error__cta cta_group">
            <a class="cta_group__primary_btn" title="Link to home page"
               href="<?php echo esc_url(home_url('/')); ?>">Go back to home page
            </a>
        </div>
    </section>
</main>
<?php get_footer(); ?>

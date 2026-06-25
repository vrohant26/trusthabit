<?php
/**
 * Template Name: Privacy Policy
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="container px-container" style="max-width: 900px; padding-top: clamp(4.2rem, 7vw, 5.6rem); padding-bottom: clamp(2.8rem, 5.6vw, 4.2rem);">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header" style="margin-bottom: 2.5rem; border-bottom: 1px solid #e1e7ef; padding-bottom: 1rem;">
                    <?php the_title( '<h1 class="entry-title font-heading" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 700; color: var(--color-text-dark); margin-bottom: 0;">', '</h1>' ); ?>
                </header>

                <div class="entry-content" style="color: var(--color-text-dark); line-height: 1.7; font-size: 1.05rem; max-width: 800px; margin: 0 auto 0 0;">
                    <?php
                    the_content();
                    ?>
                </div>
            </article>
            <?php
        endwhile; // End of the loop.
        ?>
    </section>
</main>

<?php
get_footer();

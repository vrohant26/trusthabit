<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header();
?>

<main id="primary" class="site-main min-h-screen bg-light py-24 px-4 pt-32">
    <div class="container">
        <?php if ( have_posts() ) : ?>

            <header class="page-header mb-12 text-center">
                <h1 class="page-title fs-4xl font-bold text-primary">
                    <?php if ( is_home() && ! is_front_page() ) : ?>
                        <?php single_post_title(); ?>
                    <?php else : ?>
                        Blog
                    <?php endif; ?>
                </h1>
            </header>

            <div class="grid gap-8" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white p-6 rounded-xl shadow-sm border transition hover:shadow-md' ); ?>>
                        <header class="entry-header mb-4">
                            <?php
                            if ( is_singular() ) :
                                the_title( '<h1 class="entry-title fs-2xl font-bold text-primary">', '</h1>' );
                            else :
                                the_title( '<h2 class="entry-title fs-2xl font-bold"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-primary hover:text-accent transition">', '</a></h2>' );
                            endif;
                            ?>
                        </header>

                        <div class="entry-content fs-base text-secondary">
                            <?php
                            the_excerpt();
                            ?>
                        </div>
                    </article>
                <?php
                endwhile;

                the_posts_navigation( array(
                    'prev_text' => '<span class="nav-subtitle fs-sm text-secondary uppercase tracking-wide">Previous</span>',
                    'next_text' => '<span class="nav-subtitle fs-sm text-secondary uppercase tracking-wide">Next</span>',
                ) );
                ?>
            </div>

        <?php else : ?>

            <section class="no-results not-found text-center my-24">
                <h1 class="page-title fs-4xl font-bold text-primary mb-4">Nothing Found</h1>
                <p class="fs-lg text-secondary">It seems we can&rsquo;t find what you&rsquo;re looking for.</p>
            </section>

        <?php endif; ?>
    </div>
</main>

<?php
get_footer();

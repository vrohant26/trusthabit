<?php
/**
 * Template for displaying Single Blog Post
 */
get_header();
?>

<main id="primary" class="site-main flex flex-column gap-xl pt-32" style="padding-bottom: 6rem;">

    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class('container px-container mt-md'); ?> style="max-width: 900px; margin: 0 auto; margin-top: 4rem;">
            
            <header class="entry-header text-center" style="margin-bottom: 3rem;">
                <h1 class="entry-title font-heading text-dark" style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 500; margin-bottom: 1.5rem;">
                    <?php the_title(); ?>
                </h1>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-thumbnail" style="border-radius: 16px; overflow: hidden; aspect-ratio: 16/9; background: #f1f5f9; margin-bottom: 4rem;">
                    <?php the_post_thumbnail( 'full', array( 'style' => 'width: 100%; height: 100%; object-fit: cover;' ) ); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content font-body single-blog-content" style="font-size: 1.15rem; line-height: 1.8; color: #334155;">
                <?php
                the_content();
                ?>
            </div>
            
        </article>

        <?php
    endwhile; // End of the loop.
    ?>

</main>

<?php get_footer(); ?>

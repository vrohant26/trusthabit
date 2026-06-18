<?php
/**
 * Template for displaying Blog Archive
 */
get_header();
?>

<main id="primary" class="site-main flex flex-column gap-xl pt-32">

    <!-- Blog Hero Section -->
    <section class="container px-container mt-md">
        <div class="contact-hero text-center flex flex-column justify-center items-center">
            <h1 class="font-heading text-white" style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 500;">
                Blog
            </h1>
        </div>
    </section>

    <!-- Blog Archive Section -->
    <section class="container px-container" style="padding-bottom: 6rem;">
        
        <!-- Search Filter -->
        <div class="blog-search-wrapper" style="    margin: 0 auto 3rem auto; max-width: 500px;">
            <form role="search" method="get" class="blog-search-form flex items-center gap-sm" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="hidden" name="post_type" value="blog">
                <input type="search" class="form-input blog-search-input" style="flex: 1; padding: 0.75rem 1rem; border: 1px solid #cbd5e1; border-radius: 6px; font-family: var(--font-body);" placeholder="Search any word in the title..." value="<?php echo get_search_query(); ?>" name="s" title="Search blogs" />
                <button type="submit" class="btn btn-primary bg-primary text-white font-medium" style="padding: 0.75rem 1.5rem; border-radius: 6px; border: none; cursor: pointer;">Search</button>
            </form>
        </div>

        <!-- Blog Grid -->
        <div class="blog-grid">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?>>
                        <div class="blog-card-img">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium_large' ); ?>
                                </a>
                            <?php else : ?>
                                <div class="blog-placeholder-img"></div>
                            <?php endif; ?>
                        </div>
                        <div class="blog-card-content">
                            <header class="entry-header">
                                <h2 class="entry-title font-heading">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                            </header>
                            <div class="entry-summary font-body">
                                <?php echo wp_trim_words( get_the_excerpt(), 15, '...' ); ?>
                            </div>
                            <div class="blog-card-footer">
                                <a href="<?php the_permalink(); ?>" class="blog-read-more">
                                    Read More
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </a>
                            </div>
                        </div>
                    </article>
                    <?php
                endwhile;
            else :
                echo '<p class="font-body text-muted">No blogs found.</p>';
            endif;
            ?>
        </div>

        <!-- Pagination -->
        <div class="blog-pagination">
            <?php
            echo paginate_links( array(
                'prev_text' => __( '« Previous' ),
                'next_text' => __( 'Next »' ),
                'type'      => 'list',
            ) );
            ?>
        </div>

    </section>

</main>

<?php get_footer(); ?>

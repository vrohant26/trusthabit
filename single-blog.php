<?php
/**
 * Template for displaying Single Blog Post
 */
get_header();
?>

<main id="primary" class="site-main pt-32" style="padding-bottom: 6rem;">

    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <?php 
            $hero_bg = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'full' ) : ''; 
            ?>
            <div class="container px-container mt-md">
                <div class="single-blog-hero" style="position: relative; width: 100%; height: 400px; border-radius: 16px; overflow: hidden; margin-bottom: 4rem; display: flex; align-items: flex-end; justify-content: flex-start; text-align: left; background-color: var(--color-primary); background-image: url('<?php echo esc_url($hero_bg); ?>'); background-size: cover; background-position: center;">
                    <!-- Dark Gradient Overlay for text readability -->
                    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(15, 23, 42, 0.1), rgba(15, 23, 42, 0.9)); z-index: 1;"></div>
                    
                    <!-- Title Content -->
                    <div style="position: relative; z-index: 2; padding: 3rem 4rem; width: 100%;">
                        <h1 class="entry-title font-heading text-white" style="font-size: clamp(2.5rem, 4vw, 4rem); font-weight: 600; line-height: 1.2; max-width: 900px; margin: 0; text-shadow: 0 4px 12px rgba(0,0,0,0.5);">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="container px-container single-blog-layout">
                <!-- Left Sidebar: TOC -->
                <aside class="single-blog-sidebar">
                    <div class="blog-toc-container" id="blog-toc-container">
                        <div class="toc-header font-heading">
                            Table of Contents
                        </div>
                        <ul class="toc-list font-body" id="dynamic-toc-list">
                            <!-- JS will inject headings here -->
                        </ul>
                    </div>
                </aside>

                <!-- Right Content -->
                <div class="single-blog-main-content">

                    <div class="entry-content font-body single-blog-content" id="single-blog-content" style="font-size: 1.15rem; line-height: 1.8; color: #334155;">
                        <?php
                        the_content();
                        ?>
                    </div>
                </div>
            </div>
            
        </article>

        <?php
    endwhile; // End of the loop.
    ?>

       <section class="cta-section" style="margin-top: 8rem">
        <div class="container px-container">
            <div class="cta-container">
                <div class="cta-grid">
                    
                    <!-- Left Column -->
                    <div class="cta-content flex flex-column justify-center">
                        <div>
                            <div class="problem-badge badge-translucent mb-sm">
                                <span class="problem-badge-dot badge-dot-blue"></span>
                                DESIGNED FOR TODAY. READY FOR WHAT'S NEXT.
                            </div>
                            <h2 class="cta-title font-heading text-white">
                                Start building cyber resilience today
                            </h2>
                            <p class="cta-desc text-white mb-lg">
                                See how Trust Habit helps your organization understand, improve, and sustain secure behavior.
                            </p>
                            <div class="cta-actions flex items-center gap-md">
                                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-white bg-white text-primary font-medium text-base rounded-sm inline-flex items-center gap-sm" style="padding: 0.5rem 0.5rem 0.5rem 1.25rem;">
                                    Request a demo
                                    <span class="btn-icon icon-box bg-primary text-white rounded-sm flex items-center justify-center" style="width: 32px; height: 32px; margin-left: 0.5rem;">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="7" y1="17" x2="17" y2="7"></line>
                                            <polyline points="7 7 17 7 17 17"></polyline>
                                        </svg>
                                    </span>
                                </a>
                             
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

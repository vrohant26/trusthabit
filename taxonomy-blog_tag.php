<?php
/**
 * Template for displaying Blog Archive
 */
get_header();
?>

<main id="primary" class="site-main flex flex-column gap-xl pt-32">

    <!-- Blog Hero Section -->
    <section class="container px-container mt-md" style="margin-bottom: 4rem;">
        <div class="blog-hero text-left">
            <h1 class="font-heading" style="font-size: clamp(2.5rem, 4vw, 3.5rem); font-weight: 500; color: #475569; max-width: 800px; line-height: 1.2; margin-bottom: 1.5rem;">
                Tag: <span style="color: var(--color-primary);"><?php single_term_title(); ?></span>
            </h1>
            <p class="font-body text-muted" style="max-width: 800px; font-size: 1rem; line-height: 1.6;">
                Stay updated with phishing insights, security awareness strategies, product updates, and best practices from the Trust Habit team — helping organizations reduce human risk and build a stronger security culture.
            </p>
        </div>
        <!-- Divider -->
        <div style="height: 1px; background: #e2e8f0; width: 100%; margin-top: 3rem;"></div>
    </section>

    <!-- Blog Archive Section -->
    <section class="container px-container blog-archive-layout" style="padding-bottom: 6rem; display: grid; gap: 4rem; grid-template-columns: 3fr 7fr; align-items: start;">
        
        <!-- Left Sidebar (Sticky) -->
        <aside class="blog-sidebar-sticky" style="position: sticky; top: 120px;">
            <!-- Search Filter -->
            <div class="blog-search-wrapper" style="margin-bottom: 2.5rem;">
                <form role="search" method="get" class="blog-search-form flex items-center" style="display:flex; width:100%; border-radius: 4px; overflow: hidden; border: 1px solid #e2e8f0; background: #f8fafc;" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="blog-search-form">
                    <div style="padding: 0.75rem 0.5rem 0.75rem 0.75rem; color: #64748b; display: flex; align-items: center;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                    <input type="search" id="blog-search-input" class="form-input" style="flex: 1; padding: 0.75rem 0.5rem; border: none; background: transparent; font-family: var(--font-body); outline: none; font-size: 0.95rem; color: #334155;" placeholder="Search..." value="<?php echo get_search_query(); ?>" title="Search blogs" />
                    <button type="submit" style="padding: 0.75rem 1.25rem; background: var(--color-primary); color: white; border: none; cursor: pointer; display: flex; align-items: center; justify-content: center;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                </form>
            </div>

            <!-- Tags Filter -->
            <div class="blog-tags-sidebar">
                <?php $current_tag_slug = is_tax('blog_tag') ? get_queried_object()->slug : ''; ?>
                <a href="<?php echo get_post_type_archive_link('blog'); ?>" class="blog-tag-filter <?php echo empty($current_tag_slug) ? 'active' : ''; ?> flex items-center gap-sm" data-tag="" style="text-decoration: none; color: #475569; font-family: var(--font-body); font-size: 0.85rem; font-weight: 600; margin-bottom: 1.25rem; display: flex; text-transform: uppercase; letter-spacing: 0.05em;">
                    <div class="tag-marker" style="width: 12px; height: 12px; background: <?php echo empty($current_tag_slug) ? 'var(--color-primary)' : 'transparent'; ?>; margin-right: 0.75rem; border-radius: 2px;"></div>
                    ALL POSTS
                </a>
                <?php
                $tags = get_terms( array(
                    'taxonomy'   => 'blog_tag',
                    'orderby'    => 'count',
                    'order'      => 'DESC',
                    'hide_empty' => true,
                ) );
                if ( ! empty( $tags ) && ! is_wp_error( $tags ) ) :
                    foreach ( $tags as $tag ) :
                        $is_active = ($current_tag_slug === $tag->slug);
                        echo '<a href="' . esc_url(get_term_link($tag)) . '" class="blog-tag-filter ' . ($is_active ? 'active' : '') . ' flex items-center gap-sm" data-tag="' . esc_attr($tag->slug) . '" style="text-decoration: none; color: #64748b; font-family: var(--font-body); font-size: 0.85rem; font-weight: 500; margin-bottom: 1rem; display: flex; text-transform: uppercase; letter-spacing: 0.05em; transition: color 0.2s;">';
                        echo '<div class="tag-marker" style="width: 12px; height: 12px; background: ' . ($is_active ? 'var(--color-primary)' : 'transparent') . '; border: 1px solid transparent; margin-right: 0.75rem; border-radius: 2px; transition: all 0.2s;"></div>';
                        echo esc_html( $tag->name );
                        echo '</a>';
                    endforeach;
                endif;
                ?>
            </div>
        </aside>

        <!-- Right Grid Content -->
        <div class="blog-content-area" id="blog-content-area" style="position: relative; min-height: 500px;">
            <!-- Loading Overlay -->
            <div id="blog-loading-overlay" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255,255,255,0.7); z-index: 10; justify-content: center; align-items: start; padding-top: 4rem;">
                <div class="spinner" style="width: 40px; height: 40px; border: 4px solid rgba(0,0,0,0.1); border-left-color: var(--color-primary); border-radius: 50%; animation: spin 1s linear infinite;"></div>
            </div>
            
            <!-- Blog Grid -->
            <div class="blog-grid" id="blog-grid-container" style="display: grid; gap: 2.5rem; grid-template-columns: repeat(2, 1fr);">
                <?php get_template_part('template-parts/blog-loop'); ?>
            </div>

            <!-- Pagination -->
            <div class="blog-pagination" id="blog-pagination-container" style="margin-top: 4rem; display: flex; justify-content: center; font-family: var(--font-body);">
                <?php
                echo paginate_links( array(
                    'prev_text' => __( 'PREVIOUS' ),
                    'next_text' => __( 'NEXT' ),
                    'type'      => 'list',
                ) );
                ?>
            </div>
        </div>

    </section>

</main>

<?php get_footer(); ?>

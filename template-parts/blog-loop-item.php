<?php
?>
        <a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" <?php post_class('blog-card new-layout'); ?> style="display: flex; flex-direction: column; background: #f8fafc; border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0; text-decoration: none; color: inherit; transition: transform 0.2s, box-shadow 0.2s;">
            <div class="blog-card-img" style="display: block; aspect-ratio: 16/9; overflow: hidden; border-bottom: 4px solid var(--color-primary);">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'medium_large', array('style' => 'width: 100%; height: 100%; object-fit: cover;') ); ?>
                <?php else : ?>
                    <div style="width: 100%; height: 100%; background: #0f172a; display: flex; align-items: center; justify-content: center;">
                        <span style="color: #fff; opacity: 0.5;">No Image</span>
                    </div>
                <?php endif; ?>
            </div>
            <div class="blog-card-content" style="padding: 1.5rem; display: flex; flex-direction: column; flex: 1;">
                <div class="blog-meta text-muted font-body" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.75rem;">
                    <?php echo get_the_date('M j, Y'); ?>
                </div>
                <header class="entry-header">
                    <h2 class="entry-title font-heading" style="font-size: 1.25rem; font-weight: 600; line-height: 1.3; margin-bottom: 1rem; color: #0f172a;">
                        <?php the_title(); ?>
                    </h2>
                </header>
                <div class="entry-summary font-body text-muted" style="font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem; flex: 1;">
                    <?php echo wp_trim_words( get_the_excerpt(), 15, '...' ); ?>
                </div>
                <div class="blog-card-footer" style="display: flex; align-items: center; gap: 0.75rem; margin-top: auto;">
                    <div class="author-avatar" style="width: 32px; height: 32px; border-radius: 50%; overflow: hidden; background: #e2e8f0; flex-shrink: 0;">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                    </div>
                    <div class="author-name font-body" style="font-size: 0.85rem; color: #475569; font-weight: 500;">
                        <?php the_author(); ?>
                    </div>
                </div>
            </div>
        </a>

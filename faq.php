<?php
/**
 * Template Name: FAQ Page
 */
get_header();

// Get the native repeater data we built
$faq_data = get_post_meta( get_the_ID(), '_faq_data', true );
if ( ! is_array( $faq_data ) ) {
    $faq_data = array();
}
?>

<main id="primary" class="site-main pt-32">

    <!-- FAQ Hero Section -->
    <section class="container px-container mt-md">
        <div class="faq-hero text-center flex flex-column justify-center items-center" style="background: linear-gradient(180deg, var(--color-primary) 0%, #a4c2f4 100%); border-radius: 12px; padding: 4rem 2rem; margin-bottom: 3rem;">
            <h1 class="font-heading text-white" style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 500; margin-bottom: 1rem;">
                <?php the_title(); ?>
            </h1>
            <?php if ( get_the_content() ) : ?>
                <div class="text-white" style="max-width: 600px; margin: 0 auto; font-size: 1.1rem; opacity: 0.9;">
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- FAQ Content Section -->
    <section class="container px-container" style="padding-bottom: clamp(4rem, 8vw, 6rem); max-width: 900px;">
        <div class="faq-content">
            
            <?php if ( empty( $faq_data ) ) : ?>
                <p class="text-center text-muted">No FAQs have been added yet.</p>
            <?php else : ?>

                <?php foreach ( $faq_data as $group_index => $group ) : 
                    $group_title = $group['title'] ?? '';
                    $questions = $group['questions'] ?? array();
                    
                    if ( empty( $questions ) ) continue;
                ?>
                    <div class="faq-group mb-xl" style="margin-bottom: 4rem;">
                        <?php if ( $group_title ) : ?>
                            <h2 class="faq-group-title text-primary font-heading" style="font-size: 1.8rem; font-weight: 700; margin-bottom: 1.5rem; border-bottom: 2px solid #e1e7ef; padding-bottom: 0.5rem;">
                                <?php echo esc_html( $group_title ); ?>
                            </h2>
                        <?php endif; ?>

                        <div class="faq-accordion-list">
                            <?php foreach ( $questions as $q_index => $q ) : 
                                $question = $q['q'] ?? '';
                                $answer = $q['a'] ?? '';
                                if ( ! $question || ! $answer ) continue;
                            ?>
                                <div class="faq-accordion-item" style="border-bottom: 1px solid #e1e7ef;">
                                    <button class="faq-question w-full text-left flex justify-between items-center" style="background: none; border: none; padding: 1.25rem 0; cursor: pointer; font-family: inherit; width: 100%; display: flex; justify-content: space-between; align-items: center;">
                                        <span class="faq-question-text" style="text-align:left; font-size: 1.1rem; font-weight: 600; color: var(--color-text-dark); padding-right: 1rem;">
                                            <?php echo esc_html( $question ); ?>
                                        </span>
                                        <span class="faq-icon" style="color: var(--color-primary); font-size: 1.5rem; transition: transform 0.3s ease; display: inline-flex; align-items: center; justify-content: center; width: 24px; height: 24px;">
                                            <!-- Plus Icon -->
                                            <svg class="icon-plus" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                            <!-- Minus Icon (hidden by default) -->
                                            <svg class="icon-minus" style="display: none;" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                        </span>
                                    </button>
                                    <div class="faq-answer-wrapper" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out;">
                                        <div class="faq-answer-inner" style="padding-bottom: 1.5rem; color: var(--color-text-muted); line-height: 1.7; font-size: 1.05rem;">
                                            <?php echo wpautop( wp_kses_post( $answer ) ); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

            <?php endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>

<?php
/**
* Template Name: About Page
 * Description: Custom About page template 
 */

get_header();
?>
<main id="primary" class="site-main">
    <div class="about-hero-wrapper about-hero-bg">
        <section class="container hero-section px-container about-hero-section">
        <div class="about-hero-grid">
            
            <!-- Left Content -->
            <div class="hero-content">
                <div class="hero-eyebrow text-xs font-semibold mb-sm uppercase tracking-wide flex items-center gap-xs about-eyebrow">
                    <span class="icon-box icon-circle about-eyebrow-dot"></span>
                    COMPANY
                </div>
                
                <h1 class="hero-title font-semibold leading-tight tracking-tight mb-md text-white about-title">
                    Built Through a<br>
                    Strategic Partnership
                </h1>
                
                <p class="hero-subtitle text-lg leading-relaxed mb-lg about-subtitle">
                    Combining deep cybersecurity expertise with<br>
                    strong product development capabilities.
                </p>

                <div class="about-partners flex flex-column gap-md mt-lg">
                    <div class="partner-block text-white">
                        <h3 class="text-lg font-medium mb-xs partner-title">Valency Networks</h3>
                        <p class="text-sm partner-desc">Cybersecurity experts helping businesses stay secure since 2008.</p>
                    </div>
                    <div class="partner-block text-white partner-block-spaced">
                        <h3 class="text-lg font-medium mb-xs partner-title">Umunthu Systems</h3>
                        <p class="text-sm partner-desc">A product development company experienced in building scalable digital platforms.</p>
                    </div>
                </div>
            </div>

            <!-- Right Visual -->
            <div class="hero-visuals" style="position: relative; ">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Partnership.webp" alt="TrustHabit Partnership" class="about-hero-img">
                
                <!-- Invisible Click Overlays for the single image -->
                <a href="https://valencynetworks.com/" target="_blank" rel="noopener noreferrer" style="position: absolute; top: 5%; left: 5%; width: 45%; height: 50%; z-index: 10;" aria-label="Visit Valency Networks"></a>
                <a href="https://umunthusystem.com/" target="_blank" rel="noopener noreferrer" style="position: absolute; bottom: 5%; right: 5%; width: 45%; height: 50%; z-index: 10;" aria-label="Visit Umunthu Systems"></a>
            </div>

        </div>
    </section>
    </div>

    <!-- Team Section -->
    <section class="container team-section px-container" style="padding-top: clamp(4rem, 8vw, 6rem); padding-bottom: clamp(6rem, 10vw, 8rem); overflow: hidden;">
        <div class="team-header-area flex justify-between items-end mb-lg" style="gap: 2rem;">
            <div class="team-header-content" style="max-width: 700px;">
                <div class="hero-eyebrow text-xs font-semibold mb-sm uppercase tracking-wide flex items-center gap-xs" style="color: #64748b; background: #e2e8f0; padding: 0.5rem 1rem; border-radius: 4px; display: inline-flex;">
                    <span class="icon-box icon-circle" style="width: 6px; height: 6px; border-radius:100px; display:inline-block; background-color: #3b82f6;"></span>
                    WHO WE ARE
                </div>
                <h2 class="team-title font-semibold leading-tight tracking-tight mb-md text-dark" style="font-size: clamp(2.5rem, 4vw, 3.5rem); margin-top: 1rem;">
                    Our <span class="text-primary">Think Tank</span>
                </h2>
                <p class="team-desc text-muted leading-relaxed" style="font-size: 1.1rem; max-width: 650px;">
                    Built by cybersecurity specialists and product engineers, our team combines real-world security expertise with thoughtful product design to create phishing simulations that are practical, scalable, and effective.
                </p>
            </div>
            
            <!-- Swiper Navigation -->
            <div class="team-nav flex gap-sm items-center">
                <button class="team-swiper-prev" aria-label="Previous slide" style="width: 44px; height: 44px; border-radius: 50%; border: 1.5px solid #1e4b9b; background: transparent; color: #1e4b9b; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.2s;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                </button>
                <button class="team-swiper-next" aria-label="Next slide" style="width: 44px; height: 44px; border-radius: 50%; border: 1.5px solid #1e4b9b; background: transparent; color: #1e4b9b; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.2s;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </button>
            </div>
        </div>

        <!-- Swiper Container -->
        <div class="swiper team-swiper" style="width: 100%; overflow: visible;">
            <div class="swiper-wrapper">
                <?php
                $team_query = new WP_Query(array(
                    'post_type'      => 'team',
                    'posts_per_page' => -1,
                    'orderby'        => 'menu_order date',
                    'order'          => 'ASC'
                ));

                if ($team_query->have_posts()) :
                    while ($team_query->have_posts()) : $team_query->the_post();
                        $designation = get_post_meta(get_the_ID(), '_team_designation', true);
                        $linkedin    = get_post_meta(get_the_ID(), '_team_linkedin', true);
                        ?>
                        <div class="swiper-slide">
                            <div class="team-card flex flex-column gap-md">
                                <div class="team-card-image" style="border-radius: 16px; overflow: hidden; aspect-ratio: 4/4.5; background: #f1f5f9; width: 100%;">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: 100%; object-fit: cover; filter: grayscale(100%); transition: filter 0.3s;', 'class' => 'team-img')); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="team-card-content flex flex-column">
                                    <h3 class="team-card-name text-primary font-medium m-0" style="font-size: 1.6rem; margin-bottom: 0.25rem;"><?php the_title(); ?></h3>
                                    
                                    <div class="team-card-meta flex justify-between items-center" style="margin-top: 0.25rem;">
                                        <p class="team-card-role text-muted m-0" style="font-size: 0.95rem; line-height: 1.4;"><?php echo esc_html($designation); ?></p>
                                        
                                        <?php if ($linkedin) : ?>
                                            <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener noreferrer" class="team-card-linkedin" style="color: #0077b5; display: inline-flex; transition: opacity 0.2s; align-items: center;">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                                </svg>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

       <!-- Roots Section -->
    <section class="roots-section-wrapper bg-primary-container" >
        <div class="container px-container">
            <div class="text-center mb-lg">
                <div class="hero-eyebrow text-xs font-semibold mb-sm uppercase tracking-wide inline-flex items-center gap-xs" style="color: #c4d7f5; background: rgba(0, 0, 0, 0.2); padding: 0.5rem 1rem; border-radius: 4px;">
                    <span class="icon-box icon-circle" style="width: 6px; height: 6px; border-radius:100px; display:inline-block; background-color: #3b82f6;"></span>
                    OUR ROOTS IN CYBERSECURITY
                </div>
                <h2 class="text-white font-semibold leading-tight tracking-tight mb-md" style="font-size: clamp(2.5rem, 4vw, 3.5rem);">
                    Built on deep<br>security expertise.
                </h2>
                <p class="text-center mx-auto" style="color: #c4d7f5; max-width: 800px; font-size: 1.1rem; line-height: 1.6;">
                    TrustHabit is developed with the backing and expertise of Valency Networks, a cybersecurity firm with over 15 years of experience securing complex digital environments across industries.
                </p>
            </div>

            <p class="text-white text-center font-medium mb-md" style="font-size: 1.15rem;">
                Valency Networks Has Worked Hands-On With Organizations Globally, Delivering:
            </p>
            
            <div class="roots-grid">
                <!-- Card 1 -->
                <div class="root-card bg-white text-center flex flex-column items-center justify-center" style="border-radius: 12px; padding: 2.5rem 1.5rem; min-height: 260px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/target.svg" alt="Target" style="width: 70px; height: 70px; margin-bottom: 1.5rem;">
                    <h4 class="text-primary font-medium m-0" style="font-size: 1.1rem; line-height: 1.4;">Penetration testing and<br>red teaming</h4>
                </div>
                
                <!-- Card 2 -->
                <div class="root-card bg-white text-center flex flex-column items-center justify-center" style="border-radius: 12px; padding: 2.5rem 1.5rem; min-height: 260px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/done tasks.svg" alt="Done Tasks" style="width: 70px; height: 70px; margin-bottom: 1.5rem;">
                    <h4 class="text-primary font-medium m-0" style="font-size: 1.1rem; line-height: 1.4;">Security audits and<br>compliance programs</h4>
                </div>
                
                <!-- Card 3 -->
                <div class="root-card bg-white text-center flex flex-column items-center justify-center" style="border-radius: 12px; padding: 2.5rem 1.5rem; min-height: 260px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/infra.svg" alt="Infrastructure" style="width: 70px; height: 70px; margin-bottom: 1.5rem;">
                    <h4 class="text-primary font-medium m-0" style="font-size: 1.1rem; line-height: 1.4;">Cloud, infrastructure, and<br>OT security</h4>
                </div>
                
                <!-- Card 4 -->
                <div class="root-card bg-white text-center flex flex-column items-center justify-center" style="border-radius: 12px; padding: 2.5rem 1.5rem; min-height: 260px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/warning analysis.svg" alt="Warning Analysis" style="width: 70px; height: 70px; margin-bottom: 1.5rem;">
                    <h4 class="text-primary font-medium m-0" style="font-size: 1.1rem; line-height: 1.4;">Incident analysis and<br>attack surface reduction</h4>
                </div>
            </div>
            
            <p class="text-center mx-auto" style="color: #c4d7f5; font-size: 1.15rem; max-width: 600px; line-height: 1.5; margin-top: 3rem;">
                <span class="text-white font-medium">This Experience Shapes How TrustHabit Is Designed:</span><br>
                Calm, Precise, Ethical, And Grounded In Reality.
            </p>
        </div>
    </section>

  

    <!-- Principles Section -->
    <section class="container principles-section px-container" style="padding-top: clamp(5rem, 10vw, 8rem); padding-bottom: clamp(6rem, 10vw, 8rem);">
        
        <!-- Header Row -->
        <div class="principles-row" style="margin-bottom: clamp(3rem, 6vw, 5rem);">
            <div class="principles-left">
                <div class="hero-eyebrow text-xs font-semibold uppercase tracking-wide inline-flex items-center gap-xs" style="color: #64748b; background: #f1f5f9; padding: 0.5rem 1rem; border-radius: 4px;">
                    <span class="icon-box icon-circle" style="width: 6px; height: 6px; border-radius:100px; display:inline-block; background-color: #3b82f6;"></span>
                    OUR PRINCIPLES
                </div>
            </div>
            <div class="principles-right">
                <h2 class="font-semibold leading-tight tracking-tight mb-md text-dark" style="font-size: clamp(2.5rem, 4vw, 3.5rem); max-width: 800px;">
                    <span class="text-primary">Principles</span> That Guide Every Decision We Make
                </h2>
                <p class="text-muted leading-relaxed" style="font-size: 1.1rem; max-width: 650px; margin: 0;">
                    Our principles define how TrustHabit is built and how it's used. They ensure security is ethical, human-centered, transparent, and effective in real-world conditions-not just on paper.
                </p>
            </div>
        </div>

        <!-- List Items -->
        <div class="principles-list flex flex-column">
            <!-- Item 1 -->
            <div class="principles-row principle-item items-center" style="padding: 2rem 0; border-top: 1px solid #e1e7ef;">
                <div class="principles-left">
                    <span class="text-primary font-semibold" style="font-size: 1rem;">01.</span>
                </div>
                <div class="principles-right">
                    <h4 class="text-dark font-medium m-0" style="font-size: 1.4rem;">People are partners, not liabilities</h4>
                </div>
            </div>
            
            <!-- Item 2 -->
            <div class="principles-row principle-item items-center" style="padding: 2rem 0; border-top: 1px solid #e1e7ef;">
                <div class="principles-left">
                    <span class="text-primary font-semibold" style="font-size: 1rem;">03.</span>
                </div>
                <div class="principles-right">
                    <h4 class="text-dark font-medium m-0" style="font-size: 1.4rem;">Transparency builds trust</h4>
                </div>
            </div>
            
            <!-- Item 3 -->
            <div class="principles-row principle-item items-center" style="padding: 2rem 0; border-top: 1px solid #e1e7ef;">
                <div class="principles-left">
                    <span class="text-primary font-semibold" style="font-size: 1rem;">04.</span>
                </div>
                <div class="principles-right">
                    <h4 class="text-dark font-medium m-0" style="font-size: 1.4rem;">Ethics are non-negotiable</h4>
                </div>
            </div>
            
            <!-- Item 4 -->
            <div class="principles-row principle-item items-center" style="padding: 2rem 0; border-top: 1px solid #e1e7ef; border-bottom: 1px solid #e1e7ef;">
                <div class="principles-left">
                    <span class="text-primary font-semibold" style="font-size: 1rem;">05.</span>
                </div>
                <div class="principles-right">
                    <h4 class="text-dark font-medium m-0" style="font-size: 1.4rem;">Security must work in the real world</h4>
                </div>
            </div>
        </div>
    </section>

  <!-- Vision Section -->
    <section class="mission-section" style="padding-top: clamp(2rem, 4vw, 4rem); padding-bottom: clamp(4rem, 8vw, 6rem);">
        <div class="container px-container">
            <div class="mission-badge">
                <span class="mission-badge-dot"></span>
                OUR VISION.
            </div>
            <h2 class="mission-statement font-heading">
                We built Trust Habit to be a globally trusted cyber-resilience layer for organizations of all sizes. A platform that grows with teams, adapts to real-world behavior, and helps security become instinct, not effort.
            </h2>
        </div>
    </section>

       <section class="cta-section" style="padding-top: clamp(2rem, 4vw, 4rem); padding-bottom: clamp(4rem, 8vw, 6rem);">
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
                                See how TrustHabit helps your organization understand, improve, and sustain secure behavior.
                            </p>
                            <div class="cta-actions flex items-center gap-md">
                                <a href="<?php echo esc_url( home_url( '/demo' ) ); ?>" class="btn btn-white bg-white text-primary font-medium text-base rounded-sm inline-flex items-center gap-sm" style="padding: 0.5rem 0.5rem 0.5rem 1.25rem;">
                                    Request a demo
                                    <span class="btn-icon icon-box bg-primary text-white rounded-sm flex items-center justify-center" style="width: 32px; height: 32px; margin-left: 0.5rem;">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="7" y1="17" x2="17" y2="7"></line>
                                            <polyline points="7 7 17 7 17 17"></polyline>
                                        </svg>
                                    </span>
                                </a>
                                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline border-white text-white font-medium text-base rounded-sm inline-flex items-center justify-center" style="border-color: rgba(255,255,255,0.5); background: transparent; padding: 0.75rem 1.5rem;">
                                    Talk to sales
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

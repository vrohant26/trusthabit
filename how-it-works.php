<?php
/**
 * Template Name: How It Works Page
 */
get_header();
?>

<main id="primary" class="site-main flex flex-column gap-xl pt-32">



    <!-- Features Flow Section -->
    <section id="how-it-works" class="ff-section">
        <!-- Background gradient layer that fades white → blue -->
        <div class="ff-bg"></div>

        <div class="container px-container" style="position:relative;z-index:2;">

            <!-- Header -->
            <div class="ff-header">
                <h2 class="ff-title  font-heading">
                  <span class="text-primary" > How We Build </span><br> Phishing Resilience
                </h2>
                <p class="ff-subtitle font-body text-muted">
                    A simple, data-driven process to  assess, improve, and continuously<br> strengthen your organization's phishing resilience
                </p>
            </div>

            <!-- Flow Rows Container (SVG overlaid) -->
            <div class="ff-rows" id="ff-rows">

                <!-- SVG Canvas — drawn by JS -->
                <svg class="ff-svg" id="ff-svg" xmlns="http://www.w3.org/2000/svg" overflow="visible">
                    <defs>
                        <!-- Gradient for paths: white top → light blue bottom -->
                        <linearGradient id="ff-grad-1" gradientUnits="userSpaceOnUse">
                            <stop offset="0%"   stop-color="#ffffff" stop-opacity="0.92"/>
                            <stop offset="100%" stop-color="#6aaad8" stop-opacity="0.88"/>
                        </linearGradient>
                        <linearGradient id="ff-grad-2" gradientUnits="userSpaceOnUse">
                            <stop offset="0%"   stop-color="#ffffff" stop-opacity="0.92"/>
                            <stop offset="100%" stop-color="#6aaad8" stop-opacity="0.88"/>
                        </linearGradient>
                    </defs>
                    <!-- Paths between cards -->
                    <path id="ff-path-1-bg" class="ff-path-bg"/>
                    <path id="ff-path-1"    class="ff-path-line"/>
                    <path id="ff-path-2-bg" class="ff-path-bg"/>
                    <path id="ff-path-2"    class="ff-path-line"/>
                    <path id="ff-path-3-bg" class="ff-path-bg"/>
                    <path id="ff-path-3"    class="ff-path-line"/>
                    <path id="ff-path-4-bg" class="ff-path-bg"/>
                    <path id="ff-path-4"    class="ff-path-line"/>
                </svg>

                <!-- Row 1 — Image LEFT · Content RIGHT -->
                <div class="ff-row ff-row-1">
                    <div class="ff-img-col">
                        <div class="ff-card" id="ff-card-1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Build Your Lists.webp"
                                 alt="Build Your Lists" class="ff-img">
                        </div>
                    </div>
                    <div class="ff-text-col">
                        <span class="ff-badge font-heading">1</span>
                        <h3 class="ff-step-title font-heading">Build Your Lists</h3>
                        <p class="ff-step-desc font-body text-muted">
                            Upload employee emails and segment users<br>
                            into named Lists by team, department,<br>
                            seniority, or risk level.
                        </p>
                    </div>
                </div>

                <!-- Row 2 — Content LEFT · Image RIGHT -->
                <div class="ff-row ff-row-2">
                    <div class="ff-text-col">
                        <span class="ff-badge font-heading">2</span>
                        <h3 class="ff-step-title font-heading">Choose a Simulation</h3>
                        <p class="ff-step-desc font-body text-muted">
                            Select from a library of localized<br>
                            phishing scenarios or create your<br>
                            own custom templates tailored to<br>
                            your organization.
                        </p>
                    </div>
                    <div class="ff-img-col">
                        <div class="ff-card" id="ff-card-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Choose a Simulation.webp"
                                 alt="Choose a Simulation" class="ff-img">
                        </div>
                    </div>
                </div>

                <!-- Row 3 — Content LEFT · Image RIGHT -->
                <div class="ff-row ff-row-3 ff-row-reverse">
                    <div class="ff-text-col">
                        <span class="ff-badge font-heading">3</span>
                        <h3 class="ff-step-title font-heading">Launch & Deliver</h3>
                        <p class="ff-step-desc font-body text-muted">
                            Simulation emails land directly in<br>
                            employee inboxes via Microsoft 365 and<br>
                            Google Workspace APIs - no whitelisting<br>
                            or IT intervention required.
                        </p>
                    </div>
                    <div class="ff-img-col">
                        <div class="ff-card" id="ff-card-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Launch and Deliver.webp"
                                 alt="Launch & Deliver" class="ff-img">
                        </div>
                    </div>
                </div>

                <!-- Row 4 — Image LEFT · Content RIGHT -->
                <div class="ff-row ff-row-4">
                    <div class="ff-img-col">
                        <div class="ff-card" id="ff-card-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Measure and Identify.webp"
                                 alt="Measure & Identify" class="ff-img">
                        </div>
                    </div>
                    <div class="ff-text-col">
                        <span class="ff-badge font-heading">4</span>
                        <h3 class="ff-step-title font-heading">Measure & Identify</h3>
                        <p class="ff-step-desc font-body text-muted">
                            Track click rates, credential submissions,<br>
                            and reporting behavior to identify high-<br>
                            risk employees, teams, and vulnerability<br>
                            patterns.
                        </p>
                    </div>
                </div>

                <!-- Row 5 — Image LEFT · Content RIGHT -->
                <div class="ff-row ff-row-5">
                    <div class="ff-img-col">
                        <div class="ff-card" id="ff-card-5">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Improve and Track.webp"
                                 alt="Improve & Track" class="ff-img">
                        </div>
                    </div>
                    <div class="ff-text-col">
                        <span class="ff-badge font-heading">5</span>
                        <h3 class="ff-step-title font-heading">Improve & Track</h3>
                        <p class="ff-step-desc font-body text-muted">
                            Deliver targeted awareness training and<br>
                            monitor measurable risk reduction over<br>
                            time with executive-ready reporting.
                        </p>
                    </div>
                </div>

            </div><!-- /.ff-rows -->
        </div>
    </section>

    <!-- Key Metrics Section -->
    <section class="container px-container" style="padding-bottom: clamp(2.8rem, 5.6vw, 5.6rem); padding-top: clamp(2.8rem, 5.6vw, 4.2rem);">
        <div class="metrics-header" style="max-width: 900px; margin-bottom: 4rem;">
            <h2 class="font-heading text-dark" style="font-size: clamp(2.5rem, 4vw, 3.5rem); font-weight: 500; margin-bottom: 1.5rem; letter-spacing: -0.02em;">Key Metrics Available</h2>
            <p class="font-body text-muted" style="font-size: 1.15rem; line-height: 1.6; max-width: 850px;">Gain Clear Visibility Into Employee Security Awareness And Program Effectiveness Through Detailed Reporting And Analytics. Track Engagement, Identify High-Risk Groups, Measure Behavioral Trends, And Monitor Improvements Over Time With Actionable Insights Across Key Phishing Simulation Metrics.</p>
        </div>

        <div class="metrics-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 1.5rem;">
            <!-- Card 1 -->
            <div class="metric-card" style="background: #fafafa; border-radius: 16px; padding: 2.5rem 2rem; display: flex; flex-direction: column; gap: 2rem;">
                <div class="metric-icon" style="width: 48px; height: 48px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/email open rates.svg" alt="Email open rates" style="width:100%; height:100%; object-fit:contain;">
                </div>
                <div>
                    <h3 class="font-heading text-dark" style="font-size: 1.35rem; margin-bottom: 0.85rem; font-weight: 400; color: #555;">Email open rates</h3>
                    <p class="font-body" style="font-size: 1rem; line-height: 1.5; color: #888;">Measure how many users opened the simulated phishing email</p>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="metric-card" style="background: #fafafa; border-radius: 16px; padding: 2.5rem 2rem; display: flex; flex-direction: column; gap: 2rem;">
                <div class="metric-icon" style="width: 48px; height: 48px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/link click rates.svg" alt="Link Click Rates" style="width:100%; height:100%; object-fit:contain;">
                </div>
                <div>
                    <h3 class="font-heading text-dark" style="font-size: 1.35rem; margin-bottom: 0.85rem; font-weight: 400; color: #555;">Link Click Rates</h3>
                    <p class="font-body" style="font-size: 1rem; line-height: 1.5; color: #888;">Track the percentage of users who clicked on phishing links</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="metric-card" style="background: #fafafa; border-radius: 16px; padding: 2.5rem 2rem; display: flex; flex-direction: column; gap: 2rem;">
                <div class="metric-icon" style="width: 48px; height: 48px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/credential submission rates.svg" alt="Credential Submission Rates" style="width:100%; height:100%; object-fit:contain;">
                </div>
                <div>
                    <h3 class="font-heading text-dark" style="font-size: 1.35rem; margin-bottom: 0.85rem; font-weight: 400; color: #555;">Credential Submission Rates</h3>
                    <p class="font-body" style="font-size: 1rem; line-height: 1.5; color: #888;">Identify users who entered credentials on simulated phishing pages</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="metric-card" style="background: #fafafa; border-radius: 16px; padding: 2.5rem 2rem; display: flex; flex-direction: column; gap: 2rem;">
                <div class="metric-icon" style="width: 48px; height: 48px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/reporting rates.svg" alt="Reporting Rates" style="width:100%; height:100%; object-fit:contain;">
                </div>
                <div>
                    <h3 class="font-heading text-dark" style="font-size: 1.35rem; margin-bottom: 0.85rem; font-weight: 400; color: #555;">Reporting Rates</h3>
                    <p class="font-body" style="font-size: 1rem; line-height: 1.5; color: #888;">Monitor how many users correctly reported suspicious emails</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="metric-card" style="background: #fafafa; border-radius: 16px; padding: 2.5rem 2rem; display: flex; flex-direction: column; gap: 2rem;">
                <div class="metric-icon" style="width: 48px; height: 48px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/department-wise.svg" alt="Department-wise Risk Analysis" style="width:100%; height:100%; object-fit:contain;">
                </div>
                <div>
                    <h3 class="font-heading text-dark" style="font-size: 1.35rem; margin-bottom: 0.85rem; font-weight: 400; color: #555;">Department-wise Risk Analysis</h3>
                    <p class="font-body" style="font-size: 1rem; line-height: 1.5; color: #888;">Compare phishing susceptibility across teams and departments</p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="metric-card" style="background: #fafafa; border-radius: 16px; padding: 2.5rem 2rem; display: flex; flex-direction: column; gap: 2rem;">
                <div class="metric-icon" style="width: 48px; height: 48px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/trend analysis.svg" alt="Trend Analysis Over Time" style="width:100%; height:100%; object-fit:contain;">
                </div>
                <div>
                    <h3 class="font-heading text-dark" style="font-size: 1.35rem; margin-bottom: 0.85rem; font-weight: 400; color: #555;">Trend Analysis Over Time</h3>
                    <p class="font-body" style="font-size: 1rem; line-height: 1.5; color: #888;">Evaluate changes in user behavior and security awareness over time</p>
                </div>
            </div>
        </div>
    </section>

    <!-- What Makes Trust Habit Different Section -->
    <section class="container px-container" style="padding-bottom: clamp(2.8rem, 5.6vw, 5.6rem); position: relative;">
        <!-- Decorative Grid Background -->
        <div style="position: absolute; top: 5%; right: -5%; width: 400px; height: 400px; background-image: url('data:image/svg+xml,%3Csvg width=\'16\' height=\'16\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'12\' height=\'12\' fill=\'%23e2e8f0\'/%3E%3C/svg%3E'); z-index: -1; opacity: 0.8; -webkit-mask-image: radial-gradient(circle, black 30%, transparent 70%); mask-image: radial-gradient(circle, black 30%, transparent 70%);"></div>
        <div style="position: absolute; bottom: -5%; left: -5%; width: 400px; height: 400px; background-image: url('data:image/svg+xml,%3Csvg width=\'16\' height=\'16\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'12\' height=\'12\' fill=\'%23e2e8f0\'/%3E%3C/svg%3E'); z-index: -1; opacity: 0.8; -webkit-mask-image: radial-gradient(circle, black 30%, transparent 70%); mask-image: radial-gradient(circle, black 30%, transparent 70%);"></div>

        <div class="diff-header" style="max-width: 900px; margin-bottom: 4rem;">
            <div class="problem-badge" style="background:#eef2f6; color:#64748b; display:inline-flex; align-items:center; gap:0.5rem; padding:0.4rem 0.8rem; border-radius:4px; font-size:0.75rem; font-weight:600; letter-spacing:0.05em; margin-bottom:1.5rem;">
                <span class="problem-badge-dot" style="background:var(--color-primary); width:6px; height:6px; border-radius:50%; display:inline-block;"></span>
                THE PROBLEM WITH THE CATEGORY
            </div>
            <h2 class="font-heading text-dark" style="font-size: clamp(2.5rem, 4vw, 3.5rem); font-weight: 500; line-height: 1.2; letter-spacing: -0.02em;">
                What Makes<br>
                <span class="text-primary">Trust Habit</span> Different?
            </h2>
        </div>

        <div class="diff-grid" style="display: grid; gap: 2rem;">
            
            <!-- Card 1 -->
            <div class="diff-card" style="border: 2px solid var(--color-primary); border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; background: #fff;">
                <div class="diff-card-header bg-primary text-white font-heading text-center" style="padding: 1.5rem; font-size: 1.25rem; font-weight: 600;">
                    Guaranteed Inbox Delivery
                </div>
                <div class="diff-card-body" style="padding: 2.5rem; flex: 1;">
                    <div class="diff-bullet" style="display: flex; gap: 1rem; border-bottom: 1px solid #e1e7ef; padding-bottom: 1.5rem; margin-bottom: 1.5rem;">
                        <div style="width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet" style="width:100%; height:100%;">
                        </div>
                        <div class="font-body" style="font-size: 0.95rem; color: #1e293b; line-height: 1.5; font-weight: 500;">
                            Google Gmail API Integration & Microsoft Graph <br> API  Integration
                        </div>
                    </div>
                    <div class="diff-bullet" style="display: flex; gap: 1rem; border-bottom: 1px solid #e1e7ef; padding-bottom: 1.5rem; margin-bottom: 1.5rem;">
                        <div style="width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet" style="width:100%; height:100%;">
                        </div>
                        <div class="font-body" style="font-size: 0.95rem; color: #1e293b; line-height: 1.5; font-weight: 500;">
                            One-Time Setup With No Whitelisting, Mail-Flow Changes, Or Ongoing IT Involvement.
                        </div>
                    </div>
                    <div class="diff-bullet" style="display: flex; gap: 1rem;">
                        <div style="width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet" style="width:100%; height:100%;">
                        </div>
                        <div class="font-body" style="font-size: 0.95rem; color: #1e293b; line-height: 1.5; font-weight: 500;">
                            Ensure Every Simulation Reaches Its Target - Without Being Blocked By Spam Filters.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="diff-card" style="border: 2px solid var(--color-primary); border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; background: #fff;">
                <div class="diff-card-header bg-primary text-white font-heading text-center" style="padding: 1.5rem; font-size: 1.25rem; font-weight: 600;">
                    Targeted Simulations
                </div>
                <div class="diff-card-body" style="padding: 2.5rem; flex: 1;">
                    <div class="diff-bullet" style="display: flex; gap: 1rem; border-bottom: 1px solid #e1e7ef; padding-bottom: 1.5rem; margin-bottom: 1.5rem;">
                        <div style="width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet" style="width:100%; height:100%;">
                        </div>
                        <div class="font-body" style="font-size: 0.95rem; color: #1e293b; line-height: 1.5; font-weight: 500;">
                            Create Audience-Specific Lists For Finance, New Joiners, And Senior Management.
                        </div>
                    </div>
                    <div class="diff-bullet" style="display: flex; gap: 1rem; border-bottom: 1px solid #e1e7ef; padding-bottom: 1.5rem; margin-bottom: 1.5rem;">
                        <div style="width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet" style="width:100%; height:100%;">
                        </div>
                        <div class="font-body" style="font-size: 0.95rem; color: #1e293b; line-height: 1.5; font-weight: 500;">
                            Assign Separate Phishing Templates To Each Group Based On Their Role And Risk Profile.
                        </div>
                    </div>
                    <div class="diff-bullet" style="display: flex; gap: 1rem;">
                        <div style="width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet" style="width:100%; height:100%;">
                        </div>
                        <div class="font-body" style="font-size: 0.95rem; color: #1e293b; line-height: 1.5; font-weight: 500;">
                            Run Multiple Simulations Using ITR Refund Scams For Finance Teams And CEO Attacks.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="diff-card" style="border: 2px solid var(--color-primary); border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; background: #fff;">
                <div class="diff-card-header bg-primary text-white font-heading text-center" style="padding: 1.5rem; font-size: 1.25rem; font-weight: 600;">
                    Contextual & Realistic Templates
                </div>
                <div class="diff-card-body" style="padding: 2.5rem; flex: 1;">
                    <div class="diff-bullet" style="display: flex; gap: 1rem; border-bottom: 1px solid #e1e7ef; padding-bottom: 1.5rem; margin-bottom: 1.5rem;">
                        <div style="width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet" style="width:100%; height:100%;">
                        </div>
                        <div class="font-body" style="font-size: 0.95rem; color: #1e293b; line-height: 1.5; font-weight: 500;">
                            Ready-To-Use Phishing Templates Across HR, Finance, Technology, And More
                        </div>
                    </div>
                    <div class="diff-bullet" style="display: flex; gap: 1rem; border-bottom: 1px solid #e1e7ef; padding-bottom: 1.5rem; margin-bottom: 1.5rem;">
                        <div style="width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet" style="width:100%; height:100%;">
                        </div>
                        <div class="font-body" style="font-size: 0.95rem; color: #1e293b; line-height: 1.5; font-weight: 500;">
                            Designed Around Real-World Attack Patterns Seen In Indian Enterprises
                        </div>
                    </div>
                    <div class="diff-bullet" style="display: flex; gap: 1rem;">
                        <div style="width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet" style="width:100%; height:100%;">
                        </div>
                        <div class="font-body" style="font-size: 0.95rem; color: #1e293b; line-height: 1.5; font-weight: 500;">
                            Simulate Familiar Scenarios Employees Are More Likely To Encounter And Trust
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 (Info & CTA) -->
            <div class="diff-card font-semibold" style="overflow: hidden; display: flex; flex-direction: column; background: #fff; padding: 3.5rem 2.5rem; justify-content: center;">
                <p class="font-body text-muted" style="font-size: 1rem; line-height: 1.7; margin-bottom: 2.5rem;">
                    <span class="text-primary font-semibold font-medium">Trust Habit</span> is designed to help organizations run phishing simulation programs that are realistic, scalable, and easy to manage. From guaranteed inbox delivery and targeted campaigns to role-specific attack scenarios and detailed analytics, every feature is built to provide meaningful insights into employee risk and drive measurable improvements in security awareness.
                </p>
                <div>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary bg-primary  text-white font-medium text-base rounded-sm inline-flex items-center gap-md">
                        Talk to an expert 
                        <span class="btn-icon icon-box icon-lg bg-white text-primary rounded-sm" style="width:24px; height:24px; display:inline-flex; align-items:center; justify-content:center;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7 7 17 7 17 17"></polyline>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="cta-section">
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

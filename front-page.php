<?php
/**
 * The front page template
 */

get_header();
?>

<main id="primary" class="site-main custom-hero-bg ">
    <div class="gradient"></div>
    <section class="container hero-section px-container">
        <div class="hero-grid items-center">
            
            <!-- Left Content -->
            <div class="hero-content">
                <div class="hero-eyebrow text-xs font-semibold mb-sm text-muted uppercase tracking-wide flex items-center gap-xs">
                    <span class="icon-box icon-circle bg-primary" style="width: 6px; height: 6px; border-radius:100px"></span>
                    BUILT FOR GROWING TEAMS AND GLOBAL ENTERPRISES ALIKE.
                </div>
                <h1 class="hero-title text-4xl font-semibold leading-tight text-dark tracking-tight mb-md">
                    <span class="text-primary">Cyber-resilience</span><br>
                    through habit
                </h1>
                <p class="hero-subtitle text-lg text-muted leading-relaxed mb-lg">
                    TrustHabit helps organizations reduce phishing risk by shaping secure behavior over time, not by overwhelming employees with one-time training.
                </p>
                <a href="#" class="btn btn-outline border-primary text-primary font-medium text-lg rounded-sm inline-flex items-center justify-center px-lg py-md" style="padding: 0.75rem 1.5rem;">
                    Talk to sales
                </a>
            </div>

            <!-- Right Visuals (Floating Cards) -->
            <div class="hero-visuals">
                
                <!-- Card 1: Cost -->
                <div class="card-base card-dark card-cost">
                    <div class="text-sm text-gray-light flex items-center gap-sm mb-sm">
                        <span class="icon-box icon-md icon-circle bg-blue-light font-bold">!</span> Cost / Secured Employee
                    </div>
                    <div class="text-3xl font-medium leading-none tracking-tight mb-md">
                        64<span class="text-xl">%</span> <span class="text-lg font-normal">lower</span>
                    </div>
                    <div class="text-xs text-gray-light leading-relaxed">Compared to traditional annual training programs</div>
                </div>

                <!-- Card 2: 41% -->
                <div class="card-base flex gap-sm card-light card-stat">
                    <div class="icon-box rounded-circle icon-lg icon-circle bg-primary">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    <div class="flex flex-column">
                        <div class="text-xl font-semibold leading-tight text-dark">41%</div>
                        <div class="text-xs text-muted">Faster Security Culture Adoption</div>
                    </div>
                </div>

                <!-- Card 3: 89% Engagement -->
                <div class="card-base card-light card-engagement">
                    <div class="text-sm font-semibold text-dark flex items-center gap-sm mb-sm">
                        <div class="icon-box bg-primary text-white font-bold rounded-sm" style="width: 24px; height: 24px; font-size: 0.7rem;">th</div> 
                        <span>89% Engagement after 90 days</span>
                    </div>
                    <div class="progress-bar-bg mb-sm"><div class="progress-bar-fill"></div></div>
                    <ul class="text-xs text-dark m-0 timeline-list relative">
                        <li class="flex items-center gap-sm mb-xs relative">
                            <span class="icon-box icon-sm icon-circle bg-primary text-white relative z-10"><svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 
                            30 days
                        </li>
                        <li class="flex items-center gap-sm mb-xs relative">
                            <span class="icon-box icon-sm icon-circle bg-primary text-white relative z-10"><svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 
                            60 days
                        </li>
                        <li class="flex items-center gap-sm m-0 relative">
                            <span class="icon-box icon-sm icon-circle bg-primary text-white relative z-10"><svg width="8" height="8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span> 
                            90 days
                        </li>
                    </ul>
                </div>

                <!-- Card 4: Threat -->
                <div class="card-base card-dark card-threat">
                    <div class="text-sm text-gray-light flex items-center gap-sm mb-sm">
                        <span class="icon-box icon-md icon-circle bg-blue-light font-bold">!</span> Threat Recognition
                    </div>
                    <div class="text-2xl font-medium leading-none mb-md">
                        5.8<span class="text-lg font-normal">x</span>
                    </div>
                    <div class="threat-footer flex justify-between pt-sm text-xs text-gray-light">
                        <span>Date</span> <span>01-01-2026</span>
                    </div>
                    <div class="flex justify-between text-xs text-gray-light mt-xs">
                        <span>Threat ID</span> <span>#TH-0123</span>
                    </div>
                </div>

            </div>
        </div>
</section>

    <!-- Problem Section -->
    <section class="problem-section">
        <div class="container px-container">
            <div class="problem-grid">
                
                <!-- Left Content -->
                <div class="problem-content">
                    <div class="problem-badge">
                        <span class="problem-badge-dot"></span>
                        THE PROBLEM
                    </div>
                    
                    <h2 class="problem-title">
                        Cybersecurity fails at<br>
                        the moment of <span class="text-primary">human decision.</span>
                    </h2>
                    
                    <p class="problem-desc">
                        Modern phishing attacks don't break systems first. They exploit routine, trust, and distraction.
                    </p>
                    
                    <div class="problem-stat font-body">
                        <span class="text-primary font-semibold">$16B+ Lost to Internet Crime</span> with phishing/<br>spoofing being the most reported crime type by<br>number of victims, as per the FBI
                    </div>
                    
                    <div class="flex items-center gap-lg mt-md">
                      <a href="#" class="btn btn-outline border-primary text-primary font-medium text-base rounded-sm inline-flex items-center justify-center" style="padding: 0.75rem 1.5rem;">
                    Talk to sales
                </a>
                        
                        <a href="#" class="link-with-icon">
                            See FBI Report 
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7 7 17 7 17 17"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Visual -->
                <div class="problem-visual">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/problem.png" alt="Cybersecurity Problem Graph" class="problem-image">
                </div>
                
            </div>
        </div>
    </section>

  

    <!-- Third Section: Hidden Cost -->
    <section class="third-section">
        <div class="bg-primary-container">
          <div class="container pt-32 px-container">
        
            <div class="bento-header-grid">
          <div class="left-col">
            <div class="problem-badge badge-translucent">
              <span class="problem-badge-dot badge-dot-white"></span>
              HIDDEN COST OF PHISHING
            </div>
            <h2 class="font-heading font-medium leading-tight bento-header-title title-white">
              Phishing is no longer a minor security issue
            </h2>
          </div>
          <div class="right-col bento-header-desc">
            <p class="m-0">It is one of the most consistent and costly causes of cyber incidents worldwide.</p>
            <p class="m-0">Phishing attacks don't just compromise systems. They expose sensitive data, disrupt operations, and erode trust.</p>
            <p class="m-0">Every successful phishing attack represents not just a security failure, but a strategic vulnerability that competitors and threat actors will continue to exploit.</p>
          </div>
        </div>

        <!-- Bento Grid -->
        <div class="bento-grid">
          <!-- Card 1 -->
          <div class="bento-card bento-1">
            <div class="exclamation-glow card-1-glow">!</div>
            <div class="bento-content">
              <div class="bento-number-md">
                #1 <span class="bento-label">attack entry point</span>
              </div>
              <p class="bento-text">Phishing and social engineering remain the most common initial vectors in reported security incidents worldwide.</p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="bento-card bento-2">
            <div class="bento-content bento-col-flex">
              <div>
                <div class="bento-number-lg">90%</div>
                <div class="bento-label">target sensitive data</div>
              </div>
              <p class="bento-text">Credentials, customer records, financial information, and internal documents are the primary targets of phishing compromises.</p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="bento-card bento-3">
            <div class="exclamation-glow card-3-glow">!</div>
            <div class="bento-content bento-col-flex bento-max-65">
              <div>
                <div class="bento-number-lg">3-5x</div>
                <div class="bento-label">cost multiplication</div>
              </div>
              <p class="bento-text">Beyond data loss, phishing incidents trigger downtime, response costs, regulatory fines, and lasting reputational harm.</p>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="bento-card bento-4">
            <div class="bento-alert-text">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="#ef4444" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L1 21H23L12 2ZM12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17C13 17.5523 12.5523 18 12 18ZM11 15V10H13V15H11Z" fill="#ef4444"/>
              </svg>
              Hidden Cost Of Phishing
            </div>
          </div>

          <!-- Card 5 -->
          <div class="bento-card bento-5">
            <div class="exclamation-glow card-5-glow">!</div>
            <div class="bento-content bento-max-70">
              <div class="bento-number-lg" style="margin-bottom: 5rem;">
                $10B+ <span class="bento-label-alt">in annual losses</span>
              </div>
              <p class="bento-text-md">Phishing-driven fraud and breaches cost businesses and consumers <strong class="text-dark">billions</strong> globally each year in direct financial damage.</p>
            </div>
          </div>

          <!-- Card 6 -->
          <div class="bento-card bento-6">
            <div class="bento-content bento-col-flex">
              <div class="text-right">
                <div class="bento-number-lg">95%</div>
                <div class="bento-label" style="margin-bottom: 2rem;">involve human decisions</div>
              </div>
              <p class="bento-text-sm text-right">Phishing success depends less on technology gaps and more on how employees respond in critical moments.</p>
            </div>
          </div>

            </div>
          </div>
        </div>

    </section>

      <!-- Fourth Section: Mission -->
    <section class="mission-section">
        <div class="container px-container">
            <div class="mission-badge">
                <span class="mission-badge-dot"></span>
                OUR MISSION.
            </div>
            <h2 class="mission-statement font-heading">
                We built Trust Habit to be a globally trusted cyber-resilience layer for organizations of all sizes. A platform that grows with teams, adapts to real-world behavior, and helps security become instinct, not effort.
            </h2>
        </div>
    </section>

    <!-- Fifth Section: Logo Animation -->
    <section class="logo-animation-section flex items-center justify-center">
        <div class="animated-logo-content flex items-center gap-md">
            <div class="animated-logo-icon bg-gray-light text-white rounded-sm flex items-center justify-center">
                <svg width="40" height="38" viewBox="0 0 40 38" fill="none" xmlns="http://www.w3.org/2000/svg" class="animated-svg">
                    <path d="M4.47406 29.1883C4.47406 33.7006 8.11859 37.3585 12.6144 37.3585C12.6207 37.3585 12.6271 37.3585 12.6334 37.3585C12.6478 37.3586 12.6622 37.3586 12.6765 37.3585V21.0183C12.6558 21.0181 12.6351 21.018 12.6144 21.018C8.11859 21.018 4.47406 24.676 4.47406 29.1883Z" fill="currentColor"/>
                    <path d="M12.6765 0H4.47406V9.35521H0V17.4631H4.47406V29.1883C4.47406 24.676 8.11859 21.018 12.6144 21.018C12.6351 21.018 12.6558 21.0181 12.6765 21.0183V0Z" fill="currentColor"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6765 37.3585C12.6622 37.3586 12.6478 37.3586 12.6334 37.3585C12.6271 37.3585 12.6207 37.3585 12.6144 37.3585H12.6765Z" fill="currentColor"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M39.9997 22.0528C39.9997 21.7086 39.9785 21.3695 39.9373 21.0366V23.0689C39.9785 22.736 39.9997 22.3969 39.9997 22.0528Z" fill="currentColor"/>
                    <path d="M30.1421 37.3585H39.9373V23.0689C39.4375 27.1093 35.9968 30.2366 31.8266 30.2366C31.2492 30.2366 30.6857 30.1767 30.1421 30.0626V37.3585Z" fill="currentColor"/>
                    <path d="M24.527 25.4887C24.527 23.4186 26.203 21.7404 28.2704 21.7404C30.3378 21.7404 32.0138 23.4186 32.0138 25.4887C32.0138 26.8762 31.261 28.0875 30.1421 28.7356V30.0626C30.6857 30.1767 31.2492 30.2366 31.8266 30.2366C35.9968 30.2366 39.4375 27.1093 39.9373 23.0689V21.0366C39.4375 16.9963 35.9968 13.8365 31.8266 13.8365C27.3128 13.8365 23.6536 17.5329 23.6536 22.0528C23.6536 23.3857 23.9718 24.6443 24.5364 25.7563C24.5302 25.668 24.527 25.5787 24.527 25.4887Z" fill="currentColor"/>
                    <path d="M24.8314 0H16.6035V37.3585H26.1491V28.6124H26.2004C25.2614 27.9872 24.6204 26.9487 24.5364 25.7563C23.9718 24.6443 23.6536 23.3857 23.6536 22.0528C23.6536 17.5329 27.3128 13.8365 31.8266 13.8365H24.8314V0Z" fill="currentColor"/>
                </svg>
            </div>
            <span class="animated-logo-text font-heading">trust habit</span>
        </div>
    </section>
    
    <!-- Sixth Section: Audience -->
    <section class=" bg-primary-container aud-sec m-10px relative">
        <div class="container px-container">
            <div class="audience-grid pt-32">
                
                <!-- Left Column -->
                <div class="audience-left">
                    <div class="problem-badge badge-translucent">
                        <span class="problem-badge-dot badge-dot-blue"></span>
                        WHO TRUST HABIT IS FOR
                    </div>
                    <h2 class="audience-title font-heading">
                        Built for teams that<br>
                        take human risk<br>
                        seriously
                    </h2>
                    <p class="audience-desc mb-lg">
                        TrustHabit works best for teams who understand that security awareness isn't just about training completion rates—it's about lasting behavior change. If you're looking to move beyond checkbox compliance and build a security culture grounded in real data and continuous improvement, you're in the right place.
                    </p>
                    <a href="#" class="btn btn-outline text-primary font-medium text-base rounded-sm inline-flex items-center gap-lg mt-md">
                        See Our Technology
                        <span class="btn-icon icon-box icon-lg bg-primary text-white rounded-sm">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7 7 17 7 17 17"></polyline>
                            </svg>
                        </span>
                    </a>
                </div>

                <!-- Right Column -->
                <div class="audience-right">
                    <div class="audience-list">
                        
                        <!-- Item 1 -->
                        <div class="audience-item">
                            <div class="audience-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M9 11l3 3L22 4M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg>
                            </div>
                            <h3 class="audience-item-title font-heading">Security Teams Seeking Proof</h3>
                            <p class="audience-item-desc">Security teams who need proof their phishing defenses actually work. Real-world evidence that employees can identify threats, report incidents faster, and make smarter decisions when it matters most.</p>
                        </div>
                        
                        <div class="audience-divider"></div>
                        
                        <!-- Item 2 -->
                        <div class="audience-item">
                            <div class="audience-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    <path d="M8 11h8M8 15h5M12 7v.01"></path>
                                </svg>
                            </div>
                            <h3 class="audience-item-title font-heading">HR &amp; Compliance Leaders Bridging Gaps</h3>
                            <p class="audience-item-desc">HR and compliance leaders bridging the gap between policy and practice. Turning security requirements into everyday habits while demonstrating clear progress to auditors and executives.</p>
                        </div>
                        
                        <div class="audience-divider"></div>
                        
                        <!-- Item 3 -->
                        <div class="audience-item">
                            <div class="audience-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                    <path d="M8 21h8M12 17v4"></path>
                                    <path d="M2 13h4l2-3 4 6 2-3h4"></path>
                                </svg>
                            </div>
                            <h3 class="audience-item-title font-heading">Multi-Site Organizations at Scale</h3>
                            <p class="audience-item-desc">Multi-site organizations managing security across distributed teams and diverse regions. Ensuring consistent security behavior while adapting to local contexts and varying levels of technical sophistication.</p>
                        </div>

                        <div class="audience-divider"></div>

                        <!-- Item 4 -->
                        <div class="audience-item">
                            <div class="audience-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M9 11l3 3L22 4M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg>
                            </div>
                            <h3 class="audience-item-title font-heading">Companies Moving Beyond Annual Training</h3>
                            <p class="audience-item-desc">Companies moving beyond annual training to continuous security culture. Replacing one-and-done sessions with ongoing engagement, real-time feedback, and learning that evolves with emerging threats.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- Bottom fade overlay -->
        <div class="audience-fade-bottom"></div>
    </section>

    <!-- Seventh Section: Infrastructure -->
    <section class="infrastructure-section">
        <div class="container px-container">
            <div class="infrastructure-grid">
                
                <!-- Top Left: Title Block -->
                <div class="infra-title-block flex flex-column justify-center">
                    <div>
                        <div class="problem-badge mb-sm" style="background-color: #f1f5f9; color: #64748b;">
                            <span class="problem-badge-dot badge-dot-blue"></span>
                            TRUST AND ASSURANCE
                        </div>
                        <h2 class="infra-title font-heading text-dark">
                            Enterprise-grade
                            infrastructure<br>
                            <span class="text-primary">by design.</span>
                        </h2>
                    </div>
                </div>

                <!-- Top Right: Cards 1 & 2 -->
                <div class="infra-cards-row">
                    <div class="infra-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/protected.svg" alt="Protected" class="infra-card-icon">
                        <h4 class="infra-card-title font-heading text-primary">Protected</h4>
                        <p class="infra-card-desc text-muted">Enterprise-grade security from infrastructure to access</p>
                    </div>
                    <div class="infra-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/auditable.svg" alt="Auditable" class="infra-card-icon">
                        <h4 class="infra-card-title font-heading text-primary">Auditable</h4>
                        <p class="infra-card-desc text-muted">Data practices built for compliance and regulatory review</p>
                    </div>
                </div>

                <!-- Bottom Left: Cards 3 & 4 -->
                <div class="infra-cards-row">
                    <div class="infra-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/clear.svg" alt="Clear" class="infra-card-icon">
                        <h4 class="infra-card-title font-heading text-primary">Clear</h4>
                        <p class="infra-card-desc text-muted">Transparent engagement with no surprises in deployment</p>
                    </div>
                    <div class="infra-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/proven.svg" alt="Proven" class="infra-card-icon">
                        <h4 class="infra-card-title font-heading text-primary">Proven</h4>
                        <p class="infra-card-desc text-muted">Battle-tested in regulated industries worldwide</p>
                    </div>
                </div>

                <!-- Bottom Right: Text & CTA -->
                <div class="infra-text-block flex flex-column justify-center">
                    <div>
                        <p class="infra-desc text-muted mb-lg">
                            Your security team will ask the right questions about any new platform. <strong class="text-primary font-semibold">trust habit</strong> is designed to pass those reviews. Built for regulated environments with enterprise-grade infrastructure, transparent data practices, and the controls your organization requires.
                        </p>
                           <a href="<?php echo esc_url( home_url( '/demo' ) ); ?>" class="btn btn-primary bg-primary text-white font-medium text-base rounded-sm inline-flex items-center gap-sm">
               Talk to Expert
                <span class="btn-icon icon-box icon-lg bg-white text-primary rounded-sm">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                    </svg>
                </span>
            </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Eighth Section: CTA -->
    <section class="cta-section" style="padding-bottom: clamp(4rem, 8vw, 6rem);">
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

                    <!-- Right Column: Image -->
                    <div class="cta-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/CTA.png" alt="TrustHabit Dashboard" class="cta-image">
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();

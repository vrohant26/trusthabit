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
                <a href="#" class="btn btn-outline border-primary text-primary font-medium text-lg rounded-sm inline-flex items-center gap-lg">
                    Talk to sales
                    <span class="btn-icon icon-box icon-lg bg-primary text-white rounded-sm">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </span>
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
                      <a href="#" class="btn btn-outline border-primary text-primary font-medium text-base rounded-sm inline-flex items-center gap-lg">
                    Talk to sales
                    <span class="btn-icon icon-box icon-lg bg-primary text-white rounded-sm">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </span>
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
    
</main>

<?php
get_footer();

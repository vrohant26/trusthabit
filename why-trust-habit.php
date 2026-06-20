<?php
/**
 * Template Name: Why Trust Habit Page
 */
get_header();
?>

<main id="primary" class="site-main pt-32">

    <!-- Hero Section -->


    <!-- Why Every Organization Needs Section -->
    <section class="container px-container" style="padding-bottom: clamp(4rem, 8vw, 8rem); position: relative; margin-top: clamp(4rem, 8vw, 6rem);">
        <!-- Decorative Grid Background -->
        <div style="position: absolute; top: 10%; right: -5%; width: 400px; height: 400px; background-image: url('data:image/svg+xml,%3Csvg width=\'24\' height=\'24\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'5\' height=\'5\' fill=\'%23e2e8f0\'/%3E%3C/svg%3E'); z-index: -1; opacity: 0.8; -webkit-mask-image: radial-gradient(circle, black 30%, transparent 70%); mask-image: radial-gradient(circle, black 30%, transparent 70%);"></div>
        <div style="position: absolute; bottom: -10%; left: -5%; width: 400px; height: 400px; background-image: url('data:image/svg+xml,%3Csvg width=\'24\' height=\'24\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Crect width=\'5\' height=\'5\' fill=\'%23e2e8f0\'/%3E%3C/svg%3E'); z-index: -1; opacity: 0.8; -webkit-mask-image: radial-gradient(circle, black 30%, transparent 70%); mask-image: radial-gradient(circle, black 30%, transparent 70%);"></div>

        <div class="diff-header" style="max-width: 900px; margin-bottom: 3rem;">
            <div class="problem-badge" style="background:#eef2f6; color:#64748b; display:inline-flex; align-items:center; gap:0.5rem; padding:0.4rem 0.8rem; border-radius:4px; font-size:0.75rem; font-weight:600; letter-spacing:0.05em; margin-bottom:1.5rem;">
                <span class="problem-badge-dot" style="background:var(--color-primary); width:6px; height:6px; border-radius:50%; display:inline-block;"></span>
                THE PROBLEM WITH THE CATEGORY
            </div>
            <h2 class="font-heading text-dark" style="font-size: clamp(2.5rem, 4vw, 3.5rem); font-weight: 500; line-height: 1.2; letter-spacing: -0.02em;">
                Why Every Organization needs<br>
                <span class="text-primary">Phishing Simulation</span>
            </h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 2rem; width: 100%; margin-bottom: 4rem;">
            
            <!-- The Danger Card -->
            <div style="border: 2px solid #1e293b; border-radius: 12px; background: #fff; padding: 2.5rem; display: flex; flex-direction: column; gap: 2rem; position: relative; z-index: 2;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; border-bottom: 1px solid #e2e8f0; padding-bottom: 1rem;">
                    <h3 class="font-heading" style="font-size: 1.35rem; font-weight: 600; color: #0f172a;">The Danger</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/warning.svg" alt="Warning" style="width: 32px; height: 32px; object-fit: contain;">
                </div>
                
                <div style="display: flex; flex-direction: column; gap: 2rem;">
                    <div style="display: flex; gap: 1.25rem;">
                        <div style="width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px;">
                            <!-- Red filter -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet" style="width:100%; height:100%; filter: brightness(0) saturate(100%) invert(31%) sepia(87%) saturate(2680%) hue-rotate(338deg) brightness(94%) contrast(96%);">
                        </div>
                        <div class="font-body" style="font-size: 0.95rem; color: #1e293b; line-height: 1.6; font-weight: 500;">
                            90% + Of Cyberattacks Begin With Human Interaction - Making People The Primary Attack Surface In Every Organization
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 1.25rem;">
                        <div style="width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet" style="width:100%; height:100%; filter: brightness(0) saturate(100%) invert(31%) sepia(87%) saturate(2680%) hue-rotate(338deg) brightness(94%) contrast(96%);">
                        </div>
                        <div class="font-body" style="font-size: 0.95rem; color: #1e293b; line-height: 1.6; font-weight: 500;">
                            One Employee Click Can Lead To Ransomware, Data Theft, Or Financial Fraud With Devastating Consequences
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 1.25rem;">
                        <div style="width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet" style="width:100%; height:100%; filter: brightness(0) saturate(100%) invert(31%) sepia(87%) saturate(2680%) hue-rotate(338deg) brightness(94%) contrast(96%);">
                        </div>
                        <div class="font-body" style="font-size: 0.95rem; color: #1e293b; line-height: 1.6; font-weight: 500;">
                            A Single Untrained Employee Can Become The Entry Point For An Organization-Wide Breach
                        </div>
                    </div>
                </div>
            </div>

            <!-- The Gap Card -->
            <div style="border: 2px solid #8ba3c7; border-radius: 12px; background: #dbe5f0; padding: 2.5rem; display: flex; flex-direction: column; gap: 2rem; position: relative; z-index: 2;">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; border-bottom: 1px solid #b8c8dd; padding-bottom: 1rem;">
                    <h3 class="font-heading" style="font-size: 1.35rem; font-weight: 600; color: #0f172a;">The Gap</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/the gap.svg" alt="The Gap" style="width: 32px; height: 32px; object-fit: contain;">
                </div>
                
                <div style="display: flex; flex-direction: column; gap: 2rem;">
                    <div style="display: flex; gap: 1.25rem;">
                        <div style="width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px;">
                            <!-- Original blue bullet -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet" style="width:100%; height:100%;">
                        </div>
                        <div class="font-body" style="font-size: 0.95rem; color: #1e293b; line-height: 1.6; font-weight: 500;">
                            Traditional Awareness Training Does Not Measure Actual Employee Behaviour
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 1.25rem;">
                        <div style="width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet" style="width:100%; height:100%;">
                        </div>
                        <div class="font-body" style="font-size: 0.95rem; color: #1e293b; line-height: 1.6; font-weight: 500;">
                            Organizations Need Proof That Employees Can <br> Recognize Attacks
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 1.25rem;">
                        <div style="width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet" style="width:100%; height:100%;">
                        </div>
                        <div class="font-body" style="font-size: 0.95rem; color: #1e293b; line-height: 1.6; font-weight: 500;">
                            Knowing Is Not The Same As Doing - Behavior Must Be Tested
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="text-center font-heading" style="max-width: 850px; margin: 0 auto; font-size: 1.2rem; font-weight: 600; color: #1e293b; line-height: 1.6;">
            Awareness Without Measurement Is Assumption. Phishing Simulation Provides Measurable Evidence Of Cyber Readiness
        </div>

    </section>

    <!-- Business Challenges Section -->
    <section class=" bg-primary-container aud-sec m-10px relative">
        <div class="container px-container">
            <div class="audience-grid pt-32">
                
                <!-- Left Column -->
                <div class="audience-left">
                    <div class="problem-badge badge-translucent">
                        <span class="problem-badge-dot badge-dot-blue"></span>
                        STEPS
                    </div>
                    <h2 class="audience-title font-heading" style="margin-bottom: 2rem;">
                        Business Challenges<br>We Solve
                    </h2>
                    <p class="audience-desc mb-lg" style="font-size: 1rem; line-height: 1.6;">
                        Organizations Across Every Industry Face The Same Critical Gaps In Their Cybersecurity Posture.<br><br>
                        These Are The Problems <strong>Trust Habit</strong> Is Built To Address.
                    </p>
                </div>

                <!-- Right Column -->
                <div class="audience-right">
                    <div class="audience-list">
                        
                        <!-- Item 1 -->
                        <div class="audience-item">
                            <div class="audience-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 11l3 3L22 4M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg>
                            </div>
                            <h3 class="audience-item-title font-heading">Undetected Phishing Threats</h3>
                            <p class="audience-item-desc">Employees Cannot Identify Sophisticated Phishing Emails That Mimic Trusted Brands And Colleagues With Alarming Accuracy.</p>
                        </div>
                        
                        <div class="audience-divider"></div>
                        
                        <!-- Item 2 -->
                        <div class="audience-item">
                            <div class="audience-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 12h12M4 6h8M4 18h8M14 6l6 6-6 6"></path>
                                </svg>
                            </div>
                            <h3 class="audience-item-title font-heading">Invisible Human Risk</h3>
                            <p class="audience-item-desc">Management Lacks Visibility Into Human Cyber Risk - They Cannot See Which Departments Or Individuals Are Most Vulnerable.</p>
                        </div>
                        
                        <div class="audience-divider"></div>
                        
                        <!-- Item 3 -->
                        <div class="audience-item">
                            <div class="audience-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                    <path d="M8 21h8M12 17v4"></path>
                                    <path d="M2 13h4l2-3 4 6 2-3h4"></path>
                                </svg>
                            </div>
                            <h3 class="audience-item-title font-heading">Unmeasurable Awareness Programs</h3>
                            <p class="audience-item-desc">Security Awareness Programs Are Difficult To Measure, Making It Impossible To Demonstrate ROI Or Improvement Over Time.</p>
                        </div>

                        <div class="audience-divider"></div>

                        <!-- Item 4 -->
                        <div class="audience-item">
                            <div class="audience-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 11l3 3L22 4M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg>
                            </div>
                            <h3 class="audience-item-title font-heading">Compliance Pressure</h3>
                            <p class="audience-item-desc">Compliance Requirements Demand Continuous Awareness Activities With Documented Evidence - A Burden Without The Right Tools</p>
                        </div>

                        <div class="audience-divider"></div>

                        <!-- Item 5 -->
                        <div class="audience-item">
                            <div class="audience-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 11l3 3L22 4M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                                </svg>
                            </div>
                            <h3 class="audience-item-title font-heading">Human Error At Scale</h3>
                            <p class="audience-item-desc">Human Errors Remain The Largest Attack Surface In Any Organization, And It Grows With Every New Employee Onboarded.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Human Firewall Section -->
    <section  style=" padding-bottom: clamp(4rem, 8vw, 8rem); background: #fafafa; border-radius: 24px; margin-top: 4rem;">
        <div class="container px-container">
        <!-- Decorative Grid Banner -->
        <div style="position: relative; height: 300px; display: flex; align-items: center; justify-content: center; margin-bottom: 3rem; overflow: hidden; -webkit-mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent); mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);">
            <!-- Grid Background -->
            <div style="position: absolute; inset: 0; background-image: linear-gradient(to right, #e2e8f0 1px, transparent 1px), linear-gradient(to bottom, #e2e8f0 1px, transparent 1px); background-size: 40px 40px; background-position: 50% 0;">
                <!-- Filled Squares perfectly aligned to 40px grid from center -->
                <!-- Center grid line is at 50% - 20px. Other lines are +/- multiples of 40px -->
                <div style="position: absolute; top: 40px; left: calc(50% - 500px); width: 39px; height: 39px; background: #e2e8f0; opacity: 0.6; border-radius: 4px;"></div>
                <div style="position: absolute; top: 0px; left: calc(50% + 220px); width: 39px; height: 39px; background: #e2e8f0; opacity: 0.6; border-radius: 4px;"></div>
                <div style="position: absolute; top: 200px; left: calc(50% - 420px); width: 39px; height: 39px; background: #e2e8f0; opacity: 0.6; border-radius: 4px;"></div>
                <div style="position: absolute; top: 120px; left: calc(50% + 420px); width: 39px; height: 39px; background: #e2e8f0; opacity: 0.6; border-radius: 4px;"></div>
            </div>
            
            <h2 class="font-heading text-dark text-center" style="position: relative; z-index: 2; font-size: clamp(3rem, 5vw, 4rem); font-weight: 500; letter-spacing: -0.02em;">
                Build A <span class="text-primary">Human Firewall</span>
            </h2>
        </div>

        <!-- Section Header Content -->
        <div style="display: flex; justify-content: space-between; align-items: flex-end; gap: 2rem; margin-bottom: 3rem; flex-wrap: wrap;">
            <p class="font-body text-dark" style="font-size: 1.15rem; font-weight: 500; line-height: 1.6; max-width: 900px; margin: 0;">
                Trust Habit Is A Cloud Based Phishing Simulation Platform Designed To Transform Your Employees From Your Greatest Vulnerability Into Your Strongest Line Of Defense
            </p>
            
            <!-- Arrows -->
            <div style="display: flex; gap: 0.5rem;">
                <div id="hf-prev-btn" style="width: 32px; height: 32px; border: 1px solid var(--color-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--color-primary); cursor: pointer; transition: all 0.2s ease;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                </div>
                <div id="hf-next-btn" style="width: 32px; height: 32px; border: 1px solid var(--color-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--color-primary); cursor: pointer; transition: all 0.2s ease;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </div>
            </div>
        </div>

        <!-- Cards Carousel -->
        <div id="hf-carousel" style="display: flex; overflow-x: auto; scroll-snap-type: x mandatory; gap: 1.5rem; padding-bottom: 1rem; scrollbar-width: none; -ms-overflow-style: none; scroll-behavior: smooth;">
            
            <!-- Card 1 -->
            <div style="flex: 0 0 calc(25% - 1.125rem); min-width: 280px; scroll-snap-align: start; background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2.5rem 1.5rem; display: flex; flex-direction: column; text-align: left; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="height: 120px; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/incognito.svg" alt="Simulate Real Attacks" style="max-height: 90px; max-width: 100%; object-fit: contain;">
                </div>
                <h3 class="font-heading text-primary" style="font-size: 1.15rem; font-weight: 600; margin-bottom: 1rem; line-height: 1.4;">Simulate Real Attacks</h3>
                <p class="font-body text-muted" style="font-size: 0.9rem; line-height: 1.6; margin: 0;">
                    Safely Replicate Real-World Phishing Attacks To Test Employee Responses Without Any Actual Risk To Your Organization
                </p>
            </div>

            <!-- Card 2 -->
            <div style="flex: 0 0 calc(25% - 1.125rem); min-width: 280px; scroll-snap-align: start; background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2.5rem 1.5rem; display: flex; flex-direction: column; text-align: left; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="height: 120px; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/measure.svg" alt="Measure Susceptibility" style="max-height: 90px; max-width: 100%; object-fit: contain;">
                </div>
                <h3 class="font-heading text-primary" style="font-size: 1.15rem; font-weight: 600; margin-bottom: 1rem; line-height: 1.4;">Measure Susceptibility</h3>
                <p class="font-body text-muted" style="font-size: 0.9rem; line-height: 1.6; margin: 0;">
                    Quantify Employee Susceptibility To Phishing Threats With Precise Metrics And Identify High-Risk Departments And Users.
                </p>
            </div>

            <!-- Card 3 -->
            <div style="flex: 0 0 calc(25% - 1.125rem); min-width: 280px; scroll-snap-align: start; background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2.5rem 1.5rem; display: flex; flex-direction: column; text-align: left; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="height: 120px; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/identify risk.svg" alt="Identify High-Risk Departments And Users" style="max-height: 90px; max-width: 100%; object-fit: contain;">
                </div>
                <h3 class="font-heading text-primary" style="font-size: 1.15rem; font-weight: 600; margin-bottom: 1rem; line-height: 1.4;">Identify High-Risk Departments And Users</h3>
                <p class="font-body text-muted" style="font-size: 0.9rem; line-height: 1.6; margin: 0;">
                    Identify The Teams And Roles That Represent The Greatest Human Cyber Risk To Your Organization.
                </p>
            </div>

            <!-- Card 4 -->
            <div style="flex: 0 0 calc(25% - 1.125rem); min-width: 280px; scroll-snap-align: start; background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2.5rem 1.5rem; display: flex; flex-direction: column; text-align: left; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="height: 120px; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/strenghten awareness.svg" alt="Strengthen Awareness" style="max-height: 90px; max-width: 100%; object-fit: contain;">
                </div>
                <h3 class="font-heading text-primary" style="font-size: 1.15rem; font-weight: 600; margin-bottom: 1rem; line-height: 1.4;">Strengthen Awareness</h3>
                <p class="font-body text-muted" style="font-size: 0.9rem; line-height: 1.6; margin: 0;">
                    Reinforce Cyber Awareness Through Practical, Experience-Based Learning That Transforms Behavior - Not Just Knowledge
                </p>
            </div>

            <!-- Card 5 (Measurable Results) -->
            <div style="flex: 0 0 calc(25% - 1.125rem); min-width: 280px; scroll-snap-align: start; background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2.5rem 1.5rem; display: flex; flex-direction: column; text-align: left; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="height: 120px; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/trend.svg" alt="Measurable Results" style="max-height: 90px; max-width: 100%; object-fit: contain;">
                </div>
                <h3 class="font-heading text-primary" style="font-size: 1.15rem; font-weight: 600; margin-bottom: 1rem; line-height: 1.4;">Measurable Results</h3>
                <p class="font-body text-muted" style="font-size: 0.9rem; line-height: 1.6; margin: 0;">
                    Transform Security Awareness Into Measurable, Reportable Results That Demonstrate Real Improvement Over Time.
                </p>
            </div>

        </div>
</div>
    </section>


    <!-- Key Benefits Section -->
    <section class="container px-container" style="padding-top: clamp(4rem, 8vw, 8rem); padding-bottom: clamp(4rem, 8vw, 8rem); background: #ffffff;">
        
        
            <!-- Header -->
            <div style="margin-bottom: 4rem;">
                <h2 class="font-heading" style="font-size: clamp(2.5rem, 4vw, 3.5rem); font-weight: 500; margin-bottom: 1.5rem; line-height: 1.2; letter-spacing: -0.02em;">
                    <span class="text-primary">Key Benefits</span> <span class="text-dark">For Management</span>
                </h2>
                <p class="font-body text-muted" style="font-size: 1.05rem; line-height: 1.6; max-width: 600px;">
                    Trust Habit Gives Executives And Decision-Makers The Visibility They Need To Understand And Manage Human Cyber Risk Across The Entire Organization
                </p>
            </div>

            <!-- List -->
            <div style="display: flex; flex-direction: column; border-top: 1px solid #e2e8f0;">
                
                <!-- Row 1 -->
                <div style="display: flex; align-items: center; padding: 1.75rem 0; border-bottom: 1px solid #e2e8f0;">
                    <div class="font-heading text-primary" style="font-size: 1rem; font-weight: 600; width: 120px; flex-shrink: 0;">01.</div>
                    <div class="font-body text-dark" style="font-size: 1.15rem; font-weight: 500;">
                        Phishing Risk Score At A Glance - By Department And Team And Individual
                    </div>
                </div>

                <!-- Row 2 -->
                <div style="display: flex; align-items: center; padding: 1.75rem 0; border-bottom: 1px solid #e2e8f0;">
                    <div class="font-heading text-primary" style="font-size: 1rem; font-weight: 600; width: 120px; flex-shrink: 0;">02.</div>
                    <div class="font-body text-dark" style="font-size: 1.15rem; font-weight: 500;">
                        Monitor Trends That Track Improvement Over Time With Each Simulation
                    </div>
                </div>

                <!-- Row 3 -->
                <div style="display: flex; align-items: center; padding: 1.75rem 0; border-bottom: 1px solid #e2e8f0;">
                    <div class="font-heading text-primary" style="font-size: 1rem; font-weight: 600; width: 120px; flex-shrink: 0;">03.</div>
                    <div class="font-body text-dark" style="font-size: 1.15rem; font-weight: 500;">
                        Measure Employee Awareness With Concrete Data - Not Self Reported Surveys
                    </div>
                </div>

                <!-- Row 4 -->
                <div style="display: flex; align-items: center; padding: 1.75rem 0; border-bottom: 1px solid #e2e8f0;">
                    <div class="font-heading text-primary" style="font-size: 1rem; font-weight: 600; width: 120px; flex-shrink: 0;">04.</div>
                    <div class="font-body text-dark" style="font-size: 1.15rem; font-weight: 500;">
                        Identify Departments Requiring Additional Training And Allocate Resources
                    </div>
                </div>

                <!-- Row 5 -->
                <div style="display: flex; align-items: center; padding: 1.75rem 0; border-bottom: 1px solid #e2e8f0;">
                    <div class="font-heading text-primary" style="font-size: 1rem; font-weight: 600; width: 120px; flex-shrink: 0;">05.</div>
                    <div class="font-body text-dark" style="font-size: 1.15rem; font-weight: 500;">
                        Make Data Driven Cybersecurity Investment Decisions Backed By Evidence
                    </div>
                </div>

            </div>
        
    </section>

    <!-- Key Benefits For Security Teams Section -->
    <section class="roots-section-wrapper  bg-primary-container">
        

        <div class="container px-container">
     
            <!-- Header -->
            <div  style="margin-bottom: 4rem;">
                <h2 class="font-heading text-white" style="font-size: clamp(2.5rem, 4vw, 3.5rem); font-weight: 500; margin-bottom: 1.5rem; line-height: 1.2; letter-spacing: -0.02em;">
                    Key Benefits For Security<br>Teams
                </h2>
                <p class="font-body text-white" style="font-size: 1.05rem; line-height: 1.6; max-width: 600px; opacity: 0.9;">
                    trust habit is built for security professionals who need powerful tools, fast deployment, and actionable intelligence to reduce organizational risk
                </p>
            </div>

            <!-- List -->
            <div style="display: flex; flex-direction: column;">
                
                <!-- Row 1 -->
                <div class="sec-ben-grid">
                    <div class="font-heading num" style="font-size: 1rem; font-weight: 600; color: rgba(255,255,255,0.7);">01.</div>
                    <div class="font-body text-white title" style="font-size: 1.35rem; font-weight: 500;">
                        Launch Campaigns Quickly
                    </div>
                    <div class="font-body text-white" style="font-size: 0.95rem; line-height: 1.6; opacity: 0.85;">
                        Deploy phishing simulation campaigns in minutes with pre-built templates and intuitive campaign management tools.
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="sec-ben-grid">
                    <div class="font-heading num" style="font-size: 1rem; font-weight: 600; color: rgba(255,255,255,0.7);">02.</div>
                    <div class="font-body text-white title" style="font-size: 1.35rem; font-weight: 500;">
                        Real Time Monitoring
                    </div>
                    <div class="font-body text-white" style="font-size: 0.95rem; line-height: 1.6; opacity: 0.85;">
                        Monitor employee responses as they happen - see who clicked, who reported, and who submitted credentials in real time.
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="sec-ben-grid">
                    <div class="font-heading num" style="font-size: 1rem; font-weight: 600; color: rgba(255,255,255,0.7);">03.</div>
                    <div class="font-body text-white title" style="font-size: 1.35rem; font-weight: 500;">
                        Automated Risk Reports
                    </div>
                    <div class="font-body text-white" style="font-size: 0.95rem; line-height: 1.6; opacity: 0.85;">
                        Generate detailed risk reports automatically, saving hours of manual analysis and presenting findings in a clear, shareable format.
                    </div>
                </div>

                <!-- Row 4 -->
                <div class="sec-ben-grid">
                    <div class="font-heading num" style="font-size: 1rem; font-weight: 600; color: rgba(255,255,255,0.7);">04.</div>
                    <div class="font-body text-white title" style="font-size: 1.35rem; font-weight: 500;">
                        Reduce Attack Success
                    </div>
                    <div class="font-body text-white" style="font-size: 0.95rem; line-height: 1.6; opacity: 0.85;">
                        Measurably reduce the likelihood of successful phishing attacks by continuously testing and reinforcing employee vigilance.
                    </div>
                </div>

                <!-- Row 5 -->
                <div class="sec-ben-grid">
                    <div class="font-heading num" style="font-size: 1rem; font-weight: 600; color: rgba(255,255,255,0.7);">05.</div>
                    <div class="font-body text-white title" style="font-size: 1.35rem; font-weight: 500;">
                        Stronger Security Posture
                    </div>
                    <div class="font-body text-white" style="font-size: 0.95rem; line-height: 1.6; opacity: 0.85;">
                        Strengthen your overall security posture by closing the human vulnerability gap that technology controls alone cannot address.
                    </div>
                </div>

            </div>
</div>
    </section>

    <!-- Key Benefits For HR Section -->
    <section class="container px-container" style="padding-top: clamp(4rem, 8vw, 8rem); padding-bottom: clamp(4rem, 8vw, 8rem); background: #ffffff;">
        
     
            <!-- Header -->
            <div style="margin-bottom: 4rem;">
                <h2 class="font-heading" style="font-size: clamp(2.5rem, 4vw, 3.5rem); font-weight: 500; margin-bottom: 1.5rem; line-height: 1.2; letter-spacing: -0.02em;">
                    <span class="text-primary">Key Benefits</span> <span class="text-dark">For HR & Training Teams</span>
                </h2>
                <p class="font-body text-muted" style="font-size: 1.05rem; line-height: 1.6; max-width: 600px;">
                    Trust Habit Supports HR And Training Professionals In Building A Culture Of Cyber Vigilance - Making Security Awareness A Natural Part Of Everyday Work Life.
                </p>
            </div>

            <!-- List -->
            <div style="display: flex; flex-direction: column; border-top: 1px solid #e2e8f0;">
                
                <!-- Row 1 -->
                <div style="display: flex; align-items: center; padding: 1.75rem 0; border-bottom: 1px solid #e2e8f0;">
                    <div class="font-heading text-primary" style="font-size: 1rem; font-weight: 600; width: 120px; flex-shrink: 0;">01.</div>
                    <div class="font-body text-dark" style="font-size: 1.15rem; font-weight: 500;">
                        Foster An Organizational Promoting Cyber Vigilance Culture
                    </div>
                </div>

                <!-- Row 2 -->
                <div style="display: flex; align-items: center; padding: 1.75rem 0; border-bottom: 1px solid #e2e8f0;">
                    <div class="font-heading text-primary" style="font-size: 1rem; font-weight: 600; width: 120px; flex-shrink: 0;">02.</div>
                    <div class="font-body text-dark" style="font-size: 1.15rem; font-weight: 500;">
                        Reinforce Learning Through Practical Simulation Exercises
                    </div>
                </div>

                <!-- Row 3 -->
                <div style="display: flex; align-items: center; padding: 1.75rem 0; border-bottom: 1px solid #e2e8f0;">
                    <div class="font-heading text-primary" style="font-size: 1rem; font-weight: 600; width: 120px; flex-shrink: 0;">03.</div>
                    <div class="font-body text-dark" style="font-size: 1.15rem; font-weight: 500;">
                        Monitor Participation Rates And Progress Across All Simulation Campaigns
                    </div>
                </div>

                <!-- Row 4 -->
                <div style="display: flex; align-items: center; padding: 1.75rem 0; border-bottom: 1px solid #e2e8f0;">
                    <div class="font-heading text-primary" style="font-size: 1rem; font-weight: 600; width: 120px; flex-shrink: 0;">04.</div>
                    <div class="font-body text-dark" style="font-size: 1.15rem; font-weight: 500;">
                        Encourage Responsible Digital Behavior
                    </div>
                </div>

                <!-- Row 5 -->
                <div style="display: flex; align-items: center; padding: 1.75rem 0; border-bottom: 1px solid #e2e8f0;">
                    <div class="font-heading text-primary" style="font-size: 1rem; font-weight: 600; width: 120px; flex-shrink: 0;">05.</div>
                    <div class="font-body text-dark" style="font-size: 1.15rem; font-weight: 500;">
                        Support Ongoing Learning Initiatives Through Repeatable Awareness Campaigns
                    </div>
                </div>

            </div>
       
    </section>

    <!-- Why Simulations Work Better Section -->
    <section class="simulations-section ">
        
        <div class="container px-container">
            <!-- Header -->
            <div style="margin-bottom: 4rem;">
                <h2 class="font-heading text-dark simulations-header-title">
                    Why Simulations Work Better<br>Than Training Alone
                </h2>
                <div class="font-body simulations-header-desc">
                    <p>Simulations Reveal Actual Employee Responses Under Realistic Conditions - Not What Employees Say They Would Do, But What They Actually Do. Immediate Feedback At The Moment Of Failure Dramatically Improves Retention And Creates Lasting Behavioral Change That Organizations Can Measure And Report On.</p>
                    
                </div>
            </div>

            <!-- Flow Carousel -->
            <div class="sim-flow-wrapper">
                <div class="sim-flow-carousel">
                    
                    <!-- Step 1 -->
                    <div class="sim-step-card-wrapper">
                        <div class="sim-step-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/theory.png" alt="Theory">
                        </div>
                        <div class="font-body text-dark sim-step-title">Theory</div>
                    </div>

                    <!-- Arrow -->
                    <div class="sim-flow-arrow">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow.svg" alt="Arrow" style="height: 32px; object-fit: contain;">
                    </div>

                    <!-- Step 2 -->
                    <div class="sim-step-card-wrapper">
                        <div class="sim-step-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/simulation.png" alt="Simulation">
                        </div>
                        <div class="font-body text-dark sim-step-title">Simulation</div>
                    </div>

                    <!-- Arrow -->
                    <div class="sim-flow-arrow">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow.svg" alt="Arrow" style="height: 32px; object-fit: contain;">
                    </div>

                    <!-- Step 3 -->
                    <div class="sim-step-card-wrapper">
                        <div class="sim-step-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feedback.png" alt="Feedback">
                        </div>
                        <div class="font-body text-dark sim-step-title">Feedback</div>
                    </div>

                    <!-- Arrow -->
                    <div class="sim-flow-arrow">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow.svg" alt="Arrow" style="height: 32px; object-fit: contain;">
                    </div>

                    <!-- Step 4 -->
                    <div class="sim-step-card-wrapper">
                        <div class="sim-step-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/behaviour change.png" alt="Behavior Change">
                        </div>
                        <div class="font-body text-dark sim-step-title">Behavior Change</div>
                    </div>
                </div>
            </div>

            <!-- 2x2 Grid Points -->
            <div class="sim-points-grid">
                
                <!-- Point 1 -->
                <div class="sim-point-item">
                    <div class="sim-point-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet">
                    </div>
                    <div>
                        <h3 class="font-heading text-dark sim-point-title">Experience-Based Learning</h3>
                        <p class="font-body sim-point-desc">
                            Employees Learn Best Through Experience. Simulations Create Memorable Learning Moments That Passive Training Cannot Replicate.
                        </p>
                    </div>
                </div>

                <!-- Point 2 -->
                <div class="sim-point-item">
                    <div class="sim-point-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet">
                    </div>
                    <div>
                        <h3 class="font-heading text-dark sim-point-title">Pressure-Tested Responses</h3>
                        <p class="font-body sim-point-desc">
                            Simulations Reveal Actual Responses Under Pressure - Exposing Vulnerabilities That Would Otherwise Remain Hidden Until A Real Attack Occurs.
                        </p>
                    </div>
                </div>

                <!-- Point 3 -->
                <div class="sim-point-item">
                    <div class="sim-point-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet">
                    </div>
                    <div>
                        <h3 class="font-heading text-dark sim-point-title">Practical Awareness</h3>
                        <p class="font-body sim-point-desc">
                            Awareness Becomes Practical, Not Theoretical. Employees Develop Instincts, Not Just Knowledge, Making Them Genuinely More Resilient.
                        </p>
                    </div>
                </div>

                <!-- Point 4 -->
                <div class="sim-point-item">
                    <div class="sim-point-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bullet point.svg" alt="bullet">
                    </div>
                    <div>
                        <h3 class="font-heading text-dark sim-point-title">Measurable Change</h3>
                        <p class="font-body sim-point-desc">
                            Organizations Can Measure Behavioral Change Over Time - Demonstrating Real Improvement In Human Cyber Resilience With Hard Data.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Decision Makers Section -->
    <section class="container px-container" style="padding-top: clamp(4rem, 8vw, 8rem); padding-bottom: clamp(4rem, 8vw, 8rem); background: #ffffff;">
        
            <!-- Header Row -->
            <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 4rem; flex-wrap: wrap; gap: 2rem;">
                <div style="max-width: 900px;">
                    <h2 class="font-heading" style="font-size: clamp(2.5rem, 4vw, 3.5rem); font-weight: 500; margin-bottom: 1.5rem; line-height: 1.1; letter-spacing: -0.02em;">
                        <span class="text-dark">What</span> <span class="text-primary">Decision Makers</span> <span class="text-dark">Gain</span>
                    </h2>
                    <p class="font-body" style="font-size: 1.05rem; line-height: 1.6; color: #475569; margin: 0;">
                        Trust Habit Delivers Tangible Business Value That Extends Far Beyond Cybersecurity - Impacting Compliance, Financial Risk, Culture, And Organizational Resilience.
                    </p>
                </div>
                <!-- Navigation Arrows -->
                <div style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                    <div id="dm-prev-btn" style="width: 32px; height: 32px; border: 1px solid var(--color-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--color-primary); cursor: pointer; transition: all 0.2s ease;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                    </div>
                    <div id="dm-next-btn" style="width: 32px; height: 32px; border: 1px solid var(--color-primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--color-primary); cursor: pointer; transition: all 0.2s ease;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </div>
                </div>
            </div>

            <!-- Carousel -->
            <div id="dm-carousel" class="dm-carousel">
                
                <!-- Card 1 -->
                <div class="dm-card">
                    <div class="dm-card-bg"></div>
                    <div class="dm-icon-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/Reduced Cyber Risk.svg" alt="Reduced Cyber Risk">
                    </div>
                    <h3 class="font-heading text-primary" style="font-size: 1.15rem; font-weight: 500; margin-bottom: 1rem; position: relative; z-index: 1;">Reduced Cyber Risk</h3>
                    <p class="font-body" style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0; position: relative; z-index: 1;">
                        Measurably Lower Organizational Exposure To Phishing-Based Threats Through Continuous Simulation And Training.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="dm-card">
                    <div class="dm-card-bg"></div>
                    <div class="dm-icon-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/Lower Financial Risk.svg" alt="Lower Financial Risk">
                    </div>
                    <h3 class="font-heading text-primary" style="font-size: 1.15rem; font-weight: 500; margin-bottom: 1rem; position: relative; z-index: 1;">Lower Financial Risk</h3>
                    <p class="font-body" style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0; position: relative; z-index: 1;">
                        Reduced Probability Of Financial Loss From Phishing-Related Incidents, Fraud, And Ransomware Attacks.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="dm-card">
                    <div class="dm-card-bg"></div>
                    <div class="dm-icon-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/Improved Employee Awareness.svg" alt="Improved Employee Awareness">
                    </div>
                    <h3 class="font-heading text-primary" style="font-size: 1.15rem; font-weight: 500; margin-bottom: 1rem; position: relative; z-index: 1;">Improved Employee Awareness</h3>
                    <p class="font-body" style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0; position: relative; z-index: 1;">
                        Employees Who Have Been Tested And Trained Through Simulation Are Measurably More Aware And More Likely To Report Suspicious Activity.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="dm-card">
                    <div class="dm-card-bg"></div>
                    <div class="dm-icon-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/Compliance Readiness.svg" alt="Compliance Readiness">
                    </div>
                    <h3 class="font-heading text-primary" style="font-size: 1.15rem; font-weight: 500; margin-bottom: 1rem; position: relative; z-index: 1;">Compliance Readiness</h3>
                    <p class="font-body" style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0; position: relative; z-index: 1;">
                        Better Compliance Readiness With Documented Evidence Of Ongoing Security Awareness Activities.
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="dm-card">
                    <div class="dm-card-bg"></div>
                    <div class="dm-icon-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/Stronger Security Culture.svg" alt="Stronger Security Culture">
                    </div>
                    <h3 class="font-heading text-primary" style="font-size: 1.15rem; font-weight: 500; margin-bottom: 1rem; position: relative; z-index: 1;">Stronger Security Culture</h3>
                    <p class="font-body" style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0; position: relative; z-index: 1;">
                        Security Culture Is The Strongest Defense. Trust Habit Makes It Measurable And Sustainable.
                    </p>
                </div>

            </div>
   
    </section>

    <!-- Compliance & Audit Benefits Section -->
    <section class="container px-container" style="padding-top: clamp(4rem, 8vw, 8rem); padding-bottom: clamp(4rem, 8vw, 8rem); background: #ffffff;">
      
            
            <!-- Header -->
            <div style="margin-bottom: 4rem;">
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: #f8fafc; padding: 0.25rem 0.75rem; border-radius: 9999px; border: 1px solid #e2e8f0; margin-bottom: 1.5rem;">
                    <div style="width: 6px; height: 6px; background: var(--color-primary); border-radius: 50%;"></div>
                    <span class="font-heading" style="font-size: 0.75rem; font-weight: 600; letter-spacing: 0.05em; color: #475569;">PHILOSOPHY</span>
                </div>
                <h2 class="font-heading text-dark" style="font-size: clamp(2.5rem, 4vw, 3.5rem); font-weight: 500; margin-bottom: 1.5rem; line-height: 1.1; letter-spacing: -0.02em;">
                    Compliance & Audit Benefits
                </h2>
                <p class="font-body" style="font-size: 1.15rem; line-height: 1.6; color: #475569; max-width: 900px; margin: 0; font-weight: 500;">
                    Regulatory Frameworks Increasingly Require Organizations To Demonstrate Active, Ongoing Security Awareness Programs - Not Just Policies On Paper. Trust Habit Generates The Documentation And Evidence That Auditors And Regulators Require, With Every Campaign.
                </p>
            </div>

            <!-- Grid -->
            <div class="compliance-grid">
                
                <!-- Card 1 -->
                <div class="compliance-card">
                    <h3 class="font-heading">Supports Information<br>Security Programs</h3>
                    <p class="font-body">
                        Integrates with broader information security management programs as a key human risk control component.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="compliance-card">
                    <h3 class="font-heading">Encourages Continual<br>Improvement</h3>
                    <p class="font-body">
                        Supports the continual improvement principle central to most compliance frameworks through measurable trend data.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="compliance-card">
                    <h3 class="font-heading">Helps Meet Awareness<br>Control Requirements</h3>
                    <p class="font-body">
                        Directly addresses awareness-related control requirements across major regulatory and certification frameworks.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="compliance-card">
                    <h3 class="font-heading">Demonstrates Awareness<br>Efforts</h3>
                    <p class="font-body">
                        Provides documented proof that the organization actively conducts security awareness activities on a continuous basis.
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="compliance-card">
                    <h3 class="font-heading">Provides Audit Evidence</h3>
                    <p class="font-body">
                        Monitor employee participation rates and individual progress across all simulation campaigns and training activities.
                    </p>
                </div>

                <!-- CTA Card -->
                <div class="compliance-cta-card">
                    <a href="/contact" style="display: inline-flex; align-items: center; gap: 0.5rem; background: #fff; padding: 0.75rem 1.25rem; border-radius: 8px; text-decoration: none; color: var(--color-primary); font-weight: 500; font-size: 0.95rem; transition: transform 0.2s ease, box-shadow 0.2s ease;">
                        Talk to an expert
                        <div style="width: 24px; height: 24px; background: #3b82f6; border-radius: 4px; display: flex; align-items: center; justify-content: center; color: #fff;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                        </div>
                    </a>
                </div>

            </div>
       
    </section>

    <!-- Why Organizations Choose Section -->
    <section class="container px-container" style="padding-top: clamp(4rem, 8vw, 8rem); padding-bottom: clamp(4rem, 8vw, 8rem); background: #ffffff;">
        
            
            <!-- Header -->
            <div style="margin-bottom: 4rem;">
                <h2 class="font-heading" style="font-size: clamp(2.5rem, 4vw, 3.5rem); font-weight: 500; margin-bottom: 1.5rem; line-height: 1.1; letter-spacing: -0.02em;">
                    <span class="text-dark">Why Organizations Choose</span><br><span class="text-primary">Trust Habit</span>
                </h2>
                <p class="font-body" style="font-size: 1.15rem; line-height: 1.6; color: #475569; max-width: 900px; margin: 0; font-weight: 500;">
                    Trust Habit Is Designed To Remove Every Barrier Between An Organization And A Stronger Human Security Posture — From Deployment Complexity To Cost Concerns.
                </p>
            </div>

            <!-- Grid -->
            <div class="choose-grid">
                
                <!-- Card 1 -->
                <div class="choose-card">
                    <div class="choose-card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/Easy deployement.svg" alt="Easy Deployment">
                    </div>
                    <h3 class="font-heading">Easy Deployment</h3>
                    <p class="font-body">
                        Up and running in hours, not weeks. No complex infrastructure required.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="choose-card">
                    <div class="choose-card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cloud bases saas.svg" alt="Cloud-Based SaaS">
                    </div>
                    <h3 class="font-heading">Cloud-Based SaaS</h3>
                    <p class="font-body">
                        Fully cloud-based platform with no onpremise installation or maintenance overhead.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="choose-card">
                    <div class="choose-card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/Realistic Simulation.svg" alt="Realistic Simulations">
                    </div>
                    <h3 class="font-heading">Realistic Simulations</h3>
                    <p class="font-body">
                        Phishing templates that mirror real-world attacks - not generic, easily spotted test emails.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="choose-card">
                    <div class="choose-card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/actionable reporting.svg" alt="Actionable Reporting">
                    </div>
                    <h3 class="font-heading">Actionable Reporting</h3>
                    <p class="font-body">
                        Reports designed for action - not just data dumps, but insights that drive decisions.
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="choose-card">
                    <div class="choose-card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/scales with you.svg" alt="Scales With You">
                    </div>
                    <h3 class="font-heading">Scales With You</h3>
                    <p class="font-body">
                        Scalable from small businesses to large enterprises - Trust Habit grows with your organization.
                    </p>
                </div>

                <!-- Card 6 -->
                <div class="choose-card ">
                    <div class="choose-card-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/cost effective.svg" alt="Cost-Effective">
                    </div>
                    <h3 class="font-heading">Cost-Effective</h3>
                    <p class="font-body">
                        A fraction of the cost of a single breach recovery - prevention has never been more affordable.
                    </p>
                </div>

            </div>

    </section>

    <!-- Cost vs Prevention Section -->
    <section class="container px-container" style="padding-top: clamp(4rem, 8vw, 8rem); padding-bottom: clamp(4rem, 8vw, 8rem); background: #ffffff;">
      
            
            <!-- Header -->
            <div style="margin-bottom: 4rem;">
                <h2 class="font-heading" style="font-size: clamp(2.5rem, 4vw, 4rem); font-weight: 500; margin-bottom: 1.5rem; line-height: 1.1; letter-spacing: -0.02em;">
                    <span class="text-dark">Cost Of A Click</span> <span class="text-primary" style="font-size: clamp(1.5rem, 2.5vw, 2.5rem); font-weight: 400; vertical-align: middle;">Vs</span> <span class="text-dark">Cost Of Prevention</span>
                </h2>
                <p class="font-body" style="font-size: 1.15rem; line-height: 1.6; color: #475569; max-width: 800px; margin: 0;">
                    The Financial And Reputational Consequences Of A Single Successful Phishing Attack Far Outweigh The Investment In Prevention. The Math Is Clear And The Risk Is Real.
                </p>
            </div>

            <!-- List -->
            <div style="display: flex; flex-direction: column; border-top: 1px solid #f1f5f9; margin-bottom: 4rem;">
                
                <!-- Row 1 -->
                <div style="display: flex; align-items: center; padding: 2rem 0; border-bottom: 1px solid #f1f5f9;">
                    <div class="font-heading text-primary" style="font-size: 1rem; font-weight: 600; width: 120px; flex-shrink: 0;">01.</div>
                    <div class="font-body" style="font-size: 1.25rem; color: #64748b;">
                        A Phishing Incident Can Cripple Operations And Harm Trust When It Matters Most.
                    </div>
                </div>

                <!-- Row 2 -->
                <div style="display: flex; align-items: center; padding: 2rem 0; border-bottom: 1px solid #f1f5f9;">
                    <div class="font-heading text-primary" style="font-size: 1rem; font-weight: 600; width: 120px; flex-shrink: 0;">02.</div>
                    <div class="font-body" style="font-size: 1.25rem; color: #64748b;">
                        Data Breaches Can Damage Reputation And Trust For Years.
                    </div>
                </div>

                <!-- Row 3 -->
                <div style="display: flex; align-items: center; padding: 2rem 0; border-bottom: 1px solid #f1f5f9;">
                    <div class="font-heading text-primary" style="font-size: 1rem; font-weight: 600; width: 120px; flex-shrink: 0;">03.</div>
                    <div class="font-body" style="font-size: 1.25rem; color: #64748b;">
                        Recovery Costs Far Exceed Prevention Costs, With Breaches Often Costing Millions.
                    </div>
                </div>

                <!-- Row 4 -->
                <div style="display: flex; align-items: center; padding: 2rem 0; border-bottom: 1px solid #f1f5f9;">
                    <div class="font-heading text-primary" style="font-size: 1rem; font-weight: 600; width: 120px; flex-shrink: 0;">04.</div>
                    <div class="font-body" style="font-size: 1.25rem; color: #64748b;">
                        Breaches Can Trigger Costly Fines, Sanctions, And Remediation Requirements.
                    </div>
                </div>

            </div>

            <!-- CTA Block -->
            <div style="background: var(--color-primary); border-radius: 20px; padding: clamp(2rem, 5vw, 4rem); display: flex; align-items: flex-start; gap: clamp(1.5rem, 4vw, 3rem); flex-wrap: wrap;">
                <div style="width: 72px; height: 72px; background: rgba(255,255,255,0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </div>
                <div style="flex: 1; min-width: 280px;">
                    <h3 class="font-heading text-white" style="font-size: clamp(1.5rem, 2vw, 1.75rem); font-weight: 500; margin-bottom: 1.5rem; line-height: 1.4;">
                        Prevention Through Simulation Is Far Less Expensive Than Remediation After An Incident - And It Builds Lasting Organizational Resilience.
                    </h3>
                    <p class="font-body" style="font-size: 1rem; color: rgba(255,255,255,0.8); line-height: 1.6; margin: 0;">
                        Trust Habit Turns The Economics Of Cybersecurity In Your Favor: Invest A Little Now, Or Risk Losing A Lot Later.
                    </p>
                </div>
            </div>

        
    </section>

      <section class="infrastructure-section">
        <div class="container px-container">
            <div class="infrastructure-grid">
                
                <!-- Top Left: Title Block -->
                <div class="infra-title-block flex flex-column justify-center">
                    <div>
                        <div style="display: flex; align-items: center; gap: 1.5rem; margin-bottom: 2rem; flex-wrap: wrap;">
                            <div class="problem-badge" style="background-color: #f1f5f9; color: #64748b; margin: 0;">
                                <span class="problem-badge-dot badge-dot-blue"></span>
                                TRUST AND ASSURANCE
                            </div>
                            <a href="<?php echo esc_url( home_url( '/how-it-works' ) ); ?>" style="display: inline-flex; align-items: center; gap: 0.75rem; text-decoration: none; color: var(--color-primary); font-size: 0.95rem; font-weight: 500;">
                                See how Trust habit Works
                                <div style="width: 28px; height: 28px; background: var(--color-primary); border-radius: 4px; display: flex; align-items: center; justify-content: center; color: #fff;">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                                </div>
                            </a>
                        </div>
                        <h2 class="infra-title font-heading text-dark" style="font-size: clamp(2.5rem, 4vw, 3.5rem); line-height: 1.1; margin-bottom: 1.5rem;">
                            Security Starts<br>
                            <span class="text-primary">With People</span>
                        </h2>
                        <p class="font-body text-muted" style="font-size: 1.15rem; line-height: 1.6; max-width: 90%">
                            Technology Blocks Many Threats But Employees Encounter The Threats That Technology Misses. The Human Layer Is Where The Battle Is Won Or Lost.
                        </p>
                    </div>
                </div>

                <!-- Top Right: Cards 1 & 2 -->
                <div class="infra-cards-row">
                    <div class="infra-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/protected.svg" alt="Technology Has Limits" class="infra-card-icon">
                        <h4 class="infra-card-title font-heading text-primary">Technology Has Limits</h4>
                        <p class="infra-card-desc text-muted">Even the most advanced security stack cannot catch every phishing email. Humans are the last line of defense.</p>
                    </div>
                    <div class="infra-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/auditable.svg" alt="Awareness Without Testing" class="infra-card-icon">
                        <h4 class="infra-card-title font-heading text-primary">Awareness Without<br>Testing Is Assumption</h4>
                        <p class="infra-card-desc text-muted">Believing employees are aware without testing them is not a security strategy - it is wishful thinking.</p>
                    </div>
                </div>

                <!-- Bottom Left: Cards 3 & 4 -->
                <div class="infra-cards-row">
                    <div class="infra-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/clear.svg" alt="Simulation Provides Proof" class="infra-card-icon">
                        <h4 class="infra-card-title font-heading text-primary">Simulation Provides Proof</h4>
                        <p class="infra-card-desc text-muted">Phishing simulation provides measurable, documented proof of employee readiness - replacing assumption with evidence.</p>
                    </div>
                    <div class="infra-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/proven.svg" alt="Build a Resilient Human Firewall" class="infra-card-icon">
                        <h4 class="infra-card-title font-heading text-primary">Build a Resilient Human<br>Firewall</h4>
                        <p class="infra-card-desc text-muted">Trust Habit helps organizations transform their people into a resilient, tested, and continuously improving human firewall.</p>
                    </div>
                </div>

                <!-- Bottom Right: Text & CTA -->
                <div class="infra-text-block flex flex-column justify-center">
                    <div>
                        <h3 class="font-heading text-dark" style="font-size: clamp(1.5rem, 2vw, 2rem); line-height: 1.4; font-weight: 500; margin-bottom: 2rem;">
                            "The strongest firewall in any organization is a well-trained, regularly tested, and genuinely aware workforce."
                        </h3>
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary bg-primary text-white font-medium text-base rounded-sm inline-flex items-center gap-sm">
                            Talk to an expert
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

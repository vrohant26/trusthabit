<footer id="colophon" class="site-footer">
    <!-- Top banner with grid pattern -->
    <div class="footer-top-banner">
        <div class="container px-container text-center">
            <span class="text-primary font-medium text-xl">Cyber-resilience</span> <span class="text-muted text-xl">through habit</span>
        </div>
    </div>

    <div class="container px-container">
        <!-- Main Footer Content -->
        <div class="footer-main-grid">
            
            <!-- Left Side -->
            <div class="footer-left">
                <h2 class="footer-heading font-heading">
                    Trusted by <br>
                    <span class="text-primary">security teams</span> across <br>
                    regions and industries.
                </h2>
                <div class="footer-cta-group">
                     
                    <a href="#" class="btn btn-outline border-primary text-primary font-medium text-base rounded-sm inline-flex items-center gap-lg">
                   Contact sales
                    <span class="btn-icon icon-box icon-lg bg-primary text-white rounded-sm">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </span>
                </a>
                </div>
            </div>

            <!-- Right Side (Links) -->
            <div class="footer-right">
                <!-- Navigation Column -->
                <div class="footer-nav-col">
                    <h4 class="footer-nav-title uppercase tracking-wide text-xs">Navigation</h4>
                    <ul class="footer-nav-list">
                        <li class="active-nav"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> <span class="nav-dot"></span></li>
                        <li><a href="<?php echo esc_url( home_url( '/features' ) ); ?>">Features</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>">Pricing</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact Us</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
                    </ul>
                </div>

                <!-- Connect Column -->
                <div class="footer-nav-col">
                    <h4 class="footer-nav-title uppercase tracking-wide text-xs">Connect</h4>
                    <ul class="footer-nav-list">
                        <li>
                            <a href="#" class="inline-flex items-center gap-xs">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                                LinkedIn
                            </a>
                        </li>
                        <li>
                            <a href="#" class="inline-flex items-center gap-xs">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                </svg>
                                Facebook
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <?php echo date('Y'); ?> Trust Habit
            </div>
            <div class="footer-bottom-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/TH%20Logo.svg" alt="Trust Habits Logo" class="footer-logo">
                </a>
            </div>
            <div class="footer-bottom-right">
                <a href="<?php echo esc_url( home_url( '/sitemap' ) ); ?>">Sitemap</a>
                <a href="<?php echo esc_url( home_url( '/privacy' ) ); ?>">Privacy</a>
                <a href="<?php echo esc_url( home_url( '/terms' ) ); ?>">Terms</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

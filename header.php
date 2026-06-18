<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/svg/SVG%20to%20Favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/svg/SVG%20to%20Favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container px-container flex items-center justify-between">
        <!-- Logo Area -->
        <div class="header-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php 
                $logo_class = 'custom-logo';
                if ( is_page_template('about.php') ) {
                    $logo_class .= ' logo-white';
                }
                ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/TH Logo.svg" alt="<?php bloginfo('name'); ?> Logo" class="<?php echo esc_attr($logo_class); ?>">
            </a>
        </div>

        <!-- Static Navigation -->
        <nav class="header-nav rounded-sm">
            <ul class="nav-menu flex items-center gap-xs">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-item-link text-base font-medium text-dark rounded-sm inline-flex">Home</a></li>
                <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="nav-item-link text-base font-medium text-dark rounded-sm inline-flex">About</a></li>
                <li><a href="<?php echo esc_url( home_url( '/how-it-works' ) ); ?>" class="nav-item-link text-base font-medium text-dark rounded-sm inline-flex">How it works</a></li>
                <li><a href="<?php echo esc_url( home_url( '/why-trust-habit' ) ); ?>" class="nav-item-link text-base font-medium text-dark rounded-sm inline-flex">Why Trust Habit</a></li>
                <!-- <li><a href="<?php echo esc_url( home_url( '/features' ) ); ?>" class="nav-item-link text-base font-medium text-dark rounded-pill inline-flex">Features</a></li> -->
                <!-- <li><a href="<?php echo esc_url( home_url( '/pricing' ) ); ?>" class="nav-item-link text-base font-medium text-dark rounded-pill inline-flex">Pricing</a></li> -->

                <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="nav-item-link text-base font-medium text-dark rounded-sm inline-flex">Contact</a></li>
                <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="nav-item-link text-base font-medium text-dark rounded-sm inline-flex">Blog</a></li>
            </ul>
        </nav>

        <!-- CTA Button & Hamburger -->
        <div class="header-cta flex items-center gap-sm">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary bg-primary text-white font-medium text-base rounded-sm inline-flex items-center gap-sm desktop-only">
                Request a demo 
                <span class="btn-icon icon-box icon-lg bg-white text-primary rounded-sm">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                    </svg>
                </span>
            </a>
            
            <!-- Hamburger Menu Icon -->
            <button class="mobile-menu-toggle" aria-label="Toggle mobile menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Full Screen Menu -->
<div class="mobile-menu-overlay">
    <div class="mobile-menu-inner flex flex-column items-center">
        <ul class="mobile-nav-menu">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a></li>
            <li><a href="<?php echo esc_url( home_url( '/how-it-works' ) ); ?>">How it works</a></li>
            <li><a href="<?php echo esc_url( home_url( '/why-trust-habit' ) ); ?>">Why Trust Habit</a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
        </ul>
        <div class="mobile-menu-cta mt-lg">
             <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary bg-primary text-white font-medium text-base rounded-sm inline-flex items-center gap-sm">
                Request a demo 
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

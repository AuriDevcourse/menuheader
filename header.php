<?php
/**
 * TechBBQ 2025 Header Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="techbbq-nav">
    <div class="techbbq-nav-container">
        <div class="techbbq-nav-logo">
            <?php 
            // Logo can be added via WordPress Customizer
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<h1>TechBBQ 2025</h1>';
            }
            ?>
        </div>

        <div class="mobile-menu-toggle">&#9776;</div>

        <div class="techbbq-nav-menu">
            <a href="#about" class="techbbq-nav-item">About Us</a>
            
            <div class="techbbq-dropdown">
                <a href="#event">TechBBQ 2025</a>
                <div class="techbbq-dropdown-content">
                    <a href="#about-event">About the Event</a>
                    <a href="#speakers">Speakers</a>
                    <a href="#theme">Theme</a>
                </div>
            </div>

            <a href="#startups" class="techbbq-nav-item">Startups</a>
            <a href="#investors" class="techbbq-nav-item">Investors</a>
            <a href="#media" class="techbbq-nav-item">Media</a>
            <a href="#projects" class="techbbq-nav-item">Projects</a>
            
            <a href="#tickets" class="techbbq-nav-tickets">Buy Tickets</a>
        </div>
    </div>
</nav>

<?php wp_footer(); ?>

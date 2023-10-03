<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        wp_head();
    ?>
</head>

<body>
    <header class="page-header">
        <div class="navbar-header container">
            <nav class="navbar navbar-expand-lg row">
                <a class="navbar-brand" href="<?php echo home_url(); ?>" style="color: #032B43">
                    <?php 
                    if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'custom-logo-size');
                    
                        if ($logo) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="company logo" width="" height="60">';
                        }
                    }
                    ?>
                </a>
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                
                <ul class="navbar-nav navbar-center">
                        <li class="nav-item">
                            <a class="nav-link"  href="<?php echo home_url('/#products'); ?>">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="<?php echo home_url('/#about-us'); ?>">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="<?php echo home_url('/blog'); ?>">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="<?php echo home_url('/contact'); ?>">Contact</a>
                        </li>
                    </ul>


                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item cta-top">
                            <a class="nav-link cta-top-text" href="<?php echo home_url('/contact'); ?>">Book a Consultation</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
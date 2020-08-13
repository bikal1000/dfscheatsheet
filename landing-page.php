<?php
/**
 * Template Name: New Landing Page
 *
 * The template for displaying pages with the Landing Page template.
 *
 * @package Memberlite
 */
?>
    <div class="wholepage">
        <div class="whole-banner-section">
            <header id="header">
                <div class="container headerContainer">
                    <div class="row headerRow">
                        <div class="col-md-3 col-sm-3 col-12">
                            <figure class="companyLogo">
                                <a href="#"><img src="images/logo.png" alt="Company Logo"></a>
                            </figure>
                        </div>

                        <div class="col-md-5  col-sm-3 col-12">
                            <nav class="navbar navbar-expand-md nav-control my_navbar" id="navbar">
                                <!-- Toggler/collapsibe Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#collapsibleNavbar">
                                    <span class="hamspan"></span>
                                    <span class="hamspan"></span>
                                    <span class="hamspan"></span>
                                </button>
                                <!-- Navbar links -->
                                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                    <ul class="navbar-nav ml-auto nav-menu">
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><a href="#">About us</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="login-section">
                                <a href="#" class="self-btn login-btn">Login</a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="signup-section">
                                <a href="#" class="self-btn signup-btn">Signup</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="banner-content">
                <div class="container">
                    <div class="heading-content">
                        <div class="heading-title">
                            <h1>Tools You Need to Beat the Pros</h1>
                        </div>
                        <div class="sub-heading-title">
                            <p>your number one source for all things daily fantasy sports.</p>
                        </div>
                    </div>
                    <div class="heading-btn">
                        <a href="#" class="self-btn get-started-btn">Get Started Free <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-conetent">
            <div class="client-section">
                <div class="container client-container">
                    <?php if( have_rows('repeater_field_name') ): ?>
                    <div class="row">
                        <?php while ( have_rows('repeater_field_name') ) : the_row(); ?>
                        <div class="col-md-3">
                            <figure class="client-image">
                                <img src="<?php the_sub_field('sub_field_name'); ?>" alt="client-image">
                            </figure>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class="feature-section">
            <?php if( have_rows('feature_section_repeater') ): ?>
                <div class="container feature-container">
                	  <?php while ( have_rows('feature_section_repeater') ) : the_row(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-image-section">
                                <figure class="feature-image">
                                    <img src="<?php the_sub_field('feature_image'); ?>" alt="feature image">
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-text-section">
                                <h2><?php the_sub_field('feature_title'); ?><span class="blue-dot">.</span></h2>
                                <p><?php the_sub_field('feature_description'); ?></p>
                            </div>
                        </div>
                    </div>
                     <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="all-the-tool-section">
                <div class="container">
                    <div class="all-tool-title">
                        <h3>All The Tools You Need To Beat The Pros</h3>
                    </div>
                    <?php if( have_rows('repeater_field_name') ): ?>
                    <div class="row">
                    	<?php while ( have_rows('repeater_field_name') ) : the_row(); ?>
                        <div class="col-md-4">
                            <div class="tool-content-wrap">
                                <div class="tool-content">
                                    <figure class="tool-logo">
                                        <img src="images/tool-icon.png" alt="tool icon">
                                    </figure>
                                    <div class="tool-text-content">
                                        <h4>Cash Game Core</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non eaque</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="free-btn-se">
                <a href="#" class="self-btn single-free-btn">Get Started Free <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="testimonial-section">
                <div class="container">
                    <h3>What Our Happy Users Say<span class="blue-dot">.</span></h3>
                     <?php if( have_rows('testimonial_repeater') ): ?>
                    <div class="row">
                    	 <?php while ( have_rows('testimonial_repeater') ) : the_row(); ?>
                        <div class="col-md-4">
                            <div class="testimonial-content">
                                <div class="testimonial-description">
                                    <p>
                                        <?php the_sub_field('testimonial_description'); ?>
                                    </p>
                                </div>
                                <div class="testomonial-name">
                                    <span><?php the_sub_field('testimonial_name'); ?></span>
                                </div>
                            </div>
                        </div>
                         <?php endwhile; ?>
                    </div>
                     <?php endif; ?>
                </div>
            </div>
        </div>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <figure class="footer-logo">
                            <img src="images/logo.png" alt="footer logo">
                        </figure>
                    </div>
                    <div class="col-md-3 col-sm-12"></div>
                    <div class="col-md-7 col-sm-12">
                        <div class="footer-menu">
                            <ul class="footer-ul">
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms of Service</a>
                                </li>
                                <li>
                                    <a href="#">Sitemap</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

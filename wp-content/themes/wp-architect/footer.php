<!-- Main Footer -->
<footer class="main-footer"
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/5.jpg);">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget about-widget">
                                <?php
                                // logo section
                                $footer_logo = get_field('footer_logo', 'option');
                                $footer_logo_url = wp_get_attachment_image_src($footer_logo, 'full');

                                $footer_description = get_field('description', 'option');

                                // Assuming $footer_logo_url[0] contains the URL of the logo image
                                $footer_logo_id = attachment_url_to_postid($footer_logo_url[0]);
                                $footer_logo_alt = get_post_meta($footer_logo_id, '_wp_attachment_image_alt', true);


                                $footer_description = get_field('footer_description', 'option');

                                // Contact Information
                                $contact_information = get_field('contact_us', 'option');
                                $address = $contact_information['address'];
                                $email = $contact_information['email_address'];
                                $number = $contact_information['contact_us'];
                                 
                                // copyright section
                                $copyright_text = get_field('copyright_text', 'option');

                                $social_links = get_field('social_links', 'option');
                                $facebook = $social_links['facebook_link'];
                                $instagram = $social_links['instagram_link'];
                                ?>
                                <?php if (!empty($footer_logo)): ?>
                                    <div class="footer-logo">
                                        <figure>
                                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                                <img src="<?php echo esc_url($footer_logo_url[0]); ?>"
                                                    alt="<?php echo esc_attr($footer_logo_alt); ?>">
                                            </a>
                                        </figure>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($footer_description)): ?>
                                    <div class="widget-content">
                                        <div class="text"><?php echo esc_html($footer_description); ?></div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Footer Column -->


                        <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget quick_link">
                                <h2 class="widget-title">Quick links</h2>
                                <div class="widget-content">

                                    <?php
                                    wp_nav_menu(array(
                                        'container' => false,
                                        'menu' => 'quick_links',
                                        'menu_class' => 'list',
                                    ));
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2 class="widget-title">Useful links</h2>
                                <div class="widget-content">

                                    <?php
                                    wp_nav_menu(array(
                                        'container' => false,
                                        'menu' => 'suppot_menu',
                                        'menu_class' => 'list',
                                    ));
                                    ?>

                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget gallery-widget">
                                <h2 class="widget-title">Contact Us</h2>
                                <div class="widget-content">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="cont">
                                                <p><?php echo $email ?></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="cont">
                                                <p><?php echo $number ?></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="cont">
                                                <p><?php echo $address ?></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="social-links">
                    <ul class="social-icon-two">
                        <li><a href="<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="<?php echo $instagram ?>"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                    </ul>
                </div>

                <div class="copyright-text">
                    <!-- Add your copyright text here -->
                    <a href="" target="_blank"><?php echo $copyright_text ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Main Footer -->

</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-o-up"></span></div>

</body>
<?php wp_footer(); ?>

</html>
<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<?php
// Header Section
$header_phone_number = get_field('header_phone_number', 'option');
$header_email = get_field('header_email', 'option');
$hero_slider = get_field("hero_slider");

// About Section

$about = get_field("about_section");

$specialization = get_field("specialization_slider");
$counter = get_field("counter_section");
$testimonial = get_field("testimonial_section");
$partners = get_field("partners_slider");

// Debugging: Print the entire group field to see its structure
// echo '<pre>';
// print_r($about);
// print_r($specialization);
// print_r($counter);
// print_r($testimonial);
// print_r($partners);
// echo '</pre>';
?>

<!-- Banner Section -->
<section class="banner-section">
    <div class="banner-carousel owl-carousel owl-theme">
        <?php if ($hero_slider): ?>
            <?php foreach ($hero_slider as $slider): ?>
                <div class="slide-item" style="background-image: url(<?php echo esc_url($slider['image']['url']); ?>)">
                    <div class="auto-container">
                        <div class="content-box">
                            <h2><?php echo esc_html($slider['title']); ?></h2>
                            <div class="text"><?php echo esc_html($slider['description']); ?></div>
                            <div class="link-box">
                                <a href="<?php echo esc_url($slider['button']['url']); ?>" class="theme-btn btn-style-one"><?php echo esc_html($slider['button']['title']); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <div class="bottom-box">
        <div class="auto-container clearfix">
            <ul class="contact-info">
                <li><span>Phone :</span> <?php echo esc_html($header_phone_number); ?></li>
                <li><span>EMAIL :</span> <a href="mailto:<?php echo esc_html($header_email); ?>"><?php echo esc_html($header_email); ?></a></li>
            </ul>
        </div>
    </div>
</section>
<!-- End Banner Section -->

<!-- About Section -->
<section class="about-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/1.jpg);">
    <div class="auto-container">
        <div class="row no-gutters">
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                        <h2>ABOUT <br> US</h2>
                    </div>
                    <div class="image-box">
                        <figure class="alphabet-img wow fadeInRight"><img src="<?php echo esc_url($about['image_one']['url']); ?>" alt=""></figure>
                        <figure class="image wow fadeInRight" data-wow-delay='600ms'><img src="<?php echo esc_url($about['image_two']['url']); ?>" alt=""></figure>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft">
                    <div class="content-box">
                        <div class="title">
                            <h2><?php echo esc_html($about['title']); ?></h2>
                        </div>
                        <div class="text"><?php echo esc_html($about['description']); ?></div>
                        <div class="link-box"><a href="<?php echo esc_url($about['button']['url']); ?>" class="theme-btn btn-style-one"><?php echo esc_html($about['button']['title']); ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Section -->

<!-- Services Section -->
<section class="services-section">
    <div class="upper-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/2.jpg);">
        <div class="auto-container">
            <div class="sec-title text-center light">
                <span class="float-text">Specialization</span>
                <h2>Our Specialization</h2>
            </div>
        </div>
    </div>

    <div class="services-box">
        <div class="auto-container">
            <div class="services-carousel owl-carousel owl-theme">
                <?php if ($specialization): ?>
                    <?php foreach ($specialization as $special): ?>
                        <!-- Service Block -->
                        <div class="service-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="service-detail.html"><img src="<?php echo esc_url($special['image']['url']); ?>" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="service-detail.html"><?php echo esc_html($special['title']); ?></a></h3>
                                    <div class="text"><?php echo esc_html($special['description']); ?></div>
                                    <div class="link-box">
                                        <a href="<?php echo esc_url($special['button']['url']); ?>"><?php echo esc_html($special['button']['title']); ?><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!--End Services Section -->

<!-- Fun Fact Section -->
<section class="fun-fact-section">
    <div class="outer-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/3.jpg);">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row">
                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000" data-stop="<?php echo esc_html($counter['counter_number_one']); ?>">0</span></div>
                            <h4 class="counter-title"><?php echo esc_html($counter['counter_text_one']); ?></h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000" data-stop="<?php echo esc_html($counter['counter_number_two']); ?>">0</span></div>
                            <h4 class="counter-title"><?php echo esc_html($counter['counter_text_two']); ?></h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000" data-stop="<?php echo esc_html($counter['counter_number_three']); ?>">0</span>K</div>
                            <h4 class="counter-title"><?php echo esc_html($counter['counter_text_three']); ?></h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000" data-stop="<?php echo esc_html($counter['counter_number_four']); ?>">0</span></div>
                            <h4 class="counter-title"><?php echo esc_html($counter['counter_text_four']); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Fun Fact Section -->

<!-- Project Section -->
<section class="projects-section">
    <div class="auto-container">
        <div class="sec-title text-right">
            <span class="float-text">Project</span>
            <h2>Our Project</h2>
        </div>
    </div>

    <div class="inner-container">
        <div class="projects-carousel owl-carousel owl-theme">
            <!-- Project Block -->
            <div class="project-block">
                <div class="image-box">
                    <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/1.jpg" alt=""></figure>
                    <div class="overlay-box">
                        <h4><a href="project-detail.html">Luxury Home <br>Project</a></h4>
                        <div class="btn-box">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                            <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                        </div>
                        <span class="tag">Architecture</span>
                    </div>
                </div>
            </div>

            <!-- Project Block -->
            <div class="project-block">
                <div class="image-box">
                    <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/2.jpg" alt=""></figure>
                    <div class="overlay-box">
                        <h4><a href="project-detail.html">Luxury Home <br>Project</a></h4>
                        <div class="btn-box">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                            <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                        </div>
                        <span class="tag">Architecture</span>
                    </div>
                </div>
            </div>

            <!-- Project Block -->
            <div class="project-block">
                <div class="image-box">
                    <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/3.jpg" alt=""></figure>
                    <div class="overlay-box">
                        <h4><a href="project-detail.html">Luxury Home <br>Project</a></h4>
                        <div class="btn-box">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                            <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                        </div>
                        <span class="tag">Architecture</span>
                    </div>
                </div>
            </div>

            <!-- Project Block -->
            <div class="project-block">
                <div class="image-box">
                    <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/4.jpg" alt=""></figure>
                    <div class="overlay-box">
                        <h4><a href="project-detail.html">Luxury Home <br>Project</a></h4>
                        <div class="btn-box">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                            <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                        </div>
                        <span class="tag">Architecture</span>
                    </div>
                </div>
            </div>

            <!-- Project Block -->
            <div class="project-block">
                <div class="image-box">
                    <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/5.jpg" alt=""></figure>
                    <div class="overlay-box">
                        <h4><a href="project-detail.html">Luxury Home <br>Project</a></h4>
                        <div class="btn-box">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                            <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                        </div>
                        <span class="tag">Architecture</span>
                    </div>
                </div>
            </div>

            <!-- Project Block -->
            <div class="project-block">
                <div class="image-box">
                    <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/3.jpg" alt=""></figure>
                    <div class="overlay-box">
                        <h4><a href="project-detail.html">Luxury Home <br>Project</a></h4>
                        <div class="btn-box">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                            <a href="project-detail.html"><i class="fa fa-external-link"></i></a>
                        </div>
                        <span class="tag">Architecture</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Project Section -->

<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Our Team</span>
            <h2>Professional Experts</h2>
        </div>

        <div class="row clearfix">
            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image"><a href="team.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/team-1.jpg" alt=""></a></div>
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                        <h3 class="name"><a href="team.html">Scott Grey</a></h3>
                    </div>
                    <span class="designation">Architect</span>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image"><a href="team.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/team-2.jpg" alt=""></a></div>
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                        <h3 class="name"><a href="team.html">Russel Reed</a></h3>
                    </div>
                    <span class="designation">Project Manager</span>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image"><a href="team.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/team-3.jpg" alt=""></a></div>
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                        <h3 class="name"><a href="team.html">Cheryl Ray</a></h3>
                    </div>
                    <span class="designation">Interior Designer</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Team Section -->

<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="outer-container clearfix">
        <!-- Title Column -->
        <div class="title-column clearfix">
            <div class="inner-column">
                <div class="sec-title">
                    <span class="float-text">testimonial</span>
                    <h2><?php echo esc_html($testimonial['title']); ?></h2>
                </div>
                <div class="text"><?php echo esc_html($testimonial['description']); ?></div>
            </div>
        </div>

        <!-- Testimonial Column -->
        <div class="testimonial-column clearfix" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/4.jpg);">
            <div class="inner-column">
                <div class="testimonial-carousel owl-carousel owl-theme">
                    <?php if ($testimonial['testimonial_slider']): ?>
                        <?php foreach ($testimonial['testimonial_slider'] as $test): ?>
                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="image-box"><img src="<?php echo esc_url($test['image']['url']); ?>" alt=""></div>
                                    <div class="text"><?php echo esc_html($test['description']); ?></div>
                                    <div class="info-box">
                                        <h4 class="name"><?php echo esc_html($test['name']); ?></h4>
                                        <span class="designation"><?php echo esc_html($test['designation']); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testimonial Section -->


<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <div class="sec-title">
            <span class="float-text">Blogs</span>
            <h2>News & Articles</h2>
        </div>
        <div class="row">
            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/news-1.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
                    </div>
                    <div class="caption-box">
                        <h3><a href="blog-detail.html">In Good Taste: Mark Finlay Architects & Interiors.</a></h3>
                        <ul class="info">
                            <li>06 June 2018,</li>
                            <li>John Smith</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/news-2.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
                    </div>
                    <div class="caption-box">
                        <h3><a href="blog-detail.html">The Luxury Apartment of Special Interiors.</a></h3>
                        <ul class="info">
                            <li>06 June 2018,</li>
                            <li>John Smith</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- News Block -->
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/news-3.jpg" alt=""></figure>
                        <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
                    </div>
                    <div class="caption-box">
                        <h3><a href="blog-detail.html">The Business Meeting Room Interior in the Rank.</a></h3>
                        <ul class="info">
                            <li>06 June 2018,</li>
                            <li>John Smith</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End News Section -->

<!--Clients Section-->
<section class="clients-section">
    <div class="inner-container">
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <?php if($partners) :?>
                <?php foreach($partners as $partner) :?>
                <li class="slide-item">
                    <figure class="image-box"><a href="<?php echo $partner['link']['url']?>"><img src="<?php echo $partner['image']['url']?>" alt=""></a></figure>
                </li>
                <?php endforeach;?>
                <?php endif;?>
            </ul>
        </div>
    </div>
</section>
<!--End Clients Section-->

<?php get_footer(); ?>

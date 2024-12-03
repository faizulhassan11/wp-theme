<?php
add_shortcode('ProjectSlider','project_post_shortcode');

function project_post_shortcode($atts) {
    $attributes = shortcode_atts( array(
		'title' => false,
		'limit' => 4,
	), $atts );
?>

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


</div>

<?php 

}
?>
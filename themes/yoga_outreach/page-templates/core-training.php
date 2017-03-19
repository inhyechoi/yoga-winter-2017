<?php 
/* Template Name: Core 
 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="core-hero-container">
				<header class = "general-template-section custom-hero-image">
					<h1 class ="page-title-header">
						<?php the_title(); ?>
					</h1>
					<div class ="general-button-container">
						<button class = "general-button teal-button">Core Training</button>
						<button class = "general-button grey-button">For Facilities</button>
					</div><!--general-button-container-->
				</header><!--general-template-section core-hero-->
            
			<section class ="section-15px-padding">
				<div class ="core-h3-container">
                	<p class="core-header">Yoga Outreach Core Training</p>
				</div><!--core-h3-container-->
				<button class ="book-training-button">Register Online</button>
					<p class ="small-para">- Yoga Alliance 24 Continuing Education Non-Contact hrs</p>
					<p class ="small-para">- BCRPA Continuing Education Credits</p>
				<div class ="avail-online-heading-container">
					<img src ="<?php echo get_template_directory_uri(); ?>/images/earth_icon.svg" class = "earth-logo"alt ="earth_icon">
					<h3 class ="avail-online-h3">available online and in-classroom format!</h3>
				</div>
				<p class = "light-training-para"><?php echo CFS()->get('light_training_para'); ?></p>
				<p class = "dark-training-para"><?php echo CFS()->get('dark_training_para'); ?></p>
			</section><!--section-15px-padding-->
			<div class ="testimonal-container">
				<ul class ="testimonial-list main-carousel">
					<?php
					$testimonials = CFS()->get('testimonial_item');
					foreach ( $testimonials as $testimonial): ?>
					<li class ="carousel-cell"><?php echo $testimonial ['testimonial'];?></li>
					<?php endforeach ?>
				</ul>
			</div>
			<section class ="section-15px-padding dates-section">
			<div class ="icon-heading-container">
				<img src="<?php echo get_template_directory_uri(); ?>/images/earth_icon.svg" class = "earth-logo" alt = "earth_icon">
				<h3><?php echo CFS()->get('training_date_header'); ?></h3>
			</div>
			<ul class ="training-list-header">
				<?php $dates = CFS()->get('date_container');?>
				<?php foreach ($dates as $date):?>
				<li>
					<p class ="training-date-text">Date<span><?php echo $date ['training_date'];?></span></p>
					<p class ="training-date-text">Price<span><?php echo $date ['training_price'];?></span></p>
				</li>
				<?php endforeach ?>
			</ul>
				<p>Now you can take the training online in an eight week format.</p>
				<p>This 8 week online training is comprised of weekly videos, reading, assignments and online interaction. Each week is a new section and will build on the previous . . .</p>
			</section>
			<section class ="18-hour-core-section section-15px-padding">
				<div class ="core-training-text-image-container">
					<img src="<?php echo get_template_directory_uri(); ?>/images/house_icon.svg" class ="house-logo" alt="house logo">
					<h3>2017 Training Dates Classroom (18 hours)</h3>
				</div>
				<table class ="full-time-training-table">
					<tr>
						<td>
							<span class ="table-heading">Date</span><span class ="table-content">March 17 - 19, 2017</span>
						</td>
						<td>
							<span class ="table-heading">Location</span><span class ="table-content">Croatian Cultural Centre 3250 Commercial Drive, Vancouver, BC</span>
						</td>
						<td>
							<span class ="table-heading">Price (CAD)</span><span class ="table-content">$360.00</span>
						</td>
					</tr>
				</table>
			</section>
			
			<ul class = "training-list">
				<li class="training-list-item">Learning Objectives</li>
				<li class="training-list-item">Work-study Option for up to 50% off tuition</li>
				<li class="training-list-item">Refund Policy</li>
				<li class="training-list-item">Register for Next Class</li>
			</ul>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

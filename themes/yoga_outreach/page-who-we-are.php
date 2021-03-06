<?php
/**
 * The template for displaying who we are page.
 *
 * @package Yoga_Outreach_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area who-we-are-content">
        <div class="staff-popup">
            <img class="exit-button" src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-x.svg"/>
            <div class="popup-description"></div>
        </div><!--staff-popup-->
		<main id="main" class="site-main" role="main">
            <header class="entry-header custom-hero-image">
                <div class="hero-text">
                    <?php // TO SHOW THE PAGE CONTENTS
                    while ( have_posts() ) : the_post(); ?> <!--the_content() works only inside a WP Loop -->
                        <h1 class="header-title"><?php the_title(); ?></h1>
                        <?php the_content(); ?> <!-- Page Content -->
                    <?php
                    endwhile; //resetting the page loop
                    wp_reset_query(); //resetting the page query
                    ?>
                </div><!--hero-text-->
            </header>
            
            <section class="team">
                <div class="teamheader">
                    <h2>The YO Team</h2>
                    <p>Click on name for bio and contact info.</p>
                </div> <!--teamheader-->

                <?php $fields= CFS()->get( 'staff_groups' ); ?>  <!--variable to hold staff from loop-->    
                <?php if(!empty($fields)): ?>
                    <?php foreach( $fields as $field ): ?>
                        <div class="info-dropdown">
                            <h3 class ="staff-header"><?php echo $field[ 'title' ]; ?></h3><span>+</span>
                        </div><!--info-dropdown-->
                            
                        <div class="info-field staff-item-container">
                            <?php if(!empty($field['staff_member'])): ?>
                                <?php foreach( $field['staff_member'] as $member): ?>
                                    <?php echo esc_html(CFS()->get( 'staff_photo','staff_name' )); ?>
                                    <div class="member-contain">
                                        <img src="<?php echo $member['staff_photo']; ?>" alt="staff photo" class="staffphoto">
                                        <a href=""><?php echo $member['staff_name'] ?></a>
                                        <p class="staff-info"><?php echo $member['staff_position']; ?></p>
                                        <p class="staff-info"><?php echo $member['staff_email']; ?></p>
                                        <div class="accent-name-shape"></div>
                                        <p class="staff-description"><?php echo $member['staff_description']; ?></p>
                                    </div> <!-- member-contain -->
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div> <!--info-field staff-item-container-->
                    <?php endforeach; ?>
                <?php endif; ?>
            </section><!--team-->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>

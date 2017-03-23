<?php 
/*Template Name: Blog

 * @package Yoga_Outreach
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class = "general-template-section blog-header">

            <div class="carousel"
                data-flickity='{ "accessibility": true }'>
                <div class="carousel-cell">
                    <img src="" alt="">
                    <h2>hello</h2>
                    <p>hi</p>
                    <p>bye</p>
                </div>
            </div>

            


            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'large' ); ?>
                    <?php endif; ?>

                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                    <?php if ( 'post' === get_post_type() ) : ?>
                        <div class="entry-meta">
                            <?php the_date('m-d-Y', '<h2>', '</h2>'); ?>
                        </div><!-- .entry-meta -->
                    <?php endif; ?>
                    
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-content -->

            </article><!-- #post-## -->

			</header><!--general-template-section-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
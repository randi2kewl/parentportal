<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
                    
                    <?php if (is_page('Home')){ ?>
                    
                    <h1>Slide Mode Simple</h1>
                    <div class="red">
                        <div id="tile1" class="live-tile">
                            <span class="tile-title">Latest News</span>
                            <!-- adding the 'full' class to an 'img' or 'a' tag causes it to fill the entire tile -->
                            <div><a class="full" href="#">front</a></div>
                            <div><p>Get the latest information important for YOU!</p></div>
                        </div>
                        
                        <div id="tile2" class="live-tile blue" data-direction="horizontal">       
                            <span class="tile-title">Online Registration</span>
                                 <div>front</div>
                                 <div><p>Get a jump on your child's registration</p></div>
                             </div>
                         </div>
                    
                         <div id="tile3" class="live-tile blue" data-direction="horizontal">       
                            <span class="tile-title">Free & Reduced Lunch</span>
                                 <div>front</div>
                                 <div><p>Sign up for meal applications here.</p></div>
                             </div>
                         </div>
                    
                         <div id="tile4" class="live-tile blue" data-direction="horizontal">       
                            <span class="tile-title">Meal Pay Accounts</span>
                                 <div>front</div>
                                 <div><p>Track balances and make payments</p></div>
                             </div>
                         </div>

                        <div id="tile4" class="live-tile blue" data-direction="horizontal">       
                            <span class="tile-title">Student Information</span>
                                 <div>front</div>
                                 <div><p>Log into your parent portal to get grades, attendance, and much more!</p></div>
                             </div>
                         </div>
                    
                         <div id="tile5" class="live-tile blue" data-direction="horizontal">       
                            <span class="tile-title">Contact Us</span>
                                 <div>front</div>
                                 <div><p>Send an email direct to your teacher or school administrators</p></div>
                             </div>
                         </div>
                         
                         <div id="tile6" class="live-tile blue" data-direction="horizontal">       
                            <span class="tile-title">Bus Routes</span>
                                 <div>front</div>
                                 <div><p>Links and information for everything you need to know about bussing for your child.</p></div>
                             </div>
                         </div>
                         
                         <div id="tile7" class="live-tile blue" data-direction="horizontal">       
                            <span class="tile-title">School Clusters</span>
                                 <div>front</div>
                                 <div><p>Learn about our regions and how schools are clustered.</p></div>
                             </div>
                         </div>
                         
                    <div class="clear">
                        &nbsp;
                    </div>
                    <script src="metrojs/MetroJs.js" type="text/javascript"></script>
                    <script type="text/javascript">
                        // apply regular slide universally unless .exclude class is applied
                        // NOTE: The default options for each liveTile are being pulled from the 'data-' attributes
                        jQuery(document).ready(function () {
                            jQuery(".live-tile,.flip-list").liveTile();
                        });
                    </script>
                    
                    <?php } else { ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>
                                
                    <?php } ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
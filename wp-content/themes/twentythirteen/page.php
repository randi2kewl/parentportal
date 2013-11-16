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
                    
                    <div class="tiles" style="margin:20px">
                        
                        <h1>Welcome To APS Parent Portal</h1>
                            
                        <a href="<?php echo get_site_url(); ?>/online-registration/">
                            <div id="tile2" style="width:300px;" class="live-tile blue" data-direction="horizontal" data-mode="flip" data-initdelay="2000">       
                                <span class="tile-title">Online Registration</span>
                                     <div><img src="images/newchild.fw.png"></div>
                                     <div><p>Get a jump on your child's registration</p></div>
                             </div>
                        </a>
                            
                            <div id="tile1" class="live-tile red">
                                <span class="tile-title">Latest News</span>
                                <!-- adding the 'full' class to an 'img' or 'a' tag causes it to fill the entire tile -->
                                <div><img src="images/news.fw.png"></div>
                                <div><p>Get the latest information important for YOU!</p></div>
                            </div>
                        
                             <div id="tile3" class="live-tile mango" data-direction="horizontal" data-mode="flip" data-initdelay="7000">       
                                <span class="tile-title">Free & Reduced Lunch</span>
                                     <div><img src="images/mealapp.fw.png"></div>
                                     <div><p>Sign up for meal applications here.</p></div>
                             </div>

                             <div id="tile4" class="live-tile cyan" data-direction="horizontal" data-mode="flip" data-initdelay="3500">       
                                <span class="tile-title">Your Accounts</span>
                                     <div><img src="images/moneyaccount.fw.png"></div>
                                     <div><p>Track balances and put money in YOUR ACCOUNT</p></div>
                             </div>

                        <a href="https://ic.apsk12.org/campus/portal/atlanta.jsp">
                            <div id="tile4" class="live-tile olive" data-direction="horizontal" data-mode="flip" data-initdelay="8000">       
                                <span class="tile-title">Student Information</span>
                                     <div><img src="images/studentinfo.fw.png"></div>
                                     <div><p>Log into your parent portal to get grades, attendance, and much more!</p></div>
                             </div>
                        </a>

                             <div id="tile5" class="live-tile mango" data-direction="horizontal" data-mode="flip" data-initdelay="600">       
                                <span class="tile-title">Contact Us</span>
                                     <div><img src="images/contact.fw.png"></div>
                                     <div><p>Send an email direct to your teacher or school administrators</p></div>
                             </div>
                             
                        <a href="http://www.atlantapublicschools.us/transportation">
                             <div id="tile6" class="live-tile blue" data-initdelay="1500" style="">       
                                <span class="tile-title">Bus Routes</span>
                                     <div><img src="images/bus.fw.png"></div>
                                     <div><p>Links and information for everything you need to know about bussing for your child.</p></div>
                             </div>
                        </a>
                        
                            <div class="list-tile mango">
                                <span class="tile-title"></span>
                                <ul class="flip-list fourTiles" data-mode="flip-list" data-delay="2000">
                                    <li>
                                        <div>Student Handbook</div>
                                        <div></div>
                                    </li>
                                    <li>
                                        <div></div>
                                        <div>Transfers Child</div>
                                    </li>
                                    <li>
                                        <div>Student Services</div>
                                        <div></div>
                                    </li>
                                    <li data-direction="horizontal">
                                        <div></div>
                                        <div>Withdraw Child</div>
                                    </li>
                                </ul>
                            </div>

                             <div id="tile7" class="live-tile olive" data-initdelay="2000">       
                                <span class="tile-title">School Clusters</span>
                                     <div><img src="images/cluster.fw.png"></div>
                                     <div><p>Learn about our regions and how schools are clustered.</p></div>
                             </div>
                        
                        <a href="https://www.facebook.com/AtlantaPublicSchools">
                             <div id="tile8" class="live-tile blue" data-initdelay="2000">       
                                <span class="tile-title"></span>
                                     <div><img src="images/facebook.fw.png"></div>
                                     <div><p>Keep informed and up to date with Facebook!</p></div>
                             </div>
                        </a>    

                            <div id="tile9" class="live-tile green" data-initdelay="2000">       
                                <span class="tile-title"></span>
                                     <div></div>
                                     <div><p>Report Cards & Grades</p></div>
                             </div>
                        
                        <div class="clear" style="margin-bottom:30px;">
                            &nbsp;<br><br>
                        </div>

                    </div>
                    
                    
                    <script src="metrojs/MetroJs.js" type="text/javascript"></script>
                    <script type="text/javascript">
                        // apply regular slide universally unless .exclude class is applied
                        // NOTE: The default options for each liveTile are being pulled from the 'data-' attributes
                        jQuery(document).ready(function () {
                            jQuery(".live-tile,.flip-list").liveTile();
                        });
                    </script>
                    
                    
                    
                    
                    <footer class="appbar">
                        <nav>
                        <ul id="menu" class="appbar-buttons">
                            <li>
                                <a href="#" class="home"><img src="metrojs/images/1pixel.gif" alt="home" /></a>
                                
                            </li>
<!--                            <li>
                                <a href="#" class="about"><img src="<?php // echo get_site_url(); ?>images/1pixel.gif" alt="about" /></a>
                                <span class="charm-title">About</span>
                            </li>
                            <li>
                                <a href="#" target="_blank" class="twitter"><img src="<?php // echo get_site_url(); ?>images/1pixel.gif" alt="twitter" /></a>
                                <span class="charm-title">Twitter</span>
                            </li>-->
                        </ul>
                    </nav>
                    <a class="etc">&bull;&bull;&bull;</a>
                    <ul class="theme-options clear">

                    </ul>
                    <ul class="base-theme-options clear">    
                    </ul>
                </footer>
                <script type="text/javascript">
                        var appBar, metroJs;
                        $(document).ready(function(){
                            appBar = $(".appbar").applicationBar({
                                preloadAltBaseTheme: true,
                                bindKeyboard: true,
                                metroLightUrl: '<?php echo get_site_url(); ?>images/metroIcons_light.jpg',
                                metroDarkUrl: '<?php echo get_site_url(); ?>images/metroIcons.jpg'
                            });
                            // append the theme options
                            metroJs = jQuery.fn.metrojs;
                            metroJs.theme.appendAccentColors({
                                accentListContainer: ".theme-options"
                            });
                            metroJs.theme.appendBaseThemes({
                                baseThemeListContainer: ".base-theme-options"
                            });
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
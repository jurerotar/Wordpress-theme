<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jure\'s_blog
 */

get_header();

function changeImageExtension(string $url, string $requestedExtension = 'jpg'):string {
	return explode('.', $url)[0] . ".$requestedExtension";
}

/**
 * Used for top link
 */
$latestPost = wp_get_recent_posts(array(
	'numberposts' => 1,
	'post_status' => 'publish'
));

/**
 * Used for featured
 */
$featuredPost = new WP_Query(array(
	'posts_per_page' => 1,
	'meta_key' => 'meta-checkbox',
	'meta_value' => 'yes'
));

/**
 * Shows the 'updated' or 'new' notification on the top of the post container
 */
$daysNew = 7;
$timePosted = get_the_time( 'U' );
$timeModified = get_the_modified_time( 'U' );
/**
 * Display container if post is either new or updated
 */
if ($timePosted !== $timeModified || (floor((time() - $timePosted) / (60*60*24)) < $daysNew)) {
	$stateContainer = '<div class = "posts__stateContainer posts__stateContainer--featured">';
	/**
	 * Show updated notification
	 */
	if($timePosted !== $timeModified) {
		$stateContainer .= '<span class = "posts__state posts__state--new">Updated</span>';
	}
	/**
	 * Show new notification
	 */
	if(floor((time() - $timePosted) / (60*60*24)) < $daysNew) {
		$stateContainer .= '<span class = "posts__state posts__state--new">New</span>';
	}
	$stateContainer .= '</div>';
}


?>
<header class = "featured">
	<div class = "background__container" role="presentation">
			<div class = "background__element--1-1" role="presentation"></div>
			<div class = "background__element--1-2" role="presentation"></div>
			<div class = "background background__gradient--1" role="presentation"></div>
		</div>
	<section class = "featured__index--wrapper max-width <?php if(isset($stateContainer)) echo('featured__index--wrapper--notificationsEnabled') ?>">
		<a href = "<?php echo get_permalink($latestPost[0]['ID']) ?>" hreflang = "en" class = "featured__newPost">
			<span class = "featured__pill--new" role="presentation">New</span>
			Read the latest post &ldquo;<?php echo($latestPost[0]['post_title']); ?>&rdquo;
			<svg version="1.1" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1500px" height="1000px" viewBox="0 0 1500 1000" enable-background="new 0 0 1500 1000" xml:space="preserve" class = "featured__svg--chevronRight"><path fill="#FFFFFF" d="M995.07,533.146L615.492,912.723c-18.307,18.307-47.986,18.307-66.291,0l-44.271-44.271c-18.275-18.275-18.311-47.895-0.078-66.213L805.674,500L504.852,197.764c-18.232-18.318-18.197-47.938,0.078-66.213l44.271-44.271c18.307-18.307,47.986-18.307,66.291,0l379.576,379.576C1013.375,485.16,1013.375,514.84,995.07,533.146z"/></svg>
		</a>
		<div class = "featured__index--1" role="">
			<p class = "featured__text--featuredPost">Featured post</p>
			<?php
			$featuredPost->the_post();
			if(isset($stateContainer)) {
				echo($stateContainer);
			}
			?>
			<h1>
				<a class = "featured__heading featured__heading--main" href = "<?php the_permalink(); ?>" hreflang = "en"><?php the_title(); ?></a>
			</h1>
			<div class = "featured__index--1-1" role="heading">
				<div class = "featured__index--1-1-1">
					<p class = "featured__text--summary">&ldquo;
						<?php echo(get_the_excerpt(get_the_ID())); ?>&rdquo;
					</p>
					<div class = "featured__readMore">
						<a href = "<?php the_permalink(); ?>" hreflang = "en" class = "featured__ctaButton">Continue reading...</a>
					</div>
				</div>
				<div class = "featured__index--1-1-2">
				</div>
			</div>
		</div>
	</section>
</header>
<section class = "postsSection max-width">
	<?php
	if ( have_posts() ) :

		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			/*
				* Include the Post-Type-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Type name) and that will be used instead.
				*/
			get_template_part( 'template-parts/content', get_post_type() );

		endwhile;
	endif;
	?>
</section>

<?php
get_sidebar();
get_footer();

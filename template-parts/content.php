<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jure\'s_blog
 */

?>
<article class = "posts__article">
	<?php
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
		$stateContainer = '<div class = "posts__stateContainer">';
		/**
		 * Show updated notification
		 */
		if($timePosted !== $timeModified) {
			$stateContainer .= '<span class = "posts__state posts__state--updated">Updated</span>';
		}
		/**
		 * Show new notification
		 */
		if(floor((time() - $timePosted) / (60*60*24)) < $daysNew) {
			$stateContainer .= '<span class = "posts__state posts__state--new">New</span>';
		}
		$stateContainer .= '</div>';
	}
	if(isset($stateContainer)) {
		echo($stateContainer);
	}
	?>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1>', '</h1>' );
		else :
			the_title('<h2><a class = "posts__heading--main" href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
		endif;

		if (get_post_type() === 'post') :
			?>
			<p class = "posts__text--summary">
				<?php echo(get_the_excerpt(get_the_ID())); ?>
			</p>
			<div class = "posts__authorContainer">
			<?php
			$userPhotoLinkArray = explode(',', get_post_meta(get_the_ID(), 'user_custom_photo')[0]);
			$userPhotoLinkWebP = $userPhotoLinkArray[0];
			$userPhotoLinkJpg = $userPhotoLinkArray[1];
			?>
			<picture class = "posts__userPhoto">
				<source srcset="<?php echo($userPhotoLinkWebP) ?>" type="image/webp">
				<img src="<?php echo($userPhotoLinkJpg) ?>" alt="<?php the_author() ?>">
			</picture>	
			<div class = "posts__details">		
				<?php jure_rotar_posted_by(); ?>
				<div class = "posts__postDate">
				<?php jure_rotar_posted_on(); ?>
				</div>
			</div>
		<?php endif; ?>
	</header>

	<footer class="posts__tagContainer">
		<?php jure_rotar_entry_footer(); ?>
	</footer>
</article>

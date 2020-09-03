<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Jure\'s_blog
 */

if ( ! function_exists( 'jure_rotar_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function jure_rotar_posted_on() {
		$time_string = '<time class="posts__text--posted" datetime="%1$s"><span>Posted</span> on %2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="posts__text--updated" datetime="%3$s"><span>Updated</span> on %4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		echo $time_string; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'jure_rotar_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function jure_rotar_posted_by(string $url = '') {
		echo '<span class="posts__text--name"> ' . esc_html(get_the_author()) . '</span>'; // WPCS: XSS OK.
	}
endif;

if (!function_exists( 'jure_rotar_entry_footer' )) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function jure_rotar_entry_footer() {
		// Hide category and tag text for pages.
		if (get_post_type() === 'post') {
			$tags = get_tags();
			$tagOutput = "<ul class = 'posts__tagList'>";
			if ( $tags ) :
				foreach ( $tags as $tag ) :
					$tagOutput .= "
						<li class = 'posts__tag'>
							<a href='".esc_url( get_tag_link( $tag->term_id ) ) ."'>#".esc_html( $tag->name )."</a>
						</li>";
				endforeach;
			endif;
			$tagOutput .= "</ul>";
			echo($tagOutput);
		}
	}
endif;


<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jure\'s_blog
 */

?>
</main>
<?php 
wp_footer();
$installationPath = 'http://localhost/portfolio/';

/**
 * On post pages load prism.css
 */
if(is_single()) {
	$postImports = "<script src = '{$installationPath}assets/scripts/prism.js'></script>";
	echo($postImports);
}
?>
<script src = "<?php echo($installationPath) ?>assets/scripts/blog.js"></script>
</body>
</html>

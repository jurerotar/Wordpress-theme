<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jure\'s_blog
 */

$installationPath = 'http://localhost/portfolio/';

/**
 * On first visit, set the color mode cookie to lightMode
 */
if(!isset($_COOKIE["ColormodePreference"])) {
    setcookie("ColormodePreference", "LightMode", time() + (86400 * 365), "/");    
}
?>
<!doctype html>
<html <?php language_attributes(); ?> data-color-scheme = "<?php echo($_COOKIE["ColormodePreference"]);?>">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136334602-1"></script>
    <script>function GA(trackingEnabled = true){window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag("js", new Date());if(trackingEnabled) gtag("config", "UA-136334602-1");else gtag("config", "UA-136334602-1", {'anonymize_ip': true})}
    <?php
	/**
	 * If user accepts cookies, do not anonymize IP
	 */
    if(isset($_COOKIE["PotrditevPiskotkov"]) && $_COOKIE["PotrditevPiskotkov"] === '1') echo('GA(true);');
    else if(isset($_COOKIE["PotrditevPiskotkov"]) && $_COOKIE["PotrditevPiskotkov"] === '0') echo('GA(false);');
    ?>
    </script>
	<meta name="google-site-verification" content="NX1M3HeEiGTsOirpkZ5sgYULbcXo4GQ4uYRfv5A-dF8">
	<?php
	/**
	 * On post pages load prism.css
	 */
	if(is_single()) {
		$postImports = "<link rel='stylesheet' type='text/css' href='{$installationPath}assets/css/prism.css'>";
		echo($postImports);
	}
	if(is_home()) echo('');
	?>
	<?php wp_head(); ?>
	<link rel='stylesheet' type='text/css' href='<?php echo($installationPath) ?>assets/css/blog.css'>
	<script>document.addEventListener("DOMContentLoaded",function(){let lazyloadImages;if("IntersectionObserver"in window){lazyloadImages=document.querySelectorAll(".lazy");let imageObserver=new IntersectionObserver(function(entries,observer){entries.forEach(function(entry){if(entry.isIntersecting){let image=entry.target;image.src=image.dataset.src;image.classList.remove("lazy");imageObserver.unobserve(image)}})});lazyloadImages.forEach(function(image){imageObserver.observe(image)})}else{let lazyloadThrottleTimeout;lazyloadImages=document.querySelectorAll(".lazy");function lazyload(){if(lazyloadThrottleTimeout){clearTimeout(lazyloadThrottleTimeout)}lazyloadThrottleTimeout=setTimeout(function(){let scrollTop=window.pageYOffset;lazyloadImages.forEach(function(img){if(img.offsetTop<(window.innerHeight+scrollTop)){img.src=img.dataset.src;img.classList.remove('lazy')}});if(lazyloadImages.length==0){document.removeEventListener("scroll",lazyload);window.removeEventListener("resize",lazyload);window.removeEventListener("orientationChange",lazyload)}},20)}document.addEventListener("scroll",lazyload);window.addEventListener("resize",lazyload);window.addEventListener("orientationChange",lazyload)}});</script>
</head>
<body <?php body_class(); ?>>
<header class = "header">
	<nav class = "max-width header__widescreen">
		<a href="https://jurerotar.si/" class="header__logoWrapper" aria-label = "Jure Rotar">
			<img class = "header__logo" src = "<?php echo($installationPath)?>assets/img/logo.svg" alt = "Jure Rotar Logo" aria-hidden = "false">
			<h3 class = "header__name">Jure Rotar</h3>
		</a>
		<div class="nav" role="navigation">
			<div class="nav__bg-wrapper" role="presentation">
				<div class="nav__bg" role="presentation">
				</div>
			</div>
			<ul class="nav__sections">
				<li class="nav__section">
					<p class="nav__extendableTrigger">About</p>
					<ul class="nav__links">
						<li class="nav__item">
							<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
								<span class = "nav__icon nav__icon--blue" role="presentation"></span>
								<div class = "nav__column" role="presentation">
									<p class = "nav__title">Burek</p>
									<p class = "nav__subtitle">to je pač daljši opis</p>
								</div>
							</a>
						</li>
						<li class="nav__item">
							<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
								<span class = "nav__icon nav__icon--blue" role="presentation"></span>
								<div class = "nav__column" role="presentation">
									<p class = "nav__title">Burek</p>
									<p class = "nav__subtitle">to je pač daljši opis</p>
								</div>
							</a>
						</li>
						<li class="nav__item">
							<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
								<span class = "nav__icon nav__icon--blue" role="presentation"></span>
								<div class = "nav__column" role="presentation">
									<p class = "nav__title">Burek</p>
									<p class = "nav__subtitle">to je pač daljši opis</p>
								</div>
							</a>
						</li>
						<li class="nav__item">
							<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
								<span class = "nav__icon nav__icon--blue" role="presentation"></span>
								<div class = "nav__column" role="presentation">
									<p class = "nav__title">Burek</p>
									<p class = "nav__subtitle">to je pač daljši opis</p>
								</div>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav__section">
					<p class="nav__extendableTrigger">Game</p>
					<ul class="nav__links">
						<li class="nav__item">
							<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
								<span class = "nav__icon nav__icon--green" role="presentation"></span>
								<div class = "nav__column" role="presentation">
									<p class = "nav__title">Burek</p>
									<p class = "nav__subtitle">to je pač daljši opis</p>
								</div>
							</a>
						</li>
						<li class="nav__item">
							<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
								<span class = "nav__icon nav__icon--green" role="presentation"></span>
								<div class = "nav__column" role="presentation">
									<p class = "nav__title">Burek</p>
									<p class = "nav__subtitle">to je pač daljši opis</p>
								</div>
							</a>
						</li>
						<li class="nav__item">
							<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
								<span class = "nav__icon nav__icon--green" role="presentation"></span>
								<div class = "nav__column" role="presentation">
									<p class = "nav__title">Burek</p>
									<p class = "nav__subtitle">to je pač daljši opis</p>
								</div>
							</a>
						</li>
						<li class="nav__item">
							<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
								<span class = "nav__icon nav__icon--green" role="presentation"></span>
								<div class = "nav__column" role="presentation">
									<p class = "nav__title">Burek</p>
									<p class = "nav__subtitle">to je pač daljši opis</p>
								</div>
							</a>
						</li>
						<li class="nav__item">
							<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
								<span class = "nav__icon nav__icon--green" role="presentation"></span>
								<div class = "nav__column" role="presentation">
									<p class = "nav__title">Burek</p>
									<p class = "nav__subtitle">to je pač daljši opis</p>
								</div>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav__section">
					<p class="nav__extendableTrigger">Community</p>
					<ul class="nav__links">
						<li class="nav__item">
							<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
								<span class = "nav__icon nav__icon--red" role="presentation"></span>
								<div class = "nav__column" role="presentation">
									<p class = "nav__title">Burek</p>
									<p class = "nav__subtitle">to je pač daljši opis</p>
								</div>
							</a>
						</li>
						<li class="nav__item">
							<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
								<span class = "nav__icon nav__icon--red" role="presentation"></span>
								<div class = "nav__column" role="presentation">
									<p class = "nav__title">Burek</p>
									<p class = "nav__subtitle">to je pač daljši opis</p>
								</div>
							</a>
						</li>
						<li class="nav__item">
							<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
								<span class = "nav__icon nav__icon--red" role="presentation"></span>
								<div class = "nav__column" role="presentation">
									<p class = "nav__title">Burek</p>
									<p class = "nav__subtitle">to je pač daljši opis</p>
								</div>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<nav class = "header__mobile">
		<a href="https://jurerotar.com/" class="header__logoWrapper" aria-label = "Jure Rotar Logo">
			<img class = "header__logo" src = "<?php echo($installationPath)?>assets/img/logo.svg" alt = "Jure Rotar Logo" aria-hidden = "false">
			<h3 class = "header__name">Jure Rotar</h3>
		</a>
		<button class = "button__naviExtendable" data-navigation-extendable = "closed">
			<svg version="1.1" class = "navigation-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 384.97 384.97" xml:space="preserve">
				<path d="M12.03,120.303h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03 c-6.641,0-12.03,5.39-12.03,12.03C0,114.913,5.39,120.303,12.03,120.303z"/>
				<path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03 S379.58,180.455,372.939,180.455z"/>
				<path d="M372.939,264.667H132.333c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h240.606 c6.641,0,12.03-5.39,12.03-12.03C384.97,270.056,379.58,264.667,372.939,264.667z"/>
			</svg>
		</button>
		<ul class = "header__mobileExtendable" role="menu">
			<li class="nav__item">
				<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
					<span class = "nav__icon nav__icon--blue" role="presentation"></span>
					<div class = "nav__column" role="presentation">
						<p class = "nav__title">Burek</p>
						<p class = "nav__subtitle">to je pač daljši opis</p>
					</div>
				</a>
			</li>
			<li class="nav__item">
				<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
					<span class = "nav__icon nav__icon--blue" role="presentation"></span>
					<div class = "nav__column" role="presentation">
						<p class = "nav__title">Burek</p>
						<p class = "nav__subtitle">to je pač daljši opis</p>
					</div>
				</a>
			</li>
			<li class="nav__item">
				<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
					<span class = "nav__icon nav__icon--blue" role="presentation"></span>
					<div class = "nav__column" role="presentation">
						<p class = "nav__title">Burek</p>
						<p class = "nav__subtitle">to je pač daljši opis</p>
					</div>
				</a>
			</li>
			<li class="nav__item">
				<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
					<span class = "nav__icon nav__icon--blue" role="presentation"></span>
					<div class = "nav__column" role="presentation">
						<p class = "nav__title">Burek</p>
						<p class = "nav__subtitle">to je pač daljši opis</p>
					</div>
				</a>
			</li>
			<li class="nav__item">
				<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
					<span class = "nav__icon nav__icon--blue" role="presentation"></span>
					<div class = "nav__column" role="presentation">
						<p class = "nav__title">Burek</p>
						<p class = "nav__subtitle">to je pač daljši opis</p>
					</div>
				</a>
			</li>
			<li class="nav__item">
				<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
					<span class = "nav__icon nav__icon--blue" role="presentation"></span>
					<div class = "nav__column" role="presentation">
						<p class = "nav__title">Burek</p>
						<p class = "nav__subtitle">to je pač daljši opis</p>
					</div>
				</a>
			</li>
			<li class="nav__item">
				<a href="#0" hreflang = "{{ head.metaLang }}" tabindex="-1">
					<span class = "nav__icon nav__icon--blue" role="presentation"></span>
					<div class = "nav__column" role="presentation">
						<p class = "nav__title">Burek</p>
						<p class = "nav__subtitle">to je pač daljši opis</p>
					</div>
				</a>
			</li>
		</ul>
	</nav>
</header>

<main class = "main">

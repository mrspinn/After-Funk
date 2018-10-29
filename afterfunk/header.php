<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class='bgBlueOverlay'>
	<div id="page" class="site">
	<div class='logoDiv'>
		<a href="https://afterfunk.ca">
			<img class="logo" src="https://afterfunk.ca/wp-content/uploads/2018/07/logowblackstroke.png" alt="After Funk Logo">
		</a>
	</div>
	<?php
		wp_nav_menu( array( 
			'menu' => 'Nav', 
			'container_class' => 'custom-nav white',
			// 'menu_class' => 'custom-nav',
			'depth' => '1',
			'sort_column' => 'menu_order' 
		) );
	?>
	<div class="social-links-topright">
		<a href="https://www.facebook.com/AfterFunk" class="socLink fab fa-facebook">
			<span class="tooltiptext">Facebook</span>
		</a>
		<a href="https://www.youtube.com/user/TheAfterfunk" class="socLink fab fa-youtube">
			<span class="tooltiptext">Youtube</span>
		</a>
		<a href="https://www.instagram.com/afterfunk" class="socLink fab fa-instagram">
			<span class="tooltiptext">Instagram</span>
		</a>
		<a href="https://www.twitter.com/afterfunk" class="socLink fab fa-twitter">
			<span class="tooltiptext">Twitter</span>
		</a>
		<a href="https://open.spotify.com/artist/1ZbLnPZZkTGiSJuq6Mk9vl?si=aSlGVQO_RwyfshrlLNAPQQ" class="socLink fab fa-spotify">
			<span class="tooltiptext">Spotify</span>
		</a>
		<a href="mailto:afterfunk.info@gmail.com" class="socLink fab fa-itunes-note">
			<span class="tooltiptext">iTunes</span>
		</a>
		<a href="mailto:afterfunk.info@gmail.com" class="socLink far fa-envelope">
			<span class="tooltiptext">Email</span>
		</a>
	</div>
	<div id="socLinksCenter" class="social-links-center" style="display: none">
		<a href="https://www.facebook.com/AfterFunk" target="_blank" class="socLink fab fa-facebook">
			<span class="tooltiptext">Facebook</span>
		</a>
		<a href="https://www.youtube.com/user/TheAfterfunk" target="_blank" class="socLink fab fa-youtube">
			<span class="tooltiptext">Youtube</span>
		</a>
		<a href="https://www.instagram.com/afterfunk" target="_blank" class="socLink fab fa-instagram">
			<span class="tooltiptext">Instagram</span>
		</a>
		<a href="https://www.twitter.com/afterfunk" target="_blank" class="socLink fab fa-twitter">
			<span class="tooltiptext">Twitter</span>
		</a>
		<a href="https://open.spotify.com/artist/1ZbLnPZZkTGiSJuq6Mk9vl?si=aSlGVQO_RwyfshrlLNAPQQ" target="_blank" class="socLink fab fa-spotify">
			<span class="tooltiptext">Spotify</span>
		</a>
		<a href="https://itunes.apple.com/ca/artist/after-funk/1057260783" target="_blank" class="socLink fab fa-itunes-note">
			<span class="tooltiptext">iTunes</span>
		</a>
		<a href="mailto:afterfunk.info@gmail.com" target="_blank" class="socLink far fa-envelope">
			<span class="tooltiptext">Email</span>
		</a>
	</div>
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>
		<div id="content" class="site-content <?php global $post; if ($post->ID == 82) echo 'whiteBackground'; ?>" >

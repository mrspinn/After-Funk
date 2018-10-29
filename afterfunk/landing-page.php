<?php
/**
* Template Name: Landing Page
*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="overflow-x: hidden;">
	<div class='bgOrangeOverlay'>

    <div id="landing-page" class="hfeed site">
        
        <div class="landingPageDiv mainDiv">
        
            <!-- <h1><a href="http://afterfunk.ca">
                    <img class="logo" src="http://afterfunk.ca/wp-content/uploads/2018/07/logowblackstroke.png" alt="After Funk Logo">
            </a></h1> -->

            <a href="https://afterfunk.ca/product/santa-barbara-pre-order/">
				<h2 class="featuredText">New full-length release coming in 2019! Click below to pre-order!</h2>
				<!-- <h4 class="featuredText white">Click here to pre-order!</h4> -->
                <img id="featuredImage" src="<?php echo $src = the_post_thumbnail_url( '' ); ?>" alt="After Funk Band Photo">
            </a>
            <div id='landingNav'>
                <ul class="nav white">
                    <li><a href="tour">Tour</a></li>
                    <li><a href="merch">Merch</a></li>
                    <li><a href="media">Media</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="social-links-center">
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
        <div id="landingModal" class="modal">
		
            <div>Follow us on Spotify and subscribe to our email list!</div>
            <a class="spotifyFollow" href="https://open.spotify.com/artist/1ZbLnPZZkTGiSJuq6Mk9vl?si=MYmu7cR6TaeCUvJoEbgAAQ" target="_blank">
                <i class="fab fa-spotify"></i> Follow
            </a>
            <?php echo do_shortcode("[newsletter]"); ?>
            <i id="closeModal" class="fas fa-times"></i>
        </div>
    <?php get_footer('home'); ?>

        

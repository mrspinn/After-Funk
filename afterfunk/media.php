<?php
/**
* Template Name: Media Page
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <div class='mediaDiv'>
            <div class="youtubeDiv mediaContainer">
                <iframe id="youtube" class="mediaContent" width="720" height="420" src="https://www.youtube.com/embed/RC76SY0kl78?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="spotifyDiv mediaContainer">
                <iframe id="spotify" class="mediaContent" src="https://open.spotify.com/embed/artist/1ZbLnPZZkTGiSJuq6Mk9vl" width="300" height="420" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
        </div>              
        <h2 id="moreVids"><a href="https://www.youtube.com/channel/UCsqvpGlx84t4tywjoZd_Liw">More videos on Youtube</a></h2>
	</main><!-- .site-main -->
	<?php get_sidebar( 'content-bottom' ); ?>
</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

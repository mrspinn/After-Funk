<?php
/**
* Template Name: Tour Page
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <div id="tourContainer">
            <a href="http://www.songkick.com/artists/6234804" class="songkick-widget" data-theme="light" data-track-button="on" data-font-family="Times New Roman" data-detect-style="true" data-background-color="none">Tour Dates</a>
            <script src="//widget.songkick.com/widget.js"></script>
        </div>
	</main><!-- .site-main -->
	<?php get_sidebar( 'content-bottom' ); ?>
</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

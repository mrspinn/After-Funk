<?php
/**
* Template Name: Contact Page
*/

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div id="contactDivs" data-packed="true">
            <div id="mgmtGenDiv" class="inline-block">
                <div id="mgmtDiv" class="contactDiv block">
                    <h3>MANAGEMENT</h3>
                    <br>
                    <div class='border'>
                        <div><strong>Jaime Rosenberg</strong></div>
                        <div>
                            <a class="auto-generated-link" href="mailto:jlrosenberg43@gmail.com" data-auto-recognition="true"
                                data-content="jlrosenberg43@gmail.com" data-type="mail">jlrosenberg43@gmail.com</a>
                        </div>
                        <div>647-539-8222</div>
                    </div>
                </div>
                <div id="genDiv" class="contactDiv block">
                    <h3>GENERAL INQUIRIES</h3>
                    <br>
                    <div class="border">
                        <strong>After Funk</strong>
                        <div>
                            <a class="auto-generated-link" href="mailto:afterfunk.info@gmail.com" data-auto-recognition="true"
                                data-content="afterfunk.info@gmail.com" data-type="mail">afterfunk.info@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="bookDiv" class="contactDiv">
                <h3>BOOKINGS</h3>
                <br>
                <div class="border">
                    <div>CANADA</div>
                    <div><strong>Jaime Rosenberg</strong></div>
                    <div>
                        <a class="auto-generated-link" href="mailto:jlrosenberg43@gmail.com" data-auto-recognition="true"
                            data-content="jlrosenberg43@gmail.com" data-type="mail">jlrosenberg43@gmail.com</a>
                    </div>
                    <div>647-539-8222</div>
                </div>
                <br>
                <div class="border">
                    <div>UNITED STATES</div>
                    <div><strong>James Servin</strong></div>
                    <div>The Empire Agency</div>
                    <div>
                        <a class="auto-generated-link" href="mailto:james@empireagency.com" data-auto-recognition="true"
                            data-content="james@empireagency.com" data-type="mail">james@empireagency.com</a>
                    </div>
                    <div>203-376-7270</div>
                </div>
            </div>
            <div id="pubDiv" class="contactDiv">
                <h3>PUBLICITY</h3>
                <br>
                <div class='border'>
                    <div>UNITED STATES</div>
                    <div><strong>Tiny Human Media Relations</strong></div>
                    <div>Ever Kipp</div>
                    <div>
                        <a class="auto-generated-link" href="ever@tinyhuman.com" data-auto-recognition="true"
                            data-content="ever@tinyhuman.com" data-type="mail">ever@tinyhuman.com</a>
                    </div>
                </div>
                <br>
                <div class='border'>
                    <div>CANADA</div>
                    <div><strong>Nice Marmot PR</strong></div>
                    <div>Mavis Harris</div>
                    <div>
                        <a class="auto-generated-link" href="mavis@nicemarmotpr.com" data-auto-recognition="true"
                            data-content="mavis@nicemarmotpr.com" data-type="mail">mavis@nicemarmotpr.com</a>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- .site-main -->

    <?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
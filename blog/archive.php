<?php // Page specific variables and pull in the header
    include('../perch/runtime.php');
    $page_title = "Rab’s Blog";
    $page_desc = "I’m Rab, and this is my blog archive.";
    $current_page = "blog";

    $header = $_SERVER['DOCUMENT_ROOT'];
    $header .= "/_header.php";

    // The header specific styles
    $header_bg_color = "#000";
    $header_title_color = "#fff";
    $header_image = "/perch/resources/header-muddy-floor.jpg";
    include_once($header);
?>

        <div class="constraint">
            <div class="main" role="main">

                <h1>The Blog Archives</h1>
                <p>Where all the blog posts live. Leave your shoes at the door.</p>
                <div class="box-it"><p><strong>Browse by Tag</strong>: <?php perch_blog_tags(); ?></p></div>
            <?php
                // defaults for all modes
                $posts_per_page = 20;
                $template       = 'post_in_list.html';
                $sort_order     = 'DESC';
                $sort_by        = 'postDateTime';

                // Have we displayed any posts yet?
                $posts_displayed = false;

                /*
                    perch_get() is used to get options from the URL.

                    e.g. for the URL
                        /blog/archive.php?cat=news

                    perch_get('cat') would return 'news' because cat=news.


                    The code below looks for different options in the URL, and then displays different types of listings based on it.
                */


                /* --------------------------- POSTS BY CATEGORY --------------------------- */
                if (perch_get('cat')) {
                    echo '<h1>'.perch_blog_category(perch_get('cat'), true).' Posts</h1>';

                    perch_blog_custom(array(
                            'category'   => perch_get('cat'),
                            'template'   => $template,
                            'count'      => $posts_per_page,
                            'sort'       => $sort_by,
                            'sort-order' => $sort_order,
                            ));

                    $posts_displayed = true;
                }


                /* --------------------------- POSTS BY TAG --------------------------- */
                if (perch_get('tag')) {
                    echo '<h1>'.perch_blog_tag(perch_get('tag'), true).' Posts</h1>';

                    perch_blog_custom(array(
                            'tag'        => perch_get('tag'),
                            'template'   => $template,
                            'count'      => $posts_per_page,
                            'sort'       => $sort_by,
                            'sort-order' => $sort_order,
                            ));

                    $posts_displayed = true;
                }



                /* --------------------------- POSTS BY DATE RANGE --------------------------- */
                if (perch_get('year')) {

                    $year              = intval(perch_get('year'));
                    $date_from         = $year.'-01-01 00:00:00';
                    $date_to           = $year.'-12-31 23:59:59';
                    $title_date_format = '%Y';


                    // Month and Year?
                    if (perch_get('month')) {
                        $month             = intval(perch_get('month'));
                        $date_from         = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-01 00:00:00';
                        $date_to           = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-31 23:59:59';
                        $title_date_format = '%B, %Y';
                    }

                    echo '<h1>Archive of: '.strftime($title_date_format, strtotime($date_from)).'</h1>';

                    perch_blog_custom(array(
                            'filter'     => 'postDateTime',
                            'match'      => 'eqbetween',
                            'value'      => $date_from.','.$date_to,
                            'template'   => $template,
                            'count'      => $posts_per_page,
                            'sort'       => $sort_by,
                            'sort-order' => $sort_order,
                            ));

                    $posts_displayed = true;
                }



                /* --------------------------- POSTS BY AUTHOR --------------------------- */
                if (perch_get('author')) {

                    echo '<h1>Posts by '.perch_blog_author(perch_get('author'), array(
                                                            'template' => 'author_name.html',
                                                            ), true).'</h1>';


                    perch_blog_custom(array(
                            'author'     => perch_get('author'),
                            'template'   => $template,
                            'count'      => $posts_per_page,
                            'sort'       => $sort_by,
                            'sort-order' => $sort_order,
                            ));

                    $posts_displayed = true;
                }


                /* --------------------------- DEFAULT: ALL POSTS --------------------------- */

                if ($posts_displayed == false) {

                    // No other options have been used; no posts have been displayed yet.
                    // So display all posts.

                    echo '<h1>Posts</h1>';

                    perch_blog_custom(array(
                            'template'   => $template,
                            'count'      => $posts_per_page,
                            'sort'       => $sort_by,
                            'sort-order' => $sort_order,
                            ));

                }

            ?>
                <div class="mailchimp box-it" id="mc_embed_signup">
                    <h3>Can’t get enough? Subscribe to the Newsletter.</h3>
                    <p>Using the great power of the internet&mdash;and MailChimp&mdash;you can get what I write straight to your inbox. All things design, web, and even photography sometimes.</p>
                    <p>It’s very occasional, and if it turns it it’s not for you, you can unsubscribe with just one click.</p>
                    <form action="http://dotmonster.us4.list-manage1.com/subscribe/post?u=d769c609d1a5f7df2d935d301&amp;id=566750ebcc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

                        <div class="cols">
                            <div class="mailchimp__field-group col-1-2">
                                <label for="mce-FNAME" class="mailchimp__label">What’s your name?</label><br>
                                <input type="text" value="" name="FNAME" class="mailchimp__input" id="mce-FNAME">
                            </div>

                            <div class="mailchimp__field-group col-1-2">
                                <label for="mce-EMAIL" class="mailchimp__label">And your email?</label><br>
                                <input type="email" value="" name="EMAIL" class="mailchimp__input" id="mce-EMAIL">
                            </div>
                        </div><!-- .cols -->

                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                        <div style="position: absolute; left: -5000px;"><input type="text" name="b_d769c609d1a5f7df2d935d301_566750ebcc" tabindex="-1" value=""></div>
                        <div class="clear">
                            <input type="submit" value="Subscribe to the Magic" name="subscribe" id="mc-embedded-subscribe" class="btn--green">
                        </div>

                    </form>
                </div><!-- .mailchimp -->

            </div><!-- .main -->
        </div><!-- .constraint -->

<?php
    $footer = $_SERVER['DOCUMENT_ROOT'];
    $footer .= "/_footer.php";
    include_once($footer);
?>
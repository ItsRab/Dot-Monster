<?php // Page specific variables and pull in the header
    include('../perch/runtime.php');
    $page_title = perch_blog_post_field(perch_get('s'), 'meta_title', true);
    $page_desc = perch_blog_post_field(perch_get('s'), 'meta_desc', true);
    $current_page = "blog";

    $header = $_SERVER['DOCUMENT_ROOT'];
    $header .= "/_header.php";

    // The header specific styles
    $header_bg_color = perch_blog_post_field(perch_get('s'), 'header_bg_color', true);
    $header_title_color = perch_blog_post_field(perch_get('s'), 'header_color', true);
    $header_image = perch_blog_post_field(perch_get('s'), 'image', true);
    include_once($header);
?>

        <div class="constraint">
            <div class="main" role="main">
                <?php perch_blog_post(perch_get('s')); ?>
                <span class="post-meta__tags">Post tagged with <?php perch_blog_post_tags(perch_get('s')); ?></span>
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
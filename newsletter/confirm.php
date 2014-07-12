<?php // Page specific variables and pull in the header
    $page_title = "Thanks! Now to check your email";
    $page_desc = "Thanks for your interest in the newsletter! I just need to confirm your email.";
    $current_page = "newsletter";

    $header = $_SERVER['DOCUMENT_ROOT'];
    $header .= "/_header.php";
    include_once($header);
?>

        <div class="constraint">
            <div class="main" role="main">

                <article>
                    <section>
                        <h1>I need to confirm your email</h1>
                        <p>I’ve just set you an email. Please take a look at it and click the link to confirm your email address. Then all the magic will be yours!</p>
                        <p>Questions? I’m fairly active on Twitter, so if you need to prod me check out <a href="http://twitter.com/ItsRab">@ItsRab</a>.</p>
                    </section>
                </article>

            </div><!-- .main -->
        </div><!-- .constraint -->

<?php
    $footer = $_SERVER['DOCUMENT_ROOT'];
    $footer .= "/_footer.php";
    include_once($footer);
?>
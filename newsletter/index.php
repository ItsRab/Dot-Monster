<?php // Page specific variables and pull in the header
    $page_title = "Thanks!";
    $page_desc = "Just a little thank you, from Dot Monster.";
    $current_page = "newsletter";

    $header = $_SERVER['DOCUMENT_ROOT'];
    $header .= "/_header.php";
    include_once($header);
?>

        <div class="constraint">
            <div class="main" role="main">

                <article>
                    <section>
                        <h1>Thanks!</h1>
                        <p>Thanks for signing up to the Dot Monster Newsletter! Hopefully you’ll enjoy it. Whilst you wait on the next one, why not take a <a href="/blog/">look through the blog</a>, or <a href="/design/">browse my previous work</a>? Hopefully it’ll quench your thirst until the next time!</p>
                        <p>I’m fairly active on Twitter, so if you need to prod me check out <a href="http://twitter.com/ItsRab">@ItsRab</a>.</p>
                        <p>For your immediate enjoyment, here’s a gif. Since you’re awesome.</p>
                        <img src="/images/love.gif">
                    </section>
                </article>

            </div><!-- .main -->
        </div><!-- .constraint -->

<?php
    $footer = $_SERVER['DOCUMENT_ROOT'];
    $footer .= "/_footer.php";
    include_once($footer);
?>
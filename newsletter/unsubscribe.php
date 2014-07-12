<?php // Page specific variables and pull in the header
    $page_title = "Sorry!";
    $page_desc = "Sorry to see you go.";
    $current_page = "newsletter";

    $header = $_SERVER['DOCUMENT_ROOT'];
    $header .= "/_header.php";
    include_once($header);
?>

        <div class="constraint">
            <div class="main" role="main">

                <article>
                    <section>
                        <h1>You are now unsubscribed</h1>
                        <p class="lead">You don’t need to do anything else. I’m sorry to see you go though.</p>
                        <p>But I understand, email can get a bit much sometimes.</p>
                        <p>If you’re still interested in my posts, why not become a regular <a href="/blog/">Blog visitor</a> or <a href="/feed/">an RSS feeder</a>?</p>
                        <img src="/images/sadhouse.gif">
                    </section>
                </article>

            </div><!-- .main -->
        </div><!-- .constraint -->

<?php
    $footer = $_SERVER['DOCUMENT_ROOT'];
    $footer .= "/_footer.php";
    include_once($footer);
?>
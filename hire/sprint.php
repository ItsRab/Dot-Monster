<?php // Page specific variables and pull in the header
    $page_title = "Hire Rab, a web designer, on a budget!";
    $page_desc = "Looking to hire a freelance website deisgner but on a budget? I’m your guy!";
    $current_page = "hire";

    $header = $_SERVER['DOCUMENT_ROOT'];
    $header .= "/_header.php";
    include_once($header);
?>

        <div class="constraint">
            <div class="main" role="main">

                <article>
                    <section>
                        <h1>On a Budget</h1>
                        <p class="lead">Are you on the hunt for a website but you’re on a tight budget? We could sprint a site out together over a weekend for £500.</p>
                        <a href="/hire/" class="btn btn--red">Arrange a Sprint</a>
                        <h2>Why?</h2>
                        <p>Quite often I meet great, usually local people, who don’t always have the budget for a fully custom website design. My typical web design projects start at around £2<span class="kerning-sad">,</span>000 but if that doesn’t fit then perhaps we can still do something about it. I’m not a fan of “Web Design Packages” but this one is a little different. We work together in a sprint.</p>
                        <h2>What does it involve?</h2>
                        <p>We’ll both schedule a day and a half of our time&mdash;probably over a weekend&mdash;and we’ll work together to get you a site built for <strong>£500</strong>. During the time we’ll get as much done as we can, setting everything up properly and making sure you’re comfortable and happy with how everything works.</p>
                        <p>If you have any questions along the way, I’ll be there to answer them. Hosting or domain woes? We’ll blast through them!</p>
                        <h2>The details</h2>
                        <p><ul>
                            <li>It costs £500 and is non-negotiable.</li>
                            <li>You get me for a day and a half. Consecutively. At the end of it you’ll have a website.</li>
                            <li>The website will be powered by WordPress if you need to edit it, or if it’s small and doesn’t need any updates we’ll make it static.</li>
                            <li>We both work together to get as much done as we can in that time. You should be available during this time just as much as I am.</li>
                            <li>Whatever isn’t finished at the end of the time is either left out of the final site or scheduled in as another sprint.</li>
                        </ul></p>

                        <a href="/hire/" class="btn btn--green">Let’s do this</a>

                    </section>
                </article>

            </div><!-- .main -->
        </div><!-- .constraint -->

<?php
    $footer = $_SERVER['DOCUMENT_ROOT'];
    $footer .= "/_footer.php";
    include_once($footer);
?>
<?php // Page specific variables and pull in the header
    include('../perch/runtime.php');
    $page_title = "Hire Rab, A Freelance Web Designer in Stirling!";
    $page_desc = "Looking to hire a freelance website deisgner? I’m your guy! I design and develop websites for small to medium sized businesses.";
    $current_page = "hire";

    $header = $_SERVER['DOCUMENT_ROOT'];
    $header .= "/_header.php";
    include_once($header);

    // Work out when I’m available
    // Manual, can set a date to use, e.g. 25th August
    $date_available_manual = '';
    // If no date is set, just set it to two weeks time
    $date_available_auto = date('jS F', strtotime('+2 week'));
    // Assign variable to echo out
    if (!empty($date_available_manual)) {
        $date_available = $date_available_manual;
    }
    else {
        $date_available = $date_available_auto;
    }
?>

        <div class="constraint">
            <div class="main" role="main">

                <article>
                    <section>
                        <h1>Get In Touch</h1>
                        <h2 class="available-from">Available from <?php echo $date_available; ?></h2>
                        <p class="lead">Have you got a design challenge for me? Could we work together to improve your business on the web? Get in touch, I’d love to work with you. You can email me at <a href="mailto:<?php echo $curr_email;?>@dotmonster.co"><?php echo $curr_email;?>@dotmonster.co</a> or send me a message on <a href="http://twitter.com/ItsRab" title="@ItsRab on Twitter">Twitter</a>.</p>

                        <p>Not got email handy? Fill out the boxes below and it’ll appear in my inbox.</p>

                        <div class="box-it contact-form">

                            <?php perch_content('Contact Form'); ?>

                        </div><!-- .contact-form -->

                        <h2>Tight Budget?</h2>
                        <p>If your budget doesn’t really fit with the typical project prices, then all is not lost. We might be able to work together in a sprint to get your site done.</p>
                        <a href="/hire/sprint" class="btn btn--green">Sprint Details</a>

                        <h2>But, where are you?</h2>
                        <p>Still use an owl? Want to send me some <abbr title="cool stuff!">swag</abbr>? This is a home address so please don’t show up unannounced unless you bring cake and beer.</p>
                        <address><p>29 Auld Kirk Road, Tullibody, Clackmannanshire, FK10 2TG, Scotland.</p></address>
                    </section>
                </article>

            </div><!-- .main -->
        </div><!-- .constraint -->

<?php
    $footer = $_SERVER['DOCUMENT_ROOT'];
    $footer .= "/_footer.php";
    include_once($footer);
?>
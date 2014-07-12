<?php // Page specific variables and pull in the header
    $page_title = "Dot Monster Web Design and Development in Stirling, Scotland";
    $page_desc = "I’m Rab, a Freelance website designer living and working in the Stirling, Central Scotland. Making custom websites using Perch, WordPress, you name it.";
    $current_page = "home";
    include("_header.php");
?>


        <div class="main" role="main">

            <section class="intro">
                <div class="constraint">
                    <h1>I’m Rab, and I <span contenteditable="true">make websites.</span></h1>
                    <p class="lead"><a href="/hire/">Work with me</a> to strengthen your brand through a flexible, useful and creative website design. Together we’ll convert your customers into your followers.</p>
                </div><!-- .constraint -->

                <?php // Inline background images so we can generate the src image from PHP ?>
                <ul class="portfolio-list clearfix">
                    <li class="portfolio-list__item">
                        <div class="portfolio-list__bg--1" style="background-image: url('/images/portfolio/MEAT-spec.jpg'); -webkit-background-size: cover; background-size: cover;">
                            <a href="/design/">
                                <div class="portfolio-list__details">
                                    <p>MEAT Bar Spec Work</p>
                                </div><!-- .portfolio-list__details -->
                            </a>
                        </div><!-- .portfolio-list__bg -->
                    </li>
                    <li class="portfolio-list__item">
                        <div class="portfolio-list__bg--2" style="background: url('/images/portfolio/music-spec.jpg'); -webkit-background-size: cover; background-size: cover;">
                            <a href="/design/">
                                <div class="portfolio-list__details">
                                    <p>Music Player Spec Work</p>
                                </div><!-- .portfolio-list__details -->
                            </a>
                        </div><!-- .portfolio-list__bg -->
                    </li>
                    <li class="portfolio-list__item">
                        <div class="portfolio-list__bg--3" style="background: url('/images/portfolio/plumtree.jpg'); -webkit-background-size: cover; background-size: cover;">
                            <a href="http://theplumtree.uk.com/">
                                <div class="portfolio-list__details">
                                    <p>The Plum Tree, Glasgow</p>
                                </div><!-- .portfolio-list__details -->
                            </a>
                        </div><!-- .portfolio-list__bg -->
                    </li>
                    <li class="portfolio-list__item">
                        <div class="portfolio-list__bg--4" style="background: url('/images/portfolio/kyles.jpg'); -webkit-background-size: cover; background-size: cover;">
                            <a href="http://kyles-on-scotland.co.uk/">
                                <div class="portfolio-list__details">
                                    <p>Kyles on Scotland</p>
                                </div><!-- .portfolio-list__details -->
                            </a>
                        </div><!-- .portfolio-list__bg -->
                    </li>
                </ul>

                <div class="constraint">
                    <blockquote>
                        <p>Great communication. A pleasure to do business with. Hope to deal with you again. Miss Athletic hopes to welcome you back very soon. Perfect! Thank you. A+</p>
                        <footer>
                            <cite>eBay User Feedback</cite>
                        </footer>
                    </blockquote>
                    <p>I’m based in Stirling, Central Scotland, but you don’t have to be. I like to work with small businesses, individuals and startups, but that’s not set in stone. I just want to be a part of what you’re bringing to the table.</p>
                    <a href="/hire/" class="btn--green">So Let’s Work Together</a>
                </div><!-- .constraint -->
            </section>

            <section class="details">
                <div class="constraint">
                    <h2>We’re a good match</h2>
                    <p class="lead">I want to immerse myself in your business and culture so I can work alongside you. I’m not just another supplier, I’m your partner. Your customers are my clients too, I need to get to know them and might even need to take their side at times.</p>
                </div><!-- .constraint -->

                <div class="constraint">
                    <p>We’ll form a team, bouncing questions, ideas and suggestions off each other. There will be no “ta-da” moment at the end of then project where you get to see the website for the first time—you’ll play a key part of the design process right from the off.</p>
                    <p>I don’t just colour in; I code too. You won’t find any static visuals here. You’ll get living, responsive designs and components right in your browser, on any device.</p>
                    <a href="/hire/" class="btn--red">Hire Me</a>
                </div><!-- .constraint -->
            </section>

        </div><!-- .main -->

<?php include("_footer.php"); ?>
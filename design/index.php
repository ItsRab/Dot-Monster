<?php // Page specific variables and pull in the header
    $page_title = "Dot Monster’s Freelance Web Design Portfolio";
    $page_desc = "Here’s my website design portfolio, showing off some of what I’ve been busy working on recently. Would you like to be next?";
    $current_page = "design";

    // Calculate years since Dot Monster started, and get it as a word, saves updating the page, zzz
    $startdate = new DateTime("2011-04-01");
    $currentdate = new DateTime(date("Y-m-d"));
    $interval = $startdate->diff($currentdate);
    $years_since = $interval->y;
    $get_word = array("zero","one","two","three","four","five","six","seven","eight","nine","ten","eleven","twelve");
    $years_since_word = $get_word[$years_since];

    $header = $_SERVER['DOCUMENT_ROOT'];
    $header .= "/_header.php";
    include_once($header);
?>

        <div class="main" role="main">

            <section class="portfolio">
                <div class="constraint">
                    <h1>My Design Portfolio</h1>
                    <p class="lead">I’ve been freelancing under “Dot Monster” for about <?php echo $years_since_word; ?> years. When I started, I wanted to help people promote their ideas, products and passions through web design&mdash;something which I’m lucky enough to be doing to this day.</p>
                    <a href="/hire/" class="btn btn--red">Hire Me</a>
                </div><!-- .constraint -->

                <div class="portfolio-item">
                    <div class="constraint">
                        <h2 class="portfolio__title">O’Malley Property</h2>
                        <p class="lead">I’ve known John, Managing Director at O’Malley Property, for a few years now.</p>
                        <p>He got in touch as he was changing the back-office property management software they use so we could update the site to pull in property listings. It soon became apparent that a full redesign was on the cards.</p>
                        <p>We made the most out of the project, and got some great results judging by comments from John’s customers, and Google Analytics.</p>

                        <ul class="img-list break-out clearfix">
                            <li class="img-list__item--4">
                                <img src="/images/portfolio/omalley-home.jpg" class="image-list__img" alt="O’Malley Property Homepage">
                            </li>
                            <li class="img-list__item--4">
                                <img src="/images/portfolio/omalley-type.jpg" class="image-list__img" alt="O’Malley Property Typography">
                            </li>
                            <li class="img-list__item--4">
                                <img src="/images/portfolio/omalley-property-list.jpg" class="image-list__img" alt="O’Malley Property Listings">
                            </li>
                            <li class="img-list__item--4">
                                <img src="/images/portfolio/omalley-head.jpg" class="image-list__img" alt="O’Malley Property Header">
                            </li>
                        </ul>

                        <p><a href="/design/case-study/omalley" class="btn btn--red btn--group-first">Read the Case Study</a>
                        <a href="http://omalleyproperty.com/" class="btn btn--green btn--group-last">Visit the New Website</a></p>
                    </div><!-- .constraint -->
                </div><!-- .portfolio-item -->

                <div class="portfolio-item">
                    <div class="constraint">
                        <h2 class="portfolio__title">MEAT</h2>
                        <p class="lead">Speculative work, inspired by for my favourite place for meat!</p>
                        <p>I wanted to play around with how I would have designed the MEAT bar website and put together this mock up of some ideas in about an afternoon.</p>
                        <p>This design was self initiated and I’ve had no contact with the MEAT bar.</p>
                        <p>If you happen to be from the MEAT bar, hey, <a href="/hire/">let’s chat</a>. I’ll work for steak.</p>

                        <ul class="img-list break-out clearfix">
                            <li class="img-list__item--4">
                                <img src="/images/portfolio/meat-home.jpg" class="image-list__img" alt="MEAT Home">
                            </li>
                            <li class="img-list__item--4">
                                <img src="/images/portfolio/meat-type.jpg" class="image-list__img" alt="MEAT Typography">
                            </li>
                            <li class="img-list__item--4">
                                <img src="/images/portfolio/meat-body.jpg" class="image-list__img" alt="MEAT Body">
                            </li>
                            <li class="img-list__item--4">
                                <img src="/images/portfolio/meat-footer.jpg" class="image-list__img" alt="MEAT Footer">
                            </li>
                        </ul>

                        <p><a href="/hire" class="btn btn--red btn--group-first">Hire Me for Similar</a>
                        <a href="/design/mock/meat" class="btn btn--green btn--group-last">View the Demo</a></p>
                    </div><!-- .constraint -->
                </div><!-- .portfolio-item -->

            </section><!-- .portfolio -->

            <section class="dribbble">
                <div class="constraint">
                    <h2>From Dribbble</h2>
                    <p class="lead"><a href="https://dribbble.com/itsrab">Dribbble</a> is show and tell for designers&mdash;answering the question, “What are you working on?”. I upload little <i>shots</i> of various projects, here’s a few of them.</p>
                    <ul class="img-list break-out clearfix">
                        <?php
                            // https://github.com/martinbean/dribbble-php
                            require($_SERVER["DOCUMENT_ROOT"]."/_dribbble.php");

                            $dribbble = new Dribbble();

                            try {
                                $my_shots = $dribbble->get_player_shots('itsrab');
                                $i = 1;

                                // This should set the background image, rather than the image itself
                                // so that we can use set sizes and crop, rather than skew the image

                                foreach ($my_shots->shots as $shot) {
                                    if($i <= 4) {
                                        echo '<li class=\'img-list__item--4\'>';
                                            echo '<a href=\'' . $shot->url . '\'>';
                                                echo '<img src="' . $shot->image_url . '" class="image-list__img">';
                                            echo '</a>';
                                        echo '</li>';
                                        $i++;
                                    } else {
                                        break;
                                    }
                                }
                            }
                            catch (DribbbleException $e) {
                                echo 'Error: ' . $e->getMessage();
                            }
                        ?>
                    </ul><!-- .img-list -->
                </div><!-- .constraint -->
            </section><!-- .dribbble -->
        </div><!-- .main -->

<?php
    $footer = $_SERVER['DOCUMENT_ROOT'];
    $footer .= "/_footer.php";
    include_once($footer);
?>

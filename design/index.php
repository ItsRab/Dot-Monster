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

                <div class="portfolio-container">
                    <div class="portfolio-item clearfix">
                        <div class="portfolio-item__constraint">
                            <img src="/images/portfolio/MEAT-spec.jpg" class="portfolio-item__img left" alt="MEAT Bar">
                            <h2>MEAT Bar</h2>
                            <p class="lead">Speculative work for my favourite place for meat!</p>
                            <p>I wanted to play around with how I would have designed their website and put together this mock up of some ideas in about an hour.</p>
                            <p>This design was self initiated and I’ve had no contact with the MEAT bar. Photo credit to <a href="https://www.flickr.com/photos/theboyfast/9625795242">Ed Swift</a> and <a href="https://www.flickr.com/photos/kriskesiak/9016520060">Kris Kesiak</a> on Flickr.</p>
                            <p>If you happen to be from the MEAT bar, hey, <a href="/hire/">let’s chat</a>. I’ll work for steak.</p>
                            <a href="http://themeatbar.co.uk/" class="btn btn--green">Visit Their Website</a>
                        </div><!-- .portfolio-item__constraint -->
                    </div>
                    <div class="portfolio-item clearfix">
                        <div class="portfolio-item__constraint">
                            <img src="/images/portfolio/music-spec.jpg" class="portfolio-item__img right" alt="Music Player">
                            <h2>Music Player</h2>
                            <p class="lead">Speculative work for a music player and store.</p>
                            <p>Designing an interface for an application is something I’ve not really done, so I thought I would knock something together.</p>
                            <p>It’s based on iTunes but not related. I wanted to design it around the Yosemite OS X update with its semi-transparent interface.</p>
                            <p>Whilst keeping the layout familiar I wanted bring in grouping of Charts and a “Trending” section to their own categories&mdash;a part of iTunes I think is quite fragmented.</p>
                            <a href="/hire/" class="btn btn--green">Hire Me for Similar</a>
                        </div><!-- .portfolio-item__constraint -->
                    </div>
                </div>
            </section><!-- .portfolio -->

            <section class="dribbble">
                <div class="constraint">
                    <h2>From Dribbble</h2>
                    <p class="lead"><a href="https://dribbble.com/itsrab">Dribbble</a> is show and tell for designers&mdash;answering the question, “What are you working on?”. I upload little <i>shots</i> of various projects, here’s a few of them.</p>
                </div><!-- .constraint -->
                <ul class="img-list clearfix">
                    <li class="img-list__item">
                        <a href="https://dribbble.com/itsrab" title="ItsRab on Dribbble">
                            <div class="img-list__bg--main" style="background-image: url('/images/dribbble-logo.png');"></div><!-- .img-list__bg -->
                        </a>
                    </li>
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
                                if($i <= 5) {
                                    echo '<li class=\'img-list__item\'>';
                                        echo '<a href=\'' . $shot->url . '\'>';
                                            echo '<div class=\'img-list__bg--' . $i . '\' style="background-image: url(\'' . $shot->image_url . '\');"></div><!-- .img-list__bg -->';
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
            </section><!-- .dribbble -->

            <section class="flickr">
                <div class="constraint">
                    <h2>Some Recent Snaps</h2>

                    <?php
                        // Load in my Flickr XML feed
                        $xml = simplexml_load_file('https://api.flickr.com/services/feeds/photos_public.gne?id=108874017@N08');
                        // Check the feed
                        if (strlen($xml) == 0) {
                            // If the XML feed is empty (feed down)
                            echo '<p>I quite like taking pictures. Check out <a href="https://www.flickr.com/photos/108874017@N08/" title="ItsRab on Flickr">my Flickr</a> for all my latest photos from all over the place. It’s just a hobby mind you.</p>';
                            echo '</div><!-- .constraint -->';
                        } else {
                            // Feed returned something, let’s show it!
                            echo '<p>I quite like taking pictures. Here’s a few of the latest ones, but there’s even more on <a href="https://www.flickr.com/photos/108874017@N08/" title="ItsRab on Flickr">my Flickr</a> if you fancy a nosey!</p>';
                            echo '</div><!-- .constraint -->';
                            echo '<ul class="img-list clearfix">';
                            echo '<li class="img-list__item">';
                            echo '<a href="https://www.flickr.com/photos/108874017@N08/" title="ItsRab on Flickr">';
                            echo '<div class="img-list__bg--main" style="background-image: url(\'/images/flickr-logo.png\');"></div><!-- .img-list__bg -->';
                            echo '</a>';
                            echo '</li>';
                            $i = 1;
                            // Loop through the feed grabbing what we need
                            foreach ($xml->entry as $row) {
                                $img_title = $row->title;
                                $img_url = $row->link[0]['href'];
                                $img_src = $row->link[1]['href'];
                                $img_src_z = str_replace("_b","_z",$img_src);
                                // Display the images from Flickr
                                echo '<li class=\'img-list__item\'>';
                                    echo '<a href=\'' . $img_url . '\'>';
                                        echo '<div class=\'img-list__bg--' . $i . '\' style="background-image: url(\'' . $img_src_z . '\');"></div><!-- .img-list__bg -->';
                                    echo '</a>';
                                echo '</li>';
                                // Only want latest 5 images, then break loop
                                $i++;
                                if($i >= '6')
                                    break;
                            }
                            echo '</ul><!-- .img-list -->';
                        }
                    ?>

            </section><!-- .flickr -->

        </div><!-- .main -->

<?php
    $footer = $_SERVER['DOCUMENT_ROOT'];
    $footer .= "/_footer.php";
    include_once($footer);
?>
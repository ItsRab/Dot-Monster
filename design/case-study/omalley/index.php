<?php // Page specific variables and pull in the header
    $page_title = "Dot Monster’s O’Malley Property Case Study";
    $page_desc = "O’Malley Property website redesign case study.";
    $current_page = "design";

    $header = $_SERVER['DOCUMENT_ROOT'];
    $header .= "/_header.php";
    include_once($header);
?>

        <div class="main" role="main">

            <section class="portfolio">
                <div class="constraint">
                    <h1>O’Malley Property Case Study</h1>
                    <p class="lead">I’ve known John, Managing Director at O’Malley Property, for a few years now. When I was first starting out we put together a WordPress site for O’Malley Property. It was an off-the-shelf theme with a few customisations to make it fit in with the style John had in place. It used iframes to integrate with a property management system, showing all of the properties for sale and rent within the WordPress site.</p>
                    <h2>The Kick Off</h2>
                    <p>John got in touch when he was changing the office’s property management system. We’d need to change the iframe part of the site to allow the properties to come from a different provider. We got talking and decided it was time to make the jump into something bespoke, rather than just try and drag along the old site which looked like this at the time:</p>
                    <div class="break-out">
                        <img src="/images/portfolio/omalley-old-small.jpg" srcset="/images/portfolio/omalley-old-med.jpg 920w, /images/portfolio/omalley-old-large.jpg 1400w" sizes="100vw" alt="Old O’Malley Property Website">
                    </div><!-- .break-out -->
                    <h2>The Project</h2>
                    <p>We followed the <a href="/flow">client project flow</a> I prefer to use. It started with a discovery phase where we looked at competitors, the brand, analytics and such. This allowed us to map out the project’s goals. During this phase it really highlighted to us how poor a lot of estate agents sites really are. Lots of them weren’t responsive, had no clear call to action and had poor navigation. We found our goals.</p>
                    <img src="/images/portfolio/omalley-style-tile.jpg" class="image-body-right" alt="O’Malley Style Tile">
                    <p>Next up we worked on a mood-board which we progressed into <a href="http://styletil.es/">Style Tiles</a> to set the general direction of the style of the site. We had three main colours to work with, red, black and white. Whilst working on the Style Tiles I recommended we add a fourth complimentary colour to give us a more diverse palette. We introduced teal&mdash;which on the site we use for secondary call to actions and highlights.</p>
                    <p>With the goals and style set, we got to work on the content. By going through the old site’s content hierarchy we identified areas which we could collapse into just one page to help clear up the navigation&mdash;one of our goals&mdash;and to simplify what we displayed on the site. We didn’t want to pollute the site with abundant content, whilst diluting the valuable information O’Malley provides in the likes of their <a href="http://omalleyproperty.com/landlords/">Landlord Information packs</a>.</p>
                    <p>Since we had the content nailed, and the styles sorted we were able to pull it altogether in the layout and design phase. I built some static mockups of the site and we iterated a little after some discussions. Here’s some early prototypes:</p>
                    <div class="break-out">
                        <img src="/images/portfolio/omalley-proto-small.jpg" srcset="/images/portfolio/omalley-proto-med.jpg 920w, /images/portfolio/omalley-proto-large.jpg 1400w" sizes="100vw" alt="O’Malley Property Website Prototypes">
                    </div><!-- .break-out -->
                    <p>We were going to keep it powered by WordPress, so the development phase was building the static mock into a custom theme. I called on a friend, Ryan, to work on the integration between the new property management software so we didn’t need to rely on iframes. The site now pulls an XML feed of all the properties and displays them in a custom post type inside WordPress.</p>
                    <p>After testing and final tweaks we launched the site on the 19th January 2015. The initial kick off meeting to start all of this was on the 15th November 2014.</p>
                    <div class="break-out">
                        <img src="/images/portfolio/omalley-final-small.jpg" srcset="/images/portfolio/omalley-final-med.jpg 920w, /images/portfolio/omalley-final-large.jpg 1400w" sizes="100vw" alt="O’Malley Property Website">
                    </div><!-- .break-out -->
                    <h2>The Technology</h2>
                    <p>The site was built on WordPress in the end with a custom plugin handling the property management software integration. The responsive theme was built in PHP after static HTML mockups and the CSS was complied using Sass.</p>
                    <h2>The Goals</h2>
                    <p>We aimed to finish the site in early January, which we managed. After the competitor research we wanted to make sure the site was responsive, easy to navigate and make the calls to action clear. We have a smart contact form on each property page which notifies the office staff with the property details so the visitor doesn’t need to worry about filling in the details. The homepage search is a keywords search so people can find what they are looking for any way they like. The site works well on a mobile device. I think we managed to hit our goals pretty well&mdash;and Google Analytics seems to think so too.</p>
                    <p>If we compare the initial few weeks of the new site, against a similar period on the old site&mdash;there’s some interesting figures. The bounce rate drops by about 25%, the page views are up by nearly 650% and the session duration is up by nearly 200%. People are hitting the new site, clearly finding more of what they are looking for and staying around to browse (mostly) the properties. I’ll review these figures again when more data is in so we can accurately compare the before and after, discounting for holiday period downs, initial launch hype bloat and Google’s index levelling. The early signs are good though.</p>
                    <h2>The Future</h2>
                    <p>I’ll be working with John over the coming months, and longer, to evolve and adapt the site. We’ll be looking more into performance, from a technical aspect and a conversion aspect. We’ll run A:B tests and we’ll discuss the marketing of the site to make sure we get the most from it.</p>
                    <p><a href="/hire" class="btn btn--red btn--group-first">Hire Me</a>
                    <a href="http://omalleyproperty.com/" class="btn btn--green btn--group-last">Visit the new O’Malley Property Website</a></p>
                </div><!-- .constraint -->
            </section><!-- .portfolio -->
        </div><!-- .main -->

<?php
    $footer = $_SERVER['DOCUMENT_ROOT'];
    $footer .= "/_footer.php";
    include_once($footer);
?>
<?php // Page specific variables and pull in the header
    $page_title = "Dot Monster’s Photography";
    $page_desc = "Here’s all my photos. I’m a hobbyist photographer that likes to post on Flickr and Instagram.";
    $current_page = "photos";

    $header = $_SERVER['DOCUMENT_ROOT'];
    $header .= "/_header.php";
    include_once($header);
?>

        <div class="main" role="main">

            <section class="photos">
                <div class="constraint">
                    <h1>My Photography</h1>
                    <p class="lead">I’m a hobbyist photographer. I like to take photos of anything from lochs to lightbulbs. The photos I take end up on <a href="https://www.flickr.com/photos/itsrab/">Flickr</a> or <a href="http://instagram.com/itsrab">Instagram</a> if you fancy a nosey.</p>
                    <p>When taking photos I use my Fuji X100s or iPhone 6 plus. For editing I use a combination of Adobe Lightroom and <a href="http://vsco.co/vscocam">VSCO Cam</a> for iOS.</p>
                    <div class="break-out">
                        <img src="/images/photos/photos-1-small.jpg" srcset="/images/photos/photos-1-med.jpg 920w, /images/photos/photos-1-large.jpg 1400w" sizes="100vw">
                    </div><!-- .break-out -->
                    <p>Whilst I don’t do any professional photography, I’m always up for learning more about it. If there’s a project I’m working on that might need some photography work I’m more than willing to give it a shot.</p>
                    <p>If you think we might be able to work together, <a href="/hire">hit me up</a> and we can chat about your project and photos! In the meantime, here’s some recent photos from my Instagram feed.</p>
                    <ul class="img-list break-out clearfix">
                        <li class="img-list__item">
                            <a href="http://instagram.com/p/ymyV93hQPx/"><img src="/images/photos/tree-shed.jpg" class="image-list__img" alt="A Tree and a Shet at Loch Tay, Scotland"></a>
                        </li>
                        <li class="img-list__item">
                            <a href="http://instagram.com/p/yk4hGYhQDn/"><img src="/images/photos/weamo.jpg" class="image-list__img" alt="Weamo at Whosit &amp; Whatsit, Newcastle"></a>
                        </li>
                        <li class="img-list__item">
                            <a href="http://instagram.com/p/yhru_thQBX/"><img src="/images/photos/sheep.jpg" class="image-list__img" alt="Sheep at Loch Tay, Scotland"></a>
                        </li>
                        <li class="img-list__item">
                            <a href="http://instagram.com/p/yk5F4chQEt/"><img src="/images/photos/loch-tay.jpg" class="image-list__img" alt="Loch Tay, Scotland"></a>
                        </li>
                        <li class="img-list__item">
                            <a href="http://instagram.com/p/zFEKpYhQDr/"><img src="/images/photos/national-monument-scotland.jpg" class="image-list__img" alt="National Monument of Scotland, Edinburgh"></a>
                        </li>
                        <li class="img-list__item">
                            <a href="http://instagram.com/p/xYwaEnBQNL/"><img src="/images/photos/stirling-fog.jpg" class="image-list__img" alt="Stirling in Fog"></a>
                        </li>
                        <li class="img-list__item">
                            <a href="http://instagram.com/p/y1tCnYhQAR/"><img src="/images/photos/gate.jpg" class="image-list__img" alt="Winter Gate"></a>
                        </li>
                        <li class="img-list__item">
                            <a href="http://instagram.com/p/y4-YKuhQHy/"><img src="/images/photos/focus-loch-tay.jpg" class="image-list__img" alt="Ford Focus ST at Loch Tay, Scotland"></a>
                        </li>
                        <li class="img-list__item">
                            <a href="http://instagram.com/p/xe6VaghQKU/"><img src="/images/photos/loch-long.jpg" class="image-list__img" alt="Loch Long, Scotland"></a>
                        </li>
                        <li class="img-list__item">
                            <a href="http://instagram.com/p/y9ywkDhQNb/"><img src="/images/photos/whosit.jpg" class="image-list__img" alt="Whosit &amp; Whatsit, Newcastle"></a>
                        </li>
                        <li class="img-list__item">
                            <a href="http://instagram.com/p/xw3QBhBQAp/"><img src="/images/photos/loch-lomond.jpg" class="image-list__img" alt="Loch Lomond"></a>
                        </li>
                        <li class="img-list__item">
                            <a href="http://instagram.com/p/xbQv2ZBQM0/"><img src="/images/photos/loch-lomond-sunset.jpg" class="image-list__img" alt="Loch Lomond Sunset"></a>
                        </li>
                    </ul>
                    <p><a href="http://instagram.com/itsrab" class="btn btn--red btn--group-first">See More on Instagram</a>
                    <a href="https://www.flickr.com/photos/itsrab/" class="btn btn--green btn--group-last">Browse Flickr</a></p>
                </div><!-- .constraint -->
            </section><!-- .photos -->
        </div><!-- .main -->

<?php
    $footer = $_SERVER['DOCUMENT_ROOT'];
    $footer .= "/_footer.php";
    include_once($footer);
?>
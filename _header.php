<?php
    include("_global.php");
    $page_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!doctype html lang="en">
<!--[if (lt IE 9)&!(IEMobile)]><html class="no-js old-ie" lang="en"><![endif]-->
    <head>

        <!--
            Hello!
            If you are reading this then I guess you might
            want to work with me. Drop me an email -
            hello [at] dotmonster [dot] co

            I am available for most front end projects.
        -->

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="cleartype" content="on">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <link rel="canonical" href="<?php echo $page_url ?>" />
        <meta property="og:locale" content="en_GB" />
        <meta property="og:type" content="<?php if ($current_page == "blog") { echo "article"; } else { echo "website";}?>" />
        <meta property="og:title" content="<?php echo $page_title ?>" />
        <meta property="og:description" content="<?php echo $page_desc ?>" />
        <meta property="og:url" content="<?php echo $page_url ?>" />
        <meta property="og:site_name" content="Dot Monster" />
        <meta property="og:image" content="/images/dotmonster.png" />
        <meta name="google-site-verification" content="gWkaa68l8AvSeyL-KzEAidxXNv6Ef436aGyV0-V2Mns" />

        <!-- Title -->
        <title><?php echo $page_title ?></title>
        <meta name="description" content="<?php echo $page_desc ?>"/>

        <!-- With Style -->
        <link rel="stylesheet" href="/style/css/style.css?ver=<?php echo $ver ?>">
        <link rel="stylesheet" href="/style/css/print.css" media="print">
        <!-- favicon -->
        <link rel="Shortcut Icon" href="/images/favicon.ico" type="image/x-icon" />
        <!-- non-retina iPhone pre iOS 7 -->
        <link rel="apple-touch-icon" href="/images/icon1.png" sizes="57x57">
        <!-- non-retina iPad pre iOS 7 -->
        <link rel="apple-touch-icon" href="/images/icon2.png" sizes="72x72">
        <!-- non-retina iPad iOS 7 -->
        <link rel="apple-touch-icon" href="/images/icon3.png" sizes="76x76">
        <!-- retina iPhone pre iOS 7 -->
        <link rel="apple-touch-icon" href="/images/icon4.png" sizes="114x114">
        <!-- retina iPhone iOS 7 -->
        <link rel="apple-touch-icon" href="/images/icon5.png" sizes="120x120">
        <!-- retina iPad pre iOS 7 -->
        <link rel="apple-touch-icon" href="/images/icon6.png" sizes="144x144">
        <!-- retina iPad iOS 7 -->
        <link rel="apple-touch-icon" href="/images/icon7.png" sizes="152x152">

        <!-- Author Stuff -->
        <link rel="author" href="https://plus.google.com/100959408711852125603"/>
        <link rel="publisher" href="https://plus.google.com/110919449826589972974"/>
        <meta name="author" content="Rab Ritchie">
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:site" content="@ItsRab">
        <meta name="twitter:creator" content="@ItsRab">
        <meta name="twitter:title" content="<?php echo $page_title ?>"/>
        <meta name="twitter:description" content="<?php echo $page_desc ?>"/>

        <link rel="alternate" type="application/rss+xml" title="Dot Monster Blog Feed" href="/feed/" />

        <!-- Scripts -->
        <script src="/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="text/javascript" src="//use.typekit.net/nyd0nps.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <!--[if lt IE 9]>
            <script src="/js/html5shiv.min.js"></script>
            <link rel="stylesheet" href="/style/css/ie.css">
        <![endif]-->

    </head>

    <body id="top" class="<?php echo $current_page; ?>">

<?php
    // Display a different header for the blog and post pages
    if ($current_page == "blog") {
        // Will pull some variables from the individual pages to build up the header. Featured image style
        include("_header-banner-blog.php");
    } else {
        // This is set everywhere else
        include("_header-banner.php");
    }
?>

<?php include("_nav.php"); ?>

<?php
    if ($current_page == "home") { ?>
        <!--[if lt IE 9]>
            <p class="browsehappy">Don’t worry, nothing is wrong as such, it’s just I noticed that you’re using an <strong>old</strong> web browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> if you can. You will make the web a better place, and you’ll be a super hero. Not to mention everything, everywhere, will look better for you.</p>
        <![endif]-->
    <?php }
?>

<?php
    include('perch/runtime.php');
    $domain = 'http://'.$_SERVER['HTTP_HOST'];
    PerchSystem::set_var('domain', $domain);
    header('Content-type: application/xml');
    echo '<'.'?xml version="1.0" encoding="UTF-8"?'.'>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">

    <url>
        <loc><?php echo PerchUtil::html($domain); ?>/</loc>
        <priority>1</priority>
    </url>

    <url>
        <loc><?php echo PerchUtil::html($domain); ?>/design/</loc>
        <priority>0.7</priority>
    </url>

    <url>
        <loc><?php echo PerchUtil::html($domain); ?>/hire/</loc>
        <priority>0.8</priority>
    </url>

    <url>
        <loc><?php echo PerchUtil::html($domain); ?>/hire/sprint</loc>
        <priority>0.6</priority>
    </url>

    <url>
        <loc><?php echo PerchUtil::html($domain); ?>/agree/</loc>
        <priority>0.6</priority>
    </url>

    <url>
        <loc><?php echo PerchUtil::html($domain); ?>/flow/</loc>
        <priority>0.6</priority>
    </url>

    <url>
        <loc><?php echo PerchUtil::html($domain); ?>/blog/</loc>
        <priority>0.8</priority>
        <changefreq>weekly</changefreq>
    </url>

    <?php
        perch_blog_custom(array(
            'template'=>'sitemap.html',
            'count'=>500,
            'sort'=>'postDateTime',
            'sort-order'=>'DESC'
        ));
    ?>
</urlset>
<?php include('../perch/runtime.php'); ?>
<?php
    $domain = 'http://'.$_SERVER['HTTP_HOST'];
    PerchSystem::set_var('domain', $domain);

    header('Content-Type: application/rss+xml');

    echo '<'.'?xml version="1.0" encoding="UTF-8"?'.'>';
?>

<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title>Dot Monster Blog</title>
        <link><?php echo PerchUtil::html($domain); ?>/blog/</link>
        <description>Occasional writings about design, web and maybe even photography. Wouldn’t you be so lucky.</description>
        <atom:link href="<?php echo PerchUtil::html($domain); ?>/blog/rss.php" rel="self" type="application/rss+xml" />
        <?php
            perch_blog_custom(array(
                'template'=>'rss_post.html',
                'count'=>20,
                'sort'=>'postDateTime',
                'sort-order'=>'DESC'
                ));
        ?>
    </channel>
</rss>
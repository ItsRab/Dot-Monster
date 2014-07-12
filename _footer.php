         <footer class="footer" role="contentinfo">
            <div class="constraint--wide">
                <p><span class="mob-hide">My next client looks just like you. Weird. </span>Send me <a href="mailto:<?php echo $curr_email;?>@dotmonster.co">an email</a> or <a href="https://twitter.com/ItsRab" title="@ItsRab on Twitter">Tweet</a> and we can get cracking! I’m also on <a href="https://dribbble.com/itsrab" title="ItsRab on Dribbble">Dribbble</a>, <a href="https://github.com/ItsRab" title="ItsRab on GitHub">GitHub</a>, and even <a href="http://www.linkedin.com/in/ItsRab" title="ItsRab on LinkedIn">LinkedIn</a>.</p>
                <p>Check out a sample <a href="/agree/">Working Agreement</a> and <a href="/flow/">Project Flow</a>.</p>
                <p class="small">Established 2011. Design &amp; Content &#169; <?php echo date('Y');?> Dot Monster<span class="mob-hide">, unless it was someone else</span>.<p>
            </div><!-- .constraint -->
        </footer>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-17753719-8', 'auto');
          ga('send', 'pageview');

        </script>
        <?php if ($current_page == 'hire') { echo '<script src="/js/garlic-standalone.min.js"></script>'; } ?>
        <script src="/js/skrollr.min.js"></script><script type="text/javascript"> if (Modernizr.touch) { skrollr.init().destroy(); } else { var s=skrollr.init(); } </script>
    </body>
</html>
        <nav class="navigation clearfix" role="navigation">
            <ul>
                <li><a href="/" class="<?php if ($current_page == 'home') { echo 'navigation__a--active'; } else { echo 'navigation__a'; } ?>">Home</a></li>
                <li><a href="/design/" class="<?php if ($current_page == 'design') { echo 'navigation__a--active'; } else { echo 'navigation__a'; } ?>">Design</a></li>
                <li><a href="/blog/" class="<?php if ($current_page == 'blog') { echo 'navigation__a--active'; } else { echo 'navigation__a'; } ?>">Blog</a></li>
                <li><a href="/hire/" class="<?php if ($current_page == 'hire') { echo 'navigation__a--hire-active'; } else { echo 'navigation__a--hire'; } ?>">Hire!</a></li>
            </ul>
        </nav>
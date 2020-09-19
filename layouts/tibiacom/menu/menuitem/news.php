<div id="news" class="menuitem">
                                    <span onclick="MenuItemAction('news')">
                                        <div class="MenuButton"
                                             style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background.gif);">
                                            <div onmouseover="MouseOverMenuItem(this);"
                                                 onmouseout="MouseOutMenuItem(this);"><div class="Button"
                                                                                           style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background-over.gif);"></div>
                                                <span id="news_Lights" class="Lights" style="visibility: hidden;">
                                                    <div class="light_lu"
                                                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ld"
                                                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ru"
                                                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                </span>
                                                <div id="news_Icon" class="Icon"
                                                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-news.gif);"></div>
                                                <div id="news_Label" class="Label left-text">News</div>
                                                <div id="news_Extend" class="Extend"
                                                     style="background-image: url(<?php echo $layout_name; ?>/images/global/general/minus.gif);"></div>
                                            </div>
                                        </div>
                                    </span>
    <div id="news_Submenu" class="Submenu">
        <a href="?subtopic=latestnews">
            <div id="submenu_latestnews" data-menu="news" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)"
                 onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_latestnews" class="ActiveSubmenuItemIcon"
                     style="background-image: url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_latestnews" class="SubmenuitemLabel">Latest News</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <a href="?subtopic=newsarchive">
            <div id="submenu_newsarchive" data-menu="news" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)"
                 onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_newsarchive" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_newsarchive" class="SubmenuitemLabel">News Archive</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
    </div>
</div>
<div id="community" class="menuitem">
                                <span onclick="MenuItemAction('community')">
                                        <div class="MenuButton"
                                             style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background.gif);">
                                            <div onmouseover="MouseOverMenuItem(this);"
                                                 onmouseout="MouseOutMenuItem(this);"><div class="Button"
                                                                                           style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background-over.gif);"></div>
                                                <span id="community_Lights" class="Lights" style="visibility: visible;">
                                                    <div class="light_lu"
                                                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ld"
                                                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                    <div class="light_ru"
                                                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                                                </span>
                                                <div id="community_Icon" class="Icon"
                                                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-community.gif);"></div>
                                                <div id="community_Label" class="Label left-text">Community</div>
                                                <div id="community_Extend" class="Extend"
                                                     style="background-image: url(<?php echo $layout_name; ?>/images/global/general/plus.gif);"></div>
                                            </div>
                                        </div>
                                    </span>
    <div id="community_Submenu" class="Submenu">
        <a href="?subtopic=castsystem">
            <div id="submenu_castsystem" data-menu="community" class="Submenuitem"
                 onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_castsystem" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_castsystem" class="SubmenuitemLabel">Cast System</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <a href="?subtopic=characters">
            <div id="submenu_characters" data-menu="community" class="Submenuitem"
                 onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_characters" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_characters" class="SubmenuitemLabel">Characters</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <a href="?subtopic=buychar">
            <div id="submenu_buychar" data-menu="community" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)"
                 onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_buychar" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_buychar" class="SubmenuitemLabel">Buy Characteres</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <?php if ($logged) { ?>
            <a href="?subtopic=accountmanagement&action=sellchar">
                <div id="submenu_sellchar" data-menu="community" class="Submenuitem"
                     onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                    <div class="LeftChain"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                    <div id="ActiveSubmenuItemIcon_sellchar" class="ActiveSubmenuItemIcon"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                    <div id="ActiveSubmenuItemLabel_sellchar" class="SubmenuitemLabel">Sell Characteres</div>
                    <div class="RightChain"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                </div>
            </a>
        <?php } ?>
        <a href="?subtopic=worlds">
            <div id="submenu_worlds" data-menu="community" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)"
                 onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_worlds" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_worlds" class="SubmenuitemLabel">Worlds</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <a href="?subtopic=highscores">
            <div id="submenu_highscores" data-menu="community" class="Submenuitem"
                 onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_highscores" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_highscores" class="SubmenuitemLabel">Highscores</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <a href="?subtopic=killstatistics">
            <div id="submenu_killstatistics" data-menu="community" class="Submenuitem"
                 onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_killstatistics" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_killstatistics" class="SubmenuitemLabel">Kill Statistics</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <!--
                                    <a href="?subtopic=houses">
                                        <div id="submenu_houses" data-menu="community" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                                            <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                            <div id="ActiveSubmenuItemIcon_houses" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                                            <div id="ActiveSubmenuItemLabel_houses" class="SubmenuitemLabel">Houses</div>
                                            <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                                        </div>
                                    </a>-->
        <a href="?subtopic=guilds">
            <div id="submenu_guilds" data-menu="community" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)"
                 onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_guilds" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_guilds" class="SubmenuitemLabel">Guilds</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <a href="?subtopic=polls">
            <div id="submenu_polls" data-menu="community" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)"
                 onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_polls" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_polls" class="SubmenuitemLabel">Polls</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
    </div>
</div>
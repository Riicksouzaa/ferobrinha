<div id="library" class="menuitem">
    <span onclick="MenuItemAction('library')">
        <div class="MenuButton"
             style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background.gif);">
            <div onmouseover="MouseOverMenuItem(this);"
                 onmouseout="MouseOutMenuItem(this);">
                <div class="Button"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background-over.gif);"></div>
                <span id="library_Lights" class="Lights" style="visibility: visible;">
                    <div class="light_lu"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                    <div class="light_ld"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                    <div class="light_ru"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                </span>
                <div id="library_Icon" class="Icon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-library.gif);"></div>
                <div id="library_Label" class="Label"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/label-library.gif);"></div>
                <div id="library_Extend" class="Extend"
                     style="background-image: url(<?php echo $layout_name; ?>/images/global/general/plus.gif);"></div>
            </div>
        </div>
    </span>
    <div id="library_Submenu" class="Submenu">
        <a href="?subtopic=experiencetable">
            <div id="submenu_experiencetable" data-menu="library" class="Submenuitem"
                 onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_experiencetable" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_experiencetable" class="SubmenuitemLabel">Experience Table</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <a href="?subtopic=wikki">
            <div id="submenu_wikki" data-menu="library" class="Submenuitem"
                 onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_wikki" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_wikki" class="SubmenuitemLabel">Wikki</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <a href="?subtopic=serverinfo">
            <div id="submenu_serverinfo" data-menu="library" class="Submenuitem"
                 onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_serverinfo" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_serverinfo" class="SubmenuitemLabel">Server Info</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
    </div>
</div>
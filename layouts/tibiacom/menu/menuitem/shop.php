<div id="shop" class="menuitem">
    <span onclick="MenuItemAction('shop')">
        <div class="MenuButton"
             style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background.gif);">
            <div onmouseover="MouseOverMenuItem(this);"
                 onmouseout="MouseOutMenuItem(this);"><div class="Button"
                                                           style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background-over.gif);"></div>
                <span id="shop_Lights" class="Lights" style="visibility: visible;">
                    <div class="light_lu"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                    <div class="light_ld"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                    <div class="light_ru"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                </span>
                <div id="shop_Icon" class="Icon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-shops.gif);"></div>
                <div id="shop_Label" class="Label left-text">Shop</div>
                <div id="shop_Extend" class="Extend"
                     style="background-image: url(<?php echo $layout_name; ?>/images/global/general/plus.gif);"></div>
            </div>
        </div>
    </span>
    <div id="shop_Submenu" class="Submenu">
        <a href="?subtopic=shop">
            <div id="submenu_shop" data-menu="shop" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)"
                 onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_shop" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_shop" class="SubmenuitemLabel">Shop</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <a href="?subtopic=accountmanagement&action=donate">
            <div id="submenu_donate" data-menu="shop" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)"
                 onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_donate" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_donate" class="SubmenuitemLabel">Donate</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <?php if ($_REQUEST['subtopic'] == 'tankyou') { ?>
            <a>
                <div id="submenu_tankyou" data-menu="shop" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)"
                     onmouseout="MouseOutSubmenuItem(this)">
                    <div class="LeftChain"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                    <div id="ActiveSubmenuItemIcon_tankyou" class="ActiveSubmenuItemIcon"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                    <div id="ActiveSubmenuItemLabel_tankyou" class="SubmenuitemLabel">Thank You!</div>
                    <div class="RightChain"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                </div>
            </a>
        <?php } ?>
    </div>
</div>
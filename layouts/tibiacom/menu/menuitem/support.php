<div id="support" class="menuitem">
<span onclick="MenuItemAction('support')">
    <div class="MenuButton" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background.gif);">
        <div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background-over.gif);"></div>
            <span id="support_Lights" class="Lights" style="visibility: visible;">
                <div class="light_lu" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                <div class="light_ld" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                <div class="light_ru" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
            </span>
            <div id="support_Icon" class="Icon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-support.gif);"></div>
            <div id="support_Label" class="Label left-text">Support</div>
            <div id="support_Extend" class="Extend" style="background-image: url(<?php echo $layout_name; ?>/images/global/general/plus.gif);"></div>
        </div>
    </div>
</span>
    <div id="support_Submenu" class="Submenu">
        <a href="?subtopic=tibiarules">
            <div id="submenu_tibiarules" data-menu="support" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_tibiarules" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_tibiarules" class="SubmenuitemLabel"><?=$config['server']['serverName'];?> Rules</div>
                <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <a href="?subtopic=team">
            <div id="submenu_team" data-menu="support" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_team" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_team" class="SubmenuitemLabel"><?=$config['server']['serverName'];?> Support</div>
                <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <?php if($_REQUEST["subtopic"] == "erro"){?>
            <a href="?subtopic=erro">
                <div id="submenu_erro" data-menu="support" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                    <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                    <div id="ActiveSubmenuItemIcon_erro" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                    <div id="ActiveSubmenuItemLabel_erro" class="SubmenuitemLabel">Erro</div>
                    <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                </div>
            </a>
        <?php } ?>
        <?php if (isset($_SESSION['account'])){?>
            <a href="?subtopic=ticket">
                <div id="submenu_ticket" data-menu="support" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                    <div class="LeftChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                    <div id="ActiveSubmenuItemIcon_ticket" class="ActiveSubmenuItemIcon" style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                    <div id="ActiveSubmenuItemLabel_ticket" class="SubmenuitemLabel">Ticket Support</div>
                    <div class="RightChain" style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                </div>
            </a>
        <?php } ?>
    </div>
</div>
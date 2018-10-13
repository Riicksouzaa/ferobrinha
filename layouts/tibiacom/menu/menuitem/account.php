<div id="account" class="menuitem">
    <span onclick="MenuItemAction('account')">
        <div class="MenuButton"
             style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background.gif);">
            <div onmouseover="MouseOverMenuItem(this);"
                 onmouseout="MouseOutMenuItem(this);"><div class="Button"
                                                           style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background-over.gif);"></div>
                <span id="account_Lights" class="Lights" style="visibility: visible;">
                    <div class="light_lu"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                    <div class="light_ld"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                    <div class="light_ru"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                </span>
                <div id="account_Icon" class="Icon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-account.gif);"></div>
                <div id="account_Label" class="Label"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/label-account.gif);"></div>
                <div id="account_Extend" class="Extend"
                     style="background-image: url(<?php echo $layout_name; ?>/images/global/general/plus.gif);"></div>
            </div>
        </div>
    </span>
    <div id="account_Submenu" class="Submenu">
        <a href="?subtopic=accountmanagement&page=overview">
            <div id="submenu_accountmanagement" data-menu="account" class="Submenuitem"
                 onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_accountmanagement" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_accountmanagement" class="SubmenuitemLabel">Account Management</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <?php if ($group_id_of_acc_logged >= $config['site']['access_admin_panel']) { ?>
            <a href="?subtopic=adminpanel">
                <div id="submenu_adminpanel" data-menu="account" class="Submenuitem"
                     onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                    <div class="LeftChain"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                    <div id="ActiveSubmenuItemIcon_adminpanel" class="ActiveSubmenuItemIcon"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                    <div id="ActiveSubmenuItemLabel_adminpanel" class="SubmenuitemLabel">Admin Panel</div>
                    <div class="RightChain"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                </div>
            </a>
        <?php } ?>
        <?php if (!$logged) { ?>
            <a href="?subtopic=createaccount">
                <div id="submenu_createaccount" data-menu="account" class="Submenuitem"
                     onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                    <div class="LeftChain"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                    <div id="ActiveSubmenuItemIcon_createaccount" class="ActiveSubmenuItemIcon"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                    <div id="ActiveSubmenuItemLabel_createaccount" class="SubmenuitemLabel">Create Account</div>
                    <div class="RightChain"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                </div>
            </a>
        <?php } ?>
        <a href="?subtopic=downloadclient&step=downloadagreement">
            <div id="submenu_downloadclient" data-menu="account" class="Submenuitem"
                 onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_downloadclient" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_downloadclient" class="SubmenuitemLabel">Download Client</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <a href="?subtopic=lostaccount">
            <div id="submenu_lostaccount" data-menu="account" class="Submenuitem"
                 onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_lostaccount" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_lostaccount" class="SubmenuitemLabel">Lost Account</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
    </div>
</div>
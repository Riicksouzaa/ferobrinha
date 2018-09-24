<div id="events" class="menuitem">
    <span onclick="MenuItemAction('events')">
        <div class="MenuButton"
             style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background.gif);">
            <div onmouseover="MouseOverMenuItem(this);" onmouseout="MouseOutMenuItem(this);">
                <div class="Button"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/button-background-over.gif);"></div>
                <span id="events_Lights" class="Lights" style="visibility: visible;">
                    <div class="light_lu"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                    <div class="light_ld"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                    <div class="light_ru"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/green-light.gif);"></div>
                </span>
                <div id="events_Icon" class="Icon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-events.png);"></div>
                <div id="events_Label" class="Label"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/label-eventos.png);"></div>
                <div id="events_Extend" class="Extend"
                     style="background-image: url(<?php echo $layout_name; ?>/images/global/general/plus.gif);"></div>
            </div>
        </div>
    </span>
    <?php
    $events = new Events();
    $arrEv = $events->getArrGroupNames();
    ?>
    <div id="events_Submenu" class="Submenu">
        <a href="?subtopic=calendario">
            <div id="submenu_calendario" data-menu="events" class="Submenuitem" onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                <div class="LeftChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                <div id="ActiveSubmenuItemIcon_calendario" class="ActiveSubmenuItemIcon"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                <div id="ActiveSubmenuItemLabel_calendario" class="SubmenuitemLabel">Calendário</div>
                <div class="RightChain"
                     style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
            </div>
        </a>
        <?php foreach ($arrEv as $key => $value) { ?>
            <a href="?subtopic=events&name=<?= urlencode($value) ?>">
                <div id="submenu_<?= $key ?>" data-menu="events" class="Submenuitem"
                     onmouseover="MouseOverSubmenuItem(this)" onmouseout="MouseOutSubmenuItem(this)">
                    <div class="LeftChain"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                    <div id="ActiveSubmenuItemIcon_<?= $key ?>" class="ActiveSubmenuItemIcon"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/menu/icon-activesubmenu.gif);"></div>
                    <div id="ActiveSubmenuItemLabel_<?= $key ?>" class="SubmenuitemLabel"><?= $value ?></div>
                    <div class="RightChain"
                         style="background-image:url(<?php echo $layout_name; ?>/images/global/general/chain.gif);"></div>
                </div>
            </a>
        <?php } ?>
    </div>
</div>
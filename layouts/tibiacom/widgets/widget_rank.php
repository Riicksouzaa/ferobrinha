<?php if (Website::getWebsiteConfig()->getValue('widget_rank')) { ?>
    <!-- TOP LEVEL -->
    <div id="TopLvl">
        <p class="rank_pbot_copyright"><a href="http://pbotwars.com.br/">design by pbot</a></p>
        <style>
            @font-face {
                font-family: Codenome;
                src: url(Anurati-regular.otf);
            }

            .codenome-font {
                font-family: Codenome;
                text-transform: uppercase;
            }
        </style>
        <p class="rank_copyright"><a class="codenome-font" href="https://codenome.com/">codenome</a></p>
        <h3 class="TopLvl_title">Top <?php $qtd = Website::getWebsiteConfig()->getValue('top_lvl_qtd');
            $qtd = ($qtd < 1 ? 1 : $qtd > 5 ? 5 : $qtd);
            echo $qtd; ?> Experience</h3>
        <?php
        $a = 1;
        //    $queryOnline = $SQL->query('SELECT * , p.level FROM player_storage a INNER JOIN  players p ON  a.player_id = p.id WHERE a.key = 48506 AND a.value >= 0 ORDER BY a.value DESC, p.level DESC LIMIT 5');
        $queryOnline = $SQL->query('SELECT * from players p where p.group_id not in (5,6,7) and p.account_id != 1 order by p.level DESC, p.experience DESC LIMIT ' . $qtd);
        foreach ($queryOnline as $results) {
            $player = new Player();
            $player->loadById($results['id']);
            if (TRUE) {
                $currentMount = $player->getStorage(10002001 + 10);
                ?>
                <div class="tplevellayout">
                <?php
                if (!$player->isOnline()) {
                    echo '<a class="topleveltext top_offline" style="text-decoration:none" href="?subtopic=characters&name=' . urlencode($player->getName()) . '">';
                } else {
                    echo '<a class="topleveltext top_online" style="text-decoration:none" href="?subtopic=characters&name=' . urlencode($player->getName()) . '">';
                }
                ?>
                <span><?= $a ?></span> - <?= $player->getName() ?>
                <br>
                <small>&nbsp;&nbsp;&nbsp;Level: (<?php echo $player->getLevel() ?>)
                    <br/>
                    &nbsp;&nbsp;&nbsp;<?= $player->getVocationName(); ?>
                </small>
                </a>
                <?php echo '<img class="outfitImgtoplevel"
                        src="https://outfits.ferobraglobal.com/animoutfit.php?id=' . $player->getLookType() . '&addons=' . (($player->getLookType() >= 950 && $player->getLookType() <= 952) ? 0 : $player->getLookAddons()) . '&head=' . $player->getLookHead() . '&body=' . $player->getLookBody() . '&legs=' . $player->getLookLegs() . '&feet=' . $player->getLookFeet() . '&mount=' . (($currentMount && $player->getLookType() < 948) ? $currentMount : 0) . '"/>' ?>
                <?php if ($a == 1) { ?>
                    <div><span class="firstlevel"><span id="firstlevel"></span></span></div>
                    <div class="rankinglevel"><span class="firstlevel"><span
                                    id="<?php $m = ($player->getLookMount() == 0 ? "firstlevel_nomount" : "firstlevel_mount");
                                    echo $m; ?>"></span></span></div>
                <?php } elseif ($a == 2) { ?>
                    <div><span class="secondlevel"><span id="seccondlevel"></span></span></div>
                    <div class="rankinglevel"><span class="secondlevel"><span
                                    id="<?php $m = ($player->getLookMount() == 0 ? "seccondlevel_nomount" : "seccondlevel_mount");
                                    echo $m; ?>"></span></span></div>
                <?php } elseif ($a == 3) { ?>
                    <div><span class="thirdlevel"><span id="thirdlevel"></span></span></div>
                    <div class="rankinglevel"><span class="thirdlevel"><span
                                    id="<?php $m = ($player->getLookMount() == 0 ? "thirdlevel_nomount" : "thirdlevel_mount");
                                    echo $m; ?>"></span></span></div>
                    <!--                <hr style="margin: 5px 0px 0 -29px;"/>-->
                <?php }
                $a++;
            }
            ?>
            </div>
            <?php
        } ?>
    </div>
    <!-- #END# TOP LEVEL -->
<?php } ?>

<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 17/03/2018
 * Time: 22:33
 */

//$mountid = 23 - 1;
$mountid = 1 - 1;
//$unpack = unpack("C", $mountid);
$mountkey = (int)abs(10002001 +($mountid / 31));



$mountvalue = (1 << $mountid % 31);
$pq = $SQL->query("SELECT * FROM player_storage a where a.player_id = 33 and a.`key` = $mountkey")->fetchAll();
//var_dump($pq);
$mountvalue = $pq[0]['value'];
if($pq){
    $mountvalue += (1 << ($mountid % 31));
}else{
    $mountvalue = (1 << ($mountid % 31));
}
//var_dump($mountid);
//var_dump($unpack);
//var_dump($mountkey);
//var_dump($mountvalue);

$player_id = $_REQUEST['id'];
if ($player_id) {

    $valida_id = $SQL->prepare("SELECT * FROM players WHERE id = :id");
    $valida_id->execute(['id' => $player_id]);
    if ($valida_id > 0) {
        $main_content .= '

<div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
            <span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/content/table-headline-border.gif);"></span>
            <span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/content/table-headline-border.gif);"></span> 
            <span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/content/box-frame-vertical.gif);"></span>   
            <div class="Text">Character Informations</div>
            <span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/content/box-frame-vertical.gif);"></span>
            <span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/content/table-headline-border.gif)></span>
                <span class=" captionedgeleftbottom"=""></span>
            <span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);"></span>
        </div>
    </div>
    <table class="Table3" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <div class="InnerTableContainer">
                        <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="TableShadowContainerRightTop">
                                            <div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rt.gif);"></div>
                                        </div>
                                        <div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rm.gif);">
                                            <div class="TableContentContainer">
                                                <table class="TableContent" width="100%">
                                                    <tbody>
                                                        <tr bgcolor="#D4C0A1">
                                                            <td><strong>Character Value:</strong></td>
                                                            <td>220 premium points</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bm.gif);">
                                                <div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bl.gif);"></div>
                                                <div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-br.gif);"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="TableShadowContainerRightTop">
                                            <div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rt.gif);"></div>
                                        </div>
                                        <div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rm.gif);">
                                            <div class="TableContentContainer">
                                                <table class="TableContent" width="100%">
                                                    <tbody>
                                                        <tr bgcolor="#D4C0A1">
                                                            <td><strong>Character</strong></td>
                                                            <td><strong>Inventário</strong></td>
                                                            <td><strong>Addons</strong></td>
                                                        </tr>
                                                        <tr bgcolor="#F1E0C6">
                                                            <td width="33%" rowspan="3">
                                                                <center>
                                                                    <span>
                                                                        <div class="outfitImgsell2" style="background-image:url(\'/animoutfit.php?id=130&amp;addons=3&amp;head=59&amp;body=94&amp;legs=85&amp;feet=115\');"></div>
                                                                    </span>
                                                                    <img style="text-decoration:none;margin: 0 0 0 -13px;"
                                                                    src="https://outfits.ferobraglobal.com/animoutfit.php?id=962&addons=0&head=0&body=0&legs=0&feet=0&mount=1027"/><br>
                                                                    <a href="?subtopic=characters&amp;name=Nitrox+Furious">Nitrox Furious</a> <br>
                                                                    (
                                                                    <font size="1">
                                                                        Elite Knight)<br>
                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="1">
                                                                            <tbody>
                                                                                <tr bgcolor="#505050">
                                                                                </tr>
                                                                                <tr bgcolor="#D4C0A1">
                                                                                    <td><font size="1"><b>Level:</b></font></td>
                                                                                    <td width="70%"><font size="1">421</font></td>
                                                                                </tr>
                                                                                <tr bgcolor="#F1E0C6">
                                                                                    <td><font size="1"><b>Magic:</b></font></td>
                                                                                    <td width="70%"><font size="1">13</font></td>
                                                                                </tr>
                                                                                <tr bgcolor="#D4C0A1">
                                                                                    <td><font size="1"><b>Fist:</b></font></td>
                                                                                    <td width="70%"><font size="1">12</font></td>
                                                                                </tr>
                                                                                <tr bgcolor="#F1E0C6">
                                                                                    <td><font size="1"><b>Club:</b></font></td>
                                                                                    <td width="70%"><font size="1">10</font></td>
                                                                                </tr>
                                                                                <tr bgcolor="#D4C0A1">
                                                                                    <td><font size="1"><b>Sword:</b></font></td>
                                                                                    <td width="70%"><font size="1">134</font></td>
                                                                                </tr>
                                                                                <tr bgcolor="#F1E0C6">
                                                                                    <td><font size="1"><b>Axe:</b></font></td>
                                                                                    <td width="70%"><font size="1">13</font></td>
                                                                                </tr>
                                                                                <tr bgcolor="#D4C0A1">
                                                                                    <td><font size="1"><b>Distance:</b></font></td>
                                                                                    <td width="70%"><font size="1">10</font></td>
                                                                                </tr>
                                                                                <tr bgcolor="#F1E0C6">
                                                                                    <td><font size="1"><b>Shielding:</b></font></td>
                                                                                    <td width="70%"><font size="1">131</font></td>
                                                                                </tr>
                                                                                <tr bgcolor="#D4C0A1">
                                                                                    <td><font size="1"><b>Fishing:</b></font></td>
                                                                                    <td width="70%"><font size="1">10</font></td>
                                                                                </tr>
                                                                                <tr bgcolor="#F1E0C6">
                                                                                    <td><font size="1"><b>Balance:</b></font></td>
                                                                                    <td width="70%"><font size="1"><font color="#00CD00"><b>$</b></font> 0</font></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </font>
                                                                </center>
                                                                <font size="1">
                                                                </font>
                                                            </td>
                                                            <td align="center" rowspan="3">
                                                                <table with="100%" style="border: solid 1px #888888;" cellspacing="1">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="background-color: #d4c0a1; text-align: center;"><img src="./layouts/tibiacom/images/shop/items/2.gif" width="44" higth="44"></td>
                                                                            <td style="background-color: #d4c0a1; text-align: center;"><img src="./layouts/tibiacom/images/shop/items/1.gif" width="44" higth="44"></td>
                                                                            <td style="background-color:#d4c0a1; text-align: center;"><img src="./layouts/tibiacom/images/shop/items/3.gif" width="44" higth="44"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="background-color: #d4c0a1; text-align: center;"><img src="./layouts/tibiacom/images/shop/items/6.gif" width="44" higth="44"></td>
                                                                            <td style="background-color: #d4c0a1; text-align: center;"><img src="./layouts/tibiacom/images/shop/items/4.gif" width="44" higth="44"></td>
                                                                            <td style="background-color:#d4c0a1; text-align: center;"><img src="./layouts/tibiacom/images/shop/items/5.gif" width="44" higth="44"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="background-color: #d4c0a1; text-align: center;"><img src="./layouts/tibiacom/images/shop/items/9.gif" width="44" higth="44"></td>
                                                                            <td style="background-color: #d4c0a1; text-align: center;"><img src="./layouts/tibiacom/images/shop/items/7.gif" width="44" higth="44"></td>
                                                                            <td style="background-color:#d4c0a1; text-align: center;"><img src="./layouts/tibiacom/images/shop/items/10.gif" width="44" higth="44"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="background-color: #D4C0A1; text-align: center;">Soul:<br>100</td>
                                                                            <td style="background-color: #d4c0a1; text-align: center;"><img src="./layouts/tibiacom/images/shop/items/8.gif" width="44" higth="44"></td>
                                                                            <td style="background-color: #D4C0A1; text-align: center;">Cap:<br>11175</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td width="30%" valign="top">
                                                            <font size="1">
                                                            ';
        if ($getPlayerOutfitsByPlayerId($player_id) != false) {
            $eoq = $getPlayerOutfitsByPlayerId($player_id);
            $main_content .= "<div>";
            $main_content .= "<p>{$players['name']}</p>";
            foreach ($eoq as $value) {
                $main_content .= "<img src='https://outfits.ferobraglobal.com/animoutfit.php?id={$value['looktype']}&addons={$value['addon']}&head=0&body=0&legs=0&feet=0&mount=0&direction=3'>";
            }
            $main_content .= "</div>";
        }

        $main_content .= '
                                                            </font>
                                                            </td>
                                                        </tr>
                                                        <tr bgcolor="#D4C0A1">
                                                            <td><strong>Mounts</strong></td>
                                                        </tr>
                                                        <tr bgcolor="#F1E0C6">
                                                            <td width="30%" valign="top">';

        if($getPlayerMountsByPlayerId($player_id) != false){
            $eoq = $getPlayerMountsByPlayerId($player_id);
            $main_content .= "<div>";
            $main_content .= "<p>{$players['name']}</p>";
            foreach ($eoq as $key => $value) {
                $main_content .= "<img src='https://outfits.ferobraglobal.com/animoutfit.php?id={$value['clientid']}'>";
            }
            $main_content .= "</div>";
        }

        $main_content.='                                    </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bm.gif);">
                                                <div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bl.gif);"></div>
                                                <div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-br.gif);"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="TableShadowContainerRightTop">
                                            <div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rt.gif);"></div>
                                        </div>
                                        <div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rm.gif);">
                                            <div class="TableContentContainer">
                                                <table class="TableContent" width="100%">
                                                    <tbody>
                                                        <tr bgcolor="">
                                                            <td style="border:1px solid #faf0d7;width:95px;">Items DEPOT:</td>
                                                            <td style="border:1px solid #faf0d7;">
                                                                <img id="Buttondepot" onmousedown="ToggleMaskedText(\'depot\');" style="cursor:pointer;" src="./layouts/tibiacom/images/global/general/show.gif"><span id="Displaydepot"></span><span id="Maskeddepot" style="visibility:hidden;display:none"></span>
                                                                <span id="Readabledepot" style="visibility:hidden;display:none">
                                                                    <br><br>
                                                                    <table border="1" style="width:100%">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2596.gif"><br>Name:Stamped Parcel<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/1970.gif"><br>Name:Holy Tible<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/1988.gif"><br>Name:Backpack<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2487.gif"><br>Name:Crown Armor<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/5928.gif"><br>Name:Empty Goldfish Bowl<br>Qnt:1</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/6512.gif"><br>Name:Santa Doll<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/9693.gif"><br>Name:Jester Doll<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/11255.gif"><br>Name:Santa Teddy<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2598.gif"><br>Name:Stamped Letter<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2598.gif"><br>Name:Stamped Letter<br>Qnt:1</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2598.gif"><br>Name:Stamped Letter<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2598.gif"><br>Name:Stamped Letter<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2598.gif"><br>Name:Stamped Letter<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2598.gif"><br>Name:Stamped Letter<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/5911.gif"><br>Name:Red Piece Of Cloth<br>Qnt:15</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/6512.gif"><br>Name:Santa Doll<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/9693.gif"><br>Name:Jester Doll<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/11255.gif"><br>Name:Santa Teddy<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7404.gif"><br>Name:Assassin Dagger<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/1987.gif"><br>Name:Bag<br>Qnt:1</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2000.gif"><br>Name:Red Backpack<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:96</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:29</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/8473.gif"><br>Name:Ultimate Health Potion<br>Qnt:12</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/8473.gif"><br>Name:Ultimate Health Potion<br>Qnt:100</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/8473.gif"><br>Name:Ultimate Health Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/8473.gif"><br>Name:Ultimate Health Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:66</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7620.gif"><br>Name:Mana Potion<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/5911.gif"><br>Name:Red Piece Of Cloth<br>Qnt:48</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/5914.gif"><br>Name:Yellow Piece Of Cloth<br>Qnt:70</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/5912.gif"><br>Name:Blue Piece Of Cloth<br>Qnt:9</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/11308.gif"><br>Name:Drachaku<br>Qnt:1</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2268.gif"><br>Name:Sudden Death Rune<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2268.gif"><br>Name:Sudden Death Rune<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2268.gif"><br>Name:Sudden Death Rune<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2268.gif"><br>Name:Sudden Death Rune<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2268.gif"><br>Name:Sudden Death Rune<br>Qnt:100</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2268.gif"><br>Name:Sudden Death Rune<br>Qnt:100</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7404.gif"><br>Name:Assassin Dagger<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2392.gif"><br>Name:Fire Sword<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7760.gif"><br>Name:Small Enchanted Ruby<br>Qnt:99</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/7759.gif"><br>Name:Small Enchanted Sapphire<br>Qnt:25</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2656.gif"><br>Name:Blue Robe<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2496.gif"><br>Name:Horned Helmet<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/2496.gif"><br>Name:Horned Helmet<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/6528.gif"><br>Name:Avenger<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/12645.gif"><br>Name:Elite Draken Helmet<br>Qnt:1</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/9778.gif"><br>Name:Yalahari Mask<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/9778.gif"><br>Name:Yalahari Mask<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/9778.gif"><br>Name:Yalahari Mask<br>Qnt:1</td>
                                                                                <td><img class="boxmarket" src="./layouts/tibiacom/images/shop/items/9778.gif"><br>Name:Yalahari Mask<br>Qnt:1</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bm.gif);">
                                                <div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bl.gif);"></div>
                                                <div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-br.gif);"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="TableShadowContainerRightTop">
                                            <div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rt.gif);"></div>
                                        </div>
                                        <div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-rm.gif);">
                                            <div class="TableContentContainer">
                                                <table class="TableContent" width="100%">
                                                    <tbody>
                                                        <tr bgcolor="">
                                                            <td style="border:1px solid #faf0d7;width:95px;">Player ITEMS:</td>
                                                            <td style="border:1px solid #faf0d7;">
                                                                <img id="Buttonitem" onmousedown="ToggleMaskedText(\'item\');" style="cursor:pointer;" src="./layouts/tibiacom/images/global/general/show.gif"><span id="Displayitem"></span><span id="Maskeditem" style="visibility:hidden;display:none"></span>
                                                                <span id="Readableitem" style="visibility:hidden;display:none">
                                                                    <br><br>
                                                                    <table border="1" style="width:100%">
                                                                        <tbody>
                                                                            <tr></tr>
                                                                        </tbody>
                                                                    </table>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bm.gif);">
                                                <div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-bl.gif);"></div>
                                                <div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/content/table-shadow-br.gif);"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <center>
                                            <form name="comprarChar" id="comprarChar" value="Concluir compra" method="post" style="padding:0px;margin:0px;">
                                                <div class="BigButton" style="background-image:url(./layouts/tibiacom/images/buttons/sbutton_green.gif)">
                                                    <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                                                        <div class="BigButtonOver" style="background-image:url(./layouts/tibiacom/images/buttons/sbutton_green_over.gif);"></div>
                                                                                                                
                                                        <input type="hidden" name="buyCharId" id="buyCharId" value="408984">
                                                        <input type="hidden" name="buyerId" id="buyerId" value="298984">
                                                    </div>
                                                </div>
                                            </form>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>


';
    } else {
        header("Location: ./");
    }
} else {
    header("Location: ./");
}

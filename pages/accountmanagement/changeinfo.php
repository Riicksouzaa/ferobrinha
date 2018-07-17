<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 17/07/2018
 * Time: 18:02
 */

$new_rlname = htmlspecialchars(trim($_POST['info_rlname']));
$new_location = htmlspecialchars(trim($_POST['info_location']));
if ($_POST['changeinfosave'] == 1) {
    //save data from form
    $account_logged->set("rlname", $new_rlname);
    $account_logged->set("location", $new_location);
    $account_logged->save();
    $main_content .= '<div class="TableContainer" >  <table class="Table1" cellpadding="0" cellspacing="0" >    <div class="CaptionContainer" >      <div class="CaptionInnerContainer" >        <span class="CaptionEdgeLeftTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);" /></span>        <span class="CaptionEdgeRightTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);" /></span>        <span class="CaptionBorderTop" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);" ></span>        <span class="CaptionVerticalLeft" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);" /></span>        <div class="Text" >Public Information Changed</div>        <span class="CaptionVerticalRight" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);" /></span>        <span class="CaptionBorderBottom" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);" ></span>        <span class="CaptionEdgeLeftBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);" /></span>        <span class="CaptionEdgeRightBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);" /></span>      </div>    </div>    <tr>      <td>        <div class="InnerTableContainer" >          <table style="width:100%;" ><tr><td>Your public information has been changed.</td></tr>          </table>        </div>  </table></div></td></tr><br><center><table border="0" cellspacing="0" cellpadding="0" ><form action="?subtopic=accountmanagement" method="post" ><tr><td style="border:0px;" ><div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="' . $layout_name . '/images/global/buttons/_sbutton_back.gif" ></div></div></td></tr></form></table></center>';
} else {
    //show form
    $account_rlname = $account_logged->getCustomField("rlname");
    $account_location = $account_logged->getCustomField("location");
    $main_content .= 'Here you can tell other players about yourself. This information will be displayed alongside the data of your characters. If you do not want to fill in a certain field, just leave it blank.<br/><br/><form action="?subtopic=accountmanagement&action=changeinfo" method=post><div class="TableContainer" >  <table class="Table1" cellpadding="0" cellspacing="0" >    <div class="CaptionContainer" >      <div class="CaptionInnerContainer" >        <span class="CaptionEdgeLeftTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);" /></span>        <span class="CaptionEdgeRightTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);" /></span>        <span class="CaptionBorderTop" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);" ></span>        <span class="CaptionVerticalLeft" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);" /></span>        <div class="Text" >Change Public Information</div>        <span class="CaptionVerticalRight" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);" /></span>        <span class="CaptionBorderBottom" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);" ></span>        <span class="CaptionEdgeLeftBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);" /></span>        <span class="CaptionEdgeRightBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);" /></span>      </div>    </div>    <tr>      <td>        <div class="InnerTableContainer" >          <table style="width:100%;" ><tr><td class="LabelV" >Real Name:</td><td style="width:90%;" ><input name="info_rlname" value="' . $account_rlname . '" size="30" maxlength="50" ></td></tr><tr><td class="LabelV" >Location:</td><td><input name="info_location" value="' . $account_location . '" size="30" maxlength="50" ></td></tr></table>        </div>  </table></div></td></tr><br/><table width="100%"><tr align="center"><td><table border="0" cellspacing="0" cellpadding="0" ><tr><td style="border:0px;" ><input type="hidden" name="changeinfosave" value="1" ><div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Submit" alt="Submit" src="' . $layout_name . '/images/global/buttons/_sbutton_submit.gif" ></div></div></td><tr></form></table></td><td><table border="0" cellspacing="0" cellpadding="0" ><form action="?subtopic=accountmanagement" method="post" ><tr><td style="border:0px;" ><div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="' . $layout_name . '/images/global/buttons/_sbutton_back.gif" ></div></div></td></tr></form></table></td></tr></table>';
}
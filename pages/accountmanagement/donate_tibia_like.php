<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 22/12/2017
 * Time: 21:14
 */

if ($logged) {
    
    /**
     * Progress Bar
     *
     * Make a donate with 4 Steps (Like now tibia)
     */
    if (!isset($_POST['step']) || $_POST['step'] == "") {
        $step = 1;
    } else {
        $step = $_POST['step'];
    }
    $main_content .= '    
        <div id="ProgressBar">
            <div id="MainContainer">
                <div id="BackgroundContainer">
                    <img id="BackgroundContainerLeftEnd" src="' . $layout_name . '/images/global/content/stonebar-left-end.gif">      
                    <div id="BackgroundContainerCenter">
                        <div id="BackgroundContainerCenterImage" style="background-image:url(' . $layout_name . '/images/global/content/stonebar-center.gif);"></div>
                    </div>
                    <img id="BackgroundContainerRightEnd" src="' . $layout_name . '/images/global/content/stonebar-right-end.gif">    
                </div>
                <img id="TubeLeftEnd" src="' . $layout_name . '/images/global/content/progressbar/progress-bar-tube-left-green.gif">    
                <img id="TubeRightEnd" src="' . $layout_name . '/images/global/content/progressbar/progress-bar-tube-right-' . (($step >= 4) ? 'green' : 'blue') . '.gif">    
                <div id="FirstStep" class="Steps">
                    <div class="SingleStepContainer">
                        <img class="StepIcon" src="' . $layout_name . '/images/global/content/progressbar/progress-bar-icon-1-green.gif">        
                        <div class="StepText" style="font-weight:' . (($step == 1) ? 'bold' : 'normal') . ';">Select product</div>
                    </div>
                </div>
                <div id="StepsContainer1">
                    <div id="StepsContainer2">
                        <div class="Steps" style="width:33%">
                            <div class="TubeContainer">            
                                <img class="Tube" src="' . $layout_name . '/images/global/content/progressbar/progress-bar-tube-green' . (($step == 1) ? '-blue' : '') . '.gif">
                            </div>
                            <div class="SingleStepContainer">
                                <img class="StepIcon" src="' . $layout_name . '/images/global/content/progressbar/progress-bar-icon-2-' . (($step >= 2) ? 'green' : 'blue') . '.gif">            
                                <div class="StepText" style="font-weight:' . (($step == 2) ? 'bold' : 'normal') . ';">Enter payment data</div>
                            </div>
                        </div>
                        <div class="Steps" style="width:33%">
                            <div class="TubeContainer">';
    if ($step < 2) {
        $main_content .= '<img class="Tube" src="' . $layout_name . '/images/global/content/progressbar/progress-bar-tube-blue.gif">';
    } elseif ($step == 2) {
        $main_content .= '<img class="Tube" src="' . $layout_name . '/images/global/content/progressbar/progress-bar-tube-green-blue.gif">';
    } else {
        $main_content .= '<img class="Tube" src="' . $layout_name . '/images/global/content/progressbar/progress-bar-tube-green.gif">';
    }
    $main_content .= '
                            </div>
                            <div class="SingleStepContainer">
                                <img class="StepIcon" src="' . $layout_name . '/images/global/content/progressbar/progress-bar-icon-3-' . (($step >= 3) ? 'green' : 'blue') . '.gif">            
                                <div class="StepText" style="font-weight:' . (($step == 3) ? 'bold' : 'normal') . ';">Confirm your order</div>
                            </div>
                        </div>
                        <div class="Steps" style="width:33%">
                            <div class="TubeContainer">';
    
    if ($step < 3) {
        $main_content .= '<img class="Tube" src="' . $layout_name . '/images/global/content/progressbar/progress-bar-tube-blue.gif">';
    } elseif ($step == 3) {
        $main_content .= '<img class="Tube" src="' . $layout_name . '/images/global/content/progressbar/progress-bar-tube-green-blue.gif">';
    } else {
        $main_content .= '<img class="Tube" src="' . $layout_name . '/images/global/content/progressbar/progress-bar-tube-green.gif">';
    }
    $main_content .= '    </div>
                            <div class="SingleStepContainer">
                                <img class="StepIcon" src="' . $layout_name . '/images/global/content/progressbar/progress-bar-icon-4-' . (($step >= 4) ? 'green' : 'blue') . '.gif">            
                                <div class="StepText" style="font-weight:' . (($step >= 4) ? 'bold' : 'normal') . ';">Summary</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">g_Deactivated = true;</script>
    ';
    
    if ($step == 1) {
        $main_content .= '
    <script src="' . $layout_name . '/changepmctibia.js"></script>
    <form method="POST">
    <div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
            <span class="CaptionEdgeLeftTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionEdgeRightTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionBorderTop" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span>        <span class="CaptionVerticalLeft" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span>        
            <div class="Text">Select product</div>
            <span class="CaptionVerticalRight" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span>        <span class="CaptionBorderBottom" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span>        <span class="CaptionEdgeLeftBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionEdgeRightBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>      
        </div>
    </div>
    <table class="Table5" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <div class="InnerTableContainer">
                        <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="TableShadowContainerRightTop">
                                            <div class="TableShadowRightTop" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rt.gif);"></div>
                                        </div>
                                        <div class="TableContentAndRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rm.gif);">
                                            <div class="TableContentContainer">
                                                <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="LabelV150"><span>Country:</span></td>
                                                            <td>
                                                                <select name="CountryCode" class="Width100Percent" onchange="this.form.submit();" onblur="CheckForReload(this)">
                                                                    <option value="">--- please select your country ---</option>
                                                                    <option value="BR" selected="selected">Brazil</option>
                                                                </select>
                                                                <input type="hidden" id="CC_ServiceID" name="InitialServiceID" value="1">
                                                                <input type="hidden" name="CountrySubmitted" value="1">
                                                                <div id="SelectCountrySubmitButton" style="float: right; display: none;">                                                                    
                                                                    <div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton.gif)">
                                                                        <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                                                                            <div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_over.gif);"></div>
                                                                            <input class="ButtonText" type="image" name="Change Country" alt="Change Country" src="' . $layout_name . '/images/global/buttons/_sbutton_changecountry.gif">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bm.gif);">
                                                <div class="TableBottomLeftShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bl.gif);"></div>
                                                <div class="TableBottomRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-br.gif);"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="HelperDivIndicator" onmouseover="ActivateHelperDiv($(this), \'Tibia Coins\', \'Tibia Coins are Tibia currency to purchase exclusive products in the Store . <br /><br />You cannot only buy Premium Time there but also treat your character to one or more of the following products: Character Name Change, Character Sex Change, (Express) Character World Transfer, outfits, addons and mounts . <br /><br />The Store can be entered ingame by clicking on the little coin icon in your character inventory. <br /><br />\', \'ProductCategoryHelperDiv_13\');" onmouseout="$(\'#HelperDivContainer\').hide();">
                                            <div class="InnerTableTab ActiveInnerTableTab">
                                                <div id="ProductCategoryHelperDiv_13" class="ProductCategoryHelperDiv"></div>
                                                <a>
                                                    <img src="' . $layout_name . '/images/payment/products_tab_active.png">
                                                    <div class="InnerTableTabLabel">Tibia Coins</div>
                                                </a>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                <form method="post" action=""></form>
                                <tr>
                                    <td>
                                        <div class="TableShadowContainerRightTop">
                                            <div class="TableShadowRightTop" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rt.gif);"></div>
                                        </div>
                                        <div class="TableContentAndRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rm.gif);">
                                            <div class="TableContentContainer">
                                                <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align: center;" align="center">
                                                                <div style="max-height: 500px; overflow-y: auto;">';
        $countOffers = 1;
        foreach ($config['donate']['offers'] as $id => $coins) {
            foreach ($coins as $reais => $coins) {
                $main_content .= '
                                                                    <div class="ServiceID_Icon_Container" id="ServiceID_Icon_Container_' . $id . '">
                                                                        <div class="ServiceID_Icon_Container_Background" id="" style="background-image:url(' . $layout_name . '/images/payment/serviceid_icon_normal.png);">
                                                                            <div class="ServiceID_Icon" id="ServiceID_Icon_' . $id . '" style="" onclick="ChangeService(' . $id . ', 13);" onmouseover="MouseOverServiceID(' . $id . ', 13);" onmouseout="MouseOutServiceID(' . $id . ', 13);">
                                                                                <div class="PermanentDeactivated ServiceID_Deactivated_ByChoice" id="ServiceID_NotAllowed_' . $id . '" style="display: none;">
                                                                                    <span class="HelperDivIndicator" onmouseover="ActivateHelperDiv($(this), \'Service Info:\', \'<p>The product is not available for the selected payment method!</p>\', \'\');" onmouseout="$(\'#HelperDivContainer\').hide();">
                                                                                        <div class="ServiceID_Deactivated" style="background-image: url(' . $layout_name . '/images/payment/serviceid_deactivated.png);"></div>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="ServiceID_Icon_New" id="ServiceID_Icon_New_' . $id . '" style="background-image:url(' . $layout_name . '/images/payment/serviceid_' . ($countOffers >= 5 ? '5' : $countOffers) . '.png);"></div>
                                                                                <div class="ServiceID_Icon_Selected" id="ServiceID_Icon_Selected_' . $id . '"></div>
                                                                                <div class="ServiceID_Icon_Over" id="ServiceID_Icon_Over_' . $id . '" style=""></div>
                                                                                <label for="ServiceID_' . $id . '">
                                                                                    <div class="ServiceIDLabelContainer">
                                                                                        <div class="ServiceIDLabel">
                                                                                        <input type="radio" id="ServiceID_' . $id . '" name="ServiceID" value="' . $id . '" style="display: none;">' . $coins . ' Coins  </div>
                                                                                    </div>
                                                                                    <div class="ServiceIDPriceContainer">
                                                                                        <span class="ServiceIDPrice" id="PD_' . $id . '">R$ ' . ($reais / 100) . '.00</span>                                                                                        
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
            ';
            }
            $countOffers++;
        }
        unset($countOffers);
        $main_content .= '
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <small>
                                                                    <div style="float: left; margin-right: 5px;">*</div>
                                                                    <div style="float: left;">
                                                                        <div id="ExchangeRateNote">Please note that the prices may vary depending on the current exchange rate.</div>
                                                                        Different prices may apply depending on your selected payment method.
                                                                    </div>
                                                                </small>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bm.gif);">
                                                <div class="TableBottomLeftShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bl.gif);"></div>
                                                <div class="TableBottomRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-br.gif);"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="TableShadowContainerRightTop">
                                            <div class="TableShadowRightTop" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rt.gif);"></div>
                                        </div>
                                        <div class="TableContentAndRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rm.gif);">
                                            <div class="TableContentContainer">
                                                <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align: center;" align="center">
                                                                <div style="max-height: 240px; overflow-y: auto;">';
        
        $valid_methods = array_diff($config['paymentsMethods'], [FALSE]);
        $payment_id = 1;
        foreach ($valid_methods as $methodName => $status) {
            $main_content .= '
                                                                    <div class="PMCID_Icon_Container" id="PMCID_Icon_Container_' . $payment_id . '">
                                                                        <div class="PMCID_Icon" id="PMCID_Icon_' . $payment_id . '" style="background-image:url(' . $layout_name . '/images//payment/pmcid_icon_normal.png);" onclick="ChangePMC(' . $payment_id . ');" onmouseover="MouseOverPMCID(' . $payment_id . ');" onmouseout="MouseOutPMCID(' . $payment_id . ');">
                                                                            <div class="PermanentDeactivated PMCID_Deactivated_ByChoice" id="PMCID_NotAllowed_' . $payment_id . '" style="display: none;" "="">
                                                                                <span class="HelperDivIndicator" onmouseover="ActivateHelperDiv($(this), \'Payment Method Info:\', \'<p>The payment method is not allowed for the selected service!</p>\', \'\');" onmouseout="$(\'#HelperDivContainer\').hide();">
                                                                                    <div class="PMCID_Deactivated" style="background-image: url(' . $layout_name . '/images/payment/pmcid_deactivated.png);"></div>
                                                                                </span>
                                                                            </div>
                                                                            <div class="PMCID_Icon_Selected" id="PMCID_Icon_Selected_' . $payment_id . '"></div>
                                                                            <div class="PMCID_Icon_Over" id="PMCID_Icon_Over_' . $payment_id . '"></div>
                                                                            <span style="position: absolute; left: 125px; top: 53px; z-index: 99;"><span style="margin-left: 5px; position: absolute; margin-top: 2px;"><a href="../common/help.php?subtopic=Field_PaymentMethodCategory_Option_' . $payment_id . '_Comment" target="_blank"><span class="HelperDivIndicator" onmouseover="ActivateHelperDiv($(this), \'Information:\', \'This method is ' . $methodName . '\', \'\');" onmouseout="$(\'#HelperDivContainer\').hide();"><img style="border:0px;" src="' . $layout_name . '/images/global/content/info.gif"></span></a></span></span>    <img class="PMCID_CP_Icon" src="' . $layout_name . '/images/payment/' . $methodName . '.gif">    
                                                                            <div class="PMCID_CP_Label">
                                                                            <input type="radio" id="PMCID_' . $payment_id . '" name="PMCID" value="' . $payment_id . '" style="display: none;">                                                                            
                                                                            <label for="PMCID_' . $payment_id . '">' . ($methodName == 'transfer' ? 'Bank Transfer' : ucfirst($methodName)) . '</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
            ';
            $payment_id++;
        }
        $main_content .= '
                                                                </div>
                                                                <small>
                                                                    <div style="clear: both; margin-right: 5px; text-align: left;">** If you use this payment method, you will have to wait 6 months before you can trade the purchased Tibia Coins in the Market or gift them to other characters using the Store. Of course, you can use these Tibia Coins without delay to purchase products for your own account.</div>
                                                                </small>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bm.gif);">
                                                <div class="TableBottomLeftShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bl.gif);"></div>
                                                <div class="TableBottomRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-br.gif);"></div>
                                            </div>
                                        </div>
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
<div class="SubmitButtonRow">
    <div class="LeftButton">
        <input type="hidden" name="step" value="2">
        <input type="hidden" name="ServiceCategoryID" value="13">
        <input type="hidden" name="CountryCode" value="BR">
        <input type="hidden" name="Submitted" value="1">
        <input type="hidden" name="source" value="">
        <div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_green.gif)">
            <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                <div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_green_over.gif);"></div>
                <input class="ButtonText" type="image" name="Next" alt="Next" src="' . $layout_name . '/images/global/buttons/_sbutton_next.gif">
            </div>
        </div>
    </div>
    <div class="RightButton">
        <form action="./?subtopic=accountmanagement" method="post" style="padding:0px;margin:0px;">
            <input type="hidden" name="page" value="">
            <div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_red.gif)">
                <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                    <div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_red_over.gif);"></div>
                    <input class="ButtonText" type="image" name="Cancel" alt="Cancel" src="' . $layout_name . '/images/global/buttons/_sbutton_cancel.gif">
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(\'#SelectCountrySubmitButton\').hide();
    $(\'.PMCID_CP_Label > input\').hide();
    $(\'.ServiceIDLabel > input\').hide();
</script>
</form> 
    ';
        if ($_POST['storage_OrderServiceData']['ServiceID']) {
            $main_content .= '
            <script type="text/javascript"> 
                ChangeService(' . $_POST['ServiceID'] . ', 13);
                ChangePMC(' . $_POST["PMCID"] . ');
            </script>
            ';
        } else {
            $main_content .= '
            <script type="text/javascript"> 
                ChangeService(0, 13);
                ChangePMC(1);
            </script>
            ';
        }
    } elseif ($step == 2) {
        $payment_data = $_POST;
        $valid_methods = array_diff($config['paymentsMethods'], [FALSE]);
        $valid_methods = array_keys($valid_methods);
        $payment_data['methodName'] = $valid_methods[($_POST['PMCID']) - 1];
        $payment_data['coins'] = array_values($config['donate']['offers'][$payment_data["ServiceID"]])[0];
        $payment_data['price'] = array_keys($config['donate']['offers'][$payment_data["ServiceID"]])[0];
        if (!isset($_POST['ServiceID']) || !$_POST['PMCID'] || $_POST['source']) {
            header("Location: ./?subtopic=accountmanagement&action=donate");
        } else {
            $main_content .= '  
<div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
            <span class="CaptionEdgeLeftTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionEdgeRightTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionBorderTop" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span>        <span class="CaptionVerticalLeft" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span>        
            <div class="Text">Enter payment data</div>
            <span class="CaptionVerticalRight" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span>        <span class="CaptionBorderBottom" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span>        <span class="CaptionEdgeLeftBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionEdgeRightBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>      
        </div>
    </div>
    <table class="Table5" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <div class="InnerTableContainer">
                        <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="TableShadowContainerRightTop">
                                            <div class="TableShadowRightTop" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rt.gif);"></div>
                                        </div>
                                        <div class="TableContentAndRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rm.gif);">
                                            <div class="TableContentContainer">
                                                <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                    <form method="post" action="">
                                                    <input type="hidden" name="storage_OrderServiceData[IsInitialised]" value="' . $payment_data["Submitted"] . '">
                                                    <input type="hidden" name="storage_OrderServiceData[ServiceID]" value="' . $payment_data["ServiceID"] . '">
                                                    <input type="hidden" name="storage_OrderServiceData[PaymentMethodName]" value="' . $payment_data["methodName"] . '">
                                                    <input type="hidden" name="storage_OrderServiceData[PaymentMethodCategoryID]" value="' . $payment_data["PMCID"] . '">
                                                    <input type="hidden" name="storage_OrderServiceData[ServiceCategoryID]" value="' . $payment_data["ServiceCategoryID"] . '">
                                                    <input type="hidden" name="storage_OrderServiceData[coins]" value="' . $payment_data["coins"] . '">
                                                    
                                                    <input type="hidden" name="storage_OrderServiceData[Price]" value="R$ ' . ($payment_data['price'] / 100) . '.00">
                                                    <!--
                                                    <input type="hidden" name="storage_OrderServiceData[VATPercentage]" value="0">
                                                    <input type="hidden" name="storage_OrderServiceData[FormToken]" value="151399923984211117981340">
                                                    <input type="hidden" name="storage_OrderServiceData[CombinedSelection]" value="1">
                                                    <input type="hidden" name="storage_OrderServiceData[Repayment]" value="0">-->
                                                    <input type="hidden" name="storage_OrderServiceData[Country]" value="' . $payment_data["CountryCode"] . '">
                                                    <input type="hidden" name="storage_OrderServiceData[EMailAddress]" value="' . htmlspecialchars($account_logged->getEmail()) . '">
                                                    <tbody>
                                                        <tr>
                                                            <td style="vertical-align: middle;" class="LabelV200 ">Country:</td>
                                                            <td><input type="text" name="Form_OrderServiceStep3[Country]" value="BR" disabled="disabled"><input type="hidden" name="Form_OrderServiceStep3[Country]" value="BR">
                                                                <span style="margin-left: 5px; position: absolute; margin-top: 2px;"><a href="../common/help.php?subtopic=Field_Country_Comment" target="_blank"><span class="HelperDivIndicator" onmouseover="ActivateHelperDiv($(this), \'Information:\', \'Go back to step 1 if you want to change it.\', \'\');" onmouseout="$(\'#HelperDivContainer\').hide();"><img style="border:0px;" src="' . $layout_name . '/images/global/content/info.gif"></span></a></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="vertical-align: middle;" class="LabelV200 ">E-Mail Address:</td>
                                                            <td>
                                                                <input type="text" name="Form_OrderServiceStep3[EMailAddress]" value="' . ($payment_data["storage_OrderServiceData"]["EMailAddress"] ? $payment_data["storage_OrderServiceData"]["EMailAddress"] : htmlspecialchars($account_logged->getEmail())) . '">
                                                                <span style="margin-left: 5px; position: absolute; margin-top: 2px;"><a href="../common/help.php?subtopic=Field_EMailAddress_Comment" target="_blank"><span class="HelperDivIndicator" onmouseover="ActivateHelperDiv($(this), \'Information:\', \'Used to send you the invoice and status updates on the payment process.\', \'\');" onmouseout="$(\'#HelperDivContainer\').hide();"><img style="border:0px;" src="' . $layout_name . '/images/global/content/info.gif"></span></a></span>    
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bm.gif);">
                                                <div class="TableBottomLeftShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bl.gif);"></div>
                                                <div class="TableBottomRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-br.gif);"></div>
                                            </div>
                                        </div>
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
<div class="SubmitButtonRow">
    <div class="LeftButton">
        <input type="hidden" name="ServiceCategoryID" value="' . $payment_data["ServiceCategoryID"] . '">
        <input type="hidden" name="step" value="3">
        <input type="hidden" name="ServiceID" value="' . $payment_data["ServiceID"] . '">
        <input type="hidden" name="source" value="">
        <div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_green.gif)">
            <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                <div class="BigButtonOver" style="background-image: url(' . $layout_name . '/images/global/buttons/sbutton_green_over.gif&quot;); visibility: hidden;"></div>
                <input class="ButtonText" type="image" name="Next" alt="Next" src="' . $layout_name . '/images/global/buttons/_sbutton_next.gif">
            </div>
        </div>
    </div>
    </form>
    <div class="RightButton">
        <form method="post" action="">
            <input type="hidden" name="storage_OrderServiceData[IsInitialised]" value="' . $payment_data["Submitted"] . '">
            <input type="hidden" name="storage_OrderServiceData[ServiceID]" value="' . $payment_data["ServiceID"] . '">
            <input type="hidden" name="storage_OrderServiceData[PaymentMethodName]" value="' . $payment_data["methodName"] . '">
            <input type="hidden" name="storage_OrderServiceData[ServiceCategoryID]" value="' . $payment_data["ServiceCategoryID"] . '">
            <input type="hidden" name="storage_OrderServiceData[Price]" value="R$ ' . ($payment_data["ServiceID"] / 100) . '.00">
            <!--<input type="hidden" name="storage_OrderServiceData[VATPercentage]" value="0">
            <input type="hidden" name="storage_OrderServiceData[FormToken]" value="151399923984211117981340">
            <input type="hidden" name="storage_OrderServiceData[CombinedSelection]" value="1">
            <input type="hidden" name="storage_OrderServiceData[Repayment]" value="0">-->
            <input type="hidden" name="storage_OrderServiceData[Country]" value="' . $payment_data["CountryCode"] . '">
            <input type="hidden" name="storage_OrderServiceData[EMailAddress]" value="' . htmlspecialchars($account_logged->getEmail()) . '">
            <input type="hidden" name="ServiceCategoryID" value="' . $payment_data["ServiceCategoryID"] . '">
            <input type="hidden" name="ServiceID" value="' . $payment_data["ServiceID"] . '">
            <input type="hidden" name="Coins" value="' . $payment_data["coins"] . '">            
            <input type="hidden" name="PMCID" value="' . $payment_data["PMCID"] . '">
            <input type="hidden" name="source" value="">
            <div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton.gif)">
                <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                    <div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_over.gif);"></div>
                    <input class="ButtonText" type="image" name="Previous" alt="Previous" src="' . $layout_name . '/images/global/buttons/_sbutton_previous.gif">
                </div>
            </div>
        </form>
    </div>
</div>
            ';
        }
    } elseif ($step == 3) {
        $payment_data = $_POST;
        if ($payment_data['storage_OrderServiceData']) {
            $main_content .= '
<div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
            <span class="CaptionEdgeLeftTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionEdgeRightTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionBorderTop" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span>        <span class="CaptionVerticalLeft" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span>        
            <div class="Text">Confirm your order</div>
            <span class="CaptionVerticalRight" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span>        <span class="CaptionBorderBottom" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span>        <span class="CaptionEdgeLeftBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>        <span class="CaptionEdgeRightBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span>      
        </div>
    </div>
    <table class="Table5" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <div class="InnerTableContainer">
                        <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="TableShadowContainerRightTop">
                                            <div class="TableShadowRightTop" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rt.gif);"></div>
                                        </div>
                                        <div class="TableContentAndRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rm.gif);">
                                            <div class="TableContentContainer">
                                                <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="LabelV200">Service</td>
                                                            <td>' . $payment_data["storage_OrderServiceData"]["coins"] . ' Tibia Coins</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="LabelV200">Price</td>
                                                            <td>from ' . $payment_data["storage_OrderServiceData"]["Price"] . '</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bm.gif);">
                                                <div class="TableBottomLeftShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bl.gif);"></div>
                                                <div class="TableBottomRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-br.gif);"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="TableShadowContainerRightTop">
                                            <div class="TableShadowRightTop" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rt.gif);"></div>
                                        </div>
                                        <div class="TableContentAndRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rm.gif);">
                                            <div class="TableContentContainer">
                                                <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="LabelV200">Payment Method</td>
                                                            <td>' . $payment_data["storage_OrderServiceData"]["PaymentMethodName"] . '</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="LabelV200">Country:</td>
                                                            <td>' . $payment_data["storage_OrderServiceData"]["Country"] . '</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="LabelV200">E-Mail Address:</td>
                                                            <td>' . $payment_data["Form_OrderServiceStep3"]["EMailAddress"] . '</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bm.gif);">
                                                <div class="TableBottomLeftShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bl.gif);"></div>
                                                <div class="TableBottomRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-br.gif);"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="TableShadowContainerRightTop">
                                            <div class="TableShadowRightTop" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rt.gif);"></div>
                                        </div>
                                        <div class="TableContentAndRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rm.gif);">
                                            <div class="TableContentContainer">
                                                <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                    <form method="post" action="">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="2"><input type="hidden" name="Form_OrderServiceStep4[TermsOfService]" value="0">
                                                                <input type="checkbox" checked="checked" name="Form_OrderServiceStep4[TermsOfService]" value="1" id="AgreementsCheckbox">
                                                                <span>
                                                                    <label for="AgreementsCheckbox">I have read and I agree to the <a href="http://www.tibia.com/support/?subtopic=legaldocuments&amp;page=extendedagreement" target="_blank">Extended Tibia Service Agreement</a> and the <a href="http://www.tibia.com/support/?subtopic=legaldocuments&amp;page=privacy" target="_blank">Tibia Privacy Policy</a>.</label>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bm.gif);">
                                                <div class="TableBottomLeftShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bl.gif);"></div>
                                                <div class="TableBottomRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-br.gif);"></div>
                                            </div>
                                        </div>
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
<div class="SubmitButtonRow">
    <div class="LeftButton">
        <input type="hidden" name="storage_OrderServiceData[IsInitialised]" value="' . $payment_data["storage_OrderServiceData"]["IsInitialised"] . '">
        <input type="hidden" name="storage_OrderServiceData[ServiceID]" value="' . $payment_data["storage_OrderServiceData"]["ServiceID"] . '">
        <input type="hidden" name="storage_OrderServiceData[PaymentMethodCategoryID]" value="' . $payment_data["storage_OrderServiceData"]["PaymentMethodCategoryID"] . '">
        <input type="hidden" name="storage_OrderServiceData[PaymentMethodName]" value="' . $payment_data["storage_OrderServiceData"]["PaymentMethodName"] . '">
        <input type="hidden" name="storage_OrderServiceData[ServiceCategoryID]" value="' . $payment_data["storage_OrderServiceData"]["ServiceCategoryID"] . '">
        <input type="hidden" name="storage_OrderServiceData[Price]" value="' . $payment_data["storage_OrderServiceData"]["Price"] . '">
        <!--<input type="hidden" name="storage_OrderServiceData[VATPercentage]" value="' . $payment_data[""][""] . '">
        <input type="hidden" name="storage_OrderServiceData[FormToken]" value="' . $payment_data[""][""] . '">
        <input type="hidden" name="storage_OrderServiceData[CombinedSelection]" value="' . $payment_data[""][""] . '">
        <input type="hidden" name="storage_OrderServiceData[Repayment]" value="' . $payment_data[""][""] . '">-->
        <input type="hidden" name="storage_OrderServiceData[Country]" value="' . $payment_data["storage_OrderServiceData"]["Country"] . '">
        <input type="hidden" name="storage_OrderServiceData[EMailAddress]" value="' . $payment_data["Form_OrderServiceStep3"]["EMailAddress"] . '">
        <input type="hidden" name="ServiceCategoryID" value="' . $payment_data["storage_OrderServiceData"]["ServiceCategoryID"] . '">
        <input type="hidden" name="ServiceID" value="' . $payment_data["storage_OrderServiceData"]["ServiceID"] . '">
        <input type="hidden" name="step" value="' . ($payment_data["step"] + 1) . '">
        <div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_green.gif)">
            <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                <div class="BigButtonOver" style="background-image: url(&quot;' . $layout_name . '/images/global/buttons/sbutton_green_over.gif&quot;); visibility: hidden;"></div>
                <input class="ButtonText" type="image" name="BuyNow" alt="BuyNow" src="' . $layout_name . '/images/global/buttons/_sbutton_buynow.gif">
            </div>
        </div>
    </div>
    </form>
    <div class="RightButton">
        <form method="post" action="">
            <input type="hidden" name="storage_OrderServiceData[IsInitialised]" value="' . $payment_data["storage_OrderServiceData"]["IsInitialised"] . '">
            <input type="hidden" name="storage_OrderServiceData[ServiceID]" value="' . $payment_data["storage_OrderServiceData"]["ServiceID"] . '">
            <input type="hidden" name="storage_OrderServiceData[PaymentMethodCategoryID]" value="' . $payment_data["storage_OrderServiceData"]["PaymentMethodCategoryID"] . '">
            <input type="hidden" name="storage_OrderServiceData[PaymentMethodName]" value="' . $payment_data["storage_OrderServiceData"]["PaymentMethodName"] . '">
            <input type="hidden" name="storage_OrderServiceData[ServiceCategoryID]" value="' . $payment_data["storage_OrderServiceData"]["ServiceCategoryID"] . '">
            <input type="hidden" name="storage_OrderServiceData[Price]" value="' . $payment_data["storage_OrderServiceData"]["Price"] . '">
            <!--<input type="hidden" name="storage_OrderServiceData[VATPercentage]" value="' . $payment_data[""][""] . '">
            <input type="hidden" name="storage_OrderServiceData[FormToken]" value="' . $payment_data[""][""] . '">
            <input type="hidden" name="storage_OrderServiceData[CombinedSelection]" value="' . $payment_data[""][""] . '">
            <input type="hidden" name="storage_OrderServiceData[Repayment]" value="' . $payment_data[""][""] . '">-->
            <input type="hidden" name="storage_OrderServiceData[Country]" value="' . $payment_data["storage_OrderServiceData"]["Country"] . '">
            <input type="hidden" name="storage_OrderServiceData[EMailAddress]" value="' . $payment_data["Form_OrderServiceStep3"]["EMailAddress"] . '">
            <input type="hidden" name="CountryCode" value="' . $payment_data["storage_OrderServiceData"]["Country"] . '">
            <input type="hidden" name="CountrySubmitted" value="1">
            <input type="hidden" name="Submitted" value="' . $payment_data["storage_OrderServiceData"]["IsInitialised"] . '">
            <input type="hidden" name="ServiceCategoryID" value="' . $payment_data["storage_OrderServiceData"]["ServiceCategoryID"] . '">
            <input type="hidden" name="ServiceID" value="' . $payment_data["storage_OrderServiceData"]["ServiceID"] . '">
            <input type="hidden" name="PMCID" value="' . $payment_data["storage_OrderServiceData"]["PaymentMethodCategoryID"] . '">
            <input type="hidden" name="source" value="">
            <input type="hidden" name="step" value="' . ($payment_data["step"] - 1) . '">
            <div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton.gif)">
                <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                    <div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_over.gif);"></div>
                    <input class="ButtonText" type="image" name="Previous" alt="Previous" src="' . $layout_name . '/images/global/buttons/_sbutton_previous.gif">
                </div>
            </div>
        </form>
    </div>
</div>
        
        ';
        } else {
            header("Location: ./?subtopic=accountmanagement&action=donate");
        }
        
    } elseif ($step == 4) {
        $payment_data = $_POST;
        if ($payment_data["Form_OrderServiceStep4"]["TermsOfService"] == 1) {
            $qnt = array_values($config['donate']['offers'][intval($payment_data['storage_OrderServiceData']['ServiceID'])])[0];
            $main_content .= '<div class="TableContainer">';
            $main_content .= $make_content_header("Sumary");
            $main_content.='
            
            <table class="Table5" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <div class="InnerTableContainer">
                        <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="TableShadowContainerRightTop">
                                            <div class="TableShadowRightTop" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rt.gif);"></div>
                                        </div>
                                        <div class="TableContentAndRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rm.gif);">
                                            <div class="TableContentContainer">
                                                <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="LabelV200">Service</td>
                                                            <td>' . $qnt . ' Tibia Coins</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="LabelV200">Price</td>
                                                            <td>from ' . $payment_data["storage_OrderServiceData"]["Price"] . '</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bm.gif);">
                                                <div class="TableBottomLeftShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bl.gif);"></div>
                                                <div class="TableBottomRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-br.gif);"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="TableShadowContainerRightTop">
                                            <div class="TableShadowRightTop" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rt.gif);"></div>
                                        </div>
                                        <div class="TableContentAndRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-rm.gif);">
                                            <div class="TableContentContainer">
                                                <table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
                                                    <tbody>
                                                        <tr>
                                                            <td class="LabelV200">Payment Method</td>
                                                            <td>' . $payment_data["storage_OrderServiceData"]["PaymentMethodName"] . '</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="LabelV200">Country:</td>
                                                            <td>' . $payment_data["storage_OrderServiceData"]["Country"] . '</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="TableShadowContainer">
                                            <div class="TableBottomShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bm.gif);">
                                                <div class="TableBottomLeftShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-bl.gif);"></div>
                                                <div class="TableBottomRightShadow" style="background-image:url(' . $layout_name . '/images/global/content/table-shadow-br.gif);"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
            ';
            $main_content .= $make_table_header();
            $main_content .= '<td>Thank you for your order. After clicking on "' . $payment_data["storage_OrderServiceData"]["PaymentMethodName"] . '" you will be redirected to <b>' . $payment_data["storage_OrderServiceData"]["PaymentMethodName"] . '</b> website in order to carry out the payment.</td>';
            $main_content .= $make_table_footer();
            $main_content .= '</div>';
            if ($payment_data["storage_OrderServiceData"]["PaymentMethodName"] == "pagseguro") {
                if ($config['pagseguro']['lightbox'] == TRUE) {
                    if ($config['pagseguro']['testing'] == TRUE) {
                        $main_content .= '<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>';
                    } else {
                        $main_content .= '<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>';
                    }
                    $main_content .= '
        <script>
        function enviaPagseguro() {
          $.post("pagsegurolightbox.php", {pid:"' . $payment_data['ServiceID'] . '",accname:"' . $account_logged->getName() . '"}, function(data) {
              //alert(data);
              var isOpenLightbox = PagSeguroLightbox({
                    code: data
              }, {
                    success : function(transactionCode) {
                        location.href="./?subtopic=tankyou&tcode="+transactionCode;                        
              },
                    abort : function() {
                        //alert("abort");
                    }
              });
              // Redirecionando o cliente caso o navegador não tenha suporte ao Lightbox
              if (!isOpenLightbox){
                    location.href="https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code="+code;
              }
          })
        }
        </script>
        <div class="SubmitButtonRow">
            <div class="LeftButton">
                <div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_green.gif)">
                    <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                        <div class="BigButtonOver" style="background-image: url(&quot;' . $layout_name . '/images/global/buttons/sbutton_green_over.gif&quot;); visibility: hidden;"></div>
                        <input class="ButtonText" onclick="enviaPagseguro()" type="image" name="Next" alt="Next" src="' . $layout_name . '/images/global/buttons/_sbutton_next.gif">
                    </div>
                </div>
            </div>
            <div class="RightButton">
                <form action="./?subtopic=accountmanagement" method="post" style="padding:0px;margin:0px;">            
                    <div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton.gif)">
                        <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                            <div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_over.gif);"></div>
                            <input class="ButtonText" type="image" name="Back" alt="Back" src="' . $layout_name . '/images/global/buttons/_sbutton_back.gif">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <form id="comprar" 
        action="https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html" 
        method="POST" 
        onsubmit="PagSeguroLightbox(this); return false;">
            <input type="hidden" name="code" id="code" value=""/>         
        </form>            
        ';
                } else {
                    $main_content .= '
<div class="SubmitButtonRow">
    <div class="LeftButton">
        <form target="pagseguro" method="post" action="dntpagseguro.php">
            <input type="hidden" name="accname" value="' . $account_logged->getName() . '">
            <input type="hidden" name="pid" value="' . $payment_data['ServiceID'] . '">	
            <!--
            <input type="hidden" name="store_id" value="">
            <input type="hidden" name="return" value="">
            <input type="hidden" name="notify_url" value="">
            <input type="hidden" name="order_id" value="">
            <input type="hidden" name="order_description" value="">
            <input type="hidden" name="amount" value="">
            <input type="hidden" name="currency_code" value="">
            <input type="hidden" name="client_email" value="">
            <input type="hidden" name="hash_key" value="">
            <input type="hidden" name="payment_id" value="">
            <input type="hidden" name="language" value="">
            <input type="hidden" name="country_payment" value="">
            <input type="hidden" name="project_id" value="">-->
            <div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_green.gif)">
                <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                    <div class="BigButtonOver" style="background-image: url(&quot;' . $layout_name . '/images/global/buttons/sbutton_green_over.gif&quot;); visibility: hidden;"></div>
                    <input class="ButtonText" type="image" name="Next" alt="Next" src="' . $layout_name . '/images/global/buttons/_sbutton_next.gif">
                </div>
            </div>
        </form>
    </div>
    <div class="RightButton">
        <form action="./?subtopic=accountmanagement" method="post" style="padding:0px;margin:0px;">
            <!--<input type="hidden" name="storage_OrderServiceData[IsInitialised]" value="' . $payment_data["storage_OrderServiceData"]["IsInitialised"] . '">
            <input type="hidden" name="storage_OrderServiceData[ServiceID]" value="' . $payment_data["storage_OrderServiceData"]["ServiceID"] . '">
            <input type="hidden" name="storage_OrderServiceData[PaymentMethodCategoryID]" value="' . $payment_data["storage_OrderServiceData"]["PaymentMethodCategoryID"] . '">
            <input type="hidden" name="storage_OrderServiceData[PaymentMethodName]" value="' . $payment_data["storage_OrderServiceData"]["PaymentMethodName"] . '">
            <input type="hidden" name="storage_OrderServiceData[ServiceCategoryID]" value="' . $payment_data["storage_OrderServiceData"]["ServiceCategoryID"] . '">
            <input type="hidden" name="storage_OrderServiceData[Price]" value="' . $payment_data["storage_OrderServiceData"]["Price"] . '">
            <!--<input type="hidden" name="storage_OrderServiceData[VATPercentage]" value="' . $payment_data[""][""] . '">
            <input type="hidden" name="storage_OrderServiceData[FormToken]" value="' . $payment_data[""][""] . '">
            <input type="hidden" name="storage_OrderServiceData[CombinedSelection]" value="' . $payment_data[""][""] . '">
            <input type="hidden" name="storage_OrderServiceData[Repayment]" value="' . $payment_data[""][""] . '">
            <input type="hidden" name="storage_OrderServiceData[Country]" value="' . $payment_data["storage_OrderServiceData"]["Country"] . '">
            <input type="hidden" name="storage_OrderServiceData[EMailAddress]" value="' . $payment_data["storage_OrderServiceData"]["EMailAddress"] . '">
            <input type="hidden" name="ServiceCategoryID" value="' . $payment_data["storage_OrderServiceData"]["ServiceCategoryID"] . '">
            <input type="hidden" name="ServiceID" value="' . $payment_data["storage_OrderServiceData"]["ServiceID"] . '">
            <input type="hidden" name="Form_OrderServiceStep3[EMailAddress]" value="' . ($payment_data["storage_OrderServiceData"]["EMailAddress"] ? $payment_data["storage_OrderServiceData"]["EMailAddress"] : htmlspecialchars($account_logged->getEmail())) . '">
            <input type="hidden" name="step" value="' . ($payment_data["step"] - 1) . '">-->
            <div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton.gif)">
                <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                    <div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_over.gif);"></div>
                    <input class="ButtonText" type="image" name="Back" alt="Back" src="' . $layout_name . '/images/global/buttons/_sbutton_back.gif">
                </div>
            </div>
        </form>
    </div>
</div>';
                }
            } elseif ($payment_data["storage_OrderServiceData"]["PaymentMethodName"] == "paypal") {
                $main_content .= '<script src="https://www.paypalobjects.com/api/checkout.js"></script>';
                $main_content .= '<div style="text-align: center; margin-top: 20px">';
                $main_content .= '<div id="paypal-button-container"></div>';
                $main_content .= '

<style>
    
    /* Media query for mobile viewport */
    @media screen and (max-width: 400px) {
        #paypal-button-container {
            width: 100%;
        }
    }
    
    /* Media query for desktop viewport */
    @media screen and (min-width: 400px) {
        #paypal-button-container {
            width: 250px;
            display: inline-block;
        }
    }
    
</style>';
                $main_content .= '</div>';
                $main_content .= '
                <script>
                
                var CREATE_PAYMENT_URL  = \'./paypal_create.php\';
                paypal.Button.render({
                    env: \'' . $config['paypal']['env'] . '\', // Or \'sandbox\',
                    commit: true, // Show a \'Pay Now\' button
                    style: {
                          label: \'checkout\',  // checkout | credit | pay | buynow | generic
                          size:  \'responsive\', // small | medium | large | responsive
                          shape: \'rect\',   // pill | rect
                          color: \'black\'   // gold | blue | silver | black
                          },
                      payment: function(data, actions) {
                                      
                                      var params = {
                                          product_id:\'' . $payment_data['ServiceID'] . '\',
                                          accname:\'' . $account_logged->getName() . '\'
                                      };
                        return paypal.request.post(CREATE_PAYMENT_URL, params).then(function(data) {
                                return data.id;
                            });
                      },
                      
        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function(res) {
                var desc = res.transactions[\'0\'].item_list.items[\'0\'].description;
                iziToast.show({
                            title:\'Que legaaal!!!\',
                            message:\'Você acabou de comprar \'+desc+\'.\',
                            position:\'center\',
                            onClosing:function() {
                               window.location.href = \'./?subtopic=accountmanagement\';
                            }
                        });
            });
        },
      
      // onAuthorize() is called when the buyer approves the payment
//            onAuthorize: function(data, actions) {

                // Set up a url on your server to execute the payment
//                var EXECUTE_PAYMENT_URL = \'./paypal_execute.php\';

                // Set up the data you need to pass to your server
//                var data = {
//                    paymentID: data.paymentID,
//                    payerID: data.payerID
//                };

                // Make a call to your server to execute the payment
//                return paypal.request.post(EXECUTE_PAYMENT_URL, data)
//                    .then(function (res) {
//                        window.alert(\'Payment Complete!\');
//                    });
//            },

            

      onCancel: function(data, actions) {
        iziToast.show({
                    title:\'Que pena!\',
                    message:\'Você acabou de cancelar essa compra, tente novamente.\',
                    position:\'center\',
                    icon: \'material-icons\',
                    timeout:40000,
                    iconText:\'mood_bad\'
                });
      },

      onError: function(err) {
                iziToast.error({
                    title:\'OPPPPSSSSS!\',
                    message:\'Ocorreu algum erro na hora de passar a venda, favor tentar novamente.\',
                    position:\'center\'
                });
      }
    }, \'#paypal-button-container\');
  </script>';
                $main_content .= "<div class='SubmitButtonRow'>";
                $main_content .= '
            <div class="CenterButton">
                <form action="./?subtopic=accountmanagement&action=donate" method="post" style="padding:0px;margin:0px;">
                    <div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton.gif)">
                        <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                            <div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_over.gif);"></div>
                            <input class="ButtonText" type="image" name="Back" alt="Back" src="' . $layout_name . '/images/global/buttons/_sbutton_back.gif">
                        </div>
                    </div>
                </form>
            </div>';
                $main_content .= "</div>";
            } else {
                header("Location: ./?subtopic=accountmanagement&action=donate");
            }
        } else {
            header("Location: ./?subtopic=accountmanagement&action=donate");
        }
    } else {
        header("Location: ./?subtopic=accountmanagement&action=donate");
    }
} else {
    header("Location: ./?subtopic=accountmanagement");
}
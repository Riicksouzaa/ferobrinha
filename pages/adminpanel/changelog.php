<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 13/12/2017
 * Time: 17:33
 */

if($_REQUEST['acao'] == ''){
include "templates/changelogtemplate.php";
}elseif($_REQUEST['acao'] == 'add'){
    if(!$_POST){
        header("Location: ./?subtopic=adminpanel");
    }else{
//        var_dump($_POST);
        $dateChangelog = $_POST['dateChangelog'];
        $reportChangeLog = strip_tags(htmlspecialchars($_POST['reportChangeLog']));
        if($reportChangeLog !== ''){
            $insertChangelog = $SQL->query("INSERT INTO `z_changelogs`(`date`,`description`)VALUES('{$dateChangelog}','{$reportChangeLog}')");
            if($insertChangelog){
                $main_content .='
                    <center>
						<table>
							<tbody>
								<tr>
									<td><img src="' . $layout_name . '/images/global/content/headline-bracer-left.gif"></td>
									<td style="text-align:center;vertical-align:middle;horizontal-align:center;font-size:17px;font-weight:bold;\">CHANGELOG INSERIDO COM SUCESSO</td>
									<td><img src="' . $layout_name . '/images/global/content/headline-bracer-right.gif"></td>
								</tr>
							</tbody>
						</table>
					</center>
					<div class="TableContainer">
					    <div class="CaptionContainer">
						<div class="CaptionInnerContainer"> 
							<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
							<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
							<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
							<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
							<div class="Text">Changelog Adicionado</div>
							<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span> 
							<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
							<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
							<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
						</div>
					</div>
                        <table class="Table3">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="InnerTableContainer">
                                            <table style="width: 100%">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="TableShadowContainerRightTop">
                                                                <div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
                                                            </div>
                                                            <div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
                                                                <div class="TableContentContainer">
															        <table class="TableContent" width="100%">
																        <tbody>
																            <tr style="background-color:#D4C0A1;">
																                <td class="LabelV">Data:</td>
																                <td style="width: 90%">'.$dateChangelog.'</td>
																            </tr>
																            <tr style="background-color:#F1E0C6;">
																                <td class="LabelV">Changelog:</td>
																                <td style="width: 90%">'.htmlspecialchars_decode($reportChangeLog).'</td>
																            </tr>
																        </tbody>
																    </table>
															    </div>
                                                            </div>
                                                            <div class="TableShadowContainer">
                                                                <div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
                                                                    <div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
                                                                    <div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
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
                    <br>
                    <br>
                    <br>
					
                ';
                $main_content .='
                    <center>
						<!--<form method="post" action="?subtopic=accountmanagement">-->
							<div class="BigButton" style="background-image:url(./layouts/tibiacom/images/global/buttons/sbutton.gif)">
								<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(&quot;./layouts/tibiacom/images/global/buttons/sbutton_over.gif&quot;); visibility: hidden;"></div>
									<a href="?subtopic=adminpanel"><input class="ButtonText" type="image" name="Back" alt="Back" src="./layouts/tibiacom/images/global/buttons/_sbutton_back.gif"></a>
								</div>
							</div>
						<!--</form>-->
					</center>
                
                ';
            }else{
                var_dump($insertChangelog);
                $main_content .="Houve um erro ao inserir o changelog";
            }
        }else{
            $erro = true;
            $main_content .="Você precisa escrever um changelog.";
            include "templates/changelogtemplate.php";
        }
    }
}elseif($_REQUEST['acao'] == 'del'){
    if(!$_POST){
        header("Location: ./?subtopic=adminpanel");
    }else{
        $id_changelog = $_POST['id'];
        $SQL->query("DELETE FROM `z_changelogs` WHERE `id_changelog` = {$id_changelog}");
        header("Location: ./?subtopic=changelogs");
    }
}

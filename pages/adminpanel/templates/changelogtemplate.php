<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 13/12/2017
 * Time: 23:32
 */
$main_content .= '
					<script type="text/javascript" src="'.$layout_name.'/tiny_mce/tiny_mce.js"></script>
					<script type="text/javascript">
						tinyMCE.init({
							// General options
							mode : "textareas",
							theme : "advanced",
							plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
					
							// Theme options
							theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
							theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,link,unlink,anchor,image,cleanup,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
							theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,ltr,rtl",
							theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
							theme_advanced_toolbar_location : "top",
							theme_advanced_toolbar_align : "left",
							theme_advanced_statusbar_location : "bottom",
							theme_advanced_resizing : true,
					
							// Example content CSS (should be your site CSS)
							//content_css : "css/content.css",
					
							// Drop lists for link/image/media/template dialogs
							template_external_list_url : "lists/template_list.js",
							external_link_list_url : "lists/link_list.js",
							external_image_list_url : "lists/image_list.js",
							media_external_list_url : "lists/media_list.js",
					
							// Style formats
							style_formats : [
								{title : \'Bold text\', inline : \'b\'},
								{title : \'Red text\', inline : \'span\', styles : {color : \'#ff0000\'}},
								{title : \'Red header\', block : \'h1\', styles : {color : \'#ff0000\'}},
								{title : \'Example 1\', inline : \'span\', classes : \'example1\'},
								{title : \'Example 2\', inline : \'span\', classes : \'example2\'},
								{title : \'Table styles\'},
								{title : \'Table row 1\', selector : \'tr\', classes : \'tablerow1\'}
							],
					
							// Replace values for the template plugin
							template_replace_values : {
								username : "Some User",
								staffid : "991234"
							}
						});
					</script>';

if($erro){
    $main_content .='
        
    ';
}

$main_content .= '
                    <center>
						<table>
							<tbody>
								<tr>
									<td><img src="' . $layout_name . '/images/global/content/headline-bracer-left.gif"></td>
									<td style="text-align:center;vertical-align:middle;horizontal-align:center;font-size:17px;font-weight:bold;">Managing Changelogs</td>
									<td><img src="' . $layout_name . '/images/global/content/headline-bracer-right.gif"></td>
								</tr>
							</tbody>
						</table>
					</center>
';

$main_content .= '
                <div class="TableContainer">
                    <div class="CaptionContainer">
						<div class="CaptionInnerContainer"> 
							<span class="CaptionEdgeLeftTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span> 
							<span class="CaptionEdgeRightTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span> 
							<span class="CaptionBorderTop" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span> 
							<span class="CaptionVerticalLeft" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span>
							<div class="Text">Add new Changelog</div>
							<span class="CaptionVerticalRight" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span> 
							<span class="CaptionBorderBottom" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span> 
							<span class="CaptionEdgeLeftBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span> 
							<span class="CaptionEdgeRightBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span> 
						</div>
					</div>
					<table class="Table3" cellpadding="0" cellspacing="0">
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
																        ';
if(!$erro){
    $main_content .='                                                  <tr style="background-color:#D4C0A1;">
                                                                            <td class="LabelV">Last Changelog:</td>
                                                                            <td style="width:90%;">';
    $lastchangelog = $SQL->query("SELECT * FROM `z_changelogs` ORDER BY `id_changelog` DESC")->fetchAll();
    if($lastchangelog[0]){
        extract($lastchangelog[0]);
    }
    $description = htmlspecialchars_decode($description);
    $main_content .="{$description}";
    if($lastchangelog[0]){
        $main_content .= '          <form method="POST" action="?subtopic=adminpanel&action=changelog&acao=del" id="delet_changelog'.$id_changelog.'">
                                        <input type="hidden" name="id" value="'.$id_changelog.'">
                                        <input type="hidden" name="from" value="adminpanel">
                                        <td style="color: red">
                                             <b>';

        $main_content .="                        <a onclick='document.getElementById(\"delet_changelog{$id_changelog}\").submit();' href='#'>deletar</a>";

        $main_content .='                    </b>
                                        </td>
                                    </form>';
    }else{
        $main_content .="NENHUM DADO PARA SER EXIBIDO.</td>";
    }

    $main_content .='
                                                                            </td>
                                                                        </tr>';
}
$main_content.='
																        <tr>
																	        <td class="LabelV">Add changelog:</td>
                                                                            <td colspan="2">																		
                                                                                <table class="TableChangelog" style="border: 0px transparent !important;" width="100%">
                                                                                    <form id="form-changelog" method="POST" action="?subtopic=adminpanel&action=changelog&acao=add">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <p>DATA:
                                                                                                        <input type="date" value="'.date('Y-m-d', time()).'" placeholder="'.date('Y-m-d', time()).'" name="dateChangelog"/>
                                                                                                    </p>
                                                                                                </td>                                                                                            
                                                                                            </tr>
                                                                                            <tr>    
                                                                                                <td>
                                                                                                    <textarea name="reportChangeLog">
                                                                                                    </textarea>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>                                                                                        
                                                                                                <td>                                                                                                
                                                                                                    <button id="insertChangelog" type="submit">INSERT CHANGELOG</button>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </form>
                                                                                </table>																												
                                                                            </td>
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
if($erro){
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
}
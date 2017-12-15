<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 14/12/2017
 * Time: 00:39
 */
$changelogs = $SQL->query('SELECT * FROM `z_changelogs` WHERE `is_active` = 1')->fetchAll();
$main_content = '';
$main_content .= "<style>
.row0
	{
  	background-color: #D4C0A1;	
	}
	
.row1
	{
  	background-color: #F1E0C6;
	}
	</style>";
$main_content .= '
                    <center>
						<table>
							<tbody>
								<tr>
									<td><img src="' . $layout_name . '/images/global/content/headline-bracer-left.gif"></td>
									<td style="text-align:center;vertical-align:middle;horizontal-align:center;font-size:17px;font-weight:bold;\">Confira Os changelogs do server</td>
									<td><img src="' . $layout_name . '/images/global/content/headline-bracer-right.gif"></td>
								</tr>
							</tbody>
						</table>
					</center>
					<div class="TableContainer">
                        <div class="CaptionContainer">
                            <div class="CaptionInnerContainer"> 
                                <span class="CaptionEdgeLeftTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span> 
                                <span class="CaptionEdgeRightTop" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span> 
                                <span class="CaptionBorderTop" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span> 
                                <span class="CaptionVerticalLeft" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span>
                                <div class="Text">Changelogs</div>
                                <span class="CaptionVerticalRight" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-vertical.gif);"></span> 
                                <span class="CaptionBorderBottom" style="background-image:url(' . $layout_name . '/images/global/content/table-headline-border.gif);"></span> 
                                <span class="CaptionEdgeLeftBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span> 
                                <span class="CaptionEdgeRightBottom" style="background-image:url(' . $layout_name . '/images/global/content/box-frame-edge.gif);"></span> 
                            </div>
                        </div>		

';
$main_content .= '
<table border="0" cellspacing="1" cellpadding="7" width="100%">
						<tbody>
                            <tr bgcolor="#505050">
                            <td class="white"><b>Data</b></td>
                            <td class="white" width="70%"><b>Title</b></td>
                            ';
if ($group_id_of_acc_logged >= $config['site']['access_admin_panel']){
$main_content .= '                
                            <td class="white"><b>Ações (admin)</b></td>                        
';
}
$main_content .="</tr>";
if($changelogs){
    foreach ($changelogs as $result){
        $main_content .= "<tr class='row".($i++ & 1)."'>";
        $main_content .= "<td><b>".$result['date']."</b></td>";
        $main_content .= "<td>".htmlspecialchars_decode($result['description'])."</td>";
        if ($group_id_of_acc_logged >= $config['site']['access_admin_panel']){
            $main_content .= '<form method="POST" action="?subtopic=adminpanel&action=changelog&acao=del" id="delet_changelog'.$result["id_changelog"].'">
                                <input type="hidden" name="id" value="'.$result["id_changelog"].'">
                                    <td style="color: red">
                                        <b>';
            $main_content .="<a onclick='document.getElementById(\"delet_changelog{$result["id_changelog"]}\").submit();' href='#'>deletar</a>";
            $main_content .='               </b>
                                    </td>
                                </form>';
        }

        $main_content .= "</tr>";
    }
}else{
    $main_content .= "<tr class='row".($i++ & 1)."'>";
    $main_content .="<td colspan='3'><center>Não existem dados para ser exibidos.</center></td>";
    $main_content .="</tr>";
}

$main_content .= '
                                                                    
						</tbody>
					</table>
                </div>

';
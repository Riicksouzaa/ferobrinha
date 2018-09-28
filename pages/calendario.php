<?php
$main_content = '
<div style="text-align: center;">
    <h1>
        Calendário de Eventos
    </h1>
</div>
';


$main_content .= '

<div class="SmallBox">
			<div class="MessageContainer">
				<div class="BoxFrameHorizontal" style="background-image: url(layouts/tibiacom/images/global/content/box-frame-horizontal.gif);"></div>
				<div class="BoxFrameEdgeLeftTop" style="background-image: url(layouts/tibiacom/images/global/content/box-frame-edge.gif);"></div>
				<div class="BoxFrameEdgeRightTop" style="background-image: url(layouts/tibiacom/images/global/content/box-frame-edge.gif);"></div>
				<div class="Message">
					<div class="BoxFrameVerticalLeft" style="background-image: url(layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></div>
					<div class="BoxFrameVerticalRight" style="background-image: url(layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></div>
					<table style="width: 100%;">
						<tbody>
							<tr>
								<td style="width: 100%;">
								
			<table style="width: 100%;">
				<tbody><tr>
					<td style="width: 100%; text-align: left;">
						O objetivo do <b>Calendário</b> é indicar as <b>datas</b> e <b>horários</b> de ocorrência dos eventos automáticos dentro do servidor.<br><br>
						<b>É importante observar:</b><br><br>
						<li>Todos os eventos listados neste calendário são automáticos, portanto não é necessário um Administrador estar online para iniciá-lo.</li>
						<li>Todos os horários são baseados em <b>UTC/GMT -3 (horário de Brasília).</b></li>
						<li>Hora e data atualizados:  <b>22:30</b>, <b>23/09/2018</b></li>
			
					</td>
				</tr>
			</tbody></table>
			
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="BoxFrameHorizontal" style="background-image: url(layouts/tibiacom/images/global/content/box-frame-horizontal.gif);"></div>
				<div class="BoxFrameEdgeRightBottom" style="background-image: url(layouts/tibiacom/images/global/content/box-frame-edge.gif);"></div>
				<div class="BoxFrameEdgeLeftBottom" style="background-image: url(layouts/tibiacom/images/global/content/box-frame-edge.gif);"></div>
			</div>
		</div>
<br><br>
';


$main_content .= "<div class='TableContainer'>";
$main_content .= $make_content_header("Calendário ".$config['server']['serverName']);
$main_content .= $make_table_header('Table3 Table table-responsive');
$main_content .= '
<tbody>
    <tr>
        <td bgcolor="#505050" witdh="'.(100/7).'%"><center><b><font color="white"><small>Segunda-Feira</small></font></b></center></td>
        <td bgcolor="#505050" witdh="'.(100/7).'%"><center><b><font color="white"><small>Terça-Feira</small></font></b></center></td>
        <td bgcolor="#505050" witdh="'.(100/7).'%"><center><b><font color="white"><small>Quarta-Feira</small></font></b></center></td>
        <td bgcolor="#505050" witdh="'.(100/7).'%"><center><b><font color="white"><small>Quinta-Feira</small></font></b></center></td>
        <td bgcolor="#505050" witdh="'.(100/7).'%"><center><b><font color="white"><small>Sexta-Feira</small></font></b></center></td>
        <td bgcolor="#505050" witdh="'.(100/7).'%"><center><b><font color="white"><small>Sábado</small></font></b></center></td>
        <td bgcolor="#505050" witdh="'.(100/7).'%"><center><b><font color="white"><small>Domingo</small></font></b></center></td>
	</tr>';
$event = new Events();
$events = $event->getEvents();
//for($i = 0; $i <= 6; $i++){
    foreach ($events as $name=>$ev){
        foreach ($ev as $key=>$value){
            $main_content .='<tr style="max-width: 10px">';
            for($i = 0; $i <= 6; $i++) {
                $main_content .= '<td><a href="?subtopic=events&name='.urlencode($value['group']).'">' . $value['name'] . '</a></td>';
            }
            $main_content .='</tr>';
            $main_content .='<tr style="max-width: 10px">';
            for($i = 0; $i <= 6; $i++) {
                $main_content .= '<td style="text-align: center">' . $value['time'] . '</td>';
            }
            $main_content .='</tr>';
            $main_content .='<tr style="max-width: 10px">';
            for($i = 0; $i <= 6; $i++) {
                $main_content .= '<td style="text-align: center"> --- </td>';
            }
            $main_content .='</tr>';
        }
    }
//}
$main_content .='</tbody>';
$main_content .= $players_rows;
$main_content .= $make_table_footer();
$main_content .= "</div>";
<?php
if(!defined('INITIALIZED'))
	exit;

if($action == "") {				
	$main_content .= '
		<div class="TableContainer">
			<div class="CaptionContainer">
				<div class="CaptionInnerContainer"> 
					<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
					<div class="Text">Informações</div>
					<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span> 
					<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
				</div>
			</div>
			<table class="Table3" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td>
							<div class="InnerTableContainer" >
								<table style="width:100%;" >
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td width="30%" class="LabelV">PvP Protection:</td>
															<td>to level '.$config['server']['protectionLevel'].'</td>
														</tr>
														<tr style="background-color:#F1E0C6;" >
															<td class="LabelV">Exp Rate:</td>
															<td>';
														$stages = simplexml_load_file($config['site']['serverPath'].'/data/XML/stages.xml'); //carrega o arquivo XML e retornando um Array
														foreach($stages->stage as $stage)
															$main_content .= '<li>' . $stage['minlevel'] . ((empty($stage['maxlevel'])) ? '' : ' - ') . $stage['maxlevel'] . ', ' . $stage['multiplier'] . 'x</li>';
														$main_content .= '
															</td>
														</tr>
														<tr style="background-color:#D4C0A1;" >
															<td class="LabelV">Skill Rate:</td>
															<td>'.$config['server']['rateSkill'].'x</td>
														</tr>
														<tr style="background-color:#F1E0C6;" >
															<td class="LabelV">Magic Rate:</td>
															<td>'.$config['server']['rateMagic'].'x</td>
														</tr>
														<tr style="background-color:#D4C0A1;" >
															<td class="LabelV">Loot Rate:</td>
															<td>'.$config['server']['rateLoot'].'x</td>
														</tr>
														<tr style="background-color:#F1E0C6;" >
															<td class="LabelV">Kills to RedSkull:</td>
															<td>'.$config['server']['killsToRedSkull'].'x</td>
														</tr>
														<tr style="background-color:#D4C0A1;" >
															<td class="LabelV">Kills to BlackSkull:</td>
															<td>'.$config['server']['killsToBlackSkull'].'x</td>
														</tr>
														<tr style="background-color:#F1E0C6;" >
															<td class="LabelV">Free bless to level:</td>
															<td>50</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div><br>';
		$main_content .= '
		<div class="TableContainer">
			<div class="CaptionContainer">
				<div class="CaptionInnerContainer"> 
					<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
					<div class="Text">Sistema de doações e shop online</div>
					<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span> 
					<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
				</div>
			</div>
			<table class="Table5" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td>
							<div class="InnerTableContainer" >
								<table style="width:100%;" >
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<strong>Entenda como usar nosso sistema de doações e o shop online.</strong>
																<p>Possuimos o mais atual sistema de doações, e o shop online de todos, onde você tem praticidade em suas doações e compra de itens no servidor, e tudo automático. Pensando em tornar sua jornada em nosso servidor um pouco mais atrativa, desenvolvemos um shop único, onde você terá prazer de ajudar o servidor a crescer.</p><p>Clique nos links e veja um simples tutorial de como funciona o <a href="?subtopic=serverinfo&action=tutorialdonate">Sistema de Doações</a> e o <a href="?subtopic=serverinfo&action=tutorialshop">Shop Online</a>.</p>
															</td>
															<td width="30%"><img src="'.$layout_name.'/images/shop/info.jpg"></td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>';
}
if($action == "tutorialdonate") {
	$main_content .= '
		<script src="'.$layout_name.'/fancy/jquery.fancybox.js"></script>
        <script src="'.$layout_name.'/fancy/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
        <link href="'.$layout_name.'/fancy/jquery.fancybox.css" rel="stylesheet" />
		<script>
			$(document).ready(function(){
				 $(\'.fancybox-media\').fancybox({
					openEffect  : \'none\',
					closeEffect : \'none\',
					helpers : {
						media : {}
					}
				});
			});
		</script>';
	$main_content .= '
		<center>
			<table>
				<tbody>
					<tr>
						<td><img src="'.$layout_name.'/images/global/content/headline-bracer-left.gif"></td>
						<td style="text-align:center;vertical-align:middle;horizontal-align:center;font-size:17px;font-weight:bold;">Tutorial - Sistema de Doações</td>
						<td><img src="'.$layout_name.'/images/global/content/headline-bracer-right.gif"></td>
					</tr>
				</tbody>
			</table>
		</center>
		<br>';
	$main_content .= '<p>Nosso sistema de doações é composto por 3 tipos de pagamento, <strong>PagSeguro</strong>, <strong>PayPal</strong> e <strong>Transferência Bancária</strong>. O PagSeguro é o único método que não necessita de confirmação de pagamento, pois é automático, já os demais necessitam de confirmação, abaixo você vai ver uma breve explicação de como funciona.</p>';
	$main_content .= '
			<div class="SmallBox" >
				<div class="MessageContainer" >
					<div class="BoxFrameHorizontal" style="background-image:url('.$layout_name.'/images/global/content/box-frame-horizontal.gif);" /></div>
					<div class="BoxFrameEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);" /></div>
					<div class="BoxFrameEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);" /></div>
					<div class="Message">
						<div class="BoxFrameVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);" /></div>
						<div class="BoxFrameVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);" /></div>
						<table style="width:100%;" >
							<td style="width:100%;text-align:center;" ><nobr>[<a href="#PagSeguro" >Pagseguro</a>]</nobr> <nobr>[<a href="#PayPal" >PayPal</a>]</nobr>  <nobr>[<a href="#Bank+Transfer" >Bank Transfer</a>]</nobr> <nobr>[<a href="#Confirmar" >Confirmando sua Doação</a>]</nobr> <nobr>[<a href="#Obs" >Observações</a>]</nobr></td>
						</tr>
					</table>
				</div>
				<div class="BoxFrameHorizontal" style="background-image:url('.$layout_name.'/images/global/content/box-frame-horizontal.gif);" /></div>
				<div class="BoxFrameEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);" /></div>
				<div class="BoxFrameEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);" /></div>
			</div>
		</div>
		<br/>';
	$main_content .= '
		<a name="PagSeguro" ></a>
			<div class="TopButtonContainer" >
				<div class="TopButton" >
					<a href="#top" >
						<image style="border:0px;" src="'.$layout_name.'/images/global/content/back-to-top.gif" />
					</a>
				</div>
			</div>
		<div class="TableContainer">
			<div class="CaptionContainer">
				<div class="CaptionInnerContainer"> 
					<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
					<div class="Text">Doações - Pagseguro</div>
					<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span> 
					<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
				</div>
			</div>
			<table class="Table5" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td>
							<div class="InnerTableContainer" >
								<table style="width:100%;" >
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Depois de logar em sua conta, acesse no menu ao lado a opção <strong>Manage Account</strong>. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img1.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img1.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Depois de clicar em manage account, abrirá uma página contendo todas as informações de sua conta, então você ira clicar em <strong>Get Extra Service</strong>. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img2.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img2.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>A tela seguinte lhe mostra algumas informações que farão você entender nosso sistema de doações, se puder leia tudo. Após ler clique em <strong>Next</strong>. Nessa próxima tela você vai ver as 3 opções de pagamento possiveis, nesse caso vamos selecionar o <strong>PagSeguro</strong>, depois de selecionado clique em <strong>Next</strong>. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img3.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img3.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Nessa tela você tem um demonstrativo dos pacotes de pontos, convertidos na mesma quantidade em reais (10 pontos = R$ 10,00). Escolha o pacote de pontos que deseja, então clique em <strong>Next</strong> novamente. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img4.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img4.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Essa próxima página é apenas para você conferir sua doação, se os dados estiverem correto clique em <strong>Next</strong>. Agora é a parte principal desse tipo de doação, nessa próxima página você precisa clicar em <strong>Buy Now</strong> para ser redirecionado ao site do <strong>PagSeguro</strong> e assim então concluir sua doação. Se você sair da página, terá de efetuar o processo todo novamente. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img5.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img5.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div><br>';
	/*
	$main_content .= '
		<a name="PayPal" ></a>
			<div class="TopButtonContainer" >
				<div class="TopButton" >
					<a href="#top" >
						<image style="border:0px;" src="'.$layout_name.'/images/global/content/back-to-top.gif" />
					</a>
				</div>
			</div>
		<div class="TableContainer">
			<div class="CaptionContainer">
				<div class="CaptionInnerContainer"> 
					<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
					<div class="Text">Doações - PayPal</div>
					<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span> 
					<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
				</div>
			</div>
			<table class="Table5" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td>
							<div class="InnerTableContainer" >
								<table style="width:100%;" >
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Depois de logar em sua conta, acesse no menu ao lado a opção <strong>Manage Account</strong>. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img1.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img1.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Depois de clicar em manage account, abrirá uma página contendo todas as informações de sua conta, então você ira clicar em <strong>Get Extra Service</strong>. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img2.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img2.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>A tela seguinte lhe mostra algumas informações que farão você entender nosso sistema de doações, se puder leia tudo. Após ler clique em <strong>Next</strong>. Nessa próxima tela você vai ver as 3 opções de pagamento possiveis, nesse caso vamos selecionar o <strong>PayPal</strong>, depois de selecionado clique em <strong>Next</strong>. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img6.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img6.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Nessa tela você tem um demonstrativo dos pacotes de pontos, convertidos na mesma quantidade em reais (10 pontos = R$ 10,00). Escolha o pacote de pontos que deseja, então clique em <strong>Next</strong> novamente. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img4.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img4.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Essa próxima página é apenas para você conferir sua doação, se os dados estiverem correto clique em <strong>Next</strong>. Agora você precisa clicar em <strong>Buy Now</strong> nessa página, onde será redirecionado ao site do PayPal, onde finalizará sua doação. <strong>IMPORTANTE:</strong> Doações feitas por PayPal deverão ser confirmadas, veja como clicando <a href="?subtopic=serverinfo&action=tutorialdonate#Confirmar">aqui</a>. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img57.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img7.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div><br>';
	
	$main_content .= '
		<a name="Bank+Transfer" ></a>
			<div class="TopButtonContainer" >
				<div class="TopButton" >
					<a href="#top" >
						<image style="border:0px;" src="'.$layout_name.'/images/global/content/back-to-top.gif" />
					</a>
				</div>
			</div>
		<div class="TableContainer">
			<div class="CaptionContainer">
				<div class="CaptionInnerContainer"> 
					<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
					<div class="Text">Doações - Bank Transfer</div>
					<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span> 
					<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
				</div>
			</div>
			<table class="Table5" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td>
							<div class="InnerTableContainer" >
								<table style="width:100%;" >
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Depois de logar em sua conta, acesse no menu ao lado a opção <strong>Manage Account</strong>. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img1.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img1.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Depois de clicar em manage account, abrirá uma página contendo todas as informações de sua conta, então você ira clicar em <strong>Get Extra Service</strong>. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img2.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img2.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>A tela seguinte lhe mostra algumas informações que farão você entender nosso sistema de doações, se puder leia tudo. Após ler clique em <strong>Next</strong>. Nessa próxima tela você vai ver as 3 opções de pagamento possiveis, nesse caso vamos selecionar o <strong>Bank Transfer</strong>, depois de selecionado clique em <strong>Next</strong>. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img8.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img8.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Nessa tela você tem um demonstrativo dos pacotes de pontos, convertidos na mesma quantidade em reais (10 pontos = R$ 10,00) e o banco ao qual deseja fazer a transferência. Escolha o banco para o qual irá transferir o valor de sua doação, escolha o pacote de pontos que deseja, então clique em <strong>Next</strong> novamente. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img9.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img9.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Essa próxima página é apenas para você conferir sua doação, se os dados estiverem correto clique em <strong>Next</strong>. Sua doação já está em nosso sistema, apenas necessitando de sua confirmação para liberação de seu pacote de pontos. <strong>IMPORTANTE:</strong> Doações feitas por <strong>Bank Transfer</strong> deverão ser confirmadas, veja como clicando <a href="?subtopic=serverinfo&action=tutorialdonate#Confirmar">aqui</a>. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img10.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img10.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div><br>';
	*/
	$main_content .= '
		<a name="Confirmar" ></a>
			<div class="TopButtonContainer" >
				<div class="TopButton" >
					<a href="#top" >
						<image style="border:0px;" src="'.$layout_name.'/images/global/content/back-to-top.gif" />
					</a>
				</div>
			</div>
		<div class="TableContainer">
			<div class="CaptionContainer">
				<div class="CaptionInnerContainer"> 
					<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
					<div class="Text">Doações - Confirmando sua doação</div>
					<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span> 
					<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
				</div>
			</div>
			<table class="Table5" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td>
							<div class="InnerTableContainer" >
								<table style="width:100%;" >
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Para confirmar uma doação (PayPal e Bank Transfer), você precisa ir atá a página onde estão <a href="?subtopic=accountmanagement&action=manage">todas as informações de sua conta</a>. No box <strong>Donates</strong> você verá uma lista com doações feitas e pendentes de confirmação. Clique na doação que deseja confirmar. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img11.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img11.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Já na página de confirmação de sua doação você verá um campo. Digite nesse campos todos os dados necessários para que sua confirmação seja bem sucedida e você possa receber seu pacote de pontos. Depois de informar os dados de sua doação clique em <strong>Next</strong> para confirmar. Pronto, sua doação está confirmada, você tem um prazo máximo de até 24 horas para receber seus pontos. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img12.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img12.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div><br>';
	
	$main_content .= '
		<a name="Obs" ></a>
			<div class="TopButtonContainer" >
				<div class="TopButton" >
					<a href="#top" >
						<image style="border:0px;" src="'.$layout_name.'/images/global/content/back-to-top.gif" />
					</a>
				</div>
			</div>
		<div class="TableContainer">
			<div class="CaptionContainer">
				<div class="CaptionInnerContainer"> 
					<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
					<div class="Text">Doações - Observações</div>
					<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span> 
					<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
				</div>
			</div>
			<table class="Table3" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td>
							<div class="InnerTableContainer" >
								<table style="width:100%;" >
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr bgcolor="'.$config['site']['darkborder'].'">
															<td>Você só poderá realizar uma compra em nosso Shop Online se possuir sua conta devidamente registrada, por isso registre informando seu e-mail verdadeiro, no caso de precisar recuperar sua conta posteriormente.</td>
														</tr>
														<tr bgcolor="'.$config['site']['lightborder'].'">
															<td>Evite usar nosso sistema de doações se não for realmente doar, se sua conta for identificada usando nosso sistema indevidamente poderá ser banida ou até mesmo deletada do jogo sem aviso prévio.</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div><br>';
		
	$main_content .= '
		<center>
			<form method="post" action="?subtopic=serverinfo">
				<div class="BigButton" style="background-image:url('.$layout_name.'/images/global/buttons/sbutton.gif)" >
				 	<div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/global/buttons/sbutton_over.gif);" ></div>
						<input class="ButtonText" type="image" name="Back" alt="Back" src="'.$layout_name.'/images/global/buttons/_sbutton_back.gif" >
					</div>
				</div>
			</form>
		</center>';
}
if($action == "tutorialshop") {
	$main_content .= '
		<script src="'.$layout_name.'/fancy/jquery.fancybox.js"></script>
        <script src="'.$layout_name.'/fancy/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
        <link href="'.$layout_name.'/fancy/jquery.fancybox.css" rel="stylesheet" />
		<script>
			$(document).ready(function(){
				 $(\'.fancybox-media\').fancybox({
					openEffect  : \'none\',
					closeEffect : \'none\',
					helpers : {
						media : {}
					}
				});
			});
		</script>';
	$main_content .= '
		<center>
			<table>
				<tbody>
					<tr>
						<td><img src="'.$layout_name.'/images/global/content/headline-bracer-left.gif"></td>
						<td style="text-align:center;vertical-align:middle;horizontal-align:center;font-size:17px;font-weight:bold;">Tutorial - Shop Online</td>
						<td><img src="'.$layout_name.'/images/global/content/headline-bracer-right.gif"></td>
					</tr>
				</tbody>
			</table>
		</center>
		<p>Nosso Shop Online é o mais seguro e bonito da atualidade, além de ser tudo isso ele é muito prático e fácil de usar, veja abaixo como comprar em nosso Shop Online.</p>';
	
	$main_content .= '
			<div class="SmallBox" >
				<div class="MessageContainer" >
					<div class="BoxFrameHorizontal" style="background-image:url('.$layout_name.'/images/global/content/box-frame-horizontal.gif);" /></div>
					<div class="BoxFrameEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);" /></div>
					<div class="BoxFrameEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);" /></div>
					<div class="Message">
						<div class="BoxFrameVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);" /></div>
						<div class="BoxFrameVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);" /></div>
						<table style="width:100%;" >
							<td style="width:100%;text-align:center;" ><nobr>[<a href="#Shop" >Comprando no Shop Online</a>]</nobr> <nobr>[<a href="#Ativar" >Ativando o serviço</a>]</nobr></td>
						</tr>
					</table>
				</div>
				<div class="BoxFrameHorizontal" style="background-image:url('.$layout_name.'/images/global/content/box-frame-horizontal.gif);" /></div>
				<div class="BoxFrameEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);" /></div>
				<div class="BoxFrameEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);" /></div>
			</div>
		</div>
		<br/>';
	
	$main_content .= '
		<a name="Shop" ></a>
			<div class="TopButtonContainer" >
				<div class="TopButton" >
					<a href="#top" >
						<image style="border:0px;" src="'.$layout_name.'/images/global/content/back-to-top.gif" />
					</a>
				</div>
			</div>
		<div class="TableContainer">
			<div class="CaptionContainer">
				<div class="CaptionInnerContainer"> 
					<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
					<div class="Text">Shop Online - Comprando um serviço</div>
					<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span> 
					<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
				</div>
			</div>
			<table class="Table5" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td>
							<div class="InnerTableContainer" >
								<table style="width:100%;" >
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>Possuimos 3 serviços extras, eles são:
																<ul> 
																	<li><strong>Character Change Name</strong> - <small>Troca o nome de seu personagem</small></li>
																	<li><strong>Account Name Change</strong> - <small>Troca o nome de sua conta, o login que você usa para entrar no jogo e no site</small></li>
																	<li><strong>Recovery Key</strong> - <small>Fornece uma nova Recovery Key para sua conta, caso você tenha perdido a sua.</small></li>
																</ul>
																<p>A compra ilustrada abaixo serve para extra services, itens, montarias e addons. Todas as compras exigirão os mesmos procedimentos.</p> 
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Para comprar um desse extra services citados acima vá até a página onde contem <a href="?subtopic=accountmanagement&action=manage">todas as informações de sua conta</a>. Vá até o box <strong>Products Available</strong>, e então clique em <strong>Get Extra Service</strong> no menu <strong>Extra Services</strong> <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img13.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img13.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Nessa página você vai ver os serviços extras disponiveis e logo abaixo o método de pagamento, que no caso sera por Premium Points. Selecione o serviço extra que deseja, logo após selecione points como seu tipo de pagamento e então clique em <strong>Next</strong>. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img14.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img14.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Nessa página você terá duas opções para ativação desse serviço, a primeiro (que já esta selecionado por padrão) ativa o serviço extra em sua própria conta, ja a segunda ativa o serviço para um amigo seu.<br><strong>IMPORTANTE:</strong> Para que seu amigo apareça na lista é necessário que ele esteja adicionado em sua <strong>Vip List in-game</strong>, caso contrário não irá aparecer. Clique em <strong>Next</strong>. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img15.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img15.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>A próxima página apenas mostra informações de sua compra, e uma opção para que você aceite as regras do servidor, clique em <strong>Next</strong> após verificar os dados de sua compra e aceitar as regras. A página seguinte informa a você que sua compra foi concluida. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img16.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img16.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div><br>';
	
	$main_content .= '
		<a name="Ativar" ></a>
			<div class="TopButtonContainer" >
				<div class="TopButton" >
					<a href="#top" >
						<image style="border:0px;" src="'.$layout_name.'/images/global/content/back-to-top.gif" />
					</a>
				</div>
			</div>
		<div class="TableContainer">
			<div class="CaptionContainer">
				<div class="CaptionInnerContainer"> 
					<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
					<div class="Text">Shop Online - Ativando o serviço</div>
					<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span> 
					<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
				</div>
			</div>
			<table class="Table5" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td>
							<div class="InnerTableContainer" >
								<table style="width:100%;" >
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>Essa é a parte em que você ativa o serviço em um dos personagens de sua conta, lembrando que se você deu o serviço para algum amigo, o serviço não estará disponivel para ativação em sua conta, e sim na de seu amigo.</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Para o serviço vá até a página onde contem <a href="?subtopic=accountmanagement&action=manage">todas as informações de sua conta</a>. Vá até o box <strong>Products Ready To Use</strong>, nele vai estar todos os serviços que você comprou no shop e precisa ser ativado em sua conta ou um de seus personagens. Escolha o serviço que deseja ativar (se houver mais de um) e então clique em <strong>Active</strong>. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img17.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img17.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td>
																<p>Nessa próxima página você vai ver os dados do produto que você comprou, e a opção de escolher para qual personagem você irá ativar o serviço. No caso do nosso exemplo o serviço é uma troca de nome, então exite um campo para o novo nome, e ao lado qual personagem vai receber o novo nome. Selecionando tudo corretamente clique em <strong>Next</strong>, e o serviço foi ativado para seu personagem. Lembrando que no caso da troca de nome seu personagem deverá estar deslogado. <small>(Clique na imagem pra ampliar.)</small></p>
															</td>
															<td width="30%">
																<a class="fancybox-media" href="'.$layout_name.'/images/shop/tutorial/img18.jpg">
																	<img src="'.$layout_name.'/images/shop/tutorial/img18.jpg" width="250px">
																</a>
															</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div><br>';
	$main_content .= '
		<center>
			<form method="post" action="?subtopic=serverinfo">
				<div class="BigButton" style="background-image:url('.$layout_name.'/images/global/buttons/sbutton.gif)" >
				 	<div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/global/buttons/sbutton_over.gif);" ></div>
						<input class="ButtonText" type="image" name="Back" alt="Back" src="'.$layout_name.'/images/global/buttons/_sbutton_back.gif" >
					</div>
				</div>
			</form>
		</center>';
}
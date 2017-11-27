<?php
if(!defined('INITIALIZED'))
	exit;

$list = 'experience';
if(isset($_REQUEST['list']))
	$list = $_REQUEST['list'];

$page = 0;
if(isset($_REQUEST['page']))
	$page = min(50, $_REQUEST['page']);

$vocation = '';
if(isset($_REQUEST['vocation']))
	$vocation = $_REQUEST['vocation'];

switch($list)
{
	case "fist":
		$id=Highscores::SKILL_FIST;
		$list_name='Fist Fighting';
		break;
	case "club":
		$id=Highscores::SKILL_CLUB;
		$list_name='Club Fighting';
		break;
	case "sword":
		$id=Highscores::SKILL_SWORD;
		$list_name='Sword Fighting';
		break;
	case "axe":
		$id=Highscores::SKILL_AXE;
		$list_name='Axe Fighting';
		break;
	case "distance":
		$id=Highscores::SKILL_DISTANCE;
		$list_name='Distance Fighting';
		break;
	case "shield":
		$id=Highscores::SKILL_SHIELD;
		$list_name='Shielding';
		break;
	case "fishing":
		$id=Highscores::SKILL_FISHING;
		$list_name='Fishing';
		break;
	case "magic":
		$id=Highscores::SKILL__MAGLEVEL;
		$list_name='Magic';
		break;
	default:
		$id=Highscores::SKILL__LEVEL;
		$list_name='Experience';
		break;
}

$offset = $page * 100;
$skills = new Highscores($id, 100, $page, $vocation);

	$main_content .= '
		<TABLE BORDER=0 CELLPADDING=4 CELLSPACING=1 WIDTH=100%>
			<TR>
				<TD WIDTH=100% ALIGN=right VALIGN=bottom><BR>
					<CENTER>
						<H2>Ranking for '.htmlspecialchars($list_name).' on '.$config['server']['serverName'].'</H2>
					</CENTER>
					<BR>';
				$main_content .= '
					<BR>
					<TABLE BORDER=0 CELLPADDING=4 CELLSPACING=1 WIDTH=100%>';
						if($page > 0)
							$main_content .= '<TR><TD WIDTH=100% ALIGN=right VALIGN=bottom><A HREF="?subtopic=highscores&list='.urlencode($list).'&page='.($page - 1).'&vocation=' . urlencode($vocation) . '" CLASS="size_xxs">Previous Page</A></TD></TR>';
						if($page < 50)
							$main_content .= '<TR><TD WIDTH=100% ALIGN=right VALIGN=bottom><A HREF="?subtopic=highscores&list='.urlencode($list).'&page='.($page + 1).'&vocation=' . urlencode($vocation) . '" CLASS="size_xxs">Next Page</A></TD></TR>';
				$main_content .= '
					</TABLE>
					<TABLE BORDER=0 CELLPADDING=4 CELLSPACING=1 WIDTH=100%>
						<TR BGCOLOR="#505050">
							<TD WIDTH=10% CLASS=white ><B>Rank</B></TD>
							<TD WIDTH='.(($list == "experience") ? "55" : "75").'% CLASS=white ><B>Name</B></TD>
							<TD WIDTH=15% CLASS=white ><B>Level</B></TD>';
					if($list == "experience")
						$main_content .= '
							<TD WIDTH=20% CLASS=white ><B>Points</B></TD>';
					$main_content .= '
						</TR>';
				$number_of_rows = 0;
				foreach($skills as $skill)
				{
					
					if($list == "magic")
						$value = $skill->getMagLevel();
					elseif($list == "experience")
						$value = $skill->getLevel();
					else
						$value = $skill->getScore();
					
					$bgcolor = (($number_of_rows++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);	
					$main_content .= '
						<TR BGCOLOR="'.$bgcolor.'">
							<TD WIDTH=10%>'.($offset + $number_of_rows).'</TD>
							<TD WIDTH='.(($list == "experience") ? "55" : "75").'%><A HREF="?subtopic=characters&name='.urlencode($skill->getName()).'">'.htmlspecialchars($skill->getName()).'</A></TD>
							<TD WIDTH=15%>'.$value.'</TD>';
					if($list == "experience")
						$main_content .= '
							<TD WIDTH=20%>'.$skill->getExperience().'</TD>';
					$main_content .= '
						</TR>';
				}
				$main_content .= '
					</TABLE>
					<TABLE BORDER=0 CELLPADDING=4 CELLSPACING=1 WIDTH=100%>';
						if($page > 0)
							$main_content .= '<TR><TD WIDTH=100% ALIGN=right VALIGN=bottom><A HREF="?subtopic=highscores&list='.urlencode($list).'&page='.($page - 1).'&vocation=' . urlencode($vocation) . '" CLASS="size_xxs">Previous Page</A></TD></TR>';
						if($page < 50)
							$main_content .= '<TR><TD WIDTH=100% ALIGN=right VALIGN=bottom><A HREF="?subtopic=highscores&list='.urlencode($list).'&page='.($page + 1).'&vocation=' . urlencode($vocation) . '" CLASS="size_xxs">Next Page</A></TD></TR>';
				$main_content .= '
					</TABLE></TD>
				<TD WIDTH=5%><IMG SRC="'.$layout_name.'/images/global/general/blank.gif" WIDTH=1 HEIGHT=1 BORDER=0></TD>
				<TD WIDTH=15% VALIGN=top ALIGN=right><TABLE BORDER=0 CELLPADDING=4 CELLSPACING=1>
						<TR BGCOLOR="#505050">
							<TD CLASS=white><B>Choose a category</B></TD>
						</TR>
						<TR BGCOLOR="#F1E0C6">
							<TD>';
						if($list != "experience")
							$main_content .= '
								<A HREF="?subtopic=highscores&list=experience" CLASS="size_xs">Experience</A><BR>';
						if($list != "magic")
							$main_content .= '
								<A HREF="?subtopic=highscores&list=magic" CLASS="size_xs">Magic</A><BR>';
						if($list != "shield")
							$main_content .= '
								<A HREF="?subtopic=highscores&list=shield" CLASS="size_xs">Shielding</A><BR>';
						if($list != "distance")
							$main_content .= '
								<A HREF="?subtopic=highscores&list=distance" CLASS="size_xs">Distance</A><BR>';
						if($list != "sword")
							$main_content .= '
								<A HREF="?subtopic=highscores&list=sword" CLASS="size_xs">Sword</A><BR>';
						if($list != "club")
							$main_content .= '
								<A HREF="?subtopic=highscores&list=club" CLASS="size_xs">Club</A><BR>';
						if($list != "axe")
							$main_content .= '
								<A HREF="?subtopic=highscores&list=axe" CLASS="size_xs">Axe</A><BR>';
						if($list != "fist")
							$main_content .= '
								<A HREF="?subtopic=highscores&&list=fist" CLASS="size_xs">Fist</A><BR>';
						if($list != "fishing")
							$main_content .= '
								<A HREF="?subtopic=highscores&list=fishing" CLASS="size_xs">Fishing</A><BR>';
						$main_content .= '
							</TD>
						</TR>
					</TABLE>
				</TD>
			</TR>
		</TABLE>';
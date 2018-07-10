<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
	<title><?PHP echo $title; ?></title>
    <link rel="stylesheet" href="<?PHP echo $layout_name; ?>/default.css" type="text/css" />
    <link rel="stylesheet" href="<?PHP echo $layout_name; ?>/basic.css" type="text/css" />
</head>
<body>
	<div id="page">
    	<div id="top">
        	<div id="left">
            	<div id="left-top">
                	<div class="status">
                    <?PHP
						if($config['status']['serverStatus_online'] == 1)
						echo '
                    	<span class="online"><center>Server Online</center></span><br/><br />
                        <b>Players Online:</b><br /> '.$config['status']['serverStatus_players'].' / '.$config['status']['serverStatus_playersMax'].'<br />
                        <b>Uptime:</b><br /> '.$config['status']['serverStatus_uptime'].'<br />
                        <b>Monsters:</b><br /> '.$config['status']['serverStatus_monsters'].'
						';
						else
						echo '<span class="offline">Server Offline</span>';
					?>
                    </div>
                </div>
            </div>
            <div id="right">
            	<div id="logo">
                	<h1><?PHP echo $config['server']['serverName']; ?></h1>
                    <h2>The best rpg server.</h2>
                </div>
            </div>
        </div>
        <div id="cnt-container">
        	<div id="left">
            	<div id="menu">
                	<ul>
                    	<li>News</li>
                        <ul id="sub">
                        	<li><a href="?subtopic=latestnews">Latest News</a></li>
                        </ul>
                        <li>Account</li>
                        <ul id="sub">
                        	<?PHP
							if($group_id_of_acc_logged >= $config['site']['access_admin_panel'])
								echo '<li><a href="?subtopic=adminpanel">Admin Panel</a></li>';
							if($logged)
							{
								echo '<li><a href="?subtopic=accountmanagement">My Account</a></li>
								<li><a href="?subtopic=accountmanagement&action=logout">Logout</a></li>';
							}
							else
							{
								echo '<li><a href="?subtopic=accountmanagement">Login</a></li>';
							}
							?>
							<li><a href="?subtopic=createaccount">Create Account</b></a></li>
							<li><a href="?subtopic=lostaccount">Lost Account</a></li>
							<li><a href="?subtopic=tibiarules">Server Rules</a></li>
                        </ul>
                        <li>Community</li>
                        <ul id="sub">
                        	<li><a href="?subtopic=characters">Search Player</a></li>
							<li><a href="?subtopic=guilds">Guilds</a></li>
							<li><a href="?subtopic=highscores">Highscores</a></li>
							<li><a href="?subtopic=killstatistics">Last Deaths</a></li>
							<li><a href="?subtopic=houses">Houses</a></li>
							<?PHP if(!empty($config['site']['forum_link'])) echo '<li><a href="'.$config['site']['forum_link'].'">Forum</a></li>'; ?>
							<li><a href="?subtopic=team">Game Masters</a></li>
                        </ul>
                        <li>Library</li>
                        <ul id="sub">
                        	<li><a href="?subtopic=creatures">Monsters</a></li>
							<li><a href="?subtopic=spells">Spells</a></li>
							<li><a href="?subtopic=whoisonline">Who is online?</a></li>
							<?PHP if($config['site']['serverinfo_page'] == 1) echo '<li><a href="?subtopic=serverinfo">Server Info</a></li>'; ?>
							<?PHP if($config['site']['download_page'] == 1) echo '<li><a href="?subtopic=downloads">Downloads</a></li>'; ?>
							<?PHP if($config['site']['gallery_page'] == 1) echo '<li><a href="?subtopic=gallery">Gallery</a></li>'; ?>
                        </ul>
                        <?PHP
						if($config['site']['shop_system'] == 1)
						{
							echo '<li>Shop</li>
							<ul>
								<li><a href="?subtopic=buypoints"><b><font size="1" color="red"><blink>Buy Premium Points</blink></font></b></a></li>
								<li><a href="?subtopic=shopsystem">Shop Offer</a></li>';
								if($logged)
								echo '<li><a href="?subtopic=shopsystem&action=show_history">Shop History</a></li>';
							echo '</ul>';
						}
						?>
                    </ul>
                </div>
            </div>
            <div id="right">
            	<div id="content">
                	<div id="content-box-top"></div>
                    <div id="content-cnt-top">
                    	<?php echo $main_content; ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <p><center>Copyrignts &copy; 2009 by Server Name. All rights Reserved.</center><center>Design by Webmark.shost.pl, Coded by Vean. AAC by Gesior.</center></p>
        </div>
    </div>
</body>
</html>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Boss Ragnarok Online</title>

<link rel="stylesheet" type="text/css" media="all" href="styles/default/style.css">

</head>
<body><center>
<div id="container">
	<div id="top">
		<div id="top_base">
			<div id="search">
				<form action="search.php" method="get">
					<input type="text" name="q" placeholder="Search [News]">
				</form>
				<div id="top_c_01">
				
				</div>
			</div>
			<div id="navigation">
				<ul>
					<a href="index.php"><li>Home</li></a>
					<a href="downloads.php"><li>Downloads</li></a>
					<a href="serverinfo.php"><li>Server Info</li></a>
					<a href="team.php"><li>Team</li></a>
					<a href="policy.php"><li>Policy</li></a>
					<a href="donate.php"><li>Donate</li></a>
				</ul>
			</div>
		</div>
	</div>
	<div id="header">
		<div id="header_base">
			<a href="index.php"><div id="logo">
			</div></a>
			<div id="top_sidebar">
				<div id="latest_news">
				<span class="title">Latest News</span>
					<?php 
					$mysql_host = "mysql5.000webhost.com";
					$mysql_database = "a3606075_db";
					$mysql_user = "a3606075_bro";
					$mysql_password = "juvarabrera4101996";

					$c = mysql_connect($mysql_host, $mysql_user, $mysql_password);
					mysql_select_db($mysql_database, $c);
					$q = mysql_query("SELECT * FROM news ORDER BY newsid DESC LIMIT 1");
					$n = 0;
					while ($r=mysql_fetch_array($q)) {
						$dnewsid = $r['newsid'];
						$dtitle = $r['title'];
						$dmessage = $r['message'];
						$dposted_by = $r['posted_by'];
						$ddate_added = $r['date_added'];
						echo '
					<div id="news">
						<a href="?newsid='.$dnewsid.'"><p class="title" align="right">'.$dtitle.'</p></a>
					'.nl2br($dmessage).'
					</div>
					<p class="date" align="right">'.$ddate_added.' (+8 GMT)<br>- '.$dposted_by.'</p>
					';
						$n=$n+1;
					}
					if ($n==0) {
						echo '<br><br><br><br><br><br><p><i><center>There are no news.</center></i></p>';
					}
					?>
				</div>
				<a href="downloads.php"><div id="download_now">
					<span>Play Now!</span>
				</div></a>
			</div>
		</div>
	</div>
	<div id="content">
		<div id="content_base">
<?php include('includes/sidebar_left.php'); ?>	
			<div id="center">
				<div id="center_base">
					<div id="center_main_title_top"></div>
					<div id="center_main_title">News and Updates</div>
					<div id="center_main_title_bottom"></div>
					<?php
					$mysql_host = "mysql5.000webhost.com";
					$mysql_database = "a3606075_db";
					$mysql_user = "a3606075_bro";
					$mysql_password = "juvarabrera4101996";

					$c = mysql_connect($mysql_host, $mysql_user, $mysql_password);
					mysql_select_db($mysql_database, $c);
					
					if(isset($_GET['newsid'])) {
						$newsid = $_GET['newsid'];
						$q = mysql_query("SELECT * FROM news WHERE newsid='$newsid' LIMIT 1");
						$n = 0;
						while ($r = mysql_fetch_array($q)) {
							$dnewsid = $r['newsid'];
							$dtitle = $r['title'];
							$dmessage = $r['message'];
							$dposted_by = $r['posted_by'];
							$ddate_added = $r['date_added'];
							$n = $n+1;
							echo '
					<div id="center_container">
						<div id="container_title"><span>'.$dtitle.'</span></div>
						<div id="container_content">
						<p>'.nl2br($dmessage).'</p>
						<p align="right" class="date">'.$ddate_added.' (+8 GMT)<br>- '.$dposted_by.'</p>
						</div>
					</div>';
						}
						if ($n == 0) {
							echo '
					<div id="center_container">
						<div id="container_title"><span>Error</span></div>
						<div id="container_content">
						<p>News not found.</p>
						</div>
					</div>';
						}
					} else {
						$q = mysql_query("SELECT * FROM news ORDER BY newsid DESC");
						$n = 0;
						while ($r = mysql_fetch_array($q)) {
							$dnewsid = $r['newsid'];
							$dtitle = $r['title'];
							$dmessage = $r['message'];
							$dposted_by = $r['posted_by'];
							$ddate_added = $r['date_added'];
							$n = $n+1;
							echo '
					<div id="center_container">
						<div id="container_title"><span>'.$dtitle.'</span></div>
						<div id="container_content">
						<p>'.nl2br($dmessage).'</p>
						<p align="right" class="date">'.$ddate_added.'<br>- '.$dposted_by.'</p>
						</div>
					</div>';
						}
						if ($n == 0) {
							echo '
					<div id="center_container">
						<div id="container_title"><span>No news</span></div>
						<div id="container_content">
						<p>There are no news posted.</p>
						</div>
					</div>';
						}
					}
					?>
				</div>
			</div>
<?php include('includes/sidebar_right.php'); ?>	
			<div id="flower_left">
				<div id="footer">
				Copyright Boss Ragnarok Online - Philippine Ragnarok Online Private Server 2012.<br>All images belong to their respective owners.<br>Web designed and developed by <a href="http://www.juvarabrera.comze.com/" style="color:black;">Juvar Abrera</a>.
				</div>
			</div>
		</div>
		<div id="content_base_end">
			
		</div>
	</div>
</div>
</center>
</body>
</html>
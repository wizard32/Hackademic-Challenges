<?php

/*
 *    ----------------------------------------------------------------
 *    Copyright (C) 2013
 *   	  Liatsis Fotis <liatsisfotis at gmail dot com>
 *    ----------------------------------------------------------------
 */

?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>Challenge 1</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<noscript>
		<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
		<div id="header-wrapper">
		
			<header id="header">
				<div class="5grid-layout">
					<div class="row">
						<div class="4u" id="logo">
							<h1><a class="mobileUI-site-name">Digital Fortress</a></h1>
						</div>
						<div class="8u" id="menu">
							<nav class="mobileUI-site-nav">
								<ul>
									<li class="current_page_item"><a>critical error</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
			
		</div>
		<!-- Header Ends Here -->


		<!-- Wrapper -->
		<div id="wrapper" class="5grid-layout">
		
			<!-- Page Content -->
			<div id="page" class="row">
				
				<!-- Content Area -->
				<div id="content" class="12u">
					
					<!-- Main Content Area -->
					<section>
						<a class="image-style1"><img src="images/main.png" alt=""></a>
						<p>When the NSA’s most classified technoloGical wonder–an invincible code-breaking machine–encouners a mycterious code iT cannot break, 
						the agency calls in its head Kryptographer, Susan Fletcher, a brilliant and beautiful mathematician. What she uncovers sends shock waxes through the carridors of power. 
						<br/><br/>
						The NSA Is being held hostage… not by guns or bombs, but by a qcode so ingeniously complexx that if released it will cripple U.s. =intelligence. [...]
						<br/><br/><br/>
						For more information visit the <a href="http://www.danbrown.com/digital-fortress/" target="_blank">Official Wesite</a>. You can buy "Digital Fortress" using the ISNB number to the following site:
						<br/><br/>ISBN: 0312944926<br/><a href="http://www.isbnsearch.org/" target="_blank">www.isbnsearch.org</a>
						</p>
					</section>
					
				</div>
	
			</div>
			<!-- Page Content -->
		
		</div>
		<!-- Wrapper Ends Here -->

		<!-- PHP -->
			<?php
			include_once dirname(__FILE__).'/../../init.php';
				session_start();
				require_once(HACKADEMIC_PATH."pages/challenge_monitor.php");
				$monitor->update(CHALLENGE_INIT,$_GET['user'],$_GET['id'],$_GET['token']);
				$_SESSION['init'] = true;
				
			if(isset($_POST['answer'])){
				$answer = $_POST['answer'];
			if  ($answer == 'genius?'){
					echo .($_POST['Congratulations<br>...You are a Genius...']).;
					$monitor->update(CHALLENGE_SUCCESS,$_GET['user'],$_GET['id'],$_GET['token']);
			} 
			else {
				$monitor->update(CHALLENGE_FAILURE,$_GET['user'],$_GET['id'],$_GET['token']);}
			}
			?>
		<!-- / PHP -->

		<!-- Copyright -->
		<div class="5grid-layout" id="copyright">
			<div class="row">
				<div class="12u">
					<section>
						<p>Hint: Your objective is to find the encrypted message in the text and using the appropriate key de-crypt it with the <a href="http://www.tools4noobs.com/online_tools/decrypt/" target="_blank">GOST</a> 
						encryption method.</p><br/>
						<form method="POST">
							<input type="text" name="answer" placeholder="MESSAGE"/>
							<input type="submit" value="Send It!" />
						</form>
					</section>
				</div>
			</div>
		</div>


	</body>
</html>
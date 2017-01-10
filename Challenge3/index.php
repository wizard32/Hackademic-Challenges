<?php

/*
 *    ----------------------------------------------------------------
 *    Copyright (C) 2013
 *   	  Liatsis Fotis <liatsisfotis at gmail dot com>
 *    ----------------------------------------------------------------
 */

?>

<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>Challenge WTC</title>
		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->

		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
		<!-- ENDS superfish -->
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
		
		<!-- SKIN -->
		<link rel="stylesheet" media="all" href="css/skin.css"/>

	</head>
	
	<body lang="en">
	
		<header class="clearfix">

			<div class="wrapper">
				<a id="logo"><img  src="img/logo.gif"></a>
				<a id="logo"><img  src="img/wtc.png" style="padding-left: 510px;"></a>

				<nav>
					<ul id="nav" class="sf-menu">
						<li><a href="flight.html">FLIGHT - TICKET</a></li>
						<li><a href="terrorist.html">TERRORIST</a></li>
						<li><a href="index.html">ABOUT</a></li>
					</ul>
					<div id="combo-holder"></div>
				</nav>
			</div>
		</header>
		
		<!-- MAIN -->
		<div id="main">	
			<div class="wrapper clearfix">
	        	
				<!-- page content -->
	        	<div id="page-content" class="clearfix">
					
					<!-- floated content -->
					<div class="floated-content1">
					<div id="posts-lists">
						<h2 class="page-heading"><span>Challenge WTC - Terrorism</span></h2>
						
						<p style="font-size:14px;">The United States is in a state of shock after a day of attacks which have left thousands dead and New York's World Trade Center destroyed.
						<br/><br/>The Pentagon was also severely damaged by one of the three civilian airliners which hijackers turned into flying bombs. <br/><br/>A fourth plane crashed in a field near Pittsburgh.
						A state of emergency has been declared in Washington D.C. and the US has closed its airspace and its borders with Mexico and Canada.<br/><br/>
						American forces are on one of their highest states of alert and the Pentagon has deployed a naval battle group off the country's east coast to bolster air defences.</p>
						<p style="font-size:14px;">Anti-terrorism department in collaboration with secret agency's has in the hands one of the plane air-ticket of fateful flight that crashed 
						into one of the twin towers. Pentagon Intelligence Agency asks for help of the most aspiring hacker on the planet. <br/><br/>Can you help them?
						
					</div>	
					</div>
					<!-- ends floated content -->
					
					<!-- sidebar -->
		        	<aside id="sidebar">
		        		
		        		<ul>
			        		<li class="block">
				        		<h2>&thinsp;&thinsp;&thinsp;Informations&thinsp;&thinsp;&thinsp;</h2><br/>
			        		</li>

							<li class="block">
				        		<h4>&thinsp;&thinsp;&thinsp;<a href="flight.html">FLIGHT - TICKET</a>&thinsp;&thinsp;&thinsp;</h4>
								<h4>&thinsp;&thinsp;&thinsp;<a href="terrorist.html">TERRORIST</a>&thinsp;&thinsp;&thinsp;</h4>
			        		</li>		
		        		</ul>
		        		
		        		<em id="corner"></em>
		        	</aside>
					<!-- ENDS sidebar -->
					
				</div>	        	
	        	<!--  page content-->
	        	
			</div>
		</div>
		<!-- ENDS MAIN -->
		
		<footer>
			<div class="wrapper">
			
				<ul  class="widget-cols clearfix">
					<li class="first-col">
						
						<div class="widget-block">
							<h4>Hint: Your objective is to extract and decrypt any encrypted messages that may scenario includes.</h4>
							<div class="recent-post">
								<p>
									<form method="POST">
										<input type="text" name="answer" placeholder="MESSAGE" />
										<input type="submit" value="Send" />
									</form>
								</p>
							</div>
						</div>
					</li>
				</ul>				
				
				<!-- PHP -->
					<?php
					include_once dirname(__FILE__).'/../../init.php';
						session_start();
						require_once(HACKADEMIC_PATH."pages/challenge_monitor.php");
						$monitor->update(CHALLENGE_INIT,$_GET['user'],$_GET['id'],$_GET['token']);
						$_SESSION['init'] = true;
						
					if(isset($_POST['answer'])){
						$answer = $_POST['answer'];
					if  ($answer == 'Worlds Zero Day - September 11'){
							echo .($_POST['DONE!<br>...whispers in the shadow...']).;
							$monitor->update(CHALLENGE_SUCCESS,$_GET['user'],$_GET['id'],$_GET['token']);
					}
					else {
						$monitor->update(CHALLENGE_FAILURE,$_GET['user'],$_GET['id'],$_GET['token']);}
					}
					?>
				<!-- / PHP -->
				
				<div class="footer-bottom">
				</div>
				
			</div>
		</footer>
					
	</body>
	
</html>
<?php

/*
 *    ----------------------------------------------------------------
 *    Copyright (C) 2013
 *   	  Liatsis Fotis <liatsisfotis at gmail dot com>
 *    ----------------------------------------------------------------
 */

?>


<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>CERN PAGE</title>
        
    <link rel="stylesheet" href="reset.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
        
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>

<body>
    
    <!-- *********  Header  ********** -->
    
    <div id="header">
        <div id="header_in">
        
        <h1><a href="index.html"><b>CERN</b> PAGE</a></h1>
        
        <div id="menu">
			<ul>
				<li><a href="index.html" class="active">OpenLab</a></li>
			</ul>
        </div>
        
        </div>
    </div>
    
    <!-- *********  Main part   ********** -->
        
        <div id="main_part">
            <div id="main_part_in">
        
            <h2>Genesis Server<br/>Login Panel</h2>
			
            </div>
            
            <div class="button_main">
			
				<form action="#" method="post" class="formit">
					<input type="text" name="username" placeholder="USERNAME" />
				<br/>
					<input type="text" name="password" placeholder="PASSWORD" />
				<br/>
					<input type="submit" class="button_submit" value="LOGIN">

				</form>
            </div>
			
			<!-- PHP -->
				<?php
				include_once dirname(__FILE__).'/../../init.php';
					session_start();
					require_once(HACKADEMIC_PATH."pages/challenge_monitor.php");
					$monitor->update(CHALLENGE_INIT,$_GET['user'],$_GET['id'],$_GET['token']);
					$_SESSION['init'] = true;
					
				
				$username = $_POST['username'];
				$password = $_POST['password'];
				if  ($username == 'genesis_hacked' && $password == 'g0d_w1tH_u$'){
						echo .($_POST['Authorization Granted<br>...Redirecting to Genesis Server...']).;
						$monitor->update(CHALLENGE_SUCCESS,$_GET['user'],$_GET['id'],$_GET['token']);
				}
				else if  ($username == 'admin' && $password == 'cern_researcher'){
						echo .($_POST['Authorization Failed<br>...Follow the white rabbit...']).;
				}
				else {
					$monitor->update(CHALLENGE_FAILURE,$_GET['user'],$_GET['id'],$_GET['token']);}
				?>
			<!-- / PHP -->
            
        </div>
        
        <!-- *********  Content  ********** -->
        
        <div id="content">
            
            <div class="thirds">
                <h3>Hey, it' s important...</h3>
                <p>Some members of our group after an increased activity that observed in the network of <strong>CERN</strong>, managed to intercept and collect some 
				basic - suspicious information related to the attack which took place in <strong>Genesis Server</strong>. According to information from the organization itself, 
				Hacker gained access changing the password of the database that contains the usernames and passwords of researchers. It was observed that after the 
				attack a photo below with a text was sent.</p>
            </div>
            
            <hr class="cleanit">
            
            <div class="banner1">
                <p>Genesis Log File...<p>
                <a href="img/log_file.jpg" class="button_dark" target="_blank">ACCESS IT</a>
            </div>
                
            <!-- ****  Recent works  ***** -->        
            
            <div class="cara"></div>
            
            <!-- ****  About & Testimonials  ***** --> 
            
            <div class="about_blok">
			
                <h3>Hint:</h3>
                <p class="about">Your objective is to find the username and password which gives access to the Genesis Server.</p>
               
            </div>
            
            <div class="testimonials">
                <div class="quote">Demaratus sent a warning about a forthcoming attack to Greece by writing it directly on the wooden backing of a wax tablet before applying its beeswax surface.</div>
                
                <span class="testimonials_bottom"></span>
                
                <span class="by">That's what Hacker's said!</span>
            </div>
            
        </div>
    
    <!-- *********  Footer  ********** -->
    
    <hr class="cleanit">
    
     <div id="footer">
        <div id="footer_in">
            
            <p><a>CERN</a> &mdash; Genesis Server Panel</p>
        
        </div>
    </div>
         
</body>
</html>

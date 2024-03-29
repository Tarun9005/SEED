<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Comfortaa|Arimo|Montserrat" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
      <link rel="stylesheet" type="text/css" href="../style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="cache-control" content="no-cache">
      <meta http-equiv="pragma" content="no-cache">
      <style type="text/css">
      	html{
      		background-image: url('bg.jpg');
      		background-size: cover;
      		background-attachment: fixed;
      		background-repeat: no-repeat;
      	}
      </style>
    </head>

    <body>
    	<div class="container">
    		<div class="row">
			    	<div class="col s12">
			    		<div class="navbar-fixed" style="margin-left:-11px">
			    		 <nav>
    						<div class="nav-wrapper orange darken-2">
    							<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

    							<!-- Header logo for DESKTOP-->
     							 <a href="#" class="brand-logo left orange darken-2 hide-on-med-and-down height-0" style="margin-left: 7%">
     							 	<img class="circle hoverable" style="height:52px;width:52px;margin-top:6px" src="../images/logo_small.jpeg" title="S.E.E.D - Electrino, JSS Noida" alt="S.E.E.D Logo">
     							 <span class="right white-text flow-text" style="padding-left:15px"><b>Forums</b></span>
     							</a>
     							<!-- Header logo for MOBILE-->
     							<a href="#" class="brand-logo orange darken-2 hide-on-large-only height-0">
     							 	<img class="circle hoverable" style="height:50px;width:50px;margin-top:4px" src="../images/logo_small.jpeg" title="S.E.E.D - Electrino, JSS Noida" alt="S.E.E.D Logo">
     							 <span class="right white-text flow-text" style="padding-left:12px"><b>Forums</b></span>
     							</a>

      								<ul id="nav-mobile" class="right hide-on-med-and-down">
      	 								    <li><a href="sass.html">About</a></li>
        									<li><a href="badges.html">Contact Us</a></li>
        									<li><a href="collapsible.html">Events</a></li>
        									<li><a href="../forum/"><i class="material-icons left">forum</i>Forum</a></li>
        									<li><a class="dropdown-trigger" style="outline-width:0px" href="#!" data-target="dropdown1">More<i class="material-icons right" style="padding-right: 100px">arrow_drop_down</i></a></li>
     							    </ul>
   							</div>
 						  </nav>
 						  			<!--SideNav here -->
									<ul id="slide-out" class="sidenav">
								    <li>
								    	<div class="user-view">
										      <div class="background">
										      	<img class="responsive-img" src="../images/jss.jpg">
										      </div><br><br>
										     <div class="white-text sidenav_text" style="font-size: 29px;letter-spacing: 2px">S.E.E.D</div>
										      <div class="white-text sidenav_text" style="font-size: 17px">JSS , Noida</div>
									    </div>
								    </li>
								    <li><a href="#!" class="waves-effect grey-text text-darken-2"><i class="material-icons">home</i>Home</a></li>
								    <li><a href="#!" class="waves-effect grey-text text-darken-2"><i class="material-icons">info</i>About</a></li>
								    <li><a href="#!" class="waves-effect grey-text text-darken-2"><i class="material-icons">mail</i>Contact Us</a></li>
								    <li><a href="../forum/" class="waves-effect grey-text text-darken-2"><i class="material-icons">forum</i>S.E.E.D Forum</a></li>
								    <li><a href="#!" class="waves-effect grey-text text-darken-2"><i class="material-icons">star</i>Current</a></li>
								    <li><div class="divider"></div></li>
								    <li><a class="subheader">More</a></li>
								    <li><a class="waves-effect grey-text text-darken-2" href="#!"><i class="material-icons">swap_horiz</i>JSS Website</a></li>
								    <li><a class="waves-effect grey-text text-darken-2" href="#!"><i class="material-icons">swap_horiz</i>JSS InfoConnect</a></li>
								    <li><a class="waves-effect grey-text text-darken-2" href="#!"><i class="material-icons">swap_horiz</i>JSS SIM Login</a></li>
								    <li><a class="waves-effect grey-text text-darken-2" href="#!"><i class="material-icons">swap_horiz</i>AKTU Website</a></li>
								    <li><a></a></li>
								    
								  </ul>
 						 			<!-- Dropdown Structure -->
									<ul id="dropdown1" class="dropdown-content">
  										<li><a href="#"><i class="material-icons left">swap_horiz</i>JSS Website</a></li>
  										<div class="divider"></div>
	  									<li><a href="#"><i class="material-icons left">swap_horiz</i>JSS InfoConnect</a></li>
	  									<div class="divider"></div>
	 								    <li><a href="#!"><i class="material-icons left">swap_horiz</i>JSS SIM Login</a></li>
	 								    <div class="divider"></div>
	 								    <li><a href="#!"><i class="material-icons left">swap_horiz</i>AKTU Website</a></li>
									</ul>		
 						</div>
			    	</div>
			    </div>
			</div>
			<div class="row">
			    <div class="col s12 l10 offset-l2">
			      <ul class="tabs" style="margin-top:-18px">
			        <li class="tab col s6 l5 tab_set"><a class="active" href="#live_discussion">DISCUSSION</a></li>
			        <li class="tab col s6 l5 tab_set"><a href="#faq">FAQ</a></li>	
			      </ul>
			    </div>

			    <div id="live_discussion" class="col s12 l8 offset-l2">
			    	
			    	<div style="display: flex;width: 100%;height:60vh;align-items: center;justify-content:center;">
				    	<div class="preloader-wrapper med active">
					      <div class="spinner-layer spinner-blue">
					        <div class="circle-clipper left">
					          <div class="circle"></div>
					        </div><div class="gap-patch">
					          <div class="circle"></div>
					        </div><div class="circle-clipper right">
					          <div class="circle"></div>
					        </div>
					      </div>

					      <div class="spinner-layer spinner-red">
					        <div class="circle-clipper left">
					          <div class="circle"></div>
					        </div><div class="gap-patch">
					          <div class="circle"></div>
					        </div><div class="circle-clipper right">
					          <div class="circle"></div>
					        </div>
					      </div>

					      <div class="spinner-layer spinner-yellow">
					        <div class="circle-clipper left">
					          <div class="circle"></div>
					        </div><div class="gap-patch">
					          <div class="circle"></div>
					        </div><div class="circle-clipper right">
					          <div class="circle"></div>
					        </div>
					      </div>

					      <div class="spinner-layer spinner-green">
					        <div class="circle-clipper left">
					          <div class="circle"></div>
					        </div><div class="gap-patch">
					          <div class="circle"></div>
					        </div><div class="circle-clipper right">
					          <div class="circle"></div>
					        </div>
					      </div>
					    </div>
					</div>

			   	    </div>

			    <div id="faq" class="col s12 l8 offset-l2" style="display: none;">
			    	<div class="query-box" style="margin-top:15px;">
			    		 <div class="query-question orange-text text-darken-1"> 
						        <span class="red-text">Q.)</span>
						         What is the general cost of an Arduino Uno?Please tell fast.I am a very simple card.I am good at containing small bits of information.
						           <div class="divider divider-lining-h" style="margin-top:15px;margin-bottom:0"></div>
						 </div>
						 <div class="query-question orange-text text-darken-3" style="margin-left:2%;margin-top:-15px"> 
						        <span class="blue-text text-darken-2">Ans.)</span>
						         It generally costs around 400 bucks bro.
						 </div>
					</div>
					<div class="query-box">
			    		 <div class="query-question orange-text text-darken-1"> 
						        <span class="red-text">Q.)</span>
						         What is the general cost of an Arduino Uno?Please tell fast.I am a very simple card.I am good at containing small bits of information.
						          <div class="divider divider-lining-h" style="margin-top:15px;margin-bottom:0"></div>
						 </div>
						 <div class="query-question orange-text text-darken-3" style="margin-left:2%;margin-top:-15px"> 
						        <span class="blue-text text-darken-2">Ans.)</span>
						         It generally costs around 400 bucks bro.
						 </div>
					</div>
			    </div>
			    
		 
		  
		    <div class="nw_query_display">
			    <div class="nw_query row">
			    	<div class="close-new-query white-text" style="border-radius: 100%" onclick="new_query_cont()"><i class="material-icons">clear</i></div>
					<div class="nw_box grey-text text-darken-4 grey lighten-5 col s10 offset-s1 l6 offset-l3 center" style="padding-top: 10px;">
						<img class="responsive-img circle" style="vertical-align:middle;margin:0 10px 10px -4%" src="../images/logo_small.jpeg" width="13%" height="13%">
						<div class="flow-text" style="display:inline-block;position: relative;top:-3px">Add new Query</div>
						<div class="divider"></div>
						
							<span class="qry-post-error center">
								<span id="qry_post_error_text">
								</span>
							</span>

						<form action="none">
							<div class="input-field col l10 s10 offset-l1 offset-s1">
								<i class="material-icons prefix">account_circle</i>
								<input id="newq_name" type="text" class="validate grey-text text-darken-2" style="text-transform: uppercase;">
							    <label for="newq_name" id="newq_name_label">Name</label>
							</div>
							<div class="input-field col s12">
								<i class="material-icons prefix">email</i>
								<input id="newq_email" type="email" class="validate grey-text text-darken-2">
							    <label for="newq_email" id="newq_email_label">Email</label>
							</div>
							<div class="input-field col s12">
								<i class="material-icons prefix">forum</i>
								<textarea id="newq_comment" class="materialize-textarea grey-text text-darken-2"></textarea>
							    <label for="newq_comment">Type your Query here</label>
							</div>
							<div class="col s12 center" style="margin-bottom: 18px">
							    <div class="btn waves-effect waves-light blue lighten-1 hoverable" onclick="post_new_query()">
								 Post Query
								</div>
						    </div>
						</form>

					</div>
				</div>
			</div>

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>
	  <script type="text/javascript">
	  	var config = {
		    apiKey: "AIzaSyARAkiIS2bn7C5iPhhr4K7qdvfqpwL_WwA",
		    authDomain: "forum-seed.firebaseapp.com",
		    databaseURL: "https://forum-seed.firebaseio.com",
		    projectId: "forum-seed",
		    storageBucket: "forum-seed.appspot.com",
		    messagingSenderId: "806703694380"
		  };
		  firebase.initializeApp(config);
	  </script>
		<script type="text/javascript" src="forum.js"></script>
		<script type="text/javascript" src="cookie.js"></script>
      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
      <script type="text/javascript">
      	$(document).ready(function(){
      		$(".dropdown-trigger").dropdown();
      		 $('.sidenav').sidenav();
      		 $('.tabs').tabs();
		});
      </script>
    </body>
 </html>
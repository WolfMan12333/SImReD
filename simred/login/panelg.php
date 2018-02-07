<?php

	/*require_once("session.php");

	require_once("class.user.php");
	$auth_user = new USER();


	$user_id = $_SESSION['user_session'];

	$stmt = $auth_user->runQuery("SELECT * FROM login WHERE id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
	
	if(isset($_POST['btn-logout']))
	{
		header("Location: login.php");	
		//session_destroy();
	}*/
	//sercurity header:
	header('X-Frame-Options: DENY');
?>

<!DOCTYPE html>
<html lang="en">
	  <head>
	    <meta charset="utf-8">	  
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <title>SImReD</title>

	    <!-- Bootstrap core CSS -->
	    <link href="css/bootstrap.css" rel="stylesheet" text="text/css">

	    <!-- Custom styles for this template -->
	    <link href="cssstyle.css" rel="stylesheet" text="text/css">
		<script type="text/javascript">
			function sml () {
				$.ajax( { type : 'POST',
					  data : { },
					  url  : 'sml.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
					    document.getElementById("sml").innerHTML =  data;               // <=== VALUE RETURNED FROM FUNCTION.
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}

			function aal() {
				$.ajax( { type : 'POST',
					  data : { },
					  url  : 'aal.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
					    document.getElementById("sml").innerHTML =  data;               // <=== VALUE RETURNED FROM FUNCTION.
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}

			function ael() {
				$.ajax( { type : 'POST',
					  data : { },
					  url  : 'ael.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
					    document.getElementById("sml").innerHTML =  data;               // <=== VALUE RETURNED FROM FUNCTION.
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}
			
			function sml_one() {
				$.ajax( { type : 'POST',
					  data : { },
					  url  : 'sml_one.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
					    document.getElementById("sml").innerHTML =  data;               // <=== VALUE RETURNED FROM FUNCTION.
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}

			function syslog() {
				$.ajax( { type : 'POST',
					  data : { },
					  url  : 'syslog.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
					    document.getElementById("sml").innerHTML =  data;               // <=== VALUE RETURNED FROM FUNCTION.
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}

			function syslog_one() {
				$.ajax( { type : 'POST',
					  data : { },
					  url  : 'syslog_one.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
					    document.getElementById("sml").innerHTML =  data;               // <=== VALUE RETURNED FROM FUNCTION.
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}

			function auth() {
				$.ajax( { type : 'POST',
					  data : { },
					  url  : 'authlog.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
					    document.getElementById("sn").innerHTML =  data;               // <=== VALUE RETURNED FROM FUNCTION.
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}

			function auth_one() {
				$.ajax( { type : 'POST',
					  data : { },
					  url  : 'authlog_one.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
					    document.getElementById("sn").innerHTML =  data;               // <=== VALUE RETURNED FROM FUNCTION.
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}

			function user() {
				$.ajax( { type : 'POST',
					  data : { },
					  url  : 'userlog.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
					    document.getElementById("sn").innerHTML =  data;               // <=== VALUE RETURNED FROM FUNCTION.
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}

			function user_one() {
				$.ajax( { type : 'POST',
					  data : { },
					  url  : 'userlog_one.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
					    document.getElementById("sn").innerHTML =  data;               // <=== VALUE RETURNED FROM FUNCTION.
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}

			function kern() {
				$.ajax( { type : 'POST',
					  data : { },
					  url  : 'kernlog.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
					    document.getElementById("sn").innerHTML =  data;               // <=== VALUE RETURNED FROM FUNCTION.
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}

			function kern_one(){
				$.ajax( { type : 'POST',
					  data : { },
					  url  : 'kernlog_one.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
					    document.getElementById("sn").innerHTML =  data;               // <=== VALUE RETURNED FROM FUNCTION.
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}

			function rgilu(){
				var target = document.getElementById("trg").value;
				$.ajax( { type : 'POST',
					  data : { target : target},
					  url  : 'gilu.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
					    document.getElementById("gmt").innerHTML =  data;               // <=== VALUE RETURNED FROM FUNCTION.
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}

			function trgt_one(){
				var target = document.getElementById("trg").value;
				$.ajax( { type : 'POST',
					  data : { target : target},
					  url  : 'lgeo.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
						document.getElementById("ssd").value = data;// <=== VALUE RETURNED FROM FUNCTION.alert
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}

			function trgt_two(){
				var target = document.getElementById("trg").value;
				$.ajax( { type : 'POST',
					  data : { target : target},
					  url  : 'wgeo.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
					    document.getElementById("ssd2").value = data;         // <=== VALUE RETURNED FROM FUNCTION.
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}

			function ctors(){
				var target = document.getElementById("ts").value;
				$.ajax( { type : 'POST',
					  data : { target : target},
					  url  : 'ctors.php',              // <=== CALL THE PHP FUNCTION HERE.
					  success: function ( data ) {
					    document.getElementById("gmt").innerHTML = data;         // <=== VALUE RETURNED FROM FUNCTION.
					  },
					  error: function ( xhr ) {
					    alert( "error" );
					  }
					});
			}
		</script>
	  </head>

	  <body>
		<!--<form method="POST">-->
		<!--<div class="container">-->
			<div class="row maxsize">
				<div class="col-xs-8 col-sm-6 col-md-7 col-lg-6 no-gutters">
					<div class="col1 divsize">
						<div class="navbar navbar-default">
							<div class="collapse navbar-collapse" id="mynavbar-content">
								<ul class="nav nav-tabs">
									<button class="btn btn-primary" onclick="sml()">System Messages Log</button>
									<button class="btn btn-primary" onclick="sml_one()">System Messages Log 1</button>
									<button class="btn btn-primary" onclick="syslog()">Sys Log</button>
									<button class="btn btn-primary" onclick="syslog_one()">Sys Log 1</button>
									<button class="btn btn-primary" onclick="aal()">Apache Access Log</button>
									<button class="btn btn-primary" onclick="ael()">Apache Error Log</button>				
								</ul>
							</div>
						</div>	
						<div class="pre-scrollable divsize">
							<p id="sml"></p>
						</div>
						<hr>
					</div>
				</div>
				<div class="col-xs-8 col-sm-6 col-md-7 col-lg-6 no-gutters">
					<div class="col2 divsize topsize">
						<div class="navbar navbar-default">
							<ul class="nav nav-tabs">
								<button class="btn btn-primary" onclick="auth()">Authentication Log</button>	
								<button class="btn btn-primary" onclick="auth_one()">Authentication Log 1</button>
								<button class="btn btn-primary" onclick="user()">User Log</button>
								<button class="btn btn-primary" onclick="user_one()">User Log 1</button>
								<button class="btn btn-primary" onclick="kern()">Kernel Log</button>
								<button class="btn btn-primary" onclick="kern_one()">Kernel Log 1</button>
							</ul>
						</div>
						<div class="pre-scrollable divsize">
							<p id="sn"></p>
						</div>
						<hr>
					</div>
				</div>
				<div class="clearfix visible-xs-block"></div>
			<div class="col-xs-8 col-sm-6 col-md-7 col-lg-6 no-gutters">
				<div class="col3 divsize topsize">
					<div class="navbar navbar-default">
						<div>
							WARNING: LOGOUT!!!<br>
							<button name="btn-logout" class="btn btn-primary" onclick="logout()">Logout</button>
						</div>

						<br>
						Type IP address of your Target<br>
						<input id="trg" type="text">
						<button class="btn btn-primary" onclick="rgilu();trgt_one();trgt_two();fm();">Track Target</button>
						<br>
						Types: roadmap/hybrid/terrain<br>
						<input id="maptype" type="text">
						<button class="btn btn-primary" onclick="myMap()">Change Type of Map</button><br>
						<input type="text" id="ssd" disabled>
						<input type="text" id="ssd2" disabled>
						<br>
						Example: * * * * * /sciezka/do/pliku <br>
						<input id="ts" type="text">
						<button class="btn btn-primary" onclick="ctors()">Change Time of Script Execution</button>
					</div>
					<p id="gmt"></p>
				</div>
			</div>
				<div class="col-xs-8 col-sm-6 col-md-7 col-lg-6 no-gutters">
					<div class="col4 divsize topsize">
						<div id="googleMap1" style="width:100%;height:50vh;"></div>	
						<script>
							function myMap() {
								var mapProp={
									center: new google.maps.LatLng(51.508742,-0.120850),
									zoom:5,
								};
								var map = new google.maps.Map(document.getElementById("googleMap1"),mapProp);
								if(document.getElementById("maptype").value === "roadmap")
								{
										var mapOptions1 = {
										    center: new google.maps.LatLng(51.508742,-0.120850),
										    zoom:9,
										    mapTypeId: google.maps.MapTypeId.ROADMAP
										  };
									  var map1 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions1);
								}
								//******************************************//
								if(document.getElementById("maptype").value === "hybrid")
								{
									var mapOptions3 = {
									    center: new google.maps.LatLng(51.508742,-0.120850),
									    zoom:5,
									    mapTypeId: google.maps.MapTypeId.HYBRID
									  };
									  var map3 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions3);
								}
								//**********************************************************//
								if(document.getElementById("maptype").value === "terrain")
								{
									var mapOptions4 = {
									    center: new google.maps.LatLng(51.508742,-0.120850),
									    zoom:5,
									    mapTypeId: google.maps.MapTypeId.TERRAIN
									  };
									var map4 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions4);
								}
//***********************************************************************************************************************************************************************************
								var lgeo = document.getElementById("ssd").value;
								var wgeo = document.getElementById("ssd2").value;
								if(document.getElementById("maptype").value === "roadmap" && document.getElementById("ssd").value !== "" && document.getElementById("ssd2").value !== "")
								{
									var mapOptions1 = {
										    center: new google.maps.LatLng(lgeo,wgeo),
										    zoom:18,
										    mapTypeId: google.maps.MapTypeId.ROADMAP
										  };
									  var map1 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions1);
									var pos = new google.maps.LatLng(lgeo,wgeo);
									var marker = new google.maps.Marker({
										position: pos,
									});
									marker.setMap(map1);
								}

								if(document.getElementById("maptype").value === "hybrid" && document.getElementById("ssd").value !== "" && document.getElementById("ssd2").value !== "")
								{
									var mapOptions3 = {
									    center: new google.maps.LatLng(lgeo,wgeo),
									    zoom:18,
									    mapTypeId: google.maps.MapTypeId.HYBRID
									  };
									  var map3 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions3);

									var pos = new google.maps.LatLng(lgeo,wgeo);
									var marker = new google.maps.Marker({
										position: pos,
									});
									marker.setMap(map3);
								}

								if(document.getElementById("maptype").value === "terrain" && document.getElementById("ssd").value !== "" && document.getElementById("ssd2").value !== "")
								{
									var mapOptions4 = {
									    center: new google.maps.LatLng(lgeo,wgeo),	
									    zoom:18,
									    mapTypeId: google.maps.MapTypeId.TERRAIN
									  };
									var map4 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions4);

									var pos = new google.maps.LatLng(lgeo,wgeo);
									var marker = new google.maps.Marker({
										position: pos,
									});
									marker.setMap(map4);
								}
							}
//***********************************************************************************************************************************************************************************************************
							function fm() {
								var lgeo = document.getElementById("ssd").value;
								var wgeo = document.getElementById("ssd2").value;

								if(document.getElementById("maptype").value === "")
								{
									var mapProp={
										center: new google.maps.LatLng(lgeo,wgeo),
										zoom:18,
									};
									var map = new google.maps.Map(document.getElementById("googleMap1"),mapProp);

									var pos = new google.maps.LatLng(lgeo,wgeo);
									var marker = new google.maps.Marker({
										position: pos,
									});
									marker.setMap(map);
								}

								if(document.getElementById("maptype").value === "roadmap")
								{
									var mapOptions1 = {
										    center: new google.maps.LatLng(lgeo,wgeo),
										    zoom:18,
										    mapTypeId: google.maps.MapTypeId.ROADMAP
										  };
									  var map1 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions1);
									var pos = new google.maps.LatLng(lgeo,wgeo);
									var marker = new google.maps.Marker({
										position: pos,
									});
									marker.setMap(map1);
								}

								if(document.getElementById("maptype").value === "hybrid")
								{
									var mapOptions3 = {
									    center: new google.maps.LatLng(lgeo,wgeo),
									    zoom:18,
									    mapTypeId: google.maps.MapTypeId.HYBRID
									  };
									  var map3 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions3);

									var pos = new google.maps.LatLng(lgeo,wgeo);
									var marker = new google.maps.Marker({
										position: pos,
									});
									marker.setMap(map3);
								}

								if(document.getElementById("maptype").value === "terrain")
								{
									var mapOptions4 = {
									    center: new google.maps.LatLng(lgeo,wgeo),	
									    zoom:18,
									    mapTypeId: google.maps.MapTypeId.TERRAIN
									  };
									var map4 = new google.maps.Map(document.getElementById("googleMap1"),mapOptions4);

									var pos = new google.maps.LatLng(lgeo,wgeo);
									var marker = new google.maps.Marker({
										position: pos,
									});
									marker.setMap(map4);
								}
							}
						</script>
					</div>		
				</div>
			</div>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzyjx_BemUBTflhuexEgM4gg13NOeLPEE&callback=myMap"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery.js"></script>
		<!--</form>-->
	  </body>
</html>

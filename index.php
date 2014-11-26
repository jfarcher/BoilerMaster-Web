<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>BoilerMasterWeb</title>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<div class="row-fluid">
				
				<div class="box black span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white list"></i><span class="break"></span>Downstairs Temperatures</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list metro">
							<li>
								<a href="#">
									<i class="icon-fire red"></i>
									<strong>Lounge</strong>
							<span id='A1'></span>
									</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-fire red"></i>
									<strong>Study</strong>
							<span id='A2'></span>
									</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-fire red"></i>
									<strong>Dining Room</strong>
								<span id='A3'></span>	
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-fire red"></i>
									<strong>Kitchen</strong>
								<span id='A4'></span>	
									</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-fire red"></i>
									<strong>Hall</strong>

								<span id='A5'></span>	
									</a>
							</li>
						</ul>
					</div>
				</div><!--/span-->
				
				<div class="box black span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white list"></i><span class="break"></span>Upstairs Temperatures</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list metro">
							<li>
								<a href="#">
									<i class="icon-fire blue"></i>
									<strong>Master Bedroom</strong>
								<span id='B1'></span>	
									</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-fire blue"></i>
									<strong>Alfies Room</strong>

								<span id='B2'></span>	
									</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-fire blue"></i>
									<strong>Isabelles Room</strong>
								<span id='B3'></span>	
									</a>
							</li>
						</ul>
					</div>
			
					<div class="box-header">
						<h2><i class="halflings-icon white list"></i><span class="break"></span>Other Temperatures</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
	
					<div class="box-content">
						<ul class="dashboard-list metro">
							<li>
								<a href="#">
									<i class="icon-fire green"></i>
									<strong>Outside</strong>
								<span id='Outside'></span>	
									</a>
							</li>
					</div>
			</div>
				<div class="box black span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white list"></i><span class="break"></span>Details</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list metro">
							<li>
								<a href="#">
									<i class="icon-fire yellow"></i>
									<strong>Internal Mean</strong>
								<span id='IMean'></span>	
									</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-fire yellow"></i>
									<strong>External Mean</strong>
								<span id='EMean'></span>	
									</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-fire yellow"></i>
									<strong>Calendar</strong>
								
								<span id='Cal'></span>	
									</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-fire yellow"></i>
									<strong>Requested</strong>
								
								<span id='Request'></span>	
									</a>
							</li>
							<li>
								<a href="#">
									<i class="icon-fire yellow"></i>
									<strong>Boiler On</strong>
								
								<span id='Boiler'></span>	
									</a>
							</li>
						</ul>
					</div>
					</div>
</div>	
			<div class="row-fluid">
				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3" onclick="window.location = './required.php?temp=8';" onmouseover="" style="cursor: pointer;">
					<div class="number">08&deg; C</div>
					<div class="title">Request</div>
				</div>
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3" onclick="window.location = './required.php?temp=12';" onmouseover="" style="cursor: pointer;">
					<div class="number">12&deg; C</div>
					<div class="title">Request</div>
</a>
				</div>
				<div class="span3 statbox blue" onTablet="span6" onDesktop="span3" onclick="window.location = './required.php?temp=14';" onmouseover="" style="cursor: pointer;">
					<div class="number">14&deg; C</div>
					<div class="title">Request</div>
</a>
				</div>
				<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3" onclick="window.location = './required.php?temp=16';" onmouseover="" style="cursor: pointer;">
					<div class="number">16&deg; C</div>
					<div class="title">Request</div>
	</a>
				</div>

					

			</div>
			
						
			<div class="row-fluid">
					
				<div class="span3 statbox blue" onTablet="span6" onDesktop="span3" onclick="window.location = './required.php?temp=18';" onmouseover="" style="cursor: pointer;">
					<div class="number">18&deg; C</div>
					<div class="title">Request</div>
				</div>

				<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3"  onclick="window.location = './required.php?temp=20';" onmouseover="" style="cursor: pointer;">
					<div class="number">20&deg; C</div>
					<div class="title">Request</div>
				</div>

				<div class="span3 statbox green" onTablet="span6" onDesktop="span3" onclick="window.location = './required.php?temp=22';" onmouseover="" style="cursor: pointer;">
					<div class="number">22&deg; C</div>
					<div class="title">Request</div>
				</div>

				<div class="span3 statbox red" onTablet="span6" onDesktop="span3" onclick="window.location = './required.php?temp=24';" onmouseover="" style="cursor: pointer;">
					<div class="number">24&deg; C</div>
					<div class="title">Request</div>
				</div>
			
			</div>
			
			
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
<!--	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>-->
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>-->
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
    		<script src="js/mqttws31.js" type="text/javascript"></script>
                <script src="js/config.js" type="text/javascript"></script>     
<script type="text/javascript">                                                                                                                                                                                
    var mqtt;                                                                                                                                                                                                      
    var reconnectTimeout = 2000;                                                                                                                                                                                   
                                                                                                                                                                                                                   
    function MQTTconnect() {                                                                                                                                                                                       
        mqtt = new Paho.MQTT.Client(                                                                                                                                                                               
                        host,                                                                                                                                                                                      
                        port,                                                                                                                                                                                      
                        "web_" + parseInt(Math.random() * 100,                                                                                                                                                     
                        10));                                                                                                                                                                                      
        var options = {                                                                                                                                                                                            
            timeout: 3,                                                                                                                                                                                            
            useSSL: useTLS,                                                                                                                                                                                        
            cleanSession: cleansession,                                                                                                                                                                            
            onSuccess: onConnect,                                                                                                                                                                                  
            onFailure: function (message) {                                                                                                                                                                        
                $('#status').val("Connection failed: " + message.errorMessage + "Retrying");                                                                                                                       
                setTimeout(MQTTconnect, reconnectTimeout);                                                                                                                                                         
            }                                                                                                                                                                                                      
        };                                                                                                                                                                                                         
                                                                                                                                                                                                                   
        mqtt.onConnectionLost = onConnectionLost;                                                                                                                                                                  
        mqtt.onMessageArrived = onMessageArrived;                                                                                                                                                                  
                                                                                                                                                                                                                   
        if (username != null) {                                                                                                                                                                                    
            options.userName = username;                                                                                                                                                                           
            options.password = password;                                                                                                                                                                           
        }                                                                                                                                                                                                          
        console.log("Host="+ host + ", port=" + port + " TLS = " + useTLS + " username=" + username + " password=" + password);                                                                                    
        mqtt.connect(options);                                                                                                                                                                                     
    }                                                                                                                                                                                                              
                                                                                                                                                                                                                   
    function onConnect() {                                                                                                                                                                                         
        $('#status').val('Connected to ' + host + ':' + port);                                                                                                                                                     
        // Connection succeeded; subscribe to our topic                                                                                                                                                            
        mqtt.subscribe(topic, {qos: 0});                                                                                                                                                                           
//        $('#topic').val(topic);                                                                                                                                                                                  
    }                                                                                                                                                                                                              
                                                                                                                                                                                                                   
    function onConnectionLost(response) {                                                                                                                                                                          
        setTimeout(MQTTconnect, reconnectTimeout);                                                                                                                                                                 
        $('#status').val("connection lost: " + responseObject.errorMessage + ". Reconnecting");                                                                                                                    
                                                                                                                                                                                                                   
    };                                                                                                                                                                                                             
                                                                                                                                                                                                                   
    function onMessageArrived(message) {                                                                                                                                                                           
                                                                                                                                                                                                                   
        var topic = message.destinationName;                                                                                                                                                                       
        var payload = message.payloadString;                                                                                                                                                                       
        if(topic == Caltopic){                                                                                                                                                                                     
       $('#Cal').html(payload);                                                                                                                                                                                    
        }                                   
       if(topic == A1topic){                                                                                                                                                                                      
       $('#A1').html(payload);                                                                                                                                                                                     
        }                                                                                                                                                                                                          
       if(topic == A2topic){                                                                                                                                                                                      
       $('#A2').html(payload);                                                                                                                                                                                     
        }                                                                                                                                                                                                          
       if(topic == A3topic){                                                                                                                                                                                      
       $('#A3').html(payload);                                                                                                                                                                                     
        }                                                                                                                                                                                                          
       if(topic == A4topic){                                                                                                                                                                                      
       $('#A4').html(payload);                                                                                                                                                                                     
        }                                                                                                                                                                                                          
       if(topic == A5topic){                                                                                                                                                                                      
       $('#A5').html(payload);                                                                                                                                                                                     
        }                                                                                                                                                                                                          
       if(topic == B1topic){                                                                                                                                                                                      
       $('#B1').html(payload);                                                                                                                                                                                     
        }                                                                                                                                                                                                          
       if(topic == B2topic){                                                                                                                                                                                      
       $('#B2').html(payload);                                                                                                                                                                                     
        }                                                                                                                                                                                                          
        if(topic == B3topic){                                                                                                                                                                                      
       $('#B3').html(payload);                                                                                                                                                                                     
        }                                                                                                                                                                                                          
        if(topic == IMeantopic){                                                                                                                                                                                   
       $('#IMean').html(payload);                                                                                                                                                                                  
        }                                                                                                                                                                                                          
        if(topic == EMeantopic){                                                                                                                                                                                   
       $('#EMean').html(payload);                                                                                                                                                                                  
        }                                                                                                                                                                                                          
        if(topic == Outsidetopic){                                                                                                                                                                                 
       $('#Outside').html(payload);                                                                                                                                                                                
        }                                                                                                                                                                                                          
        if(topic == Requesttopic){                                                                                                                                                                                 
       $('#Request').html(payload);                                                                                                                                                                                
        }                                                                                                                                                                                                          
        if(topic == Boilertopic){                                                                                                                                                                                  
       $('#Boiler').html(payload);                                                                                                                                                                                 
        }                                                                                                                                                                                                          
                                                                                                                                                                                                                   
                                                                                                                                                                                                                   
    };                                                                                                                                                                                                             
                                                                                                                                                                                                                   
                                                                                                                                                                                                                   
    $(document).ready(function() {                                                                                                                                                                                 
        MQTTconnect();                                                                                                                                                                                             
    });                                                                                                                                                                                                            
                                                                                                                                                                                                                   
    </script>                            
	<!-- end: JavaScript-->
	
</body>
</html>

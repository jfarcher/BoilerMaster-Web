<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/base.css" />
    <link rel="stylesheet" type="text/css" href="css/mansour.css" />
    <title>HA Front End</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="mqttws31.js" type="text/javascript"></script>
    <script src="jquery.min.js" type="text/javascript"></script>
    <script src="config.js" type="text/javascript"></script>

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
	if(topic == B1topic){
       $('#B1').html(payload);
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
  </head>
  <body>
    <div id="lcars_home">
        <a href="/">DECK</a>
    </div>
<div class="lcars_command">
    <h2>LIFE SUPPORT</h2>
</div>
<div class=readout>
	<table>
        <tr><th class="tablecol7">Device</th><th class="tablecol7">Reading</th></tr>
	<tbody>
        <tr><td class="tablecol5">A1: </td><td class="tablecol5"><span id='A1' style="font-family: 'Courier New', Courier, monospace;"></span></td></tr> 
        <tr><td class="tablecol6">B1: </td><td class="tablecol6"><span id='B1' style="font-family: 'Courier New', Courier, monospace;"></span></td></tr> 
	<tr><td class="tablecol5">Mean Int.</td><td class="tablecol5"><span id='IMean' style="font-family: 'Courier New', Courier, monospace;"></span></td></tr> 
	<tr><td class="tablecol6">Mean Ext.</td><td class="tablecol6"><span id='EMean' style="font-family: 'Courier New', Courier, monospace;"></span></td></tr> 
	<tr><td class="tablecol5">Outside</td><td class="tablecol5"><span id='Outside' style="font-family: 'Courier New', Courier, monospace;"></span></td></tr> 
        <tr><td class="tablecol6">Calendar</td><td class="tablecol6"><span id='Cal' style="font-family: 'Courier New', Courier, monospace;"></span></td></tr>
        <tr><td class="tablecol5">Required</td><td class="tablecol5"><span id='Request' style="font-family: 'Courier New', Courier, monospace;"></span></td></tr>
        <tr><td class="tablecol6">Boiler On</td><td class="tablecol6"><span id='Boiler' style="font-family: 'Courier New', Courier, monospace;"></span></td></tr>
	</tbody>

</table>
</div>
<div id="interface">
<ul id="bigrow">
<li><a href="required.php?temp=22.0" class="redbadge">22</a></li>
<li><a href="required.php?temp=20.0" class="redbadge">20</a></li>
<li><a href="required.php?temp=18.0" class="redbadge">18</a></li>
<li><a href="required.php?temp=16.0" class="redbadge">16</a></li>
<li><a href="required.php?temp=12.0" class="redbadge">12</a></li>
</ul>
<ul id="smallerrow">
<li><a href="required.php?temp=26.0" class="bluebadge">26</a></li>
<li><a href="required.php?temp=24.0" class="bluebadge">24</a></li>
<li><a href="required.php?temp=21.0" class="bluebadge">21</a></li>
<li><a href="required.php?temp=14.0" class="bluebadge">14</a></li>
<li><a href="required.php?temp=8.0" class="bluebadge">08</a></li>
</ul>
</div>


  </body>
</html>

<html>

<head>
	<title>Developer Primabook</title>
<script>
function WebSocketTest()
{
  if ("WebSocket" in window)
  {
     alert("WebSocket is supported by your Browser!");
     // Let us open a web socket
     var ws = new WebSocket("ws://localhost:3000/echo");
     ws.onopen = function()
     {
        // Web Socket is connected, send data using send()
        ws.send("Message to send");
        alert("Message is sent...");
     };
     ws.onmessage = function (evt) 
     { 
        var received_msg = evt.data;
        alert("Message is received...");
     };
     ws.onclose = function()
     { 
        // websocket is closed.
        alert("Connection is closed..."); 
     };
  }
  else
  {
     // The browser doesn't support WebSocket
     alert("WebSocket NOT supported by your Browser!");
  }
}
</script>
</head>

<body bgcolor=#555555>
	<style>body { font-family: Ubuntu, sans-serif; }</style>
	<div style="position: absolute; left: 0%; top: 0%; width: 100%; height: 10%; background-color: #333333;">
		<div style="position: absolute; left: 1%; top: -10%; width: 100%; height: 25%; background-color: #333333;">
		<font color=#555555><h1>Prima Developer</h1></font>
		</div>
	</div>
	<div style="position: absolute; left: 10%; top: 50%; width: 100%; height: 10%; background-color: #333333;">
		<?php
$myFile = "testFile.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, 1024);
fclose($fh);
echo $theData;
?>
		<form name="form">
		<input name="text" type="text">
		<input type="button" onClick="alert(js_var);form.text.value = js_var;">
	</form>
	</div>

	<script type="text/javascript">
	js_var = "<?php echo($theData); ?>";
	form.text.value = js_var;
	</script>

</body>

</html>

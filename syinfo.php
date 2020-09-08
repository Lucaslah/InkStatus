<?php

// Server Hardware Information v1.0.0

?>

<html>
<head>
<title><?php echo $SERVER_NAME; ?> - Server Information</title>
<STYLE type=text/css>
BODY { FONT-SIZE: 8pt; COLOR: black; FONT-FAMILY: Verdana,arial, helvetica, serif; margin : 0 0 0 0;}
.style1 {
	color: #999999;
	font-weight: bold;
}
</STYLE>
</head>
<body>
<blockquote>
  <pre><p></p>
<span class="style1">Uptime:</span>
<?php system("uptime"); ?>

<span class="style1">System Information:</span>
<?php system("uname -a"); ?>


<span class="style1">Memory Usage (GB):</span>
<?php system("python meminfo.py"); ?>


<span class="style1">Disk Usage:</span>
<?php system("df -h"); ?>


<span class="style1">CPU Information:</span>
<?php system("sysctl -n machdep.cpu.brand_string"); ?>


<span class="style1">OS Information:</span>
<?php system("sw_vers"); ?>


<span class="style1">Router input IP Address:</span>
<?php system("ipconfig getifaddr en0"); ?>


<span class="style1">Wifi Info</span>
<?php system("networksetup -getairportpower en1") ?>

<span class="style1"></span>
<?php system("ipconfig getifaddr en1"); ?>







</pre>
  <p><br>
    <br>

</p>
</blockquote>

</body>
</html>

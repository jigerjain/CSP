<?php

// This URL for this script, used as the redirect URL
$baseURL = "http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
header("Content-Security-Policy: script-src 'nonce-1234' 'unsafe-inline' 'strict-dynamic'  http://amazing.world:8000/scriptTwo.js 'sha256-qznLcsROx4GACP2dm0UCKCzCG+HiZ1guq6ZZDob/Tng='");

//header("Content-Security-Policy: script-src 'sha512-Q2bFTOhEALkN8hOms2FKTDLy7eugP2zFZ1T8LCvX42Fp3WoNr3bjZSAHeOsHrbV1Fu9/A0EzCinRE7Af1ofPrw=='");
//header("Content-Security-Policy: script-src 'nonce-1234'");
// header("Content-Security-Policy: script-src 'nonce-1234' http://amazing.world/script.js");
//header("Content-Security-Policy: script-src 'sha256-qznLcsROx4GACP2dm0UCKCzCG+HiZ1guq6ZZDob/Tng='");
header("X-XSS-Protection: 0");

if(isset($_GET['search'])){
  echo '<h1>Search query loading...', $_GET['search'],'</h1>';
  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSP Example</title>
</head>
<body>
    <h1>Hello all</h1>
    

	<p> Change the text of the text field, and then click the button below. </p> 

	Text: 
    <input type="text" id="textbox" name="textbox" size="100">
    <input type="button" name="search" id="search" value="search" >
	<p id="demo"></p> 
    <br>
    <br>
    <input type="button" name="insert" id="insert" value="Insert in body" >

    <!-- 
        If 'strict-dynamic' is accepted then it would ignore the script src whitelisted URLs
        It would only accept 'nonce-{random}'
    -->
    <script nonce=1234 src=./scriptOne.js>
        alert("Script One");
        document.getElementById('search').addEventListener('click', myFunction());
        document.getElementById('insert').addEventListener('click', myFunction());
    </script>

    <!-- 
        Following would work if 'strict-dynamic' is ignored
        It takes either 'nonce-{random}' or script src whitelisted URLs 

        Effectively loading scripts from whitelisted URLs however ignoring 'nonce'
        
    -->
    <script src="./scriptTwo.js"></script>
</body> 
</html>





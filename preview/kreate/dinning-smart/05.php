<?php
session_start();

if(!$_SESSION['login_arelc'])
	header('Location: index.php');
else {
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Visul3design - Design Preview</title>
    </head>

<body style="margin:0px;padding:0px;background:url(20140908_antiagingmarketing_webtomed_com_.jpg) repeat-x #fff center top; overflow-x: hidden; position: absolute; width: 100%;">
     <img src="images/design-1-4.jpg" style="opacity:0; height: 100%" />
     <div style="background:url('images/design-1-4.jpg') no-repeat top center; width:100%; height:100%; position: absolute; left: 0; top:0;">&nbsp;</div>

</body>
        
        
    </html>
    <?php } ?>
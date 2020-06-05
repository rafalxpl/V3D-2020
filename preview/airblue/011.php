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
<title>Visul3design  - Design Preview</title>
</head>

<body style="margin:0px;padding:0px;background:url(images/01_bg_.jpg) repeat-x white center top;">

<div style="background:url(images/2015-02-11-web_preview_5.jpg) no-repeat top center;height:1023px;">&nbsp;</div>

</body>

</html>
<?php } ?>
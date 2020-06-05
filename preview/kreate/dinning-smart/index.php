<?php
session_start();

$password = "123";
$error_message = "";

if($_POST['pass'] == $password) {
	$_SESSION['login_arelc'] = true;
}
else if($_POST['pass']!='') {
	$error_message = "<div style='padding:20px 5px 5px 5px;'><strong>Incorrect password. Please contact us at <a href='mailto:design@visual3design.com'>design@visual3design.com</a> or call 773 988 865 to retrieve your password.</strong></div>";
}

?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Visul3design - Design Preview</title>

        <style>
            body {
                color: #545454;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
            }
            
            h1 {
                margin: 0;
                font-size: 18px;
                padding: 0;
                line-height: 18px;
            }
            
            small {
                color: #7a7a7a;
                font-size: 11px;
            }
            
            .grayBox {
                border: 1px solid #d4d4d4;
                background: #f3f3f3;
                margin-top: 5px;
            }
            
            .grayBox .inner {
                border: 1px solid white;
                padding: 20px;
            }
            
            td {
                vertical-align: top;
            }
            
            .grayBox ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }
            
            .grayBox ul li {
                padding: 5px 0 5px 20px;
                background: url(images/bullet.gif) no-repeat 2px 10px;
            }
            
            .grayBox ul li a {
                font-weight: bold;
            }
            
            .grayBox ul li.sep {
                background: url(images/line.gif) repeat-x center;
                padding: 10px 0 0 0;
            }
        </style>

    </head>

    <body style="margin-top:40px;padding:0px;background:url(images/bg.gif) repeat-x white;">


        <table align="center" width="960">
            <tr>
                <td>
                    <a href="http://www.webtomed.com" target="_blank"><img src="images/logo_v3d_.jpg" alt="" border="0" /></a>
                    <div style="margin-top:30px;font-size:24px;"><span style="font-size:18px;color:#7a7a7a;">Client:</span> Kreate</div>
                    <div style="margin-top:5px;font-size:18px;"><span style="font-size:18px;color:#7a7a7a;">Project:</span> Website design -Dinning Smart </div>
                </td>
            </tr>
        </table>

        <?php if(!$_SESSION['login_arelc'])	{ ?>
            <table align="center" width="960" style="margin-top:50px;">
                <tr>
                    <td align="center">
                        <div class="grayBox" style="padding:20px;">
                            <form action="index.php" method="post">
                                <strong>Password:</strong>
                                <br />
                                <input type="password" name="pass" style="margin-top:10px;" />
                                <br />
                                <input type="submit" style="margin-top:10px;" value="Login" />
                            </form>
                            <?php echo $error_message; ?>
                        </div>
                    </td>
                </tr>
            </table>
            <?php } else { ?>

                <table align="center" width="960">
                    <tr>
                        <td>
                            <div style="margin-top:50px;font-size:24px;"><span style="font-size:18px;color:#7a7a7a;">Homepage</div>
                        </td>
                    </tr>
                </table>

                <table align="center" style="margin-top:10px;" width="960">


                    <tr>

                        <td width="48%">
                            <h1>Homepage Concept #1 </h1>
                            <small>Date: 04.28.2016</small>
                            <div class="grayBox">
                                <div class="inner">
                                    <ul>
                                        <li><a href="01.php" target="_blank">Home Page</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td width="4%">&nbsp;</td>

                        <td width="48%">
                            <h1>Homepage Revision #1</h1>
                            <small>Date: 04.30.2016</small>
                            <div class="grayBox">
                                <div class="inner">
                                    <ul>
                                        <li><a href="02.php" target="_blank">Home Page</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td width="4%">&nbsp;</td>

                    </tr>



                    <tr>
                        <td width="48%" style="margin-top:10px;">

                    </tr>
                    
                    
                                    <table align="center" width="960">
                    <tr>
                        
                        
                        

                     <td>

                     <div style="margin-top:40px;font-size:24px;"><span style="font-size:18px;color:#7a7a7a;">Subpage</div>
                     </td>


<tr>

                        <td width="48%">
                            <h1>Product page #1 </h1>
                            <small>Date: 05.04.2016</small>
                            <div class="grayBox">
                                <div class="inner">
                                    <ul>
                                        <li><a href="03.php" target="_blank">Home Page</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td width="4%">&nbsp;</td>

                        <td width="48%">
                            <h1>Products-category page #1</h1>
                            <small>Date: 05.12.2016</small>
                            <div class="grayBox">
                                <div class="inner">
                                    <ul>
                                        <li><a href="04.php" target="_blank">Home Page</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td width="4%">&nbsp;</td>

</tr>

                    <tr>
                        <td width="48%" style="margin-top:10px;">

                    </tr>
                         
                         
<tr>

                        <td width="48%">
                            <h1>About-us Revision #1 </h1>
                            <small>Date: 05.10.2016</small>
                            <div class="grayBox">
                                <div class="inner">
                                    <ul>
                                        <li><a href="05.php" target="_blank">Home Page</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td width="4%">&nbsp;</td>

                        <td width="48%">
                            <h1>About-us page Revision #2</h1>
                            <small>Date: 05.24.2016</small>
                            <div class="grayBox">
                                <div class="inner">
                                    <ul>
                                        <li><a href="06.php" target="_blank">Home Page</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td width="4%">&nbsp;</td>

</tr>

                    <tr>
                        <td width="48%" style="margin-top:10px;">

                    </tr>
                         
                         
                         <tr>

                        <td width="48%">
                            <h1>Contact-us page #1 </h1>
                            <small>Date: 05.12.2016</small>
                            <div class="grayBox">
                                <div class="inner">
                                    <ul>
                                        <li><a href="07.php" target="_blank">Home Page</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td width="4%">&nbsp;</td>

</tr>

                    <tr>
                        <td width="48%" style="margin-top:10px;">

                    </tr>
                         
                    <td>

                     <div style="margin-top:40px;font-size:24px;"><span style="font-size:18px;color:#7a7a7a;">Sliders</div>
                     </td>    
<tr>

                        <td width="48%">
                            <h1>1-Chicken-Alfredo</h1>
                            <small>Date: 05.25.2016</small>
                            <div class="grayBox">
                                <div class="inner">
                                    <ul>
                                        <li><a href="08.php" target="_blank">Home Page</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td width="4%">&nbsp;</td>

                        <td width="48%">
                            <h1>2-Chicken-Three-Cheese</h1>
                            <small>Date: 05.24.2016</small>
                            <div class="grayBox">
                                <div class="inner">
                                    <ul>
                                        <li><a href="09.php" target="_blank">Home Page</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td width="4%">&nbsp;</td>

</tr>

                    <tr>
                        <td width="48%" style="margin-top:10px;">

                    </tr>                       
                        
  <tr>

                        <td width="48%">
                            <h1>3-Chicken-stir-fry</h1>
                            <small>Date: 05.25.2016</small>
                            <div class="grayBox">
                                <div class="inner">
                                    <ul>
                                        <li><a href="10.php" target="_blank">Home Page</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td width="4%">&nbsp;</td>

                        <td width="48%">
                            <h1>4-Chicken-fettuccini</h1>
                            <small>Date: 05.24.2016</small>
                            <div class="grayBox">
                                <div class="inner">
                                    <ul>
                                        <li><a href="11.php" target="_blank">Home Page</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td width="4%">&nbsp;</td>

</tr>

                    <tr>
                        <td width="48%" style="margin-top:10px;">

                    </tr>                           
                        
  <tr>

                        <td width="48%">
                            <h1>5-Chicken-garlic</h1>
                            <small>Date: 05.25.2016</small>
                            <div class="grayBox">
                                <div class="inner">
                                    <ul>
                                        <li><a href="12.php" target="_blank">Home Page</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td width="4%">&nbsp;</td>

                        <td width="48%">
                            <h1>6-Chicken-teritaki</h1>
                            <small>Date: 05.24.2016</small>
                            <div class="grayBox">
                                <div class="inner">
                                    <ul>
                                        <li><a href="13.php" target="_blank">Home Page</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td width="4%">&nbsp;</td>

</tr>

                    <tr>
                        <td width="48%" style="margin-top:10px;">

                    </tr>                                 
                        
                        
   <tr>

                        <td width="48%">
                            <h1>7-Chicken-Chipotle-Chicken</h1>
                            <small>Date: 05.25.2016</small>
                            <div class="grayBox">
                                <div class="inner">
                                    <ul>
                                        <li><a href="14.php" target="_blank">Home Page</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td width="4%">&nbsp;</td>

                      

</tr>

                    <tr>
                        <td width="48%" style="margin-top:10px;">

                    </tr>                             
                        
                        
                        
                        
                        
                        

                </table>
                <?php } ?>
                    <table align="center" style="margin-top:50px;" width="960">

                        <tr>
                            <td height="50">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="border-top:1px solid #d4d4d4;padding-top:30px;padding-bottom:30px;">
                                <small><strong>Confidentiality Notice:</strong><br />
This document contains creative work product that Is legally privileged, confidential and copyrighted. Any unauthorized use of these files by any unintended recipient is prohibited. Further, you are hereby notified that any disclosure, duplication, distribution or taking of any action that relies on the contents of this information is strictly prohibited. If you have received this document in error, please notify us immediately by telephone or email. <strong>773 988 865</strong>.</small>
                            </td>
                        </tr>
                    </table>

    </body>

    </html>
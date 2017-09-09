<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>


<?php

$mainuri = "http://netfirmam.net/";
include("style.php");
include("include/rightmenu/notice/notedit.php");
include("include/engine/syslib/msgbox.php");

include("conf.php");

?>
<script language="JavaScript" type="text/javascript" src="<?php echo $mainuri; ?>mainpg/main.js" /></script>
<script src="<?php echo $mainuri; ?>include/engine/admin/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="<?php echo $mainuri; ?>include/engine/admin/SpryAssets/SpryAccordion.js" type="text/javascript"></script>

<link href="<?php echo $mainuri; ?>mainpg/tables_main.css" rel="stylesheet" type="text/css">
<link href="<?php echo $mainuri; ?>include/main/main.css" type="text/css" rel="stylesheet">
<link href="<?php echo $mainuri; ?>include/rightmenu/notice/notice.css" type="text/css" rel="stylesheet">
<link href="<?php echo $mainuri; ?>include/leftmenu/login/login.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $mainuri; ?>include/showcase/style/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $mainuri; ?>include/engine/admin/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $mainuri; ?>include/engine/admin/SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
    <!--
    Created by Artisteer v3.0.0.33215
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NetFirmam Loading...   </title>

   <!--- <link rel="stylesheet" href="<?php //echo $mainuri; ?>style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="<?php echo $mainuri; ?>jquery.js"></script>
    <script type="text/javascript" src="<?php echo $mainuri; ?>script.js"></script>
</head>
<body onmousemove="tasi('adminpanel')" onLoad="exec();" contenteditable="false" >
<div style="visibility:hidden; z-index:9998; position:absolute; left: 1026px; top: 6px;"><input type="button" value="Kaydet..." name="realedin" id="realedin" onClick="realedin(this.id)"/></div>

<div id="art-page-background-glare">
        <div id="art-page-background-glare-image">
    <div id="art-main">
        <div class="art-sheet">
            <div class="art-sheet-tl"></div>
            <div class="art-sheet-tr"></div>
            <div class="art-sheet-bl"></div>
            <div class="art-sheet-br"></div>
            <div class="art-sheet-tc"></div>
            <div class="art-sheet-bc"></div>
            <div class="art-sheet-cl"></div>
            <div class="art-sheet-cr"></div>
            <div class="art-sheet-cc"></div>
            <div class="art-sheet-body">
                <div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                		<li>
                			<a href="#" class="active"><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
                		</li>
                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Menu Item</span></a>
                			<ul>
                				<li><a href="#">Menu Subitem 1</a>
                					<ul>
                						<li><a href="#">Menu Subitem 1.1</a></li>
                						<li><a href="#">Menu Subitem 1.2</a></li>
                						<li><a href="#">Menu Subitem 1.3</a></li>
                					</ul>
                				</li>
                				<li><a href="#">Menu Subitem 2</a></li>
                				<li><a href="#">Menu Subitem 3</a></li>
                			</ul>
                		</li>		
                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">About</span></a>
                		</li>
                	</ul>
                </div>
                <div class="art-header">
                    <div class="art-header-center">
                        <div class="art-header-jpeg"></div>
                    </div>
                        <div class="art-header-fluid-object"></div>
                    <script type="text/javascript" src="<?php echo $mainuri; ?>swfobject.js"></script>
                    <div id="art-flash-area">
                    <div id="art-flash-container">
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" style="width: 100%;" height="250" id="art-flash-object">
                        <param name="movie" value="images/flash.swf" />
                        <param name="quality" value="high" />
                    	<param name="scale" value="exactfit" />
                    	<param name="wmode" value="transparent" />
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
                        <param name="swfliveconnect" value="true" />
                        <!--[if !IE]>-->
                        <object type="application/x-shockwave-flash" data="<?php echo $mainuri; ?>images/flash.swf" style="width: 100%;" height="250">
                            <param name="quality" value="high" />
                    	    <param name="scale" value="exactfit" />
                    	    <param name="wmode" value="transparent" />
                    	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
                            <param name="swfliveconnect" value="true" />
                        <!--<![endif]-->
                          	<div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
                        <!--[if !IE]>-->
                        </object>
                        <!--<![endif]-->
                    </object>
                    </div>
                    </div>
                    <script type="text/javascript">swfobject.switchOffAutoHideShow(); swfobject.registerObject("art-flash-object", "9.0.0", "expressInstall.swf");</script>
                    <div class="art-logo">
                     <h1 id="name-text" class="art-logo-name"><a href="#">NETFirmam</a> online otomasyon</h1>
                     <h2 id="slogan-text" class="art-logo-text">firma tan&#305;t&#305;m &amp; vitrin otomasyonu</h2>
                    </div>
                </div>
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content">
                          <div class="art-post">
                              <div class="art-post-body">
                          <div class="art-post-inner art-article">
<div id="mid"></div>
<iframe src="<?php echo $mainuri; ?>shwork.php" scrolling="no" allowtransparency="true" style="background:none;border:none;height:480px;width:100%;" frameborder="0" ></iframe>
                                          <div class="art-postcontent">
                                      <div id="mid"></div>
                                              <div class="cleared"></div>
                                              <div class="art-content-layout overview-table">
                                              	<div class="art-content-layout-row">
                         



  
                                              	</div>
                                              	<!-- end row -->
                                              </div><!-- end table -->
                                                  
                            </div>
                                          <div class="cleared"></div>
                          </div>
                          
                          		<div class="cleared"></div>
                              </div>
                          </div>
                          <div class="art-post">
                              <div class="art-post-body">
                          <div class="art-post-inner art-article">
                                         
                                         
 <!------------------------------------------------>                                        
                                      
                                        
                                         
                                         
                                         
                                         
                                         
                                         
                                          <div class="art-postcontent">
                                             


</div>
                                          <div class="cleared"></div>
                          </div>
                          
                          		<div class="cleared"></div>
                              </div>
                          </div>
                          <div class="cleared"> </div>
                        </div>






                        <div class="art-layout-cell art-sidebar1">
                          <div class="art-vmenublock">
                              <div class="art-vmenublock-body">
                                          <div class="art-vmenublockcontent">
                                              <div class="art-vmenublockcontent-body">
                                                          <ul class="art-vmenu">
                                                          	<li>
                                                          		<a ><span class="l"></span><span class="r"></span><span class="t" id="menu1s" onClick="getir(this.id)"></span></a>
                                                          	</li>
                                                          	<li>
                                                          		<a ><span class="l"></span><span class="r"></span><span class="t" id="menu2s" onClick="getir(this.id)"></span></a>
                                                          				<ul>
                                                          			<li><a href="page.html?">Top 10</a></li>
                                                          		</ul>
                                                          	</li>
                                                          	<li class="active">
                                                       		  <a class="active" ><span class="l"></span><span class="r"></span><span class="t"  id="menu3s" onClick="getir(this.id)"></span></a>
                                                          		
                                                          	</li>
                                                          	<li>
                                                          		<a ><span class="l"></span><span class="r"></span><span class="t"  id="menu4s" onClick="getir(this.id)"></span></a>
                                                          	</li>
                                                          	<li>
                                                          		<a  ><span class="l"></span><span class="r"></span><span class="t" id="menu5s" onClick="getir(this.id)">&#304;LET&#304;&#350;&#304;M</span></a>
                                                          		<ul>
                                                          			<li><a href="page.html?i5s1">2008</a>
                                                          		
                                                          			</li>
                                                          			<li><a href="page.html?i5s2">2007</a>
                                                          				<ul>
                                                          					<li><a href="page.html?i5s2s1">January</a></li>
                                                          					<li><a href="page.html?i5s2s2">February</a></li>
                                                          					<li><a href="page.html?i5s2s3">March</a></li>
                                                          				</ul>
                                                          			</li>
                                                          			<li><a href="page.html?i5s3">2006</a>
                                                          				<ul>
                                                          					<li><a href="page.html?i5s3s1">January</a></li>
                                                          					<li><a href="page.html?i5s3s2">February</a></li>
                                                          					<li><a href="page.html?i5s3s3">March</a></li>
                                                          				</ul>
                                                          			</li>
                                                          		</ul>
                                                          	</li>
                                                          	
                                                          </ul>
                                          
                                          		<div class="cleared"></div>
                                              </div>
                                          </div>
                          		<div class="cleared"></div>
                              </div>
                          </div>
                          <div class="art-block">  
 <!--------------------------main page wiever......------------------------->


                              <div class="art-block-body">
                                          
                    <div class="art-blockcontent">
                                              <div class="art-blockcontent-body">
                                                          <div>
<?php
include ("include/leftmenu/login/login.php");
if ($adminpanel == ""){ } else {
echo $adminpanel; include("include/engine/admin/udeneme.php"); echo $adminpanel2;
}
?>

<?php 

//require("progresive.php");


$main = new mainpage;

$main->hea_2();

include("include/rightmenu/notice/notice.php");

$main->hea_1();

$main->sayfalt($sayfalt[2]);


?>
<!-----------------------------------------------  head in2 ------>

<?php  ?>

<!-----------------------------------------------  head in1 ------>

<?php  ?>
                                          
<!-----------------------------------------------  head end ------>

<?php  include("include/leftmenu/l_header.php");  ?>
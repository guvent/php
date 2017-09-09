<?php 

$pgconnt = @mysql_connect("localhost","smartgt_firma","102030-g") or die (mysql_error() . "<br/> ---1 ");

$pgexect = @mysql_select_db("smartgt_firma") or die (mysql_error() . "<br/> ---2");

$pginnert = "select * from styles";
//for ($ulpnt=1;$ulpnt<=$pgcout;$ulpnt++)
$pggett = @mysql_query($pginnert) or die (mysql_error());

//foreach ($pggett as $pgconntt){

//$ulpnt=$pgconntt->id;

//$pginnert = "select * from styles where id='$ulpn'";

//$pggett = @mysql_query($pginnert) or die (mysql_error());
$ulpnt=0;
while($pgshowt = mysql_fetch_array($pggett))
{
$ulpnt++;
$setsty[$ulpnt] = $pgshowt['setvalue'];
}


//}



?>
<style type="text/css">

#art-main, table
{
    font-family: Verdana, Geneva, Arial, Helvetica, Sans-Serif;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    text-align: justify;
}

h1, h2, h3, h4, h5, h6, p, a, ul, ol, li
{
    margin: 0;
    padding: 0;
}

body
{
  margin: 0 auto;
  padding: 0;
  color: #3D3817;
  background-color: #95BBB5;
  background-image: url('images/Bottom_texture.jpg');
  background-repeat: repeat-x;
  background-attachment: fixed;
  background-position: top left;
}

.art-postcontent,
.art-postcontent li,
.art-postcontent table,
.art-postcontent a,
.art-postcontent a:link,
.art-postcontent a:visited,
.art-postcontent a.visited,
.art-postcontent a:hover,
.art-postcontent a.hovered
{
    font-family: Verdana, Geneva, Arial, Helvetica, Sans-Serif;
}

.art-postcontent p
{
    margin: 12px 0 12px 0;
}

h1, h2, h3, h4, h5, h6,
h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
h1 a:link, h2 a:link, h3 a:link, h4 a:link, h5 a:link, h6 a:link,
h1 a:visited, h2 a:visited, h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited,
h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover
{
  font-family: "Palatino Linotype", Georgia, "Times New Roman", Times, Serif;
  font-size: 28px;
  text-align: left;
  text-transform: uppercase;
}

.art-postcontent a
{
  text-decoration: underline;
  letter-spacing: 1px;
  color: #49716A;
}

.art-postcontent a:link
{
  text-decoration: underline;
  letter-spacing: 1px;
  color: #49716A;
}

.art-postcontent a:visited, .art-postcontent a.visited
{

  color: #877C32;
}

.art-postcontent  a:hover, .art-postcontent a.hover
{

  text-decoration: none;
  color: #61968D;
}


.art-postcontent h1
{
   margin: 19px 0 19px 0; 
   color: #49716A;
 
}

.art-postcontent h2
{
    color: #49716A;
   margin: 19px 0 19px 0; 
   font-style: normal;
   font-weight: normal;
   font-size: 24px;   
}

.art-postcontent h3
{
   margin: 22px 0 22px 0; 
  color: #877C32; 
  font-size: 22px;    
}

.art-postcontent h4
{
   margin: 22px 0 22px 0; 
   color: #461C0E; 
   font-size: 18px;   
}

.art-postcontent h5
{
   margin: 27px 0 27px 0; 
   color: #461C0E;   
   font-size: 16px;
}

.art-postcontent h6
{
   margin: 32px 0 32px 0; 
   color: #461C0E;
   font-size: 14px;      
}

ul
{
  list-style-type: none;
}

ol
{
  list-style-position: inside;
}

#art-main
{
  position: relative;
  width: 100%;
  left: 0;
  top: 0;
  cursor:default;
}

#art-page-background-glare
{
  position: relative;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  background-attachment: fixed;
}

#art-page-background-glare-image
{
  position: relative;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  background-attachment: fixed;
  background-image: url('images/page_gl.png');
  background-repeat: no-repeat;
  background-position: top left;
}

html:first-child #art-page-background-glare
{
  border: 1px solid transparent;/* Opera fix */
}



.cleared
{
  float: none;
  clear: both;
  margin: 0;
  padding: 0;
  border: none;
  font-size: 1px;
}

form
{
  padding: 0 !important;
  margin: 0 !important;
}

table.position
{
  position: relative;
  width: 100%;
  table-layout: fixed;
}
/* end Page */

/* begin Box, Sheet */
.art-sheet
{
  position: relative;
  margin: 0 auto;
  min-width: 51px;
  min-height: 51px;
}

.art-sheet-body
{
  position: relative;
  padding: 5px;
}

.art-sheet-tr, .art-sheet-tl, .art-sheet-br, .art-sheet-bl, .art-sheet-tc, .art-sheet-bc,.art-sheet-cr, .art-sheet-cl
{
  position: absolute;
}

.art-sheet-tr, .art-sheet-tl, .art-sheet-br, .art-sheet-bl
{
  width: 70px;
  height: 70px;
  background-image: url('images/sheet_s.png');
}

.art-sheet-tl
{
  top: 0;
  left: 0;
  clip: rect(auto, 35px, 35px, auto);
}

.art-sheet-tr
{
  top: 0;
  right: 0;
  clip: rect(auto, auto, 35px, 35px);
}

.art-sheet-bl
{
  bottom: 0;
  left: 0;
  clip: rect(35px, 35px, auto, auto);
}

.art-sheet-br
{
  bottom: 0;
  right: 0;
  clip: rect(35px, auto, auto, 35px);
}

.art-sheet-tc, .art-sheet-bc
{
  left: 35px;
  right: 35px;
  height: 70px;
  background-image: url('images/sheet_h.png');
}

.art-sheet-tc
{
  top: 0;
  clip: rect(auto, auto, 35px, auto);
}

.art-sheet-bc
{
  bottom: 0;
  clip: rect(35px, auto, auto, auto);
}

.art-sheet-cr, .art-sheet-cl
{
  top: 35px;
  bottom: 35px;
  width: 70px;
  background-image: url('images/sheet_v.png');
}

.art-sheet-cr
{
  right: 0;
  clip: rect(auto, auto, auto, 35px);
}

.art-sheet-cl
{
  left: 0;
  clip: rect(auto, 35px, auto, auto);
}

.art-sheet-cc
{
  position: absolute;
  top: 35px;
  left: 35px;
  right: 35px;
  bottom: 35px;
  background-image: url('images/sheet_c.png');
}

.art-sheet
{
  top: 30px !important;
  margin-bottom: 30px !important;
  cursor:auto;
  width: <?php echo $setsty[1]; ?>%;
}


/* end Box, Sheet */

/* begin Menu */
/* menu structure */

.art-menu a, .art-menu a:link, .art-menu a:visited, .art-menu a:hover
{
    outline: none;
}

.art-menu, .art-menu ul
{
  margin: 0;
  padding: 0;
  border: 0;
  list-style-type: none;
  display: block;
}

.art-menu li
{
  margin: 0;
  padding: 0;
  border: 0;
  display: block;
  float: left;
  position: relative;
  z-index: 5;
  background: none;
}

.art-menu li:hover
{
  z-index: 10000;
  white-space: normal;
}

.art-menu li li
{
  float: none;
}

.art-menu ul
{
  visibility: hidden;
  position: absolute;
  z-index: 10;
  left: 0;
  top: 0;
  background: none;
}

.art-menu li:hover>ul
{
  visibility: visible;
  top: 100%;
}

.art-menu li li:hover>ul
{
  top: 0;
  left: 100%;
}

.art-menu:after, .art-menu ul:after
{
  content: ".";
  height: 0;
  display: block;
  visibility: hidden;
  overflow: hidden;
  clear: both;
}
.art-menu, .art-menu ul
{
  min-height: 0;
}

.art-menu ul
{
  background-image: url('images/spacer.gif');
  padding: 10px 30px 30px 30px;
  margin: -10px 0 0 -30px;
}

.art-menu ul ul
{
  padding: 30px 30px 30px 10px;
  margin: -30px 0 0 -10px;
}




/* menu structure */

.art-menu
{
  padding: 4px 15px 0 15px;
}

.art-nav
{
  position: relative;
  min-height: 29px;
  z-index: 100;
}

.art-nav .l, .art-nav .r
{
  position: absolute;
  z-index: -1;
  top: 0;
  height: 100%;
  background-image: url('images/nav.png');
}

.art-nav .l
{
  left: 0;
  right: 15px;
}

.art-nav .r
{
  right: 0;
  width: 1920px;
  clip: rect(auto, auto, auto, 1905px);
}


/* end Menu */

/* begin MenuItem */
.art-menu a
{
  position: relative;
  display: block;
  overflow: hidden;
  height: 25px;
  cursor: pointer;
  text-decoration: none;
}


.art-menu ul li
{
    margin:0;
    clear: both;
}


.art-menu a .r, .art-menu a .l
{
  position: absolute;
  display: block;
  top: 0;
  z-index: -1;
  height: 85px;
  background-image: url('images/menuitem.png');
}

.art-menu a .l
{
  left: 0;
  right: 11px;
}

.art-menu a .r
{
  width: 422px;
  right: 0;
  clip: rect(auto, auto, auto, 411px);
}

.art-menu a .t, .art-menu ul a, .art-menu a, .art-menu a:link, .art-menu a:visited, .art-menu a:hover
{
  font-weight: bold;
  font-size: 11px;
  text-align: left;
  text-decoration: none;
  text-transform: uppercase;
}

.art-menu a .t
{
  color: #353114;
  padding: 0 2px;
  margin: 0 11px;
  line-height: 25px;
  text-align: center;
}

.art-menu a:hover .l, .art-menu a:hover .r
{
  top: -30px;
}

.art-menu li:hover>a .l, .art-menu li:hover>a .r
{
  top: -30px;
}

.art-menu li:hover a .l, .art-menu li:hover a .r
{
  top: -30px;
}
.art-menu a:hover .t
{
  color: #000000;
}

.art-menu li:hover a .t
{
  color: #000000;
}

.art-menu li:hover>a .t
{
  color: #000000;
}


.art-menu a.active .l, .art-menu a.active .r
{
  top: -60px;
}

.art-menu a.active .t
{
  color: #45401A;
}
/* end MenuItem */

/* begin MenuSeparator */
.art-menu .art-menu-li-separator
{
  display: block;
  width: 8px;
  height:25px;
}
/* end MenuSeparator */

/* begin MenuSubItem */
.art-menu ul a
{
  display: block;
  text-align: center;
  white-space: nowrap;
  height: 20px;
  width: 180px;
  overflow: hidden;
  line-height: 20px;
  background-image: url('images/subitem.png');
  background-position: left top;
  background-repeat: repeat-x;
  border-width: 0;
  border-style: solid;
}

.art-nav ul.art-menu ul span, .art-nav ul.art-menu ul span span
{
  display: inline;
  float: none;
  margin: inherit;
  padding: inherit;
  background-image: none;
  text-align: inherit;
  text-decoration: inherit;
}

.art-menu ul a, .art-menu ul a:link, .art-menu ul a:visited, .art-menu ul a:hover, .art-menu ul a:active, .art-nav ul.art-menu ul span, .art-nav ul.art-menu ul span span
{
  text-align: left;
  text-indent: 12px;
  text-decoration: none;
  line-height: 20px;
  color: #45401A;
  font-weight: normal;
  font-size: 12px;
  margin:0;
  padding:0;
}

.art-menu ul li a:hover
{
  color: #000000;
  background-position: 0 -20px;
}

.art-menu ul li:hover>a
{
  color: #000000;
  background-position: 0 -20px;
}

.art-nav .art-menu ul li a:hover span, .art-nav .art-menu ul li a:hover span span
{
  color: #000000;
}

.art-nav .art-menu ul li:hover>a span, .art-nav .art-menu ul li:hover>a span span
{
  color: #000000;
}


/* end MenuSubItem */

/* begin Header */
div.art-header
{
  margin: 0 auto;
  position: relative;
  width: 100%;
  height: 250px;
  overflow: hidden;
}


div.art-header-center
{
	position: relative;
	width: 1093px;
	left:50%;
}



div.art-header-jpeg
{
  position: absolute;
  top: 0;
  left:-50%;
  width: 1093px;
  height: 250px;
  background-image: url('images/header.jpg');
  background-repeat: no-repeat;
  background-position: center center;
}

div.art-header-fluid-object
{
  display: block;
  left: 15%;
  margin-left: -30px;
  position: absolute;
  top: 0;
  width: 498px;
  background-image: url('images/fluid_object.png');
  background-repeat: no-repeat;
  background-position: center center;
  height: 250px;
}

/* end Header */

/* begin Flash */
#art-flash-area
{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 250px;
  overflow: hidden;
}

#art-flash-container
{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 250px;
}

#art-flash-container div.art-flash-alt
{
    position: relative;
    width: 110px;
    height: 30px;
    margin: 0 auto;
    top: {flash_alt_top}px;
}
/* end Flash */

/* begin Logo */
div.art-logo
{
  display: block;
  position: absolute;
  left:50%;
  float: left;
  top: 98px;
  width: 471px;
}

h1.art-logo-name
{
  display: block;
  text-align: center;
  left:-50%;
  position: relative;
}

h1.art-logo-name, h1.art-logo-name a, h1.art-logo-name a:link, h1.art-logo-name a:visited, h1.art-logo-name a:hover
{
  font-style: normal;
  font-weight: bold;
  font-size: 25px;
  text-decoration: none;
  padding: 0;
  margin: 0;
  color: #592311 !important;
}


h2.art-logo-text, 
h2.art-logo-text a,
h2.art-logo-text a:link,
h2.art-logo-text a:visited,
h2.art-logo-text a:hover
{
  font-family: Verdana, Geneva, Arial, Helvetica, Sans-Serif;
  font-style: normal;
  font-weight: bold;
  font-size: 14px;
  padding: 0;
  margin: 0;
  color: #592311 !important;
}

h2.art-logo-text
{
  display: block;
  left:-50%;
  position: relative;
  text-align: center;
}
/* end Logo */

/* begin Layout */
.art-content-layout
{
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: collapse;
  background-color: Transparent;
  border: none !important;
  padding:0 !important;
}
.art-layout-cell, .art-content-layout-row
{
  background-color: Transparent;
  vertical-align: top;
  text-align: left;
  border: none !important;
  margin:0 !important;
  padding:0 !important;
}
.art-content-layout .art-content-layout{width: auto;margin:0;}
.art-content-layout .art-layout-cell, .art-content-layout .art-layout-cell .art-content-layout .art-layout-cell{display: table-cell;}
.art-layout-cell .art-layout-cell{display: block;}
.art-content-layout-row {display: table-row;}
.art-layout-glare{position:relative;}/* end Layout */

/* begin Button */
.art-button-wrapper a.art-button,
.art-button-wrapper a.art-button:link,
.art-button-wrapper input.art-button,
.art-button-wrapper button.art-button
{
  text-decoration: none;
  font-family: Verdana, Geneva, Arial, Helvetica, Sans-Serif;
  font-style: normal;
  font-weight: bold;
  font-size: 11px;
  position:relative;
  top:0;
  display: inline-block;
  vertical-align: middle;
  white-space: nowrap;
  text-align: center;
  color: #000000 !important;
  width: auto;
  outline: none;
  border: none;
  background: none;
  line-height: 29px;
  height: 29px;
  margin: 0 !important;
  padding: 0 13px !important;
  overflow: visible;
  cursor: pointer;
}

.art-button img, .art-button-wrapper img
{
  margin: 0;
  vertical-align: middle;
}

.art-button-wrapper
{
  vertical-align: middle;
  display: inline-block;
  position: relative;
  height: 29px;
  overflow: hidden;
  white-space: nowrap;
  width: auto;
  margin: 0;
  padding: 0;
  z-index: 0;
}

.firefox2 .art-button-wrapper
{
  display: block;
  float: left;
}

input, select, textarea
{
  vertical-align: middle;
  font-family: Verdana, Geneva, Arial, Helvetica, Sans-Serif;
  font-style: normal;
  font-weight: bold;
  font-size: 11px;
}

.art-block select 
{
    width:96%;
}

.art-button-wrapper.hover .art-button, .art-button-wrapper.hover a.art-button:link, .art-button:hover
{
  color: #000000 !important;
  text-decoration: none !important;
}

.art-button-wrapper.active .art-button, .art-button-wrapper.active a.art-button:link
{
  color: #45401A !important;
}

.art-button-wrapper .art-button-l, .art-button-wrapper .art-button-r
{
  display: block;
  position: absolute;
  height: 97px;
  margin: 0;
  padding: 0;
  background-image: url('images/button.png');
}

.art-button-wrapper .art-button-l
{
  left: 0;
  right: 10px;
}

.art-button-wrapper .art-button-r
{
  width: 409px;
  right: 0;
  clip: rect(auto, auto, auto, 399px);
}

.art-button-wrapper.hover .art-button-l, .art-button-wrapper.hover .art-button-r
{
  top: -34px;
}

.art-button-wrapper.active .art-button-l, .art-button-wrapper.active .art-button-r
{
  top: -68px;
}

.art-button-wrapper input
{
  float: none !important;
}
/* end Button */

/* begin Box, Block, VMenuBlock */
.art-vmenublock
{
  position: relative;
  margin: 0 auto;
  min-width: 1px;
  min-height: 1px;
}

.art-vmenublock-body
{
  position: relative;
  padding: 0;
}


.art-vmenublock
{
  margin: 0;
}

/* end Box, Block, VMenuBlock */

/* begin Box, Box, VMenuBlockContent */
.art-vmenublockcontent
{
  position: relative;
  margin: 0 auto;
  min-width: 1px;
  min-height: 1px;
}

.art-vmenublockcontent-body
{
  position: relative;
  padding: 0;
}


.art-vmenublockcontent
{
  position: relative;
  margin: 0 auto;
  min-width: 1px;
  min-height: 1px;
}

.art-vmenublockcontent-body
{
  position: relative;
  padding: 0;
}


/* end Box, Box, VMenuBlockContent */

/* begin VMenu */
ul.art-vmenu, ul.art-vmenu li
{
  list-style: none;
  margin: 0;
  padding: 0;
  width: auto;
  line-height: 0;
}

ul.art-vmenu ul
{
  display: none;
}

ul.art-vmenu ul.active
{
  display: block;
}
/* end VMenu */

/* begin VMenuItem */
ul.art-vmenu a
{
  position: relative;
  display: block;
  overflow: hidden;
  height: 24px;
  cursor: pointer;
  text-decoration: none;
}

ul.art-vmenu li.art-vmenu-separator
{
  display: block;
  padding: 1px 0 1px 0;
  margin: 0;
  font-size: 1px;
}

ul.art-vmenu .art-vmenu-separator-span
{
  display: block;
  padding: 0;
  font-size: 1px;
  height: 0;
  line-height: 0;
  border: none;
}

ul.art-vmenu a .r, ul.art-vmenu a .l
{
  position: absolute;
  display: block;
  top: 0;
  height: 82px;
  background-image: url('images/vmenuitem.png');
}

ul.art-vmenu a .l
{
  left: 0;
  right: 0;
}

ul.art-vmenu a .r
{
  width: 1920px;
  right: 0;
  clip: rect(auto, auto, auto, 1920px);
}

ul.art-vmenu a .t, ul.art-vmenu ul a
{
  font-family: Verdana, Geneva, Arial, Helvetica, Sans-Serif;
  font-style: normal;
  font-weight: bold;
  font-size: 14px;
  text-transform: uppercase;
}

ul.art-vmenu a .t
{
  display: block;
  position:relative;
  top:0;
  line-height: 24px;
  color: #7F742F;
  padding: 0 12px 0 12px;
  margin-left:0;
  margin-right:0;
}

ul.art-vmenu a.active .l, ul.art-vmenu a.active .r
{
  top: -58px;
}

ul.art-vmenu a.active .t
{
  color: #8D381C;
}

ul.art-vmenu a:hover .l, ul.art-vmenu a:hover .r
{
  top: -29px;
}

ul.art-vmenu a:hover .t
{
  color: #7B702E;
}


/* end VMenuItem */

/* begin VMenuSubItem */
ul.art-vmenu ul, ul.art-vmenu ul li
{
  margin: 0;
  padding: 0;
}

ul.art-vmenu ul a
{
  display: block;
  white-space: nowrap;
  height: 22px;
  overflow: visible;
  background-image: url('images/vsubitem.gif');
  background-position: 24px 0;
  background-repeat: repeat-x;
  padding-left: 41px;
}

ul.art-vmenu ul li
{
  padding: 0;
}

ul.art-vmenu ul span, ul.art-vmenu ul span span
{
  display: inline;
  float: none;
  margin: inherit;
  padding: inherit;
  background-image: none;
  text-align: inherit;
  text-decoration: inherit;
}

ul.art-vmenu ul a, ul.art-vmenu ul a:link, ul.art-vmenu ul a:visited, ul.art-vmenu ul a:hover, ul.art-vmenu ul a:active, ul.art-vmenu ul span, ul.art-vmenu ul span span
{
  line-height: 22px;
  color: #564F20;
  font-size: 11px;
  margin-left: 0;
}

ul.art-vmenu ul
{
    margin:0 0 2px 0;
}

ul.art-vmenu ul ul
{
  margin:0 0 2px 0;
}

ul.art-vmenu ul li.art-vsubmenu-separator
{ 
  display: block;
  margin: 0;
  font-size: 1px;
  padding: 3px 0 3px 0;
 }

ul.art-vmenu ul .art-vsubmenu-separator-span
{
  display: block;
  padding: 0;
  font-size: 1px;
  height: 0;
  line-height: 0;
  margin: 0;
  border: none;
}

ul.art-vmenu ul li.art-vmenu-separator-first
{
    padding-bottom:3px;
}

ul.art-vmenu ul li li a
{
  background-position: 48px 0;
  padding-left: 65px;
}

ul.art-vmenu ul li li li a
{
  background-position: 72px 0;
  padding-left: 89px;
}

ul.art-vmenu ul li li li li a
{
  background-position: 96px 0;
  padding-left: 113px;
}

ul.art-vmenu ul li li li li li a
{
  background-position: 120px 0;
  padding-left: 137px;
}


ul.art-vmenu ul li a.active
{
  color: #564F20;
  background-position: 24px -54px;
}

ul.art-vmenu ul li li a.active
{
  background-position: 48px -54px;
}

ul.art-vmenu ul li li li a.active
{
  background-position: 72px -54px;
}

ul.art-vmenu ul li li li li a.active
{
  background-position: 96px -54px;
}

ul.art-vmenu ul li li li li li a.active
{
  background-position: 120px -54px;
}



ul.art-vmenu ul li a:hover, ul.art-vmenu ul li a:hover.active
{
  color: #45401A;
  background-position: 24px -27px;
}


ul.art-vmenu ul li li a:hover, ul.art-vmenu ul li li a:hover.active
{
  background-position: 48px -27px;
}

ul.art-vmenu ul li li li a:hover, ul.art-vmenu ul li li li a:hover.active
{
  background-position: 72px -27px;
}

ul.art-vmenu ul li li li li a:hover, ul.art-vmenu ul li li li li a:hover.active
{
  background-position: 96px -27px;
}

ul.art-vmenu ul li li li li li a:hover, ul.art-vmenu ul li li li li li a:hover.active
{
  background-position: 120px -27px;
}
/* end VMenuSubItem */

/* begin Box, Block */
.art-block
{
  position: relative;
  margin: 0 auto;
  min-width: 1px;
  min-height: 1px;
}

.art-block-body
{
  position: relative;
  padding: 0;
}


.art-block
{
  margin: 7px;
}

/* end Box, Block */

/* begin BlockHeader */
.art-blockheader
{
  margin-bottom: 0;
}

.art-blockheader, .art-blockheader h3.t
{
  position: relative;
  height: 38px;
}

.art-blockheader h3.t,
.art-blockheader h3.t a,
.art-blockheader h3.t a:link,
.art-blockheader h3.t a:visited, 
.art-blockheader h3.t a:hover
{
  color: #000000;
  font-family: Verdana, Geneva, Arial, Helvetica, Sans-Serif;
  font-style: normal;
  font-weight: bold;
  font-size: 14px;
}

.art-blockheader h3.t
{
  margin:0;
  padding: 0 10px 0 10px;
  white-space: nowrap;
  line-height: 38px;	
}

/* end BlockHeader */

/* begin Box, BlockContent */
.art-blockcontent
{
  position: relative;
  margin: 0 auto;
  min-width: 1px;
  min-height: 1px;
}

.art-blockcontent-body
{
  position: relative;
  padding: 3px;
}


.art-blockcontent-body, 
.art-blockcontent-body li, 
.art-blockcontent-body a,
.art-blockcontent-body a:link,
.art-blockcontent-body a:visited,
.art-blockcontent-body a:hover
{
  color: #564F20;
  font-family: Verdana, Geneva, Arial, Helvetica, Sans-Serif;
  font-size: 12px;
}

.art-blockcontent-body p
{
  margin: 6px 0 6px 0;
}

.art-blockcontent-body a
{
  color: #5A8C84;
  text-decoration: underline;
}

.art-blockcontent-body a:link
{
  color: #5A8C84;
  text-decoration: underline;
}

.art-blockcontent-body a:visited, .art-blockcontent-body a.visited
{
  color: #C4B660;

}

.art-blockcontent-body a:hover, .art-blockcontent-body a.hover
{
  color: #5A8C84;

  text-decoration: none;
}

.art-blockcontent-body ul li
{
  line-height: 125%;    
  color: #72692B;

  padding: 0 0 0 13px;
  background-image: url('images/blockcontentbullets.png');
  background-repeat: no-repeat;
}/* end Box, BlockContent */

/* begin Box, Post */
.art-post
{
  position: relative;
  margin: 0 auto;
  min-width: 1px;
  min-height: 1px;
}

.art-post-body
{
  position: relative;
  padding: 7px;
}


.art-post
{
  margin: 10px;
}

a img
{
  border: 0;
}

.art-article img, img.art-article
{
  border: solid 0 #E4DEB6;
  margin: 5px;
}

.art-metadata-icons img
{
  border: none;
  vertical-align: middle;
  margin: 2px;
}

.art-article table, table.art-article
{
  border-collapse: collapse;
  margin: 1px;
}

.art-article th, .art-article td
{
  padding: 2px;
  border: solid 1px #D6CD91;
  vertical-align: top;
  text-align: left;
}

.art-article th
{
  text-align: center;
  vertical-align: middle;
  padding: 7px;
}

pre
{
  overflow: auto;
  padding: 0.1em;
}

/* end Box, Post */

/* begin PostHeaderIcon */
h2.art-postheader
{
  color: #334E4A;
  margin: 6px 0 6px 0;
}

h2.art-postheader, 
h2.art-postheader a, 
h2.art-postheader a:link, 
h2.art-postheader a:visited,
h2.art-postheader a.visited,
h2.art-postheader a:hover,
h2.art-postheader a.hovered
{
  font-style: normal;
  font-weight: bold;
  font-size: 24px;
  letter-spacing: normal;
}

h2.art-postheader a, h2.art-postheader a:link
{
  text-decoration: none;
  color: #3E605A;
}

h2.art-postheader a:visited, h2.art-postheader a.visited
{

  color: #BCAD4C;
}


h2.art-postheader a:hover,  h2.art-postheader a.hovered
{

  text-decoration: underline;
  color: #61968D;
}

/* end PostHeaderIcon */

/* begin PostBullets */
.art-post ol, .art-post ul
{
  margin: 1em 0 1em 2em;
  padding: 0;
}

.art-post li
{
  font-size: 12px;
  text-align: left;
}

.art-post li ol, .art-post li ul
{
  margin: 0.5em 0 0.5em 2em;
  padding: 0;
}

.art-post li
{
  color: #5E5623;
  margin: 0 0 0 12px;
  padding: 0;
}


/* end PostBullets */

/* begin PostQuote */
.art-postcontent blockquote,
.art-postcontent blockquote a,
.art-postcontent blockquote a:link,
.art-postcontent blockquote a:visited,
.art-postcontent blockquote a:hover
{
  color: #5E5623;
  font-style: italic;
  font-weight: normal;
  text-align: left;
}

.art-postcontent blockquote p
{
   margin: 17px 0 17px 17px;
}

.art-postcontent blockquote
{
   border: solid 0 #C5DAD6;
  margin: 10px 10px 10px 50px;
  padding: 0 0 0 37px;
  background-color: #FAEDE8;
  background-image: url('images/postquote.png');
  background-position: left top;
  background-repeat: no-repeat;/* makes blockquote not to align behind the image if they are in the same line */
  overflow: auto;
}

/* end PostQuote */

/* begin Footer */
.art-footer
{
  position: relative;
  overflow: hidden;
  width: 100%;
}

.art-footer-b 
{
	position: absolute;
	left:-7px;
	right:15px;
	bottom:4px;
	height:15px;
	background-image: url('images/footer_b.png');
}

.art-footer-r, .art-footer-l
{
  position: absolute;
  height:15px;
  background-image: url('images/footer_s.png');
  bottom: 0;
}

.art-footer-l
{
  left: 0;
  width:15px;
}

.art-footer-r
{
  right: 0;
  width:30px;
  clip: rect(auto, auto, auto, 15px);
}

.art-footer-t
{
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 15px;
  background-color: #C5DAD6;
}

.art-footer-body
{
    position:relative;
    padding: 15px;
}

.art-footer-body .art-rss-tag-icon
{
  position: absolute;
  left:   6px;
  bottom:15px;
  z-index:1;
}

.art-rss-tag-icon
{
  display: block;
  background-image: url('images/rssicon.png');
  background-position: center right;
  background-repeat: no-repeat;
  height: 30px;
  width: 19px;
  cursor: default;
}

.art-footer-text p
{
  padding:0;
  margin:0;
}

.art-footer,
.art-footer a,
.art-footer a:link,
.art-footer a:visited,
.art-footer a:hover
{
    color: #182623;
    font-style: italic;
    font-size: 11px;
}

.art-footer-text
{
  min-height: 30px;
  padding: 0 10px 0 10px;

}

.art-footer,
.art-footer-text,
.art-footer p
{
  text-align: center;
}

.art-footer a,
.art-footer a:link
{
  color: #426660;
  text-decoration: underline;
}

.art-footer a:visited
{
  color: #7B702E;

}

.art-footer a:hover
{
  color: #524B1F;

  text-decoration: none;
}
/* end Footer */

/* begin PageFooter */
.art-page-footer, 
.art-page-footer a,
.art-page-footer a:link,
.art-page-footer a:visited,
.art-page-footer a:hover
{
  font-family: Arial;
  font-size: 10px;
  letter-spacing: normal;
  word-spacing: normal;
  font-style: normal;
  font-weight: normal;
  text-decoration: underline;
  color: #588880;
}

.art-page-footer
{
  margin: 1em;
  text-align: center;
  text-decoration: none;
  color: #877C32;
}
/* end PageFooter */

/* begin LayoutCell, content */




.art-content-layout .art-content .art-block
{
  background-color: #F3F0DF;
}
/* end LayoutCell, content */

/* begin LayoutCell, sidebar1 */

.art-content-layout .art-sidebar1
{
  background-color: #F3F0DF;
  width: 225px;
}

/* end LayoutCell, sidebar1 */




.overview-table .art-layout-cell
{
    width:33%;
}


.overview-table-inner 
{
    margin:10px;
}

table.table
{
    width:100%;
    border-collapse:collapse;
    table-layout:fixed;
    text-align:left;
    vertical-align:top;
}

table.table, table.table tr, table.table td
{
    border:none;
    margin:0;
    padding:0;
    background-color:Transparent;
}

img.image
{
    margin:0;
    padding:0;
    border:none;
}

";
</style>
<?php echo $setsty[1]; ?>
<?php @mysql_close($pgconnt); ?>
<?php
include("../backoffice/includes/config.inc.php");
DBConn("mysql");
?>



<HTML>
<HEAD>
<TITLE>Northern Style Thai  Food  -  Chiang Mai Vanusnun Co., LTD</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<SCRIPT SRC="../backoffice/includes/wb.js"></SCRIPT>
<style type="text/css">
<!--
body {
	background-color: #F7F7E0;
	background-image: url(images/bg_page.jpg);
}
-->
</style>
<link href="template.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #8DB024}
-->
</style>

</HEAD>
<BODY LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 onLoad="MM_preloadImages('images/y_header_06.jpg','images/y_header_07.jpg','images/y_header_08.jpg','images/y_header_09.jpg','images/y_header_10.jpg','images/y_header_11.jpg')">
<!-- ImageReady Slices (header.psd) -->
<TABLE width="1400" border="0" align="center" cellpadding="0" cellspacing="0">
<TR><TD background="images/bg.jpg" bgcolor="EFEFD8"><TABLE WIDTH=962 BORDER=0 align="center" CELLPADDING=0 CELLSPACING=0>
  <TR>
    <TD ROWSPAN=3><img src="images/header_01.gif" width=265 height=155 alt=""></TD>
    <TD COLSPAN=2 valign="middle" background="images/header_02.jpg" bgcolor="#F7F7DF" class="body_text style1">&nbsp; &nbsp;THE PRECIOUS GIFTS<br>
      &nbsp;&nbsp;&nbsp;FROM CHIANG MAI THAILAND </TD>
    <TD COLSPAN=3 align="right" valign="bottom" background="images/header_02.jpg" bgcolor="#F7F7DF" class="body_text style1"><form method="get" action="http://www.google.com/search">
      <table width="300" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="right" valign="middle"><span style="font-size:75%">
            <input name="sitesearch" type="hidden" id="sitesearch" value="vanusnun.com">
            </span>
                <input type="text"   name="q" size="20"
 maxlength="255" value="" />
                <input name="image" type="image" value="Search" src="images/bb.gif" alt="Search"></td>
        </tr>
      </table>
    </form></TD>
    <TD align="right" valign="middle" background="images/header_02.jpg" bgcolor="#F7F7DF" class="body_text style1"><img src="images/header_03.jpg" alt="" name="Flag" width=63 height=28 id="Flag"></TD>
    <TD><IMG SRC="images/header_04.jpg" WIDTH=27 HEIGHT=67 ALT=""></TD>
    <TD ROWSPAN=3><IMG SRC="images/header_05.gif" WIDTH=36 HEIGHT=155 ALT=""></TD>
  </TR>
  <TR>
    <TD><a href="index.html"><IMG SRC="images/header_06.jpg" ALT="" name="Home" WIDTH=79 HEIGHT=51 border="0" id="Home" onMouseOver="MM_swapImage('Home','','images/y_header_06.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></TD>
    <TD><a href="about.php"><IMG SRC="images/header_07.jpg" ALT="" name="AboutUs" WIDTH=116 HEIGHT=51 border="0" id="AboutUs" onMouseOver="MM_swapImage('AboutUs','','images/y_header_07.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></TD>
    <TD><a href="product.php"><IMG SRC="images/header_08.jpg" ALT="" name="Products" WIDTH=122 HEIGHT=51 border="0" id="Products" onMouseOver="MM_swapImage('Products','','images/y_header_08.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></TD>
    <TD><a href="thaifoodexport.php"><IMG SRC="images/header_09.jpg" ALT="" name="Exports" WIDTH=102 HEIGHT=51 border="0" id="Exports" onMouseOver="MM_swapImage('Exports','','images/y_header_09.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></TD>
    <TD><a href="factory.php"><IMG SRC="images/header_10.jpg" ALT="" name="Factory" WIDTH=112 HEIGHT=51 border="0" id="Factory" onMouseOver="MM_swapImage('Factory','','images/y_header_10.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></TD>
    <TD COLSPAN=2><a href="contactus.php"><IMG SRC="images/header_11.jpg" ALT="" name="ContactUs" WIDTH=130 HEIGHT=51 border="0" id="ContactUs" onMouseOver="MM_swapImage('ContactUs','','images/y_header_11.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></TD>
  </TR>
  <TR>
    <TD COLSPAN=7><IMG SRC="images/header_12.gif" WIDTH=661 HEIGHT=37 ALT=""></TD>
  </TR>
  <TR>
    <TD><IMG SRC="images/spacer.gif" WIDTH=265 HEIGHT=1 ALT=""></TD>
    <TD><IMG SRC="images/spacer.gif" WIDTH=79 HEIGHT=1 ALT=""></TD>
    <TD><IMG SRC="images/spacer.gif" WIDTH=116 HEIGHT=1 ALT=""></TD>
    <TD><IMG SRC="images/spacer.gif" WIDTH=122 HEIGHT=1 ALT=""></TD>
    <TD><IMG SRC="images/spacer.gif" WIDTH=102 HEIGHT=1 ALT=""></TD>
    <TD><IMG SRC="images/spacer.gif" WIDTH=112 HEIGHT=1 ALT=""></TD>
    <TD><IMG SRC="images/spacer.gif" WIDTH=103 HEIGHT=1 ALT=""></TD>
    <TD><IMG SRC="images/spacer.gif" WIDTH=27 HEIGHT=1 ALT=""></TD>
    <TD><IMG SRC="images/spacer.gif" WIDTH=36 HEIGHT=1 ALT=""></TD>
  </TR>
</TABLE>

<br><br>



<!-- Body of Page -->
<table border=0 cellspacing=0 cellpadding=0 width=750 align="center" bgcolor="white">
<tr valign="top">
	<td align="center">

<table border=0 cellspacing=0 cellpadding=2 width="100%" align="center" bgcolor="#CCCCCC"><tr><td>
<table border=0 cellspacing=0 cellpadding=2 width="100%" align="center" bgcolor="#CCCCCC">
<tr valign="middle">
	<td bgcolor=#669933>
		<font face='ms sans serif' size=3 color=white>
		&nbsp; Vanusnun e-Newsletter 
		</font>
	</td>
</tr>
</table>
</td></tr></table>



<table border=0 cellspacing=0 width="100%"><tr><td><table border=0 cellspacing=0 cellpadding=0><tr><td height=10></td></tr></table></td></tr></table>

<?php

function endpage(){
	echo '</td></tr></table><br><br><br>
<table width="100%" border="0" cellpadding="5" cellspacing="0">
  <tr>
    <td align="center" bgcolor="9DC435"><span class="body_text"><a href="index.php">Home</a> | <A href="about.php">About Us</A> | <A href="vegetable.php">Products</A> | <A href="thaifoodexport.php">Exports</A> | <A href="factory.php">Factory </A>| <A href="map.php">Map</A> | <A href="vanusnun.php">Contact Us</A></span><A href="vanusnun.php"> </A><br>
      <span class="body_text">Copyright 2010 Chiang Mai Vanunsnun Co., Ltd. Thailand : All right reserved.</span> </td>
  </tr>
</table>
<p>&nbsp;</p>
</BODY>
</HTML>';
}

$datepost=date("Y-m-d");
if ($email==""){
	errmess("Please enter your email");
	endpage();
	exit;
}

if ( !ereg( "^(.+)@(.+)\\.(.+)$",$email ) ){
	errmess("Incorrect e-mail address !");
	endpage();
	exit;
}

$query_mem = "select email from $wb_tbl_members where email='$email'";
$result_mem = mysql_db_query( $wb_dbname,$query_mem);		
while( $row_mem = mysql_fetch_array( $result_mem ) )
{
	if ($row_mem[email]==$email)
					{
						//errmess("Your email : $email has been found in database!");
						AlertMsg("Your email : $email has been found in database!","index.php");
						//Spaceline("white","10");
						//endpage();
						//exit;
					}
			}

			// add member 
			$query_mems="insert into $wb_tbl_members (pid,email,pdate,pstatus) values ('','$email','$datepost',0)";
			$result_mems = mysql_db_query( $wb_dbname,$query_mems);		

			if ($result_mems)
				{
					/*echo "
					<div align=center>
					<font face=\"ms sans serif\" size=\"3\" color=\"green\">
					<b>Thank you</b><br>
					$email has been updated in database<br>
					<a href=\"index.html\">Back Home</a>
					</font>
					</div>
					";	*/	
					AlertMsg("Thank you...$email has been updated in database ","index.php");
				}
			else
				{
					//errmess("Database error... Please try again!");
					AlertMsg("Database error... Please try again! ","index.php");
					//endpage();
					//exit;
				}
		endpage();

?>



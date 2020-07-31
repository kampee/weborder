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
    <TD><a href="index.php"><IMG SRC="images/header_06.jpg" ALT="" name="Home" WIDTH=79 HEIGHT=51 border="0" id="Home" onMouseOver="MM_swapImage('Home','','images/y_header_06.jpg',1)" onMouseOut="MM_swapImgRestore()"></a></TD>
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
<TABLE WIDTH=961 BORDER=0 align="center" CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD ROWSPAN=3>
			<IMG SRC="images/big_banner_01.jpg" WIDTH=339 HEIGHT=344 ALT=""></TD>
		<TD ROWSPAN=3>
			<IMG SRC="images/big_banner_02.jpg" WIDTH=291 HEIGHT=344 ALT=""></TD>
		<TD>
			<IMG SRC="images/big_banner_03.jpg" WIDTH=331 HEIGHT=18 ALT=""></TD>
	</TR>
	<TR>
		<TD height="41" background="images/big_banner_04.jpg">
		
<!--		
		<form name="form1" method="post" action="">
		  <label></label>
                <div align="center">
                                          <select   name="menu1" onChange="MM_jumpMenu('self',this,0)">
                          <option selected>- - - Products List - - -</option>
                          <option>Dessert</option>
                          <option value="dessert.php">-- Khao Tan (Rice Crackers )</option>
                          <option value="dessert.php">-- Ka-La-Mae (Sticky Coconut)                          </option>
                          <option>Chilli Paste</option>
                          <option value="chillipaste.php">-- Shrimp Spicy Paste (Num-Prik-Pao)</option>
                          <option value="chillipaste.php">-- Num - Prik - Noom                          </option>
                          <option>Reserved Vegetable</option>
                          <option value="vetgetable.php">-- Pickled Single - Bulbed Garlic </option>
                          <option value="pickled-ginger.php">-- Pickled Ginger                          </option>
                          <option value="pickled-ginger.php">-- Pickled Ginger in Fermented Soybean</option>
                          <option value="pickled-cabbage.php">-- Pickled Cabbages                          </option>
                          <option value="pickled-cabbage.php">-- Sweet Pickled Cabbages </option>
                          <option>Reserved Fruit</option>
                          <option value="fruit.php">-- Dehydrated Longan </option>
                          <option value="fruit.php">-- Mango in Syrup </option>
                          <option value="fruit.php">-- Mango in Honey </option>
                          <option value="fruit.php">-- Pickled Peaches </option>
                          <option>Reserved Meat</option>
                          <option value="meat.php">-- Sai-Oua ( Herbal Sausage)</option>
                          <option value="meat.php">-- Biotech Fermented pork</option>
                                                            </select>
          </div>
		</form>		
-->
		<form>

		<SELECT NAME="pgroup" CLASS="addcart" onChange="location =options[selectedIndex].value">
			<OPTION VALUE="product.php?pid=1">- - - Products List - - -</OPTION>
			<?php
			$queryt="select * from $wb_tbl_pgroup ";
			$resultt = mysql_db_query($wb_dbname,$queryt);
			while ( $rowt = mysql_fetch_array( $resultt) ) 
			{
				$pid=$rowt[pgroup];
				echo "<OPTION VALUE=\"product.php?pid=$pid\">$rowt[pname]</OPTION>";

				$queryb="select * from $wb_tbl_brand where pgroup='$pid'";
				$resultb = mysql_db_query($wb_dbname,$queryb);
				while ( $rowb = mysql_fetch_array( $resultb) ) 
				{
					$bid = $rowb[bid];
					echo "<OPTION VALUE=\"product.php?pid=$pid&bid=$bid\">-- $rowb[brand]</OPTION>";
				}


			}	
			?>
		</SELECT>&nbsp;

		</form>
		
		</TD>
	</TR>
	<TR>
		<TD>
			<IMG SRC="images/big_banner_05.jpg" WIDTH=331 HEIGHT=285 ALT=""></TD>
	</TR>
</TABLE>
<table width="961" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" background="images/dot.jpg"><img src="images/h_gateway_northern.jpg" width="322" height="46"></td>
    </tr>
  <tr>
    <td width="322"><div align="center"><img src="images/p01.jpg" width="259" height="208"></div></td>
    <td width="326"><div align="center"><img src="images/p02.jpg" width="257" height="208"></div></td>
    <td width="313"><div align="center"><img src="images/p03.jpg" width="259" height="208"></div></td>
  </tr>
  <tr>
    <td height="47">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

<!--
  <tr>
    <td height="47" colspan="2" background="images/dot.jpg"><img src="images/h_chiangmai_vanusnun.jpg" width="289" height="47"></td>
    <td align="left"><form name="form2" method="post" action="">
  &nbsp;&nbsp;<img src="images/e_newsletter.jpg" width="89" height="22">
  <label>
  <input name="textfield" type="text" size="15">
  </label>
  <label>
 <input name="image" type="image" value="Submit" src="images/bbs.gif" alt="Submit button">
  </label></form>      </td>
  </tr>
 -->
   <tr valign=top>
  <form name="form2" method="post" action="el.php" onsubmit="return CheckEmail();">
    <td colspan="2" background="images/dot.jpg"><img src="images/h_chilli_paste.jpg" width="220" height="47"></td>
    <td width="290">
  &nbsp;&nbsp;<img src="images/e_newsletter.jpg" width="89" height="22">
  <label>
  <input name="email" type="text" size="15">
  </label>
  <label>
  <input name="image2" type="image" value="Submit" src="images/bbs.gif" alt="Submit button">
  </label>
    </td>
  </tr>
  </form>

  
  <tr>
    <td colspan="2" valign="top"><p class="body_text">Chiang Mai Vanussanun Co.,Ltd. (Northern Style Thai Food and Thai agri food manufacturer in Chiang mai ,Thailand) is the company, which transforms the standard and widely accepted northern agrienltural products due to its longstanding experience combined nicely with modern technology. We proudly serve our customers with varieties of transformed products such as 
      
      
    </p>
      <ul>
        <li class="body_text">Thai Chilli Paste - Num - Prik - Noom </li>
          <li class="body_text"> Thai Reserved Vegetable - Pickled Single - Bulbed Garlic , Pickled Ginger in Fermented Soybean, ginger, Pickled Cabbages , Sweet Pickled Cabbages </li>
          <li class="body_text">Thai Reserved Fruit - Dehydrated Longan, Mango in Syrup, Mango in Honey, Pickled Peaches </li>
          <li class="body_text">Thai Reserved meat - Sai-Oua ( Herbal Sausage) , Biotech Fermented pork </li>
          <li class="body_text">Thai Dessert Rice Crakers, Stiky Coconut, </li>
      </ul>      <p><span class="body_text">etc. 
        
        These products are transformed into mouth – watering items, candies, marmalade, and pickles with different flavors which serve the consumers contentment&nbsp;</span></p>
      <p align="center"><STRONG><A href="http://www.vanusnun.com/images/catalogue.pdf" class="link_text">Dowload Product   Catalogue .. Click here</A></STRONG>&nbsp;<img src="images/new.gif" width="30" height="15"></p>
      <p align="right"><img src="images/icon.jpg" width="73" height="51" align="top"></p>
      <p>&nbsp;</p></td>
    <td align="center" valign="top"><p><br>
      <!-- AddThis Button BEGIN -->
<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;username=vanusnun"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a><script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=vanusnun"></script>
<!-- AddThis Button END -->
</p>
      <p><img src="images/banner02.jpg" width="200" height="86"><br>
          <br>
          <img src="images/banner03.jpg" width="200" height="86"><br>
          <br>
          <img src="images/banner01.jpg" width="200" height="85"><br>
          <br>
      </p></td>
  </tr>
</table></TD>
</TR>
</TABLE>
<table width="100%" border="0" cellpadding="5" cellspacing="0">
  <tr>
    <td align="center" bgcolor="9DC435"><span class="body_text"><a href="index.php">Home</a> | <A href="about.php">About Us</A> | <A href="vegetable.php">Products</A> | <A href="thaifoodexport.php">Exports</A> | <A href="factory.php">Factory </A>| <A href="map.php">Map</A> | <A href="vanusnun.php">Contact Us</A></span><A href="vanusnun.php"> </A><br>
      <span class="body_text">Copyright 2010 Chiang Mai Vanunsnun Co., Ltd. Thailand : All right reserved.</span> </td>
  </tr>
</table>
<p>&nbsp;</p>
</BODY>
</HTML>
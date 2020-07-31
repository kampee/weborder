<?php
CheckSession($session_uid,$session_cid,$session_pass);
?>


<table border="0" cellspacing="0" cellpadding="0" width="760"><tr><td>


<img src="images/logo_clwfcuk.gif">
<?php
	//include("images/clwlogo3.html");
?>

<!--<table cellpadding="0" cellspacing="0" border="1" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="white" valign="middle">
	<td bgcolor="EEEEDD">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="6" color="#CC0000">
		<!--&nbsp;<b>CLW Web Ordering System 2.0 Beta</b>-->
		<!--</font>
	</td>
</tr>
</table>-->

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="F9F9F6">
<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=list&opt=search" method="post" name="chksearch" onsubmit="return CheckSearch();">
<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="EEEEDD" height="30">
		<table border=0 width=100%>
		<tr><td>
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="5">
		&nbsp;<b><?php echo _search_txt; ?></b>
		</font>
		</td>
		<td align="right">
		<font face="ms sans serif,Helvetica Condensed,Arial,verdana,sans-serif" size="1">
		&nbsp; 
		<SELECT NAME="pgroup" CLASS="addcart" onChange="location =options[selectedIndex].value">
			<OPTION VALUE="index.php?mod=home&lang=<?php echo $lang; ?>&smod=list&opt=cat"><?php echo $_All_Categories_lst; ?></OPTION>
			<?php
			$queryt="select * from $wb_tbl_pgroup";
			$resultt = mysql_db_query($wb_dbname,$queryt);
			while ( $rowt = mysql_fetch_array( $resultt) ) 
			{
				if($rowt[pgroup]==$pgroup)
				{
					echo "<OPTION VALUE=\"index.php?mod=home&lang=".$lang."&smod=list&opt=cat&pgroup=$rowt[pgroup]&pname=$rowt[pname]\" SELECTED>$rowt[pname]</OPTION>";
				}
				else
				{
					echo "<OPTION VALUE=\"index.php?mod=home&lang=".$lang."&smod=list&opt=cat&pgroup=$rowt[pgroup]&pname=$rowt[pname]\">$rowt[pname]</OPTION>";
				}
			}	
			?>
		</SELECT>
		<?php echo _Product_Ref_txt; ?>
		&nbsp;
		<INPUT TYPE="text" NAME="key" size="20" CLASS="addcart">
		&nbsp;
		<INPUT TYPE="submit" value="<?php echo _search_txt; ?>" CLASS="addcart">
		&nbsp;<a href="javascript:alert('Module not install');">&nbsp;
		</font>
		</td></tr></table>
	</td>
</tr>
</form>
</table>

<table border="0" cellpadding="0" cellspacing="0">
<tr valign="top">
	<td width="150">
		<?php include("menu.php"); ?>
		<!--&nbsp;&nbsp;<a href="javascript:alert('Module not installed');"><font face="Helvetica Condensed,Arial,verdana,sans-serif" size="1">Privacy Policy</font></a>-->
	</td>

	<td width="10" bgcolor="white">
	&nbsp;
	</td>

	<td width="600" bgcolor="white">

		<table cellpadding="0" cellspacing="0" border="1" bordercolor="white" width="100%" bgcolor="F9F9F6">
		<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
			<td bgcolor="gray">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="5" color="white">
				&nbsp; <b><?php echo _welcome_txt; ?>, </b><?php echo $session_real; ?> <font color="#FFCC00">@<b><?php echo $session_cname; ?></b></font>
				
				<?php
				if($session_gid=="188766666")
				{
				?>
				<br>
				<small>
				&nbsp; <b>SessionID :</b> <?php  echo $PHPSESSID; ?> <b>Date : </b><?php echo $regdate." ".$regtime; ?>
				</small>
				<?php
				}
				?>
				</font>
			</td>
		</tr>
		</table>		
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		<?php
			SpecLine("100%","center","white","5");

			switch($smod)
			{
				case "list":
					include("product.php");
					break;
				case "pref":
					include("pref.php");
					break;
				case "add_cart":
					include("addcart.php");
					break;
				case "view_cart":
					include("viewcart.php");
					break;
				case "view_order":
					include("vieworder.php");
					break;
				case "callout":
					include("callout.php");
					break;
				case "track":
					include("track.php");
					break;
				case "upload":
					include("upload.php");
					break;
				case "order":
					include("order.php");
					break;
				case "payment":
					include("payment.php");
					break;
				case "confirm":
					include("confirm.php");
					break;
				case "contact":
					include("contact.php");
					break;
				case "userman":
					include("backoffice/userman.php");
					break;
				case "groupman":
					include("backoffice/groupman.php");
					break;
				case "clientman":
					include("backoffice/clientman.php");
					break;
				case "langman":
					include("backoffice/langman.php");
					break;
				case "pgroupman":
					include("backoffice/pgroupman.php");
					break;
				case "prodman":
					include("backoffice/prodman.php");
					break;
				case "curman":
					include("backoffice/curman.php");
					break;
				case "stockman":
					include("backoffice/stockman.php");
					break;
				case "reportman":
					include("backoffice/reportman.php");
					break;
				case "setting":
					include("backoffice/setting.php");
					break;
				case "devlog":
					include("backoffice/devlog.php");
					break;
				case "orderstat":
					include("backoffice/orderstat.php");
					break;
				default:
					include("howto.php");
			}

		?>
		</font>
	</td>
</tr>
</table>

<br>
<center>
<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="1">
Copyright &copy; 2005-2008 ComputerLabel WorldWide Co.,Ltd. All rights reserved.
</font>
</center>

</td></tr></table>
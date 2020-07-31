<?php
	//$mouseover="onmouseover='mOvr(this,\"#CCCCCC\");' onclick=mClk(this); onmouseout='mOut(this,\"#ffffff\");'";
	
	$mouseover="onmouseover='mOvr(this,\"#EAEAEA\");' onclick=mClk(this); onmouseout='mOut(this,\"white\");'";

	$td_disa="<td bordercolordark=\"#ffffff\" bordercolorlight=\"#c0c0c0\" bgcolor=\"white\"><font face=\"arial\" size=\"2\">&nbsp; ";
		
	$td_enab="<td bordercolordark=\"#ffffff\" bordercolorlight=\"#c0c0c0\" bgcolor=\"white\" $mouseover><font face=\"arial\" size=\"2\">&nbsp; ";
?>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="150" bgcolor="F9F9F6">

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="EEEEDD" align="center">
		<font face="verdana,arial" size="2" color="black">
		<?php echo _vers_check_txt; ?>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="white" align="center">
		<?php
		switch($session_cid)
		{
			case 2:
				echo "";
				//echo "<img src=\"images/morgan_logo.gif\">";
				break;
			case 3:
				echo "";
				//echo "<img src=\"images/morgan_logo.gif\">";
				break;
			case 6:
				echo "<img src=\"logo/tedbaker_logo_g.gif\">";
				break;
			case 7:
				echo "<img src=\"logo/solis_logo.gif\">";
				break;
			case 8:
				echo "<img src=\"logo/cerrer_logo.gif\">";
				break;
			case 10:
				echo "<img src=\"logo/labelnet_logo.gif\">";
				break;
			case 13:
				echo "<img src=\"logo/burberry_logo.jpg\">";
				break;

		}
		?>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="EEEEDD">
		<font face="arial" size="3" color="black">
		&nbsp; <b><?php echo _main_menu_txt; ?></b>
		</font>
	</td>
</tr>

<tr valign="middle">			 
	<?php
	if($smod=="")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>"._howto_txt."</b>";
	}
	else
	{
		echo $td_enab;
		$s_menu="onMouseOver=\"window.status='How To';return true\" onMouseOut=\"window.status='';return true\"";
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang\" $s_menu>"._howto_txt."</a>";		
	}
	?>	
	</font>
	</td>
</tr>
<tr valign="middle">
	<?php
	if($smod=="pref")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>"._preference_txt."</b>";
	}
	else
	{
		echo $td_enab;
		$s_menu="onMouseOver=\"window.status='Preference';return true\" onMouseOut=\"window.status='';return true\"";
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=pref\" $s_menu>"._preference_txt."</a>";		
	}
	?>	
	</font>
	</td>
</tr>
<tr valign="middle">
	<?php
	if($smod=="list")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>"._product_txt."</b>";
	}
	else
	{
		echo $td_enab;
		$s_menu="onMouseOver=\"window.status='Product';return true\" onMouseOut=\"window.status='';return true\"";
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=list\" $s_menu>"._product_txt."</a>";		
	}
	?>	
	</font>
	</td>
</tr>


<?php
if($session_gid<>4){
?>
<tr valign="middle">
	<?php
	if($smod=="view_cart")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>"._view_cart_txt."</b>";
	}
	else
	{
		echo $td_enab;
		$s_menu="onMouseOver=\"window.status='View Cart';return true\" onMouseOut=\"window.status='';return true\"";
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=view_cart\" $s_menu>"._view_cart_txt."</a>";		
	}
	?>	
	</font>
	</td>
</tr>
<?php
}
?>

<?php
if($session_gid==4){
?>

<tr valign="middle">
	<?php
	if($smod=="reportman")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Track Vendors Order</b>";
	}
	else
	{
		echo $td_enab;
		$s_menu="onMouseOver=\"window.status='Track Vendors Order';return true\" onMouseOut=\"window.status='';return true\"";
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=reportman&mode=admin\" $s_menu>Track Vendors Order</a>";		
	}
	?>	
	</font>
	</td>
</tr>
<?php
}
?>



<!--
<?php
if($session_cid==7){
?>
<tr valign="middle">
	<?php
	if($smod=="callout")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Call Out Form</b>";
	}
	else
	{
		echo $td_enab;
		$s_menu="onMouseOver=\"window.status='Call Out Form';return true\" onMouseOut=\"window.status='';return true\"";
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=callout\" $s_menu>Call Out Form</a>";		
	}
	?>	
	</font>
	</td>
</tr>
<?php
}
?>
-->

<?php
if($session_gid<>4){
?>
<tr valign="middle">
	<?php
	if($smod=="track")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>"._track_order_txt."</b>";
	}
	else
	{
		echo $td_enab;
		$s_menu="onMouseOver=\"window.status='Track Order';return true\" onMouseOut=\"window.status='';return true\"";
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=track\" $s_menu>"._track_order_txt."</a>";		
	}
	?>	
	</font>
	</td>
</tr>
<?php
}
?>


<tr valign="middle">
	<?php
	if($smod=="contact")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>"._contact_us_txt."</b>";
	}
	else
	{
		echo $td_enab;
		$s_menu="onMouseOver=\"window.status='Contact us';return true\" onMouseOut=\"window.status='';return true\"";
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=contact\" $s_menu>"._contact_us_txt."</a>";		
	}
	?>	
	</font>
	</td>
</tr>

<tr valign="middle">
	<?php
	if($smod=="session")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Session</b>";
	}
	else
	{
		echo $td_enab;
		$s_menu="onMouseOver=\"window.status='Session';return true\" onMouseOut=\"window.status='';return true\"";
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=session\" $s_menu>Session</a>";		
	}
	?>	
	</font>
	</td>
</tr>


<?php
if($session_gid==4){
?>

<tr valign="middle">
	<?php
	if($smod=="stockman")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Stock Inventory</b>";
	}
	else
	{
		echo $td_enab;
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=stockman&mode=admin&pst=stksum\">Stock Inventory</a>";		
	}
	?>	
	</font>
	</td>
</tr>

<?php
}
?>

<!-- BACKOFFICE SECTION -->
<?php
if($session_gid<=2){
?>
<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="EEEEDD">
		<font face="arial" size="3" color="black">
		&nbsp; <b>Back Office</b> 
		</font>
	</td>
</tr>

<?php
if($session_gid==1){
?>
<tr valign="middle">
	<?php
	if($smod=="clientman")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Clients</b>";
	}
	else
	{
		echo $td_enab;
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=clientman&mode=admin\">Clients</a>";		
	}
	?>	
	</font>
	</td>
</tr>
<tr valign="middle">
	<?php
	if($smod=="groupman")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Group</b>";
	}
	else
	{
		echo $td_enab;
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=groupman&mode=admin\">Group</a>";		
	}
	?>	
	</font>
	</td>
</tr>

<tr valign="middle">
	<?php
	if($smod=="langman")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Language</b>";
	}
	else
	{
		echo $td_enab;
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=langman&mode=admin\">Language</a>";		
	}
	?>	
	</font>
	</td>
</tr>
<tr valign="middle">
	<?php
	if($smod=="curman")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Currency</b>";
	}
	else
	{
		echo $td_enab;
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=curman&mode=admin\">Currency</a>";		
	}
	?>	
	</font>
	</td>
</tr>
<tr valign="middle">
	<?php
	if($smod=="pgroupman")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Categories</b>";
	}
	else
	{
		echo $td_enab;
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=pgroupman&mode=admin\">Categories</a>";		
	}
	?>	
	</font>
	</td>
</tr>
<?php
}
?>

<tr valign="middle">
	<?php
	if($smod=="userman")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Users</b>";
	}
	else
	{
		echo $td_enab;
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=userman&mode=admin\">Users</a>";		
	}
	?>	
	</font>
	</td>
</tr>

<tr valign="middle">
	<?php
	if($smod=="prodman")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Products</b>";
	}
	else
	{
		echo $td_enab;
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=prodman&mode=admin\">Products</a>";		
	}
	?>	
	</font>
	</td>
</tr>

<tr valign="middle">
	<?php
	if($smod=="orderstat")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Order Status</b>";
	}
	else
	{
		echo $td_enab;
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=orderstat&mode=admin\">Order Status</a>";		
	}
	?>	
	</font>
	</td>
</tr>

<tr valign="middle">
	<?php
	if($smod=="stockman")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Stock Inventory</b>";
	}
	else
	{
		echo $td_enab;
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=stockman&mode=admin\">Stock Inventory</a>";		
	}
	?>	
	</font>
	</td>
</tr>

<tr valign="middle">
	<?php
	if($smod=="reportman")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Query & Reports</b>";
	}
	else
	{
		echo $td_enab;
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=reportman&mode=admin\">Query & Reports</a>";		
	}
	?>	
	</font>
	</td>
</tr>

<tr valign="middle">
	<?php
	if($smod=="setting")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Setting</b>";
	}
	else
	{
		echo $td_enab;
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=setting&mode=admin\">Setting</a>";		
	}
	?>	
	</font>
	</td>
</tr>

<tr valign="middle">
	<?php
	if($smod=="devlog")
	{
		echo $td_disa;
		echo "<img src=\"images/mac_ball.gif\"> <b>Developer log</b>";
	}
	else
	{
		echo $td_enab;
		echo "<img src=\"images/mac_ball.gif\"> <a href=\"index.php?mod=home&lang=$lang&smod=devlog&mode=admin\">Developer log</a>";		
	}
	?>	
	</font>
	</td>
</tr>

<?php
}
?>

<tr valign="middle">
	<td bordercolordark="#ffffff" bordercolorlight="#c0c0c0" bgcolor="white" <?php echo $mouseover; ?>>
	<font face="arial" size="2">
	&nbsp; <img src="images/mac_ball.gif"> <a href="javascript:if (confirm('Are you sure to logout ?')) location.href='index.php?mod=logout';"><?php echo _logout_txt; ?></a>
	</font>
	</td>
</tr>
</table>

<?php
if($session_gid<>4){
?>


<?php 
	SpecLine("100%","center","white","5"); 
	$query_box="select * from $wb_tbl_cart where uid='$session_uid' and cid='$session_cid' and cart_flag='0' ";
	$result_box = mysql_db_query($wb_dbname,$query_box);
	$cart_box = mysql_num_rows($result_box);

?>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="150" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="EEEEDD">
		<font face="arial" size="1" color="black">
		&nbsp; <b><?php echo _Your_Cart_txt; ?></b> - <a href="index.php?mod=home&lang=<?php echo $lang; ?>&smod=view_cart"><font face="arial" size="1" color="red"><?php echo _Edit_txt; ?></font></a>
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="white" height="50" align="center">
		<font face="arial" size="1">
		<?php
		if( !empty($cart_box) )
		{
		?>
		<?php echo $_You_have_product_in_cart; ?> <br><b><font color=red><?php echo $cart_box; ?></b></font> <?php echo $_items_txt; ?><br>
		<?php
		}
		else
		{
		?>
		<font color=red><?php echo $_Your_cart_is_empty; ?></font>
		<?php
		}
		?>
		</font>
	</td>
</tr>
</table>

<?php 
	SpecLine("100%","center","white","5"); 
?>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="150" bgcolor="F9F9F6">
<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=track&opt=search" method="post" name="chktrack" onsubmit="return CheckTrack();">

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="EEEEDD" align="center">
		<font face="arial" size="1">
		<b><?php echo _Order_Tracking_txt; ?></b><br><a href="index.php?mod=home&lang=<?php echo $lang; ?>&smod=track"><font face="arial" size="1" color="red"><?php echo _View_Order_txt; ?></font></a>
		</font>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="white" height="50" align="center">
		<font face="arial" size="1">
		<INPUT TYPE="text" NAME="order_no" class="addcart" size="10">
		<INPUT TYPE="submit" value="<?php echo _Track_btn; ?>" class="addcart"><br>
		<font color="gray"><?php echo _You_can_fill; ?></font>
		</font>
	</td>
</tr>
</form>
</table>

<?php
}
?>


<?php 
	//require("admin_box.php");
?>


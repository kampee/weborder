<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="F9F9F6" align="center">
<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="EEEEDD" height="30">
		<font face="arial" size="1">
		&nbsp; 
		<b>Group/Brand : </b> 
		</font>

		&nbsp; 
		<SELECT NAME="bid" CLASS="addcart" onChange="location =options[selectedIndex].value">
			<OPTION VALUE="index.php?mod=home&lang=<?php echo $lang; ?>&smod=list&opt=brand">- All Group/Brand -</OPTION>
			<?php
			$querybr="select * from $wb_tbl_brand where cid=$session_cid order by brand";
			$resultbr = mysql_db_query($wb_dbname,$querybr);
			while ( $rowbr = mysql_fetch_array( $resultbr) ) 
			{
				if($rowbr[bid]==$bid)
				{
					echo "<OPTION VALUE=\"index.php?mod=home&lang=".$lang."&smod=list&opt=brand&bid=$rowbr[bid]&brand=$rowbr[brand]\" SELECTED>$rowbr[brand]</OPTION>";
				}
				else
				{
					echo "<OPTION VALUE=\"index.php?mod=home&lang=".$lang."&smod=list&opt=brand&bid=$rowbr[bid]&brand=$rowbr[brand]\">$rowbr[brand]</OPTION>";
				}
			}	
			?>
		</SELECT>


	</td>
</tr>
</table>
<br>

<font face="arial" size="1">
<?php

	$wh="";

	if ( !isset($startpage) && !isset($stoppage) ){
		$startpage=0;
		$stoppage=10;
	}

	if ( !isset($startpage_2) && !isset($stoppage_2) ){
		$startpage_2=0;
		$stoppage_2=10;
	}

	switch($opt)
	{
		case "search":
			if( !empty($key) )
			{
				$wh.="and client_code='$key'";
			}
			$skey=$_Keyword_txt." <b>\"$key\"</b>";			
			$link_src="index.php?mod=home&lang=".$lang."&smod=list";
			break;
		case "cat":
			if( !empty($pgroup) )
			{
				$wh.="and pgroup='$pgroup'";
			}
			if($pgroup=="")
			{
				$skey="<b>".$_All_Categories_lst."</b>";			
			}
			else
			{
				$skey="<b>".$_Categories_txt."<b> \"$pname\"</b>";			
			}
			$link_src="index.php?mod=home&lang=".$lang."&smod=list&opt=cat&pgroup=$pgroup&pname=$pname";
			break;
		case "brand":
			if( !empty($bid) )
			{
				$wh.="and bid='$bid'";
			}
			if($bid=="")
			{
				$skey="<b>All Brand/program</b>";			
			}
			else
			{
				$skey="<b>Brand/Program<b> \"$brand\"</b>";			
			}
			$link_src="index.php?mod=home&lang=".$lang."&smod=list&opt=brand&bid=$bid&brand=$brand";
			break;
		default:
			$skey=$_All_Products_txt;
			$link_src="index.php?mod=home&lang=".$lang."&smod=list";
			$wh="";
	}

	if ($session_bid<>0)
	{
		$wh.="and bid='$session_bid'";
	}
					
	$querysum="select * from $wb_tbl_product where cid='$session_cid' and prod_stats='0' $wh";
	$resultsum = mysql_db_query($wb_dbname,$querysum);
	$pfound = mysql_num_rows($resultsum);

if($startpage>=10)
{
	$query="select * from $wb_tbl_product where cid='$session_cid' and prod_stats='0' $wh ORDER by client_code limit $startpage,$stoppage";
	$startpage_2=$startpage;
	$stoppage_2=10;
}
else
{
	$query="select * from $wb_tbl_product where cid='$session_cid' and prod_stats='0' $wh ORDER by client_code limit $startpage_2,$stoppage_2";
	$startpage=$startpage_2;
	$stoppage=10;
}
$result = mysql_db_query($wb_dbname,$query);
$lmfound = mysql_num_rows($result);


switch($session_lang)
{
	case "en":
		$_product_result_txt="<b>Products</b> - Result <b>".$pfound."</b> item(s) in ".$skey;
		$_select_all_p_txt="Select all products in this page.";
		break;
	case "fr":
		$_product_result_txt="<b>Produits</b> - Résultat <b>".$pfound."</b> article(s) dans tous les catégories de ".$skey;
		$_select_all_p_txt="Sélectionner tous les produits das cette page";
		break;
	default:
		$_product_result_txt="<b>Products</b> - Result <b>".$pfound."</b> item(s) in ".$skey;
		$_select_all_p_txt="Select all products in this page.";
}			

?>
</font>

<!--<font color="#FF9900">
<small>
&nbsp; Tip of the day : You can click on the pictures to view a large format.
</small>
</font>-->

<?php
	$datafound_2=$pfound;
	$linkmaster_2=$link_src;
	$defpages_2=10;
	include("pagelist2.php");
?>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="F9F9F6" align="center">
<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="1">
		&nbsp; <?php echo $_product_result_txt; ?>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="white" height="40" align="center">
		<font face="arial" size="1">
		<?php
			if($pfound=="0")
			{
				echo "<b><font color=red>Product not found!</b></font>";
			}
		?>

			<table  width="100%" cellpadding="2" cellspacing="0" border="0">
			<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=add_cart&lmfound=<?php echo $lmfound; ?>" method="post" name="pidfrm">
				<tr>
					<td colspan=4 bgcolor="#FFFFF0">
						<font face="arial" size="1">
						<INPUT type=checkbox name=chkall onclick="selpid()"> <?php echo $_select_all_p_txt; ?>
						</font>
					</td>
				</tr>

			<?php

			if($session_gid<>4)
			{
				include("product_button.php");
			}

			?>

				<tr>
					<td>
							<TABLE cellSpacing="2" cellPadding="0" width="100%" bgColor="white" border="0">							
									
			<?php
			$i=0;
			while ( $row = mysql_fetch_array( $result) ) 
			{
						$stk_id=$row[pid];
						require("stockbal.php");						
						addcnp($session_scur,$row[prod_cur],$row[prod_cur1],$row[prod_cur2],$row[prod_cur3],$row[prod_price],$row[prod_price1],$row[prod_price2],$row[prod_price3]);
						
						$z_pics="images/warning32.png";
						$t_pics="images/warning32.png";

						if(!empty($row[pic_zoom])){
							$z_pics = $files_path_pictures.$row[pic_zoom];
						}

						if(!empty($row[pic_thum])){
							$t_pics = $files_path_pictures.$row[pic_thum];
						}


			?>
			                <TR>
			                    <TD>
									<INPUT TYPE="checkbox" NAME="cart_id[<?php echo $i; ?>]">
								</TD>
			                    
								<TD>
									<a href="javascript:ZoomPic('<?php echo $z_pics; ?>');"><IMG  src="<?php echo $t_pics; ?>" border="0"></a>
								</TD>

								<TD vAlign="center">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									<STRONG>Ref. :  
									&nbsp;<?php echo $row[client_code]." ".$row[client_code2]; ?></STRONG> 
									 <br>
									<?php echo $row[prod_name]." ".$row[prod_name2]; ?>
									<br>
									<?php echo nl2br($row[prod_desc]); ?>
									<br>
									<!--<?php chkcursy($row[prod_cur],$row[prod_price]); ?>-->
									<?php 
										chkcursy($a_cur,$a_price,4);
									?>

									<font color="black">&nbsp;&nbsp;  Per <?php echo number_format($row[prod_per]).' '.$row[prod_unit]; ?></font>
									
									<?php
									if($session_stk==1)
									{
										echo "<br><font color=\"gray\"><b>Stock Balances : <font color=\"#CC0000\">".number_format($sum_bal)."</font></font></b>";
									}
									?>

									<?php
									if($row[order_files]<>"")
									{
										echo "<br>";
										echo "<small><a href=\"".$files_path.$row[order_files]."\">Download Order Form</a></small>";
									}
									if($row[prod_size]==1)
									{
										echo "<br><a href=\"javascript:ZoomPic('$z_pics')\"><font color=\"red\" size=1>View Size Break Down</font></a>";
									}
									?>
									</FONT>
								</TD>
			                    <TD>

								<?php
								if($session_gid<>4)
								{
								?>

									<font face="arial" size="1">
									QTY.<BR>
									<INPUT TYPE="hidden" name="p_id[<?php echo $i; ?>]" value="<?php echo $row[pid]; ?>">
									<INPUT TYPE="text" NAME="p_qty[<?php echo $i; ?>]" size="8" value="" class="addcart">
									</font>
								<?php
								}
								?>
								
								</TD>
							</TR>				
			                <TR>
			                    <TD colspan="4">
									<?php SpecLine("100%","center","white","5"); ?>
									<!--<?php SpecLine("100%","center","#FFCC00","1"); ?>-->

			<table border=0 cellspacing=0 cellpadding=0 width=100% align="left">
			<tr> 
			<td colspan=2 background="images/dashh.gif" height="1"><img src="images/spacer.gif" width="1" height="1"></td>
			</tr>	
			</table>

									<?php SpecLine("100%","center","white","5"); ?>
								</TD>
							</TR>											
			<?php
				$i++;
			}
			?>
							</TABLE>		

					</td>
				</tr>

			<?php
			if($session_gid<>4)
			{
				include("product_button.php");
			}
			?>

			</form>
			</table>
			<?php
			$datafound=$pfound;
			$linkmaster=$link_src;
			$defpages=10;
			include("pagelist1.php");
			?>
		</font>
	</td>
</tr>
</table>

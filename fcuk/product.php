<?php

	$wh="";
	if ( !isset($startpage) && !isset($stoppage) ){
		$startpage=0;
		$stoppage=10;
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
		default:
			$skey=$_All_Products_txt;
			$link_src="index.php?mod=home&lang=".$lang."&smod=list";
			$wh="";
	}
					
	$querysum="select * from $wb_tbl_product where cid='$session_cid' and prod_flag='0' $wh";
	$resultsum = mysql_db_query($wb_dbname,$querysum);
	$pfound = mysql_num_rows($resultsum);

	$query="select * from $wb_tbl_product where cid='$session_cid' and prod_flag='0' $wh ORDER by client_code limit $startpage,$stoppage";
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

<!--<font color="#FF9900">
<small>
&nbsp; Tip of the day : You can click on the pictures to view a large format.
</small>
</font>-->

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#FFCC00" width="100%" bgcolor="F9F9F6" align="center">
<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="#FFCC00" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3">
		&nbsp; <?php echo $_product_result_txt; ?>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="white" height="40" align="center">
		
		<?php
			if($pfound=="0")
			{
				echo "<b><font color=red>Product not found!</b></font>";
			}
		?>

			<table  width="100%" cellpadding="2" cellspacing="1" border="0">
			<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=add_cart&lmfound=<?php echo $lmfound; ?>" method="post" name="pidfrm">
				<tr bgcolor="#FF9900">
					<td>
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; <INPUT type=checkbox name=chkall onclick="selpid()">
						</font>
					</td>
					<td>
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; File Name
						</font>
					</td>
					<td>
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; Product Code
						</font>
					</td>
					<td>
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; Product Name
						</font>
					</td>
					<td>
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; Download
						</font>
					</td>
				</tr>

				<?php
					//include("product_button.php");
				?>

				<?php
					$i=0;
					while ( $row = mysql_fetch_array( $result) ) 
					{
				?>

				<tr>
					<td bgcolor="white">
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; <INPUT TYPE="checkbox" NAME="cart_id[<?php echo $i; ?>]">
						<INPUT TYPE="hidden" name="p_id[<?php echo $i; ?>]" value="<?php echo $row[pid]; ?>">
						</font>
					</td>
					<td bgcolor="white">
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; <a href="<?php echo $files_path_pictures.$row[pic_zoom]; ?>" target="_blank"><?php echo $row[pic_zoom]; ?></a>
						</font>
					</td>
					<td bgcolor="white">
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp;<?php echo $row[client_code]."</STRONG> ".$row[client_code2]; ?>
						</font>
					</td>
					<td bgcolor="white">
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; <?php echo $row[prod_name]; ?>
						</font>
					</td>
					<td bgcolor="white">
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
						&nbsp; <a href="<?php echo $files_path_pictures.$row[pic_zoom]; ?>" target="_blank">Download</a>
						</font>
					</td>
				</tr>									
									
			<?php
				$i++;
			}
			?>

					</td>
				</tr>

			<?php
			include("product_button.php");
			?>

			</form>
			</table>
			<?php
			$datafound=$pfound;
			$linkmaster=$link_src;
			$defpages=10;
			include("pagelist.php");
			?>
	</td>
</tr>
</table>

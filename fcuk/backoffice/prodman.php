
<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#0099CC" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="#0099CC" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="4" color="white">
		&nbsp; <b>Product Databases</b>
		</font>
	</td>
</tr>

<?php
if($pst=="")
{
?>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
<form action="index.php?mod=home&lang=<?php echo $lang; ?>&smod=prodman&mode=admin&pst=update" method="post" name="prod" >
	<td bgcolor="white" height="20">
				<?php

				$link_src="index.php?mod=home&lang=".$lang."&smod=prodman&mode=admin";
				if ( !isset($startpage) && !isset($stoppage) ){
					$startpage=0;
					$stoppage=20;
				}

				$querysum="select * from $wb_tbl_product where cid='$session_cid' order by pid ";
				$resultsum = mysql_db_query($wb_dbname,$querysum);
				$pfound = mysql_num_rows($resultsum);

				$query="select * from $wb_tbl_product where cid='$session_cid' order by pid limit $startpage,$stoppage";
				$result = mysql_db_query($wb_dbname,$query);
				$lmfound = mysql_num_rows($result);
				?>
			<table  width="100%" cellpadding="1" cellspacing="0" border="0">
				<tr>
					<td bgcolor="#CCCCCC">
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" color="#6600FF">
						&nbsp; Result <?php echo $pfound; ?> items.
						</font>
					</td>
				</tr>
				<tr>
					<td>
							<TABLE cellSpacing="1" cellPadding="0" width="100%" bgColor="white" border="0">

			                <TR bgcolor="#CCCCFF">
			                    <TD height="20" align="center">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; #
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Ref.</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Name</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Price#1</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Price#2</b>
									</FONT>
								</TD>
								<TD height="20">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Per</b>
									</FONT>
								</TD>
								<TD height="20" align="center">
									<FONT face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif"  size="2">
									&nbsp; <b>Stock Bal.</b>
									</FONT>
								</TD>
							</TR>

					<?php
					$cnt=1;
					while ( $row = mysql_fetch_array( $result) ) 
					{
						if( $bgcol=="" )
						{
							$bgcol="white";
						}

						$stk_id=$row[pid];
						require("stockbal.php");

						if($cnt==1)
						{
							$chkpid="CHECKED";
						}
						else
						{
							$chkpid="";
						}

					?>
			                <TR VALIGN="MIDDLE" BGCOLOR="<?php echo $bgcol; ?>">									
			                    <TD align="center">
									&nbsp; <font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
									<INPUT TYPE="radio" NAME="pid" value="<?php echo $row[pid]; ?>" <?php echo $chkpid; ?>>
									</font>
								</TD>
			                    <TD>
									<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
									&nbsp; <?php echo $row[client_code]." ".$row[client_code2]; ?>
									</font>
								</TD>
			                    <TD>
									<font face="Helvetica Condensed,Helvetica Condensed,Arial,verdana,sans-serif,verdana,sans-serif" size="2">
									&nbsp; <?php echo $row[prod_name]." ".$row[prod_name2]; ?>
									</font>
								</TD>
			                    <TD>
									<?php $fc="red"; if($row[prod_price]==0) $fc="red"; ?>
									<font face="MS Sans Serif" size="2" color="<?php echo $fc; ?>">
									&nbsp; <?php chkcursy($row[prod_cur],$row[prod_price]); ?>
									</font>
								</TD>
			                    <TD>
									<?php $fc="red"; if($row[prod_price1]==0) $fc="#009900"; ?>
									<font face="MS Sans Serif" size="2" color="<?php echo $fc; ?>">
									&nbsp; <?php chkcursy($row[prod_cur1],$row[prod_price1]); ?>
									</font>
								</TD>
								<TD>
									<font face="MS Sans Serif" size="2">
									&nbsp; <?php echo $row[prod_per]."/".$row[prod_unit]; ?>
									</font>
								</TD>
			                    <TD align="center">
									<font face="MS Sans Serif" size="2"><b>
									&nbsp;
									<?php 
										if($sum_bal<0)
										{
											$scol="red";
										}
										else
										{
											$scol="green";
										}
										echo "<font color=$scol>";
										echo number_format($sum_bal); 
										echo "</font>";
									?>
									</font></b>
								</TD>
							</TR>
							<?php
								if($bgcol=="#FFFFCC")
								{
									$bgcol="white";
								}
								else
								{
									$bgcol="#FFFFCC";
								}
								$cnt++;
							}
							?>
							</TABLE>
						<?php
						$datafound=$pfound;
						$linkmaster=$link_src;
						$defpages=20;
						include("pagelist.php");
						?>
					</td>
				</tr>
			</table>
	</td>
</tr>
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="#DEDEDE" height="25" align="center">
			<INPUT TYPE="button" name="add" value="  Add  " class="bkoffice" onClick="javascript:location.href='index.php?mod=home&lang=<?php echo $lang; ?>&smod=prodman&mode=admin&pst=add';">
			&nbsp; 
			<INPUT TYPE="submit" name="submit" value="  Edit  " class="bkoffice">
			&nbsp;
			<INPUT TYPE="submit" name="submit" value="Delete" class="bkoffice">
			&nbsp;
	</td>
</tr>
</form>
<?php
}
?>


<?php
if($pst=="add")
{
	//SpecLine("100%","center","white","2");
	echo "<form action=\"index.php?mod=home&lang=$lang&smod=prodman&mode=admin&pst=ins\" name=\"addprod\" method=\"post\" ENCTYPE=\"multipart/form-data\">";
	include("prodman_ext.php");
	echo "</form>";
	SpecLine("100%","center","white","2");
}
?>

<?php
if($pst=="ins")
{
	SpecLine("100%","center","white","2");
	
	$uploadDir = $files_path_pictures;
	if( $pic_thum <>"" ){
		if (copy( $pic_thum , $uploadDir.$pic_thum_name )){
		print "Thumbnil Picture has been Uploaded.<br>";
		}
		unlink($pic_thum);
	}
	if( $pic_zoom <>"" ){
		if (copy( $pic_zoom , $uploadDir.$pic_zoom_name )){
		print "Zoom Picture has been Uploaded.<br>";
		}
		unlink($pic_zoom);
	}
	
	$query="INSERT INTO $wb_tbl_product (cid,pgroup,client_code,client_code2,prod_name,prod_name2,prod_desc,".
				"prod_price,prod_cur,prod_price1,prod_cur1,prod_per,prod_unit,pic_thum,pic_zoom,cur_stock)".				
				"VALUES ('$session_cid','$pgroup','$client_code','$client_code2','$prod_name','$prod_name2','$prod_desc',".
				"'$prod_price','$prod_cur','$prod_price1','$prod_cur1','$prod_per','$prod_unit','$pic_thum_name','$pic_zoom_name','$cur_stock')";

	$result = mysql_db_query($wb_dbname,$query);
	if($result)
	{
		AlertMsg("Product Ref : $client_code has been created.","index.php?mod=home&lang=$lang&smod=prodman&mode=admin");
	}
	else
	{
		errmess("Couldn't create new product");
		die;
		echo "</table></td></tr></table>";
	}
}
?>



<?php
if($pst=="update")
{
	//SpecLine("100%","center","white","2");
	switch($submit)
	{
		case "  Edit  ":
			echo "<form action=\"index.php?mod=home&lang=$lang&smod=prodman&mode=admin&pst=upd\" name=\"addprod\" method=\"post\" ENCTYPE=\"multipart/form-data\">";
			include("prodman_ext.php");
			echo "</form>";
			break;
		case "Delete":
			$query="delete from $wb_tbl_product where pid='$pid' ";
			$result = mysql_db_query($wb_dbname,$query);			
			AlertMsg("Product has been deleted.","index.php?mod=home&lang=$lang&smod=prodman&mode=admin");
			break;
	}
	SpecLine("100%","center","white","2");
}
?>

<?php
if($pst=="upd")
{

	$uploadDir = $files_path_pictures;
	if( $pic_thum <>"" ){
		if (copy( $pic_thum , $uploadDir.$pic_thum_name )){
		print "Thumbnil Picture has been Uploaded.<br>";
		}
		unlink($pic_thum);
		$query1="UPDATE $wb_tbl_product SET pic_thum='$pic_thum_name' WHERE pid='$pid' ";
		$result1 = mysql_db_query($wb_dbname,$query1);
	}
	if( $pic_zoom <>"" ){
		if (copy( $pic_zoom , $uploadDir.$pic_zoom_name )){
		print "Zoom Picture has been Uploaded.<br>";
		}
		unlink($pic_zoom);
		$query2="UPDATE $wb_tbl_product SET pic_zoom='$pic_zoom_name' WHERE pid='$pid' ";
		$result2 = mysql_db_query($wb_dbname,$query2);
	}


	$query="UPDATE $wb_tbl_product SET ".
				"pgroup='$pgroup',client_code='$client_code',client_code2='$client_code2',".
				"prod_name='$prod_name',prod_name2='$prod_name2',prod_desc='$prod_desc',".
				"prod_price='$prod_price',prod_cur='$prod_cur',prod_price1='$prod_price1',prod_cur1='$prod_cur1',".
				"prod_per='$prod_per',prod_unit='$prod_unit',cur_stock='$cur_stock' WHERE pid='$pid'";
	$result = mysql_db_query($wb_dbname,$query);
	SpecLine("100%","center","white","2");
	AlertMsg("Product has been updated..","index.php?mod=home&lang=$lang&smod=prodman&mode=admin");
}
?>
</table></td></tr></table>
<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
** Stock Balances were determined automatically by a computer program
</font>
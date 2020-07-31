
<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<table cellpadding="0" cellspacing="0" border="0" bordercolor="#0099CC" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="arial" size="4" color="black">
		&nbsp; <b>Product List</b>
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
					<td bgcolor="EEEEDD">
						<font face="arial" size="1" color="red">
						&nbsp; Found Result <?php echo $pfound; ?> items.
						</font>
					</td>
				</tr>
				<tr>
					<td>
							<TABLE cellSpacing="1" cellPadding="0" width="100%" bgColor="white" border="0">

			                <TR bgcolor="EEEEDD">
			                    <TD height="20" align="center">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; #
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Ref.</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Name</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Price#1</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Price#2</b>
									</FONT>
								</TD>

								<TD height="20">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Per</b>
									</FONT>
								</TD>
								<TD height="20" align="center">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Stock Bal.</b>
									</FONT>
								</TD>
								<TD height="20" align="center">
									<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
									&nbsp; <b>Status</b>
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
									&nbsp; <font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									<INPUT TYPE="radio" NAME="pid" value="<?php echo $row[pid]; ?>" <?php echo $chkpid; ?>>  <?php echo $row[pid]; ?>
									</font>
								</TD>
			                    <TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; 
									<?php
										$client_code_ref = $row[client_code]." ".$row[client_code2];
										echo substr($client_code_ref,0,10).".."; 
									?>
									</font>
								</TD>
			                    <TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; <?php echo substr($row[prod_name],0,10).".."; ?>
									</font>
								</TD>

			                    <TD>
									<?php $fc="red"; if($row[prod_price]==0) $fc="red"; ?>
									<font face="MS Sans Serif" size="1" color="<?php echo $fc; ?>">
									&nbsp; <?php chkcursy($row[prod_cur],$row[prod_price],4); ?>
									</font>
								</TD>
			                    <TD>
									<?php $fc="red"; if($row[prod_price1]==0) $fc="#009900"; ?>
									<font face="MS Sans Serif" size="1" color="<?php echo $fc; ?>">
									&nbsp; <?php chkcursy($row[prod_cur1],$row[prod_price1],4); ?>
									</font>
								</TD>


								<TD>
									<font face="MS Sans Serif" size="1">
									&nbsp; <?php echo $row[prod_per]."/".$row[prod_unit]; ?>
									</font>
								</TD>
			                    <TD align="center">
									<font face="MS Sans Serif" size="1"><b>
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
								<TD>
									<font face="MS Sans Serif, Microsoft Sans Serif" size="1">
									&nbsp; 
									<?php 
										if($row[prod_stats]==0)
										{
											echo "<font color=green>Show";
										}
										else
										{
											echo "<font color=red>Drop";
										}										
									?>
									<font>
									</font>
								</TD>

							</TR>
							<?php
								if($bgcol=="EEEEDD")
								{
									$bgcol="white";
								}
								else
								{
									$bgcol="EEEEDD";
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
	
	$query="INSERT INTO $wb_tbl_product (cid,bid,pgroup,client_code,client_code2,prod_name,prod_name2,prod_desc,".
				"prod_price,prod_cur,prod_price1,prod_cur1,prod_price2,prod_cur2,prod_price3,prod_cur3,".
				"prod_per,prod_unit,pic_thum,pic_zoom,cur_stock,prod_size,prod_inco,prod_stats)".				
				"VALUES ('$session_cid','$bid','$pgroup','$client_code','$client_code2','$prod_name','$prod_name2','$prod_desc',".
				"'$prod_price','$prod_cur','$prod_price1','$prod_cur1',".
				"'$prod_price2','$prod_cur2','$prod_price3','$prod_cur3','$prod_per','$prod_unit',".
				"'$pic_thum_name','$pic_zoom_name','$cur_stock','$prod_size','$prod_inco','$prod_stats')";

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
	include("prodman_size.php");
	include("prodman_inco.php");
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
				"bid='$bid',pgroup='$pgroup',client_code='$client_code',client_code2='$client_code2',".
				"prod_name='$prod_name',prod_name2='$prod_name2',prod_desc='$prod_desc',".
				"prod_price='$prod_price',prod_cur='$prod_cur',prod_price1='$prod_price1',prod_cur1='$prod_cur1',".
				"prod_price2='$prod_price2',prod_cur2='$prod_cur2',prod_price3='$prod_price3',prod_cur3='$prod_cur3',".
				"prod_per='$prod_per',prod_unit='$prod_unit',cur_stock='$cur_stock',prod_size='$prod_size',prod_inco='$prod_inco',prod_stats='$prod_stats' WHERE pid='$pid'";
	$result = mysql_db_query($wb_dbname,$query);
	SpecLine("100%","center","white","2");
	AlertMsg("Product has been updated..","index.php?mod=home&lang=$lang&smod=prodman&mode=admin");
}

if($pst=="SizeUpdate")
{
	$mtot = $xrec; 

	$ar1s = $_REQUEST['wwksize_id'];
	$ar2s = $_REQUEST['wwksize_name'];
	


	for($i=0; $i<=$mtot; $i++)
	{

		$qchk="select * from $wb_tbl_wwksize where wwksize_id='$wwksize_id[$i]' ";
		$rchk = mysql_db_query($wb_dbname,$qchk);
		$fchk = mysql_num_rows($rchk);
		if ($fchk==1) 
		{
			$query="UPDATE $wb_tbl_wwksize SET wwksize_name='$wwksize_name[$i]' WHERE wwksize_id='$wwksize_id[$i]' ";
			$result = mysql_db_query($wb_dbname,$query);
		}
		else
		{
			if(!empty($wwksize_name[$i]))
			{
			$query_pr="insert into $wb_tbl_wwksize (wwksize_id,wwksize_name,pid) ".
					"values(0,'$wwksize_name[$i]','$pid')";		
			$result_pr = mysql_db_query($wb_dbname,$query_pr);
			}
		}
	}

	AlertMsg("Size label variables has been updated.","index.php?mod=home&lang=en&smod=prodman&mode=admin");
}

if($pst=="ICTUpdate")
{
	$mtot2 = $xrec2; 

	$ar1s = $_REQUEST['ict_id'];
	$ar2s = $_REQUEST['ict_cur'];
	$ar3s = $_REQUEST['ict_incoid'];
	$ar4s = $_REQUEST['ict_price'];
	
	for($i=0; $i<=$mtot2; $i++)
	{

		$qchk="select * from $wb_tbl_ictprice where ict_id='$ict_id[$i]' ";
		$rchk = mysql_db_query($wb_dbname,$qchk);
		$fchk = mysql_num_rows($rchk);
		if ($fchk==1) 
		{
			$query="UPDATE $wb_tbl_ictprice SET ict_cur='$ict_cur[$i]',ict_incoid='$ict_incoid[$i]',ict_price='$ict_price[$i]' WHERE ict_id='$ict_id[$i]' ";
			$result = mysql_db_query($wb_dbname,$query);
		}
		else
		{
			if(!empty($ict_cur[$i]))
			{
				$query_pr="insert into $wb_tbl_ictprice (ict_id,ict_cur,ict_incoid,ict_price,pid) ".
					"values(0,'$ict_cur[$i]','$ict_incoid[$i]','$ict_price[$i]','$pid')";		

				$result_pr = mysql_db_query($wb_dbname,$query_pr);
			}
		}
	}

	AlertMsg("Incoterms price has been updated.","index.php?mod=home&lang=en&smod=prodman&mode=admin");
}

?>
</table></td></tr></table>

<!--
<font face="arial" size="1" color=gray>
** Stock Balances were determined automatically by a computer program
</font>
-->
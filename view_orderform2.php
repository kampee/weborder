<?php
$cart_id=$row[cart_id];
?>
<table cellpadding="0" cellspacing="0" border="1" bordercolor="EEEEDD" width="100%" bgcolor="F9F9F6">

<tr bordercolordark="#ffffff" bordercolorlight="silver" valign="middle">
	<td bgcolor="#CC0000" height="20">
		<TABLE cellSpacing="2" cellPadding="0" width="100%" bgColor="white" border="0">

		<?php
		$qchk="select * from $wb_tbl_ccse where sl_cartid='$cart_id' and sl_fabcomp<>'' ";
		$rchk = mysql_db_query($wb_dbname,$qchk);
		$fchk = mysql_num_rows($rchk);
		$i=0;
		while ( $row_chk = mysql_fetch_array( $rchk ) )
		{	
			include("orderform2_head.php");
			if( $bcs=="" )
			{
				$bcs="white";
			}
			$sl_no[$i] = $row_chk[sl_no];
			$sl_fabcomp[$i] = $row_chk[sl_fabcomp];
			$sl_refcode[$i] = $row_chk[sl_refcode];
			$sl_size[$i] = $row_chk[sl_size];
			$sl_size1[$i] = $row_chk[sl_size1];
			$sl_size2[$i] = $row_chk[sl_size2];
			$sl_size3[$i] = $row_chk[sl_size3];
			$sl_size4[$i] = $row_chk[sl_size4];
			$sl_size5[$i] = $row_chk[sl_size5];
			$sl_size6[$i] = $row_chk[sl_size6];
			$sl_color[$i] = $row_chk[sl_color];
			$sl_qty[$i] = $row_chk[sl_qty];
			$sl_qty1[$i] = $row_chk[sl_qty1];
			$sl_qty2[$i] = $row_chk[sl_qty2];
			$sl_qty3[$i] = $row_chk[sl_qty3];
			$sl_qty4[$i] = $row_chk[sl_qty4];
			$sl_qty5[$i] = $row_chk[sl_qty5];
			$sl_qty6[$i] = $row_chk[sl_qty6];
			$sl_wi[$i] = $row_chk[sl_wi];
			$sl_wi_temp1[$i] = $row_chk[sl_wi_temp1];
			$sl_wi_temp2[$i] = $row_chk[sl_wi_temp2];
			$sl_ii[$i] = $row_chk[sl_ii];
			$sl_di[$i] = $row_chk[sl_di];
			$sl_ci[$i] = $row_chk[sl_ci];
			$sl_bi[$i] = $row_chk[sl_bi];

		?>
		<div readonly>
			<TR bgcolor="<?php echo $bcs; ?>" VALIGN="TOP">
				<TD height="20" align=center bgcolor="#FFCC00">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1" color="red">
					&nbsp; <?php echo $i+1; ?>
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<?php echo $sl_fabcomp[$i]; ?>
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<?php echo $sl_refcode[$i]; ?>
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<?php echo $sl_size[$i]; ?><BR>
					<?php if(!empty($sl_size1[$i])) echo $sl_size1[$i]."<BR>"; ?>
					<?php if(!empty($sl_size2[$i])) echo $sl_size2[$i]."<BR>"; ?>
					<?php if(!empty($sl_size3[$i])) echo $sl_size3[$i]."<BR>"; ?>
					<?php if(!empty($sl_size4[$i])) echo $sl_size4[$i]."<BR>"; ?>
					<?php if(!empty($sl_size5[$i])) echo $sl_size5[$i]."<BR>"; ?>
					<?php if(!empty($sl_size6[$i])) echo $sl_size6[$i]."<BR>"; ?>

				</FONT>
			</TD>
			<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<?php echo $sl_color[$i]; ?>
				</FONT>
			</TD>
			<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<?php echo $sl_qty[$i]; ?><BR>
					<?php if(!empty($sl_qty1[$i])) echo $sl_qty1[$i]."<BR>"; ?>
					<?php if(!empty($sl_qty2[$i])) echo $sl_qty2[$i]."<BR>"; ?>
					<?php if(!empty($sl_qty3[$i])) echo $sl_qty3[$i]."<BR>"; ?>
					<?php if(!empty($sl_qty4[$i])) echo $sl_qty4[$i]."<BR>"; ?>
					<?php if(!empty($sl_qty5[$i])) echo $sl_qty5[$i]."<BR>"; ?>
					<?php if(!empty($sl_qty6[$i])) echo $sl_qty6[$i]."<BR>"; ?>
				</FONT>
			</TD>
		</TR>

			<TR bgcolor="#F0F0F0">
				<TD height="20" COLSPAN="6" bgcolor="#99CCFF">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; Choose the care symbols by ticking on the box and fill out the space wuth specific instructions.
					</FONT>
				</TD>
			</TR>
			<TR  bgcolor="#D9ECFF">
				<TD COLSPAN=2 height="20">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<b>Washing Instructions</b>
					</FONT>
				</TD>
				<TD colspan=2>
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<b>Ironing Instructions</b>
					</FONT>
				</TD>
				<TD colspan=2>
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<b>Drying Instructions</b>
					</FONT>
				</TD>
			</TR>
			<TR  bgcolor="#D9ECFF" valign="top">
				<TD COLSPAN=2>
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<?php
					switch($sl_wi[$i])
					{
						case "1":
							$wi_chk1="CHECKED";
							$wi_chk2="";
							$wi_chk3="";
							break;
						case "2":
							$wi_chk1="";
							$wi_chk2="CHECKED";
							$wi_chk3="";
							break;
						case "3":
							$wi_chk1="";
							$wi_chk2="";
							$wi_chk3="CHECKED";
							break;
					}							
					?>
					<INPUT TYPE="checkbox" NAME="sl_wi[<?php echo $i; ?>]" value="1" <?php echo $wi_chk1; ?> disabled> <img src="images/wi_1.gif" width=20> Temperature : <INPUT TYPE="text" NAME="sl_wi_temp1[<?php echo $i; ?>]" size="5" class="addcart" VALUE="<?php echo $sl_wi_temp1[$i]; ?>" readonly><br>
					
					<INPUT TYPE="checkbox" NAME="sl_wi[<?php echo $i; ?>]" value="2" <?php echo $wi_chk2; ?> disabled> &nbsp;<img src="images/wi_2.gif" width=20> Temperature : <INPUT TYPE="text" NAME="sl_wi_temp2[<?php echo $i; ?>]" size="5" class="addcart" VALUE="<?php echo $sl_wi_temp2[$i]; ?>" readonly><br>
					
					<INPUT TYPE="checkbox" NAME="sl_wi[<?php echo $i; ?>]" value="3" <?php echo $wi_chk3; ?> disabled> <img src="images/wi_3.gif" width=20> Do not Wash<br>
					</FONT>
				</TD>
				<TD colspan=2>
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">

					<?php
					switch($sl_ii[$i])
					{
						case "1":
							$ii_chk1="CHECKED";
							$ii_chk2="";
							$ii_chk3="";
							$ii_chk4="";
							$ii_chk5="";
							$ii_chk6="";
							break;
						case "2":
							$ii_chk1="";
							$ii_chk2="CHECKED";
							$ii_chk3="";
							$ii_chk4="";
							$ii_chk5="";
							$ii_chk6="";
							break;
						case "3":
							$ii_chk1="";
							$ii_chk2="";
							$ii_chk3="CHECKED";
							$ii_chk4="";
							$ii_chk5="";
							$ii_chk6="";
							break;
						case "4":
							$ii_chk1="";
							$ii_chk2="";
							$ii_chk3="";
							$ii_chk4="CHECKED";
							$ii_chk5="";
							$ii_chk6="";
							break;
						case "5":
							$ii_chk1="";
							$ii_chk2="";
							$ii_chk3="";
							$ii_chk4="";
							$ii_chk5="CHECKED";
							$ii_chk6="";
							break;
						case "6":
							$ii_chk1="";
							$ii_chk2="";
							$ii_chk3="";
							$ii_chk4="";
							$ii_chk5="";
							$ii_chk6="CHECKED";
							break;
					}							
					?>
					
					<INPUT TYPE="checkbox" NAME="sl_ii[<?php echo $i; ?>]" value="1" <?php echo $ii_chk1; ?> disabled> <img src="images/ii_1.gif" width=20> Iron, Any Temperature, Steam or Dry<br>					
					<INPUT TYPE="checkbox" NAME="sl_ii[<?php echo $i; ?>]" value="2" <?php echo $ii_chk2; ?> disabled> <img src="images/ii_2.gif" width=20> Iron, Low<br>					

					<INPUT TYPE="checkbox" NAME="sl_ii[<?php echo $i; ?>]" value="3" <?php echo $ii_chk3; ?> disabled> <img src="images/ii_3.gif" width=20> Iron, Medium<br>					

					<INPUT TYPE="checkbox" NAME="sl_ii[<?php echo $i; ?>]" value="4" <?php echo $ii_chk4; ?> disabled> <img src="images/ii_4.gif" width=20> Iron, High<br>					

					<INPUT TYPE="checkbox" NAME="sl_ii[<?php echo $i; ?>]" value="5" <?php echo $ii_chk5; ?> disabled> <img src="images/ii_5.gif" width=20> Do not Steam<br>					

					<INPUT TYPE="checkbox" NAME="sl_ii[<?php echo $i; ?>]" value="6" <?php echo $ii_chk6; ?> disabled> <img src="images/ii_6.gif" width=20> Do not Iron<br>					

					</FONT>
				</TD>
				<TD colspan=2>
					<FONT face="MS Sans Serif, Microsoft Sans Serif" size="1">
					<?php
					switch($sl_di[$i])
					{
						case "1":
							$di_chk1="CHECKED";
							$di_chk2="";
							$di_chk3="";
							$di_chk4="";
							$di_chk5="";
							break;
						case "2":
							$di_chk1="";
							$di_chk2="CHECKED";
							$di_chk3="";
							$di_chk4="";
							$di_chk5="";
							
							break;
						case "3":
							$di_chk1="";
							$di_chk2="";
							$di_chk3="CHECKED";
							$di_chk4="";
							$di_chk5="";
							
							break;
						case "4":
							$di_chk1="";
							$di_chk2="";
							$di_chk3="";
							$di_chk4="CHECKED";
							$di_chk5="";
							
							break;
						case "5":
							$di_chk1="";
							$di_chk2="";
							$di_chk3="";
							$di_chk4="";
							$di_chk5="CHECKED";
							
							break;
					}							
					?>

					<INPUT TYPE="checkbox" NAME="sl_di[<?php echo $i; ?>]" value="1" <?php echo $di_chk1; ?> disabled> <img src="images/di_1.gif" width=20> Tumble Dry<br>					

					<INPUT TYPE="checkbox" NAME="sl_di[<?php echo $i; ?>]" value="2" <?php echo $di_chk2; ?> disabled> <img src="images/di_2.gif" width=20> Tumble Dry, Normal, Low<br>					

					<INPUT TYPE="checkbox" NAME="sl_di[<?php echo $i; ?>]" value="3" <?php echo $di_chk3; ?> disabled> <img src="images/di_3.gif" width=20> Tumble Dry, Normal, Medium<br>					

					<INPUT TYPE="checkbox" NAME="sl_di[<?php echo $i; ?>]" value="4" <?php echo $di_chk4; ?> disabled> <img src="images/di_4.gif" width=20> Tumble Dry, Normal, High<br>					

					<INPUT TYPE="checkbox" NAME="sl_di[<?php echo $i; ?>]" value="5" <?php echo $di_chk5; ?> disabled> <img src="images/di_5.gif" width=20> Do not Dry<br>					

					</FONT>
				</TD>
			</TR>
			<TR  bgcolor="#D9ECFF">
				<TD colspan=2>
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<b>Dry-Cleaning Instructions</b>
					</FONT>
				</TD>
				<TD colspan=2>
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<b>Bleaching Instructions</b>
					</FONT>
				</TD>
				<TD colspan=2>
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp;
					</FONT>
				</TD>
			</TR>
			<TR  bgcolor="#D9ECFF">
				<TD colspan=2>
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">

					<?php
					switch($sl_ci[$i])
					{
						case "1":
							$ci_chk1="CHECKED";
							$ci_chk2="";
							$ci_chk3="";
							$ci_chk4="";
							$ci_chk5="";
							break;
						case "2":
							$ci_chk1="";
							$ci_chk2="CHECKED";
							$ci_chk3="";
							$ci_chk4="";
							$ci_chk5="";
							
							break;
						case "3":
							$ci_chk1="";
							$ci_chk2="";
							$ci_chk3="CHECKED";
							$ci_chk4="";
							$ci_chk5="";
							
							break;
						case "4":
							$ci_chk1="";
							$ci_chk2="";
							$ci_chk3="";
							$ci_chk4="CHECKED";
							$ci_chk5="";
							
							break;
						case "5":
							$ci_chk1="";
							$ci_chk2="";
							$ci_chk3="";
							$ci_chk4="";
							$ci_chk5="CHECKED";
							
							break;
					}							
					?>

					<INPUT TYPE="checkbox" NAME="sl_ci[<?php echo $i; ?>]" value="1" <?php echo $ci_chk1; ?> disabled> <img src="images/ci_1.gif" width=20> Dryclean<br>					

					<INPUT TYPE="checkbox" NAME="sl_ci[<?php echo $i; ?>]" value="2" <?php echo $ci_chk2; ?> disabled> <img src="images/ci_2.gif" width=20> Dryclean, Any Solvent<br>					

					<INPUT TYPE="checkbox" NAME="sl_ci[<?php echo $i; ?>]" value="3" <?php echo $ci_chk3; ?> disabled> <img src="images/ci_3.gif" width=20> Dryclean, Petroleum Solvent Only<br>					

					<INPUT TYPE="checkbox" NAME="sl_ci[<?php echo $i; ?>]" value="4" <?php echo $ci_chk4; ?> disabled> <img src="images/ci_4.gif" width=20> Dryclean, Any Solvent Except Trichloroethylene<br>					

					<INPUT TYPE="checkbox" NAME="sl_ci[<?php echo $i; ?>]" value="5" <?php echo $ci_chk5; ?> disabled> <img src="images/ci_5.gif" width=20> Do not Dryclean<br>					

					</FONT>
				</TD>
				<TD colspan=2>
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">

					<?php
					switch($sl_bi[$i])
					{
						case "1":
							$bi_chk1="CHECKED";
							$bi_chk2="";
							$bi_chk3="";
							break;
						case "2":
							$bi_chk1="";
							$bi_chk2="CHECKED";
							$bi_chk3="";
							break;
						case "3":
							$bi_chk1="";
							$bi_chk2="";
							$bi_chk3="CHECKED";
							break;
					}							
					?>

					<INPUT TYPE="checkbox" NAME="sl_bi[<?php echo $i; ?>]" value="1" <?php echo $bi_chk1; ?> disabled> <img src="images/bi_1.gif" width=20><br>

					<INPUT TYPE="checkbox" NAME="sl_bi[<?php echo $i; ?>]" value="2" <?php echo $bi_chk2; ?> disabled> <img src="images/bi_2.gif" width=20><br>

					<INPUT TYPE="checkbox" NAME="sl_bi[<?php echo $i; ?>]" value="3" <?php echo $bi_chk3; ?> disabled> <img src="images/bi_3.gif" width=20><br>
					</FONT>
				</TD>
				<TD colspan=2>
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp;
					</FONT>
				</TD>
			</TR>

			<TR bgcolor="#F0F0F0">
				<TD height="10" COLSPAN="6" bgcolor="white">
					<FONT face="arial"  size="1">
					&nbsp; 
					</FONT>
				</TD>
			</TR>
		</div>
		<?php
			$i++;
			if($bcs=="#EFEFF8")
			{
				$bcs="white";
			}
			else
			{
				$bcs="#EFEFF8";
			}
		}
		?>
		</TABLE>
	</td>
</tr>
</table>

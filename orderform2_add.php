		<?php
			for($i=0; $i<10; $i++)
			{
			$sl_fabcomp[$i] = $sl_fabcomp[$i];
			$sl_refcode[$i] = $sl_refcode[$i];
			$sl_size[$i] = $sl_size[$i];
			$sl_size1[$i] = $sl_size1[$i];
			$sl_size2[$i] = $sl_size2[$i];
			$sl_size3[$i] = $sl_size3[$i];
			$sl_size4[$i] = $sl_size4[$i];
			$sl_size5[$i] = $sl_size5[$i];
			$sl_size6[$i] = $sl_size6[$i];
			$sl_color[$i] = $sl_color[$i];
			$sl_qty[$i] = $sl_qty[$i];
			$sl_qty1[$i] = $sl_qty1[$i];
			$sl_qty2[$i] = $sl_qty2[$i];
			$sl_qty3[$i] = $sl_qty3[$i];
			$sl_qty4[$i] = $sl_qty4[$i];
			$sl_qty5[$i] = $sl_qty5[$i];
			$sl_qty6[$i] = $sl_qty6[$i];
			$sl_wi[$i] = $sl_wi[$i];
			$sl_wi_temp1[$i] = $sl_wi_temp1[$i];
			$sl_wi_temp2[$i] = $sl_wi_temp2[$i];
			$sl_ii[$i] = $sl_ii[$i];
			$sl_di[$i] = $sl_di[$i];
			$sl_ci[$i] = $sl_ci[$i];
			$sl_bi[$i] = $sl_bi[$i];
			include("orderform2_head.php");
		?>
			<TR bgcolor="#F0F0F0" valign="top">
				<TD height="20" bgcolor="#FFCC00">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1" color="red">
					&nbsp; <b><?php echo $i+1; ?></b>
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="sl_fabcomp[<?php echo $i; ?>]" size="30" class="addcart" maxlength="30" value="<?php echo $sl_fabcomp[$i]; ?>">
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="sl_refcode[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_refcode[$i]; ?>">
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="sl_size[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_size[$i]; ?>"><br>
					<INPUT TYPE="text" NAME="sl_size1[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_size1[$i]; ?>"><br>
					<INPUT TYPE="text" NAME="sl_size2[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_size2[$i]; ?>"><br>
					<INPUT TYPE="text" NAME="sl_size3[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_size3[$i]; ?>"><br>
					<INPUT TYPE="text" NAME="sl_size4[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_size4[$i]; ?>"><br>
					<INPUT TYPE="text" NAME="sl_size5[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_size5[$i]; ?>"><br>
					<INPUT TYPE="text" NAME="sl_size6[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_size6[$i]; ?>"><br>
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="sl_color[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_color[$i]; ?>">
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="sl_qty[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_qty[$i]; ?>"><br>
					<INPUT TYPE="text" NAME="sl_qty1[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_qty1[$i]; ?>"><br>
					<INPUT TYPE="text" NAME="sl_qty2[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_qty2[$i]; ?>"><br>
					<INPUT TYPE="text" NAME="sl_qty3[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_qty3[$i]; ?>"><br>
					<INPUT TYPE="text" NAME="sl_qty4[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_qty4[$i]; ?>"><br>
					<INPUT TYPE="text" NAME="sl_qty5[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_qty5[$i]; ?>"><br>
					<INPUT TYPE="text" NAME="sl_qty6[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_qty6[$i]; ?>"><br>
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
					
					<INPUT TYPE="checkbox" NAME="sl_wi[<?php echo $i; ?>]" value="1"> <img src="images/wi_1.gif" width=20> Temperature : <INPUT TYPE="text" NAME="sl_wi_temp1[<?php echo $i; ?>]" size="5" class="addcart"><br>
					
					<INPUT TYPE="checkbox" NAME="sl_wi[<?php echo $i; ?>]" value="2"> &nbsp;<img src="images/wi_2.gif" width=20> Temperature : <INPUT TYPE="text" NAME="sl_wi_temp2[<?php echo $i; ?>]" size="5" class="addcart"><br>
					
					<INPUT TYPE="checkbox" NAME="sl_wi[<?php echo $i; ?>]" value="3"> <img src="images/wi_3.gif" width=20> Do not Wash<br>
					</FONT>
				</TD>
				<TD colspan=2>
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					
					<INPUT TYPE="checkbox" NAME="sl_ii[<?php echo $i; ?>]" value="1"> <img src="images/ii_1.gif" width=20> Iron, Any Temperature, Steam or Dry<br>					

					<INPUT TYPE="checkbox" NAME="sl_ii[<?php echo $i; ?>]" value="2"> <img src="images/ii_2.gif" width=20> Iron, Low<br>					

					<INPUT TYPE="checkbox" NAME="sl_ii[<?php echo $i; ?>]" value="3"> <img src="images/ii_3.gif" width=20> Iron, Medium<br>					

					<INPUT TYPE="checkbox" NAME="sl_ii[<?php echo $i; ?>]" value="4"> <img src="images/ii_4.gif" width=20> Iron, High<br>					

					<INPUT TYPE="checkbox" NAME="sl_ii[<?php echo $i; ?>]" value="5"> <img src="images/ii_5.gif" width=20> Do not Steam<br>					

					<INPUT TYPE="checkbox" NAME="sl_ii[<?php echo $i; ?>]" value="6"> <img src="images/ii_6.gif" width=20> Do not Iron<br>					

					</FONT>
				</TD>
				<TD colspan=2>
					<FONT face="MS Sans Serif, Microsoft Sans Serif" size="1">

					<INPUT TYPE="checkbox" NAME="sl_di[<?php echo $i; ?>]" value="1"> <img src="images/di_1.gif" width=20> Tumble Dry<br>					

					<INPUT TYPE="checkbox" NAME="sl_di[<?php echo $i; ?>]" value="2"> <img src="images/di_2.gif" width=20> Tumble Dry, Normal, Low<br>					

					<INPUT TYPE="checkbox" NAME="sl_di[<?php echo $i; ?>]" value="3"> <img src="images/di_3.gif" width=20> Tumble Dry, Normal, Medium<br>					

					<INPUT TYPE="checkbox" NAME="sl_di[<?php echo $i; ?>]" value="4"> <img src="images/di_4.gif" width=20> Tumble Dry, Normal, High<br>					

					<INPUT TYPE="checkbox" NAME="sl_di[<?php echo $i; ?>]" value="5"> <img src="images/di_5.gif" width=20> Do not Dry<br>					

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

					<INPUT TYPE="checkbox" NAME="sl_ci[<?php echo $i; ?>]" value="1"> <img src="images/ci_1.gif" width=20> Dryclean<br>					

					<INPUT TYPE="checkbox" NAME="sl_ci[<?php echo $i; ?>]" value="2"> <img src="images/ci_2.gif" width=20> Dryclean, Any Solvent<br>					

					<INPUT TYPE="checkbox" NAME="sl_ci[<?php echo $i; ?>]" value="3"> <img src="images/ci_3.gif" width=20> Dryclean, Petroleum Solvent Only<br>					

					<INPUT TYPE="checkbox" NAME="sl_ci[<?php echo $i; ?>]" value="4"> <img src="images/ci_4.gif" width=20> Dryclean, Any Solvent Except Trichloroethylene<br>					

					<INPUT TYPE="checkbox" NAME="sl_ci[<?php echo $i; ?>]" value="5"> <img src="images/ci_5.gif" width=20> Do not Dryclean<br>					

					</FONT>
				</TD>
				<TD colspan=2>
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="checkbox" NAME="sl_bi[<?php echo $i; ?>]" value="1"> <img src="images/bi_1.gif" width=20><br>
					<INPUT TYPE="checkbox" NAME="sl_bi[<?php echo $i; ?>]" value="2"> <img src="images/bi_2.gif" width=20><br>
					<INPUT TYPE="checkbox" NAME="sl_bi[<?php echo $i; ?>]" value="3"> <img src="images/bi_3.gif" width=20><br>
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

		<?php
		}
		?>

<?php
			$i=0;
			while ( $row = mysql_fetch_array( $rchk ) )
			{
				$sl_nox[$i] = $row[sl_no];
				$sl_numx[$i] = $row[sl_num];
				$sl_qtyx[$i] = $row[sl_qty];
				$sl_usax[$i] = $row[sl_usa];

		?>
			<TR bgcolor="#F0F0F0">
				<TD height="20">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <?php echo $i+1; ?>
					<INPUT TYPE="hidden" NAME="sl_no[<?php echo $i; ?>]" value="<?php echo $sl_nox[$i]; ?>">
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="sl_usa[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_usax[$i]; ?>">
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="sl_num[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_numx[$i]; ?>">
					</FONT>
				</TD>


				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="sl_qty[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_qtyx[$i]; ?>">
					<INPUT TYPE="submit" VALUE=" SAVE " class="addcart">
				</FONT>
			</TD>
		</TR>
		<?php
		$i++;
		}
		?>

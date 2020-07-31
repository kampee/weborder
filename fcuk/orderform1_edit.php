<?php
			$i=0;
			while ( $row = mysql_fetch_array( $rchk ) )
			{
			$sl_no[$i] = $row[sl_no];
			$sl_num[$i] = $row[sl_num];
			$sl_usa[$i] = $row[sl_usa];
			$sl_qty[$i] = $row[sl_qty];
		?>
			<TR bgcolor="#F0F0F0">
				<TD height="20">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <?php echo $i+1; ?>
					<INPUT TYPE="hidden" NAME="sl_no[<?php echo $i; ?>]" value="<?php echo $sl_no[$i]; ?>">
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="sl_num[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_num[$i]; ?>">
					</FONT>
				</TD>

				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="sl_usa[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_usa[$i]; ?>">
					</FONT>
				</TD>


				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="sl_qty[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_qty[$i]; ?>">
				</FONT>
			</TD>
		</TR>
		<?php
		$i++;
		}
		?>

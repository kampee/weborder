<?php
			$i=0;
			while ( $row = mysql_fetch_array( $rchk ) )
			{
			$sl_no[$i] = $row[sl_no];
			$sl_care[$i] = $row[sl_care];
			$sl_qty[$i] = $row[sl_qty];
		?>
			<TR bgcolor="#FFFFEA" valign="top">
				<TD height="20">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <?php echo $i+1; ?>
					<INPUT TYPE="hidden" NAME="sl_no[<?php echo $i; ?>]" value="<?php echo $sl_no[$i]; ?>">  &nbsp;
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					 &nbsp; <TEXTAREA NAME="sl_care[<?php echo $i; ?>]" ROWS="5" COLS="40" class="addcart"><?php echo $sl_care[$i]; ?></TEXTAREA>  &nbsp;
					</FONT>
				</TD>


				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					 &nbsp; <INPUT TYPE="text" NAME="sl_qty[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_qty[$i]; ?>">  &nbsp;
					<INPUT TYPE="submit" VALUE=" SAVE " class="addcart">
				</FONT>
			</TD>
		</TR>
		<?php
		$i++;
		}
		?>

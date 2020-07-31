		<?php


			for($i=0; $i<5; $i++)
			{
			$sl_care[$i] = $sl_care[$i];
			$sl_qty[$i] = $sl_qty[$i];

			?>
			<TR bgcolor="#FFFFEA" valign="top">
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					 &nbsp; <?php echo $i+1; ?>  &nbsp;
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					 &nbsp; <TEXTAREA NAME="sl_care[<?php echo $i; ?>]" ROWS="5" COLS="40" class="addcart"><?php echo $sl_care[$i]; ?></TEXTAREA>  &nbsp;
					</FONT>
				</TD>


				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					 &nbsp; <INPUT TYPE="text" NAME="sl_qty[<?php echo $i; ?>]" size="10" class="addcart" maxlength="10" value="<?php echo $sl_qty[$i]; ?>"> &nbsp;
					<INPUT TYPE="submit" VALUE=" SAVE " class="addcart">
				</FONT>
			</TD>
		</TR>
		<?php
		}
		?>

		<?php

			$id_no=30;

			for($i=0; $i<$id_no; $i++)
			{
			$sl_num[$i] = $sl_num[$i];
			$sl_usa[$i] = $sl_usa[$i];
			$sl_qty[$i] = $sl_qty[$i];

			?>
			<TR bgcolor="#F0F0F0">
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<?php echo $i+1; ?>
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
		}
		?>

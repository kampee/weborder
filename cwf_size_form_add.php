		<?php

			$id_no=12;

			for($i=0; $i<$id_no; $i++)
			{
			$sl_num[$i] = $sl_num[$i];
			$sl_qty[$i] = $sl_qty[$i];
			$sl_usa[$i] = $sl_usa[$i];
			$sl_h1[$i] = $sl_h1[$i];
		?>
			<TR bgcolor="EEEEDD">
				<TD height="20" align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<?php echo $i+1; ?>
					</FONT>
				</TD>

				
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
		<SELECT NAME="sl_num[<?php echo $i; ?>]">
		<?php
		$queryX="select * from $wb_tbl_wwksize where pid='$pid' and wwksize_name<>'' order by wwksize_name";
		$resultX = mysql_db_query($wb_dbname,$queryX);
		$pfoundX = mysql_num_rows($resultX);
		echo "<OPTION VALUE=\"N/A\">N/A</OPTION>";
		while ( $rowX = mysql_fetch_array( $resultX ) ) 
		{
			if($rowX[wwksize_name]==$sl_num[$i])
			{
				echo "<OPTION VALUE=\"$rowX[wwksize_name]\" SELECTED>$rowX[wwksize_name]</OPTION>";
			}
			else
			{
				echo "<OPTION VALUE=\"$rowX[wwksize_name]\">$rowX[wwksize_name]</OPTION>";
			}
		}
		?>
		</SELECT>
					</FONT>
				</TD>


				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="sl_qty[<?php echo $i; ?>]" size="15" class="addcart" maxlength="30" value="<?php echo $sl_qty[$i]; ?>">
					
				</FONT>
			</TD>
		</TR>
		<?php
		}
		?>

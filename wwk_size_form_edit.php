<?php
			$i=0;
			while ( $row = mysql_fetch_array( $rchk ) )
			{
				$sl_nox[$i] = $row[sl_no];
				$sl_numx[$i] = $row[sl_num];
				$sl_qtyx[$i] = $row[sl_qty];
				$sl_usax[$i] = $row[sl_usa];
				$sl_h1x[$i] = $row[sl_h1];
		?>
			<TR bgcolor="EEEEDD">
				<TD height="20">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					&nbsp; <?php echo $i+1; ?>
					<INPUT TYPE="hidden" NAME="sl_no[<?php echo $i; ?>]" value="<?php echo $sl_nox[$i]; ?>">
					</FONT>
				</TD>
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<!--
					<INPUT TYPE="text" NAME="sl_usa[<?php echo $i; ?>]" size="15" class="addcart" maxlength="30" value="<?php echo $sl_usax[$i]; ?>">
					-->
		<SELECT NAME="sl_usa[<?php echo $i; ?>]">
		echo "<OPTION VALUE=\"N/A\">N/A</OPTION>";
		<?php
		$queryc="select * from $wb_tbl_wwkmadein order by mi_name";
		$resultc = mysql_db_query($wb_dbname,$queryc);
		while ( $rowc = mysql_fetch_array( $resultc ) ) 
		{
			if($rowc[mi_name]==$sl_usax[$i])
			{
				echo "<OPTION VALUE=\"$rowc[mi_name]\" SELECTED>$rowc[mi_name]</OPTION>";
			}
			else
			{
				echo "<OPTION VALUE=\"$rowc[mi_name]\">$rowc[mi_name]</OPTION>";
			}
		}
		?>
		</SELECT>

					</FONT>
				</TD>
				
				
				<!--
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="sl_h1[<?php echo $i; ?>]" size="15" class="addcart" maxlength="30" value="<?php echo $sl_h1x[$i]; ?>">
					</FONT>
				</TD>
				-->
				<!--
				<TD align="center">
					<FONT face="MS Sans Serif, Microsoft Sans Serif"  size="1">
					<INPUT TYPE="text" NAME="sl_num[<?php echo $i; ?>]" size="15" class="addcart" maxlength="30" value="<?php echo $sl_numx[$i]; ?>">
					</FONT>
				</TD>
				-->

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
			if($rowX[wwksize_name]==$sl_numx[$i])
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
					<INPUT TYPE="text" NAME="sl_qty[<?php echo $i; ?>]" size="15" class="addcart" maxlength="30" value="<?php echo $sl_qtyx[$i]; ?>">
					
				</FONT>
			</TD>
		</TR>
		<?php
		$i++;
		}
		?>

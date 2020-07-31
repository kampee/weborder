<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="black">
		&nbsp; <b>Login Session History</b>
		</font>
	</td>
</tr>
</td></tr></table>

</td></tr>
</table>



<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>

<form action="index.php?mod=home&lang=en&smod=pref&tr=3&pst=update" method="post">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="40">
				<?php

				$link_src="index.php?mod=home&lang=en&smod=session";
				if ( !isset($startpage) && !isset($stoppage) ){
					$startpage=0;
					$stoppage=20;
				}

				$wh = "";
				
				/*
				if($session_gid==1){
					$wh = "";
				}else{

					$wh = "where uid='$session_uid'";
				}
				*/

				switch ($session_gid)
				{
					case "1": //admin
						$wh = "";
						break;
					case "2": //super user (CSO)
						$wh = "where cid='$session_cid'";
						break;
					case "3": // users
						$wh = "where uid='$session_uid'";
						break;
					case "4": // manager (customer)
						$wh = "where cid='$session_cid'";
						break;
				}


				$querysum="select * from $wb_tbl_ulog $wh order by ulog_id DESC";
				$resultsum = mysql_db_query($wb_dbname,$querysum);
				$pfound = mysql_num_rows($resultsum);

				$query="select * from $wb_tbl_ulog $wh order by ulog_id DESC limit $startpage,$stoppage";
				$result = mysql_db_query($wb_dbname,$query);
				$lmfound = mysql_num_rows($result);

				?>
			<table width="100%" cellpadding="1" cellspacing="0" border="0">
				<tr>
					<td>
							<TABLE cellSpacing="1" cellPadding="0" width="100%" bgColor="white" border="0">

			                <TR bgcolor="EEEEDD">
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <b>#</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <b>User</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <b>Ip address</b>
									</FONT>
								</TD>
								<TD>
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <b>Login Date/Time</b>
									</FONT>
								</TD>
								<TD>
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
									&nbsp; <b>Logout Date/Time</b>
									</FONT>
								</TD>
							</TR>

					<?php
					$j=1;
					while ( $row = mysql_fetch_array( $result) ) 
					{
						if( $bgcol=="" )
						{
							$bgcol="white";
						}
						if($j==1)
						{
							$go_hook="CHECKED";
						}
						else
						{
							$go_hook="";
						}
					?>
			                <TR VALIGN="MIDDLE" BGCOLOR="<?php echo $bgcol; ?>">
			                    <TD>
									&nbsp; <font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
									<?PHP ECHO shwzero5($row[ulog_id]); ?>
									</font>
								</TD>
				                    <TD>
									&nbsp; <font face="Helvetica Condensed,Arial,verdana,sans-serif" size="1">
									<?php 
										$_uid = $row[uid];
										$queryx="select * from $wb_tbl_users where uid='$_uid'";
										$resultx = mysql_db_query($wb_dbname,$queryx);
										while ( $rowx = mysql_fetch_array( $resultx ) ) {
											echo $rowx[uname];
										} 
									?>
									</font>
								</TD>
			                    <TD>
									&nbsp; <font face="Arial,verdana,sans-serif,Helvetica Condensed" size="1">
									<?php echo $row[ipaddr]."<br>&nbsp; ".$row[ipclient]; ?>
									</font>
								</TD>
								<TD>
									<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="1">
									&nbsp; <?php echo $row[log_stdate]." ".$row[log_sttime]; ?>
									</font>
								</TD>
								<TD>
									<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="1">
									&nbsp; <?php echo $row[log_endate]." ".$row[log_entime]; ?>
									</font>
								</TD>
							</TR>
							<?php
								if($bgcol=="#EEEEEE")
								{
									$bgcol="white";
								}
								else
								{
									$bgcol="#EEEEEE";
								}
								$j++;
							}
							?>
							</TABLE>
					</td>
				</tr>
			</table>
			<?php
			$datafound=$pfound;
			$linkmaster=$link_src;
			$defpages=20;
			include("pagelist.php");
			?>

	</td>
</tr>
</tr>
</form>



</table>

</td></tr></table>


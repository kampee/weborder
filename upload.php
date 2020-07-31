
<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>
<table cellpadding="0" cellspacing="0" border="1" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="3" color="black">
		&nbsp; <b><?php echo _file_upload_txt; ?></b>
		</font>
	</td>
</tr>
</td></tr></table>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="40">

<table cellpadding="1" cellspacing="1" border="0" bordercolor="white" width="100%" bgcolor="white" align="center">
<form action="index.php?mod=home&lang=en&smod=upload&pst=add" name="addprod" method="post" ENCTYPE="multipart/form-data">
		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; File Name
				</font>
			</td>
			<td height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; <INPUT TYPE="text" NAME="file_names" size="60" class="bkoffice">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="top">
			<td bgcolor="white" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; File Details
				</font>
			</td>
			<td bgcolor="white" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; 
				<TEXTAREA NAME="file_desc" ROWS="5" COLS="60" class="bkoffice"></TEXTAREA>
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#CCCCCC" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; Select Your File<BR>
				</font>
			</td>
			<td bgcolor="#E7E7E7" height="20">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; <INPUT TYPE="file" NAME="file_upload" value="Browse" size="50" class="bkoffice">
				</font>
			</td>
		</tr>

		<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
			<td bgcolor="#E4E4E4" height="40" colspan="2" align="center">
				<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
				&nbsp; <INPUT TYPE="submit" value="Upload">
				&nbsp; <INPUT TYPE="reset" value="Reset">
				</font>
			</td>
		</tr>
		</table>

<br>

<?php
if($pst=="add")
{
	SpecLine("100%","center","white","2");
	
	$uploadDir = $files_path;
	if( $file_upload <>"" ){
		if (copy( $file_upload , $uploadDir.$file_upload_name )){
			print "......";
		}
		unlink($file_upload);
	}
	$file_date='';
	$query="INSERT INTO $wb_tbl_files (uid,file_names,file_upload,file_desc,file_date,file_flag)".			
				"VALUES ('$session_uid','$file_names','$file_upload_name','$file_desc',NOW(),'$file_flag')";

	$result = mysql_db_query($wb_dbname,$query);
	if($result)
	{
		AlertMsg("File Uploaded.","index.php?mod=home&lang=en&smod=upload");
	}
	else
	{
		errmess("Failed!!!");
		die;
		echo "</table></td></tr></table>";
	}
}
?>

<br>

<table cellpadding="0" cellspacing="0" border="1" bordercolor="#CCCCCC" width="100%" bgcolor="#FFFFCC">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="#FF6600" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="4" color="white">
		&nbsp; <b>File Manager</b>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="white" height="20">
				<?php

				$link_src="index.php?mod=home&lang=".$lang."&smod=upload";
				if ( !isset($startpage) && !isset($stoppage) ){
					$startpage=0;
					$stoppage=20;
				}

				$querysum="select * from $wb_tbl_files where uid='$session_uid' order by file_date ";
				$resultsum = mysql_db_query($wb_dbname,$querysum);
				$pfound = mysql_num_rows($resultsum);

				$query="select * from $wb_tbl_files where uid='$session_uid' order by file_date limit $startpage,$stoppage";
				$result = mysql_db_query($wb_dbname,$query);
				$lmfound = mysql_num_rows($result);
				?>
			<table  width="100%" cellpadding="1" cellspacing="0" border="0">
				<tr>
					<td bgcolor="#CCCCCC">
						<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="1" color="#FFFFFF">
						&nbsp; Found Result <?php echo $pfound; ?> files.
						</font>
					</td>
				</tr>
				<tr>
					<td>
							<TABLE cellSpacing="1" cellPadding="0" width="100%" bgColor="white" border="0">

			                <TR bgcolor="#FFCC66">
			                    <TD height="20" align="center">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="1">
									&nbsp; #
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="1">
									&nbsp; <b>File Name</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="1">
									&nbsp; <b>Details</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="1">
									&nbsp; <b>Date</b>
									</FONT>
								</TD>
			                    <TD height="20">
									<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="1">
									&nbsp; <b>Flag</b>
									</FONT>
								</TD>
							</TR>

					<?php
					$cnt=1;
					while ( $row = mysql_fetch_array( $result) ) 
					{
						if( $bgcol=="" )
						{
							$bgcol="white";
						}



					?>
			                <TR VALIGN="MIDDLE" BGCOLOR="<?php echo $bgcol; ?>">									
			                    <TD align="center">
									&nbsp; <font face="Helvetica Condensed,Arial,verdana,sans-serif" size="1">
									
									</font>
								</TD>
			                    <TD>
									<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="1">
									&nbsp; <?php echo "<a href='files/$row[file_upload]'>".$row[file_names]."</a>"; ?>
									</font>
								</TD>
			                    <TD>
									<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="1">
									&nbsp; <?php echo $row[file_desc]; ?>
									</font>
								</TD>
			                    <TD>
									<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="1">
									&nbsp; <?php echo $row[file_date]; ?>
									</font>
								</TD>
			                    <TD>
									<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="1">
									&nbsp; <?php echo $row[file_flag]; ?>
									</font>
								</TD>

							</TR>
							<?php
								if($bgcol=="#FFFFCC")
								{
									$bgcol="white";
								}
								else
								{
									$bgcol="#FFFFCC";
								}
								$cnt++;
							}
							?>
							</TABLE>
						<?php
						$datafound=$pfound;
						$linkmaster=$link_src;
						$defpages=20;
						include("pagelist.php");
						?>
					</td>
				</tr>
			</table>
					</td>
				</tr>
			</table>

</td></tr></table>
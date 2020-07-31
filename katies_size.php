<?php
//if( ($row[p_id]==79) OR ($row[p_id]==163) )
if( ($size_flag==1))
{
	$s_size_link = "";
	switch($session_cid)
	{
		case "11": //CWF
			$s_size_link = "cwf_size_form.php?cart_id=$row[cart_id]&cart_qty=$row[p_qty]&pid=$row[p_id]";
			break;
		case "12": //WWK
			$s_size_link = "wwk_size_form.php?cart_id=$row[cart_id]&cart_qty=$row[p_qty]&pid=$row[p_id]";
			break;
		default: //Katies and Others 
			$s_size_link = "katies_size_form.php?cart_id=$row[cart_id]&cart_qty=$row[p_qty]&pid=$row[p_id]";
	}

?>

<TR VALIGN="MIDDLE" BGCOLOR="EEEEDD">
	<TD COLSPAN="6" height="20">
		<font face="verdana,arial" size="2" color="red">
		<b>
		&nbsp; UPDATE SIZE LABEL VARIABLES
		</b>
		</font>
	</TD>
</TR>
<TR VALIGN="MIDDLE" BGCOLOR="EEEEDD">
	<TD COLSPAN="6" height="320">
		<iframe width="100%" id="sizeApps" height="350" SRC="<?php echo $s_size_link; ?>" name="SizeMain"  FRAMEBORDER=0 scrolling=AUTO></iframe> 
	</TD>
</TR>

<?php
}
?>
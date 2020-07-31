<?php
if( ($row[p_id]==79) OR ($row[p_id]==163) )
{
?>

<TR VALIGN="MIDDLE" BGCOLOR="#66CC33">
	<TD COLSPAN="6" height="20">
		<font face="verdana,arial" size="2" color="white">
		<b>
		&nbsp; UPDATE SIZE LABEL VARIABLES
		</b>
		</font>
	</TD>
</TR>
<TR VALIGN="MIDDLE" BGCOLOR="#FFFFEA">
	<TD COLSPAN="6" height="320">
		<iframe width="100%" id="sizeApps" height="320" SRC="katies_size_form.php?<?php echo "cart_id=$row[cart_id]&cart_qty=$row[p_qty]&pid=$row[p_id]"; ?>" name="SizeMain"  FRAMEBORDER=0 scrolling=AUTO></iframe> 
	</TD>
</TR>

<?php
}
?>
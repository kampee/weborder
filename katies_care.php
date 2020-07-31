<?php
// KCARE
if( ($care_flag==1))
{
?>
<TR VALIGN="MIDDLE" BGCOLOR="#CCCC99">
	<TD COLSPAN="6" height="20">
		<font face="verdana,arial" size="2" color="white">
		<b>
		&nbsp; UPDATE CARE LABEL VARIABLES
		</b>
		</font>
	</TD>
</TR>
<TR VALIGN="MIDDLE" BGCOLOR="#FFFFEA">
	<TD COLSPAN="6" height="420">
		<iframe width="100%" id="appsData" height="420" SRC="katies_care_form.php?<?php echo "cart_id=$row[cart_id]&cart_qty=$row[p_qty]&pid=$row[p_id]"; ?>" name="MainData"  FRAMEBORDER=0 scrolling=AUTO></iframe> 
	</TD>
</TR>
<?php
}
?>
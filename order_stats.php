<?php

if($smod=="view_cart")
{
	$bg_stats1="EEEEDD";
}
else
{
	$bg_stats1="white";
}
if($smod=="order")
{
	$bg_stats2="EEEEDD";
}
else
{
	$bg_stats2="white";
}
if($smod=="payment")
{
	$bg_stats3="EEEEDD";
}
else
{
	$bg_stats3="white";
}
if($smod=="confirm")
{
	$bg_stats4="EEEEDD";
}
else
{
	$bg_stats4="white";
}

?>

<table cellpadding="0" cellspacing="0" border="0" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="<?php echo $bg_stats1; ?>" height="22">
		<font face="arial" size="2" ><b>
		&nbsp; <?php echo $_order_status1_txt; ?>
		</font></b>
	</td>
	<td bgcolor="<?php echo $bg_stats2; ?>">
		<font face="arial" size="2">
		&nbsp; <?php echo $_order_status2_txt; ?>
		</font>
	</td>
	<td bgcolor="<?php echo $bg_stats3; ?>">
		<font face="arial" size="2" >
		&nbsp; <?php echo $_order_status3_txt; ?>
		</font>
	</td>
	<td bgcolor="<?php echo $bg_stats4; ?>">
		<font face="arial" size="2">
		&nbsp; <?php echo $_order_status4_txt; ?>
		</font>
	</td>
</tr>
</table>

<?php
SpecLine("100%","center","EEEEDD","2");
SpecLine("100%","center","white","5");
?>
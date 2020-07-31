<?php

if($smod=="view_cart")
{
	$bg_stats1="#FF9900";
}
else
{
	$bg_stats1="#FDF3D0";
}
if($smod=="order")
{
	$bg_stats2="#FF9900";
}
else
{
	$bg_stats2="#FDF3D0";
}
if($smod=="payment")
{
	$bg_stats3="#FF9900";
}
else
{
	$bg_stats3="#FDF3D0";
}
if($smod=="confirm")
{
	$bg_stats4="#FF9900";
}
else
{
	$bg_stats4="#FDF3D0";
}

?>

<table cellpadding="0" cellspacing="0" border="0" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="<?php echo $bg_stats1; ?>" height="22">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" ><b>
		&nbsp; <?php echo $_order_status1_txt; ?>
		</font></b>
	</td>
	<td bgcolor="<?php echo $bg_stats2; ?>">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <?php echo $_order_status2_txt; ?>
		</font>
	</td>
	<td bgcolor="<?php echo $bg_stats3; ?>">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" >
		&nbsp; <?php echo $_order_status3_txt; ?>
		</font>
	</td>
	<td bgcolor="<?php echo $bg_stats4; ?>">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <?php echo $_order_status4_txt; ?>
		</font>
	</td>
</tr>
</table>

<?php
SpecLine("100%","center","#FF9900","2");
SpecLine("100%","center","white","5");
?>
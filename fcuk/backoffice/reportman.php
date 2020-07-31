<table border="0" cellspacing="0" cellpadding="0" width="100%" align="center"><tr><td>


<table cellpadding="0" cellspacing="0" border="1" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6" align="center">
<form action="index.php?mod=home&lang=en&smod=reportman&mode=admin&opt=query" method="post" name="form1"> 
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="20" colspan="4">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="4" color="#CC0000">
		&nbsp; <b>Query & Report</b>
		</font>
	</td>
</tr>

<?php
$st_global_date=substr($regdate,0,8)."01";
?>


<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="25">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Start Date</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" COLOR="GRAY">
		&nbsp; <INPUT TYPE="text" NAME="start_date" size="12" class="bkoffice" value="<?php echo $st_global_date; ?>">
		<a href="javascript:void(0)" onClick="javascript:popUpCalendar(this, form1.start_date, 'yyyy-mm-dd');"><img src="includes/popup-calendar/images/cal.gif" border=0></a></font>
	</td>
	<td bgcolor="EEEEDD" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>End Date</b>
		</font>
	</td>
	<td bgcolor="white" height="20">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2" color="gray">
		&nbsp; <INPUT TYPE="text" NAME="end_date" size="12" class="bkoffice" value="<?php echo $regdate; ?>">
		<a href="javascript:void(0)" onClick="javascript:popUpCalendar(this, form1.end_date, 'yyyy-mm-dd');"><img src="includes/popup-calendar/images/cal.gif" border=0></a>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="25">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Factories</b>
		</font>
	</td>
	<td bgcolor="white" height="20" colspan=3>
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; 
		<select name="bbn" class="bkoffice">
			<option value="">---All Factories---</a>
			<?php
			$queryf="select * from $wb_tbl_users where cid='$session_cid' order by ufname";
			$resultf = mysql_db_query($wb_dbname,$queryf);
			while ( $rowf = mysql_fetch_array( $resultf ) ) 
			{
				echo "<OPTION VALUE=\"$rowf[uid]\">$rowf[ufname]($rowf[uname])</OPTION>";
			}
			?>
		</select>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="25">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Order Status</b>
		</font>
	</td>
	<td bgcolor="white" height="20" colspan=3>
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; 
		<select name="status" class="bkoffice">
			<option value="">---All Status---</a>
			<?php
			$queryo="select * from $wb_tbl_ostatus ";
			$resulto = mysql_db_query($wb_dbname,$queryo);
			while ( $rowo = mysql_fetch_array( $resulto ) ) 
			{
				echo "<OPTION VALUE=\"$row[os_id]\">$rowo[os_name] ($rowo[os_code])</OPTION>";
			}
			?>
		</select>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="25">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <b>Sort Option</b>
		</font>
	</td>
	<td bgcolor="white" height="20" colspan=3>
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		&nbsp; <INPUT TYPE="radio" NAME="sort_opt" value="date" CHECKED>Date
		<INPUT TYPE="radio" NAME="sort_opt" value="uid">Factories
		<INPUT TYPE="radio" NAME="sort_opt" value="status">Order Status
		</font>
	</td>
</tr>


<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="30" colspan="4" align="center">
		<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
		<INPUT TYPE="submit" value="Run Query">
		</font>
	</td>
</tr>
</form>
</table>

<br>
<?php
if($opt=="query")
{
	$where_data="";
	if( !empty($_POST[start_date] ))
	{
		$where_data.="a.order_date>='".$_POST[start_date]."'";
	}
	if( !empty($_POST[end_date] ))
	{
		$where_data.=" and a.order_date<='".$_POST[end_date]."'";
	}
	if( !empty($_POST[bbn] ))
	{
		$where_data.=" and a.order_uid='".$_POST[bbn]."'";
	}
	if( !empty($_POST[status] ))
	{
		$where_data.=" and a.order_process='".$_POST[status]."'";
	}
	$where_data.=" and a.order_cid='$session_cid' and a.order_uid=b.uid and a.order_process=c.os_id";

	$sort_data="";
	switch($_POST[sort_opt])
	{
		case "date":
			$sort_data.="a.order_date";
			break;
		case "uid":
			$sort_data.="b.uname";
			break;
		case "status":
			$sort_data.="c.os_name";
			break;
	}
?>

<table  cellpadding="0" cellspacing="0" border="0" bgcolor="white" width="100%" align="center"><tr><td>
<TABLE cellSpacing="2" cellPadding="2" width="100%" bgColor="white" border="0" align="center">
	<TR bgcolor="#C0C0C0">
		<TD height="20" COLSPAN=8>
			<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="4" color="black">
			&nbsp;&nbsp;<b>Order Summary Report</b>
			</FONT>
		</TD>
	</TR>
	<TR bgcolor="#E9E9E9">
		<TD height="20">
			<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
			&nbsp;&nbsp; <b>Order No.</b>
			</FONT>
		</TD>
		<TD height="20">
			<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
			&nbsp; <b>Factories</b>
			</FONT>
		</TD>
		<TD height="20">
			<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
			&nbsp; <b>Date</b>
			</FONT>
		</TD>
		<TD height="20" align="right">
			<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
			&nbsp; <b>Qty.</b> &nbsp;
			</FONT>
		</TD>
		<TD height="20" align="right">
			<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
			&nbsp; <b>Amount</b> &nbsp;
			</FONT>
		</TD>
		<TD>
			<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="2">
			&nbsp; <b>OS</b>
			</FONT>
		</TD>
	</TR>
	<?php
	
	$query="select a.*,b.uname,c.os_name,c.os_code from $wb_tbl_order a, $wb_tbl_users b,$wb_tbl_ostatus c ".
				"where ".$where_data." order by ".$sort_data ;

	$result = mysql_db_query($wb_dbname,$query);
	while ( $row = mysql_fetch_array( $result ) ) 
	{
		if( $bgcol=="" )
		{
			$bgcol="white";
		}
	?>
	<TR VALIGN="MIDDLE" BGCOLOR="<?php echo $bgcol; ?>">
		<TD>
			&nbsp; <font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
			<?php echo addzero5($row[order_id]); ?><?php echo addzero3($row[order_cid]);  ?>
			</font>
		</TD>
		<TD>
			<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
			&nbsp; 
			<?php 
					echo $row[uname]; 
			?>
			</font>
		</TD>
		<TD>
			<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
			&nbsp; <?php echo $row[order_date]; ?>
			</font>
		</TD>
		<TD ALIGN="right">
			<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
			&nbsp; <?php echo number_format($row[order_qty]); ?> &nbsp;
			</font>
		</TD>
		<TD ALIGN="right">
			<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
			&nbsp; <?php chkcursy($row[order_cur],$row[order_amt]); ?> &nbsp;
			</font>
		</TD>
		<TD>
			<font face="Helvetica Condensed,Arial,verdana,sans-serif" size="2">
			&nbsp; 
			<?php
				echo "<a href=\"vieworder.php?order_id=$row[order_id]&rd=".rand()."&sid=$row[order_sid]\" target=\"_blank\">$row[os_name]</a>";
				//echo "<a href=\"index.php?mod=home&lang=$lang&smod=view_order&order_id=$row[order_id]\">$row[os_code]</a>";
			?>			
			</font>
		</TD>
	</TR>
		<?php
		if($bgcol=="#E0F2FC")
		{
			$bgcol="white";
		}
		else
		{
			$bgcol="#E0F2FC";
		}
	}
?>
</TABLE>
</td></tr></table>

<?php
}
?>

</td></tr></table>
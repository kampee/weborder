<?php
//global $stk_go; 

if($session_cid==8)	
{
	switch($session_lang)
	{
		case "en":
			define(_systitle,"CLW Web Ordering System 4.0");				
			break;
		case "fr":
			define(_systitle,"CLW Syste'me de commande en ligne 4.0");
			break;
		default:
			define(_systitle,"CLW Web Ordering System 4.0");
							
	}
}
else
{
	define(_systitle,"CLW Web Ordering System 4.0");
}	
?>

<br>
<table border="0" cellspacing="0" cellpadding="0" width="700" align="center"><tr><td>
<table cellpadding="0" cellspacing="0" border="1" bordercolor="#c0c0c0" width="100%" bgcolor="F9F9F6">
<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="50" align="center">
		<font face="arial" size="5" color="#CC0000">
		&nbsp;<b><?php echo _systitle; ?></b>
		</font>
	</td>
</tr>

<tr bordercolordark="#ffffff" bordercolorlight="gray" valign="middle">
	<td bgcolor="EEEEDD" height="40" align="center">
		<font face="arial" size="2">
	<?php
		if($session_gid==1)
		{
			echo "<br><form action=\"index.php?mod=init\" method=\"post\">";
			echo "<b>Choose Clients : </b>";
			echo "<select name=\"cid\" class=\"grayform\">";
			$queryx="select * from $wb_tbl_clients";
			$resultx = mysql_db_query($wb_dbname,$queryx);
			while ( $rowx = mysql_fetch_array( $resultx ) ) 
			{
				echo "<option value=\"$rowx[cid]\">$rowx[cname]</option>";
			}
			echo "</select>";
			echo "&nbsp; <INPUT TYPE=\"submit\" value=\"Go\" class=\"grayform\">";
			echo "</form>";
		}
		else
		{
			include("init.php");
		}
	?>
		</font>
	</td>
</tr>
</table>
</td></tr></table>
<?php
// Copyright by kampee@clwglobal.com 
session_start();
include("includes/config.inc.php");
include("lang.php");
LoginAuth();
DBConn("mysql");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE><?php echo $weborder_version; ?></TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="Kampee Sridavong">
<META NAME="Keywords" CONTENT="clw,web,order">
<META NAME="Description" CONTENT="<?php echo $weborder_version; ?>">
<script language='javascript' src='includes/popup-calendar/popcalendar.js'></script>

<SCRIPT SRC="includes/wb.js"></SCRIPT>
<script>
function mOvr(src,clrOver){ 
	if (!src.contains(event.fromElement)){ 
		src.style.cursor = 'hand'; 
		src.bgColor = clrOver; 
	} 
} 
function mOut(src,clrIn){ 
	if (!src.contains(event.toElement)){ 
		src.style.cursor = 'default'; 
		src.bgColor = clrIn; 
	} 
} 
function mClk(src){ 
	if(event.srcElement.tagName=='TD')
		src.children.tags('A')[0].click();
}
</script>
<link rel="stylesheet" href="includes/wb.css" type="text/css">
<style type="text/css"></style>
</HEAD>

<!--
<BODY BGCOLOR="#CCCCCC" BACKGROUND="images/clwb2.gif" topmargin="2" leftmargin="2">
-->
<BODY BGCOLOR="#CCCCCC" topmargin="2" leftmargin="2">

<?php
	switch($mod)
	{
		case "login":
			include("login_auth.php");
			break;
		case "logout":
			$query_u="UPDATE $wb_tbl_ulog SET ".
					"log_endate='$regdate',".
					"log_entime='$regtime' ".
					"where uid='$session_uid' and sess_id='$PHPSESSID' and ulog_id='$session_ulog'";
			$result_u = mysql_db_query($wb_dbname,$query_u);

			session_destroy();
			AlertMsgOnly("index.php");
			die;
			break;
		case "home":
			include("home.php");
			break;
		case "init":
			$session_cid=$_POST[cid];
			include("init_head.php");
			include("init.php");
			include("init_foot.php");
			break;
		default:
			include("login.php");
	}
?>

</BODY>
</HTML>

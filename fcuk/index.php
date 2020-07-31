<?php
// Copyright by Krieng kampee@phana.net
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

<?php
/*if(!empty($mod))
{*/
?>
<META HTTP-EQUIV="REFRESH" CONTENT="3600; URL=index.php?mod=timeout">
<?php
//}
?>

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
<script language='javascript' src='includes/popup-calendar/popcalendar.js'></script>
<link rel="stylesheet" href="includes/wb.css" type="text/css">
<style type="text/css"></style>
</HEAD>
<BODY BGCOLOR="#CCCCCC" topmargin="2" leftmargin="2">

<?php
	switch($mod)
	{
		case "login":
			include("login_auth.php");
			break;
		case "logout":
			session_destroy();
			AlertMsgOnly("index.php");
			die;
			break;
		case "timeout":
			session_destroy();
			echo "<font color=red size=+2><b>";
			echo "Session has been time out, Please try to login again <a href=\"index.php\"><font size=+2>Re-Login</font></a>";
			//echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"2; URL=index.php\">";
			echo "</font></b>";		
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

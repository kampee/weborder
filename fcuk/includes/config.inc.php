<?php
/* CLW Web Ordering Configuration file
    Start 01-03-2005
    Copyright by Krieng - kampee@phana.net
	This source code is generate by our default program
*/

$weborder_version="CLW Web Ordering System";

// MySQL Database 
$wb_server="localhost";	// Servername
$wb_user="weborder"; // Database user
$wb_password="wb234"; // Database password
$wb_dbname="weborder_fcuk"; // Database name


// Customer Referrence for Session Security Checking
$cus_session="wb_";

// Date and Time
$regdate=date("Y-m-d");
$regtime=date("h:i:s");

// Random Code
$wb_rand_code=rand()."%".date("YMD").date("h,i,s");

//randdom password 
$wb_rand_pass=rand();

// IP Environment
$wb_remote_ipaddress=GETENV("REMOTE_ADDR");

// Database Tables
$wb_tbl_clients="wb_clients";	// Clients
$wb_tbl_users="wb_users";	// Users
$wb_tbl_group="wb_group"; // Group
$wb_tbl_language="wb_language"; // Language
$wb_tbl_product="wb_product"; // Product
$wb_tbl_pgroup="wb_pgroup"; // Product Group
$wb_tbl_currency="wb_currency"; // Currency
$wb_tbl_cart="wb_cart"; // Cart
$wb_tbl_order="wb_order"; // Order
$wb_tbl_setting="wb_setting"; // Setting
$wb_tbl_ostatus="wb_ostatus"; // Order Status
$wb_tbl_address="wb_address"; // multi address
$wb_tbl_stock="wb_stock"; // Stock
$wb_tbl_slpr="wb_slpr"; // Cerrer Order form 1
$wb_tbl_slse="wb_slse"; // Cerrer Order form 1
$wb_tbl_ccpr="wb_ccpr"; // Cerrer Order form 2
$wb_tbl_ccse="wb_ccse"; // Cerrer Order form 2
$wb_tbl_katcar_pr="wb_katcar_pr";
$wb_tbl_katcar_se="wb_katcar_se";
$wb_tbl_files="wb_files"; // File Upload





// Forgot password
$forgot_password_subject = "Your email & password";
$wb_contact_email = "info@ppat.or.th,kampee@phana.net";

// files directory
$full_path = "/HI/www/webhost/hostinspire/go/ppat.or.th/htdocs/";
$files_path = "files/";
$files_path_pictures ="pictures/";


// standard font for admin page 
$std_font_admin="arial, ms sans serif, Tahoma, sans-serif";

/*******************************
	Class & Function for web application
*******************************/

// Error Messages and no return 
function errmessnrt($messages){
	echo "<div align=left>";
	echo "<font face=\"Helvetica Condensed,Arial,verdana,sans-serif\" size=\"2\" color=\"red\">";
	echo "<b>$mess</b>"."<br>";
	echo "</font>";
	echo "</div>";
	echo "<br>";
}

// Error Messages
function errmess($mess){
	echo "<BR><div align=center>";
	echo "<font face=\"Helvetica Condensed,Arial,verdana,sans-serif\" size=\"2\" color=\"red\">";
	echo "<b>$mess</b>"."<br>";
	echo "<a href=\"javascript:window.history.back()\">BACK...</a>";
	echo "</font>";
	echo "</div>";
	echo "<br>";
}

// Add zero before real numberic in 6 numberics
function addzero6($amt) {
	$amt0=strlen($amt);
	if ( $amt0=="1" ) {
		$amt="00000".$amt;
		echo $amt;
	}elseif ( $amt0=="2" ) {
		$amt="0000".$amt;
		echo $amt;
	}elseif ( $amt0=="3" ) {
		$amt="000".$amt;
		echo $amt;
	}elseif ( $amt0=="4" ) {
		$amt="00".$amt;
		echo $amt;
	}elseif ( $amt0=="5" ) {
		$amt="0".$amt;
		echo $amt;
	}elseif ( $amt0=="6" ) {
		$amt=$amt;
		echo $amt;
	}
}
function addzero5($amt) {
	$amt0=strlen($amt);
	if ( $amt0=="1" ) {
		$amt="0000".$amt;
		echo $amt;
	}elseif ( $amt0=="2" ) {
		$amt="000".$amt;
		echo $amt;
	}elseif ( $amt0=="3" ) {
		$amt="00".$amt;
		echo $amt;
	}elseif ( $amt0=="4" ) {
		$amt="0".$amt;
		echo $amt;
	}elseif ( $amt0=="5" ) {
		$amt=$amt;
		echo $amt;
	}
}
function shwzero5($amt) {
	$amt0=strlen($amt);
	if ( $amt0=="1" ) {
		$amt="0000".$amt;
	}elseif ( $amt0=="2" ) {
		$amt="000".$amt;
	}elseif ( $amt0=="3" ) {
		$amt="00".$amt;
	}elseif ( $amt0=="4" ) {
		$amt="0".$amt;
	}elseif ( $amt0=="5" ) {
		$amt=$amt;
	}
	return $amt;
}
function addzero3($amt) {
	$amt0=strlen($amt);
	if ( $amt0=="1" ) {
		$amt="00".$amt;
		echo $amt;
	}elseif ( $amt0=="2" ) {
		$amt="0".$amt;
		echo $amt;
	}elseif ( $amt0=="3" ) {
		$amt=$amt;
		echo $amt;
	}
}
function shwzero3($amt) {
	$amt0=strlen($amt);
	if ( $amt0=="1" ) {
		$amt="00".$amt;
	}elseif ( $amt0=="2" ) {
		$amt="0".$amt;
	}elseif ( $amt0=="3" ) {
		$amt=$amt;
	}
	return $amt;
}

// Connect to Database SQL
function DBConn($type) {
	global $wb_server,$wb_user,$wb_password;
	if ( $type=="mysql" ) {
		$link = mysql_connect($wb_server, $wb_user , $wb_password );
		if ( !$link ) {
			echo "<br><br><div align=center>";
			echo "<font color=red size=4>";
			echo "<b>Can't Link to Databases</b>";
			echo "</font>";
			echo "</div>";
			die();
			}
		mysql_select_db( $wb_dbname,$link);
	}
}

// Spec Line
function SpecLine($width,$align,$bgcolor,$height){
	echo "<table width=".$width." border=0 cellspacing=0 cellpadding=0 align=".$align."><tr><td bgcolor=".$bgcolor." colspan=4><img width=1 height=".$height." alt=\"\"></td></tr></table>";
}

// Login for login
function LoginAuth()
{
	session_register("session_uid");
	session_register("session_gid");
	session_register("session_cid");
	session_register("session_user");
	session_register("session_pass");
	session_register("session_real");
	session_register("session_lang");
	session_register("session_ccode");
	session_register("session_cname");
	session_register("session_scur");
}

// check session
function CheckSession($uid,$email,$pass){
	if ( empty($uid) && empty($cid) && empty($pass) ) {
		//print "<script language=\"javascript\">";
		//print "javascript:if (alert('Please login as your username and password ?')) location.href='index.php';";
		//print "</script>";
		//Header("Location: index.php");
		//echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"0; URL=index.php\">";
		session_destroy();
		echo "<font color=red size=+2><b></center>";
		echo "You don't have permission to access this page, Please try to login again <a href=\"index.php\"><font size=+2>Login</font></a>";
		echo "</font></b></center>";		
		die();
	}
}

// year 2 chars
function year2c($date_format){
	echo	substr($date_format,8,2)."-".substr($date_format,5,2)."-".substr($date_format,2,2);
}

// Date full dmonthname dd, yyyy 
function DateTextNews($date){
	$mmn=substr($date,5,2);
	if ($mmn=="1"){
		$mmname="January";
	}elseif ($mmn=="2"){
		$mmname="February";
	}elseif ($mmn=="3"){
		$mmname="March";
	}elseif ($mmn=="4"){
		$mmname="April";
	}elseif ($mmn=="5"){
		$mmname="May";
	}elseif ($mmn=="6"){
		$mmname="June";
	}elseif ($mmn=="7"){
		$mmname="July";
	}elseif ($mmn=="8"){
		$mmname="August";
	}elseif ($mmn=="9"){
		$mmname="Sepember";
	}elseif ($mmn=="10"){
		$mmname="October";
	}elseif ($mmn=="11"){
		$mmname="November";
	}elseif ($mmn=="12"){
		$mmname="December";
	}	
	echo $mmname." ".substr($date,8,2).", ".substr($date,0,4);
}

//alert msg box
function AlertMsg($msg,$return_to){
	print "<script language=\"javascript\">";
	print "javascript:if (alert('$msg'));";
	print "location.href='$return_to';";
	print "</script>";
	//echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"0; URL=$return_to\">";
}

//alert msg only
function AlertMsgOnly($return_to){
	//echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"0; URL=$return_to\">";
	print "<script language=\"javascript\">";
	print "location.href='$return_to';";
	print "</script>";
}

function FindLANG($lang){
	switch($lang)
	{
		case "en":
			include("languages/en/main-en.inc.php");
			break;
		case "th":
			include("languages/th/main-th.inc.php");
			break;
		default:
			include("languages/en/main-en.inc.php");
	}
}


function FindLANGBackOffice($lang){
	switch($lang)
	{
		case "en":
			include("../languages/en/backoffice_home.php");
			break;
		case "th":
			include("../languages/th/backoffice_home.php");
			break;
		default:
			include("../languages/en/backoffice_home.php");
	}
}

// Page Lists
function PageList($datafound,$linkmaster)
{
	if($datafound>0)
	{
		$pages=5;
		$web_found=$datafound;
		$pageall=ceil($web_found/$pages);
		if ($web_found>$pages)
		{
			echo "<div align=\"center\"><br><b>";
			echo "<table width=100% align=center border=0 bgcolor=#E4E4E4>";
			echo "	<tr valign=middle>";
			echo "		<td>";
			echo "			<b><font size=\"2\" face=\"Helvetica Condensed,Arial,verdana,sans-serif\" color=\"RED\"><font color=black>Page : </font>";

			if ($startpage==$pages)
			{
				$pageprev=0;
				echo "<a href=\"".$linkmaster."&startpage=$pageprev&stoppage=$stoppage\"><font size=\"2\" face=\"Helvetica Condensed,Arial,verdana,sans-serif\" color=\"RED\">Previous</font></a> ";
			}
			elseif ($startpage>$pages)
			{
				$pageprev=$startpage-$pages;
				echo "<a href=\"".$linkmaster."&startpage=$pageprev&stoppage=$stoppage\"><font size=\"2\" face=\"Helvetica Condensed,Arial,verdana,sans-serif\" color=\"RED\">Previous</font></a> &nbsp;";
			}

			if ($startpage==0)
			{
				echo "<font size=\"2\" face=\"Helvetica Condensed,Arial,verdana,sans-serif\" color=\"RED\"><b>1</b></font>&nbsp;";
			}
			else
			{
				echo "<a href=\"".$linkmaster."&startpage=0&stoppage=$stoppage\">1</a>&nbsp;";
			}

			for ($x>=$pages; $x<=$web_found; $x)
			{
				$x=$x+$pages;
				$pagereal=(($x/$pages)+1);
				if ($startpage==$x)
				{
					echo "<font size=\"2\" face=\"Helvetica Condensed,Arial,verdana,sans-serif\" color=\"RED\"><b>".(($x/$pages)+1)."</b></font>&nbsp;";
				}
				else
				{
					if ($pagereal<=$pageall)
					{
						echo "<a href=\"".$linkmaster."&startpage=$x&stoppage=$stoppage\">$pagereal</a>&nbsp;";
					}
				}
			}		
			if ($startpage<$x-$pages)
			{
				$pagenext=$startpage+$pages;
				echo "<a href=\"".$linkmaster."&startpage=$pagenext&stoppage=$stoppage\"><font size=\"2\" face=\"Helvetica Condensed,Arial,verdana,sans-serif\" color=\"RED\">Next</font></a>";
			}

		echo "			</font></b>";
		echo "		</td>";
		echo "	</tr>";
		echo "	</table>";
		echo "</b></div>";
		}
	}
}


function chkcursy($sy,$price)
{
	echo "<b>";
	switch($sy)
	{
		case "EUR":
			echo "<font color=\"#CC0000\">";
			echo "&euro; ".number_format($price,2);
			echo "</font>";
			break;
		case "USD":
			echo "<font color=\"#009900\">";
			echo "US $ ".number_format($price,2);
			echo "</font>";
			break;
		case "HKD":
			echo "<font color=\"#0000FF\">";
			echo "HK $ ".number_format($price,2);
			echo "</font>";
			break;
		case "POUND":
			echo "<font color=\"#FF6600\">";
			echo "&pound; ".number_format($price,2);
			echo "</font>";
			break;
	}
	echo "</b>";
}

// check currency and prices 0-1
function addcnp($s_cur,$c_cur,$c_cur1,$c_price,$c_price1)
{
	global $a_cur,$a_price;
	$cur_list = array("POUND","EUR","USD","HKD");
	for($i=0; $i<4; $i++)
	{
		switch($s_cur)
		{
		case $cur_list[$i]:
			$a_cur=$cur_list[$i];
			if($c_cur==$cur_list[$i])
			{
				$a_price=$c_price;
			}
			if($c_cur1==$cur_list[$i])
			{				
				$a_price=$c_price1;
			}						
			break;
		}
	}
	return true;
}

?>

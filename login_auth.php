<?php
	$query="select * from $wb_tbl_users where uname='$_POST[user]' and upass='$_POST[pass]'";
	$result = mysql_db_query($wb_dbname,$query);
	$ep_found = mysql_num_rows($result);
	if ($ep_found==0) {
		AlertMsg("Incorrect user and password !","index.php");
		die;
	}
	while ( $row = mysql_fetch_array( $result ) ) {
		if ($row[status]=="1"){
			AlertMsg("$_POST[user] is temporary disabled !","index.php");
			die;
		}
		if ( $_POST[user]==$row[uname] ) {
			$session_uid=$row[uid];
			$session_gid=$row[gid];
			$session_cid=$row[cid];
			$session_bid=$row[bid];
			$session_user=$row[uname];
			$session_pass=$row[upass];
			$session_real=$row[ufname]." ".$row[ulname];
			$session_lang=$_POST[langid];
			$session_scur=$row[scur];
			//AlertMsg("Welcome, $session_real to CLW Web Ordering System","index.php?mod=home&lang=$session_lang");
			//AlertMsgOnly("index.php?mod=home&lang=$session_lang");

			$query_log="INSERT INTO $wb_tbl_ulog (cid,uid,ipaddr,ipclient,sess_id,log_stdate,log_sttime)".
				"VALUES ('$session_cid','$session_uid','$wb_remote_ipaddress','$wb_remote_client','$PHPSESSID','$regdate','$regtime')";
			$result_log = mysql_db_query($wb_dbname,$query_log);

			$queryx="select max(ulog_id) from $wb_tbl_ulog where uid='$session_uid' and sess_id='$PHPSESSID'";
			$resultx = mysql_db_query($wb_dbname,$queryx);
			while ( $rowx = mysql_fetch_array( $resultx ) ) {
				$session_ulog=$rowx[0];
			}

			if($_POST[langid]=="fr")
			{
				if($session_cid<>8)
				{
					AlertMsg("Frence version isn\'t allow for your account. Please try on English version","index.php");
					die;
				}
			}

			include("ins.php");
			//die;
		}
	}
?>
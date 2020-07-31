<?php
		
		$ar1 = $_REQUEST['cart_id'];
		$ar2 = $_REQUEST['p_id'];
		$ar3 = $_REQUEST['p_qty'];
		
		$chkcnt=1;
		for($i=0; $i<$lmfound; $i++)
		{
			if($cart_id[$i]=="on")
			{
				/*
				if($p_qty[$i]==0)
				{
					echo "<script>alert('Please enter QTY.');location.href='index.php?mod=home&lang=$lang&smod=list';</script>";
					die;
				}	
				*/
				$p_qty[$i]=1;
				$query="insert into $wb_tbl_cart (sess_id,uid,cid,p_id,p_qty,cart_date,".
				"cart_time,cart_ip) ".
				"values('$PHPSESSID','$session_uid','$session_cid','$p_id[$i]',".
				"'$p_qty[$i]','$regdate',".
				"'$regtime','$wb_remote_ipaddress')";		
				$result = mysql_db_query($wb_dbname,$query);	
				
				//$queryp="select * from $wb_tbl_product where pid='$row[p_id]' ";
				//$resultp = mysql_db_query($wb_dbname,$queryp);				
				
			}
			else
			{
				if(($p_qty[$i]>0))
				{
					echo "<script>alert('Please tick on checked box');location.href='index.php?mod=home&lang=$lang&smod=list';</script>";
					die;
				}
			}
			$chkcnt++;
		}											
		echo "<script>location.href='index.php?mod=home&lang=$lang&smod=view_cart';</script>";
?>
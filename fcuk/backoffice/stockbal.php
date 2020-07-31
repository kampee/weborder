<?php
// $stk_id
						//Openning stock
						$query_O="select sum(stock_qty) from $wb_tbl_stock where stock_pid='$stk_id' and stock_type='O' ";
						$result_O = mysql_db_query($wb_dbname,$query_O);
						while ( $row_O = mysql_fetch_array( $result_O) ) 
						{
							$sum_openning=$row_O[0];
						}

						//Received stock
						$query_R="select sum(stock_qty) from $wb_tbl_stock where stock_pid='$stk_id' and stock_type='R' ";
						$result_R = mysql_db_query($wb_dbname,$query_R);
						while ( $row_R = mysql_fetch_array( $result_R) ) 
						{
							$sum_received=$row_R[0];
						}

						//Issued stock
						$query_I="select sum(stock_qty) from $wb_tbl_stock where stock_pid='$stk_id' and stock_type='I' ";
						$result_I = mysql_db_query($wb_dbname,$query_I);
						while ( $row_I = mysql_fetch_array( $result_I) ) 
						{
							$sum_issued=$row_I[0];
						}
						$query_C="select sum(p_qty) from $wb_tbl_cart where p_id='$stk_id' and cart_flag='1' ";
						$result_C= mysql_db_query($wb_dbname,$query_C);
						while ( $row_C = mysql_fetch_array( $result_C) ) 
						{
							$sum_issued=$sum_issued+$row_C[0];
						}

						//adjust stock
						$query_A="select sum(stock_qty) from $wb_tbl_stock where stock_pid='$stk_id' and stock_type='A' ";
						$result_A = mysql_db_query($wb_dbname,$query_A);
						while ( $row_A = mysql_fetch_array( $result_A) ) 
						{
							$sum_adjust=$row_A[0];
						}
						
						$sum_bal=$sum_openning+$sum_received-$sum_issued+$sum_adjust;

?>
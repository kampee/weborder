<?php
			$querys="select * from $wb_tbl_clients where cid='$session_cid' ";
			$results = mysql_db_query($wb_dbname,$querys);
			$f = mysql_num_rows($results);
			while ( $rows = mysql_fetch_array( $results ) ) 
			{
				if($session_cid==8)
				{
					switch($session_lang)
					{
						case "en":
							echo $rows[csc];	
							define(_iabutton,"I Agree");
							define(_nabutton,"Not Agree");
							break;
						case "fr":
							echo $rows[csc_fr];	
							define(_iabutton,"J'accepte");
							define(_nabutton,"Je n'accepte pas");
							break;
						default:
							echo $rows[csc];	
							define(_iabutton,"I Agree");
							define(_nabutton,"Not Agree");
					}
				}
				else
				{
					echo $rows[csc];	
					define(_iabutton,"I Agree");
					define(_nabutton,"Not Agree");
				}
				$session_code=$rows[ccode];
				$session_cname=$rows[cname];
			}
			echo "<br>";
			echo "<form>";
			echo "<INPUT TYPE=\"button\" value=\""._iabutton."\" onClick=\"location.href='index.php?mod=home&lang=$session_lang';\" class=\"grayform\">";
			echo "&nbsp;&nbsp;";
			echo "<INPUT TYPE=\"button\" value=\""._nabutton."\" onClick=\"location.href='index.php?mod=logout';\" class=\"grayform\">";
			echo "</form>";
?>
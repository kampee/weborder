<?php
							if( ($session_cid==7)  )
							{
									if($a30days=="1") 
									{
										$a_days="CHECKED";
									}
									else
									{
										$a_days="";
									}
									if($a30days=="1") 
									{

							?>
			                <TR bgcolor="white" VALIGN="middle">
			                    <TD HEIGHT="30" COLSPAN="5" bgcolor="#FFE9D2">
									<FONT face="arial,MS Sans Serif, Microsoft Sans Serif"  size="2" color="red">
									<b>
									&nbsp; <INPUT TYPE="checkbox" NAME="a30days" value="1" <?php echo $a_days; ?> DISABLED>30 days credit account</b>
									</FONT>
								</TD>
							</TR>
							<?php
									}
							}

?>
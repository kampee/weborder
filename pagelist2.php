<?php
	if($datafound_2>0)
	{
		$pages_2=$defpages_2;
		$web_found_2=$datafound_2;
		$pageall_2=ceil($web_found_2/$pages_2);
		if ($web_found_2>$pages_2)
		{
			echo "<div align=\"center\"><b>";
			echo "<table width=100% align=center border=0 bgcolor=#F4F4F4>";
			echo "	<tr valign=middle>";
			echo "		<td>";
			echo "			<b><font size=\"1\" face=\"arial\" color=\"black\"><font color=black>Page : </font>";

			if ($startpage_2==$pages_2)
			{
				$pageprev_2=0;
				echo "<a href=\"".$linkmaster_2."&startpage_2=$pageprev_2&stoppage_2=$stoppage_2\"><font size=\"1\" face=\"arial\" color=\"black\">Previous</font></a> ";
			}
			elseif ($startpage_2>$pages_2)
			{
				$pageprev_2=$startpage_2-$pages_2;
				echo "<a href=\"".$linkmaster_2."&startpage_2=$pageprev_2&stoppage_2=$stoppage_2\"><font size=\"1\" face=\"arial\" color=\"black\">Previous</font></a> &nbsp;";
			}

			if ($startpage_2==0)
			{
				echo "<font size=\"1\" face=\"arial\" color=\"black\"><b>1</b></font>&nbsp;";
			}
			else
			{
				echo "<a href=\"".$linkmaster_2."&startpage_2=0&stoppage_2=$stoppage_2\">1</a>&nbsp;";
			}

			for ($x_2>=$pages_2; $x_2<=$web_found_2; $x_2)
			{
				$x_2=$x_2+$pages_2;
				$pagereal_2=(($x_2/$pages_2)+1);
				if ($startpage_2==$x_2)
				{
					echo "<font size=\"1\" face=\"arial\" color=\"black\"><b>".(($x_2/$pages_2)+1)."</b></font>&nbsp;";
				}
				else
				{
					if ($pagereal_2<=$pageall_2)
					{
						echo "<a href=\"".$linkmaster_2."&startpage_2=$x_2&stoppage_2=$stoppage_2\">$pagereal_2</a>&nbsp;";
					}
				}
			}		
			if ($startpage_2<$x_2-$pages_2)
			{
				$pagenext_2=$startpage_2+$pages_2;
				echo "<a href=\"".$linkmaster_2."&startpage_2=$pagenext_2&stoppage_2=$stoppage_2\"><font size=\"1\" face=\"arial\" color=\"black\">Next</font></a>";
			}

		echo "			</font></b>";
		echo "		</td>";
		echo "	</tr>";
		echo "	</table>";
		echo "</b></div>";
		}
	}
?>

<?php
	if($datafound>0)
	{
		$pages=$defpages;
		$web_found=$datafound;
		$pageall=ceil($web_found/$pages);
		if ($web_found>$pages)
		{
			echo "<div align=\"center\"><b>";
			echo "<table width=100% align=center border=0 bgcolor=#F4F4F4>";
			echo "	<tr valign=middle>";
			echo "		<td>";
			echo "			<b><font size=\"1\" face=\"arial\" color=\"black\"><font color=black>Page : </font>";

			if ($startpage==$pages)
			{
				$pageprev=0;
				echo "<a href=\"".$linkmaster."&startpage=$pageprev&stoppage=$stoppage\"><font size=\"1\" face=\"arial\" color=\"black\">Previous</font></a> ";
			}
			elseif ($startpage>$pages)
			{
				$pageprev=$startpage-$pages;
				echo "<a href=\"".$linkmaster."&startpage=$pageprev&stoppage=$stoppage\"><font size=\"1\" face=\"arial\" color=\"black\">Previous</font></a> &nbsp;";
			}

			if ($startpage==0)
			{
				echo "<font size=\"1\" face=\"arial\" color=\"black\"><b>1</b></font>&nbsp;";
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
					echo "<font size=\"1\" face=\"arial\" color=\"black\"><b>".(($x/$pages)+1)."</b></font>&nbsp;";
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
				echo "<a href=\"".$linkmaster."&startpage=$pagenext&stoppage=$stoppage\"><font size=\"1\" face=\"arial\" color=\"black\">Next</font></a>";
			}

		echo "			</font></b>";
		echo "		</td>";
		echo "	</tr>";
		echo "	</table>";
		echo "</b></div>";
		}
	}
?>

<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />


<?php
if ( empty($pid) )
{
	$pid=1; 
}
else
{
	$pid=$pid;
}


$query = "select * from $wb_tbl_brand where pgroup='$pid'";
$result = mysql_db_query( $wb_dbname,$query);		
while( $row = mysql_fetch_array( $result ) )
{
	$bid = $row[bid];
	$brand = $row[brand];
	$bdesc = $row[bdesc];
	$bpic = $row[bpic];

	$b_pics="../backoffice/images/warning32.png";

		if(!empty($bpic)){
			$b_pics = "<img src=\"../backoffice/pictures/$bpic\" width=\"220\" height=\"173\">";  
		}else{
			$b_pics="<br>";
		}

?>

  <tr valign=top>
    <td colspan="2" class="body_text">
		<b><font size=4 color=#FF9900><?php echo $brand; ?></font></b><br>
		<?php echo nl2br($bdesc); ?>
	</td>
    <td align="center" class="body_text">    
		<?php echo $b_pics; ?>
	 </td>
  </tr>


  <tr>
    <td colspan="3" class="body_text">&nbsp;</td>
  </tr>

  <tr>
    <td height="47" colspan="3" class="body_text">


	  
	  <?
	$objConnect = mysql_connect("localhost","vanusnun","mylife") or die("Error Connect to Database");
	$objDB = mysql_select_db("vanusnun_com");
	$strSQL = "SELECT * FROM ".$wb_tbl_product." WHERE PGROUP='$pid' and BID='$bid' ORDER BY PID ASC ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$pfound = mysql_num_rows($objQuery);

	//echo $pfound;

	if ($pfound>=1)
	{

	echo"<table border=\"0\"  cellspacing=\"1\" cellpadding=\"1\"><tr valign=top>";	
	$intRows = 0;
	while($objResult = mysql_fetch_array($objQuery))
	{
		
		$z_pics="../backoffice/images/warning32.png";
		$t_pics="../backoffice/images/warning32.png";

		if(!empty($objResult["pic_zoom"])){
			$z_pics = "../backoffice/pictures/".$objResult["pic_zoom"];
		}

		if(!empty($objResult["pic_thum"])){
			$t_pics = "../backoffice/pictures/".$objResult["pic_thum"];
		}


	$intRows++;
	echo "<td>";									
	?>

	 <table width="100%" border="0" cellspacing="0" cellpadding="0">
     <tr>
          <td align="center"><div align="center"><a href="<?php echo $z_pics; ?>" rel="lightbox" title="<b><?=$objResult["prod_name"];?></b><br><br><?=nl2br($objResult["prod_desc"]);?><br><br>" target="_blank"><img src="<?php echo $t_pics; ?>" width="260" height="182" border="10" class="table"></a></div></td>
     </tr>

	<tr>
    <td height="47" class="body_text">
		<table width="281" border="0" align="center" cellspacing="0">
		<tr>
        <td class="body_text"><span class="style2"><?=$objResult["prod_name"];?></span><br>
		<?=nl2br($objResult["prod_desc"]);?>
		</td>
		</tr>
		</table>
	</td>
	</tr>
	  
	</table>
	    
	<?
		echo"</td>";
		if(($intRows)%3==0)
		{
		echo"</tr>";
		}
		else
		{
		echo "<td>";
		}	
?>



<?
	}
	echo"</tr></table>";
	mysql_close($objConnect);
?>
	</td>
  </tr>

  <tr>
    <td colspan="3" class="body_text" background="images/dot.jpg"><br><br></td>
  </tr>

<?php
	}
?>



<?php

}
	?>	





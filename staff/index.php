
<?php
include("include/dbconn.php");
include("include/session.php");

$sql_pending = mysql_query("SELECT * FROM  pending limit 10;");
?>

<div>
	<p><a href="search.php">Search</a></p>

</div>
<div><center>
<table>
	<tr>
		<td>
			Name
		</td>
		<td>
			Identification Number/Passport
		</td>
		<td>
			Programme Name
		</td>
		<td>
			Year Graduate
		</td>
		<td>
			Email
		</td>
	</tr>
	 <?php
    while($row = mysql_fetch_array($sql_pending)){
    	$pname = $row['pending_name'];
    	$pic = $row['pending_IC'];
    	$pprogram=$row['pending_program']; 
    	$pyearg=$row['pending_yearG'];
    	$pemail=$row['pending_email'];
		
    ?>
      <tr>
        
        <td><?=$pname?></td>
        <td><?=$pic?></td>
        <td><?=$pprogram?></td>
        <td><?=$pyearg?></td>
        <td><?=$pemail?></td>
      </tr>
    <?php
    }
    ?>

</table>
</center><div>


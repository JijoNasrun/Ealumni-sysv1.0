<?php
include("include/dbconn.php");
session_start();

$kp = $_SESSION["id"];

function runQuery($query) {
        $result = mysql_query($query);
        while($row=mysql_fetch_assoc($result)) {
            $resultset[] = $row;
        }       
        if(!empty($resultset))
            return $resultset;
    }


if(!empty($_POST["level_id"])) {
	
	$level=$_POST["level_id"];

	if($level=="S")
	{
		$query ="SELECT * FROM program WHERE programID like 'CS00%'";
		$results = runQuery($query);
	}	
	if($level=="D")
	{
		$query ="SELECT * FROM program WHERE programID like 'CS1%'";
		$results = runQuery($query);
	}	
	if($level=="I")
	{
		$query ="SELECT * FROM program WHERE programID like 'CS2%'";
		$results = runQuery($query);
	}
	if($level=="M")
	{
		$query ="SELECT * FROM program WHERE programID like 'CS7%'";
		$results = runQuery($query);
	}
	if($level=="H")
	{
		$query ="SELECT * FROM program WHERE programID like 'CS9%'";
		$results = runQuery($query);
	}			

	
?>
	<option value="">Select Program</option>
<?php
	foreach($results as $displayprogram) {
?>
	<option value="<?php echo $displayprogram["ProgramID"]; ?>"><?php echo $displayprogram["ProgramID"];echo "--";echo $displayprogram["ProgramName"]; ?></option>
<?php
	}
}
?>
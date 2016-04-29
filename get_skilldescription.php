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


if(!empty($_POST["skill_id"])) {
	
	$skill=$_POST["skill_id"];

	/*if($skill==1)
	{
		$query ="SELECT * FROM skill WHERE skillCatID = 1";
		$results = runQuery($query);*/

	switch($skill)
	{

		case 1: $query ="SELECT * FROM skill WHERE skillCatID = 1";
				$results = runQuery($query); break;
		case 2: $query ="SELECT * FROM skill WHERE skillCatID = 2";
				$results = runQuery($query); break;
		case 3: $query ="SELECT * FROM skill WHERE skillCatID = 3";
				$results = runQuery($query); break;
		case 4: $query ="SELECT * FROM skill WHERE skillCatID = 4";
				$results = runQuery($query); break;
		case 5: $query ="SELECT * FROM skill WHERE skillCatID = 5";
				$results = runQuery($query); break;
		case 6: $query ="SELECT * FROM skill WHERE skillCatID = 6";
				$results = runQuery($query); break;
		case 7: $query ="SELECT * FROM skill WHERE skillCatID = 7";
				$results = runQuery($query); break;
		case 8: $query ="SELECT * FROM skill WHERE skillCatID = 8";
				$results = runQuery($query); break;
		case 9: $query ="SELECT * FROM skill WHERE skillCatID = 9";
				$results = runQuery($query); break;
		case 10: $query ="SELECT * FROM skill WHERE skillCatID = 10";
				$results = runQuery($query); break;
		case 11: $query ="SELECT * FROM skill WHERE skillCatID = 11";
				$results = runQuery($query); break;
		case 12: $query ="SELECT * FROM skill WHERE skillCatID = 12";
				$results = runQuery($query); break;
		case 13: $query ="SELECT * FROM skill WHERE skillCatID = 13";
				$results = runQuery($query); break;
		case 14: $query ="SELECT * FROM skill WHERE skillCatID = 14";
				$results = runQuery($query); break;
		case 15: $query ="SELECT * FROM skill WHERE skillCatID = 15";
				$results = runQuery($query); break;
		case 16: $query ="SELECT * FROM skill WHERE skillCatID = 16";
				$results = runQuery($query); break;
		case 17: $query ="SELECT * FROM skill WHERE skillCatID = 17";
				$results = runQuery($query); break;
		case 18: $query ="SELECT * FROM skill WHERE skillCatID = 18";
				$results = runQuery($query); break;


	}
		

	
?>
	
<?php
	foreach($results as $displayskill) {
?>
	<option value="<?php echo $displayskill["SkillID"]; ?>"><?php echo $displayskill["SkillDescription"]; ?></option>
<?php
	}
}
?>
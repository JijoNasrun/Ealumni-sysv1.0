<script>
function printFunction() {
    window.print();
}
</script>

	<body class="form-input-page">
<?php 
    
     $kp = $_SESSION["id"];

     $rst=mysql_query("SELECT * FROM alumni WHERE no_kp ='$kp'");

	$row =mysql_fetch_array($rst);
	$name=$row['nama'];
	$kps =$row['no_kp'];
	$tarikh_lahir =$row['tarikh_lahir'];

	$address= $row['alamat'];
	$city = $row['bandar_tetap'];
	$state = $row['negeri_tetap'];
	$poskod = $row['poskod_tetap'];
	$negara_tetap=$row['negara_tetap'];
	$calamat=$row['calamat_tetap'];
	$cbandar_tetap=$row['cbandar_tetap'];
	$cnegeri_tetap=$row['cnegeri_tetap'];
	$cposkod_tetap=$row['cposkod_tetap'];
	$cnegara_tetap=$row['cnegara_tetap'];
	$contribution=$row['contribution'];
    
    $orgID = $row['orgID'];

    $org = mysql_query("SELECT * FROM organization where orgID = '$orgID'");
    $orgs = mysql_fetch_array($org);

    $orgName=$orgs['OrganizationName'];
    $orgAddress=$orgs['Address1'];
    $orgState=$orgs['State'];
    $orgCity=$orgs['City'];
    $orgPostcode=$orgs['Postcode'];
    $orgCountry=$orgs['Country'];
    $empstat = $row['empStatus'];
    $jobrelated = $row['relate'];
    $salRange = $row['salRangeId']; 

    //getting uitm qualification of an alumni
    $query = mysql_query("SELECT * FROM uitm_qualification WHERE no_kp = '$kp'");



	$contlist=unserialize($contribution);

?>

            <!-- Begin: Content -->
            <div id="content" class="animated fadeIn">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Biodata</span>
                                
                            </div>
                            <div class="panel-body">
                            	<table>
                            		<tr>
                            			<td>NAME </td>
                            			<td>: <?php echo $name?></td>
                            		</tr>
                            		<tr>
                            			<td>IDENTIFICATION NUMBER </td>
                            			<td>: <?php echo $kps?></td>
                            		</tr>
                            		<tr>
                            			<td>BIRTH DATE </td>
                            			<td>: <?php echo $tarikh_lahir?></td>
                            		</tr>
                            		<tr>
                            			<td>ADDRESS</td>
                            			<td>: <?php echo $address; echo $poskod; echo $city ; echo $state; echo $negara_tetap; ?></td>
                            		</tr>
                            		<tr>
                            			<td>CORRESPONDENCE ADDRESS</td>
                            			<td>: <?php echo $calamat; echo $cbandar_tetap; echo $cposkod_tetap; echo $cnegeri_tetap; echo $cnegara_tetap; ?></td>
                            		</tr>
                            		<tr>
                            			<td>STAFF NUMBER</td>
                            			<td>:</td>
                            		</tr>
                            		<tr>
                            			<td>CAMPUS</td>
                            			<td>:</td>
                            		</tr>
                            		<tr>
                            			<td>DEPARTMENT</td>
                            			<td>:</td>
                            		</tr>
                            	</table>
                            </div>
                            
                        </div>
                    <div class="panel">
                    	<div class="panel-heading">
                    		<span class="panel-title">ACADEMIC ACHIEVEMENT</span>
                    	</div>
                    	<div class="panel-body">
                    		<?php 
                                echo "UITM QUALIFICATION";echo "<br><br>";
                                while($uitmq = mysql_fetch_array($query)){
                                    $level = $uitmq['level'];
                                    $querylevel = mysql_query("SELECT * FROM level where LevelID = '$level'");
                                    $levelrow = mysql_fetch_array($querylevel);
                                    $levels=$levelrow['LevelName'];
                                    $mode = $uitmq['mode'];
                                    $progID = $uitmq['ProgramID'];
                                    $yearGraduate = $uitmq['yearGraduate'];
                                    echo "LEVEL: ";echo $levels; echo "<br>";
                                    echo "MODE:";echo $mode;echo "<br>";
                                    echo "PROGRAM ID:";echo $progID;echo "<br>";
                                    echo "YEAR GRADUATE:";echo $yearGraduate;echo "<br>";
                                    echo "<br>";

                                    
                                    
                                }
                             ?>
                             <br>
                             <?php 

                             echo "NON UITM QUALIFICATION"; echo "<br><br>";

                             $nonUitmQuery = mysql_query("SELECT * FROM non_uitm_qualification where no_kp = '$kp'");
                             while($nonUitmRow = mysql_fetch_array($nonUitmQuery)){
                                $nonUitmLevel=$nonUitmRow['level'];
                                $nonUitmUni=$nonUitmRow['university'];
                                $nonUitmYearG=$nonUitmRow['yearGraduate'];

                                    echo "LEVEL: ";echo $nonUitmLevel; echo "<br>";
                                    echo "UNIVERSITY:";echo $nonUitmUni;echo "<br>";
                                    echo "YEAR GRADUATE:";echo $nonUitmYearG;echo "<br>";
                                    echo "<br>";
                             }

                             ?>
                    	</div>
                    </div>
                    <div class="panel">
                    	<div class="panel-heading">
                    		<span class="panel-title">CURRENT EMPLOYMENT</span>
                    	</div>
                    	<div class="panel-body">
                    		<?php echo "Employment Status:";echo $empstat;echo "<br>";
                            echo "Job Related: ";echo $jobrelated; echo "<br>";

                            

                            $salQuery = mysql_query("SELECT * FROM salary_range where SalRangeID = '$salRange'");
                            $salRow = mysql_fetch_array($salQuery);
                            $salary = $salRow['SalRangeValue'];
                            echo "Salary :"; echo $salary;
                            echo "<br>";
                            echo "Organization Address :"; 
                            echo $orgAddress;echo ", ";
                            echo $orgPostcode;echo ",";
                            echo $orgCity; echo ",";
                            echo $orgState; echo ",";
                            echo $orgCountry; 
                            echo "<br>";

                            ?>

                    	</div>
                    </div>
                    <div class="panel">
                    	<div class="panel-heading">
                    		<span class="panel-title">PROFESSIONALISM</span>
                    	</div>
                    	<div class="panel-body">
                    		//tbc
                    	</div>
                    </div>
                    <div class="panel">
                    	<div class="panel-heading">
                    		<span class="panel-title">CONTRIBUTION</span>
                    	</div>
                    	<div class="panel-body">
                    		<?php
                    			foreach($contlist as $cont){
                    				echo $cont; echo "<br>";
                    			}
                    		 ?>
                    	</div>
                    </div>

                    </div>
                    <div class="form-group">
                    	<div class="col-lg-2">
                            <button type="button" class="btn btn-rounded btn-danger btn-block" onclick="printFunction()">PRINT</button>
                     	</div>
                     	<div class="col-lg-2">
                     		 <a href="logout.php"><button type="button" class="btn btn-rounded btn-danger btn-block">SAVE & LOGOUT</button></a>
                     	</div>
                    </div>
                     
                </div>
            </div>




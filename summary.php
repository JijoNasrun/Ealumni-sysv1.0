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
    $staff_no=$row['staff_id'];
    $staff_department=$row['department'];
    $staff_campus=$row['campus'];
    $email_rasmi = $row['email_rasmi'];
    $no_tel = $row['no_tel'];
    $home_office_tel = $row['home_office_tel'];
    
    $orgID = $row['orgID'];

    $org = mysql_query("SELECT * FROM organization where orgID = '$orgID'");
    $orgs = mysql_fetch_array($org);

    $orgName=$orgs['OrganizationName'];
    $type_id=$orgs['type_id'];
    $orgAddress=$orgs['Address1'];
    $orgState=$orgs['State'];
    $orgCity=$orgs['City'];
    $orgPostcode=$orgs['Postcode'];
    $orgCountry=$orgs['Country'];
    $empstat = $row['empStatus'];
    $jobrelated = $row['relate'];
    $salRange = $row['salRangeId']; 
    $telephone = $orgs['Telephone'];
    $fax = $orgs['Fax'];
    $email = $orgs['Email'];
    $website = $orgs['Website'];

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
                            			<td>: <?php echo $address;echo " ,";echo $poskod;echo " ,";echo $city ;echo " ,";echo $state;echo " ,";echo $negara_tetap; ?></td>
                            		</tr>
                            		<tr>
                            			<td>CORRESPONDENCE ADDRESS</td>
                            			<td>: <?php echo $calamat;echo " ,"; echo $cbandar_tetap;echo " ,"; echo $cposkod_tetap;echo " ,"; echo $cnegeri_tetap;echo " ,"; echo $cnegara_tetap; ?></td>
                            		</tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>: <?php echo $email_rasmi ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mobile</td>
                                        <td>: <?php echo $no_tel ?></td>
                                    </tr>
                                    <tr>
                                        <td>Home/Office</td>
                                        <td><?php echo $home_office_tel ?></td>

                                    </tr>
                            		<tr>
                            			<td>STAFF NUMBER</td>
                            			<td>: <?php echo $staff_no ?></td> 
                            		</tr>
                            		<tr>
                            			<td>CAMPUS</td>
                            			<td>: <?php echo $staff_campus ?></td> 
                            		</tr>
                            		<tr>
                            			<td>DEPARTMENT</td>
                            			<td>: <?php echo $staff_department ?></td> 
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

                             

                             $nonUitmQuery = mysql_query("SELECT * FROM non_uitm_qualification where no_kp = '$kp'");
                             while($nonUitmRow = mysql_fetch_array($nonUitmQuery)){
                                echo "NON UITM QUALIFICATION"; echo "<br><br>";
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
                            $typeQuery =mysql_query("SELECT * FROM organization_type where TypeID = '$type_id'");
                            $typeRow = mysql_fetch_array($typeQuery);
                            $type = $typeRow['TypeName'];
                            echo "Salary :"; echo $salary;
                            echo "<br>";
                            echo "Organization Name :"; echo $orgName; echo "<br>";
                            echo "Organization Type :"; echo $type; echo "<br>";
                            echo "Organization Address :"; 
                            echo $orgAddress;echo ", ";
                            echo $orgPostcode;echo ",";
                            echo $orgCity; echo ",";
                            echo $orgState; echo ",";
                            echo $orgCountry; 
                            echo "<br>";
                            echo "Telephone : ";echo $telephone;echo "<br>";
                            echo "Fax : ";echo $fax;echo "<br>";
                            echo "Email : ";echo $email;echo "<br>";
                            echo "Website : ";echo $website;

                            ?>

                    	</div>
                    </div>
                    <div class="panel">
                    	<div class="panel-heading">
                    		<span class="panel-title">PROFESSIONALISM</span>
                    	</div>
                    	<div class="panel-body">
                    		<?php 
                                $skillQuery = mysql_query("SELECT * FROM professionalism WHERE no_kp = '$kp'");
                                
                                
                                while($skillRow=mysql_fetch_array($skillQuery)){
                                    $id = $skillRow['skillID'];
                                    $description = $skillRow['skilldes'];

                                    $skillID = mysql_query("SELECT * FROM skill_category where SkillCatID = '$id'");
                                    $skillIDRow = mysql_fetch_array($skillID);
                                    $skillcategory = $skillIDRow['SkillCatName'];
                                    echo "Skill Category : "; echo $skillcategory; echo "<br>";
                                    $descQuery = mysql_query("SELECT * FROM skill where skillID = '$description'");
                                    $descRow = mysql_fetch_array($descQuery);
                                    $desc = $descRow['SkillDescription'];
                                    echo "Skill Description : " ; echo $desc;echo "<br>"; echo "<br>";


                                }
                            ?>
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
                            <button type="button" class="btn btn-rounded btn-alert btn-block" onclick="printFunction()">PRINT</button>
                     	</div>
                     	<div class="col-lg-2">
                     		 <a href="logout.php"><button type="button" class="btn btn-rounded btn-alert btn-block">SAVE & LOGOUT</button></a>
                     	</div>
                    </div>
                     
                </div>
            </div>




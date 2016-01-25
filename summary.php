<html>
<head>
	 <meta charset="utf-8">
    <title>e-Alumni</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Required Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="assets/js/utility/highlight/styles/googlecode.css">

    <!-- Required Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/plugins/datepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/plugins/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="vendor/plugins/colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/plugins/tagmanager/tagmanager.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <script>
function printFunction() {
    window.print();
}
</script>
</head>
	<body class="form-input-page">
		<?php 
	 session_start();
     include("include/dbconn.php");
     include("include/session.php");
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
	$contlist=unserialize($contribution);

	mysql_close($dbconn);
?>
		<!-- Start: Main -->
    <div id="main">
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
                            			<td>:<?php echo $name?></td>
                            		</tr>
                            		<tr>
                            			<td>IDENTIFICATION NUMBER </td>
                            			<td>:<?php echo $kps?></td>
                            		</tr>
                            		<tr>
                            			<td>BIRTH DATE </td>
                            			<td>:<?php echo $tarikh_lahir?></td>
                            		</tr>
                            		<tr>
                            			<td>ADDRESS</td>
                            			<td>:<?php echo $address; echo $poskod; echo $city ; echo $state; echo $negara_tetap; ?></td>
                            		</tr>
                            		<tr>
                            			<td>CORRESPONDENCE ADDRESS</td>
                            			<td>:<?php echo $calamat; echo $cbandar_tetap; echo $cposkod_tetap; echo $cnegeri_tetap; echo $cnegara_tetap; ?></td>
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
                    		//tbc
                    	</div>
                    </div>
                    <div class="panel">
                    	<div class="panel-heading">
                    		<span class="panel-title">CURRENT EMPLOYMENT</span>
                    	</div>
                    	<div class="panel-body">
                    		//tbc
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
                            <button type="button" class="btn btn-hover btn-alert btn-block" onclick="printFunction()">PRINT</button>
                     	</div>
                     	<div class="col-lg-2">
                     		 <a href="logout.php"><button type="button" class="btn btn-hover btn-alert btn-block">SAVE & LOGOUT</button></a>
                     	</div>
                    </div>
                     
                </div>
            </div>
        </div>

	</body>
</html>




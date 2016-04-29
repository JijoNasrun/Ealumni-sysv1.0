<?php
include("include/dbconn.php");
include("include/session.php");
    $kp = $_SESSION["id"];
    $qid  = $_GET['id'];

    $query ="SELECT * FROM level";
    $results = runQuery($query); 

    $query2 =mysql_query("SELECT * FROM non_uitm_qualification where qualification_id ='$qid'");
    $result2 =mysql_fetch_array($query2);

    function runQuery($query) {
        $result = mysql_query($query);
        while($row=mysql_fetch_assoc($result)) {
            $resultset[] = $row;
        }       
        if(!empty($resultset))
            return $resultset;
    }
    function update($qid){

            $level2=$_POST['level2'];
            $program2=$_POST['program2'];
            $university=$_POST['university'];
            $yearG2=$_POST['yearG2'];
            $program2=$_POST['program2'];
            $retval=mysql_query("UPDATE non_uitm_qualification SET level ='$level2', yearGraduate = '$yearG2',university ='$university',program='$program2'  WHERE qualification_id ='$qid'");
            if(! $retval )
                        {
                           die('Could not update data: ' . mysql_error());
                        }
            echo "updated successfully";


    }
    function delete($qid){
        $retval=mysql_query("DELETE FROM non_uitm_qualification WHERE qualification_id = '$qid'");
        if(! $retval )
         {
           die('Could not update data: ' . mysql_error());
         }
    }

    if(isset($_POST['update']))
    {   update($qid);   }
    
    if(isset($_POST['delete']))
    {   delete($qid);   }

    ?>
    <html>

<head>

   
    <!-- Meta, title, CSS, favicons, etc. -->
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    
</head>

<body class="form-input-page">


    <!-- Start: Main -->
    <div id="main">
        
            <!-- Begin: Content -->
            <div id="content" class="animated fadeIn">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Update UiTM Academic Achievement</span>
                            </div>
                                <label for="inputStandard" class="control-label">Academic Achievement from Other Institutions</label><p>
                                    <div class="row">   
                                    <form class="form-horizontal" role="form" method="post" action="<?php $_PHP_SELF ?>">
                                    <div class="form-group">
                                                            <label class="col-lg-3 control-label">Level</label>
                                                            <div class="col-lg-8">
                                                                <label class="field select">
                                                                    <select id="level2" name="level2" class="form-control">
                                                                    <option value="<?php echo $result2['level']?>"><?php echo $result2['level']?></option>
                                                                    <option value="PhD">PhD</option>
                                                                    <option value="Master">Master</option>
                                                                    <option value="Degree">Degree</option>
                                                                    <option value="Professional">Professional</option>
                                                                    <option value="Diploma">Diploma</option>
                                                                    <option value="Certificate">Certificate</option>
                                                                    </select>
                                                                    <i class="arrow"></i>
                                                                </label>
                                                            </div>
                                    </div>
                                    <div class="form-group">
                                                            <label for="inputStandard" class="col-lg-3 control-label">Program</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" id="program2" name="program2" class="form-control" value="<?php echo $result2['program']?>">
                                                            </div>
                                    </div>
                                    <div class="form-group">
                                                            <label for="inputStandard" class="col-lg-3 control-label">University</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" id="university" name="university" class="form-control" value="<?php echo $result2['university']?>">
                                                            </div>
                                    </div>
                                    <div class="form-group">
                                                            <label for="inputStandard" class="col-lg-3 control-label">Year Graduate</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" id="yearG2" name="yearG2" class="form-control" value="<?php echo $result2['yearGraduate']?>">
                                                            </div>
                                    </div>
                                </p>
                                    <div class="form-group">
                                    <div class="col-lg-5"></div>
                                    <div class="col-lg-2">
                                    <button type="submit" class="btn btn-rounded btn-alert btn-block"  name="update" id="update" value="Update">SUBMIT</button></div>
                                    <div class="col-lg-2">
                                        <button type="SUBMIT" class="btn btn-rounded btn-danger btn-block" name="delete" id="delete" value="Delete">DELETE</button>
                                    </div>
                                    <div class="col-lg-2">
                                        <a href="tab.php?content=2"><button type="button" class="btn btn-rounded btn-alert btn-block">CANCEL</button>
                                    </div>


                                    <div class="col-lg-5"></div>
                                    </div>
                                </form>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </body>
                        </html>
                            

<?php 
        include("include/dbconn.php");
        include("include/session.php");
        $kp = $_SESSION["id"];
        $query = "SELECT * FROM skill_category";
        $results = runQuery($query);
        $qid  = $_GET['id'];
    function runQuery($query) {
        $result = mysql_query($query);
        while($row=mysql_fetch_assoc($result)) {
            $resultset[] = $row;
        }       
        if(!empty($resultset))
            return $resultset;
    }
     function update($qid){

            $skillcat=$_POST['skillcat'];
            $skilldes=$_POST['skilldes'];
            $certexp=$_POST['certexp'];
            
            $retval=mysql_query("UPDATE professionalism SET skillID = '$skillcat',skilldes ='$skilldes', certexp = '$certexp' WHERE professionalID ='$qid'");
            if(! $retval )
                        {
                           die('Could not update data: ' . mysql_error());
                        }
            echo "updated successfully";


    }
    function delete($qid){
        $retval=mysql_query("DELETE FROM professionalism WHERE professionalID = '$qid'");
        if(! $retval )
         {
           die('Could not update data: ' . mysql_error());
         }
    }if(isset($_POST['update']))
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
<div id="content" class="animated fadeIn">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Professional Skill</span>
                            </div>

                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="post" action="<?php $_PHP_SELF ?>">
                                        <label for="inputStandard" class="control-label">Professional Skill</label><p>
                                    <div class="row">   
                                        <!-- .section-divider -->
                
                                       <p>
                                         <table id="dataTable"  class="table table-striped table-hover" cellspacing="0" width="100%">
                                              <tbody> 
                                                <tr id="row0">
                                                  <p>
                                                    
                                                    <td>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Skill Category</label>
                                                            <div class="col-lg-8">
                                                                <label class="field select">
                                                                    <select id="skillcat" name="skillcat" class="form-control" onChange="getSkillDescription(this.value)"  >
                                                                        <option value ="">SELECT SKILL CATEGORY</option>
                                                                    <?php 
                                                                            foreach($results as $displayCategory) {
                                                                    ?>
                                                                             <option value="<?php echo $displayCategory["SkillCatID"]; ?>"><?php echo $displayCategory["SkillCatName"]; ?></option>

                                                                    <?php }         
                                                                    ?>
                                                                    </select>
                                                                    <i class="arrow"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Skill Description</label>
                                                            <div class="col-lg-8">
                                                                <label class="field select">                                                                
                                                                    <select id="skilldes" name="skilldes" class="form-control">
                                                                        <option value="" disabled>--CISCO--</option>
                                                                        <option value="1">CCNA</option>
                                                                        <option value="2">CCNP</option>
                                                                        <option value="3">CCDE</option>
                                                                        <option value="4">CCIE</option>
                                                                        <option value="5">CCAR</option>
                                                                        <option value="" disabled>--DATABASE(ORACALE)--</option>
                                                                        <option value="6">ORACLE APPLICATION CERTIFICATE</option>
                                                                        <option value="7">ORACLE DATABSE CERTIFICATE</option>
                                                                        <option value="" disabled>--3D MODELLING/DESIGN--</option>
                                                                        <option value="8">AUTODESK BUILDING INFORMATION MODELLING</option>
                                                                        <option value="9">ADOBE</option>
                                                                        <option value=""disabled>--BUSINESS ANALYTICS--</option>
                                                                        <option value="10">SAS</option>
                                                                        <option value=""disabled>--BUSINESS ANALYSIS--</option>
                                                                        <option value="11">INTERNATIONAL INSTITUTE OF BUSINESS ANALYSIS</option>
                                                                        <option value=""disabled>--DATA SCIENCE/BIG DATA--</option>
                                                                        <option value="12">EMC</option>
                                                                        <option value="13">CLOUDERA</option>
                                                                        <option value="14">RAPIDMINER</option>
                                                                        <option value="15">HORTONWORKS</option>
                                                                        <option value="" disabled>--EMBEDDED SYSTEM--</option>
                                                                        <option value="16">NATIONAL INSTRUMENTS</option>
                                                                        <option value="17">SYSTEM DESIGN</option>
                                                                        <option value="18">IC DESIGN</option>
                                                                        <option value="19">ARM</option>
                                                                        <option value="" disabled>--ENTERPRISE RESOURCE PLANNING--</option>
                                                                        <option value="20">SAP</option>
                                                                        <option value="" disabled>--GLOBAL BUSINESS SERVICE--</option>
                                                                        <option value="21">IAOP</option>
                                                                        <option value="" disabled>--IT ARCHITECTURE--</option>
                                                                        <option value="22">IASA</option>
                                                                        <option value="23">THE OPEN GROUP</option>
                                                                        <option value="" disabled>--IT SERVICE MANAGEMENT--</option>
                                                                        <option value="24">SERVICE DESK INSTITUTE</option>
                                                                        <option value="25">AXELOS/APMG/BCS/EXIN/PEOPLECERT</option>
                                                                        <option value="26">PEOPLECERT</option>
                                                                        <option value="27">APMG</option>
                                                                        <option value="" disabled>--MOBILE DEVELOPMENT--</option>
                                                                        <option value="28">ITRAIN</option>
                                                                        <option value="" disabled>--PROJECT DEVELOPMENT--</option>
                                                                        <option value="29">PROJECT MANAGEMENT INSTITUTE</option>
                                                                        <option value="30">SCRUM ALLIANCE</option>
                                                                        <option value="31">PRINCE2(APMG/PEOPLECERT)</option>
                                                                        <option value="" disabled>--PROBLEM SOLVING--</option>
                                                                        <option value="32">TRIZ</option>
                                                                        <option value="" disabled>--NETWORKING--</option>
                                                                        <option value="33">HUAWEI</option>
                                                                        <option value="34">JUNIPER</option>
                                                                        <option value="" disabled>--SECURITY--</option>
                                                                        <option value="35">COMPTIA</option>
                                                                        <option value="36">MILE2</option>
                                                                        <option value=""disabled>--SERVER/CLOUD/SHAREPOINT--</option>
                                                                        <option value="37">MICROSOFT</option>
                                                                        <option value="" disabled>--SYSTEM ADMINISTRATOR--</option>
                                                                        <option value="38">RED HAT</option>
                                                                        <option value="" disabled>--VIRTUALIZATION--</option>
                                                                        <option value="39">VMWARE</option>

                                                                        
                                                                    </select>
                                                                   
                                                                    <i class="arrow"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label" for="textArea2">Skill Certification and Experience</label>
                                                            <div class="col-lg-8">
                                                                <textarea class="form-control" id="certexp" name="certexp" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </p>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    
                                    <div class="form-group">
                                    <div class="col-lg-5"></div>
                                    <div class="col-lg-2">
                                        <button type="submit" class="btn btn-rounded btn-alert btn-block"  name="update" id="update" value="Update">EDIT</button>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="SUBMIT" class="btn btn-rounded btn-danger btn-block" name="delete" id="delete" value="Delete">DELETE</button>
                                    </div>
                                    <div class="col-lg-2">
                                        <a href="tab.php?content=4"><button type="button" class="btn btn-rounded btn-alert btn-block">RETURN</button>
                                </form>
                            </div></div>
                        </div>
                        
                    </div>

                </div>

            </div>
</body>
</html>
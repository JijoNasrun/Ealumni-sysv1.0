<?php  
        include("include/dbconn.php");
        include("include/session.php");?>
<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>e - Alumni</title>

    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.8.0.min.js"></script>
    <!--[if lt IE 9]><script src="js/modernizr.custom.js"></script><![endif]-->
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/functions.js"></script>
    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
     <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>


    <!-- Page Plugins via CDN -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/globalize/0.1.1/globalize.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js"></script>

    <!-- via local files 
    <script type="text/javascript" src="vendor/plugins/globalize/src/core.js"></script>
    <script type="text/javascript" src="vendor/plugins/moment/moment.min.js"></script> -->

   <!--  jquery local -->
   <link href="path/to/select2.min.css" rel="stylesheet" />
   <script src="path/to/select2.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() 
    {
        $("#staff").hide();
       
    });

</script>
<script>
function show(){$("#staff").show();}
</script>
<script>
function hide(){$("#staff").hide();}
</script>


    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Demo JS
            Demo.init();

            // Populates theme styles for Tabs - Trash function 
            var tabOptions = [];
            var tabToggle = $(".toggle-tab-style .tab-style-option");
            var tabCount = $(tabToggle).length;

            $(tabToggle).each(function(index, element) {
                var optionVal = $(element).attr('opt');

                // gather options and push to array
                tabOptions.push(optionVal);

                // on last loop filter for uniques
                if (index == tabCount - 1) {
                    jQuery.unique(tabOptions);
                }
            });

            // Changes theme style on Tabs - Trash function 
            $(tabToggle).click(function() {
                var tabStyle = $(this).data('opt');
                var Options = tabOptions.join(" ");

                // GARBAGE JS - left tab navigation has styles widget outside of its menu.
                // Requires slightly different class detection
                if ($(this).parent().hasClass('tab-style-left')) {
                    $(this).parents("div.tab-block").children("ul").removeClass(Options).addClass(tabStyle);
                } else {
                    // Assign option to parent of clicked tab widget. Remove all other options
                    $(this).parents("ul").removeClass(Options).addClass(tabStyle);
                }
                // remove active class from options and add
                // the class to the newly clicked option
                $(this).siblings().removeClass("active");
                $(this).addClass("active");

            });

        });
    </script>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</head>
<body>
    <header  id="header">
    <!-- shell -->
    <div class="shell">
      <div class="header-inner">
            <!-- header-cnt -->
        <div class="header-cnt">
        <h1 id="logo"><a href="#">Simple</a></h1>
      
        <!-- end of header-cnt -->

        <!-- slider -->

    </div></div>
    <!-- end of shell -->
  </header>

    <section id="content" class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title"><b>Alumni Information</b></span><div class="right"><a href="logout.php">Logout</a></div>
                </div>

                <div class="panel-body">
                    <div class="col-md-12">

                       <div class="tab-block mb25">
                            <ul class="nav tabs-left">
                                <li class="active">
                                    <a href="?content=1" > <b>(1)</b> Biodata <i class="fa fa-caret-down pl5"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="?content=2"> <b>(2)</b> Academic <b>Achievement</b><i class="fa fa-caret-down pl5"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="?content=3"> <b>(3)</b> Current<b> Employment</b><i class="fa fa-caret-down pl5"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="?content=4"> <b>(4)</b> Professional <b> Skill</b><i class="fa fa-caret-down pl5"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="?content=5"> <b>(5)</b> Contribution<i class="fa fa-caret-down pl5"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="?content=6"> <b>(6)</b> Summary<i class="fa fa-caret-down pl5"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">                                
                                    <?php
                                     
                                        if(array_key_exists('content', $_GET)){

                                                switch($_GET['content']){

                                                case 1: 
                                                    include 'biodata.php';
                                                break;

                                                case 2:
                                                    include 'academicAchievement.php';
                                                break;

                                                case 3: 
                                                    include 'currentEmployment.php'; 
                                                break;

                                                case 4: 
                                                    include 'professionalismSkill.php'; 
                                                break;

                                                case 5: 
                                                    include 'contribution.php'; 
                                                break;

                                                case 6: 
                                                    include 'summary.php'; 
                                                break;

                                                default: include 'biodata.php';
                                                }
                                         
                                        }else{

                                               include 'biodata.php';
                                        }
                            
                                    ?>                                 
                            </div>
                                
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
</section>
</body>

</html>

<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="keywords" content="Basic Template" />
    <meta name="description" content="Basic Template">
    <meta name="author" content="Basic Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    
    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/skin/default_skin/css/theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <?php
        Yii::app()->getClientScript()->registerCoreScript( 'jquery.ui' );
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/bootstrap/bootstrap.min.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/utility/utility.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/main.js', CClientScript::POS_END);
    ?>

    <style>
    .grid-view table.items th
    {
        color: white;
        background: url("<?php echo Yii::app()->request->baseUrl; ?>/images/grey-7.jpg") repeat-x scroll left top white !important;
        text-align: center;
    }
    .grid-view table.items th, .grid-view table.items td{
        padding-top: 1em;
        padding-bottom: 1em;
        font-size: 1em;
    }
    .grid-view table.items tr:hover.selected
    {
        background: #F7C2AD ;
    }

    .grid-view table.items tbody tr:hover
    {
        background: #F7C2AD;
    }

    .grid-view table.items tr.selected
    {
        background: #FFA785;
    }

   
    .grid-view table.items tr.odd {
        background: #DEDEDE;
    }
    </style>
    
<style>
.grid-view table.items th {background:black !important;}
</style>

</head>

<body>

    <!-- Start: Main -->
    <div id="main">
<?php // echo Yii::app()->user->checkAccess('Roles Manage'); ?>
        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top bg-primary">
            <div class="navbar-branding dark bg-primary">
                <!--<a class="navbar-brand" href="http://localhost/newSS/index.php/dashboard/dashboard/dashboard"> <?php // echo CHtml::encode(Yii::app()->name); ?><img style="max-width:125px" src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/logos/2.png">
                </a>-->
                <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
                <ul class="nav navbar-nav pull-right hidden">
                    <li>
                        <a href="#" class="sidebar-menu-toggle">
                            <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/img/avatars/1.jpg" alt="avatar" class="mw30 br64 mr15">
                        <span><?php echo Yii::app()->user->name; ?></span>
                        <span class="caret caret-tp hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                        <li class="br-t of-h">
                            <a href="#" class="fw600 p12 animated animated-short fadeInDown">
                                <span class="fa fa-power-off pr5"></span> Home </a>
                        </li>
                        <li class="br-t of-h">
                            <a href="<?php echo Yii::app()->controller->createUrl('/site/logout'); ?>" class="fw600 p12 animated animated-short fadeInDown">
                                <span class="fa fa-power-off pr5"></span> Logout </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </header>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary" style="background:#070129 url(<?php echo Yii::app()->request->baseUrl; ?>/images/grey-7.jpg) !important;">
            <div class="nano-content">

                <?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                        array('label'=>'Menu', 'itemOptions'=>array('class'=>'sidebar-label pt20')),
                        //paparan utama
                        array('label'=>'<span class="glyphicons glyphicons-home"></span>
                            <span class="sidebar-title">Utama</span>', 'url'=>array('/alumni/alumni/dashboard')
                        ),

                         array('label'=>'<span class="glyphicons glyphicons-cogwheel"></span>
                            <span class="sidebar-title">SRBac</span>', 'url'=>array('/srbac/authitem/manage')),
                        
                        array('label'=>'<span class="glyphicons glyphicons-user"></span>
                            <span class="sidebar-title">Alumni</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Alumni Data', 'url'=>array('/alumni/alumni/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Campus</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Campus Data', 'url'=>array('/campus/campus/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Campus Faculty</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Campus Faculty Data', 'url'=>array('/campusFaculty/campusFaculty/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Country</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Country Data', 'url'=>array('/country/country/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Faculty</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Faculty Data', 'url'=>array('/faculty/faculty/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Industrial Category</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Industrial Category Data', 'url'=>array('/industrialCategory/industrialCategory/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Level</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Level Data', 'url'=>array('/level/level/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Mode</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Mode Data', 'url'=>array('/mode/mode/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Organization</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Organization Data', 'url'=>array('/organization/organization/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Organization Type</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Organization Type Data', 'url'=>array('/organizationType/organizationType/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Pending</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Pending Data', 'url'=>array('/pending/pending/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Program</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Program Data', 'url'=>array('/program/program/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Race</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Race Data', 'url'=>array('/race/race/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Religion</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Religion Data', 'url'=>array('/religion/religion/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Salary Range</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Salary Range Data', 'url'=>array('/salaryRange/salaryRange/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Skill</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Skill Data', 'url'=>array('/skill/skill/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Skill Category</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Skill Category Data', 'url'=>array('/skillCategory/skillCategory/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">State</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>State Data', 'url'=>array('/state/state/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">UiTM Qualification</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>UiTM Qualification Data', 'url'=>array('/uitmQualification/uitmQualification/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Non UiTM Qualification</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Non UiTM Qualification Data', 'url'=>array('/nonUitmQualification/nonUitmQualification/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),

                        array('label'=>'<span class="glyphicons glyphicons-tag"></span>
                            <span class="sidebar-title">Professionalism</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Professionalism Data', 'url'=>array('/professionalism/professionalism/admin')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),
                       
                        //permohonan menu
                        /*array('label'=>'<span class="glyphicons glyphicons-file"></span>
                            <span class="sidebar-title">Borang</span><span class="caret"></span>', 'url'=>'', 'linkOptions'=>array('href'=>'#', 'class'=>'accordion-toggle'),
                            'submenuOptions'=>array('class'=>'nav sub-nav'),
                            'items'=>array(
                                array('label'=>'<span class="glyphicons glyphicons-show_big_thumbnails"></span>Borang Saman', 'url'=>array('/borang/borang/form')
                                ),
                                // array('label'=>'<span class="glyphicons glyphicons-circle_arrow_down"></span>Bid', 'url'=>'#'
                                // ),
                            ),
                        ),*/
                        
                        // array('label'=>'<span class="glyphicons glyphicons-cogwheels"></span> <span class="sidebar-title">Srbac</span>', 'url'=>array('/srbac'), 'visible'=>Yii::app()->user->checkAccess('Developer')),
                        // array('label'=>'<span class="glyphicons glyphicons-user"></span> <span class="sidebar-title">User</span>', 'url'=>array('/user/default/index'), 'visible'=>Yii::app()->user->checkAccess('User Manage')),
                         array('label'=>'<span class="glyphicons glyphicons-cogwheel"></span> <span class="sidebar-title">Roles</span>', 'url'=>array('/roles/default/index'), 'visible'=>Yii::app()->user->checkAccess('Roles Manage')),
                    ),
                    'encodeLabel' => false,
                    'htmlOptions' => array(
                        'class'=>'nav sidebar-menu',
                    ),
                )); ?>

                <div class="sidebar-toggle-mini">
                    <a href="#">
                        <span class="fa fa-sign-out"></span>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">
            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <?php if(isset($this->breadcrumbs)):?>
                        <?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,'separator'=>'&nbsp;&nbsp;/&nbsp;&nbsp;', 'htmlOptions'=>array('class'=>'breadcrumb'), 'homeLink'=>'<span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;/&nbsp;&nbsp;'.CHtml::link('Home', array('/')),)); ?><!-- breadcrumbs -->
                    <?php endif ?>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <?php echo $content; ?>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <?php
    Yii::app()->clientScript->registerScript(
            'template_main', 
            '
            Core.init({
                sbm: \'sb-l-c\',
            });',
            CClientScript::POS_READY
        );
    ?>

    <!-- END: PAGE SCRIPTS -->

</body>

</html>

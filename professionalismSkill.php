
<!DOCTYPE html>
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
</head>

<body class="form-input-page">
<?php 
     session_start();
        include("include/dbconn.php");
        include("include/session.php");
        $kp = $_SESSION["id"];

         if(isset($_POST['update'])){

            $skillcat =$_POST['skillcat'];
            $skilldes =$_POST['skilldes'];
            $certexp =$_POST['certexp'];

            for($i=0, $count = count($skillcat);$i<$count;$i++) {
                    $skillcat1  = $skillcat[$i];
                    $skilldes1 = $skilldes[$i];
                    $certexp1 = $certexp[$i];
                    

                    $retval = mysql_query("INSERT INTO professionalism (no_kp,SkillID,certexp) VALUES('$kp','$skillcat1','$certexp1')");
                    if(! $retval )
                        {
                           die('Could not update data: ' . mysql_error());
                        }
                        echo "Updated data successfully\n";
                        
                        

                }

         }
         else {}
           
            
            
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
                                <span class="panel-title">Current Employment</span>
                            </div>

                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="post" action="<?php $_PHP_SELF ?>">
                                        <label for="inputStandard" class="control-label">Academic Achievement from Other Institutions</label><p>
                                    <div class="row">   
                                        <!-- .section-divider -->
                                        <div class="col-xs-8">
                                        <div class="col-xs-2">
                                            <button type="button" value="Add Passenger" onClick="addRow('dataTable')" 
                                            class="btn btn-hover btn-alert btn-block">Add</button>
                                        </div>
                                        <div class="col-xs-3">
                                            <button type="button" value="Remove Passenger" onClick="deleteRow('dataTable')"
                                            class="btn btn-hover btn-alert btn-block">Remove</button>
                                        </div>
                                            <p>(Remove only checked item)</p>
                                        </div>
                                       <p>
                                         <table id="dataTable"  class="table table-striped table-hover" cellspacing="0" width="100%">
                                              <tbody> 
                                                <tr>
                                                  <p>
                                                    <td><input type="checkbox" required="required" name="chk[]" unchecked="" /></td>
                                                    <td>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Skill Category</label>
                                                            <div class="col-lg-8">
                                                                <label class="field select">
                                                                    <select id="skillcat" name="skillcat[]" class="form-control">
                                                                    <option value="1">Networking</option>
                                                                    <option value="2">Database(Oracle)</option>
                                                                    </select>
                                                                    <i class="arrow"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Skill Description</label>
                                                            <div class="col-lg-8">
                                                                <label class="field select">
                                                                    <select id="skilldes" name="skilldes[]" class="form-control">
                                                                    <option value="1">CCNA</option>
                                                                    <option value="2">CCNP</option>
                                                                    <option value="3">CCDE</option>
                                                                    <option value="4">CCIE</option>
                                                                    <option value="5">CCAR</option>
                                                                    <option value="6">ORACLE APPLICATION CERTIFICATION</option>
                                                                     <option value="7">ORACLE DATABASE CERTIFICATION</option>
                                                                    
                                                                    </select>
                                                                    <i class="arrow"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label" for="textArea2">Skill Certification and Experience</label>
                                                            <div class="col-lg-8">
                                                                <textarea class="form-control" id="certexp" name="certexp[]" rows="3"></textarea>
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
                                        <button type="submit" class="btn btn-hover btn-alert btn-block"  name="update" id="update">EDIT</button>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="button" class="btn btn-hover btn-alert btn-block">SAVE</button>
                                    </div>
                                    <div class="col-lg-2">
                                        <a href="contribution.php"><button type="button" class="btn btn-hover btn-alert btn-block">NEXT</button></a>
                                    </div>

                                    <div class="col-lg-5"></div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!-- End: Content -->

    </div>
    <!-- End: Main -->

    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Page Plugins via CDN -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/globalize/0.1.1/globalize.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js"></script>

    <!-- via local files 
    <script type="text/javascript" src="vendor/plugins/globalize/src/core.js"></script>
    <script type="text/javascript" src="vendor/plugins/moment/moment.min.js"></script> -->

    <!-- Page Plugins -->
    <script type="text/javascript" src="vendor/plugins/daterange/daterangepicker.js"></script>
    <script type="text/javascript" src="vendor/plugins/datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/jquerymask/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/tagmanager/tagmanager.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Demo JS    
            Demo.init();

            // daterange plugin options
            var rangeOptions = {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                },
                startDate: moment().subtract('days', 29),
                endDate: moment()
            }

            // Init daterange plugin
            $('#daterangepicker1').daterangepicker();

            // Init daterange plugin
            $('#daterangepicker2').daterangepicker(
                rangeOptions,
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
            );

            // Init daterange plugin
            $('#inline-daterange').daterangepicker(
                rangeOptions,
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
            );

            // Init datetimepicker - fields
            $('#datetimepicker1').datetimepicker();
            $('#datetimepicker2').datetimepicker();


            // Init datetimepicker - inline + range detection
            $('#datetimepicker3').datetimepicker({
                defaultDate: "9/4/2014",
                inline: true,
            });

            // Init datetimepicker - fields + Date disabled (only time picker)
            $('#datetimepicker5').datetimepicker({
                defaultDate: "9/25/2014",
                pickDate: false,
            });
            // Init datetimepicker - fields + Date disabled (only time picker)
            $('#datetimepicker6').datetimepicker({
                defaultDate: "9/25/2014",
                pickDate: false,
            });
            // Init datetimepicker - inline + Date disabled (only time picker)
            $('#datetimepicker7').datetimepicker({
                defaultDate: "9/25/2014",
                pickDate: false,
                inline: true
            });

            // Init colorpicker plugin
            $('#demo_apidemo').colorpicker({
                color: bgPrimary
            });
            $('.demo-auto').colorpicker();

            // Init jQuery Tags Manager 
            $(".tm-input").tagsManager({
                tagsContainer: '.tags',
                prefilled: ["Miley Cyrus", "Apple", "A Long Tag", "Na uh"],
                tagClass: 'tm-tag-info',
            });

            // Init Boostrap Multiselect
            $('#multiselect1').multiselect();
            $('#multiselect2').multiselect({
                includeSelectAllOption: true
            });
            $('#multiselect3').multiselect();
            $('#multiselect4').multiselect({
                enableFiltering: true,
            });
            $('#multiselect5').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-primary'
            });
            $('#multiselect6').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-info'
            });
            $('#multiselect7').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-success'
            });
            $('#multiselect8').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-warning'
            });

            // Init jQuery spinner init - default
            $("#spinner1").spinner();

            // Init jQuery spinner init - currency 
            $("#spinner2").spinner({
                min: 5,
                max: 2500,
                step: 25,
                start: 1000,
                //numberFormat: "C"
            });

            // Init jQuery spinner init - decimal  
            $("#spinner3").spinner({
                step: 0.01,
                numberFormat: "n"
            });

            // jQuery Time Spinner settings
            $.widget("ui.timespinner", $.ui.spinner, {
                options: {
                    // seconds
                    step: 60 * 1000,
                    // hours
                    page: 60
                },
                _parse: function(value) {
                    if (typeof value === "string") {
                        // already a timestamp
                        if (Number(value) == value) {
                            return Number(value);
                        }
                        return +Globalize.parseDate(value);
                    }
                    return value;
                },

                _format: function(value) {
                    return Globalize.format(new Date(value), "t");
                }
            });
            // Init jQuery Time Spinner
            $("#spinner4").timespinner();


            // Init jQuery masked inputs
            $('.date').mask('99/99/9999');
            $('.time').mask('99:99:99');
            $('.date_time').mask('99/99/9999 99:99:99');
            $('.zip').mask('99999-999');
            $('.phone').mask('(999) 999-9999');
            $('.phoneext').mask("(999) 999-9999 x99999");
            $(".money").mask("999,999,999.999");
            $(".product").mask("999.999.999.999");
            $(".tin").mask("99-9999999");
            $(".ssn").mask("999-99-9999");
            $(".ip").mask("9ZZ.9ZZ.9ZZ.9ZZ");
            $(".eyescript").mask("~9.99 ~9.99 999");
            $(".custom").mask("9.99.999.9999");

        });
    </script>
        <script type="text/javascript">
        jQuery(document).ready(function() {

            // "use strict";

            // Init Theme Core    
            Core.init();

            // Init Theme Core    
            Demo.init();

            $('input').on('click',function() {
                alert($(this).prop('checked'));
            });

            // Init custom page animation
            setTimeout(function() {
                $('.custom-nav-animation li').each(function(i, e) {
                    var This = $(this);
                    var timer = setTimeout(function() {
                        This.addClass('animated animated-short zoomIn');
                    }, 50 * i);
                });
            }, 500);

            // Init tray navigation smooth scroll
            $('.tray-nav a').smoothScroll({
                offset: -145
            });

            // Form Switcher
            $('#form-switcher > button').on('click', function() {
                var btnData = $(this).data('form-layout');
                var btnActive = $('#form-elements-pane .admin-form.active');

                // Remove any existing animations and then fade current form out
                btnActive.removeClass('slideInUp').addClass('animated fadeOutRight animated-shorter');
                // When above exit animation ends remove leftover classes and animate the new form in
                btnActive.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                    btnActive.removeClass('active fadeOutRight animated-shorter');
                    $('#' + btnData).addClass('active animated slideInUp animated-shorter')
                });
            });

            // Cache some dom elements
            var adminForm = $('.admin-form');
            var options = adminForm.find('.option');
            var switches = adminForm.find('.switch');
            var buttons = adminForm.find('.button');

            var Panel = $('#p1');

            // Form Skin Switcher
            $('#skin-switcher a').on('click', function() {
                var btnData = $(this).data('form-skin');

                $('#skin-switcher a').removeClass('item-active');
                $(this).addClass('item-active')

                adminForm.each(function(i, e) {
                    var skins = 'theme-primary theme-info theme-success theme-warning theme-danger theme-alert theme-system theme-dark'
                    var panelSkins = 'panel-primary panel-info panel-success panel-warning panel-danger panel-alert panel-system panel-dark'
                    $(e).removeClass(skins).addClass('theme-' + btnData);
                    Panel.removeClass(panelSkins).addClass('panel-' + btnData);
                });

                $(options).each(function(i, e) {
                    if ($(e).hasClass('block')) {
                        $(e).removeClass().addClass('block mt15 option option-' + btnData);
                    } else {
                        $(e).removeClass().addClass('option option-' + btnData);
                    }
                });
                $(switches).each(function(i, ele) {
                    if ($(ele).hasClass('switch-round')) {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-round switch-' + btnData);
                        } else {
                            $(ele).removeClass().addClass('switch switch-round switch-' + btnData);
                        }
                    } else {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-' + btnData);
                        } else {
                            $(ele).removeClass().addClass('switch switch-' + btnData);
                        }
                    }

                });
                buttons.removeClass().addClass('button btn-' + btnData);
            });


            setTimeout(function() {
                adminForm.addClass('theme-primary');
                Panel.addClass('panel-primary');

                $(options).each(function(i, e) {
                    if ($(e).hasClass('block')) {
                        $(e).removeClass().addClass('block mt15 option option-primary');
                    } else {
                        $(e).removeClass().addClass('option option-primary');
                    }
                });
                $(switches).each(function(i, ele) {

                    if ($(ele).hasClass('switch-round')) {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-round switch-primary');
                        } else {
                            $(ele).removeClass().addClass('switch switch-round switch-primary');
                        }
                    } else {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-primary');
                        } else {
                            $(ele).removeClass().addClass('switch switch-primary');
                        }
                    }
                });
                buttons.removeClass().addClass('button btn-primary');
            }, 2200);


        });

        function addRow(tableID) {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
            if(rowCount < 20){                           // limit the user from creating fields more than your limits
                var row = table.insertRow(rowCount);
                var colCount = table.rows[0].cells.length;
                for(var i=0; i<colCount; i++) {
                    var newcell = row.insertCell(i);
                    newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                }
            }else{
                 alert("Maximum is 20.");
                       
            }
        };

        function deleteRow(tableID) {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    if(rowCount <= 1) {                         // limit the user from removing all the fields
                        alert("Cannot Remove all.");
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
            }
        };

        //any time the amount changes
        $(document).ready(function() {
            $('input[name=BX_QTY],input[name=BX_UnitPrice]').change(function(e) {
                var total = 0;
                var $row = $(this).parent();
                var rate = $row.find('input[name=BX_QTY]').val();
                var pack = $row.find('input[name=BX_UnitPrice]').val();
                total = parseFloat(rate * pack);
                //update the row total
                $row.find('.amount').text(total);

                var total_amount = 0;
                $('.amount').each(function() {
                    //Get the value
                    var am= $(this).text();
                    console.log(am);
                    //if it's a number add it to the total
                    if (IsNumeric(am)) {
                        total_amount += parseFloat(am, 10);
                    }
                });
                $('.total_amount').text(total_amount);
            });
        });

        //isNumeric function Stolen from: 
        //http://stackoverflow.com/questions/18082/validate-numbers-in-javascript-isnumeric

        function IsNumeric(input) {
            return (input - 0) == input && input.length > 0;
        };
    function CheckColors(val){
    var element=document.getElementById('lain');
    if(val=='others1'||val=='others1')
    element.style.display='block';
    else  
    element.style.display='none';
}


    </script>
</body>

</html>

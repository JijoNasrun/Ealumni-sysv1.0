<?php 
 function runQuery($query) {
        $result = mysql_query($query);
        while($row=mysql_fetch_assoc($result)) {
            $resultset[] = $row;
        }       
        if(!empty($resultset))
            return $resultset;
    }
     
        
        $kp = $_SESSION["id"];
        $query = "SELECT * FROM skill_category";
        $results = runQuery($query);

        


         if(isset($_POST['update'])){

            $skillcat =$_POST['skillcat'];
            $skilldes =$_POST['skilldes'];
            $certexp =$_POST['certexp'];

            for($i=0, $count = count($skillcat);$i<$count;$i++) {
                    $skillcat1  = $skillcat[$i];
                    $skilldes1 = $skilldes[$i];
                    $certexp1 = $certexp[$i];
                    

                    $retval = mysql_query("INSERT INTO professionalism (no_kp,SkillID,certexp,skilldes) VALUES('$kp','$skillcat1','$certexp1','$skilldes1')");
                    if(! $retval )
                        {
                           die('Could not update data: ' . mysql_error());
                        }
                        echo "Updated data successfully\n";
                        
                        

                }

         }
         else{

         }
           
         
?>

            <!-- Begin: Content -->
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
                                                                    <select id="skillcat" name="skillcat[]" class="form-control" onChange="getSkillDescription(this.value)"  >
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
                                                                    <select id="skilldes" name="skilldes[]" class="form-control">
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
                                        <button type="submit" class="btn btn-rounded btn-alert btn-block"  name="update" id="update">EDIT</button>
                                    </div>

                                    <div class="col-lg-2">
                                        <a href="?content=5"><button type="button" class="btn btn-rounded btn-alert btn-block">NEXT</button></a>
                                    </div>

                                    <div class="col-lg-5"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <center>
                        <table id="table1">
                            <tr>
                                <td>SKILL ID</td><td>&nbsp</td>
                                <td>SKILL DESCRIPTION</td><td>&nbsp</td>
                                <td>EXPERIENCE</td><td>&nbsp</td>
                            </tr>
                                <?php 
                                $skillQuery = mysql_query("SELECT * FROM professionalism WHERE no_kp = '$kp'");
                                
                                
                                while($skillRow=mysql_fetch_array($skillQuery)){
                                    $nqid=$skillRow['professionalID'];
                                    $id = $skillRow['skillID'];
                                    $description = $skillRow['skilldes'];

                                    $skillID = mysql_query("SELECT * FROM skill_category where SkillCatID = '$id'");
                                    $skillIDRow = mysql_fetch_array($skillID);
                                    $skillcategory = $skillIDRow['SkillCatName'];
                                    
                                    $descQuery = mysql_query("SELECT * FROM skill where skillID = '$description'");
                                    $descRow = mysql_fetch_array($descQuery);
                                    $desc = $descRow['SkillDescription'];
                                    


                                
                            ?>
                                <td><?php echo $skillcategory?></td><td>&nbsp</td>
                                <td><?php echo $desc?></td><td>&nbsp</td>
                                <td><?php echo $skillRow['certexp'] ?></td><td>&nbsp</td>
                                
                                <td><a href="update_professionalism.php?id=<?=$nqid?>">Update</a></td>
                                </tr>

                                                            <?php
                                                                } ?>
                        </table></center>
                    </div>

                </div>

            </div>
            <!-- End: Content -->

        <link href="dist/css/select2.min.css" rel="stylesheet" />
        <script src="dist/js/select2.min.js"></script>
        <script type="text/javascript">
        jQuery(document).ready(function() {

             // $("#skilldes").select2();
                                                                   

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
                    row.id = "row" + rowCount;
                    row.class = "row" + rowCount;
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


        function getSkillDescription(val) {

            var $this = $('#skilldes').closest('tr');
            var trid = $this.attr('id');
            //alert("TR ID " + trid);

            $.ajax({cache:false,
                type: "POST",
                url: "get_skilldescription.php",
                data:'skill_id='+val,
                success: function(data){

                    $("#"+trid+"#skilldes").append(data);
                }
            });
       }



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

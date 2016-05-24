
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function getProgram(val) {
        $.ajax({
        type: "POST",
        url: "get_program.php",
        data:'level_id='+val,
        success: function(data){
            $("#program1").html(data);
        }
        });
       }
     </script>


<script type = "text/javascript">
     function getAcademicUitm(){
        $.ajax({ type: "POST", url : "get_UitmQualification.php", success: function(data){$("table1").html(data);
        }
        });
     }
     </script>




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
        //select values from level table
        $query ="SELECT * FROM level";
        $results = runQuery($query);    

        if(isset($_POST['update']))
         {
            
            $level1=$_POST['level1'];
            $program1=$_POST['program1'];
            $mode1=$_POST['mode1'];
            $yearG1=$_POST['yearG1'];
            $level2=$_POST['level2'];//check
            $program2=$_POST['program2'];//check
            $university=$_POST['university'];//check
            $yearG2=$_POST['yearG2'];//check
            
                for($i=0, $count = count($level1);$i<$count;$i++) {
                    $level  = $level1[$i];
                    $program = $program1[$i];
                    $mode = $mode1[$i];
                    $year = $yearG1[$i];
                    if (!empty($level)&&(!empty($mode))&&(!empty($year))){
                     $retval = mysql_query("INSERT INTO uitm_qualification (no_kp,level,mode,programID,yearGraduate) VALUES('$kp','$level','$mode','$program','$year')");
                      if(! $retval )
                        {
                           die('Could not update data: ' . mysql_error());
                        }
                        echo "Updated data successfully\n";
                        
                        

                }
            }

              
                for($j=0, $count = count($level2);$j<$count;$j++) {
                    $levelnu  = $level2[$j];
                    $programnu = $program2[$j];
                    $uni = $university[$j];
                    $yearnu = $yearG2[$j];
                    if (!empty($levelnu)&&(!empty($programnu))&&(!empty($uni))&&(!empty($yearnu))){ 
                     $retvals = mysql_query("INSERT INTO non_uitm_qualification (no_kp,level,university,yearGraduate,program) VALUES('$kp','$levelnu','$uni','$yearnu','$programnu')");
                      if(! $retvals )
                        {
                           die('Could not update data: ' . mysql_error());
                        }
                        echo "Updated data successfully\n";
                        

                }
            }

        }
        $query3 = "SELECT * FROM uitm_qualification WHERE no_kp like '$kp' order by yearGraduate";
        $results3 = runQuery($query3);

        $query4 = "SELECT * FROM non_uitm_qualification WHERE no_kp like '$kp'order by yearGraduate";
        $results4 =runQuery($query4);
           
         
            ?>

            <!-- Begin: Content -->
            <div id="content" class="animated fadeIn">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Academic Achievement</span>
                            </div>

                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="post" action="<?php $_PHP_SELF ?>">
                                    <label for="inputStandard" class="control-label">Academic Achievement from UiTM (FSKM)</label><p>
                                    
                                       <p>
                                         <div class="form-group">
                                                            <label class="col-lg-3 control-label">Level</label>
                                                            <div class="col-lg-8">
                                                                <label class="field select">
                                                                    <select id="level1" name="level1[]" class="form-control" onChange="getProgram(this.value);">
                                                                        <option value="">Select Level</option>
                                                                    <?php
                                                                        foreach($results as $display_level) {
                                                                        ?>
                                                                        <option value="<?php echo $display_level["LevelID"]; ?>"><?php echo $display_level["LevelName"]; ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                    <i class="arrow"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Program</label>
                                                            <div class="col-lg-8">
                                                                <label class="field select">
                                                                <select id="program1" name="program1[]" class="form-control">
                                                                    <option value="">Select Program</option>
                                                                </select>
                                                                <i class="arrow"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Mode</label>
                                                            <div class="col-lg-8">
                                                                <label class="field select">
                                                                <select id="mode1" name="mode1[]" class="form-control">
                                                                    <option value="">Select Mode</option>
                                                                    <option value="Full-Time">Full-Time</option>
                                                                    <option value="Part-Time">Part-Time</option>
                                                                </select>
                                                                <i class="arrow"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputStandard" class="col-lg-3 control-label">Year Graduate</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" id="yearG1" name="yearG1[]" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div>
                                                        <center>
                                                        <table id="table1">
                                                            <tr>
                                                                <td>Level</td><td>&nbsp</td>
                                                                <td>Mode</td><td>&nbsp</td>
                                                                <td>Program</td><td>&nbsp</td>
                                                                <td>Year Graduate</td><td>&nbsp</td>
                                                            </tr>
                                                            <?php
                                                                foreach($results3 as $dq) {
                                                                    $programid2=$dq["ProgramID"];
                                                                    $query6 = mysql_query("SELECT * FROM program where ProgramID ='$programid2'");
                                                                    $result6 = mysql_fetch_array($query6);

                                                            ?>
                                                                <tr><?php $qid=$dq['qualification_id'] ?>
                                                                <td><?php echo $dq["level"]?></td><td>&nbsp</td>
                                                                <td><?php echo $dq["mode"]?></td><td>&nbsp</td>
                                                                <td><?php echo $result6["ProgramName"];$pid = $dq["ProgramID"];?></td><td>&nbsp</td>
                                                                <td><?php echo $dq["yearGraduate"]?></td><td>&nbsp</td>
                                                                <td><a href="update_uitm.php?id=<?=$qid?>">Update</a></td>
                                                            </tr>

                                                            <?php
                                                                } ?>
                                                        </table>
                                                    </center>
                                                    </div>
                                        </div>
                                        <div class="panel-body">
                                        <label for="inputStandard" class="control-label">Academic Achievement from Other Institutions</label><p>
                                    <div class="row">   
              
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Level</label>
                                                            <div class="col-lg-8">
                                                                <label class="field select">
                                                                    <select id="level2" name="level2[]" class="form-control">
                                                                    <option value="">Select Level</option>
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
                                                                <input type="text" id="program2" name="program2[]" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputStandard" class="col-lg-3 control-label">University</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" id="university" name="university[]" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputStandard" class="col-lg-3 control-label">Year Graduate</label>
                                                            <div class="col-lg-8">
                                                                <input type="text" id="yearG2" name="yearG2[]" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                        <center>
                                                        <table id="table2">
                                                            <tr>
                                                                <td>Level</td><td>&nbsp</td>
                                                                <td>University</td><td>&nbsp</td>
                                                                <td>Program</td><td>&nbsp</td>
                                                                <td>Year Graduate</td><td>&nbsp</td>
                                                            </tr>
                                                            <?php
                                                                foreach($results4 as $dnq) {

                                                            ?>

                                                                <tr><?php $nqid=$dnq['qualification_id'] ?>
                                                                <td><?php echo $dnq["level"]?></td><td>&nbsp</td>
                                                                <td><?php echo $dnq["university"]?></td><td>&nbsp</td>
                                                                <td><?php echo $dnq['program']?></td><td>&nbsp</td>
                                                                <td><?php echo $dnq["yearGraduate"]?></td><td>&nbsp</td>
                                                                <td><a href="update_non_uitm.php?id=<?=$nqid?>">Update</a></td>
                                                            </tr>

                                                            <?php
                                                                } ?>
                                                        </table>
                                                    </center>
                                                </div>
                                                    
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="col-lg-5"></div>
                                    <div class="col-lg-2">
                                        <button type="submit" class="btn btn-rounded btn-alert btn-block"  name="update" id="update" value="Update">SAVE</button>
                                    </div>
                             
                                    <div class="col-lg-2">
                                        <a href="?content=3"><button type="button" class="btn btn-rounded btn-alert btn-block">NEXT</button></a>
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
            if(rowCount < 10 ){                           // limit the user from creating fields more than your limits
                var row = table.insertRow(rowCount);
                var colCount = table.rows[0].cells.length;
                for(var i=0; i<colCount; i++) {
                    var newcell = row.insertCell(i);
                    newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                }
            }else{
                 alert("Maximum is 10.");
                       
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


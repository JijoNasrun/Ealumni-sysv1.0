    <?php 

     
       
      
        $kp = $_SESSION["id"];

        if(isset($_POST['update'])){
            $contribution = $_POST['jawapan'];
            $data_serialize = serialize($contribution);

            $retval = mysql_query("UPDATE alumni SET contribution = '$data_serialize'  WHERE no_kp = '$kp'" );
            
            if(! $retval )
            {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";

        }
        else{

        }

    ?>


            <!-- Begin: Content -->
            <div id="content" class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title"><b>Contribution</b></span>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="post" action="<?php $_PHP_SELF ?>">
                                    <label class=" col-lg-2 control-label mb15">I can contribute the following to FSKM (please tick)</label>
                                            <div class="form-group">
                                                <div class="col-lg-9 pl15">
                                                    <div class="checkbox-custom mb5">
                                                        <input type="checkbox" id="checkboxDefault1" name="jawapan[]" value="Invited Speaker/Lecture">
                                                        <label for="checkboxDefault1">Invited Speaker/Lecture</label>
                                                    </div>
                                                    <div class="checkbox-custom mb5">
                                                        <input type="checkbox" id="checkboxExample2" name="jawapan[]" value="Academic Advisor">
                                                        <label for="checkboxExample2">Academic Advisor</label>
                                                    </div>
                                                    <div class="checkbox-custom mb5">
                                                        <input type="checkbox" id="checkboxExample3" name="jawapan[]" value="Industry Advisor">
                                                        <label for="checkboxExample3">Industry Advisor</label>
                                                    </div>
                                                    <div class="checkbox-custom mb5">
                                                        <input type="checkbox" checked id="checkboxExample4" name="jawapan[]" value=" Academic Collaboration">
                                                        <label for="checkboxExample4">Academic Collaboration</label>
                                                    </div>
                                                    <div class="checkbox-custom mb5">
                                                        <input type="checkbox" id="checkboxExample5" name="jawapan[]" value="Placement for FSKM Lecturer Industrial Attachment"> 
                                                        <label for="checkboxExample5">Placement for FSKM Lecturer Industrial Attachment</label>
                                                    </div>
                                                    <div class="checkbox-custom mb5">
                                                        <input type="checkbox" id="checkboxExample6" name="jawapan[]" value="Placement for FSKM Student Industrial Training Attachment">
                                                        <label for="checkboxExample6">Placement for FSKM Student Industrial Trainning Attachment</label>
                                                    </div>
                                                    <div class="checkbox-custom mb5">
                                                        <input type="checkbox" id="checkboxExample7" name="jawapan[]" value="Event Sponsorship">
                                                        <label for="checkboxExample7">Event Sponsorship</label>
                                                    </div>
                                                    <div class="checkbox-custom mb5">
                                                        <input type="checkbox" id="checkboxExample8" name="jawapan[]" value="Event Volunteer">
                                                        <label for="checkboxExample8">Event Volunteer</label>
                                                    </div>
                                                    <div class="checkbox-custom mb5">
                                                        <input type="checkbox" id="checkboxExample9" name="jawapan[]"value="As a Student">
                                                        <label for="checkboxExample9">As a Student (Further Study)</label>
                                                    </div>
                                                    <div class="checkbox-custom mb5">
                                                        <input type="checkbox" id="checkboxExample10" name="jawapan[]" value="Academic Questionnaire Respondent">
                                                        <label for="checkboxExample10">Academic Questionnaire Respondent</label>
                                                    </div>
                                                    <div>
                                                        <label class="col-lg-1 control-label" for="textArea2">Others</label>
                                                        <div class="col-lg-9">
                                                            <textarea class="form-control" id="certexp" name="jawapan[]" rows="1"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                
                                                <div class="col-lg-5">
                                                </div>
                                                <div class="col-lg-2">
                                                    <button type="submit" class="btn btn-rounded btn-alert btn-block" name="update" id="update" value="Update">UPDATE</button>
                                                </div>
                                                <div class="col-lg-2">
                                                    <a href="?content=6"><button type="button" class="btn btn-rounded btn-alert btn-block">NEXT</button></a>
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


  <?php
          
        $kp = $_SESSION["id"];


        //taking available alumni's existing data
        $rst=mysql_query("SELECT * FROM alumni WHERE no_kp ='$kp'");

        $row =mysql_fetch_array($rst);
        $display_names=$row['nama'];
        $display_address=$row['alamat'];
        $display_postcode=$row['poskod_tetap'];
        $display_state=$row['negeri_tetap'];
        $display_city=$row['bandar_tetap'];
        $correspondence_addr=$row['calamat_tetap'];
        $correspondence_postcode=$row['cposkod_tetap'];
        $correspondence_city=$row['cbandar_tetap'];
        $correspondence_state=$row['cnegeri_tetap'];
        $correspondence_country=$row['cnegara_tetap'];
        $no_tel = $row['no_tel'];
        $home_office = $row['home_office_tel'];
        $email = $row['email_rasmi'];
        $birthday = $row['tarikh_lahir'];

 


        //update alumni information
         if(isset($_POST['update']))
         {
           

            
            
           
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $postcode = $_POST['postcode'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $email = $_POST['email'];
            $telnum = $_POST['telnum'];
            $homeoffice = $_POST['homeoffice'];
            $salutation = $_POST['salutation'];
            $birthdate = $_POST['birthdate'];
            $country = $_POST['ccountry'];
            $caddress = $_POST['caddress'];
            $cpostcode = $_POST['cpostcode'];
            $ccity = $_POST['ccity'];
            $cstate = $_POST['cstate'];
            $ccountry = $_POST['ccountry'];
            $staff_num= $_POST['staff_num'];
            $department= $_POST['department'];
            $campus = $_POST['campus'];
            
          
            
            $retval = mysql_query("UPDATE alumni SET  jantina = '$gender',alamat ='$address', poskod_tetap = '$postcode', bandar_tetap = '$city', negeri_tetap = '$state', negara_tetap='$country', email_rasmi = '$email', no_tel = '$telnum', gelaran='$salutation',tarikh_lahir='$birthdate',calamat_tetap ='$caddress', cposkod_tetap = '$cpostcode', cbandar_tetap = '$ccity', cnegeri_tetap = '$cstate', cnegara_tetap='$ccountry',staff_id='$staff_num',department='$department',campus='$campus',home_office_tel='$homeoffice'  WHERE no_kp = '$kp'" );
            
            if(! $retval )
            {
               die('Could not update data: ' . mysql_error());
            }

            echo "Updated data successfully\n";

         }
         else
         {}
            ?>

            <!-- Begin: Content -->
            <div id="content" class="animated fadeIn">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Biodata </span>
                            </div>

                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="post" action="<?php $_PHP_SELF ?>">
                                    
                                    <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">Name</label>
                                        <div class="col-lg-5">
                                            <input type="text" id="name" class="form-control" name="name" disabled value="<?php echo $display_names;?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Salutation</label>
                                        <div class="col-lg-8">
                                            <label class="field select">
                                                        <select id="salutation" name="salutation" class="form-control">
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                            <option value="Miss">Miss</option>
                                                            <option value="Datuk">Datuk</option>
                                                            <option value="Datuk Seri">Datuk Seri</option>
                                                            <option value="Tan Sri">Tan Sri</option>
                                                        </select>
                                                        <i class="arrow"></i>
                                                    </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">Birth Date</label>
                                        <div class="col-lg-3">
                                            <?php
                                                
                                                $getyear = substr($kp,0,2);
                                                $get_month = substr($kp,2,2);
                                                $get_day= substr($kp,4,2);
                                                
                                             ?>
                                            <input type="text" id="datepicker" disabled class="form-control" name="birthdate" value="<?php echo '19'.$getyear.'-'.$get_month;'-'.$get_day; ?>">
                                        </div>
                                    
                                    
                                        <label class="col-lg-2 control-label">Gender</label>
                                        <div class="col-lg-2">
                                            <label class="field select">
                                            <?php
                                                // $kp is no kad pengenalan capture from session id
                                                $get_gender=substr($kp, 11);
                                            ?>
                                                        <select id="gender" name="gender" class="form-control">
                                                        <?php 
                                                        //if modulus by two get zero then even!
                                                        if ($get_gender % 2 == 0) {
                                                                  echo "<option value='Female' selected>Female</option>";
                                                        }else{
                                                                  echo "<option value='Male' selected>Male</option>";
                                                        } 
                                                        ?>
                                                        </select>
                                                        <i class="arrow"></i>
                                                    </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Nationality</label>
                                        <div class="col-lg-8">
                                            <label class="field select">
                                                        <select id="nationality" name="nationality" class="form-control">
                                                            <option value="Thailand" >Thailand</option>
                                                            <option value="Malaysia" selected>Malaysia</option>
                                                            <option value="Singapura">Singapura</option>
                                                        </select>
                                                        <i class="arrow"></i>
                                                    </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="textArea2">Personal Address</label>
                                        <div class="col-lg-8">
                                            <textarea class="form-control" id="address" name='address' rows="3"><?php echo $display_address ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Postcode</label>
                                        <div class="col-lg-3">
                                            <input type="text" id="postcode" class="form-control" name="postcode" value="<?php echo $display_postcode?>">
                                        </div>
                                    
                                        <label class="col-lg-2 control-label">City</label>
                                        <div class="col-lg-3">
                                            <input type="text" id="city" name="city" class="form-control" value="<?php echo $display_city ?>">
                                        </div>
                                    </div>     

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">State</label>
                                        <div class="col-lg-3">
                                            <label class="field select">
                                                        <select id="state" name="state" class="form-control">
                                                            <option value="<?php echo $display_state?>"><?php echo $display_state?></option>
                                                            <option value="Wilayah Persekutuan">Wilayah Persekutuan</option>
                                                            <option value="Selangor">Selangor</option>
                                                            <option value="Pahang">Pahang</option>
                                                            <option value="Perlis">Perlis</option>
                                                            <option value="Johor">Johor</option>
                                                            <option value="Terengganu">Terengganu</option>
                                                            <option value="Kelantan">Kelantan</option>
                                                            <option value="Melaka">Melaka</option>
                                                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                                                            <option value="Sabah">Sabah</option>
                                                            <option value="Sarawak">Sarawak</option>
                                                            <option value="Kedah">Kedah</option>
                                                            <option value="Pulau Pinang">Pulau Pinang</option>
                                                            <option value="Perak">Perak</option>
                                                        </select>
                                                        <i class="arrow"></i>
                                                    </label>
                                        </div>

                                    
                                        <label class="col-lg-2 control-label">Country</label>
                                        <div class="col-lg-4">
                                            <label class="field select">
                                                        <select id="country" name="country" class="form-control">
                                                            <option value="">Country...</option>
                                                            <option value="Afganistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bonaire">Bonaire</option>
                                                            <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                            <option value="Brunei">Brunei</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Canary Islands">Canary Islands</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Channel Islands">Channel Islands</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos Island">Cocos Island</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote DIvoire">Cote D'Ivoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Curaco">Curacao</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="East Timor">East Timor</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands">Falkland Islands</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Ter">French Southern Ter</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Great Britain">Great Britain</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Hawaii">Hawaii</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran">Iran</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Isle of Man">Isle of Man</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea North">Korea North</option>
                                                            <option value="Korea Sout">Korea South</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Laos">Laos</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libya">Libya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macau">Macau</option>
                                                            <option value="Macedonia">Macedonia</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malaysia" selected>Malaysia</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Midway Islands">Midway Islands</option>
                                                            <option value="Moldova">Moldova</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Nambia">Nambia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                            <option value="Nevis">Nevis</option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau Island">Palau Island</option>
                                                            <option value="Palestine">Palestine</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Phillipines">Philippines</option>
                                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russia">Russia</option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="St Barthelemy">St Barthelemy</option>
                                                            <option value="St Eustatius">St Eustatius</option>
                                                            <option value="St Helena">St Helena</option>
                                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                            <option value="St Lucia">St Lucia</option>
                                                            <option value="St Maarten">St Maarten</option>
                                                            <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                            <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                            <option value="Saipan">Saipan</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="Samoa American">Samoa American</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia">Serbia</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syria">Syria</option>
                                                            <option value="Tahiti">Tahiti</option>
                                                            <option value="Taiwan">Taiwan</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania">Tanzania</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States of America">United States of America</option>
                                                            <option value="Uraguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Vatican City State">Vatican City State</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Vietnam">Vietnam</option>
                                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                            <option value="Wake Island">Wake Island</option>
                                                            <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zaire">Zaire</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                        <i class="arrow"></i>
                                                    </label>
                                        </div>
                                    </div>  

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="textArea2">Correspondence Address</label>
                                        <div class="col-lg-8">
                                            <textarea class="form-control" id="caddress" rows="3" name='caddress'><?php echo $correspondence_addr ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Postcode</label>
                                        <div class="col-lg-3">
                                            <input type="text" id="cpostcode" name='cpostcode' class="form-control" value="<?php echo $correspondence_postcode ?>">
                                        </div>
                                    
                                        <label class="col-lg-2 control-label">City</label>
                                        <div class="col-lg-3">
                                            <input type="text" id="ccity" name='ccity' class="form-control" value="<?php echo $correspondence_city ?>">
                                        </div>
                                    </div>     

                                    <div class="form-group">
                                        
                                        <label class="col-lg-3 control-label">State</label>
                                        <div class="col-lg-3">
                                            <label class="field select">
                                                            <select id="cstate" name="cstate" class="form-control">

                                                            <option value="<?php echo $correspondence_state?>"><?php echo $correspondence_state?></option>
                                                            <option value="Wilayah Persekutuan">Wilayah Persekutuan</option>
                                                            <option value="Selangor">Selangor</option>
                                                            <option value="Pahang">Pahang</option>
                                                            <option value="Perlis">Perlis</option>
                                                            <option value="Johor">Johor</option>
                                                            <option value="Terengganu">Terengganu</option>
                                                            <option value="Kelantan">Kelantan</option>
                                                            <option value="Melaka">Melaka</option>
                                                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                                                            <option value="Sabah">Sabah</option>
                                                            <option value="Sarawak">Sarawak</option>
                                                            <option value="Kedah">Kedah</option>
                                                            <option value="Pulau Pinang">Pulau Pinang</option>
                                                            <option value="Perak">Perak</option>
                                                        </select>
                                                        <i class="arrow"></i>
                                                    </label>
                                        </div>
                                    
                                        <label class="col-lg-2 control-label">Country</label>
                                        <div class="col-lg-4">
                                            <label class="field select">
                                                        <select id="ccountry" name="ccountry" class="form-control"><?php echo $correspondence_country ?>
                                                            <option value="">Country...</option>
                                                            <option value="Afganistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bonaire">Bonaire</option>
                                                            <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                            <option value="Brunei">Brunei</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Canary Islands">Canary Islands</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Channel Islands">Channel Islands</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos Island">Cocos Island</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote DIvoire">Cote D'Ivoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Curaco">Curacao</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="East Timor">East Timor</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands">Falkland Islands</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Ter">French Southern Ter</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Great Britain">Great Britain</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Hawaii">Hawaii</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran">Iran</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Isle of Man">Isle of Man</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea North">Korea North</option>
                                                            <option value="Korea Sout">Korea South</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Laos">Laos</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libya">Libya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macau">Macau</option>
                                                            <option value="Macedonia">Macedonia</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malaysia" selected>Malaysia</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Midway Islands">Midway Islands</option>
                                                            <option value="Moldova">Moldova</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Nambia">Nambia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                            <option value="Nevis">Nevis</option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau Island">Palau Island</option>
                                                            <option value="Palestine">Palestine</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Phillipines">Philippines</option>
                                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russia">Russia</option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="St Barthelemy">St Barthelemy</option>
                                                            <option value="St Eustatius">St Eustatius</option>
                                                            <option value="St Helena">St Helena</option>
                                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                            <option value="St Lucia">St Lucia</option>
                                                            <option value="St Maarten">St Maarten</option>
                                                            <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                            <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                            <option value="Saipan">Saipan</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="Samoa American">Samoa American</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia">Serbia</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syria">Syria</option>
                                                            <option value="Tahiti">Tahiti</option>
                                                            <option value="Taiwan">Taiwan</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania">Tanzania</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States of America">United States of America</option>
                                                            <option value="Uraguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Vatican City State">Vatican City State</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Vietnam">Vietnam</option>
                                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                            <option value="Wake Island">Wake Island</option>
                                                            <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zaire">Zaire</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                        <i class="arrow"></i>
                                                    </label>
                                        </div>
                                    </div> 

                                    <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">Email</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="email" name="email" class="form-control" value="<?php echo $email?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">Telephone</label>
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label for="inputStandard" class="col-lg-2 control-label">Mobile</label>
                                                <div class="col-lg-4">
                                                    <input type="text" id="telnum" name="telnum" class="form-control" placeholder="" value="<?php echo $no_tel ?>">
                                                </div>
                                                <label for="inputStandard" class="col-lg-2 control-label">Home/Office</label>
                                                <div class="col-lg-4">
                                                    <input type="text" id="homeoffice" name="homeoffice" class="form-control" placeholder="" value="<?php echo $home_office ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">Are you currently a UiTM staff ?</label>
                                        <div class="col-lg-6">      
                                                <div class="col-lg-3">
                                                    <div class="radio-custom square mb5">
                                                        <input type="radio" id="radioExample1" name="radioExample" onClick="show();">
                                                        <label for="radioExample1">Yes</label>
                                                    
                                                        <input type="radio" id="radioExample2" name="radioExample" onClick="hide();">
                                                        <label for="radioExample2">No</label>
                                                    </div>
                                                </div>
                                         </div>
                                    </div>

                                    <div class="form-group" id="staff">
                                        <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">Staff Number</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="staff_num" name="staff_num"class="form-control" value="N/A">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">Department</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="department" name="department" class="form-control" value="N/A">
                                        </div>
                                        </div>
                                    
                                        <div class="form-group">
                                        <label for="inputStandard" class="col-lg-3 control-label">Campus</label>
                                        <div class="col-lg-8">
                                            <select id="campus" name="campus" class="form-control">
                                                <option value="N/A">N/A</option>
                                                <option value="A">SERI ISKANDAR</option>
                                                <option value="A4">TAPAH</option>
                                                <option value="B">SHAH ALAM</option>
                                                <option value="C">JENGKA</option>
                                                <option value="C3">RAUB</option>
                                                <option value="D">MACHANG</option>
                                                <option value="D2">KOTA BHARU</option>
                                                <option value="J">SEGAMAT</option>
                                                <option value="K">SUNGAI PETANI</option>
                                                <option value="M">ALOR GAJAH</option>
                                                <option value="M3">JASIN</option>
                                                <option value="N">KUALA PILAH</option>
                                                <option value="N4">SEREMBAN 3</option>        
                                                <option value="P2">BERTAM</option>
                                                <option value="Q">SAMARAHAN</option>
                                                <option value="Q5">SAMARAHAN 2</option>
                                                <option value="R">ARAU</option>
                                                <option value="S">KOTA KINABALU</option>
                                                <option value="T">DUNGUN</option>
                                                <option value="T5">KUALA TERENGGANU</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="col-lg-5"></div>
                                    <div class="col-lg-2">
                                        <button type="submit" class="btn btn-rounded btn-alert btn-block" name="update" id="update" value="Update">SAVE</button>
                                    </div>
                                    
                                    <div class="col-lg-2">
                                        <a href ="?content=2"><button type="button" class="btn btn-rounded btn-alert btn-block" >NEXT</button></a>
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

<?php  
include("include/dbconn.php");


function runQuery($query) {
        $result = mysql_query($query);
        while($row=mysql_fetch_assoc($result)) {
            $resultset[] = $row;
        }       
        if(!empty($resultset))
            return $resultset;
    } ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>E-Alumni FSKM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">

<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.8.0.min.js"></script>
<!--[if lt IE 9]><script src="js/modernizr.custom.js"></script><![endif]-->
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/functions.js"></script>
<script src="alertify.js/lib/alertify.min.js"></script>
<link rel="stylesheet" type="text/css" href="alertify.js/themes/alertify.css" />
<link rel="stylesheet" type="text/css" href="alertify.js/themes/alertify.default.css" />

<link href="check/css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
    <!--//webfonts-->
   <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function getProgram(val) {
        $.ajax({
        type: "POST",
        url: "get_program.php",
        data:'level_id='+val,
        success: function(data){
            $("#program").html(data);
        }
        });
       }
     </script>
</head>
<body>
<div id="wrapper">

  <!-- main -->
   <center>
    <div class="main">
       <fieldset style="float: center; width: 400px; background-color:#d9d9d9;">
     <h1><p>Provide us with your details for further verification.</p>
          <p>We will email you as soon as possible</p>
      </h1></fieldset>
      
    <form action="email0.php" method="post">
        <h1><span>Alumni</span> <lable> Information </lable> </h1>
        <div class="inset">
          <p>
            <label>IC Number :</label>
            <input type="text" placeholder="IC" name="IC" required/>
          </p>
                  <p>
            <label>Name :</label>
            <input type="text" placeholder="Name" name="name" required/>
          </p>
                <p>
            <label>E-mail :</label>
            <input type="text" name="mail" placeholder="Email"/>
          </p>
          <p>
            <label>Level :</label>
            <select id="level" name="level" class="form-control" onChange="getProgram(this.value);">
                                                                    <?php
                                                                    $query ="SELECT * FROM level";
                                                                    $results = runQuery($query);
                                                                        foreach($results as $display_level) {
                                                                        ?>
                                                                        <option value="<?php echo $display_level["LevelID"]; ?>"><?php echo $display_level["LevelName"]; ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                    <i class="arrow"></i>
          </p>
                 <p>
            <label>Programme Code :</label>
            <select id="program" name="program" class="form-control">
                                                                
                                                                </select>
                                                                <i class="arrow"></i>
          </p>
                 <p>
            <label>Year Graduate :</label>
            <input type="text" name="yearg" placeholder="Year Graduate"/>
          </p>
      
       </div>
   
        <p class="p-container">
          <span><a href="#"></a></span>
          <input type="submit" name="submit" id="submit"  value=" Submit "/>
        </p>
    </form>
  </div> </center>
        

  <!-- end of main -->

  <!-- footer-push -->
  <div id="footer-push"></div>
  <!-- end of footer-push -->
</div>
<!-- end of wrapper -->

</body>
</html>
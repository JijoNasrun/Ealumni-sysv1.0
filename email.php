<!DOCTYPE html>
<html lang="en">
<head>
<title>Simple</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.8.0.min.js"></script>
<!--[if lt IE 9]><script src="js/modernizr.custom.js"></script><![endif]-->
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/functions.js"></script>

<link href="check/css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
    <!--//webfonts-->

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
            <label for = "password">Password :</label>
            <input type="password" placeholder="Password" name="password" required/>
          </p>
                <p>
            <label>E-mail :</label>
            <input type="text" name="mail" placeholder="Email"/>
          </p>
                 <p>
            <label>Programme Code :</label>
            <input type="text" name="program" placeholder="Program"/>
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
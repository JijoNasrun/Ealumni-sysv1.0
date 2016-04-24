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

<link href="check/css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
    <!--//webfonts-->

    <!-- css for the availability check -->
    <link href="available/css.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body><center>
<div id="wrapper">


    <div class="main">
    <form name="form" method="post" action="login0.php" autocomplete="off">
        <h1><span>e-Alumni</span> <lable> Login </lable> </h1>
        <div class="inset">
          <p>
            <label for="IC">IC Number</label>
            <input type="text" name="IC" id="icN" size="30" onblur="return check_ic();"
                    onchange="alumni_info(this.value)" autocomplete="off" required="required"/>
                     <div id="Info"></div>
            <span id="Loading"><img src="available/loader.gif" alt="" /></span>
                     
            <br/>
            <div id="txtHint3"></div>
          </p>
                <p>
            <label for="password">Password :</label>
            <input type="password" placeholder="Password" name="password" required/>
          </p>
          <p>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me!</label>
          </p>
       </div>
   
        <p class="p-container">
          <span><a href="forgot_password.php">Forgot password ?</a></span>
           <input type="submit" name="submit" id="submit" value="Log In" disabled="disabled" />
        </p>
    </form>
  </div> 
        

  <!-- end of main -->

  <!-- footer-push -->
  <div id="footer-push"></div>
  <!-- end of footer-push -->
</div>
<!-- end of wrapper -->
<center>
</body>
</html>
<script type="text/javascript">

  $(document).ready(function() {
    $('#Loading').hide();    
  });

  function check_ic(){

  var ic = $("#icN").val();
  if(ic.length > 2){
    $('#Loading').show();
    $.post("check_alumni_availablity.php",
      {
      ic: $('#icN').val(),
    }, function(response){
      $('#Info').fadeOut();
       $('#Loading').hide();
      setTimeout("finishAjax('Info', '"+escape(response)+"')", 450);
      
    });
    return false;
  }
}

function finishAjax(id, response){
 
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn(1000);
  
} 

function alumni_info(str)
{
if (str=="")
  {
  document.getElementById("txtHint3").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint3").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","alumni_info.php?r="+str,true);
xmlhttp.send();
}

</script>
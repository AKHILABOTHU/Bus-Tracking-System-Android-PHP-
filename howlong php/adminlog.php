<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>How Long to Wait</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
		{
$("#username").focus();

		});
function reset()
{
	
	$("#vivek").html("");
	
}
function validate()
{
var name=$("#username").val();
var pwd=$("#password").val();
 
$("#theform").submit(function()
		{

	if(name=="admin" && pwd=="admin")
	{
window.location="index.php"
return true;
	}
	else if(name=="")
	{
	alert("Please enter the Username");
	return false;
	}
else if(pwd=="")
{
     alert("please enter the Password");
	return false;
}
else
{
	alert("username and password are wrong");
	return false;
}
return true;
		});
}
</script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html">How Long to Wait</a></h1>
      </div>
     
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.php"><span>Home Page</span></a></li>
          <li><a href="adminlog.php"><span>Admin Login</span></a></li>
          
        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="960" height="360" alt="" /><span></span></a> <a href="#"><img src="images/slide2.jpg" width="960" height="360" alt="" /><span></span></a> <a href="#"><img src="images/slide3.jpg" width="960" height="360" alt="" /><span></span></a> </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Abstract</span></h2>
          <div class="clr"></div>
         
          <div class="post_content">
          
          </div>
          <div class="clr"></div>
        </div>
        <div class="article">
         
          <div class="clr"></div>
          <div class="img"><img src="images/img2.jpg" width="180" height="243" alt="" class="fl" /></div>
          <div class="post_content">
              
                  
                  <h2>Admin Login</h2>

<form method="post" action="adminpage.php" id="theform" onSubmit="return validate()" >
      <b style="color:#fff;">Username:</b>&nbsp;&nbsp;<input type="text" name="username"id="username" style="width: 180px; height:30px;"><br><br>
      <b style="color:#fff;"> Password:</b>&nbsp;&nbsp;<input type="password" name="password" id="password" style="width: 180px; height:30px;" ><br><br>
      <input type="submit"  style="width: 250px; height:30px;" name="commit" value="Login" onClick="validate()" >
    </form>
            <p></p>
           
          </div>
          <div class="clr"></div>
        </div>
        <p class="pages"><small>Page 1 of 2 &nbsp;&nbsp;&nbsp;</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="">Home</a></li>
            <li><a href="adminlog.php">Admin Login</a></li>
           
          </ul>
        </div>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <a href="#"><img src="images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
        <p>Bus arrival time prediction, Participatory sensing, Mobile
phones</p>
       
      </div>
     
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
<!--    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Design by Dream <a href="http://www.dreamtemplate.com/">Web Templates</a></p>
      <div style="clear:both;"></div>
    </div>-->
  </div>
</div>
</body>
</html>

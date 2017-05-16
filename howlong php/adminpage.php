<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconn.php';
if (isset($_REQUEST['submit']))
{
$sql="INSERT INTO trackk(from_,to_,r1,a1,r2,a2,r3,a3,r4,a4,r5,a5,la1,lo1,la2,lo2,la3,lo3,la4,lo4,la5,lo5)
VALUES
('$_POST[from]','$_POST[to]','$_POST[r1]','$_POST[a1]','$_POST[r2]','$_POST[a2]','$_POST[r3]','$_POST[a3]','$_POST[r4]','$_POST[a4]','$_POST[r5]','$_POST[a5]','$_POST[la1]','$_POST[lo1]','$_POST[la2]','$_POST[lo2]','$_POST[la3]','$_POST[lo3]','$_POST[la4]','$_POST[lo4]','$_POST[la5]','$_POST[lo5]')";
if(mysql_query($sql))
echo "success";
else
echo mysql_error();
}
?>

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

</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html">How Long to Wait</a></h1>
      </div>
      <%
if(request.getParameter("msg")!=null){
out.println("<script>alert('Welcome..!')</script>");
}
%>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
            <li class="active"><a href="adminpage.php"><span>Home Page</span></a></li>
            <li><a href="trackview.php"><span>Track List</span></a></li>
            <li><a href="userlist.php"><span>User List</span></a></li>
			 <li><a href="update.php"><span>Route Update</span></a></li>
          <li><a href="adminlog.php"><span>Logout</span></a></li>
          
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
         
          <div class="clr"></div>
         
          <div class="post_content">
          
          </div>
          <div class="clr"></div>
        </div>
        <div class="article">
         
          <div class="clr"></div>
          <div class="img"><img src="images/img2.jpg" width="180" height="243" alt="" class="fl" /></div>
          <div class="post_content">
              <form name="f1" action="adminpage.php" method="post" enctype="multipart/form-data">
                  
                  <center>  </center>
  <fieldset>
<table>
    <caption><h2> Bus Traveling routes
                          and  Bus Arrival time at various bus stops</h2></caption>
    <tr>
           
        <td>FROM</td>
        <td><input type="text" name="from" id="from" style="width: 120px; height:30px;"></td>
        <td>&nbsp;&nbsp;</td>
        <td>TO</td>
        <td><input type="text" name="to" id="to" style="width: 120px; height:30px;"></td>
		 <td>BUS PORT</td>
		
        <td><input type="text"   READONLY placeholder="NUMBER" id="a1" style="width: 150px; height:30px;"></td> 
    </tr>
    <tr>
        
        <td>ROUTE ID 1:</td>
        <td><input type="text" name="r1" id="r1" style="width: 120px; height:30px;"></td>
       <td>&nbsp;&nbsp;</td>
        <td>ARRIVAL TIME</td>
        <td><input type="text" name="a1" id="a1" style="width: 120px; height:30px;"></td>
        <td>AND</td>
        <td><input type="text" name="la1" placeholder="Latitude" id="a1" style="width: 100px; height:30px;"></td> 
	<td><input type="text" name="lo1"   placeholder="Longitude" id="a1" style="width: 100px; height:30px;"></td>
    </tr>
    
    <tr>
        
        <td>ROUTE ID 2:</td>
        <td><input type="text" name="r2" id="r2" style="width: 120px; height:30px;"></td>
       <td>&nbsp;&nbsp;</td>
        <td>ARRIVAL TIME</td>
        <td><input type="text" name="a2" id="a2" style="width: 120px; height:30px;"></td>
         <td>AND</td>
        <td><input type="text" name="la2" placeholder="Latitude" id="a1" style="width: 100px; height:30px;"></td> 
	<td><input type="text" name="lo2"   placeholder="Longitude" id="a1" style="width: 100px; height:30px;"></td>
   
    </tr>
    
    <tr>
        
        <td>ROUTE ID 3:</td>
        <td><input type="text" name="r3" id="r3" style="width: 120px; height:30px;"></td>
       <td>&nbsp;&nbsp;</td>
        <td>ARRIVAL TIME</td>
        <td><input type="text" name="a3" id="a3" style="width: 120px; height:30px;"></td>
         <td>AND</td>
        <td><input type="text" name="la3" placeholder="Latitude" id="a1" style="width: 100px; height:30px;"></td> 
	<td><input type="text" name="lo3"   placeholder="Longitude" id="a1" style="width: 100px; height:30px;"></td>
   
    </tr>
    
    <tr>
        
        <td>ROUTE ID 4:</td>
        <td><input type="text" name="r4" id="r4" style="width: 120px; height:30px;"></td>
       <td>&nbsp;&nbsp;</td>
        <td>ARRIVAL TIME</td>
        <td><input type="text" name="a4" id="a4" style="width: 120px; height:30px;"></td>
         <td>AND</td>
        <td><input type="text" name="la4" placeholder="Latitude" id="a1" style="width: 100px; height:30px;"></td> 
	<td><input type="text" name="lo4"   placeholder="Longitude" id="a1" style="width: 100px; height:30px;"></td>
   
    </tr>
    
    <tr>
        
        <td>ROUTE ID 5:</td>
        <td><input type="text" name="r5" id="r5" style="width: 120px; height:30px;"></td>
       <td>&nbsp;&nbsp;</td>
        <td>ARRIVAL TIME</td>
        <td><input type="text" name="a5" id="a5" style="width: 120px; height:30px;"></td>
         <td>AND</td>
        <td><input type="text" name="la5" placeholder="Latitude" id="a1" style="width: 100px; height:30px;"></td> 
	<td><input type="text" name="lo5"   placeholder="Longitude" id="a1" style="width: 100px; height:30px;"></td>
   
    </tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr>
        
        <td></td>
        <td><input type="submit" name="submit" value="SAVE" style="width: 120px; height:30px; background-color: greenyellow"></td>
       <td>&nbsp;&nbsp;</td>
        <td></td>
        <td> <input type="reset" value="Clear" style="width: 120px; height:30px; background-color: red"></td>
    </tr>
</table><br></fieldset>
 
                    
                     </form>

            <p></p>
           
          </div>
          <div class="clr"></div>
        </div>
        <p class="pages"><small>Page 1 of 2 &nbsp;&nbsp;&nbsp;</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
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

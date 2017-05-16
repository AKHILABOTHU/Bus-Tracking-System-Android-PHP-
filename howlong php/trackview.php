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

<script>
		function check(id)
{
    window.location.href="update1.php?edit=" + id;
}
		</script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1>How Long to Wait</a></h1>
      </div>
      <%
if(request.getParameter("msg")!=null){
out.println("<script>alert('Track List..!')</script>");
}
%>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
            <li class="active"><a href="adminpage.php"><span>Home Page</span></a></li>
            <li><a href="trackview.php"><span>Track List</span></a></li>
            <li><a href="userlist.php"><span>User List</span></a></li>
			 <li><a href="update1.php"><span>Route Update</span></a></li>
          <li><a href="adminlog.php"><span>Logout</span></a></li>
          
        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="960" height="360" alt="" /><span></span></a> <a href="#"><img src="images/slide2.jpg" width="960" height="360" alt="" /><span></span></a> <a href="#"><img src="images/slide3.jpg" width="960" height="360" alt="" /><span></span></a> </div>
                 <br> <?php
			 include_once 'dbconn.php';
$sql="select * from trackk";
$result=mysql_query($sql) or die(mysql_error());
if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}
echo "<table border=\"1\" align=\"left\" >";
echo "<th bgcolor='#000000'>FROM   </th>";
echo "<th bgcolor='#000000'>ROUTE 1</th>";
echo "<th bgcolor='#000000'>ARRIVAL</th>";
echo "<th bgcolor='#000000'>ROUTE 2</th>";
echo "<th bgcolor='#000000'>ARRIVAL</th>";
echo "<th bgcolor='#000000'>ROUTE 3</th>";
echo "<th bgcolor='#000000'>ARRIVAL</th>";
echo "<th bgcolor='#000000'>ROUTE 4</th>";
echo "<th bgcolor='#000000'>ARRIVAL</th>";
echo "<th bgcolor='#000000'>ROUTE 5</th>";
echo "<th bgcolor='#000000'>ARRIVAL</th>";
echo "<th bgcolor='#000000'>TO</th>";
echo "<th bgcolor='#000000'>VIEW</th>";


while($row = mysql_fetch_array($result))
  {
echo "<tr bgcolor='#000000'>";
// echo "<td>" .$id = $row["<input type=\"hidden\" name=\"id\">"]  . "</td>";
  echo "<td>" .$f = $row["from_"]  . "</td>";
  echo "<td>" .$r1 = $row["r1"] . "</td>";
  echo "<td>" .$a1 = $row["a1"] . "</td>";
  echo "<td>" .$r2 = $row["r2"] . "</td>";
  echo "<td>" .$a2 = $row["a2"] . "</td>";
  echo "<td>" .$r3 = $row["r3"] . "</td>";
  echo "<td>" .$a3 = $row["a3"] . "</td>";
  echo "<td>" .$r4 = $row["r4"] . "</td>";
  echo "<td>" .$a4 = $row["a4"] . "</td>";
  echo "<td>" .$r5 = $row["r5"] . "</td>";
  echo "<td>" .$a5 = $row["a5"] . "</td>";
  echo "<td>" .$t = $row["to_"] . "</td>";
echo' <td>
					<button name="change" id="change" onClick="check(' . $row['id'].');">Update</button></td>';
  echo "</tr>";
  }
echo "</table>";
echo "<br>";
?>
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
         
          <div class="post_content">
  

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

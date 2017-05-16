<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       
    </head>
    <body><center>
        <script>
           
        </script>
        </br>
       
        <h3 id="tabCap" style="color: green">BUS ROUTE UPDATE FROM ADMIN </h3>
        <?php
        session_start();
        require_once 'dbconn.php';
		if(isset($_POST['r5']))
		{
		$sql="DELETE FROM bus  WHERE id='$_SESSION[id]'";
				if(mysql_query($sql))
					echo "updated";
				else
					echo "failed to update";
		$to = $_POST['r5'];
			$sql="SELECT * FROM trackk WHERE r5='$to'";
			$result = mysql_query($sql) or die("Error: ".  mysql_error());
			if($row = mysql_fetch_array($result, MYSQL_ASSOC))
            {
			
				$lat=$row['la5'];
				$lng=$row['lo5'];
				echo $lat.$lng;
				$sql="INSERT INTO bus values( '$_SESSION[id]','$lat','$lng')";
				if(mysql_query($sql))
					echo "updated";
				else
					echo "failed to update";
				
			}
		}
		if(isset($_POST['r4']))
		{
		$sql="DELETE FROM bus  WHERE id='$_SESSION[id]'";
				if(mysql_query($sql))
					echo "updated";
				else
					echo "failed to update";
		$to = $_POST['r4'];
			$sql="SELECT * FROM trackk WHERE r4='$to'";
			$result = mysql_query($sql) or die("Error: ".  mysql_error());
			if($row = mysql_fetch_array($result, MYSQL_ASSOC))
            {
				$lat=$row['la4'];
				$lng=$row['lo4'];
				echo $lat.$lng;
				$sql="INSERT INTO bus values( '$_SESSION[id]','$lat','$lng')";
				if(mysql_query($sql))
					echo "updated";
				else
					echo "failed to update";
			}
		}
		if(isset($_POST['r3']))
		{
		$sql="DELETE FROM bus  WHERE id='$_SESSION[id]'";
				if(mysql_query($sql))
					echo "updated";
				else
					echo "failed to update";
		$to = $_POST['r3'];
			$sql="SELECT * FROM trackk WHERE r3='$to'";
			$result = mysql_query($sql) or die("Error: ".  mysql_error());
			if($row = mysql_fetch_array($result, MYSQL_ASSOC))
            {
				$lat=$row['la3'];
				$lng=$row['lo3'];
				echo $lat.$lng;
				$sql="INSERT INTO bus values( '$_SESSION[id]','$lat','$lng')";
				if(mysql_query($sql))
					echo "updated";
				else
					echo "failed to update";
			}
		}
		if(isset($_POST['r2']))
		{
		$sql="DELETE FROM bus  WHERE id='$_SESSION[id]'";
				if(mysql_query($sql))
					echo "updated";
				else
					echo "failed to update";
		$to = $_POST['r2'];
			$sql="SELECT * FROM trackk WHERE r2='$to'";
			$result = mysql_query($sql) or die("Error: ".  mysql_error());
			if($row = mysql_fetch_array($result, MYSQL_ASSOC))
            {
				$lat=$row['la2'];
				$lng=$row['lo2'];
				echo $lat.$lng;
				$sql="INSERT INTO bus values( '$_SESSION[id]','$lat','$lng')";
				if(mysql_query($sql))
					echo "updated";
				else
					echo "failed to update";
			}
		}
		
		if(isset($_POST['r1']))
		{
		$sql="DELETE FROM bus  WHERE id='$_SESSION[id]'";
				if(mysql_query($sql))
					echo "updated";
				else
					echo "failed to update";
		$to = $_POST['r1'];
			$sql="SELECT * FROM trackk WHERE r1='$to'";
			$result = mysql_query($sql) or die("Error: ".  mysql_error());
			if($row = mysql_fetch_array($result, MYSQL_ASSOC))
            {
			
				$lat=$row['la1'];
				$lng=$row['lo1'];
				echo $lat.$lng;
				$sql="INSERT INTO bus values( '$_SESSION[id]','$lat','$lng')";
				if(mysql_query($sql))
					echo "updated";
				else
					echo "failed to update";
				
			}
		}
        if(!empty($_GET))
        {
           
            $custid = $_GET['edit'];
            $_SESSION['id']=$custid;
            $sql = "select * from trackk  WHERE id ='$custid'";
            $result = mysql_query($sql) or die("Error: ".  mysql_error());
            if($row = mysql_fetch_array($result, MYSQL_ASSOC))
            {
                if($custid == $row['id'])
                {
				
                    echo '<form method="post" action="update1.php"><table id="repTable" border=1 cellpadding=10>
                    <tr><th>Bus Id</th>
                <td>'.$row['id'].'</td></tr>
                   
                    <tr><th>From</th>
                <td>'.$row['from_'].'</td></tr>
				<tr><th>To</th>
                <td>'.$row['to_'].'</td></tr>
                    <tr><th>Stop 1</th>
                <td>'.$row['r1'].'<input type="submit" name="r1" value='.$row['r1'].'></td></tr>
                    <tr><th><b>Stop2</b></th>
					 <td>'.$row['r2'].'<input type="submit" name="r2" value='.$row['r2'].'></td></tr>
					 <tr><th><b>Stop 3</b></th>
					 <td>'.$row['r3'].'<input type="submit" name="r3" value='.$row['r3'].'></td></tr>
					 <tr><th><b>Stop 4</b></th>
					 <td>'.$row['r4'].'<input type="submit" name="r4" value='.$row['r4'].'></td></tr>
					 <tr><th><b>Stop 5</b></th>
					 <td>'.$row['r5'].'<input type="submit" name="r5" value='.$row['r5'].'></td></tr>
					 
					 </tr></table></form>';
                
                }
                else
				{
                    echo '</br></br></br><h2 style="color: red"> Incorrect key, go back then try again</h2>';
            }
			}
        }
         
            
        ?>
    </center>
    </body>
</html>
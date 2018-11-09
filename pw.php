<!DOCTYPE html>
<html>
<body>
	
<?php  
error_reporting(E_ALL);

// error_reporting(0);

$MOD="login.php";

include "LM.php";
//include "log.php";
$test=$USER;
//echo $test;
?>
	
	
<?php  
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }
	
	$query = "SET CHARACTER SET latin2";
	mysqli_query($sql_connect,$query); 	
?>




<!DOCTYPE html>
<html>
<body>

<form name="login" method="GET" action="<?php  echo $USER ;?>">
	
	<?php   include "FormInput.php";?>
Username: <input name="lgn" type="text" class="smallgreyBold" size="15" maxlength="15"><br>

    <fieldset>
        <legend>Confirm password with HTML5</legend>

        <input type="password" id="password" name="pwd" class="smallgreyBold" size="15" maxlength="15" required>
        <input type="password" id="confirm_password" name="usn" class="smallgreyBold" size="15" maxlength="15" placeholder="Confirm Password" required>

        <button type="submit" class="pure-button pure-button-primary" value="<?php  echo $BelépésazÚTMETrendszerbe ;?>">Confirm</button>
    </fieldset>

	


 
  <input type="hidden" name="uLog" value="1">


		 


</form>

	
<?php
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


	$local_time=time()-50*86400; 
//  uLid  strm 	user 	pasd 	pase 	pasf 	cDept 	who 	usrIP 	Ltime 	Ldate

$queruL = "SELECT * FROM usrLogs  where Ltime>$local_time  order by -Ltime  ";

$reuLs=mysqli_query($sql_connect,$queruL);

-	
mysqli_close ($sql_connect);
//	echo "ccXX";
while($rouLs = mysqli_fetch_array($reuLs, MYSQLI_ASSOC))
{
?>
<tr>
<td><?php  echo "<small> ".$rouLs['Ldate'];?></td>
<td><?php  echo "<small> ".$rouLs['usrIP'];?></td>
<td><?php  echo "<small> ".$rouLs['cDept'];?></td>
<td><b><?php  echo "<small> &nbsp;&nbsp;&nbsp;&nbsp; ".utf8_decode($rouLs['who']);?></b></td>
<td><?php  echo "<small> &nbsp;&nbsp;&nbsp;&nbsp;  ".$rouLs['pasd'];?></td>
<td><?php  echo "<small> &nbsp;&nbsp;&nbsp;&nbsp;  ".$rouLs['pase'];?></td>
<td><?php  echo "<small> &nbsp;&nbsp;&nbsp;&nbsp;  ".$rouLs['pasf'];?></td>
</tr>
<?php  
}
?>
	
	
	<form class="pure-form">	
	
</body>
</html>


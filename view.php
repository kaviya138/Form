<!DOCTYPE html>
<html>
<body>
<?php 
$form = mysqli_connect("localhost", "root", "", "form");
if($form===false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else
	{
    $name=mysqli_real_escape_string($form, $_POST['Name']);
    $regno=mysqli_real_escape_string($form, $_POST['Regno']);
	$age=mysqli_real_escape_string($form, $_POST['Age']);
	$email=mysqli_real_escape_string($form, $_POST['Email']);
	$sql = "SELECT name,email,regno,age FROM myform";
	$result = mysqli_query( $form,$sql );
   if(! $result ) 
   {
      die('Could not get data: ' . mysqli_error());
   }
		echo "<table>";
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
		{
     echo "<tr><td> {$row['name']}  </td> ".
        "<td> {$row['email']} </td> ".
        "<td> {$row['regno']} </td> ".
		"<td> {$row['age']} </td> ".
        "</tr>";
  }
echo "</table>";
mysqli_free_result($result);
	mysqli_close($form);
	}
?>
	
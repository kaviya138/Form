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
	$sql = "DELETE FROM myform WHERE name='$name'";
    if(mysqli_query($form, $sql)){
        echo "Records deleted successfully.";
    } else{
        echo "ERROR: Could not able to delete $sql. " . mysqli_error($form);
    }
	mysqli_close($form);
	}
	?>
	
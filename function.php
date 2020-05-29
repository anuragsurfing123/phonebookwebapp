<?php
if (isset($_POST['submit'])) {
$db = mysqli_connect('localhost', 'root', '', 'phonebook');

$name    =  $_POST['name'];
	$dob      = $_POST['dob'];
	$mob1  =  $_POST['mob1'];
    $mob2  =  $_POST['mob2'];
    $email1  =  $_POST['email1'];
    $email2  =  $_POST['email2'];
$query = "INSERT INTO detail (name, dob, mob1, mob2,email1,email2) 
VALUES('$name', '$dob', '$mob1', '$mob2','$email1','$email2')";
mysqli_query($db, $query);
header('Location: test1.php');
}



if(isset($_GET['delete'])){
    $db = mysqli_connect('localhost', 'root', '', 'phonebook');
	$id = $_GET['delete'];
	
	 
	mysqli_query($db,"DELETE FROM detail WHERE id='".$id."'");
    $message = "Data deleted successfully !";
    header('Location: test1.php');

}

if(isset($_POST['update'])){
    $db = mysqli_connect('localhost', 'root', '', 'phonebook');
         $id=$_POST['id'];
$name    =  $_POST['name'];
$dob      = $_POST['dob'];
$mob1  =  $_POST['mob1'];
$mob2  =  $_POST['mob2'];
$email1  =  $_POST['email1'];
$email2  =  $_POST['email2'];
	
	 
mysqli_query($db,"UPDATE detail SET name=$name,dob=$dob,mob1=$mob1,mob2=$mob2,email1=$email1,email2=$email2 WHERE id='".$id."'");
echo (mysqli_error($db));
    $message = "Data deleted successfully !";
    header('Location: test1.php');

}
?>
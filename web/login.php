<?php
$servername = "localhost";
$dbname = "napiermedcare";
//create connection
$conn = new mysqli($servername, "root","",$dbname);
//check connection
if(mysqli_connect_errno())
{
    die("connection failed : ". mysqli_connect_error());
    exit();
}
    extract($_POST); 
    $sql = "SELECT * from napier where Username = '$Username' and password='$Password'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);

if($count==1){
	$row=mysqli_fetch_row($result);
 	$sname=$row[0];
	print("<h1>Welcome,". $sname."!<br></h1>");
	
	if (isset($_POST['Username'])){
		setcookie("Name",$Username,time()+60*60*24);
		setcookie("Pwd",$Password,time()+60*60*24);
	}
	else
	{
		setcookie("Name","",time()-5);
		setcookie("Pwd","",time()-5);
    }
}
?>

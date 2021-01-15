<?php
$servername = "localhost";
$dbname = "napiermedcare";

//create connection
$conn = new mysqli($servername, "root","",napiermedcare);
//check connection
if($conn->connect_error)
{
    die("connection failed : ".$conn->connect_error);
}else{
    extract($_POST); 
    if(isset($_POST['submit']))
    {
        $terms = $_POST['terms1'];
        $t1 ="";
        foreach($terms as $t)
        {
            $t1.= $t.",";
        }
    }
    $sql = "INSERT INTO napier(firstname,lastname,category,Email,Username,password,Gender,contact,checkbox)VALUES('$firstname','$lastname','$category','$Email','$Username','$password','$Gender','$contact','$checkbox')";
    if($conn->query($sql) == TRUE)
    {
        header('Location:login.html');
        exit();
    }else{
        header("Location : register.php?msg=failed");
        exit();
    }
}
$conn->close();
?>
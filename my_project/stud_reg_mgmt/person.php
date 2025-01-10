<?php
$conn = mysqli_connect("localhost","root","","student_reg_db");

if(isset($_POST['save']))
{
    
    $person_name=$_POST["person_txt"];
    $query="INSERT INTO person(name) VALUES ('$person_name');";
    if(mysqli_query($conn,$query))
    {
     echo "<script>window.alert('Person sbmitted successfully.....!');</script>";
    }
    else
    {
        echo "<script language='javasript'> alert('Warning-Something went wrong!....');</script>";
    }
 
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Get Person Name from user</h1>
    <form action="" name="form1" method="post">
        <label for="">Person Name:</label>
        <input type="text" name="person_txt">
        <br> <br>
        <input type="submit" name="save" value="save">
    </form>
</body>
</html>
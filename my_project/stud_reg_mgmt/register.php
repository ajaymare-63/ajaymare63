<?php
include("common/db_connect.php");

$pagename = "register";

session_start();
if (empty($_SESSION['username'])) {
    echo "<script>window.open('login.php','_self')</script>";
}



if(isset($_POST['submit']))  
{	
		$full_name=strtoupper($_POST["fullname"]);
		$pass=$_POST["password"];
		$mobile=$_POST["mobile"];
		$email=$_POST["email"];
		$address=$_POST["address"];
		$gender=$_POST["gender"];
		$class=$_POST["class"];

		$sql="INSERT INTO stud_registration_tb (stud_full_name, stud_mobile, stud_email, stud_address, stud_gender, class_id) 
		VALUES ('$full_name','$mobile','$email','$address','$gender','$class');";
		if ($conn->query($sql) === TRUE) 
		 {
			  	$last_id = $conn->insert_id;
		  		$query="INSERT INTO login_tb (stud_id, login_name, login_password, login_status) 
VALUES ('$last_id','$full_name','$pass',1);";
				if(mysqli_query($conn,$query))
					{
					echo "<script>window.alert('Student Registered Successfully !..');</script>";
					}
				else
					{	
					echo "<script language='javascript'> alert('WARNING -Somthing went wrong!..'); 	</script>";
					}
		}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>COCSIT</title>

    <link href="style/style.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <?php include("common/admin_menu.php"); ?>
    <?php include("common/header.php"); ?>

    <section class="page-section">
        <div class="container">
            <section class="introduction">
                <h1>
                    Student Registration Form
                </h1>
                <form method="post">
                    <table width="930" align="center" cellspacing="20">
                        <tr>
                            <td width="230"><label for="fullname">Full Name:</label></td>
                            <td><input type="text" name="fullname" id="fullname" placeholder="Full Name" required></td>
                        </tr>
                        <tr>
                            <td><label for="password">Password:</label></td>
                            <td><input type="password" name="password" id="password" placeholder="*******" required></td>
                        </tr>
                        <tr>
                            <td><label for="mobile">Mobile:</label></td>
                            <td><input type="phone" placeholder="9975******" name="mobile" id="mobile" required></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td><input type="email" name="email" id="email" placeholder="example@gmail.com" required></td>
                        </tr>
                        <tr>
                            <td><label for="address">Address:</label></td>
                            <td><textarea name="address" id="address" cols="30" rows="10" placeholder="Enter your Address" required></textarea></td>
                        </tr>

                        <tr>
                            <td><label for="gender">Gender:</label></td>
                            <td><input type="radio" name="gender" id="gender" value="male" required>Male
                                <input type="radio" name="gender" id="gender" value="male" required>Female
                            </td>
                        </tr>
                        <tr>
                            <td><label for="edu">Class</label></td>
                            <td>
                                <select name="class" id="class" required>
                                    <option value="">-- SELECT CLASS --</option>
                                    <?php $sql = mysqli_query($conn, "select class_id,class_name from class_tb;");
                                    $row = mysqli_num_rows($sql);
                                    while ($row = mysqli_fetch_array($sql)) {
                                        echo "<option value='" . $row['class_id'] . "'>" . $row['class_name'] . "</option>";
                                    } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <input type="submit" value="Submit" name="submit"> <input type="reset">
                            </td>
                        </tr>



                    </table>
                </form>

            </section>

        </div>
    </section>

    <?php include("common/footer.php"); ?>
</body>

</html>
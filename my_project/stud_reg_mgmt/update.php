<?php
include("common/db_connect.php");

$pagename = "update";

session_start();
if (empty($_SESSION['username'])) {
    echo "<script>window.open('login.php','_self')</script>";
}

if(isset($_POST['update']))  
{	
        $stud_id=$_POST["stud_id"];
        $full_name=strtoupper($_POST["fullname"]);
		$mobile=$_POST["mobile"];
		$email=$_POST["email"];
		$address=$_POST["address"];
		$gender=$_POST["gender"];
		$class_id=$_POST["class"];

		$sql = "UPDATE stud_registration_tb SET 
                stud_full_name='$full_name',
                stud_mobile='$mobile',
                stud_email='$email',
                stud_address='$address',
                stud_gender='$gender',
                class_id='$class_id'
                WHERE stud_id=$stud_id";
            
        if ($conn->query($sql) === TRUE) 
            {
                echo "<script>window.alert('Record Updated successfully');</script>";
                header('Location: '.$_SERVER['PHP_SELF']);
                die;
            }
        else {
            echo "Error updating record: ";
            $conn->error;
            }
        $conn->close();
}


if(isset($_POST['updatebtn']))  
{
$update_stud_id = $_POST['update_stud_id'];
$update_stud_full_name = $_POST['update_stud_full_name'];
$update_stud_mobile = $_POST['update_stud_mobile'];
$update_stud_email = $_POST['update_stud_email'];
$update_stud_address = $_POST['update_stud_address'];
$update_stud_gender = $_POST['update_stud_gender'];
$update_class_id = $_POST['update_class_id'];
}
else
{
    $update_stud_id = "";
    $update_stud_full_name = "";
    $update_stud_mobile = "";
    $update_stud_email = "";
    $update_stud_address = "";
    $update_stud_gender = "";
    $update_class_id = "";
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
                    Student Registration Update Form
                </h1>
                <form name="form" method="post">
                    <table width="930" align="center" cellspacing="20">
                    <tr>
                            <td width="230"><label for="stud_id">Student ID:</label></td>
                            <td><input type="text" name="stud_id" id="stud_id" value="<?php echo $update_stud_id;?>" readonly></td>
                        </tr>
                        <tr>
                            <td width="230"><label for="fullname">Full Name:</label></td>
                            <td><input type="text" name="fullname" id="fullname" placeholder="Full Name" value="<?php echo $update_stud_full_name;?>" ></td>
                        </tr>
                        <tr>
                            <td><label for="mobile">Mobile:</label></td>
                            <td><input type="phone" placeholder="9975******" name="mobile" id="mobile" value="<?php echo $update_stud_mobile;?>"></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td><input type="email" name="email" id="email" placeholder="example@gmail.com"  value="<?php echo $update_stud_email;?>"></td>
                        </tr>
                        <tr>
                            <td><label for="address">Address:</label></td>
                            <td><textarea name="address" id="address" cols="30" rows="10" placeholder="Enter your Address" style="font-size: 16px;"><?php echo $update_stud_address;?></textarea></td>
                        </tr>

                        <tr>
                            <td><label for="gender">Gender:</label></td>
                            <td>
                            <?php 
                            if($update_stud_gender=="female"){ 
                            ?>    
                                <input type="radio" name="gender" id="gender" value="male"> Male
                                <input checked type="radio" name="gender" id="gender" value="female"> Female
                            <?php
                            }
                            else
                            {
                            ?>    
                                <input checked type="radio" name="gender" id="gender" value="male"> Male
                                <input type="radio" name="gender" id="gender" value="female"> Female
                            <?php
                            }
                            ?>
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
                                        
                                        echo "<option ";
                                        if($row['class_id']==$update_class_id){ echo "selected";}
                                        echo " value='" . $row['class_id'] . ";'>" . $row['class_name'] . "</option>";
                                        
                                    } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <input type="submit" value="update" name="update"> 
                                <input type="reset">
                            </td>
                        </tr>



                    </table>
                </form>

            </section>

            <section>
            <table align="center" cellspacing="0" cellpadding="10px;" border="1">
 	<tr style="background-color:#003366; color:#FFFFFF;">
<th>Update</th>		
<th>Student ID</th>
<th>Full Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Address</th>
<th>Gender</th>
<th>Class</th>
<th>Status</th>
    </tr>
    <?php 
		$query="SELECT * FROM stud_registration_tb JOIN class_tb ON stud_registration_tb.class_id=class_tb.class_id ORDER BY stud_id DESC";                                       
		$result = mysqli_query($conn, $query);
		$rowcount=mysqli_num_rows($result);
		if($rowcount> 0)
		{		
				$srno = 0;
				while($datarow = mysqli_fetch_array($result))
			{
			$srno++;
			//$stud_full_name=$datarow['stud_full_name'];
			?>
             <tr>
                    <td>
<form name="form" action="update.php" method="post" style="all: initial;">
<input type="submit" name="updatebtn" value="Update" style="width: 80px; padding: 5px; border-radius: 30px;"> 
                    <br>
<input type="hidden" name="update_stud_id" value="<?php echo $datarow['stud_id'];?>">
<input type="hidden" name="update_stud_full_name" value="<?php echo $datarow['stud_full_name'];?>">
<input type="hidden" name="update_stud_mobile" value="<?php echo $datarow['stud_mobile'];?>">
<input type="hidden" name="update_stud_email" value="<?php echo $datarow['stud_email'];?>">
<input type="hidden" name="update_stud_address" value="<?php echo $datarow['stud_address'];?>">
<input type="hidden" name="update_stud_gender" value="<?php echo $datarow['stud_gender'];?>">
<input type="hidden" name="update_class_id" value="<?php echo $datarow['class_id'];?>"> 

                    </form>    
                    </td>
                    <td>
             		<?php echo $datarow['stud_id'];?>       
                    </td>
                    <td>
                    <?php echo $datarow['stud_full_name'];?>
                    </td>
                    <td>
                    <?php echo $datarow['stud_mobile'];?>
                    </td>
                    <td>
                    <?php echo $datarow['stud_email'];?>
                    </td>
                    <td>
                    <?php echo $datarow['stud_address'];?>
                    </td>
                    <td>
                    <?php echo $datarow['stud_gender'];?>
                    </td>
                    <td>
                    <?php echo $datarow['class_name'];?>
                    </td>
                    <td>
                    <?php if ($datarow['stud_status'] == 1){echo "Active";}else{echo "In-Active";};?>
                    </td>
            </tr>
			<?php
			}
		}	
	?>
    
</table>
            </section>

        </div>
    </section>

    <?php include("common/footer.php"); ?>
</body>

</html>
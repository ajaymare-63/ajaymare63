
<?php
include("common/db_connect.php");

session_start();
if(empty($_SESSION['username'])) 
{ echo "<script>window.open('login.php','_self')</script>"; }

$pagename="report";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
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
                        All Registerd Student Report
                    </h1>

                    
 <table align="center" cellspacing="0" cellpadding="10px;" border="1">
 	<tr style="background-color:#003366; color:#FFFFFF;">
    		<th>Sr. No.</th>

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
             		<?php echo $srno;?>	       
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

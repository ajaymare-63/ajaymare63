
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
                    <h1><center>All Registerd Student Report</center></h1>

                        
                    
                    
 <table align="center" cellspacing="0" cellpadding="10px;" border="1">
 	<tr style="background-color:#003366; color:#FFFFFF;">
    		

<th>sr.no</th>
<th>Full name</th>
<th>Username</th>
<th>Password</th>
    </tr>
    <?php 
		$query="SELECT * FROM login_tb JOIN stud_registration_tb ON login_tb.stud_id =stud_registration_tb.stud_id ORDER BY
        login_id DESC";                                       
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
                    <?php echo $datarow['login_name'];?>
                    </td>
                    <td>
                    <?php echo $datarow['login_password'];?>
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

<nav class="page-nav">
            <div class="container">
                <a href="dashboard.php" <?php if($pagename==="dashboard"){ echo("class=active");}?>>Dashboard</a>
                <a href="report.php"<?php if($pagename==="report"){ echo("class=active");}?>>Report</a>
                <a href="register.php"<?php if($pagename==="register"){ echo("class=active");}?>>Register</a>
                <a href="update.php"<?php if($pagename==="update"){ echo("class=active");}?>>Update</a>
                <a href="delete.php"<?php if($pagename==="delete"){ echo("class=active");}?>>Delete</a>
                <a href="logout.php"<?php if($pagename==="logout"){ echo("class=active");}?>>Logout</a>
            </div>
</nav>
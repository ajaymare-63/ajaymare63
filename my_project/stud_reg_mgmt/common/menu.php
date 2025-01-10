<nav class="page-nav">
            <div class="container">
                <a href="index.php" <?php if($pagename==="index"){ echo("class=active");}?>>Home</a>
                <a href="about.php"<?php if($pagename==="about"){ echo("class=active");}?>>About</a>
                <a href="courses.php"<?php if($pagename==="courses"){ echo("class=active");}?>>Courses</a>
                <a href="location.php"<?php if($pagename==="location"){ echo("class=active");}?>>Location</a>
                <a href="contact.php"<?php if($pagename==="contact"){ echo("class=active");}?>>contact</a>
                <a href="login.php"<?php if($pagename==="login"){ echo("class=active");}?>>Login</a>
            </div>
</nav>
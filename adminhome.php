<?php
session_start();
    if (!isset($_SESSION['username'])) {
        header("location:login.php");
    }
    elseif ($_SESSION['usertype'] == 'student') {
        header("location:login.php");
    }
    
    

?>




<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Admin_page</title>
  <?php
    include 'admin_css.php';
  ?>
</head>

<body>

    <?php
        
        include 'admin_siderbar.php';

    ?>
    <div class="content">
        <h1>Admin DASHBORD</h1>
        
        



    </div>
    





</body>

</html>
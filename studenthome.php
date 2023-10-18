<?php
session_start();
    if (!isset($_SESSION['username'])) {
        header("location:login.php");
    }
    elseif ($_SESSION['usertype'] == 'admin') {
        header("location:login.php");
    }

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Student_page</title>
  <?php
    include 'admin_css.php';
  ?>
</head>

<body>
    <?php
        include 'studentsidebar.php';
    ?>
    
    <div class="content">
        <h1> Sidebar Accordion</h1>
         



    </div>
    





</body>

</html>
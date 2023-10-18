<?php
    error_reporting(0);
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location:login.php");
    }
    elseif ($_SESSION['usertype'] == 'student') {
        header("location:login.php");
    }
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "schoolproject";
    $data = mysqli_connect($host,$user,$password,$db);
    $sql="SELECT * FROM user where usertype='student'";
    $result=mysqli_query($data,$sql);
    

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
        <h1 tyle="text-decoration: none; font-weight:bold; font-size:2.5rem; color:black;">Students Data</h1>
        <?php

            if ($_SESSION['message']) {
                echo $_SESSION['message'];
                
            }
            unset($_SESSION['message']);
        
        ?>
        
        <br><br>
        <table style="border: 1px solid black;">
            <tr style="border: 1px solid black;">
                <th style="border: 1px solid black; padding: 20px; font-size: 15px;">Username</th>
                <th style="border: 1px solid black; padding: 20px; font-size: 15px;">Email</th>
                <th style="border: 1px solid black; padding: 20px; font-size: 15px;">Phone</th>
                <th style="border: 1px solid black; padding: 20px; font-size: 15px;">Password</th>
                <th style="border: 1px solid black; padding: 20px; font-size: 15px;">Delete</th>
                <th style="border: 1px solid black; padding: 20px; font-size: 15px;">Update</th>
            </tr>
            <?php
            while($info=$result->fetch_assoc())
            {
            ?>
            <tr>
                <TD style="border: 1px solid black; padding: 20px; font-size: 15px;"><?php echo"{$info['username']}";?></TD>
                <td style="border: 1px solid black; padding: 20px; font-size: 15px;"><?php echo"{$info['email']}";?></td>
                <Td style="border: 1px solid black; padding: 20px; font-size: 15px;"><?php echo"{$info['phone']}";?></Td>
                <td style="border: 1px solid black; padding: 20px; font-size: 15px;"><?php echo"{$info['password']}";?></td>
                <td style="border: 1px solid black; padding: 20px; font-size: 15px;"><?php echo "<a onclick=\"javascript:return confrim('Are You Sure To Delete this');\"
                    class='btn btn-primary' href='delete.php?student_id={$info['id']}'>Delete</a>";
                ?></td>
                <td style="border: 1px solid black; padding: 20px; font-size: 15px;"><?php echo "<a class='btn btn-primary' href='update_student.php?student_id={$info['id']}'>Update</a>";
                ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    





</body>

</html>
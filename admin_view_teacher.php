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
    $sql="SELECT * FROM teacher";
    $result=mysqli_query($data,$sql);

    if ($_GET['teacher_id']) {
        $_id = $_GET['teacher_id'];
        $sql2="DELETE FROM teacher WHERE id='$_id'";
        $result2=mysqli_query($data,$sql2);
        if($result2)
        {
            header('location:admin_view_teacher.php');
        }

    }
    

?>




<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>View_teacher</title>
  <?php
    include 'admin_css.php';
  ?>
</head>

<body>

    <?php
        
        include 'admin_siderbar.php';

    ?>
    <div class="content">
        <h1 tyle="text-decoration: none; font-weight:bold; font-size:2.5rem; color:black;">teacher Data</h1>
        <?php

            if ($_SESSION['message']) {
                echo $_SESSION['message'];
                
            }
            unset($_SESSION['message']);
        
        ?>
        
        <br><br>
        <table style="border: 1px solid black;">
            <tr style="border: 1px solid black;">
                <th style="border: 1px solid black; padding: 20px; font-size: 15px;">Name</th>
                <th style="border: 1px solid black; padding: 20px; font-size: 15px;">Description</th>
                <th style="border: 1px solid black; padding: 20px; font-size: 15px;">IMAGE</th>
                <th style="border: 1px solid black; padding: 20px; font-size: 15px;">Delete</th>
                <th style="border: 1px solid black; padding: 20px; font-size: 15px;">Update</th>
            </tr>
            <?php
            while($info=$result->fetch_assoc())
            {
            ?>
            <tr>
                <TD style="border: 1px solid black; padding: 20px; font-size: 15px;"><?php echo"{$info['name']}";?></TD>
                <td style="border: 1px solid black; padding: 20px; font-size: 15px;"><?php echo"{$info['description']}";?></td>
                <Td style="border: 1px solid black; padding: 20px; font-size: 15px;"><img style="height:100px; width:100px"src= "<?php echo"{$info['image']}";?>"></Td>
                <td style="border: 1px solid black; padding: 20px; font-size: 15px;"><?php echo "<a onclick=\"javascript:return confrim('Are You Sure To Delete this');\"
                    class='btn btn-primary' href='admin_view_teacher.php?teacher_id={$info['id']}'>Delete</a>";
                ?></td>
                <td style="border: 1px solid black; padding: 20px; font-size: 15px;"><?php echo "<a class='btn btn-primary' href='admin_update_teacher.php?teacher_id={$info['id']}'>Update</a>";
                ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    





</body>

</html>
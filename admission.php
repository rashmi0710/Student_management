<?php
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
    $sql="SELECT * FROM admission";
    $result=mysqli_query($data,$sql);    

?>




<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Admission_page</title>
  <?php
    include 'admin_css.php';
  ?>
</head>

<body>
    <?php
    
        include 'admin_siderbar.php';
    
    ?>
        <div class="content" style="margin-left: 37%;">
            
                <h1 tyle="text-decoration: none; font-weight:bold; font-size:2.5rem; color:black;">Applyed For Admission</h1>
                <br>
                <table style="border: 1px solid black;">
                    <tr style="border: 1px solid black;">
                        <th style="border: 1px solid black; padding: 20px; font-size: 15px;">Name</th>
                        <th style="border: 1px solid black; padding: 20px; font-size: 15px;">Email</th>
                        <th style="border: 1px solid black; padding: 20px; font-size: 15px;">Phone</th>
                        <th style="border: 1px solid black; padding: 20px; font-size: 15px;">Message</th>
                    </tr>
                    <?php
                    while($info=$result->fetch_assoc())
                    {
                    ?>
                    <tr>
                        <td style="border: 1px solid black; padding: 20px; font-size: 15px;"><?php echo"{$info['name']}";?> </td>
                        <td style="border: 1px solid black; padding: 20px; font-size: 15px;"><?php echo"{$info['email']}";?> </td>
                        <td style="border: 1px solid black; padding: 20px; font-size: 15px;"><?php echo"{$info['phone']}";?> </td>
                        <td style="border: 1px solid black; padding: 20px; font-size: 15px;"><?php echo"{$info['message']}";?> </td>
                    </tr>

                    <?php
                    }
                    ?>
                </table>
            
        </div>
    





</body>

</html>
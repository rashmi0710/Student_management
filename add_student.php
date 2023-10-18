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

    if (isset($_POST['add_student']))
    {
        $username=$_POST['name'];
        $user_email=$_POST['email'];
        $user_phone=$_POST['phone'];
        $user_password=$_POST['password'];
        $usertype="student";

        $check="SELECT *  FROM user WHERE username='$username'";
        $check_user = mysqli_query($data,$check);
        $row_count = mysqli_num_rows($check_user);
        if($row_count==1){
            echo "<script type='text/javascript'> 
                
                alert('username already exixt, try another one');
                
                </script>";
        }
        else {
            $sql="INSERT INTO user(username, phone, email, usertype, password) VALUES ('$username','$user_phone','$user_email','$usertype','$user_password')";
            $result=mysqli_query($data,$sql);
            if($result)
            {
                echo "<script type='text/javascript'> 
                
                alert('Data upload sucsess');
                
                </script>";
            }
            else {
                echo "upload failed";
            }
        } 
    
    
    
    }
    
        

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
            
                <h1 tyle="text-decoration: none; font-weight:bold; font-size:2.5rem; color:black;">Add Studdent</h1>
                <br>
                <div class="pricing-colum col-lg-6">
                    <form id="aqiForm" method="POST" action="#">
                        <div class="form-group">
                        <label for="formGroupExampleInput">Username</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name of student" name="name" >
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Email</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email address" name="email" >
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Phone</label>
                            <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Phone_Number" name="phone" >
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Password</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Password" name="password">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-light btn-lg download-btn" value="Apply" name="add_student">Add Student</button>

                    </form>
                </div>
            
        </div>
    





</body>

</html>
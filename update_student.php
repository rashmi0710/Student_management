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
    $id=$_GET['student_id'];
    $sql= "SELECT * FROM user WHERE ID='$id'";
    $result=mysqli_query($data,$sql);
    $info=$result->fetch_assoc();

    if(isset($_POST['update'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];


        $query="UPDATE user SET username='$name', email='$email', phone='$phone', password='$password' WHERE id='$id'";
        $result2=mysqli_query($data,$query);

        if ($result2) {
            header("location:view_student.php");
        }

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
    <div class="content" style="margin-left: 37%;">
            
            <h1 tyle="text-decoration: none; font-weight:bold; font-size:2.5rem; color:black;">Update Studdent</h1>
            <br>
            <div class="pricing-colum col-lg-6">
                <form id="aqiForm" method="POST" action="#">
                    <div class="form-group">
                    <label for="formGroupExampleInput">Username</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="<?php echo "{$info['username']}";?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Email</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="email" value="<?php echo "{$info['email']}";?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Phone</label>
                        <input type="number" class="form-control" id="formGroupExampleInput" name="phone" value="<?php echo "{$info['phone']}";?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Password</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="password" value="<?php echo "{$info['password']}";?>">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-light btn-lg download-btn" value="Apply" name="update">Update</button>

                </form>
            </div>
        
    </div>
    





</body>

</html>
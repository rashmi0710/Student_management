<?php
session_start();
    if (!isset($_SESSION['username'])) {
        header("location:login.php");
    }
    elseif ($_SESSION['usertype'] == 'admin') {
        header("location:login.php");
    }
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "schoolproject";
    $data = mysqli_connect($host,$user,$password,$db);
    $name=$_SESSION['username'];
    $sql= "SELECT * FROM user WHERE username='$name'";
    $result=mysqli_query($data,$sql);
    $info = mysqli_fetch_assoc($result);

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
    <div class="content" style="margin-left: 37%;">
            
            <h1 tyle="text-decoration: none; font-weight:bold; font-size:2.5rem; color:black;">Update Profile</h1>
            <br>
            <div class="pricing-colum col-lg-6">
                <form id="aqiForm" method="POST" action="#">
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
                    <button type="submit" class="btn btn-light btn-lg download-btn" value="Apply" name="submit">submit</button>

                </form>
            </div>
        
    </div>
    





</body>

</html>
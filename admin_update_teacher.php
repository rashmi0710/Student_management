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
    $id=$_GET['teacher_id'];
    $sql= "SELECT * FROM teacher WHERE id='$id'";
    $result=mysqli_query($data,$sql);
    $info=$result->fetch_assoc();

    if(isset($_POST['update'])){
        $t_name=$_POST['name'];
        $t_description=$_POST['description'];
        $t_image=$_POST['image'];
       


        $query="UPDATE teacher SET name='$t_name', description='$t_description', image='$t_image' WHERE id='$id'";
        $result2=mysqli_query($data,$query);

        if ($result2) {
            header("location:admin_view_teacher.php");
        }

    }
    
    

?>




<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Admin_update_teacher_page</title>
  <?php
    include 'admin_css.php';
  ?>
</head>

<body>

    <?php
        
        include 'admin_siderbar.php';

    ?>
    <div class="content" style="margin-left: 37%;">
            
            <h1 tyle="text-decoration: none; font-weight:bold; font-size:2.5rem; color:black;">Update Teacher</h1>
            <br>
            <div class="pricing-colum col-lg-6">
                <form id="aqiForm" method="POST" action="#" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="<?php echo "{$info['name']}";?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Description</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="description" value="<?php echo "{$info['description']}";?>">
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Image</label>
                        <input type="file" class="form-control form-control-sm" id="formFileSm" name="image" value="<?php echo "{$info['image']}";?>">
                    </div>
                    
                    <br>
                    <button type="submit" class="btn btn-light btn-lg download-btn" value="Apply" name="update">Update</button>

                </form>
            </div>
        
    </div>
    





</body>

</html>
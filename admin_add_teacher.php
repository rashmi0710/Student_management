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

    if (isset($_POST['add_teacher']))
    {
        $t_name=$_POST['name'];
        $t_description=$_POST['description'];
        $file = $_FILES['image']['name'];
        $dst = "./image/" . $file;
        $dst_db = "image/" . $file;
        move_uploaded_file($_FILES['image']['tmp_name'], $dst);
        $sql = "INSERT INTO teacher(name,description,image) VALUES ('$t_name','$t_description','$dst_db')";
        $result=mysqli_query($data,$sql);
        if ($result) {
            header('location:admin_add_teacher.php');
        }
    
    
    }
    
        

?>




<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>teacher_page</title>
  <?php
    include 'admin_css.php';
  ?>
</head>

<body>
    <?php
    
        include 'admin_siderbar.php';
    
    ?>
    <div class="content" style="margin-left: 37%;">
            
            <h1 tyle="text-decoration: none; font-weight:bold; font-size:2.5rem; color:black;">Add Teacher</h1>
            <br>
            <div class="pricing-colum col-lg-6">
                <form  method="post" action="#" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name of student" name="name" >
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Image</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file" name="image">
                    </div>

                    <br>
                    <button type="submit" class="btn btn-light btn-lg download-btn" name="add_teacher">Add Teacher</button>

                </form>
            </div>
        
    </div>
    





</body>

</html>
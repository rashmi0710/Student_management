<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login_page</title>
  <link rel="stylesheet" href="styles.css">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <!-- symbol  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/386098c742.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://kit.fontawesome.com/386098c742.css" crossorigin="anonymous">
  <!-- goggle font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body style="background-color:lavender;">
<section id="admissionforum">
    <h2>USER-LOGIN</h2>
    <centre>
        <h4>
            <?php
            error_reporting(0);
            session_start();
            session_destroy();
            echo $_SESSION['loginMessage'];


            ?>
        </h4>
    </centre>
    <div class="row">
        <div class="pricing-colum col-lg-6">
            <form id="aqiForm" action="login_check.php" method="POST" >
                <div class="form-group">
                <label for="formGroupExampleInput">USERNAME</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="User_name" name="username" >
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="_password" name="password" >
                </div>
                <br>
                <button type="submit" class="btn btn-light btn-lg download-btn" value="Login">submit</button>

                </form>
            </div>
            <div class="pricing-colum col-lg-6">
                <img src="g.png" alt="teacher_student">
            </div>
    </div>
</section>


</body>

</html>
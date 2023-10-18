<?php
  error_reporting(0);
  session_start();
  session_destroy();

  if($_SESSION['message']){
    $message=$_SESSION['message'];
    echo"<script type='text/javascript'>
    alert('$message');
    </script>";
  }


?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>student_management</title>
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

<body>
  <section id="title">
    <div class="container-fluid3">
      <nav class="navbar navbar-expand-lg navbar-dark"  style="padding :0 0 4.5rem";>
        <a class="navbar-brand" href="" style="font-size:2rem;">SVS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class= "nav-link" href="#title">Home</a></li>
            <li class="nav-item"><a class= "nav-link" href="#pricing">Contact</a></li>
            <li class="nav-item"><a class= "nav-link" href="#admission_forum">Admission</a></li>
          
            <li><button type="" class="btn btn-light" value="Predict AQI"><a href="login.php">Login</a></button></li>
          </ul>
        </div>
      </nav>
      <!-- Title -->
      <div class="row">
        <div class="col-lg-6">
          <h1 class="head">Change is the end result of all true learning. <EM>– Leo Buscaglia </EM></h1>
        </div>
        <div class="col-lg-6">
          <img class = "teacher"src="rd.png" alt="teacher_student">
        </div>
      </div>
    </div>
  </section>


  <!-- about school -->

  <section id="abtschool">
    <div class="row">
      <div class="col-lg-6">
        <img class = "school"src="school.jpeg" alt="teacher_student" style="height: 300px;">
        <h3 class="headthree">SVS School</h3>
      </div>
      <div class="col-lg-6">
        <h3 class="headthree">ABOUT SCHOOL</h3>
        <p>Swami Vivekananda Senior Secondary School, often simply referred to as "Swami Vivekananda School," is a prominent educational institution known for its commitment to academic excellence and holistic development. Named after the revered Indian philosopher and spiritual leader Swami Vivekananda, the school embodies his philosophy of education, which emphasizes the harmonious growth of the mind, body, and spirit.<br>greatest dogs.</p>
      </div>
    </div>
  </section>


  <!-- our teacher  -->
  <!-- here we learnt about carousel -->

  <section id="abtteachers">
    <h3 class="headthreee" style="text-align: center;">About Teachers</h3>
    <div class="row">
      <div class="col-lg-4">
        <img class = "school"src="11.jpg" alt="teacher_student" style="height: 300px;">
        <p>Maria Montessori (1870-1952) was an Italian physician and educator. She is best known for developing the Montessori method of education, which emphasizes a child-centered approach to learning. Montessori believed in creating a prepared environment where children could explore and learn at their own pace. Her innovative teaching methods have had a profound influence on early childhood education, focusing on self-directed learning, individualized instruction, and hands-on materials.</p>
      </div>
      <div class="col-lg-4">
        <img class = "school"src="22.jpg" alt="teacher_student" style="height: 300px;">
        <p>Jaime Escalante (1930-2010) was a Bolivian-American educator renowned for his work as a mathematics teacher. Escalante taught at Garfield High School in East Los Angeles, where he achieved remarkable success in teaching advanced mathematics to students from disadvantaged backgrounds. His story was later portrayed in the film "Stand and Deliver." Escalante's dedication to his students and his belief in their potential serves as an inspiring example of how a passionate teacher can make a significant difference in the lives of students.</p>
        
      </div>
      <div class="col-lg-4">
        <img class = "school"src="33.jpg" alt="teacher_student" style="height: 300px;">
        <p>Malala Yousafzai (born 1997) is a Pakistani education activist and teacher. She gained international recognition for her advocacy of girls' education, particularly in regions where it is under threat. Malala survived a Taliban assassination attempt and has since become a global symbol of the importance of education, particularly for girls. She co-authored the memoir "I Am Malala" and established the Malala Fund, which works to ensure 12 years of free, safe, and quality education for every girl.</p>
      </div>
    </div>
  </section>

  <!-- our courses  -->
  <!-- here we learnt about carousel -->

  <section id="testimonials">
    <h3 class="headthreee" style="text-align: center; margin-bottom: -68px;">About Courses</h3>
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="testimonial-image" src="graphic.jpg" alt="dog-profile">
          <p>A Graphic Design course is an immersive journey into the world of visual communication. It equips students with the fundamental skills and creative tools necessary to craft compelling visuals, from logos and posters to digital graphics and multimedia presentations. Throughout this course, students learn the principles of design, color theory, typography, and image editing techniques. They gain proficiency in industry-standard software like Adobe Creative Suite, enabling them to bring their creative visions to life. Graphic design courses empower individuals to become proficient visual storytellers, ready to embark on careers in advertising, branding, web design, or as freelance designers.</p>

          <em>Graphic Design Course</em>
        </div>
        <div class="carousel-item">
          <img class="testimonial-image" src="marketing.png" alt="lady-profile">
          <p>A Marketing course provides a comprehensive understanding of the strategies and principles that underpin successful promotion and selling of products or services. Students learn about market research, consumer behavior, advertising, and digital marketing techniques. The curriculum often includes topics like social media marketing, content marketing, and data analytics to stay current in the evolving field of marketing. Graduates of marketing courses can pursue careers as marketing managers, market analysts, digital marketers, and brand strategists, playing a crucial role in shaping and implementing marketing campaigns for businesses across various industries.</p>
          <em>Marketing Course</em>
        </div>
        <div class="carousel-item">
            <img class="testimonial-image" src="web.jpg" alt="lady-profile">
            <p>A Web Development course delves into the intricacies of creating and maintaining websites. Students learn the core technologies and programming languages necessary for building interactive and user-friendly websites. This course often covers HTML, CSS, JavaScript, and various web development frameworks. It also explores web design principles, user experience (UX) design, and responsive web development to ensure websites function seamlessly across different devices. Web development courses prepare individuals for careers as web developers, front-end or back-end developers, or full-stack developers, enabling them to contribute to the ever-expanding digital landscape.</p>
            <em>Web Development Course</em>
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>    
      </button>
      <!-- this is adde there for making our website more accessiable if persons is with disability -->
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>




  <!-- admission forum -->

  <section id="admission_forum">
    <h2>A Plan for Your child</h2>
    <p>Simple and affordable price plans for you and your Child's future.</p>
    <div class="row">
        <div class="pricing-colum col-lg-6">
            <form id="aqiForm" method="POST" action="data_check.php">
                <div class="form-group">
                <label for="formGroupExampleInput">NAME</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name of student" name="name" >
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">EMAIL</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email_Address" name="email" >
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Phone</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Phone_Number" name="phone" >
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Message</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Message" name="message" >
                </div>
                <br>
                <button type="submit" class="btn btn-light btn-lg download-btn" value="Apply" name="apply">Apply</button>

                </form>
            </div>
            <div class="pricing-colum col-lg-6">
                <img class = "teacher"src="r.png" alt="teacher_student">
            </div>
    </div>
  </section>




  <!-- Footer -->

  <footer id="footer">
    
    <p class="footer-head">© Copyright</p>

  </footer>


</body>

</html>

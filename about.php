<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css" href="css/style.css?version=1" />

</head>
<body>

<?php include 'components/user_header.php'; 
?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/aboutimg.png" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>Choose Learner's Nook for a seamless and efficient learning experience. It is designed with modern technology to be user-friendly and reliable, offering easy access to resources and tools for both students and educators. With intuitive navigation and secure features, our website simplifies managing courses and encourages collaboration, making it the ideal choice for enhancing your educational journey.
         </p>
         <a href="courses.html" class="inline-btn">Our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>10k+</h3>
            <p>Online Courses</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>30k+</h3>
            <p>Brilliant Students</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>2k+</h3>
            <p>Expert Tutors</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <p>Job Placement</p>
         </div>
      </div>

   </div>

</section> 

<section class="reviews">

   <h1 class="heading">Student's Reviews</h1>

   <div class="box-container">

      <div class="box">
         <p> This website made my study routine so much easier! The layout is clean, and I
             can find all my course materials in one place without any hassle. The courses are well-structured and engaging,
              making learning enjoyable.</p>
         <div class="user">
            <img src="images/ankit.png" alt="">
            <div>
               <h3>Ankit P.</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I love how user-friendly the website is. Even as a beginner, I had absolutely no trouble navigating through the features. The courses are detailed and informative, helping me understand complex topics with ease.</p>
         <div class="user">
            <img src="images/sneha.png" alt="">
            <div>
               <h3>Sneha T.</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>The best part about this website is how smoothly it runs. Uploading and accessing files is super quick, and I can easily keep track of my progress in each course. The course content is top-notch and really helps in deepening my understanding.</p>
         <div class="user">
            <img src="images/bhawana.png" alt="">
            <div>
               <h3>Bhawana A.</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>This platform is a game-changer! The design is simple yet effective, and it really enhances the overall learning experience. The courses are interactive and well-designed, making them both interesting and effective.</p>
         <div class="user">
            <img src="images/ankita.png" alt="">
            <div>
               <h3>Ankita G.</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>As someone who juggles multiple courses, this website has been a lifesaver. Everything is organized, and the reminders help me stay on top of deadlines. The courses are comprehensive and cover all the key concepts thoroughly.</p>
         <div class="user">
            <img src="images/aasha.png" alt="">
            <div>
               <h3>Aasha K.</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I appreciate how secure and reliable this website is. I never have to worry about losing my work, and the communication tools make group projects a breeze. The courses are well-curated, with clear explanations and valuable resources.</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Momila L.</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>






<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>
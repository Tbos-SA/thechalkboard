<?php
require "header.php"
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Home</title>
</head>

<body class="main">

  <header>
    <h1>The Chalkboard</h1>
    <p>Welcome to The Chalkboard!
      </br>
      </br>
      An online learning platform designed to help you adapt to the online learning systems for all high school learners!
    </p>
  </header>
<div id="scroll">

  <div class="carousel-container">
    <div class="row">
      <div class="col-sm-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="img/maths.jpg" class="img-responsive" style="width:100%" alt="Image">
              <div class="carousel-caption">
                <h3>Are you finding some subjects or Modules difficult to understand?</h3>
                <p>We can HELP YOU!</p>
              </div>
            </div>

            <div class="item">
              <img src="img/stressed.jpg" class="img-responsive" style="width:100%" alt="Image">
              <div class="carousel-caption">
                <h3>Feeling Anxious about your school work?</h3>
                <p>We can HELP YOU!</p>
              </div>
            </div>

            <div class="item">
              <img src="img/studying.jpg" class="img-responsive" style="width:100%" alt="Image">
              <div class="carousel-caption">
                <h3>Feeling Overwhelmed by school work?</h3>
                <p>We can HELP YOU!</p>
              </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <br>
    <hr>
  </div>
</div>

  <main>


<div class="services">

 <div class="row slideanim">
    <!-- Container (Services Section) -->

    <div id="services" class="container-fluid text-center">
      <h2>SERVICES</h2>
      <h4>What we offer</h4>
      <br>

        <div class="col-sm-4" id="tutoring">
          <span class="glyphicon glyphicon-education"></span>
          <h4>Tutoring</h4>
          <p>Our platform provide great academic content that will ensure you do well in high school and get all the basics you need to survive university!</p>
        </div>

        <div class="col-sm-4" id="mentoring">
          <span class="glyphicon glyphicon-info-sign"></span>
          <h4>Mentoring</h4>
          <p>You will be assigned a great mentor to guide you with career guidance related matters such as how to choose a better course for your prospecct career path!</p>
        </div>

        <div class="col-sm-4" id="general">
          <span class="glyphicon glyphicon-heart "></span>
          <h4>General Support</h4>
          <p>We provide our learners with mental health support and tips on how  to overcome things like stress, anxiety and depression to make the best of their academic life!</p>
        </div>
      </div>

    </br>
    </div>

  </div>
<hr>
  <div class="about" id="about">
    <h1>ABOUT US</h1>
    <p>
      The Chalkboard Learning Platform is an online learning system designed with high school learners in mind.
       With the rise of COVID-19 Pandemic, it is proven that the educational system was never prepared to take the learning to the online environment.
       This Platform aims to assist learners who are struggling to cope with their school work by tutoring them and providing them with extra academic support.
    </p>
    <p>
      <h3>Vision</h3>
  <p>Our Vision is to see every high school learner getting well educated and well prepared for post high school life.
  </p>
    </p>
    <p>
      <h3>Mision</h3>
          <p>Our Mission is to Enroll as many high school learners and assist them with their learning processes and
            make sure we give them excellent ammount of basic aducational background that will assist them to easily
            transition into higher learning institutions with ease</p>

    </p>
  </div>
<hr><br>
    <section>
      <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">CONTACT</h2>
        <div class="row">
          <div class="col-sm-5">
            <p>Contact us and we'll get back to you within 24 hours!</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Johannesburg, SA</p>
            <p><span class="glyphicon glyphicon-phone"></span> (+27) 81 715 7657</p>
            <p><span class="glyphicon glyphicon-envelope"></span> info@thechalckboard.ml</p>
          </div>
          <div class="col-sm-7 slideanim">
            <form class="contact-form" action="includes/sendmail.inc.php" method="post">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="name" name="name" placeholder="Name and Surname" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="email" name="email" placeholder="Email Address" type="email" required>
                </div>
              </div>
              <div class="row">
              <div class="col-sm-12 form-group">
                <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" required>
              </div>
                </div>
              <textarea class="form-control" id="comments" name="message" placeholder="Message" rows="5"></textarea><br>
              <div class="row">
                <div class="col-sm-12 form-group">
                  <button class="btn btn-default pull-right" type="submit" name="send-email">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>




  </main>
  <?php
  require "footer.php"
  ?>

</body>

</html>

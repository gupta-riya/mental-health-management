<?php  session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username']))
{
    include './partials/_usernav.php';
}
else
{
    include './partials/_header.php' ;   
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Head To Better Life</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/disease_layout.css" />    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   
    <style>
        .Title2 {color : #693c72;}
        .page-summary-item a{
            color : #693c72;
        }
        .item{
            background-color: #fae7d0;
        }
    </style>
     
  </head>
  <body>
    <!-- <nav
      class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
      id="ftco-navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="#">Head to Better Life</a>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Disease</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Resources</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Events</a></li>
            <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
          </ul>
        </div>
      </div>
    </nav> -->
    <!-- END nav -->

    <!--banner image-->
    <div
      class="hero-wrap banner-image"
      style="background-image: url('images/eatingDisorder.jpg'); opacity : 0.9;"
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <h2 class="banner-text" style="color : #301b3f; margin-left : 18%; ">
            Eating Disorder
          </h2>
        </div>
      </div>
    </div>

    <!-- main content page -->

    <div
      id="page-frame"
      class="content-of-page"
      
    >
      <!-- left side of page -->
      <div id="page-left-side" class="left-side-summary" style="border-color : #693c72;">
        <h6 id="page-summary-heading" class="text-uppercase" style="color : #693c72;">
          <center>On this page</center>
        </h6>

        <ul style="list-style-type: none; text-align : left ">
          <li class="page-summary-item">
            <a href="#description" >Description</a>
          </li>
          <li class="page-summary-item"><a href="#symptoms" >Symptoms</a></li>
          <li class="page-summary-item">
            <a href="#treatment" >Treatment</a>
          </li>
          <li class="page-summary-item">
            <a href="#helping-someone-with-disorder"
            >Helping Someone With An Eating Disorder</a
            >
          </li>
          <li class="page-summary-item">
            <a href="#experience" >Lived Experience</a>
          </li>
          
        </ul>
      </div>

      <!--center page-->
      <div id="page-center">
        <div id="page-content">
          <!-- quote -->
          <blockquote
            class="overview"
            tabindex="0"
            data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e"
          >
            <span class="Title1" style="color:#e2703a;"
              >???When I started on a specialist program for eating disorders, I
              finally felt that someone actually understood what I was
              experiencing.???</span
            >
            <footer>
              <cite>Sarah</cite>
            </footer>
          </blockquote>

          <!-- description -->
          <div
            id="description"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Description</h3>

            <p>
                An eating disorder is about much more than food; it is a mental illness. Unhealthy eating behaviours and relentless thoughts about food are symptoms of more complex issues. Your eating behaviours may have developed as a way of dealing with things in your life that feel out of control, or they may be a way of coping with troubling emotions. </p>
              <br />
              <p>
                Eating in the way your disorder compels you to can make you feel guilty, ashamed, and disgusted. Your hidden feelings about your eating may lead you to deny your behaviours, or hide them from yourself and others.</p>
              <br />
              <p>
                Having an eating disorder may make you feel like you have lost control of your body and your behaviours, but it may also be a way of feeling control over an aspect of your life. Either way, an eating disorder can become a key part of the way you see yourself.</p>
              <br />
              <p>
                An eating disorder can take over your life, and it may seem too big to deal with. But it is important to remember that all eating disorders can be treated, and full recovery is possible at every age.
             
              <a
                href="https://www.eatingdisorderhope.com/information/eating-disorder"
              ><span style = "color : brown">here</a>
              <br />
            </p>
          </div>

          <!-- Symptoms -->
          <div
            id="symptoms"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Symptoms</h3>
            <p>
              <ol>
              <li> Chronic dieting despite being hazardously underweight.</li>
              <li> Constant weight fluctuations. Obsession with calories and fat contents of food</li>
              <li> Engaging in ritualistic eating patterns, such as cutting food into tiny pieces, eating alone, and/or hiding food.</li>
              <li> Continued fixation with food, recipes, or cooking; the individual may cook intricate meals for others but refrain from partaking.</li>
              <li> Avoidance of social functions, family, and friends. May become isolated and withdrawn</li>
              <li> Depression or lethargic stage</li>
              <li> Switching between periods of overeating and fasting.</li>
              </ol>
            </p>

          </div>

          <!-- Treatment  -->

          <div
          id="treatment"
          class="text-section"
          tabindex="0"
          data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
        >
          <h3 class="Title2">Treatment</h3>
          <p>Because of the severity and complexities of these conditions, a comprehensive and professional treatment team specializing in eating disorders is often fundamental in establishing healing and recovery. Treatment plans are utilized in addressing the many concerns a man or woman may be facing in the restoration of their health and well-being and are often tailored to meet individual needs. </p>
          <p>
            Treatment for an ED is usually comprised of one or more of the following and addressed with medical doctors, nutritionists, and therapists for complete care:
            <ul>
            <li><strong>Medical Care and Monitoring </strong> - The highest concern in the treatment of eating disorders is addressing any health issues that may have been a consequence of eating disordered behaviors.</li>
            <li><strong>Nutrition</strong>- This would involve weight restoration and stabilization, guidance for normal eating, and the integration of an individualized meal plan.</li>
            <li><strong>Therapy</strong>- Different forms of psychotherapy, such as individual, family, or group, can be helpful in addressing the underlying causes of eating disorders. Therapy is a fundamental piece of treatment because it affords an individual in recovery the opportunity to address and heal from traumatic life events and learn healthier coping skills and methods for expressing emotions, communicating and maintaining healthy relationships.</li>
            <li><strong>Medications</strong>- Some medications may be effective in helping resolve mood or anxiety symptoms that can occur with an eating disorder or in reducing binge-eating and purging behaviors.</li>
            </ul>
          </p>
        </div>

        <!-- Helping someone with an OCD -->

        <div
            id="helping-someone-with-disorder"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Helping Someone With An Eating Disorder</h3>

            <p>
                Eating disorders can be quite scary to observe in someone you care about because of the distress of seeing their body change and their self-destructive behaviours. You may not know what to do or say, but your support can make a big difference in their recovery. </p>
              <br />
              <p>
                Talk to the person openly and honestly, but avoid making any comments about how they look. Even well-meaning comments on their appearance can be taken the wrong way and set back the recovery process. Encourage them to talk about how they are feeling and listen without judgement. It is important to remember that nobody chooses to have an eating disorder, and parents are not to blame.</p>
              <br />
              <p>
                Eating disorders can have serious health consequences, so support the person you know in connecting with a health professional as soon as possible.</p>
              <br />
              <p>
                Other helpful actions you can take include: learning more about eating disorders, encouraging the person to stay connected with family and friends, and engaging them in enjoyable social activities that do not involve food or excessive physical activity.</p>
              <br />
              
          </div>

          <!--Lived Experience-->
          <div
            id="experience"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
          <h3 class="Title2">Lived Experience</h3>
         
          <div class="thumbnail" style="width: 800px">
            <div
              id="DemoCarousel"
              class="carousel slide"
              data-interval="20000"
              data-ride="carousel"
              style="background-color: #fed8b1"
            >
            
              <div class="carousel-inner">
                <div class="item active">
                  <div class="carousel-caption">
                    <blockquote
                    class="overview"
                    tabindex="0"
                    data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e"
                  >
                    <span class="Title1" style = "font-size: 18px; text-shadow: none; line-height: 30px; color:#e2703a"
                      >???Eating disorders become so ingrained in your personality that you feel like it???s part of who you are. You forget what it???s like to not have an eating disorder. Because I???d had it since I was 12 years old, I didn???t know who I was without it. So recovery can be the hardest thing that someone ever has to do in their life, but it???s also going to be the most worthwhile. That's a really important message for anyone who's affected.??? <a style = "color:#e2703a;" href="experience.html">..Read More</a></span
                    >
                    <footer >
                      <cite>Sarah</cite>
                    </footer>
                  </blockquote>
                    
                </div>
                </div>
                <div class="item">
                  <div class="carousel-caption">
                    <blockquote
                    class="overview"
                    tabindex="0"
                    data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e"
                  >
                    <span class="Title1" style = "font-size: 18px; text-shadow: none;  line-height: 30px; color:#e2703a"
                      >???Eating disorders become so ingrained in your personality that you feel like it???s part of who you are. You forget what it???s like to not have an eating disorder. Because I???d had it since I was 12 years old, I didn???t know who I was without it. So recovery can be the hardest thing that someone ever has to do in their life, but it???s also going to be the most worthwhile. That's a really important message for anyone who's affected.??? <a style = "color:#e2703a;" href="experience.html">..Read More</a></span
                    >
                    <footer>
                      <cite>Sarah</cite>
                    </footer>
                  </blockquote>
                  
                </div>
                </div>
                <div class="item">
                  <div class="carousel-caption">
                    <blockquote
                    class="overview"
                    tabindex="0"
                    data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e"
                  >
                    <span class="Title1" style = "font-size: 18px; text-shadow: none; line-height: 30px; color:#e2703a"
                      >???Eating disorders become so ingrained in your personality that you feel like it???s part of who you are. 
                      You forget what it???s like to not have an eating disorder. Because I???d had it since I was 12 years old, 
                      I didn???t know who I was without it. So recovery can be the hardest thing that someone ever has to do in their life, 
                      but it???s also going to be the most worthwhile. That's a really important message for anyone who's affected.??? <a style = "color:#e2703a;" href="experience.html">..Read More</a>
                      </span
                    >
                    <footer>
                      <cite>Sarah</cite>
                    </footer>
                  </blockquote>
                  
                </div>
                </div>
              </div>
              <a
                class="carousel-control left"
                href="#DemoCarousel"
                data-slide="prev"
                style="background-color: #fed8b1; color:#e2703a"
              >
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a
                class="carousel-control right"
                href="#DemoCarousel"
                data-slide="next"
                style="background-color: #fed8b1;color:#e2703a"
              >
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
          </div>
          </div> 

      </div>
    </div>
    <?php include './partials/_footer.php'?>
    <!-- <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">Head to Better Life</a></h2>
              <p>
                ???There is hope, even when your brain tells you there isn???t.??? ???
                John Green
              </p>
              <ul class="ftco-footer-social list-unstyled mt-2"></ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Explore</h2>
              <ul class="list-unstyled">
                <li>
                  <a href="about.html"
                    ><span class="fa fa-chevron-right mr-2"></span>About</a
                  >
                </li>
                <li>
                  <a href="#"
                    ><span class="fa fa-chevron-right mr-2"></span>Services</a
                  >
                </li>
                <!--<li>
                  <a href="#"
                    ><span class="fa fa-chevron-right mr-2"></span>What We Do</a
                  >
                </li>
               
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li>
                    <a href="#"
                      ><span class="icon fa fa-paper-plane pr-4"></span
                      ><span class="text">headtobetterlife@gmail.com</span></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0 py-5 bg-black">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p class="mb-0" style="color: rgba(255, 255, 255, 0.5)">
                @We take all responsibilty of our customers data privacy.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer> -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script type="text/javascript" src="js/diseaseJs.js" charset="utf-8"></script>
  </body>
</html>

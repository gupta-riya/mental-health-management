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
            <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
          </ul>
        </div>
      </div>
    </nav> -->
    <!-- END nav -->

    <!--banner image-->
    <div
      class="hero-wrap banner-image"
      style="background-image: url('images/sucidialthoughts.jfif')"
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <h2 class="banner-text" style="color : #20335c; margin-left: 160px; font-weight: 600; font-size: 300%;">
            Sucidial Thoughts
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
      <div id="page-left-side" class="left-side-summary">
        <h6 id="page-summary-heading" class="text-uppercase">
          <center>On this page</center>
        </h6>

        <ul style="list-style-type: none">
          <li class="page-summary-item">
            <a href="#description">Description</a>
          </li>
          <li class="page-summary-item"><a href="#feel">Why do i feel sucidial</a></li>
          <li class="page-summary-item">
            <a href="#cope">How to cope with suicidal thoughts ?</a>
          </li>
          <li class="page-summary-item">
            <a href="#recover"
              >Recovering from Sucidial Thoughts</a
            >
          </li>
          <li class="page-summary-item">
            <a href="#reach">Reaching out for help</a>
          </li>
          <li class="page-summary-item">
            <a href="#experience">Lived Experience</a>
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
            <span class="Title1"
              >???To anyone out there who???s hurting ??? it???s not a sign of weakness to ask for help. It???s a sign of strength.???</span
            >
            <footer>
              <cite>Barack Obama</cite>
            </footer>
          </blockquote>

          <!----------------------- description --------------------------------------->
          <div
            id="description"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Description</h3>

            <p>
              Suicidal thoughts, or suicide ideation, refers to thinking about or planning suicide. 
              Thoughts can range from creating a detailed plan to having a fleeting consideration. It does not 
              include the final act of suicide. Suicide itself is not a mental disorder, but one of the most 
              important causes of suicide is mental illness ??? most often Depression, Bipolar Disorder (Manic Depression), 
              Schizophrenia, and Substance Use Disorders.Many people experience suicidal thoughts, especially during times 
              of stress or when they are facing mental or physical health challenges.</p>
              <br />
              <p>
                Suicidal thoughts are a symptom of an underlying problem. Treatment is
                 effective in many cases, but the first step is to ask for help. If a loved one 
                 is having these thoughts or talking about suicide, it is essential to take 
                 action to help and protect them.
              </p>
              <br />
              <p>You can read in detail 
              <a
                href="https://www.helpguide.org/articles/suicide-prevention/are-you-feeling-suicidal.htm"
              ><span style = "color : brown">here</a>
              <br />
            </p>
          </div>

          <!-------------------- Why do i feel sucidial ------------------------------->
          <div
            id="feel"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Why do i feel Sucidial ? </h3>
            <p>
              Many kinds of emotional pain can lead to thoughts of suicide. The reasons for this pain
               are unique to each one of us, and the ability to cope with the pain differs from person 
               to person.There are, however, some common causes that may lead us to experience suicidal 
               thoughts and feelings.</p>
              <br />
              <p>
                <strong>Why suicide can seem like the only option ?</strong>
              </p>
              <br />
              <p>
                If you are unable to think of solutions other than suicide, it is not that other solutions don???t exist, but rather that you are currently unable to see them. The intense emotional pain that you???re experiencing right now can distort your thinking so it becomes harder to see possible solutions to problems???or to connect with those who can offer support.
                Therapists, counselors, friends, or loved ones can help you to see solutions that otherwise may not be apparent to you. Please give them a chance to help.
                </p>
                <br />
                <p>
                  A suicidal crisis is almost always temporary . Although it might seem as if your pain and unhappiness will never end, it is important to realize that crises are usually temporary. Solutions are often found, feelings change, unexpected positive events occur. Give yourself the time necessary for things to change and the pain to subside.
                </p>
                <br />
                <p>
                  The following risk factors may increase the chance of suicide ideation:
                </p>
                <br />
            <p>
              <ol>
              <li> A family history of violence or suicide. </li>
              <li> A family history of child abuse, neglect, or trauma. </li>
              <li> A history of mental health issues.</li>
              <li>A feeling of hopelessness, seclusion or lonelines.</li>
              <li>Unwanted thoughts, including aggression, or sexual or religious subjects.</li>
              </ol>
            </p>
          </br>
          </div>

          <!-----------------------How to cope with suicidal thoughts--------------------->

          <div
          id="cope"
          class="text-section"
          tabindex="0"
          data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
        >
          <h3 class="Title2">How to cope with Suicidal Thoughts</h3>
          <p>Remember that while it may seem as if these suicidal thoughts and feelings will never end, this is never 
            a permanent condition. <strong>You will feel better again.</strong></p>
          <p>
            <strong>Things to do :</strong>
            <ul>
            <li>Talk with someone every day, preferably face to face. Even though you may feel like withdrawing, ask trusted friends and acquaintances to spend time with you. Or continue to call a crisis helpline and talk about your feelings.</li>
            <li>Make a safety plan. Develop a set of steps that you can follow during a suicidal crisis. It should include contact numbers for your doctor or therapist, as well as friends and family members who will help in an emergency.</li>
            <li>Make a written schedule for yourself every day and stick to it, no matter what. Keep a regular routine as much as possible, even when your feelings seem out of control.</li>
            <li>Get out in the sun or into nature for at least 30 minutes a day.</li>
            <li>Make time for things that bring you joy.</li>
            </ul>
          </p>

          <p>
            <strong>Things NOT to do :</strong>
            <ul>
            <li><strong>Being alone.</strong> Solitude can make suicidal thoughts even worse. Visit a friend, or family member, or pick up the phone and call a crisis helpline.</li>
            <li><strong>Alcohol and drugs.</strong> Drugs and alcohol can increase depression, hamper your problem-solving ability, and can make you act impulsively.</li>
            <li><strong>Doing things that make you feel worse.</strong> Listening to sad music, looking at certain photographs, reading old letters, or visiting a loved one???s grave can all increase negative feelings.</li>
            <li><strong>Thinking about suicide and other negative thoughts.</strong> Try not to become preoccupied with suicidal thoughts as this can make them even stronger. Don???t think and rethink negative thoughts. Find a distraction. Giving yourself a break from suicidal thoughts can help, even if it???s for a short time.</li>
            </ul>
          </p>
        </div>

        <!---------------------------- Recovering from Sucidial Thoughts------------------->

        <div
            id="recover"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Recovering from Sucidial Thoughts</h3>

            <p>5 steps to recovery : </p>
              <br />
              <p>
                1. Identify triggers or situations that lead to feelings of despair or generate suicidal thoughts, such as an anniversary of a loss, alcohol, or stress from relationships. Find ways to avoid these places, people, or situations.</p>
              <br />
              <p>
                2. Take care of yourself. Eat right, don???t skip meals, and get plenty of sleep. Exercise is also key: it releases endorphins, relieves stress, and promotes emotional well-being.</p>
              <br />
              <p>
                3. Build your support network. Surround yourself with positive influences and people who make you feel good about yourself. The more you???re invested in other people and your community, the more you have to lose???which will help you stay positive and on the recovery track.</p>
              <br />
              <p>
                4. Develop new activities and interests. Find new hobbies, volunteer activities, or work that gives you a sense of meaning and purpose. When you???re doing things you find fulfilling, you???ll feel better about yourself and feelings of despair are less likely to return.
              </p>
              <br/>
              <p>
                5. Learn to deal with stress in a healthy way. Find healthy ways to keep your stress levels in check, including exercising, meditating, using sensory strategies to relax, practicing simple breathing exercises, and challenging self-defeating thoughts.
              </p>
          </div>

          <!---------------------------- Reaching out for help------------------->

        <div
        id="reach"
        class="text-section"
        tabindex="0"
        data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
      >
        <h3 class="Title2">Reaching out for help</h3>

        <p>Even if it doesn???t feel like it right now, there are many people who want to support you during this difficult time. Reach out to someone.Talk to someone who won???t try to argue about how you feel, judge you, or tell you to just ???snap out of it.??? Find someone who will simply listen and be there for you.
          It doesn???t matter who it is, as long as it???s someone you trust and who is likely to listen with compassion and acceptance.
          </p>
          <br />
          <p>
            <strong>How to talk to someone about your suicidal thoughts ?</strong> </p>
          <br />
          <p>
            Even when you???ve decided who you can trust to talk to, admitting your suicidal thoughts to another person can be difficult.</p>
          <br />
          <p>
           1. Tell the person exactly what you are telling yourself. If you have a suicide plan, explain it to them.</p>
          <br />
          <p>
           2. Phrases such as, ???I can???t take it anymore??? or ???I???m done??? are vague and do not illustrate how serious things really are. Tell the person you trust that you are thinking about suicide.
          </p>
          <br/>
          <p>
            3. If it is too difficult for you to talk about, try writing it down and handing a note to the person you trust. Or send them an email or text and sit with them while they read it.
          </p>
        <br/>
          <p>
            <strong>What if you don???t feel understood ?</strong>
           </p>
           <br/>
           <p>
            If the first person you reached out to doesn???t seem to understand, tell someone else or call a suicide crisis helpline. Don???t let a bad experience stop you from finding someone who can help.
           </p>
           <br/>
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
              style="background-color: #f6f5f5"
            >
            
              <div class="carousel-inner">
                <div class="item active">
                  <div class="carousel-caption">
                    <blockquote
                    class="overview"
                    tabindex="0"
                    data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e"
                  >
                    <span class="Title1" style = "font-size: 18px; text-shadow: none; line-height: 30px;"
                      >???Eating disorders become so ingrained in your personality that you feel like it???s part of who you are. You forget what it???s like to not have an eating disorder. Because I???d had it since I was 12 years old, I didn???t know who I was without it. So recovery can be the hardest thing that someone ever has to do in their life, but it???s also going to be the most worthwhile. That's a really important message for anyone who's affected.??? <a style = "color : #1181ae;" href="experience.html">..Read More</a></span
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
                    <span class="Title1" style = "font-size: 18px; text-shadow: none;  line-height: 30px;"
                      >???Eating disorders become so ingrained in your personality that you feel like it???s part of who you are. You forget what it???s like to not have an eating disorder. Because I???d had it since I was 12 years old, I didn???t know who I was without it. So recovery can be the hardest thing that someone ever has to do in their life, but it???s also going to be the most worthwhile. That's a really important message for anyone who's affected.??? <a style = "color : #1181ae;" href="experience.html">..Read More</a></span
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
                    <span class="Title1" style = "font-size: 18px; text-shadow: none; line-height: 30px;"
                      >???Eating disorders become so ingrained in your personality that you feel like it???s part of who you are. 
                      You forget what it???s like to not have an eating disorder. Because I???d had it since I was 12 years old, 
                      I didn???t know who I was without it. So recovery can be the hardest thing that someone ever has to do in their life, 
                      but it???s also going to be the most worthwhile. That's a really important message for anyone who's affected.??? <a style = "color : #1181ae;" href="experience.html">..Read More</a>
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
                style="background-color: #f6f5f5"
              >
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a
                class="carousel-control right"
                href="#DemoCarousel"
                data-slide="next"
                style="background-color: #f6f5f5"
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
                    ><span class="fa fa-chevron-right mr-2"></span>Contact</a
                  >
                </li>
                <li>
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
                      ><span class="icon fa fa-phone"></span
                      ><span class="text">+1234567889</span></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon fa fa-paper-plane pr-4"></span
                      ><span class="text">info@yourdomain.com</span></a
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

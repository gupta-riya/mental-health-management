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
    <title>Self Harm</title>
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
      style="background-image: url('images/selfharm.jfif')"
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <h2 class="banner-text" style="color : #20335c; margin-left: 220px; font-weight: 600; font-size: 300%;">
            Self Harm
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
          <li class="page-summary-item"><a href="#whyharm">Why People Self Harm ?</a></li>
          <li class="page-summary-item">
            <a href="#consequences">Consequences of Self-Harm</a>
          </li>
          <li class="page-summary-item">
            <a href="#help"
              >Getting Help</a
            >
          </li>
          <li class="page-summary-item">
            <a href="#helpsomeone">What to do if you are worried about someone ?</a>
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
              >???Strength does not come from winning. Your struggles develop your strengths. When you go through hardships 
              and decide not to surrender, that is strength. ???</span
            >
            <footer>
              <cite>ARNOLD SCHWARZENEGGER</cite>
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
              Self-harm describes any behaviour where someone causes harm to themselves,
               usually as a way to help cope with difficult or distressing thoughts and feelings. 
               It most frequently takes the form of cutting, burning or non-lethal overdoses. 
               However, it can also be any behaviour that causes injury - no matter how minor, 
               or high-risk behaviours.
             </p>
              <br />
              <p>
                Basically, any behaviour that that causes harm or injury to someone as a way to 
                deal with difficult emotions can be seen as self-harm.Self-harm usually starts as a way 
                to relieve the build-up of pressure from distressing thoughts and feelings. This might give 
                temporary relief from the emotional pain the person is feeling. It???s important to know that 
                this relief is only temporary because the underlying reasons still remain. Soon after, feelings 
                of guilt and shame might follow, which can continue the cycle. 
              </p>
              <br />
              <p>
                Because there may be some temporary relief at the start, self-harm can become someone???s normal 
                way of dealing with life???s difficulties. This means that it is important to talk to someone as 
                early as possible to get the right support and help. Learning new coping strategies to deal with
                 these difficulties can make it easier to break the cycle of self-harm in the long term.</p>
              <br />
              
              <p>
              You can read in detail about self harm
              <a
                href="https://www.webmd.com/mental-health/obsessive-compulsive-disorder"
              ><span style = "color : brown">here</a>
              <br />
            </p>
          </div>

          <!---------------------------Why People Self Harm ?-------------------------------- -->
          <div
            id="whyharm"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Why People Self Harm ?</h3>
            <p>
              <ol>
              <li> Cope with feelings like sadness, self-loathing, emptiness, guilt, and rage.</li>
              <li>Express feelings you can???t put into words or release the pain and tension you feel inside.</li>
              <li> Distract yourself from overwhelming emotions or difficult life circumstances .</li>
              <li>Arguments or problems with friends.</li>
              <li>School pressure.</li>
              <li>Bullying.</li>
              <li>Depression, Anxiety, Low self-esteem.</li>
              </ol>
            </p>

          </div>

          <!-------------------- Consequences of Self-Harm ----------------------->

          <div
          id="consequences"
          class="text-section"
          tabindex="0"
          data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
        >
          <h3 class="Title2">Consequences of Self-Harm</h3>
          <p>
            <ul>
            <li>Relief from cutting or self-harm is short lived, and is quickly followed by other feelings like shame and guilt.</li>
            <li>Keeping the secret of self-harm is difficult and lonely. Maybe you feel ashamed or maybe you just think that no one would understand. Ultimately, the secrecy and guilt affects your relationships with friends and family members and how you feel about yourself.</li>
            <li>You can hurt yourself badly, even if you don???t mean to. It???s easy to end up with an infected wound or misjudge the depth of a cut, especially if you???re also using drugs or alcohol.</li>
            <li>You???re at risk for bigger problems down the line. If you don???t learn other ways to deal with emotional pain, you increase your risk of major depression, drug and alcohol addiction, and suicide.</li>
            <li>Self-harm can become addictive. It may start off as an impulse or something you do to feel more in control, but soon it feels like the cutting or self-harming is controlling you.</li>
          </ul>
          </p>
        </div>

        <!-----------------------GETTING HELP------------------------------------------->

        <div
            id="help"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Getting Help </h3>
            <p>
              <ul>
              <li><strong>Should I tell someone?</strong></li>
              Talking to someone is often the first step to getting out of the cycle.Don???t be afraid to ask for help whenever and however you need to. Talking about your feelings isn???t a sign of weakness. It isn???t always easy to express how you are feeling. If you can???t think of one word to describe a feeling, use as many as you need to illustrate how you feel.
              Talking can be a way of coping with a problem you???ve been carrying around in your head for a while. Feeling listened to can help you feel more supported. And it works both ways: if you open up it might encourage others to do the same.

              <li><strong>What professional help is available for me?</strong></li>
              Talking therapies such as cognitive behavioural therapy (CBT) focus on building coping strategies and problem-solving skills and have been found to be very effective in helping to reduce self-harm .
              Other forms of counselling, like psychodynamic therapy, for instance, will help you to identify the problems that are causing you distress and leading you to self-harm. It is important that you talk to your GP or a trusted health professional who will help decide the best treatment option for you.

              <li><strong>Recovery</strong></li>
              Understanding what triggers you to cut or self-harm is a vital step towards recovery. If you can figure out what function your self-injury serves, you can learn other ways to get those needs met-which in turn can reduce your desire to hurt yourself. Self-harm is most often a way of dealing with emotional pain. Take time and be patient with yourself. Recovery doesn???t happen overnight - it can be a slow process. Start to learn how to care for yourself.

              <li><strong>How can I stop harming myself?</strong></li>
              Talking to someone is what is important. You don???t have to feel that you need to deal with this on your own. Part of recovery is trusting people enough to let them help you.Finding out what makes you happy, sad, angry, isolated, vulnerable or strong can help you develop other ways of dealing with these feelings. Counselling is a good way of exploring these thoughts and feelings.
              Other young people who have self-harmed have found ???distraction techniques??? to be a very useful strategy to reduce or stop self-harming. These techniques find a release for the emotional pressure you feel without the need to harm.
                
              <li><strong>Avoid Alcohol and Drugs</strong></li>
              We often drink alcohol or take drugs to change our mood or to avoid our feelings. Some people drink to deal with fear or loneliness, but like self-harm the effect is only temporary and can end up making you feel worse. Alcohol is a depressant, which means it slows down brain activity. This changes how you think and feel, so can increase feelings of anxiety and depression. Visit <a href = "www.drinkaware.co.uk">here</a> for more information.
              
              <li><strong>Do something you enjoy</strong></li>
              Remember that there is more to you than self-harm. Do things that remind you of this and make you happy. Maybe this is a sport, or a hobby you like doing such as writing.Doing things that you enjoy and makes you feel happy, helps you look after your mental health. It helps to improve your self-esteem and can help you remember that you are important and have value.
              </br>
              <strong>Find new coping techniques</strong>
            </br>
                <ul>
                  <li>Paint, draw, or scribble on a big piece of paper with red ink or paint</li>
                  <li>Start a journal in which to express your feelings</li>
                  <li>Listen to music that expresses what you???re feeling</li>
                  <li>Call a friend (you don???t have to talk about self-harm)</li>
                  <li>Go online to a self-help website, chat room, or message board</li>
                </ul>
            </ul>
            </p>
          </div>



          <!----------------------------------help someone------------------------->
          <div
          id="helpsomeone"
          class="text-section"
          tabindex="0"
          data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
        >
          <h3 class="Title2">What to do if you are worried about someone ?</h3>
          <p>If you are worried that someone you know is self-harming, it can be difficult to know what to do. When you are aware there is an issue, it is important that you do not wait. Waiting and hoping they will come to you for help might lose valuable time in getting them the best support and treatment to help them.
            Be mindful that they might not feel ready or able to talk about their self-harm. Let them lead the discussion at their own pace and don???t put pressure on them to tell you details that they aren???t ready to talk about. It takes a lot of trust and courage to open up about self-harm.</p>
          <p>
            Some tips for talking to someone about self-harm :
            <ul>
            <li>Acknowledge how difficult it might be to open up about their self-harm but don???t focus on or encourage them to tell you details about specific injuries or behaviours. Instead talk about how they are feeling and what they are going through.</li>
            <li>Reassure them that you are there for them and that there are lots of sources of support available to them. Remind them you are there for them regardless.</li>
            <li>Avoid giving ultimatums; for example ???stop or else?????? as these rarely work, and may drive behaviours underground. Furthermore, this may stop them talking to you and you might not get the chance to discuss the topic again</li>
            <li>Offer them help in seeking professional support and provide information on ways to do this. Help them talk to a trusted adult or family member. </li>
           
            </ul>
          </p>
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

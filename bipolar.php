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
      style="background-image: url('images/bipo.jpg')"
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <h2 class="banner-text" style="color : #322468;">
            <!--Bipolar and Related Disorders-->
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
          <li class="page-summary-item">
            <a href="#types">Types</a>
          </li>
          <li class="page-summary-item"><a href="#symptoms">Symptoms</a></li>
          <li class="page-summary-item">
            <a href="#prevention">Prevention</a>
          </li>
          <li class="page-summary-item">
            <a href="#helping-someone-with-disorder"
              >Helping someone with Bipolar disorder</a
            >
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
              >???You don't have to see the whole staircase, just take the first step.???
              </span
            >
            <footer>
              <cite>Martin Luther King</cite>
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
                Bipolar disorder, formerly called manic depression, is a mental health condition that causes extreme mood 
                swings that include emotional highs (mania or hypomania) and lows (depression). When you become depressed, 
                you may feel sad or hopeless and lose interest or pleasure in most activities. When your mood shifts to mania 
                or hypomania (less extreme than mania), you may feel euphoric, full of energy or unusually irritable. 
                These mood swings can affect sleep, energy, activity, judgment, behavior and the ability to think clearly.          
                Episodes of mood swings may occur rarely or multiple times a year. While most people will experience some 
                emotional symptoms between episodes, some may not experience any. Although bipolar disorder is a lifelong 
                condition, you can manage your mood swings and other symptoms by following a treatment plan. In most cases, 
                bipolar disorder is treated with medications and psychological counseling (psychotherapy).  
            </p>
              <br />
          </div>

          <!--Types-->
          <div
            id="types"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          ><h3 class="Title2">Mania and Hypomania</h3>
          Mania and hypomania are two distinct types of episodes, but they have the same symptoms. 
          Mania is more severe than hypomania and causes more noticeable problems at work, school and social activities, 
          as well as relationship difficulties. Mania may also trigger a break from reality (psychosis) and require hospitalization.
          <br>Both a manic and a hypomanic episode include three or more of these symptoms:
          <ul>
            <li>Abnormally upbeat, jumpy or wired</li>
            <li>Increased activity, energy or agitation</li>
            <li>Exaggerated sense of well-being and self-confidence (euphoria)</li>
            <li>Decreased need for sleep</li>
            <li>Unusual talkativeness</li>
            <li>Racing thoughts</li>
            <li>Distractibility</li>
            <li>Poor decision-making ??? for example, going on buying sprees, taking sexual risks or making foolish investments</li>
            </ul>
          </div>


          <!-- Symptoms -->
          <div
            id="symptoms"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          ><h3 class="Title2">Symptoms</h3>
            <p>There are several types of bipolar and related disorders. They may include mania or hypomania and depression. 
                Symptoms can cause unpredictable changes in mood and behavior, resulting in significant distress and difficulty in life.
              <ul>
              <li><strong>Bipolar I disorder</strong>- You've had at least one manic episode that may be preceded or followed by 
                hypomanic or major depressive episodes. In some cases, mania may trigger a break from reality (psychosis).</li>
              <li><strong>Bipolar II disorder</strong>- You've had at least one major depressive episode and at least one hypomanic episode, 
                but you've never had a manic episode.</li>
              <li><strong>Cyclothymic disorder</strong>- You've had at least two years ??? or one year in children and teenagers ??? of many periods of 
                hypomania symptoms and periods of depressive symptoms (though less severe than major depression).</li>
              <li><strong>Other types</strong>- These include, for example, bipolar and related disorders induced by certain drugs or alcohol or due 
                to a medical condition, such as Cushing's disease, multiple sclerosis or stroke.</li>
              </ul>
              Bipolar II disorder is not a milder form of bipolar I disorder, but a separate diagnosis. While the manic episodes of 
              bipolar I disorder can be severe and dangerous, individuals with bipolar II disorder can be depressed for longer periods, 
              which can cause significant impairment.<br><br> Although bipolar disorder can occur at any age, typically it's diagnosed in the teenage 
              years or early 20s. Symptoms can vary from person to person, and symptoms may vary over time.
            </p>

          </div>

          <!-- Treatment  -->

          <div
          id="prevention"
          class="text-section"
          tabindex="0"
          data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
        >
          <h3 class="Title2">Prevention</h3>
          <p>There's no sure way to prevent bipolar disorder. However, getting treatment at the earliest sign of a mental health 
              disorder can help prevent bipolar disorder or other mental health conditions from worsening.
              <br>
              If you've been diagnosed with bipolar disorder, some strategies can help prevent minor symptoms from becoming 
              full-blown episodes of mania or depression:
            <ul>
            <li><strong>Pay attention to warning signs</strong>- Addressing symptoms early on can prevent episodes from getting worse.
                 You may have identified a pattern to your bipolar episodes and what triggers them. Call your doctor if you feel you're
                  falling into an episode of depression or mania. Involve family members or friends in watching for warning signs. </li>
            <li><strong>Avoid drugs and alcohol</strong>- Using alcohol or recreational drugs can worsen your symptoms and make them more 
                likely to come back.</li>
            <li><strong>Take your medications exactly as directed</strong>- You may be tempted to stop treatment ??? but don't. Stopping your 
                medication or reducing your dose on your own may cause withdrawal effects or your symptoms may worsen or return.</li>
            </ul>
          </p>
        </div>

        <!-- Helping someone with bipolar -->

        <div
            id="helping-someone-with-disorder"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Helping someone with Bipolar and related Disorder</h3>

            <p>
                People with bipolar disorder may not always think or communicate clearly, and they may lash out. 
                Try not to take it personally. You can learn to recognise and anticipate the extremes in mood that someone 
                with bipolar disorder experiences and understand their limits in controlling these ups and downs.
                <br><br>
                Bipolar disorder can strain families and friendships. It may help to organise a close group of friends to 
                share the load where possible. Family therapy can help family members understand their own limits, as well as 
                those of the person with bipolar disorder. 
                <br><br>
                Other useful actions you can take include learning more about bipolar disorders from the resources below, 
                encouraging someone who is showing symptoms to speak to a medical professional, and supporting them in developing 
                strategies to cope with stress and anxiety.
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
                      >I was actually manic a lot of the times that I would take on workloads, and I would say, ???Yes, I can do this,
                       I can do this, I can do this.??? I was conquering the world, but then it would all come crashing down and I would 
                       be more depressed than ever. <a style = "color : #1181ae;" href="experience.html">..Read More</a>
                      </span
                    >
                    <footer>
                      <cite>Demi Lovato</cite>
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
                      >???Bipolar robs you of that which is you. It can take from you the very core of your being and replace it 
                      with something that is completely opposite of who and what you truly are. Because my bipolar went untreated 
                      for so long, I spent many years looking in the mirror and seeing a person I did not recognize or understand. 
                      Not only did bipolar rob me of my sanity, but it robbed me of my ability to see beyond the space it dictated 
                      me to look. I no longer could tell reality from fantasy, and I walked in a world no longer my own.??? 
                      <a style = "color : #1181ae;" href="experience.html">..Read More</a>
                      </span
                    >
                    <footer>
                      <cite>Alyssa Reyans</cite>
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
                      >???Today I wore a pair of faded old jeans and a plain grey baggy shirt.
                      I hadn't even taken a shower, and I did not put on an ounce of makeup.
                      I grabbed a worn out black oversized jacket to cover myself with even though it is warm outside.
                      I have made conscious decisions lately to look like less of what I felt a male would want to see.
                      I want to disappear.??? <a style = "color : #1181ae;" href="experience.html">..Read More</a>
                      </span
                    >
                    <footer>
                      <cite>Sierra D. Waters, Debbie.</cite>
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

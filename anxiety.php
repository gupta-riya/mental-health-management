
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
      style="background-image: url('images/anxiety.jpg')"
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <h2 class="banner-text" style="color : #322468;">
            <!--Anxiety Disorders-->
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
            <a href="#treatment">Treatment</a>
          </li>
          <li class="page-summary-item">
            <a href="#managing-disorder"
              >Managing symptoms</a
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
              Anxiety is a normal emotion. It???s your brain???s way of reacting to stress and alerting you of potential danger ahead. 
              Everyone feels anxious now and then. For example, you may worry when faced with a problem at work, 
              before taking a test, or before making an important decision.
              <br>
              Occasional anxiety is OK. But anxiety disorders are different. 
              They???re a group of mental illnesses that cause constant and overwhelming anxiety and fear.  
              The excessive anxiety can make you avoid work, school, family get-togethers, and other social 
              situations that might trigger or worsen your symptoms. 
              With treatment, many people with anxiety disorders can manage their feelings.
              <br><br>
              It can be challenging and frustrating to live with an anxiety disorder. The constant worry and fear can make you feel 
              tired and scared. If you???ve talked to a doctor about your symptoms, then you???ve taken the first step toward letting go 
              of the worry. It can take some time to find the right treatment that works for you. If you have more than one anxiety 
              disorder, you may need several kinds of treatment. For most people with anxiety disorders, a combination of medicine 
              and counseling is best. With proper care and treatment, you can learn how to manage your symptoms and thrive.  
            </p>
              <br />
          </div>

          <!--Types-->
          <div
            id="types"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          ><h3 class="Title2">Types of Anxiety Disorders</h3>
          <ul>
            <li><strong>Generalized anxiety disorder.</strong>You feel excessive, unrealistic worry and tension with little or no reason.</li>
            <li><strong>Panic disorder.</strong> You feel sudden, intense fear that brings on a panic attack. During a panic attack you may break out in a sweat,
               have chest pain, and have a pounding heartbeat (palpitations). Sometimes you may feel like you???re choking or having a heart attack.</li>
            <li><strong>Social anxiety disorder.</strong> Also called social phobia, this is when you feel overwhelming worry and self-consciousness about 
              everyday social situations. You obsessively worry about others judging you or being embarrassed or ridiculed.</li>
            <li><strong>Specific phobias.</strong> You feel intense fear of a specific object or situation, such as heights or flying.
              The fear goes beyond what???s appropriate and may cause you to avoid ordinary situations.</li>
            <li><strong>Agoraphobia.</strong>You have an intense fear of being in a place where it seems hard to escape or get help
               if an emergency occurs. For example, you may panic or feel anxious when on an airplane, public transportation,
                or standing in line with a crowd.</li>
            <li><strong>Separation anxiety.</strong> Little kids aren???t the only ones who feel scared or anxious when a loved one leaves.
               Anyone can get separation anxiety disorder. If you do, you???ll feel very anxious or fearful when a person you???re 
               close with leaves your sight. You???ll always worry that something bad may happen to your loved one.</li> 
            <li><strong>Selective mutism.</strong> This is a type of social anxiety in which young kids who talk normally with their 
              family don???t speak in public, like at school.</li>
            <li><strong>Medication-induced anxiety disorder.</strong> Use of certain medications or illegal drugs, or withdrawal 
              from certain drugs, can trigger some symptoms of anxiety disorder.</li>
          </ul>
          </div>


          <!-- Symptoms -->
          <div
            id="symptoms"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          ><h3 class="Title2">Symptoms</h3>
            <p>The main symptom of anxiety disorders is excessive fear or worry.
               Anxiety disorders can also make it hard to breathe, sleep, stay still, and concentrate.
               Your specific symptoms depend on the type of anxiety disorder you have. <br>
               <br>Common symptoms are :  
              <ul>
              <li>Panic, fear, and uneasiness</li>
              <li>Feelings of panic, doom, or danger</li>
              <li>Sleep problems</li>
              <li>Not being able to stay calm and still</li>
              <li>Cold, sweaty, numb, or tingling hands or feet</li>
              <li>Shortness of breath</li>
              <li>Breathing faster and more quickly than normal (hyperventilation)</li>
              <li>Heart palpitations</li>
              <li>Dry mouth</li>
              <li>Nausea</li>
              <li>Tense muscles</li>
              <li>Dizziness</li>
              <li>Thinking about a problem over and over again and unable to stop (rumination)</li>
              <li>Inability to concentrate</li>
              <li>Intensely or obsessively avoiding feared objects or places</li>
              </ul>
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
          <p>There are many treatments to reduce and manage symptoms of anxiety disorder. 
            Usually, people with anxiety disorder take medicine and go to counseling. <br>
            Treatments for anxiety disorder include:<br>
            <strong>Medication</strong><br>Several types of drugs are used to treat anxiety disorders. 
            Talk to your doctor or psychiatrist about the pros and cons of each medicine to decide which one is best for you. 
            <ul>
            <li><strong> Antidepressants</strong> - Modern antidepressants (SSRIs and SNRIs) are typically the first drugs prescribed
              to someone with an anxiety disorder. Examples of SSRIs are escitalopram (Lexapro) and fluoxetine (Prozac).
              SNRIs include duloxetine (Cymbalta)and venlafaxine (Effexor).
            <li><strong>Bupropin</strong>- This is another type of antidepressant commonly used to treat chronic anxiety. 
              It works differently than SSRIs and SNRIs.</li>
            <li><strong>Other antidepressants</strong>- These include tricyclics and monoamine oxidase inhibitors (MAOIs). 
              They are less commonly used because side effects, like drops in blood pressure, dry mouth, blurry vision, and 
              urinary retention, can be unpleasant or unsafe for some people.</li>
            <li><strong>Benzodiazepines</strong>- Your doctor may prescribe one of these drugs if you???re having persistent panicky 
              feelings or anxiety. They help lower anxiety. Examples are alprazolam (Xanax) and clonazepam (Klonopin). 
              They work quickly, but you can become dependent on them. Usually, they???re meant to be an add-on to your anxiety 
              disorder treatment and you shouldn???t take them for a long time.</li>
            <li><strong>Beta-blockers</strong>- This type of high blood pressure drug can help you feel better if you???re having physical 
              symptoms of anxiety, such as a racing heart, trembling, or shaking.  A beta-blocker may help you relax during an acute 
              anxiety attack.</li>
            <li><strong>Antipsychotics</strong>- Low doses of these drugs can be added to help make other treatments work better.</li>
            <li><strong>Anticonvulsants</strong>- Used to prevent seizures in people with epilepsy, these drugs also can relieve certain 
              anxiety disorder symptoms.</li>
            <li><strong>Buspirone</strong>- This anti-anxiety drug is sometimes used to treat chronic anxiety. You???ll need to take it 
              for a few weeks before seeing full symptom relief. </li>
            </ul>
            <strong>Psychotherapy</strong>This is a type of counseling that helps you learn how your emotions affect your behaviors.
             It???s sometimes called talk therapy. A trained mental health specialist listens and talks to you about your thoughts and 
             feelings and suggests ways to understand and manage them and your anxiety disorder.
            <ul>
            <li><strong>Cognitive behavioral therapy (CBT)</strong>-This common type of psychotherapy teaches you how to turn negative, 
              or panic-causing, thoughts and behaviors into positive ones. 
              You???ll learn ways to carefully approach and manage fearful or worrisome situations without anxiety. 
              Some places offer family CBT sessions.</li>
            </ul>
          </p>
        </div>

        <!-- Helping someone with an OCD -->

        <div
            id="managing-disorder"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Managing anxiety disorder symptoms</h3>

            <p>
              These tips can help you sontrol or lessen your symptoms :  </p>
              <br />
              <p>
                Learn about your disorder. The more you know, the better prepared you will be to manage symptoms and roadblocks 
                along the way. Don???t be afraid to ask your doctor any questions you might have. Remember, you are a key part 
                of your health care team.</p>
              <br />
              <p>
                Stick to your treatment plan. Suddenly stopping your meds can cause unpleasant side effects and can 
                even trigger anxiety symptoms. </p>
              <br />
              <p>
                Cut down on foods and drinks that have caffeine, such as coffee, tea, cola, energy drinks, and chocolate. 
                Caffeine is a mood-altering drug, and it may make symptoms of anxiety disorders worse.</p>
              <br />
              <p>
                Don???t use alcohol and recreational street drugs. Substance abuse increases your risk of anxiety disorders.
              </p>
              <br/>
              <p>
                Eat right and exercise. Brisk aerobic exercises like jogging and biking help release brain chemicals that 
                cut stress and improve your mood.
              </p>
              <br>
              <p>
                Get better sleep. Sleep problems and anxiety disorder often go hand in hand. Make getting good rest a priority. 
                Follow a relaxing bedtime routine. Talk to your doctor if you still have trouble sleeping.
              </p>
              <br />
              <p>
                Learn to relax. Stress management is an important part of your anxiety disorder treatment plan. 
                Things like meditation, or mindfulness, can help you unwind after a stressful day and may make your treatment work better.
              </p>
              <br />
              <p>
                Keep a journal. Writing down your thoughts before the day is down may help you relax so you???re not 
                tossing and turning with anxious thoughts all night. 
                <br />
              </p>
              <br />
              <p>
                Manage your negative thoughts. Thinking positive thoughts instead of worrisome ones can help reduce anxiety. 
                This can be challenging if you have certain types of anxiety, however. Cognitive behavioral therapy can teach 
                you how to redirect your thoughts. 
                <br />
              </p>
              <br />
              <p>
                Get together with friends. Whether it???s in person, on the phone, or the computer, social connections help people thrive and 
                stay healthy. People who have a close group of friends that support and chat with them have lower levels of social anxiety. 
                <br />
              </p>
              <br />
              <p>
                Seek support. Some people find it helpful and uplifting to talk to others who are experiencing the same symptoms and emotions. 
                Self-help or support groups let you share your concerns and achievements with others who are or who have been there. 
                <br />
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
                      >???Today I wore a pair of faded old jeans and a plain grey baggy shirt.
                      I hadn't even taken a shower, and I did not put on an ounce of makeup.
                      I grabbed a worn out black oversized jacket to cover myself with even though it is warm outside.
                      I have made conscious decisions lately to look like less of what I felt a male would want to see.
                      I want to disappear.??? <a style = "color : #1181ae;" href="anxietyExperience1.php">..Read More</a>
                      </span
                    >
                    <footer>
                      <cite>Sierra D. Waters, Debbie.</cite>
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
                      >???Today I wore a pair of faded old jeans and a plain grey baggy shirt.
                      I hadn't even taken a shower, and I did not put on an ounce of makeup.
                      I grabbed a worn out black oversized jacket to cover myself with even though it is warm outside.
                      I have made conscious decisions lately to look like less of what I felt a male would want to see.
                      I want to disappear.??? <a style = "color : #1181ae;" href="anxietyExperience1.php">..Read More</a>
                      </span
                    >
                    <footer>
                      <cite>Sierra D. Waters, Debbie.</cite>
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
                      I want to disappear.??? <a style = "color : #1181ae;" href="anxietyExperience2.php">..Read More</a>
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
                  <a href="index.html"
                    ><span class="fa fa-chevron-right mr-2"></span>Services</a
                  >
                </li>
               <!-- <li>
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

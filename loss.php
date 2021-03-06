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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/disease_layout.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



</head>

<body>
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p class="mb-0 phone pl-md-2">
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-md-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-paper-plane mr-1">headtobetterlife@gmail.com</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Head To Better Life</a>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Home</a>
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
    <div class="hero-wrap banner-image" style="background-image: url('images/grief.jpg')" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center">

                <br/>
                <h2 class="banner-text" style="color: rgb(255, 255, 255);">
                    Grief And Loss Related Disorders
                </h2>
            </div>
        </div>
    </div>

    <!-- main content page -->

    <div id="page-frame" class="content-of-page" style="
        background: linear-gradient(
          rgb(255, 255, 255) 0px,
          rgb(255, 255, 255) 3044px,
          rgb(241, 241, 241) 3344px
        );
      ">
        <!-- left side of page -->
        <div id="page-left-side" class="left-side-summary">
            <h6 id="page-summary-heading" class="text-uppercase">
                <center>On this page</center>
            </h6>

            <ul style="list-style-type: none">
                <li class="page-summary-item">
                    <a href="#description">Description</a>
                </li>
                <li class="page-summary-item"><a href="#symptoms">Symptoms</a></li>
                <li class="page-summary-item">
                    <a href="#treatment">Treatment</a>
                </li>
                <li class="page-summary-item">
                    <a href="#helping-someone-with-disorder">Helping Those Who Are Grieving
                        </a
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
                <blockquote class="overview" tabindex="0" data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e">
                    <span class="Title1">???There are no happy endings. Endings are the saddest part, so just give me a happy middle and a very happy start.???</span
            >
            <footer>
              <cite>Shel Silverstein, Every Thing On It</cite>
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
                When you lose someone or something dear to you, it's natural to feel pain and grief. The grief process is normal, and most people go through it. But when grief takes over your life and you begin to feel hopeless, helpless, and worthless, then it's time to talk to your doctor about telling the difference between normal grief and depression.


            </p>
              <br />
              <p>
                Grief is a natural response to death or loss. The grieving process is an opportunity to appropriately mourn a loss and then heal. The process is helped when you acknowledge grief, find support, and allow time for grief to work.

Each year, between 5% and 9% of the population loses a close family member. But that's not the only kind of loss that can cause grief. People can feel loss when:

            </p>
              <br />
              <p>
                  <ol>
                      <li>They become separated from a loved one</li>
                      <li>They lose a job, position, or income
                    </li>
                      <li>A pet dies or runs away
                    </li>
                      <li>Kids leave home
                    </li>
                      <li>They have a major change in life such as getting a divorce, moving, or retiring
                    </li>
                      
                  </ol>
              </p>
              <br/>
              <p>
                While we all feel grief and loss, and each of us is unique in the ways we cope with our feelings.

Some people have healthy coping skills. They're able to feel grief without losing sight of their daily responsibilities.
Other people don't have the coping skills or support they need. That hinders the grieving process.


            </p>
              <br />
              
              <p>
                We generally think of grief as a reaction to a death. But there is another grief that comes from loss while someone is still living. This grief is often experienced when caring for someone with a chronic illness. Chronic illness, and particularly any illness that impairs a person???s cognitive ability, causes caregivers and loved ones to experience grief and loss right now. In this fact sheet, we will discuss the grief related to death and dying, and grief associated with chronic illness. It is natural to grieve the death of a loved one before, during, and after the actual time of their passing. The process of accepting the unacceptable is what grieving is all about.

                <br/>
              You can read in detail about the types of disease
              <a
                href="https://elizz.com/caregiver-resources/types-of-grief-and-loss/"
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
                Grief affects our whole being???physically, socially, emotionally, and spiritually. Each of us will have different symptoms. If you have had a previous loss, you may experience grief this time in a similar or different way, depending on the situation, your relationship with the deceased, and other significant emotional factors in your life at the time. Culture, religion, and social norms influence what we are comfortable showing to others and even what we are comfortable admitting to ourselves.
            </p>
            <br/>
            
<p>
   <b> Physical

</b>
</p>
<br/>
<p>
    <ul>
        <li>Crying
        </li>
        <li>Sighing </li>
        <li>Low energy/exhaustion/weakness/fatigue

        </li>
        
        <li>Headaches

        </li>
        <li>
            Stomach aches, loss of appetite

        </li>
        <li>Eating too much, particularly comfort foods</li>
        <li>Sleep disturbance???too much or too little, disturbed dreams
        </li>
        <li>Feelings of heaviness, aches, pains

        </li>
        <li>Being super busy, pushing yourself to do too much
        </li>
        <li>Reckless, self-destructive activities such as drinking too much</li>
 </ul>


    <br/>
    <p><b>Social
    </b>
       
    </p>
    <br/>
    <p>
        <ul>
             <li>Feeling alone
            </li>
             <li>Wanting to isolate yourself from socializing, finding it hard to pretend to feel OK, being pushed to be social by others
            </li>
             <li>Feeling detached from others
            </li>
             <li>Angry that others??? lives are going on as usual and yours isn???t
            </li>
             <li>Not wanting to be alone, feeling needy and clingy

            </li>
        </ul>
    </p>

    <br/>
    <p><b>
        Emotional


    </b></p>
          
<br/>
<p>
    <ul>
        <li>Sadness, crying spells
        </li>
        <li>Anger/frustration/rage
        </li>
        <li>Confusion/overwhelmed
        </li>
        <li>Guilt
        </li>
        <li>Worry/anxiety/panic
        </li>
        <li>Yearning
        </li>
        <li>Edginess/irritability
        </li>
        <li>Memory problems, feeling distracted, preoccupied
        </li>
        <li>Depression
        </li>
        <li>Euphoria
        </li>
        <li>Passive resignation
        </li>
        <li>Fluctuating emotions
        </li>
        <li>
            Sense of lack of control
        </li>
        <li>Others might see you as ???unreasonable??? or ???overreacting???

        </li>
    </ul>
</p>

<br/>
    <p><b>
        Spiritual

    </b>
</p>
          
<br/>
<p>
    <ul>
        <li>Questioning your faith/meaning of life/suffering

        </li>
        <li>Questioning reason for the death/disease

        </li>
        <li>Self-destructive behavior, such as drinking too much or driving too fast

        </li>
        <li>Anger at God

        </li>
        <li>
            Coming closer to faith/God for solace
 



        </li>
        

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
          <p>Several treatments can help people with grief to cope with their symptoms and improve their quality of life.

        </p>
       
        <p>
              <br/>
            Treatments include:
            <ul>
            <li><strong>Acceptance </strong> - Adjusting to the new reality, starting to move on
                Sense of hope, healing, and integration
                
                
            </li>
            <li><strong>Seek support for grief and loss
            </strong>-  The pain of grief can often cause you to want to withdraw from others and retreat into your shell. But having the face-to-face support of other people is vital to healing from loss. Even if you???re not comfortable talking about your feelings under normal circumstances, it???s important to express them when you???re grieving. While sharing your loss can make the burden of grief easier to carry, that doesn???t mean that every time you interact with friends and family, you need to talk about your loss. Comfort can also come from just being around others who care about you. The key is not to isolate yourself.

        </li>
            <li><strong>Turn to friends and family members.</strong>- Now is the time to lean on the people who care about you, even if you take pride in being strong and self-sufficient. Rather than avoiding them, draw friends and loved ones close, spend time together face to face, and accept the assistance that???s offered. Often, people want to help but don???t know how, so tell them what you need???whether it???s a shoulder to cry on, help with funeral arrangements, or just someone to hang out with. If you don???t feel you have anyone you can regularly connect with in person, it???s never too late to build new friendships.
            </li>
            <li><strong>Accept that many people feel awkward
            </strong>-  when trying to comfort someone who???s grieving. Grief can be a confusing, sometimes frightening emotion for many people, especially if they haven???t experienced a similar loss themselves. They may feel unsure about how to comfort you and end up saying or doing the wrong things. But don???t use that as an excuse to retreat into your shell and avoid social contact. If a friend or loved one reaches out to you, it???s because they care.


            </li>
            <li><strong>Draw comfort from your faith
            </strong>-If you follow a religious tradition, embrace the comfort its mourning rituals can provide. Spiritual activities that are meaningful to you???such as praying, meditating, or going to church???can offer solace. If you???re questioning your faith in the wake of the loss, talk to a clergy member or others in your religious community.

            </li> 
            <li><strong>Join a support group. </strong>-Grief can feel very lonely, even when you have loved ones around. Sharing your sorrow with others who have experienced similar losses can help. To find a bereavement support group in your area, contact local hospitals, hospices, funeral homes, and counseling centers, or see the Resources section below.

            </li>
            <li><strong>Talk to a therapist or grief counselor.</strong>-If your grief feels like too much to bear, find a mental health professional with experience in grief counseling. An experienced therapist can help you work through intense emotions and overcome obstacles to your grieving.

            </li>
          </p>
        </div>

        <!-- Helping someone with an OCD -->

        <div
            id="helping-someone-with-disorder"
            class="text-section"
            tabindex="0"
            data-content-block-id="c25024c1-d390-4956-adc8-274030e49b47"
          >
            <h3 class="Title2">Helping Those Who Are Grieving

            </h3>

            <p>
                We often feel uncomfortable when approaching someone we know who is grieving. It is hard to know what to say or do. Here are some tips:
 <br />
            </p>
                    <ul>
                        <li>Be available. Offer support in an unobtrusive but persistent manner.</li>
                        <li>Listen without giving advice.
                        </li>
                        <li>Do not offer stories of your own experiences with grief. This can have the effect of dismissing the grieving person???s pain.
                        </li>
                        <li>Allow the grieving person to use expressions of anger or bitterness, including such expressions against God. This may be normal behavior in an attempt to find meaning in what has happened.
                        </li>
                        <li>Realize that no one can replace or undo the loss. To heal, the individual must endure the grief process. Allow him/her to feel the pain</li>
                        <li>Be patient, kind, and understanding without being patronizing. Don???t claim to ???know??? what the other person is feeling.</li>
                        <li>Don???t force the individual to share feelings if he/she doesn???t want to</li>
                        <li>Physical and emotional touch can bring great comfort to the bereaved. Don???t hesitate to share a hug or handclasp when appropriate.</li>
                        <li>Be there later, when friends and family have all gone back to their routines.</li>
                        <li>Remember holidays, birthdays, and anniversaries that have important meaning for the bereaved. Offer support during this time.
                        </li>
                        <li>Don???t be afraid of reminding the person of the loss; he/she is already thinking about it. Share stories and memories of the deceased.
                        </li>
                        
                    </ul>
                  
              
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
              style="background-color: #f0e4d7"
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
                      >??? I went through a difficult time when my husband was dying of a malignant brain tumor. I wondered why it had to happen to such a wonderful man. I wondered what we had done as a couple to deserve such agony. When I lost a breast to cancer six months after my husband???s death I had no energy to waste on asking unanswerable questions so I decided that ???Shit happens???. There is no rhyme or reason, no great plan, no secret agenda. ???Shit happens???. ??? <a style = "color : #1181ae;" href="https://www.griefandsympathy.com/joy-after-grief.html">..Read More</a></span>
                    <footer>

                    </footer>
                </blockquote>

            </div>
        </div>
        <div class="item">
            <div class="carousel-caption">
                <blockquote class="overview" tabindex="0" data-content-block-id="2ba05217-5b9e-4dad-9d59-1d9b620bf37e">
                    <span class="Title1" style="font-size: 18px; text-shadow: none;  line-height: 30px;">???After the miscarriage, I was in an emotional turmoil most days of the week, but life went on. I remember hating the harsh reality that life had to go on. I wanted to scream out to the world, ???But my baby died! And I will never get to meet her!.??? On my nights alone while my husband worked, I would weep for Emmanuella and have long moments of envisioning all the ???what ifs???.   ??? <a style = "color : #1181ae;" href="https://www.griefandsympathy.com/emotional-pain-of-a-miscarriage.html">..Read More</a></span
                    >
                    <footer>
                      
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
                      >???When I was born my brother was seriously ill and so I was fostered out for the first several weeks of my life. Thus, there was no bonding with my mother and I always felt alone in my family, as there was no primary attachment. My brother was six years older than me so, especially in my teens, I grew up alone.

                      My father worked nightshift to earn the extra money so I never really knew him until we were thrown together when my mother took ill. ??? <a style = "color : #1181ae;" href="https://www.griefandsympathy.com/loneliness-after-death.html">..Read More</a>
                      </span
                    >
                    <footer>
                     
                    </footer>
                  </blockquote>
                  
                </div>
                </div>
              </div>
              <a
                class="carousel-control left"
                href="#DemoCarousel"
                data-slide="prev"
                style="background-color: #f0e4d7"
              >
                <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="carousel-control right" href="#DemoCarousel" data-slide="next" style="background-color: #f0e4d7">
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
                        <h2 class="ftco-heading-2 logo"><a href="#">Head To Better Life</a></h2>
                        <p>
                            ???There is hope, even when your brain tells you there isn???t.??? ??? John Green
                        </p>
                        <ul class="ftco-footer-social list-unstyled mt-2"></ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Explore</h2>
                        <ul class="list-unstyled">
                            <li>
                                <a href="about.html"><span class="fa fa-chevron-right mr-2"></span>About</a
                  >
                </li>
                <li>
                  <a href="index.html"
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
                      ><span class="icon fa fa-phone"></span
                      ><span class="text">+1234567889</span></a
                    >
                  </li>
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

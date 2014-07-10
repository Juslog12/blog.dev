
@extends('layouts.master')


@section('content')
          <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="js/plugins/html5shiv.js"></script>
          <script src="js/plugins/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
  

    <!-- welcome begins -->
    <section id="page-welcome" class="page-welcome">
      <div>
          <ul class="slider-controls">
              <li><a id="vegas-next" class="next" href="#"></a></li>
              <li><a id="vegas-prev" class="prev" href="#"></a></li>
          </ul>
        </div>
        <div class="container">
            <div class="row">
                <header class="centered">
                    <h1>Justin Mason</h1>
                    <p>Entrepreneur and Web Developer</p>
                </header>
                <div class="social-icons">
                        <a href="https://twitter.com/" class="btn btn-round btn-clear btn-twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/justin.mason.9655" class="btn btn-round btn-clear btn-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/" class="btn btn-round btn-clear btn-instagram"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/profile/view?id=37059367&trk=spm_pic" class="btn btn-round btn-clear btn-linkedin"><i class="fa fa-linkedin-square"></i></a>
                        <a href="https://www.google.com/" class="btn btn-round btn-clear btn-google"><i class="fa fa-google-plus"></i></a>
                    
                </div>
                <a href="#page-contact" class="btn btn-default hire-me">Hire Me</a>
            </div>
        </div>
    </section><!-- welcome ends -->
    <!-- profile begins -->
    <section id="page-profile" class="page-profile">
      <div class="container">
                <header class="section-header">
                    <h2 class="section-title">Personal Profile</h2>
                    <div class="spacer"></div>
                    <p class="section-subtitle">One isn't necessarily born with courage, but one is born with potential. Without courage, we cannot practice any other virtue with consistency. We can’t be kind, true, merciful, generous or honest. ~ Maya Angelou </p>
                </header>
            <div class="row">
              <div class="col-md-3">
                 <div class="profile"><img src="img/profile_justin.jpg" alt="profile"/></div> 
              </div>
               <div class="col-md-9">
                <p>Welcome to my page, and now that you're here, I'd like to share with you a little about me. I'm a continuous learner, love reading, taking new courses, traveling and learning from the world around me everyday. </p>
                <p>I'm also student of life, continually seeking to improve myself both mentally and physically, a lover of participating in sports and almost anything outdoors.  </p>
                <p>When its time for business, I'm a highly motivated and passionate leader with demonstrated performance excellence in P&L and teammate management, business development, strategic planning, startup bootstrapping, and relationship building with key partners. </p>
                 <p>Some of my favorite books & movies, Blink by Malcolm Gladwell, David vs. Goliath also by Malcolm Gladwell, Lone Survivor the movie, Her the movie, Contact, and Gravity.</p>
              </div>
            </div>
      </div> 
    </section><!-- profile ends -->
    <!-- skills begins -->
     <section id="page-skills" class="page-skills">
       <div class="container">
           
                 <header class="section-header">
                    <h2 class="section-title"><span>Skills</span></h2>
                      <div class="spacer"></div>
                    <p class="section-subtitle">I may not be there yet, but I’m closer than I was yesterday. ~Unknown</p>
                </header>
            <div class="row">
              <div class="col-md-2">
               <span class="chart" data-percent="95">
                      <span class="percent"></span>
                      <h3>Management</h3>
               </span>
            </div>
               <div class="col-md-2 ">
               <span class="chart" data-percent="60">
                      <span class="percent"></span>
                      <h3>Bus Dev</h3>
               </span>
            </div>
               <div class="col-md-2">
               <span class="chart" data-percent="75">
                      <span class="percent"></span>
                       <h3>Profit & Loss</h3>
               </span>
            </div>
               <div class="col-md-2">
               <span class="chart" data-percent="80">
                      <span class="percent"></span>
                      <h3>Startups</h3>
               </span>
            </div>
               <div class="col-md-2">
               <span class="chart" data-percent="65">
                      <span class="percent"></span>
                      <h3>LAMP Stack</h3>
               </span>
            </div>
               <div class="col-md-2">
               <span class="chart" data-percent="85">
                      <span class="percent"></span>
                       <h3>Spanish</h3>
               </span>
            </div>
          </div>
        </div>
    </section><!-- skills ends -->
    <!-- education begins -->
     <section id="page-education" class="page-education">
       <div class="container">
                <header class="section-header">
                    <h2 class="section-title"><span>Education</span></h2>
                     <div class="spacer"></div>
                    <p class="section-subtitle">The only person who is educated is the one who has learned how to learn and change. ~ Carl Rogers</p>
                </header>
                <div class="row">
                 <div class="col-md-6">
                  <article class="education">
                    <header>
                      <h3>Thunderbird, School of Global Management</h3>
                      <p>MBA - <strong>Graduating:</strong> 2015</p>
                    </header>
                      <p>Lorem ipsum dolor sit amet, ut pri munere perfecto sadipscing, nam habeo legere disputationi ea. Vis nostrud intellegat eu, in vix erat abhorreant accommodare. Vix id elit albucius suavitate. Eos mentitum forensibus et. Vix et quidam moderatius, cu vim quem tibique constituam.</p>
                  </article>
                </div>
                <div class="col-md-6">
                <article class="education">
                  <header>
                    <h3>University of North Carolina</h3>
                    <p>B.S. Psychology, Spanish Minor  - <strong>Graduated:</strong> 2002</p>
                  </header>
                    <p>Lorem ipsum dolor sit amet, ut pri munere perfecto sadipscing, nam habeo legere disputationi ea. Vis nostrud intellegat eu, in vix erat abhorreant accommodare. Vix id elit albucius suavitate. Eos mentitum forensibus et. Vix et quidam moderatius, cu vim quem tibique constituam.</p>
                </article>
                </div>
            </div>
       </div>
    </section><!-- education ends -->
    <!-- experience begins -->
     <section id="page-experience" class="page-experience">
       <div class="container">
                <header class="section-header">
                    <h2 class="section-title"><span>Experience</span></h2>
                     <div class="spacer"></div>
                    <p class="section-subtitle">Give me a firm place to stand and I will move the earth. - Archimedes </p>
                </header>
                <div class="row">
                 <div class="col-md-4">
                  <article class="experience">
                    <header>
                      <h3>Vela</h3>
                      <p>President / Los Angeles, CA / 2011 - Current</p>
                    </header>
                      <p>Founded Vela in 2010 as the first voice technology for music product that took me on a start up path to pitch on Shark Tank, 2013 SXSW Accelerator, and 2012 AlwaysOn event. Ran business development creating relations with every major car manufacturer in the US until the company lost the market share to Apple. Spun off a mobile app thats reached almost 1M downloads. </p>
                  </article>
                </div>
                  <div class="col-md-4">
                  <article class="experience">
                    <header>
                      <h3>DaVita</h3>
                       <p>Operations Manager / Los Angeles, CA / 2008 - 2011</p>
                    </header>
                      <p>Managed the lives of over 700 dialysis patients every day through leading 6 dialysis clinics and 200+ teammates. "Da Vita" means to give life, and that exactly what we did through managing the business and clinicals.  It was my most fullfilling job to date.</p>
                  </article>
                </div>
                <div class="col-md-4">
                <article class="experience">
                  <header>
                    <h3>US Air Force</h3>
                     <p>Officer/ Miami, FL / 2002 - 2008</p>
                  </header>
                    <p>Was given the gift of leadership training and then responsiblities in various analytic roles in the fields of Manpower and Intelligence. As a Foriegn Area Officer I expanded my Spanish speaking skills through language training in Argentina. The most important aspects of my roles in the military involved using analysis and teamwork to save resources or lives.  </p>
                </article>
                </div>
            </div>
        </div>
    </section><!-- experience ends -->
    <!-- portfolio begins -->
     <section id="page-portfolio" class="page-portfolio">
          <div class="container">
            <div class="row">
                <header class="section-header">
                    <h2 class="section-title"><span>Portfolio</span></h2>
                      <div class="spacer"></div>
                    <p class="section-subtitle">If you ask me what I came to do in this world, I will answer you: I am here to live out loud. ~ Emile Zola 
 </p>
                </header>
           
                <div id="grid-controls-wrapper">
                <ul class="nav nav-pills center-pills grid-controls">
                  <li class="active filter"><a href="javascript:void(0)" data-filter="*">All</a></li>
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".branding">Apps</a></li>   
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".design">Web Design</a></li>            
                  <li class="filter"><a href="javascript:void(0)"  data-filter=".photography">Companies</a></li>
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".web">Website</a></li>
                </ul>
              </div>
            
                <div>
                  <ul id="grid" class="grid-wrapper">
                      <li class="mix web" >
                       <a href="img/portfolio/large/01.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/01.png"  alt="" >
                      </a> </li>
                      <li class="mix design">
                        <a href="img/portfolio/large/02.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/02.png" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/03.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/03.png" alt="" ></a></li>
                      <li class="mix web">
                        <a href="img/portfolio/large/04.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/04.png" alt="" ></a></li>
                      <li class="mix branding">
                        <a href="img/portfolio/large/05.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/05.png" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/06.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/06.png" alt="" ></a></li>
                      <li class="mix photography">
                        <a href="img/portfolio/large/07.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/07.png" alt="" ></a></li>
                      <li class="mix photography">
                        <a href="img/portfolio/large/08.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/08.png" alt="" ></a></li>
                      <li class="mix photography">
                        <a href="img/portfolio/large/09.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/09.png" alt="" ></a></li>
                      <li class="mix web">
                        <a href="img/portfolio/large/10.jpg"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/10.jpg" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/11.jpg"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/11.jpg" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/12.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/12.png" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/13.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/13.png" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/14.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/14.png" alt="" ></a></li>
                         <li class="mix branding">
                        <a href="img/portfolio/large/15.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/15.png" alt="" ></a></li>
                  </ul>
                </div>
            </div>
        </div>
    </section><!-- portfolio ends -->
    <!-- contact begins -->
     <section id="page-contact" class="page-contact">
          <div class="container">
              <header class="section-header">
                  <h2 class="section-title"><span>Contact</span></h2>
                    <div class="spacer"></div>
                       <p class="section-subtitle">Thank you for visiting. </p>
              </header>
        <div class="row">
          <div class="col-sm-5 contact-info">
            <h3>Contact Info</h3>
            <p><i class="fa fa-map-marker"></i> 1234 State St., San Francisco, CA  72020 </p>
            <p><i class="fa fa-phone"></i> (714) 317-1554 | (555) 123-7654 (FAX)</p>
            <p><i class="fa fa-envelope-o"></i> justinmason@myemail.com</p>
          </div>
          
          <div class="col-sm-7">
          <h3>Get in Touch</h3>
              <form  class="form-horizontal" id="contact-form">
        <div class="control-group">
            <label class="control-label" for="name">Name</label>
            <div class="controls">
                <input type="text" name="name" id="name" placeholder="Your name" class="form-control input-lg ">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">Email Address</label>
            <div class="controls">
                <input type="text" name="email" id="email" placeholder="Your email address" class="form-control input-lg">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="message">Message</label>
            <div class="controls">
                <textarea name="message" id="message" rows="8" class="form-control input-lg"></textarea>
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-default btn-lg btn-block">Submit Message</button>
        </div>
    </form><!-- End contact-form -->
          </div>
        </div><!-- End row -->

        </div>
    </section> <!-- contact ends -->


        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollTo.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
        <script src="js/jquery.vegas.min.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
@stop


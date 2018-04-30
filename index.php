<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>James Bowler | Web Developer</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link type='text/css' rel="stylesheet" href="style.css">

    <script src="https://use.fontawesome.com/a2f9a5935c.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>




	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109514307-1"></script>
	<script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-109514307-1');
	</script>
  </head>

  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.jamesbowler.co.uk">James Bowler</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">


              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class=''><a href="#home"><span class='hvr-underline-from-left'>HOME</span></a></li>
            <li class=''><a href="#about"><span class='hvr-underline-from-left'>ABOUT</span></a></li>
            <li class=''><a href="#projects"><span class='hvr-underline-from-left'>PROJECTS</span></a></li>
            <li class=''><a href="#contact"><span class='hvr-underline-from-left'>CONTACT ME</span></a></li>

              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

<!-- HEADER JUMBOTRON SECTION-->
<header class='jumbotron' id='home'>
  <div class='container' id='welcome'>
    <div class='row'>

    <div class='col-xs-12 col-sm-4 col-sm-push-8 wel-right text-center'>
        <img src='images/me.jpg' class='img-responsive img-rounded welcomeImg'>
      </div>

      <div class='col-xs-12 col-sm-7 col-sm-offset-1 col-sm-pull-4 wel-left'>
        <h1 class='text-center'>Hi, my name is James.</h1>
        <p class='text-center'>Aspiring full stack web developer based in Redditch Worcestershire. <br> Open University Bsc Hons Computing & IT (software) student.</p>
        <div id='headerIcons'>
          <div>
            <a href='https://github.com/jimuk07' target='_blank'><img src='images/GitHub.png' class='headerSocial img-responsive'></a>
          </div>
          <div>
            <a href='https://twitter.com/JimWeb_UK' target='_blank'><img src='images/Twitter.png' class='headerSocial img-responsive img-rounded'></a>
          </div>
          <div>
            <a href='#'><img src="images/LinkedIn.png" class='headerSocial img-responsive img-rounded'></a>
          </div>
          <div>
            <a href='https://www.freecodecamp.org/jimuk07' target='_blank'><img src='images/ffc.jpg' class='headerSocial img-responsive img-rounded'></a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</header>

<!-- ABOUT ME SECTION -->
<section class='container sectionColor' id='about'>
  <h1 class='page-header'>About Me</h1>

  <h4>Passionate about Javascript, I love adding functionality to web sites and getting in-depth behind the workings of web apps.<br>
  I spend my free time learning from the best available online resources, as well as studying a degree with the Open University, with a goal of gaining a career in web development. <br>
  My degree is software focussed and includes modules on Object Oriented programming in Java, as well as covering web technologies and general programming.<br></h4>

  <div class="row">
    <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-1 text-center skills">
      <h3>Skills & Abilities</h3>
      <ul class='list-unstyled'>
        <li>HTML 5</li>
        <li>CSS 3</li>
        <li>Responsive Design (css3 / flexbox)</li>
        <li>Bootstrap</li>
        <li>JQuery</li>
        <li>Javascript</li>
        <li>JSON, API's & AJAX</li>
        <li>React.js</li>
        <li>Node.js</li>
        <li>Git / GitHub</li>
        <li>Algorithm scripting</li>
        <li>Object Oriented Programming</li>
        <li>Basic Java OOP</li>
      </ul>
    </div>

    <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-1 text-center resources">
      <h3>Learning Resources</h3>
      <ul class='list-unstyled'>
        <li>Open University</li>
        <li>Free Code Camp</li>
        <li>CodeAcademy</li>
        <li>Udacity</li>
        <li>Udemy</li>
        <li>Mozilla Developer Network</li>
        <li>Other Online Resources.</li>
      </ul>
    </div>
  </div>
  

  

  <div class='row'>
    <div class='col-xs-12 col-xs-offset-0 text-center' id='aboutIcons'>
      <ul class='list-inline'>
        <li><img src="images/html5.png" class='aboutIcon1' alt="HTML 5 Icon"></li>
        <li><img src="images/css3.png" class='aboutIcon1' alt="CSS 3 Icon"></li>
        <li><img src="images/jsicon.png" class='aboutIcon2' alt="Javascript Icon"></li>
        <li><img src="images/jquery.png" class='aboutIcon2' alt="Jquery Icon"></li>
        <li><img src="images/bootstrap.png" class='aboutIcon2' alt="Bootstrap Icon"></li>
        <li><img src="images/Aplus.png" class='aboutIcon3' alt="Comptia A+ Icon"></li>
        <li><img src="images/react.png" class='aboutIcon1' alt="React JS Logo"></li>
        <li><img src="images/node.png" class='aboutIcon1' alt="Node JS Logo"></li>
      </ul>
    </div>
  </div><!--End Inline Icons Row-->
</section>

<!-- PROJECTS SECTION -->
<section class='container sectionColor' id='projects'>

  <h1 class='page-header'>Featured Projects <a href='https://github.com/jimuk07' target='_blank'><small><em><span class='hvr-underline-from-left'>More projects</span> >></em></small></a></h1>

  <div class='col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-1 projItem'>
    <img src="images/scrollReveal.png" alt="Project Thumbnail of Sample Product Website">
    <h4>Sample Product Site</h4>
    <a class='btn btn-block btn-success btn-sm' href='projects/scrollReveal/index.html' target='_blank'>View</a>
  </div>
  <div class='col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-0 projItem'>
    <img src="images/responweb.png" alt="Project Thumbnail of Responsive Website">
    <h4>Responsive Website</h4>
    <a class='btn btn-block btn-success btn-sm' href='projects/responsiveWebsite/index.html' target='_blank'>View</a>
  </div>
  <div class='col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-0 projItem'>
      <img src="images/parallaxSite.png" alt="Project Thumbnail of Parallax Effect Website">
      <h4>Parallax Effect Site</h4>
      <a class='btn btn-block btn-success btn-sm' href='projects/parallaxSite/index.html' target='_blank'>View</a>
  </div>
  <div class='col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-1 projItem'>
      <img src="images/quoteMachine.png" alt="Project Thumbnail of Random Quote Machine">
      <h4>Random Quote Machine</h4>
      <a class='btn btn-block btn-success btn-sm' href='projects/fccRandomQuote/index.html' target='_blank'>View</a>
  </div>
  <div class='col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-0 projItem'>
      <img src="images/filterList.png" alt="Project Thumbnail of Filterable list">
      <h4>Filterable Contact List</h4>
      <a class='btn btn-block btn-success btn-sm' href='projects/filterableContactList/index.html' target='_blank'>View</a>
  </div>
  <div class='col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-0 projItem'>
      <img src="images/wikiViewer.png" alt="Project Thumbnail of Wikipedia Viewer">
      <h4>Wikipedia Viewer</h4>
      <a class='btn btn-block btn-success btn-sm' href='projects/fccWikiViewer/index.html' target='_blank'>View</a>
  </div>
  <div class='col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-1 projItem'>
      <img src="images/bookmarker.png" alt="Project Thumbnail of Bookmarker App">
      <h4>Bookmarker App</h4>
      <a class='btn btn-block btn-success btn-sm' href='projects/bookmarkerApp/index.html' target='_blank'>View</a>
  </div>
  <div class='col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-0 projItem'>
      <img src="images/calculator.png" alt="Project Thumbnail of Calculator App">
      <h4>Calculator</h4>
      <a class='btn btn-block btn-success btn-sm' href='projects/calculatorProject/index.html' target='_blank'>View</a>
  </div>
  <div class='col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-0 projItem'>
      <img src="images/tribute.png" alt="Project Thumbnail of Tribute Page">
      <h4>Simple Tribute Page</h4>
      <a class='btn btn-block btn-success btn-sm' href='projects/fccTributePage/index.html' target='_blank'>View</a>
  </div>
  <div class='col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-2 projItem'>
      <img src="images/twitchTV.png" alt="Project Thumbnail of TwitchTV Page">
      <h4>TwitchTV Users</h4>
      <a class='btn btn-block btn-success btn-sm' href='projects/fccTwitch/index.html' target='_blank'>View</a>
  </div>
  <div class='col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-1 projItem'>
      <img src="images/itemLister.png" alt="Project Thumbnail of Item Lister">
      <h4>Item Lister / To-do List</h4>
      <a class='btn btn-block btn-success btn-sm' href='projects/itemLister/index.html' target='_blank'>View</a>
  </div>

</section><!-- END OF PROJECTS SECTION -->

<!-- CONTACT FORM -->
<section class='container sectionColor' id='contact'>
  <h1 class='page-header'>Contact Me</h1>
    <div class='row'>
      <div class='col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-1'>

          <form role='form' method='post' action='#contact' novalidate>
            <div class='form-group'>
              <label for='name'>Name</label>
              <input type='text' class='form-control fieldSize1' id='name' name='name' placeholder='Your Name' required>
              
            </div>

            <div class='form-group'>
              <label for='email'>Email</label>
              <input type='email' class='form-control fieldSize1' id='email' name='email' placeholder='Your Email' required>
              
            </div>

            <div class='form-group'>
              <label for='telephone'>Telephone Number</label>
              <input type='tel' class='form-control fieldSize1' id='telephone' name='telephone' placeholder='Telephone Number'>
            </div>

            <div class='form-group'>
              <label for='company'>Company</label>
              <input type='text' class='form-control fieldSize1' id='company' name='company' placeholder='Company Name'>
            </div>

            <div class='form-group'>
              <label for='message'>Message</label>
              <textarea class='form-control fieldSize1' name='message' placeholder='Add Message'required></textarea>
              
            </div>

            <button  class='btn btn-primary' id='mailButton' name='submit' type='submit'><span class="glyphicon glyphicon-send" aria-hidden="true"></span>   Submit</button>
          </form>
        
        <?php
        
          if(isset($_POST['submit'])){
              // Declarations
              $name = $_POST['name'];
              $email = $_POST['email'];
              $telephone = $_POST['telephone'];
              $company = $_POST['company'];
              $message = $_POST['message'];

              $from = 'My Website Contact Form';
              $to = 'j.bowler2017@gmail.com';
              $subject = 'Message from Contact Form';
              $body = "From: $name\n E-Mail: $email\n Message:\n $message";

              //Validation for selected fields
              if($_POST['name'] === ''){
                  $errName = 'Please enter your name';
              }

              if($_POST['email'] === '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                  $errEmail = 'Please enter a valid email address';
              }

              if($_POST['message'] === ''){
                  $errMessage = 'Please enter a message';
              }

              // If no errors, send mail
              if(!$errName && (!$errEmail && !$errMessage)){
                  if(mail ($to, $subject, $body, $from)){
                      $result = '';
                  }else {
                      $result = '';
                  }
              }
          }
		?>

      </div>
      <div class='col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 addressSect'>
        <p>You can also contact me at:</p>
        <address>
          205 Hewell Road<br>
          Redditch<br>
          Worcestershire B97 6BB
          <br>
          <br>
          07495 833 656
          <br>
          <br>
          j.bowler2017@gmail.com
        </address>

        <ul class='list-inline'>
          <li><a href='https://github.com/jimuk07' target='_blank'><i class="fa fa-github fa-3x" aria-hidden="true"></i></a></li>
          <li><a href='https://twitter.com/JimWeb_UK' target='_blank'><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a></li>
          <li><a href='#'><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a></li>
          <li><a href='https://www.freecodecamp.org/jimuk07' target='_blank'><i class="fa fa-free-code-camp fa-3x" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div><!-- END OF ROW -->
</section><!-- END OF CONTACT SECTION -->

<footer class='container-fluid'>
  <div class='container'>
  <div class='row'>
    <div class='col-xs-12 col-sm-6 text-left'>
      <ul class='list-inline footerLeft'>

        <li><a href='#home' class='hvr-underline-from-left'>Home</a></li>
        <li><a href='#about' class='hvr-underline-from-left'>About</a></li>
        <li><a href='#projects' class='hvr-underline-from-left'>Projects</a></li>
        <li><a href='#contact' class='hvr-underline-from-left'>Contact Me</a></li>

      </ul>
    </div>
    <div class='col-xs-12 col-sm-6 text-center footerRight'>
      <small>Site designed & coded by James Bowler  &copy; 2017</small>
    </div>
  </div>
  </div>
</footer>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#accordion" ).accordion({
          collapsible: true,
          heightStyle: "content",
          active: false
        });
      } );
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


    <!-- Scroll Reveal -->
    <script>
    window.sr = ScrollReveal();
      sr.reveal('.wel-left', {
        duration: 2000,
        distance: '300px',
        origin: 'bottom'
      });
      sr.reveal('.wel-right', {
        duration: 2000,
        distance: '300px',
        origin: 'right'
      });
    </script>



  <!-- Slow screen scroll -->
  <script>
  $(document).ready(function(){
    $('a[href^="#"]').on('click',function (e) {
      e.preventDefault();

      var target = this.hash;
      var $target = $(target);

      $('html, body').stop().animate({
        'scrollTop': $target.offset().top
      }, 900, 'swing', function () {
          window.location.hash = target;
        });
      });
    });
    </script>

	
  </body>
</html>

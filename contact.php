<!doctype html>
<html class="no-js" lang="en">
<head>
<!-- meta data -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags --> 

<!--font-family-->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">

<!-- title of site -->
<title>Welcome to Andres' homepage</title>

<!-- For favicon png -->
<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

<!--font-awesome.min.css-->
<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<!--flat icon css-->
<link rel="stylesheet" href="assets/css/flaticon.css">

<!--animate.css-->
<link rel="stylesheet" href="assets/css/animate.css">

<!--owl.carousel.css-->
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<!--bootstrap.min.css-->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<!-- bootsnav -->
<link rel="stylesheet" href="assets/css/bootsnav.css" >

<!--style.css-->
<link rel="stylesheet" href="assets/css/style.css">

<!--responsive.css-->
<link rel="stylesheet" href="assets/css/responsive.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 

<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]--> 

<!-- top-area Start -->
<header class="top-area">
  <div class="header-area"> 
    <!-- Start Navigation -->
    <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">
      <div class="container"> 
        
        <!-- Start Header Navigation -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
          <a class="navbar-brand" href="index.html">Andres' Webpage</a> </div>
        <!--/.navbar-header--> 
        <!-- End Header Navigation --> 
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
          <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
            <li class=" smooth-menu active"></li>
            <li class="smooth-menu"><a href="index.html">Home</a></li>
            <li class="smooth-menu"><a href="school.html">School</a></li>
            <li class="smooth-menu"><a href="interests.html">Interests</a></li>
            <li class="smooth-menu"><a href="work.html">Work</a></li>
            <li class="smooth-menu"><a href="contact.php">Contact</a></li>
          </ul>
          <!--/.nav --> 
        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!--/.container--> 
    </nav>
    <!--/nav--> 
    <!-- End Navigation --> 
  </div>
  <!--/.header-area-->
  
  <div class="clearfix"></div>
</header>
<!-- /.top-area--> 
<!-- top-area End --> 

<!--school start --> 
<br/>
<br/>
<br/>
<br/>
<!--contact start -->
<section id="contact" class="contact">
  <div class="section-heading text-center">
    <h2>contact me</h2>
  </div>
  <div class="container">
    <div class="body-content">
      <div class="row">
        <div class="contact-content">
          <?php
          if (!isset( $_POST[ 'submit' ] ) ) {
            ?>
          <form method="post" action="" id="mainForm">
            <div id="firstNameBox" class="form-group">
              <label for="firstname">Enter first name: </label>
              <input type="text" id="firstname" name="firstname" class="form-control"/>
              <div id="feedbackFirst"></div>
            </div>
            <div id="lastNameBox" class="form-group">
              <label for="lastname">Enter last name: </label>
              <input type="text" id="lastname" name="lastname" class="form-control"/>
              <div id="feedbackLast"></div>
            </div>
            <div id="emailBox" class="form-group">
              <label for="email">Enter email: </label>
              <input type="text" id="email" name="email" class="form-control"/>
              <div id="feedbackEmail"></div>
            </div>
            <div id="phoneBox" class="form-group">
              <label for="phone">Enter phone: </label>
              <input type="number" id="phone" name="phone" class="form-control"/>
              <div id="feedbackPhone"></div>
            </div>
            <div id="usernameBox" class="form-group">
              <label for="username">Create a username: </label>
              <input type="text" id="username" name="username" class="form-control"/>
              <div id="feedbackUser"></div>
            </div>
            <div id="passwordBox" class="form-group">
              <label for="password" >Create a password: </label>
              <input type="password" id="password" name="password" class="form-control"/>
              <div id="feedbackPassword"></div>
            </div>
            <div id="commentsBox" class="form-group">
              <label for="comments">Comments: </label>
              <textarea id="comments" name="comments" class="form-control"></textarea>
              <div id="feedbackComments"></div>
            </div>
            <div class="form-group">
              <input type="submit" value="Submit" name="submit"/>
            </div>
          </form>
          <?php
          } else {
            echo '<p><b>First Name:</b> ' . $_POST[ 'firstname' ] . '</p>';
            echo '<p><b>Last Name:</b> ' . $_POST[ 'lastname' ] . '</p>';
            echo '<p><b>Email:</b> ' . $_POST[ 'email' ] . '</p>';
            echo '<p><b>Phone:</b> ' . $_POST[ 'phone' ] . '</p>';
            echo '<p><b>Username:</b> ' . $_POST[ 'username' ] . '</p>';
            echo '<p><b>Password:</b> ' . $_POST[ 'password' ] . '</p>';
            echo '<p><b>Comments:</b> ' . $_POST[ 'comments' ] . '</p>';
          }
          ?>
        </div>
        <!--/.col--> 
      </div>
      <!--/.row--> 
      <!--/form--> 
    </div>
    <!--/.contact-form--> 
  </div>
  <!--/.single-contact-box--> 
  
</section>
<!--/.contact--> 
<!--contact end --> 

<!--footer-copyright start-->
<footer id="footer-copyright" class="footer-copyright">
  <div class="container">
    <div class="hm-footer-copyright text-center">
      <p> &copy; copyright Andres Tostado </p>
      <!--/p--> 
    </div>
    <!--/.text-center--> 
  </div>
  <!--/.container-->
  
  <div id="scroll-Top">
    <div class="return-to-top"> <i class="fa fa-angle-up " id="scroll-top" ></i> </div>
  </div>
  <!--/.scroll-Top--> 
  
</footer>
<!--/.footer-copyright--> 
<!--footer-copyright end--> 

<!-- Include all js compiled plugins (below), or include individual files as needed --> 

<script src="assets/js/event-attributes.js"></script> 
<script src="assets/js/jquery.js"></script> 

<!--modernizr.min.js--> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> 

<!--bootstrap.min.js--> 
<script src="assets/js/bootstrap.min.js"></script> 

<!-- bootsnav js --> 
<script src="assets/js/bootsnav.js"></script> 

<!-- jquery.sticky.js --> 
<script src="assets/js/jquery.sticky.js"></script> 

<!-- for progress bar start--> 

<!-- progressbar js --> 
<script src="assets/js/progressbar.js"></script> 

<!-- appear js --> 
<script src="assets/js/jquery.appear.js"></script> 

<!-- for progress bar end --> 

<!--owl.carousel.js--> 
<script src="assets/js/owl.carousel.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> 

<!--Custom JS--> 
<script src="assets/js/custom.js"></script>
</body>
</html>
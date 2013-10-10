<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Santa Clara Diving Club Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/scd.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="./assets/js/html5shiv.js"></script>
      <script src="./assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Fav icons -->
    <link rel="shortcut icon" href="./assets/img/favicon.png">

  </head>
  <body>
    <div class="container">
      <!-- NavBar -->
      <nav class="navbar navbar-blue" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Santa Clara Diving Club</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-blue">
            <li><a href="index.html">Home</a></li>
            <li><a href="programs.html">Programs</a></li>
            <li><a href="registration.html">Registration</a></li>
            <li><a href="coach.html">Coaches</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schedule <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="practice.html">Practice Schedule</a></li>
                <li><a href="meet.html">Meet Schedule</a></li>
              </ul>
            </li>
            <li class="active"><a href="contact.php">Contact</a></li>
            <li><a href="dryland.html">Dryland Center</a></li>
            <li><a href="news.html">News</a></li>
            <li><a href="apparel.html">Team Apparel</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav><!--/navbar-->
      
      <!-- Content -->
      <div class="row">
        <div class="col-xs-12 jumbotron">
          <h1>Contact Us</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-5">
          <div class="jumbotron">
            <address>
              <strong>Mailing Address:</strong><br>
              P.O. Box 320443<br>
              Los Gatos, CA 95032
            </address>

            <address>
              <strong>Pool Address:</strong><br>
              George F. Haines International Swim Center<br>
              2625 Patricia Drive<br>
              Santa Clara, CA 95051<br><br>
              <strong>Phone:</strong><br>
              408 357.DIVE (3483)<br>
            </address>
          </div>
          <div class="jumbotron">
            <h3>Coach Todd</h3>
            <p>coachtodd@santaclaradiving.com</p>
            <h3>Coach Mark</h3>
            <p>coachmark@santaclaradiving.com</p>
            <h3>Coach Logan</h3>
            <p>coachlogan@santaclaradiving.com</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-sm-offset-1 jumbotron">
          <?php
            function spamcheck($field)
            {
              //filter_var() sanitizes the e-mail
              //address using FILTER_SANITIZE_EMAIL
              $field=filter_var($field, FILTER_SANITIZE_EMAIL);

              //filter_var() validates the e-mail
              //address using FILTER_VALIDATE_EMAIL
              if(filter_var($field, FILTER_VALIDATE_EMAIL))
              {
                return TRUE;
              }
              else
              {
                return FALSE;
              }
            }

              if (isset($_REQUEST['email']))
              {//if "email" is filled out, proceed

                //check if the email address is invalid
                $mailcheck = spamcheck($_REQUEST['email']);
                if ($mailcheck==FALSE)
                {
                  echo "Invalid input";
                }
                else
                {//send email
                  $name = $_REQUEST['name'];
                  $email = $_REQUEST['email'];
                  $phone = $_REQUEST['phone'];
                  $message = $_REQUEST['message'];
                  $subject = " SCD Contact Form: " . $name . " " . $phone;
                  mail("scdiving@comcast.net", "Subject: $subject",
                  $message, "From: $email" );
                  echo '<div class="alert alert-success">
                          <strong>Thanks!</strong> We will be in touch soon.
                        </div>';
                }
              }
              else
              {//if "email" is not filled out, display the form
                  echo '<form role="form" method="post" action="contact.php">
                    <div class="form-group">
                      <label for="name">Your Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Your email address</label>
                      <input type="email" class="form-control" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                      <label for="number">Your phone number</label>
                      <input type="text" class="form-control" name="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea cols="50" rows="5" name="message" placeholder="Enter your message"></textarea>
                    </div>
                    <input type="submit" class="btn btn-blue">
                  </form>';
              }
            ?>
        </div>
        </div>
      </div>
      
    </div><!--/container-->

    <!-- le JavaScript -->
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/jquery.backstretch.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $.backstretch('./assets/img/pool.jpg')
    </script>
  </body>
</html>
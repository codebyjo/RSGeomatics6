<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "shane@rsgeomatics.ca";
 
    $email_subject = "Message from Website";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['tel']) ||

        !isset($_POST['email']) ||
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required

    $tele = $_POST['tel']; // not required
 
    $email_from = $_POST['email']; // required
 
    $message = $_POST['message']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
 
  }
 
 
  if(strlen($message) < 2) {
 
    $error_message .= 'The Message you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Tel: ".clean_string($tel)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
       
       <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <title>RS Geomatics || Contact</title>
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="description" content="RS Geomatics, Cadastral Surveying">
        <meta name="keywords" content="land survey,land surveys,ontario,land surveyors,ontario land surveying,land surveyors,land surveying,property surveys,property plans,survey plans, GIS, cadastral survey, engineering, geodetic survey, mapping">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" rel='stylesheet' href="css/style.css">
        <link rel="stylesheet" href="css/flickity.css" media="screen">
        <link rel="shortcut icon" href="img/favicon.ico">
        <script src="js/bootstrap.min.js"></script>

      </head>
      <body>

        <div class="wrapper">

        <ul class="logoSection">
              <li class="left"><a href="index.html"><img src="img/RSlogo.jpg" alt="RS Geomatics Logo"></a></li>
              <li class="right"><a href="http://www.aols.org/"><img src="img/logoAOLS.jpg" alt="AOLS Logo"></a></li>
              <li class="right"><a href="contact.html">
                <br>
                Get Quote</a></li>
          </ul><!--logoSection-->

              <h3>Rajakulendhrran Shaajieeshane Surveying Ltd</h3>

            <div class="nav">


            <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                            <li><a href="index.html">Home</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Index</a></li>
                        <li><a href="staff.html">Staff</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="contact.html">Contact</a></li> 

                    </ul>
                   
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>

            </div><!--nav-->


      <div class="wrapper">

            <div class="main">

              <h2>Contact</h2>


                <section class="contact-2 light-gray-bg">
              <div class="container">
                  <div data-scroll-reveal class="row">
                      <div class="col-md-4 col-md-offset-4 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center">
                          <h4>Thank you for contacting us. We will be in touch with you very soon.</h4>
                      </div>
                  </div>
              </div>
          </section>



            <div class="footer">

            <div class="row">

              <div class="col-md-4">

                <p>Rajakulendhrran Shaajieeshane Surveying Ltd</p>
                <p>Ontario Land Surveyors</p>
                <p>Address: 41 Crittenden Square</p>
                <p>   Toronto, ON M1B 1V2</p>
              </div>
              <div class="col-md-4">
                <p><a href="tel:4167080545">Tel: 416-708-0545</a></p>
                <p>Fax: 416-321-9574</p>
                <p><a href="mailto:shane@rsgeomatics.ca" target="_blank">Email: shane@rsgeomatics.ca</a></p>
                <p><a href="http://www.rsgeomatics.ca/" target="_blank">www.rsgeomatics.ca</a></p>
              </div>
              <div class="col-md-4">
              <ul>
                <li><a href="http://www.aols.org/" target="_blank"><img src="img/logoAOLS2.jpg" alt="Association of Ontario Land Surveyors Logo"></a></li>
                <li><a href="https://www.oacett.org/" target="_blank"><img src="img/logoOACETT.jpg" alt="Ontario Association of Certified Engineering Technicians and Technologists Logo"></a></li>
                <li><a href="http://www.psc-gpc.ca/" target="_blank"><img src="img/logoPSC.jpg" alt="Professional Surveyors Canada Logo"></a></li>
                <!--<li><a href="http://www.sssi.org.au/" target="_blank"><img src="img/LogoSSSiNSW.jpg" alt="NSW Surveying & Spatial Sciences Institute Logo">
                <li><a href="http://www.surveyors.org.au/" target="_blank"><img src="img/logoISNSW.jpg" alt="Institution of Surveyors NSW Inc Logo">-->
                
              </ul>
              </div>
            </div><!--row-->

            </div><!--footerText-->
            </div><!--footer-->

              <p class="text-center">Copyright 2015 RS Geomatics || Website design: <a href="http://www.codebyjo.com">Codebyjo</a></p>
            </div>



        </div><!--wrapper-->



          <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>


        <!--Google Analytics -->

        <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-69805180-1', 'auto');
              ga('send', 'pageview');

        </script>




      </body>
      </html>
       

 
 
<?php
 
}
 
?>

<?php
$events=0;
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
   <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src="js/script.js"></script>

      <title>Just Another Site.</title>
      <meta name="description" content="an example for a one page site for an online company">
   </head>
   <body data-spy="scroll">
      <header class="navbar-fixed-top">
         <nav class="navbar navbar-inverse" data-spy="affix" date-offset="100" role="navigation">
            <div class="container-fluid">
               <div class="skip-button"><a href="#aboutus" title="skip to content">skip to content</a></div>
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a href="#top" class="navbar-brand logo">
                     <img src="images/logo.png" alt="our logo"/>
                     <h1 class="header-title">the company name </h1>
                  </a>
               </div>

                  <ul class="nav navbar-nav navbar-right">
                     <li><a href="#aboutus" title="about our company">About Us</a></li>
                     <li><a href="#team" title="our team">Team</a></li>
                     <li><a href="#gallery" title="some of our latest work">Gallery</a></li>
                     <li><a href="#testimonial" title="what pepole say about us">testimonial</a></li>
                     <li><a href="#contactus" title="contact our company">Contact Us</a></li>
                     <li><a href="events.php"><button>The event calender</button></a> </li>
                  </ul>


<!-- /.only on events.php -->
<?php
if ($events === 1) { ?>
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                     <li><a href="index.php" title="homePage">Back to home</a></li>
                   </ul>
               </div> <?php } ?>
               <!-- /.navbar-collapse -->
         </nav>
       </header>

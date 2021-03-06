<?php
ini_set('display_errors', '0');
$events = 1;
include 'header.php';

$message= '';
$db = new MySQLi('localhost', 'nina', 'nina', 'project2');
if($db->connect_error){
  $message = $db->connect_error;
} else {
    $sql= 'SELECT * FROM user_details';
    $result = $db->query($sql);
    if($db->error){
      $message = $db->error;
    }
}

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
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                     <li><a href="index.php" title="homePage">Back to home</a></li>
                                               </ul>
               </div>
               <!-- /.navbar-collapse -->
         </nav>
       </header>
       <body>
         <div class="events">
           <h2 class="text-center">Upcoming events</h2>
<div class="col-lg-12 col-sm-12 text-center">
  <div class="col-lg-4 text-center" id="clock">
    <div id="current-time"> </div>
  </div>
    <div class="col-lg-4" id="calender">
  </div>

  <ul class="col-lg-4 text">
      <li>22/9/2016</li>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <li>5/11/2016</li>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <li>27/12/2016</li>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <li>2/3/2017</li>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</ul>
</div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
<script src="js/classie.js"></script>
<script src="js/script.js"></script>
<script src="js/clock.js"></script>
</body>
</html>
<?php
include 'footer.php';
?>

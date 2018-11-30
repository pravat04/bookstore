<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">online Bookstore</a>
        </div>


        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <!-- link to publiser_list.php -->
              <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publisher</a></li>
              <!-- link to books.php -->
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-book"></span>&nbsp; Books catagories</a>
                <ul class="dropdown-menu">
                  <li><a href="books.php">All</a></li>
                  <li><a href="#">Page 1</a></li>
                  <li><a href="#">Page 1-3</a></li>
                </ul>
                </li>
              <!-- link to contacts.php -->
              
              <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li>
              
               <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-align-justify"></span>&nbsp; More</a>
                <ul class="dropdown-menu">
             
                   <li><a href="contact.php"><span class="glyphicon glyphicon-earphone"></span>&nbsp; Contact us</a></li>
                   <li><a href="aboutus.php"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp; About Us</a></li>
                </ul>
                </li>
           
                </li>
            </ul>
        </div>

      </div>

    </nav>

    <?php
      if(isset($title) && $title == "Index") {
    ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">

        <h1>Welcome to online S.B.N.D bookstore</h1>
        <p class="lead">we provide home to home deebvery</p>
        <p>worlds no.1 site to buy book</p>
      </div>

    </div>
    
<?php } ?>

    <div class="container" >
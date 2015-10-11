<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Marco Gutierrez">

    <link rel="icon" href="../../favicon.ico">

    <title>Got It!</title>
  
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-static-top.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <!-- link to stylesheet -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="scripts.js"></script>
  </head>
  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

          </button>
          <a class="navbar-brand" href="#">Got It Project!</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">         
            <li style="color:blue"><a href="../navbar-fixed-top/">Sign In</a></li>
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<!-- displays the map  -->
<div id="map"></div>

<!-- refresh button for the map -->
<!-- <button class="refresh_button" type="submit" href="#"> Refresh me! </button> -->

<div class="Intro col-xs-12">
<h3 > Welcome to the Got It Application. If you are new here, create a profile down below.</h3>
</div>

<!-- Lost and Found buttons -->

<div class="Lost buttons col-xs-12">
  <p><a href="#" onclick="showCreateAcc()">  <span class="glyphicon glyphicon-remove icons"></span></a></p>

</div>
<div class="Lost-Text"><p>Lost?</p></div>

<div class="Found buttons col-xs-12">
  <p></span> <span class="glyphicon glyphicon-ok icons"></span></p>
  </div>
  <div class="Found-Text"><p>Found?</p></div>

<!-- Create an account info -->
<!-- TODO: possible add assistance text -->
    <div class="create" Id="create_account">
        <h2>Create an Account</h2>
        <input type="text" placeholder="First Name">  <input type="text" placeholder="Last Name"> 
            <br><br>
        <input type"text" placeholder="Email"> 
            <br><br>
        <form name="myform" action="http://www.mydomain.com/myformhandler.cgi" method="POST">
            <input type="password" size="20" placeholder="Password">
        <form name="myform" action="http://www.mydomain.com/myformhandler.cgi" method="POST">
            <input type="password" size="20" placeholder="Re-enter Password">
            <br><br>
            </div>
        </form>

        <div class="create-button"> <p>Create!</p></div>
    </div>



<div class="Hold"> </div>

    <!-- initialize map and geolocation -->
    <script src="mapInit.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABYojY580lcNwnuJt9_GgOcJPqZysiPTI&callback=initMap"
        async defer>
    </script>
  </body>
</html>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--/* WE NEED THIS! */ -->
<script>
$(document).ready(function(){
  
    $(".Sign-In").click(function(){
        $(".Expendable").fadeOut();
        $(".Boxes").fadeIn();
        $(".Boxes-Lost").attr('checked',false);
        $(".Boxes-Found").attr('checked',false);
         $(".Sign-In").css("backgroundColor", "black"); 
         $(".Creation").css("backgroundColor", ""); 
    });

    $(".Creation").click(function(){
          $(".Expendable").fadeIn();
          $(".Boxes").fadeOut();
          $(".Boxes-Lost").attr('checked',false);
          $(".Boxes-Found").attr('checked',false); 
            $(".Creation").css("backgroundColor", "black"); 
                $(".Sign-In").css("backgroundColor", ""); 
          $(".create-button3").fadeIn();
     });

    $(".Lost").click(function(){
        $(".Expendable").fadeOut();
        $(".Boxes").fadeIn();
        $(".Boxes-Lost").prop('checked',true);
        $(".Boxes-Found").prop('checked',false);
          $(".Sign-In").css("backgroundColor", "black"); 
          $(".Creation").css("backgroundColor", "");
          $(".create-button").fadeIn();
          $(".create-button3").fadeOut();
    });

    $(".Found").click(function(){
      $(".Expendable").fadeOut();
      $(".Boxes").fadeIn();
        $(".Boxes-Lost").prop('checked',false);
        $(".Boxes-Found").prop('checked',true);
          $(".Sign-In").css("backgroundColor", "black"); 
          $(".Creation").css("backgroundColor", "");

          $(".create-button2").fadeIn();
          $(".create-button3").fadeOut();
    });




      $("#myform :input").tooltip({
 
      // place tooltip on the right edge
      position: "center right",
 
      // a little tweaking of the position
      offset: [-2, 10],
 
      // use the built-in fadeIn/fadeOut effect
      effect: "fade",
 
      // custom opacity setting
      opacity: 0.7
 
      });

});
</script>

<!--STOP HERE -->



    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      <link rel="stylesheet" type="text/css" href="style.css">
  </head>


<!-- End of Marks Goodness -->


  <body>

    <!-- Static navbar 
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

          </button>
          <a class="navbar-brand" href="#">Got It Project!</a>
        </div> <div class="Sign-In">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">         
            <li><a href="../navbar-fixed-top/">Sign In</a></li>
          
          </ul>
        </div>
      </div>
      </div>
    </nav>
end of navbar -->

<div class="navigation">
  <div class="line">
  </div>
<h2 class = "col-xs-6 Project" style="color:white; text-align:center"> FndIt! Lost and Found Web App</h2>



<div class="line2">
  </div>

</div>

<script type="text/javascript" src="moxtraInitChat.js"></script>


<div class="Intro col-xs-12 ">
<h3 > Welcome to the Got It Application. If you are new here, create a profile down below.</h3>
</div>

<div class="Lost buttons col-xs-12">
  <a href="#"></a><p> <span class="glyphicon glyphicon-remove icons"></span></p></a>
</div>
<div class="Lost-Text"><p>Lost?</p></div>

<div class="Found buttons col-xs-12">
  <p></span> <span class="glyphicon glyphicon-ok icons"></span></p>
  </div>
  <div class="Found-Text"><p>Found?</p></div>
<div id="Log-System">
<div class="create">


<a href="#"><h2 class="choices"><span class="Creation" style ="color:white">Create Account  </a>   <a href="#"> </span><span class="choices Sign-In">&nbsp;&nbsp;Sign In &nbsp;&nbsp;    </span></h2></a>

<div class ="Expendable">
<input type="text" placeholder="First Name">  <input type="text" placeholder="Last Name"> 
</div>

<br> <br>
<input type"text" placeholder="Email"> 
<br><br>
<form name="myform" action="http://www.mydomain.com/myformhandler.cgi" method="POST">
<input type="password" size="20" placeholder="Password">

<!--Take the stuff between here -->

<div class="Boxes">
<input class = "Boxes-Lost" type="checkbox" name="Lost" value="Lost"> Lost Something?
<input class ="Boxes-Found" type="checkbox" name="Found" value="Found"> Found Something?
</div>


<!-- End Copying here -->
<div class ="Expendable">
<form name="myform" action="http://www.mydomain.com/myformhandler.cgi" method="POST">
<input type="password" size="20" placeholder="Re-enter Password">
</div>

<br><br>
</div>
</form>
</div>
</div>
</div>
<!-- We changed everything below this before the Hold class -->
<a href="Lost.html"><div class="create-button">   
   Submit</a>
</div>

<div class="create-button2">   
  <a href="Found.html">Submit</a>
</div>

<div class="create-button3">   
  <a href="#">Submit </a>
</div>

<!-- Above this :D -->

<div class="Hold"> </div>

<!-- displays the map  -->
<div id="map"></div>

<div id="chat"></div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- initialize map and geolocation -->
    <script src="mapInit.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABYojY580lcNwnuJt9_GgOcJPqZysiPTI&callback=initMap"
        async defer>
    </script>
    <script type="text/javascript" src="https://www.moxtra.com/api/js/moxtra-latest.js" id="moxtrajs" />
    <script type="text/javascript" src="moxtraInit.js"> </script>
  </body>
</html>

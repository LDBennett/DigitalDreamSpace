<!DOCTYPE html>
<!--
**This project was created to display the dreams of others. Ever wonder
*what other people are dreaming about? This is the place to creatively look
*at what dreams are out there. It gives you six stories from hundreads to unfold
*and read.
**It uses various JS files and pulls from Reddit for the dream content.
-->
<html>
  <head><?php
  $title = "Digital Dream Space | Project by Lee Bennett";
  include 'src/_head_meta.php';
  ?>
  </head>

  <body class='zoomViewport'>
    <div id='dreams' class='container'>
      <?php 
      require_once 'lib/Mobile_Detect.php';
      $detect = new Mobile_Detect;
      ?>
      <h2 class='text-center hidden'>The trick is to combine your waking rational abilities with the infinite possibilities of your dreams...</h2>
      <img id='loader' class='center-block hidden'src='img/spiral.gif' alt='loading gif'/>
    </div>
  <!-- JavaScript Files-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!--Boostrap JS-->
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <!--Zoom-->
  <?php
    if(!$detect->isMobile()){
      echo "<script src='js/jquery.zoomooz.min.js' type='text/javascript'></script>";
    }
  ?>
  <!--Textillate-->
  <script src="js/jquery.textillate.js" type="text/javascript"></script>
  <script src="js/jquery.lettering.js" type="text/javascript"></script>
  <script src="js/jquery.easing.js" type="text/javascript"></script>
  <script>
  $(function(){
    $('#dreams h2').removeClass('hidden').textillate({ in: { effect: 'bounceIn'},callback: function(){$('#loader').removeClass('hidden');}});
    setTimeout(function () {  
      $('#dreams').load("dream_main.php");
    },5000);
  });
  </script>
  <?php include_once("src/analyticstracking.php");?>
  </body>
</html>

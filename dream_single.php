<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <?php 
    $title = filter_input(INPUT_POST,'title');
    include 'src/_head_meta.php';
    $body = filter_input(INPUT_POST,'dreamBody');
    $pBody = substr($body, 0,800);
    $addOn = substr($body,800,strlen($body));
    ?>
  </head>
  <body>
    <div class='container'>
      <div class='row'>
        <a href="#" onclick="close_window();return false;"><h3 class='text-center'>X</h3></a>
      </div>
      <div class='row'>
        <div class='col-md-8 col-md-offset-2'>
          <h2><?php echo $title;?></h2>
          <p id='start'><?php echo $pBody; ?><span id='addOn'><?php echo $addOn;?></p>
        </div>
      </div>
      <div class='row'>
        <a href="#" onclick="close_window();return false;"><h3 class='text-center'>X</h3></a>
      </div>
    </div>
    
    <!-- JavaScript Files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--Boostrap JS-->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!--Textillate-->
    <script src="js/jquery.textillate.js" type="text/javascript"></script>
    <script src="js/jquery.lettering.js" type="text/javascript"></script>
    <script src="js/jquery.easing.js" type="text/javascript"></script>
    <script>
      $("html, body").animate({ scrollTop: $('#addOn').offset().top - 200 }, 1000);
      $('#addOn').textillate({ in: { effect: 'bounceIn'},type: 'word'});
      function close_window() {
          close();
      }
    </script>
    
  </body>
</html>

<?php
  require_once 'lib/Dreams.php';
  //require_once 'lib/lucidDreams.php';
  require_once 'lib/Mobile_Detect.php';

  $detect = new Mobile_Detect;
  $dreamData = new Dreams();
  //$lucidDreamData = new lucidDreams();
  $dreamData ->fetchData();
  //$lucidDreamData ->fetchData();

  $mobile = (bool)TRUE;

?>
<div id='main'>
  <div class='header'>
    <div class='container-fluid'>
      <div id='about' class='col-xs-12 text-center'>
        <a href='about.php' target='_blank'><h3>About Digital Dream Space</h3></a>
      </div>
    </div>
  </div>

  <div class='container-fluid'>
    <?php $dreamData->displayToSite();?>
    <div class='row text-center'>
      <a href="#" onclick="window.location.reload();return false;"><h3>Give Me New Dreams!</h3></a>
      <?php
      if( $detect->isiOS() ){
        echo "<h3>**If using an In-App browser (like Facebook), click on the ... for expanded dreams will not work. Please open the link in Chrome, Safari, etc.</h3>";
      }
      ?>
    </div>
  </div>
</div>
<?php
if(!$detect->isMobile()){
  $mobile = (bool)FALSE;
}
?>
<script src="js/main.js" type="text/javascript"></script>
<script>
/* 
 * This functions is responsible for the explosive text and zoom (when on a desktop
 * computer) when a title is clicked on. It basically makes the title into
 * individual spans and slowly moves each letter outward at a set position.
 * It also removes the title and has the words of the body "Textillate". At the
 * end, it has an optional "link" if the body is over 1000 chars.
 */

function explodeText(o) {
  var mobile = '<?php echo $mobile ?>';
  $o = $(o);
  $element = $o.parent();
  if (!mobile){
    $element.zoomTarget();
    $element.find('p').addClass('shake shake-constant shake-constant--hover');
  }
  else{
  $("html, body").animate({ scrollTop: $element.offset().top - 200 }, 1000);    
  }
  $o.html($o.text().replace(/([\S])/g, "<span>$1</span>"));
  $o.css("position", "relative");
  $("span", $o).each(function(i) {
    var newTop = Math.floor(Math.random()*500)*((i%2)?1:-1);
    var newLeft = Math.floor(Math.random()*500)*((i%2)?1:-1);

    $(this).css({position: "relative",
      opacity: 1,
      fontSize: 12,
      top: 0,
      left: 0
    }).animate({
      opacity: 0,
      fontSize: 84,
      top: newTop,
      left:newLeft
    },800);
  });
  setTimeout(function () {
    $element.find('h3').remove();
    $element.find('p').removeClass('transparent-text').textillate({ in: { effect: 'bounceIn'},type: 'word',callback: function(){$element.find('input').removeClass('hidden');} });
  }, 900); 
}
</script>
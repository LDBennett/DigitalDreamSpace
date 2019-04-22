/* 
 * This functions is responsible for the explosive text and zoom (when on a desktop
 * computer) when a title is clicked on. It basically makes the title into
 * individual spans and slowly moves each letter outward at a set position.
 */


  function explodeText(o) {
    var mobile = '<?php echo $mobile ?>';
    $o = $(o);
    $element = $o.parent();
    if (!mobile){
      $element.zoomTarget();
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
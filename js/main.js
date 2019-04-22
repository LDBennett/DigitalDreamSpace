/* 
 * This function loads the main dream page. It "textillates" the titles and
 * displays them at random angles to the user.
 */


$(function(){
  //too many containers w/in containers
  $('#dreams').removeClass('container');
  //mains the main class visible
  $('#main').css('display','block');
  //"Textillates" the titles in the dream containers
  $('.dream-container h3').textillate({ in: { effect: 'bounceIn',shuffle: 'true'}});

//Makes the titles at random angles
  $('.dream-container h3').each(function() {
      var a = Math.random() * 10;
      var plusOrMinus = Math.random() < 0.5 ? -1 : 1;
      $(this).css('transform', 'rotate(' + a*plusOrMinus + 'deg)');
  });
});
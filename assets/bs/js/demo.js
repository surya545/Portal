// *
//  * Particleground demo
//  * @author Jonathan Nicol - @mrjnicol
//  */

// document.addEventListener('DOMContentLoaded', function () {
//   particleground(document.getElementById('particles'), {
//     dotColor: '#5cbdaa',
//     lineColor: '#5cbdaa'
//   });

//   var intro = document.getElementById('intro');
//   intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
// }, false);




$(document).ready(function() {
  $('#particles').particleground({
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  $('.pg-canvas').css("position","fixed");
  $('.intro').css({
    'margin-top': -($('.intro').height() / 2)
  });
});

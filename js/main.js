// Site specific js code
(function(){
  'use strict';
  // Put your javascripty goodness here as well as jquery
  $('.blurb span, .bike-text span').click(function(){
      $(this).html(function(i,old){
          return old=='&gt;&gt;MORE' ?  '<i class="sign">></i>LESS' : '&gt;&gt;MORE';
      });
  });
  // keep height of 'blurb' div same as adjacent images
  $('.blurb span').click(function() {
    var picHeight = $('.pic img')[0].height;
    document.getElementsByClassName('blurb')[0].style.maxHeight = picHeight + 'px';
    document.getElementsByClassName('blurb')[0].style.overflowY = 'scroll';
  });
  // choose a random YouTube video for the video square
  var vidList = ['X19ovl-PiYk','kfV2hxl0iI8','ScPIwWyM-cs','euLwtcYDZ58','xNnQlPUhVRc','qbLkDdttQs0'];
  var vidTitle = ['fitting', 'why made to measure', 'why a steel bike', 'why do I get sore knees', 'why does my saddle hurt', 'why do I get numb hands'];
  var youTubeURL = "https://www.youtube.com/embed/";
  var randomNumber = Math.floor(Math.random() * vidList.length);
  $('iframe')[0].src = youTubeURL + vidList[randomNumber];
  $('.session-date p').eq(0).text(vidTitle[randomNumber]);

}());

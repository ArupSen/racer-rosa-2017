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
  var videos = [
  {id:'X19ovl-PiYk', title:'fitting'},
  {id:'kfV2hxl0iI8', title:'why made to measure?'},
  {id:'ScPIwWyM-cs', title:'why a steel bike?'},
  {id:'euLwtcYDZ58', title:'why do I get sore knees?'},
  {id:'xNnQlPUhVRc', title:'why does my saddle hurt?'},
  {id:'qbLkDdttQs0', title:'why do I get numb hands?'}
  ];
  var youTubeURL = "https://www.youtube.com/embed/";
  var randomNumber = Math.floor(Math.random() * videos.length);
  $('iframe')[0].src = youTubeURL + videos[randomNumber].id;
  $('.session-date p').eq(0).text(videos[randomNumber].title);

}());

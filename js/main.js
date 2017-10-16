// Site specific js code
(function(){
  'use strict';
  // Put your javascripty goodness here as well as jquery
  $('.blurb span, .bike-text span').click(function(){
      $(this).html(function(i,old){
          return old=='&gt;&gt;MORE' ?  '<i class="sign">></i>LESS' : '&gt;&gt;MORE';
      });
  });

}());

// Site specific js code
(function(){
  'use strict';
  // Put your javascripty goodness here as well as jquery
  $('.blurb span').click(function(){
      $(this).text(function(i,old){
          return old=='>>MORE' ?  '>>LESS' : '>>MORE';
      });
  });

}());

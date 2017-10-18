<?php
// -- index.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 col-xs-12">
      <?php
      img_tag('example_pic.jpg');
      ?>
    </div>
    <div class="col-md-3 col-xs-12">
        <div class="embed-responsive embed-responsive-4by3">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2479.062632074149!2d-0.021474084227150404!3d51.58541547964804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761de9179afafb%3A0x56c906f171192d91!2sRacer+Rosa+Artisan+Cycles!5e0!3m2!1sen!2suk!4v1508327009196" width="480" height="480" frameborder="0" style="border:0" allowfullscreen="" class="embed-responsive-item"></iframe>
        </div>
    </div>
    <div class="col-md-3 col-xs-12">
      <div class="row">
        <div class="col-md-6">
          <ul class="social">
            <li><a href="http://www.facebook.com/pages/London-United-Kingdom/Racer-Rosa-Bicycles/127049790670084" target="_blank" title=""><i class="fa fa-facebook-square" aria-hidden="true"></i>facebook</a></li>
            <li><a href="http://twitter.com/RacerRosa" target="_blank" title=""><i class="fa fa-twitter" aria-hidden="true"></i>twitter</a></li>
            <li><a href="https://www.instagram.com/racerrosabicycles/" target="_blank" title=""><i class="fa fa-instagram" aria-hidden="true"></i>instagram</a></li>
          </ul>
        </div>
        <div class="col-md-6 news">
         <p>
          news:<br>
          new showroom<br>
          in london<br>
          >> more
         </p>
        </div>
        <div class="col-md-6 cycle-to-work">
          <p>we're part of the cycle to work scheme</p>
          <?php
          img_tag('cycle_to_work.jpg');
          ?>
          <p>>> more</p>
        </div>
        <div class="col-md-6 campagnolo">
          <p>officially recognised</p>
          <?php
          img_tag('campagnolo.jpg');
          ?>
          <p>pro-shop</p>
          <p>>> more</p>
        </div>
      </div>
    </div>
<div class="col-md-3 col-xs-12 session-date">
  <p>why do i get sore knees</p>
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/euLwtcYDZ58"  allowfullscreen></iframe>
</div>
<p>bio mechanic bike fitting <br> next sessions: 7 oct 2017 <br> >> more</p>
</div>
  </div><!-- end .row -->
</div><!-- end .container-fluid -->
<?php footer(); ?>

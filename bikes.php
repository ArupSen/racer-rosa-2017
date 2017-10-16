<?php
// ***** bikes.php ******

// this file is purely for generating the actual 'page' files
// copy and paste all the code listed here and add unique content
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-7 col-lg-offset-1">
      <?php img_tag('bikes2.jpg'); ?>
    </div>
    <div class="col-lg-4 bike-text">
      <h3>JON</h3>
    <p>Our bikes are designed and built on demand. The <br>
    frames are hand crafted by our master frame builders in <br>
    Steel, Aluminium, Carbon Fibre and Titanium.<br>
    <span data-toggle="collapse" data-target="#collapse1">&gt;&gt;MORE</span></p>
    </div>
  </div>
  <div class="row collapse bike-details" id="collapse1">
    <div class="col-lg-7 col-lg-offset-1">
      <table class="table table-striped text-uppercase table-condensed">
      <tr><td>frame</td><td>steel columbus</td></tr>
      <tr><td>fork</td><td>full carbon</td></tr>
      <tr><td>groupset</td><td>campagnolo record</td></tr>
      <tr><td>finish kit</td><td>deda zero 100</td></tr>
      <tr><td>wheels</td><td>handmade, campagnolo hubs/sapim spokes/ambrosio rims</td></tr>
      <tr><td>saddle</td><td>selle italia slr flow</td></tr>
      <tr><td>tyres</td><td>vittoria corsa g+</td></tr>
      </table>
    </div>
    <div class="col-lg-4">
    <p>Our bikes are designed and built on demand. The <br>
    frames are hand crafted by our master frame builders in <br>
    Steel, Aluminium, Carbon Fibre and Titanium.<br>
    </p>
    <p>Our bikes are designed and built on demand. The <br>
    frames are hand crafted by our master frame builders in <br>
    Steel, Aluminium, Carbon Fibre and Titanium.<br>
    </p>
    </div>
<div class="row">
  <div class="col-lg-7 col-lg-offset-1">
    <?php img_tag('bikes3.jpg'); ?>
  </div>
  <div class="col-lg-4">
    <?php img_tag('bikes4.jpg'); ?>
  </div>
</div>
  </div>
</div>


<?php footer(); ?>

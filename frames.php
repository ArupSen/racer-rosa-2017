<?php
// ***** frames.php ******

// this file is purely for generating the actual 'page' files
// copy and paste all the code listed here and add unique content
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-12 pic">
      <?php
      img_tag('example_pic.jpg');
      ?>
    </div>
    <div class="col-lg-3 visible-lg col-sm-12 pic">
      <?php
      img_tag('rr_shop.jpg');
      ?>
    </div>
    <div class="clearfix visible-sm-block"></div>
    <div class="col-lg-5 col-md-6 col-sm-8 blurb">
      <h3>MINIMAL AND STYLISH</h3>
      <p>
        Our bikes are designed and built on demand. The frames are hand crafted by
        master frame builders in Steel, Aluminium, Carbon Fibre and Titanium. <span data-toggle="collapse" data-target="#collapse1">&gt;&gt;MORE</span>
        <div class="collapse" id="collapse1">We finish our bikes with top quality parts to meet detailed personal specifications.</div>
      </p>
      <h3>THE SERVICE</h3>
      <p>
        Yes, our bikes are beautiful, but the most beautiful thing about them is the way
        they ride. We move riders onto a different league. Our made to <span data-toggle="collapse" data-target="#collapse2">&gt;&gt;MORE</span>
        <div class="collapse" id="collapse2">measure bike projects are designed by a professional bio-mechanic, so they ride perfectly.More comfort and pleasure while riding means more mileage and better fitness over the years; no injuries, no niggles and best possible performances. We check the progress of our clients with follow-up sessions, advice and assistance.</div>
      </p>
      <h3>HERITAGE AND EXPERTISE</h3>
      <p>
        Experience is a key factor in frame building. We work with the best Italian artisans
        who have several generations' experience of building <span data-toggle="collapse" data-target="#collapse3">&gt;&gt;MORE</span>
        <div class="collapse" id="collapse3">performance frames at competitive level. We can design any geometry to meet any need and purpose.</div>
      </p>
      <h3>MADE TO LAST</h3>
      <p>
        It’s a long term investment. Each bike we design is a completely unique, bespoke
        project, designed and built to be the companion of a lifetime. <span>&gt;&gt;MORE</span>
      </p>
    </div>
  </div> <!-- end of .row -->
</div> <!-- end of .container-fluid -->
<?php footer(); ?>

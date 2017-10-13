<?php
// ***** fitting.php ******

// this file is purely for generating the actual 'page' files
// copy and paste all the code listed here and add unique content
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-12">
      <?php
      img_tag('example_pic.jpg');
      ?>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
      <?php
      img_tag('rr_shop.jpg');
      ?>
    </div>
    <div class="clearfix visible-sm-block"></div>
    <div class="col-lg-5 col-md-6 col-sm-8 blurb">
      <h3>WHAT IS A BIKE FITTING?</h3>
      <p>
Professional Bike Fitting is a specialised science that determines the dynamic relation between a rider's body measurements,
        <span data-toggle="collapse" data-target="#collapse1">&gt;&gt;MORE</span>
        <div class="collapse" id="collapse1">bicycle size, riding position and specifications. Our independent bike fitter, or bio-mechanic, Giuseppe Giannecchini of Velosolutions has many years' experience fitting professional, junior and amateur riders.</div>
      </p>
      <h3>WHO CAN BENEFIT FROM A FITTING SESSION?</h3>
      <p>
        You don't need to be a pro... it makes sense for anyone who spends many hours on a bike, either commuting to work or weekend leisure rides, touring and sportives.<span data-toggle="collapse" data-target="#collapse2">&gt;&gt;MORE</span>
        <div class="collapse" id="collapse2">No one should tolerate any stiffness or pain, riding should be a pleasure at all levels; even the most common niggles are a sign that something is wrong.<br><br>
If you are thinking of buying a new bike, either off-the-peg or made to measure, a bike fitting session is the way forward. Giuseppe is not brand-led and he will design the perfect geometry and riding position for you, on any bike, from any shop.<br><br>
You can also benefit if you already have a bike and want to refine your set-up. Stem length, handlebars, saddle height and set-back, cleats position, etc. are just some of the adjustments that can be made to optimise your position and comfort.</div>
      </p>
      <h3>PRICES / OUR METHOD:</h3>
      <p>
        We offer the very best professional service and a fantastic price of &pound;199. Included in our fitting is also a FOLLOW-UP SESSION (very important),<span data-toggle="collapse" data-target="#collapse3">&gt;&gt;MORE</span>
        <div class="collapse" id="collapse3">generally after 1,200 miles (2,000Km), to check and fine-tune the position further, after the body has gone through the 'adaptation period'. We've run a monthly fitting clinic in the UK for 9 years and fitted over 15,000 riders. We're so confident in our service that we offer a full money back guarantee if you are not happy with your fit... (it's never yet happened).</div>
      </p>
    </div>
  </div> <!-- end of .row -->
</div> <!-- end of .container-fluid -->


<?php footer(); ?>

<?php
// ***** contact.php ******

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
    <div class="col-lg-3 col-md-6 col-sm-12 pic">
        <div class="embed-responsive embed-responsive-4by3">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2479.062632074149!2d-0.021474084227150404!3d51.58541547964804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761de9179afafb%3A0x56c906f171192d91!2sRacer+Rosa+Artisan+Cycles!5e0!3m2!1sen!2suk!4v1508327009196" width="480" height="480" frameborder="0" style="border:0" allowfullscreen="" class="embed-responsive-item"></iframe>
        </div>
    </div>
    <div class="clearfix visible-sm-block"></div>
    <div class="col-lg-5 col-md-6 col-sm-8 blurb">
<?php
include_once(INCPATH.'dd-formmailer.php');
?>
    </div>
  </div> <!-- end of .row -->
</div> <!-- end of .container-fluid -->



<?php footer(); ?>

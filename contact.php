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
<?php
include_once(INCPATH.'dd-formmailer.php');
?>
    </div>
  </div> <!-- end of .row -->
</div> <!-- end of .container-fluid -->



<?php footer(); ?>

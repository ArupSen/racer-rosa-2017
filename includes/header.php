<?php
// included header file which also inserts meta tags
// the functions and constants files are also required
require_once INCPATH.'constants.php';
require_once INCPATH.'functions.php';

$filename = basename($_SERVER['SCRIPT_FILENAME'],".php");
include_once DATAPATH.'meta_tags.php';
// A lot of the following is from the html5 boiler plate project with some adaptations
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Racer Rosa Bicycles - <?php echo ${$filename}['title']; ?></title>
<meta name="description" content="<?php echo ${$filename}['description']; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
// Google web fonts Lato, Lobster and Oswald regular
// Fontawesome and Bootstrap via bootstrapcdn which should leverage browser caching
?>
<link href='http://fonts.googleapis.com/css?family=Lato|Lobster|Oswald:400,700' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo CSSPATH.'style.css'; ?>" type="text/css" media="screen" />
<link rel="shortcut icon" href="<?php echo IMGPATH.'favicon.ico'; ?>" type="image/x-icon" />

</head>
<body id="<?php echo strtolower($filename); ?>">
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div id="wrap" class="container">
<header>
  <h1>racer rosa</h1>
  <h2>hand crafted /// made to measure /// custom built</h2>
</header>

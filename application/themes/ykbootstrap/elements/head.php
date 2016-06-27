<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php  Loader::element('header_required'); ?>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    

    <!-- Bootstrap core CSS -->
     <link href="<?php echo $view->getThemePath() ?>/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo $view->getThemePath() ?>/css/starter-template.css" rel="stylesheet">
   

    <!-- Custom styles for this template -->
    
   

    
  </head>

  <body>
    <div class="<?php echo $c->getPageWrapperClass(); if ($c->isEditMode()) echo ' edit-mode' ?>">
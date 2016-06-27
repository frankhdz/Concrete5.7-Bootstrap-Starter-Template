<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
	<div class="container">

      <?php
        $a = new Area('Main');
        $a->setAreaGridMaximumColumns(12);
        $a->display($c);
      ?>

    </div><!-- /.container -->
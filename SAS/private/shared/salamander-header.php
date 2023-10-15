<?php
  if(!isset($pageTitle)) {  
    $pageTitle = 'Salamanders: Appalachian Southern Salamanders (A.S.S.)' ?>
  }
?>

<!doctype html>

<html lang="en">
  <head>
  </head>
  
 
  <title>ASS - <?php echo h($pageTitle); ?></title>
  <meta charset="utf-8">
  <meta name="description" content="It's pronounced A - S - S ! Not the other word.">
  <meta name="keywords" content="Salamanders, Appalachia, Southern, Appalachian">
  <meta name="author" content="April Cyr">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <meta http-equiv="content-type" content="text/html">
  <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/salamanders.css'); ?>" />
  </head>

  <body>
    <header>
      <h1><a href="<?= url_for('/'); ?>">Southern Appalachian Salamanders (SAS)</a></h1>
    </header>
    <navigation>
      <ul>
      <li><a href="<?= url_for('salamanders/'); ?>">Salamanders</a></li>
      <li><a href="<?= url_for('salamanders/'); ?>">Salamanders</a></li>
      </ul>
    </navigation>

  </body>
</html>

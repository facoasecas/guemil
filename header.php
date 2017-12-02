<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Test | Guemil Project</title>
<meta name="robots" content="noindex">
<link rel="icon" type="image/png" href="http://www.guemil.info/wp-content/themes/guemil/images/favicon.png" />
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans:300,400,700" >
<link href='http://www.guemil.info/wp-content/themes/guemil-17/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link href='http://www.guemil.info/wp-content/themes/guemil-17/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<link href='http://www.guemil.info/wp-content/themes/guemil-17/style.css' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-12">
<header>
<div class="encabezado clearfix">
  <div class="inner">
    <h1 class="encabezado-brand"><a href="http://www.guemil.info/">Guemil Project</a></h1>
    <nav>
    <ul class="nav encabezado-nav">
      <li><a href="http://www.guemil.info/about-guemil/">About Guemil</a></li>
      <li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="index.php">Testing Guemil</a></li>
      <li<?php if((basename($_SERVER['PHP_SELF']))=='pdf.php'){?> class="active" <?php };?>><a href="pdf.php">Take the test</a></li>
    </ul>
    </nav>
  </div><!--inner-->
</div><!--col-->
</header>
</div>

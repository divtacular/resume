<?php require_once 'inc/project-info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resume of David Smythe</title>

  <link href='/CV/css/screen.css' rel='stylesheet' type='text/css' media="screen">
  <link href='/CV/css/print.css' rel='stylesheet' type='text/css' media="print">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab' rel='stylesheet' type='text/css'>

</head>


<body class="portfolio">
<!-- Page Content -->
<div class="container-fluid">

  <!-- Portfolio Item Heading -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header"><?php echo $project['name'] ?>
        <small><?php echo $project['type'] ?> Project</small>
      </h1>
    </div>
  </div>
  <!-- /.row -->

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-4">
      <img class="" src"/CV/" />
    </div>

    <div class="col-md-8">
      <h3>Project Description</h3>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna
        varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu
        convallis placerat, felis enim.</p>

      <h3>Project Details</h3>
      <ul>
        <li>Lorem Ipsum</li>
        <li>Dolor Sit Amet</li>
        <li>Consectetur</li>
        <li>Adipiscing Elit</li>
      </ul>
    </div>

  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
<script src="build/js/production.min.js"></script>
</body>


</html>

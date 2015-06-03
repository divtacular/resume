<?php require_once 'inc/project-info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Resume of David Smythe</title>

  <link href='build/css/production.min.css' rel='stylesheet' type='text/css' media="screen" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab' rel='stylesheet' type='text/css' />

  <meta name="robots" content="NOINDEX, NOFOLLOW" />
</head>
<body class="portfolio-item">
<!-- Page Content -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <div id="photo-header" class="text-center">
        <!-- PHOTO -->
        <div id="photo">
          <img
            src="/CV/build/img/me.jpg"
            alt="avatar">
        </div>
        <div id="text-header">
          <h1>David Smythe<br><span>Web Developer</span></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="navigation" role="navigation">

        <a class="active" href="/CV/portfolio.html">Portfolio</a>
        <a href="/CV/">CV</a>
      </div>
    </div>
  </div>

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

    <div class="website col-sm-12 col-md-5">
      <img alt="<?php echo $project['name'] ?> homepage screenshot" src="/CV/build/img/processed/featured/<?php echo
      $project['image'] ?>-large.jpg" />
    </div>

    <div class="col-sm-12 col-md-7">
      <h3>Project Description</h3>

      <p><?php echo $project['description'] ?></p>

      <h3>Project Details</h3>
      <ul>
        <?php foreach($project['details'] as $detail) { ?>
        <li><?php echo $detail ?></li>
        <?php } ?>
      </ul>
    </div>

  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
<script src="build/js/production.min.js"></script>
</body>


</html>

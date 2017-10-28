<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdn.logrocket.com/LogRocket.min.js"></script>
  <script>
    window.LogRocket && window.LogRocket.init('ylt7fv/thebeardedcoder');
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>The Bearded Coder, Inc.</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/social-feed/jquery.socialfeed.css" rel="stylesheet" type="text/css">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.css" rel="stylesheet">
  <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>
  <?php
  include_once('navbar.php');
  ?>

    <div class="container">

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Contact <strong>The Bearded Coder</strong></h2>
        <hr class="divider">

        <form name="contactform" method="post" action="send_form_email.php">
          <!--<form>-->
          <div class="row">
            <div class="form-group col-lg-4">
              <label class="text-heading">Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Email Address</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Phone Number</label>
              <input type="tel" name="telephone" class="form-control">
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-lg-12">
              <label class="text-heading">Message</label>
              <textarea name="comments" class="form-control" rows="6"></textarea>
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" value="submit" class="btn btn-secondary">Submit</button>
            </div>
          </div>

        </form>
      </div>

    </div>
    <!-- /.container -->

    <?php  include_once('footer.php');
  ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/social-feed/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- doT.js for rendering templates -->
    <script src="vendor/social-feed/bower_components/doT/doT.min.js"></script>
    <!-- Moment.js for showing "time ago" -->
    <script src="vendor/social-feed/bower_components/moment/min/moment.min.js"></script>
    <!-- Social-feed js -->
    <script src="js/jquery.socialfeed.js"></script>

</body>

</html>

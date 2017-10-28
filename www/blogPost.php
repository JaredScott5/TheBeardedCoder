<!--TODO make this a basic template later on and have a database set up with the post info
stored in it such as title, subtitle, paragraphs (make a limit on these),
and so forth

Make the sidebar start AFTER the blog post title

Comment them out until you have created the javascript needed
-->

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

  <title>Welcome To The Grand Opening of The Bearded Coder</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/social-feed/jquery.socialfeed.css" rel="stylesheet" type="text/css">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.css" rel="stylesheet">

</head>

<body>
  <?php
  include_once('navbar.php');
  ?>
    <!-- Page Content -->
    <div class="container">

      <div class="row bg-faded p-4 my-4">

        <!-- Post Content Column -->
        <div class="col-lg-12">

          <!-- Title -->
          <h1 class="mt-4">We're Open For Business!</h1>

          <!-- Author -->
          <p class="lead">
            <!--by <a href="#">Jared Scott (the beard)</a>-->
            by Jared Scott (aka the beard)

          </p>


          <hr>

          <!-- Preview Image -->
          <img class="card-img img-fluid rounded" src="img/blog/office-space.jpg" alt="">
          <hr>

          <!-- Post Content -->
          <p class="lead">My goodness, here we are, here we are! After what feels like a lifetime, The Bearded Coder, Inc. is officially open!
          </p>

          <p>First of all, thank you for taking time out of your day to visit our humble company blog. It does our hearts good to know that out of all of the many articles, videos, and blog posts on the Internet that you decided to give us a read.
          </p>

          <p>
            As you’ve likely noticed from our home page, The Bearded Coder, Inc. is a company that not only knows how to create websites, but sincerely wants to. We have the utmost respect for small business owners and content creators who take their dreams and passions
            to the next stage. As a small business ourselves, we recognize and understand the risks that are involved with taking this leap of faith. To help alleviate those risks, we offer web services that are affordable, convenient, and honest.
          </p>

          <p>This sounds nice and fuzzy, but what actually makes us different from the rest of the many other web development companies in the world? We like to humorously think of our differences as super powers. These super powers are important, unique,
            and borderline unprofessional, but we think they are what makes us the superior choice. Would you like to know what they are?
          </p>

          <p>
            For starters, we visibly become excited when you share your vision. I don’t mean we give a weak smile and nod our heads. I mean our eyes bulge, we become energetic, and we grin like a Cheshire cat. That same flame in your eyes when you about your business
            is what is in us every morning we wake up ready to take on the day and meet challenges head on. Whoo! We love that passion!
          </p>

          <p>Number next, we crave and absorb new technologies. When first beginning our journey in software development, it was upsetting to learn how easy it is to fall behind technological advancements and trends, but then our thinking shifted. These
            rapid advancements aren’t meant to push new developers away from jobs and opportunities, they are meant to give us the tools to better shape and create services and products for all. We are determined to master these tools not just for our
            benefit, but for yours and your clients’.
          </p>

          <blockquote class="blockquote">
            <p class="mb-0">It is a wretched taste to be gratified with mediocrity when the excellent lies before us.</p>
            <footer class="blockquote-footer">British scholar
              <cite title="Source Title">Isaac D'Israeli</cite>
            </footer>
          </blockquote>

          <p>Super power number 3: we can grow a mean beard! Just joking! Well, I mean we actually do have awesome beards. We wouldn’t be The Bearded Coder if we couldn’t actually grow a beard, but that’s not the final super power. It’s actually the intolerance
            of mediocre. We’ve seen mediocre all our lives and at times have all been guilty of it. We refuse to do so again. Your website will not reek of mediocrity (which smells like an unwashed beard), but of excellence, perseverance, and creativity!
          </p>

          <p>
            Wow, that got a little deep there, but we hope that our point was made clear. We don’t just create websites for money, we form them because they are our passion. We want to extend that passion by linking arms with you and using the best tools available
            to give your business or idea an online presence. We share in your excitement for business, push ourselves to expand our skills, and say ‘no’ to mediocrity.
          </p>

          <p>Again, thank you for taking time to read our blog and we hope that you will consider making The Bearded Coder your go-to place for website creation and services.
          </p>

          <hr>

        </div>

        <!-- Sidebar Widgets Column -->
        <!--  <div class="col-md-4">

                <!-- Search Widget -->
        <!--  <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
        <!--  <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Freebies</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">JavaScript</a></li>
                                    <li><a href="#">CSS</a></li>
                                    <li><a href="#">Tutorials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
        <!--  <div class="card my-4">
                    <h5 class="card-header">Side Widget</h5>
                    <div class="card-body">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                    </div>
                </div>-->

      </div>

    </div>
    <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php  include_once('footer.php');
  ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="vendor/social-feed/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- doT.js for rendering templates -->
    <script src="vendor/social-feed/bower_components/doT/doT.min.js"></script>
    <!-- Moment.js for showing "time ago" -->
    <script src="vendor/social-feed/bower_components/moment/min/moment.min.js"></script>
    <!-- Social-feed js -->
    <script src="js/jquery.socialfeed.js"></script>
</body>

</html>

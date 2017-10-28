<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Bearded Coder, Inc.</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
    <div class="container">

        <div class="bg-faded p-4 my-4">
            <!-- Image Carousel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <a href="contact.php">
                        <img class="d-block img-fluid w-100" src="img/carasole/slide-1.jpg" alt="">
                      </a>
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-shadow">Let's Have a Chat</h3>
                            <p class="text-shadow">
                              We're more than happy to meet online or even in person to discuss your website needs.
                              <br>First cup of joe is on us!
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="">
                          <img class="d-block img-fluid w-100" src="img/carasole/slide-4.jpg" alt="">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-shadow">Always Learning</h3>
                            <p class="text-shadow">
                              It would be easy to stick with building simple websites, but who wants that?
                              <br>
                              Discover what new tech and tricks we're learning to make your website the best!
                          </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="blog.php">
                          <img class="d-block img-fluid w-100" src="img/carasole/slide-3.jpg" alt="">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-shadow">The Bearded Blog</h3>
                            <p class="text-shadow">
                              Take a few minutes to see what we're up to, our plans for the future, and lessons learned.
                            </p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Welcome Message -->
            <div class="text-center mt-4">
                <div class="text-heading text-muted text-lg">Welcome To</div>
                <h1 class="my-2">The Bearded Coder, Inc.</h1>
<!--
                <div class="text-heading text-muted text-lg">By <strong>Start Bootstrap</strong></div>
-->

            </div>
        </div>

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">
              Create <strong>a website worth visitng</strong>
            </h2>
            <hr class="divider">
            <p align="left">
              If you’ve heard it once, you’ve heard it a thousand times.
              “Every business needs a website.” Well that certainly is true, but
              you are an entrepreneur! Rich in tasks and poor in time doesn’t make
              it easy to create a website worthy of your business.
              That’s where The Bearded Coder comes into play.
            </p>
            <p  align="left">
              Let us take the stress off of your shoulders by creating a responsive,
              classy website for your business. Whether you’re
              selling hand-made items from home, running a restaurant, or
              recording podcasts and How-To videos on the
              weekends with friends, we will create a website that caters to your
              needs and style.
             </p>
             <p  align="left">
               So what are you waiting for? Shoot us an email and we'll talk
               about developing the website you’ve wanted to make for ages.
               Let's talk face-to-face over a cup of java (software pun) and make
               your website go from an idea to
               a reality!
             </p>
         </div>

<!-- TODO create a list of services. When you click on them, they expand to explain just what they are-->
        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">Services <strong>worth investing in</strong></h2>
            <hr class="divider">

            <section id="services">
              <div class="container">

                <div class="row text-center">
                  <div class="col-md-4">
                    <h4 class="service-heading"><strong>Web Design</strong></h4>
                    From web page layout to the actual content that's featured, we'll sit down with you and hammer out all the details and features that best meet your vision.
                    </div>
                  <div class="col-md-4">
                    <h4 class="service-heading"><strong>Responsive Layout</strong></h4>
                    To compliment your content, we'll implement features that breathe life into website be it carousel of pictures or integrated booking and payments.
                  </div>
                  <div class="col-md-4">
                    <h4 class="service-heading"><strong>Web Development</strong></h4>
                    The actual implementation of your ideas. Sit back and enjoy a cup of coffee while we forge your website from the finest tools and materials available (mostly bits and bytes).
                  </div>
                </div>
<br>
                <div class="row text-center">
                  <div class="col-md-6">
                    <h4 class="service-heading"><strong>Continuous Integration</strong></h4>
                    In layman's terms, we take several technologies that work together to streamline the web building process. The end result? Quicker implementation of website features and fewer bugs.
                  </div>
                  <div class="col-md-6">
                    <h4 class="service-heading"><strong>Web Maintenance</strong></h4>
                    Regardless of who created your website, we'll handle the tasks of pushing new content onto your site, bringing it up to modern standards, and even add new features you'd like to see.
                  </div>
                  <!--<div class="col-md-4">
                    <h4 class="service-heading"><strong>Open Source Solutions</strong></h4>
                    Another line item that excites the nerds. Open source has a wonderful community that is known for more quiclky addressing issues found in software than typical proprietary technology.
                  </div>-->
                </div>
              </div>
            </section>
        </div>

      <!--  <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">A Portfolio <strong>worth visitng</strong></h2>
            <hr class="divider">
            <img class="img-fluid float-left mr-4 d-none d-lg-block" src="img/intro-pic.jpg" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolore voluptatem, deleniti dignissimos excepturi veritatis cum hic sunt perferendis ipsum perspiciatis nam officiis sequi atque enim ut! Velit, consectetur.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam pariatur perspiciatis reprehenderit illo et vitae iste provident debitis quos corporis saepe deserunt ad, officia, minima natus molestias assumenda nisi velit?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit totam libero expedita magni est delectus pariatur aut, aperiam eveniet velit cum possimus, autem voluptas. Eum qui ut quasi voluptate blanditiis?</p>
        </div> -->

    </div>
    <!-- /.container -->

<?php
include_once('footer.php');
?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>

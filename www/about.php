<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Bearded Coder, Inc.</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/timeline.css" rel="stylesheet">

</head>

<body>
<?php include_once('navbar.php')
?>

<!--TODO make the images down below all 640x420-->
    <div class="container">

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">About <strong>The Bearded Coder, Inc.</strong></h2>
            <hr class="divider">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid mb-4 mb-lg-0" src="img/about/aboutus.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <p>Hello everyone! I’m Jared, the bearded coder. Websites have become a necessity not just for businesses, but also for those who need to show off a portfolio for interviews. While websites are wonderful, they can quickly become complicated and time consuming. That’s why we’re here. </p>
                    <p>We create websites that are designed to your unique style and leave a lasting impression on your audience. We’ll even manage your website post-creation so you don’t have to be concerned with uploading new content, maintenance, and so forth.</p>
                </div>
            </div>
        </div>

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">Our <strong>Mission Statement</strong></h2>
            <hr class="divider">
            <div class="row">
                <div class="col-lg-6">
                <br><br><br><br>
                    <p>To create and maintain websites using the best software development practices and open source technologies while operating under the principles of hard work, integrity, and self-improvement.</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid mb-4 mb-lg-0" src="img/about/agreement.jpg" alt="">
                </div>
            </div>
        </div>
<!--
        <section class="timeline bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">The <strong>Bearded Timeline</strong></h2>
            <hr class="divider">
            <div class="timeline">
              <ul>
                <li>
                  <div>
                    <time>September 2017</time>
                    <h4>Taking the Leap of Faith</h4>
                    What started as an educational pursiut quickly grew into
                      a passion and later into The Bearded Coder
                  </div>
                </li>

                <li>
                  <div>
                    <time>September 2017</time>
                    <h4>And Thus, The Adventure Began</h4>
                    First Customer
                    asdfadsfasdf
                  </div>
                </li>

                <li>
                  <div>
                    <time>The Future Awaits</time>
                    <h4>This Could Be You</h4>
                    Be the individual who writes the next chapter for The Bearded Coder!
                  </div>
                </li>
              </ul>
            </div>

        </section>

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">Our <strong>Team</strong></h2>
            <hr class="divider">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card h-100">
                        <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title m-0">John Smith <small class="text-muted">Job Title</small></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card h-100">
                        <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title m-0">John Smith <small class="text-muted">Job Title</small></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title m-0">John Smith <small class="text-muted">Job Title</small></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
-->
    </div>
    <!-- /.container -->

  <?php  include_once('footer.php');
?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Our custom js file-->

    <script>

    var items = document.querySelectorAll(".timeline li");

    // code for the isElementInViewport function

    function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    function callbackFunc() {
      for (var i = 0; i < items.length; i++) {
        if (isElementInViewport(items[i])) {
          items[i].classList.add("in-view");
        }
      }
    }

    window.addEventListener("load", callbackFunc);
    window.addEventListener("scroll", callbackFunc);
    </script>

</body>

</html>

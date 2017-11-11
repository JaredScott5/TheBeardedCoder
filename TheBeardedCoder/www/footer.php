<!--TODO social media icons-->
<!-- Custom styles for this template -->
<!-- Custom fonts for this template -->
<footer class="bg-faded text-center py-5">

  <div class="container">
    <div class="row" id="topFooterLayer">
      <div class="col-3">
        <h5><a href="index.php">Home</a></h5>
      </div>
      <div class="col-3">
        <h5><a href="about.php">About Us</a></h5>
      </div>
      <div class="col-3">
        <h5><a href="blog.php">Blog</a></h5>
      </div>
      <div class="col-3">
        <h5><a href="contact.php">Contact Us</a></h5>
      </div>
    </div>
    <hr>
    <div class="row" id="secondFooterLayer">
      <div class="col-4" id="missionStatement">
        <h5>Mission Statement</h5> To create and maintain websites using the best software development practices and open source technologies while operating under the principles of hard work, integrity, and self-improvement.
      </div>
      <div class="col-3" id="recentBlogPost">
        <h5>Recent Blog Post(s)</h5>
        <a href="blogPost.php">
          We Are Open For Business
          </a>
      </div>
      <div class="col-5" id="recentFacebookPost">
        <h5>Recent Facebook Post</h5>
        <section class="feed">
          <div class="container">
            <div class="social-feed-container"></div>
          </div>
        </section>
      </div>
    </div>
    <hr>
    <div class="row" id="thirdFooterLayer">
      <div class="col-4" id="standard">
        Follow Us on Social Media:
        <a href="https://www.facebook.com/thebeardedcoder/">Facebook</a>
      </div>
      <div class="col-4" id="privacypolicy">
        Read Our <a href="privacypolicy.php">Privacy Policy</a>
      </div>
      <div class="col-4" id="pixabay">
        Special thanks to <a href="https://pixabay.com">PixaBay<a/> for allowing use
          of photos (<a href="https://creativecommons.org/publicdomain/zero/1.0/deed.en">Creative Commons</a>)
      </div>
    </div>
    <script src="vendor/social-feed/bower_components/jquery/dist/jquery.min.js">
    </script>
    <script>
      $(document).ready(function() {
        var updateFeed = function() {
          var initialQuery = '@thebeardedcoder';
          initialQuery = initialQuery.replace(" ", "");
          var queryTags = initialQuery.split(",");
          $('.social-feed-container').socialfeed({
            // FACEBOOK
            facebook: {
              accounts: queryTags,
              limit: 1,
              access_token: '202463903646991|ffd4770817efbd764d36727daa087017'
            },
            // GENERAL SETTINGS
            length: 200,
            show_media: true,
            // Moderation function - if returns false, template will have class hidden
            moderation: function(content) {
              return (content.text) ? content.text.indexOf('fuck') == -1 : true;
            },
            //update_period: 5000,
            // When all the posts are collected and displayed - this function is evoked
            callback: function() {
              console.log('all posts are collected');
            }
          });
        };
        updateFeed();
        $('#button-update').click(function() {
          //first, get rid of old data/posts.
          $('.social-feed-container').html('');
          //then load new posts
          updateFeed();
        });
      });
    </script>
</footer>

//$(document).ready(
function aquireFacebook() {

    var updateFeed = function() {
//Do not change the foloowing three lines of code. As we add more social media accounts
//we will need the .replace() and .split() functions
        var initialQuery = '@thebeardedcoder';//$('#query').val();
        initialQuery = initialQuery.replace(" ", "");
        var queryTags = initialQuery.split(",");
        $('.social-feed-container').socialfeed({
            // FACEBOOK
            facebook: {
                accounts: queryTags,
                limit: 1,
                access_token: '150849908413827|a20e87978f1ac491a0c4a721c961b68c'
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
};//);

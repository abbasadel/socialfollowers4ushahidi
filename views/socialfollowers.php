<!-- move to plugin -->
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?php $facebook_id ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- end fb -->

<div id="socialmedia" >
    <div class="fb-like" data-href="https://www.facebook.com/<?php echo $facebook_user ?>" data-send="false" data-layout="button_count" data-width="10" data-show-faces="false"></div>
    <a id="twitter-div" href="https://twitter.com/<?php echo $twitter_user ?>" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false">Follow</a>
    <script>!function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = "//platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, "script", "twitter-wjs");</script>
</div>

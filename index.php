<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
$root_path = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
  <head>
    <title>Home of the East Coast Militia</title>
    <link rel="stylesheet" type="text/css" href="resources/stylesheets/main.css" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript" src="scripts.js" ></script>
  </head>
  <body>
    <div id="container" class="clearfix">
      <?php include $root_path.'/resources/partials/main_banner.html'; ?>
      <?php include 'resources/partials/drop_down_nav_menu.html'; ?>
      <div id="index-tag-line">
        Join the Militia in the battle to improve yourself
      </div>
      <div id="social-networking">
        <div id="fb">
          <iframe src="http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/militiahockey"
        					scrolling="no" frameborder="0"
                  style="border:none; width:450px; height:25px;">
          </iframe>
        </div>
        <div id="fb-text">
          Click <a href="http://www.facebook.com/profile.php?id=100003322871904">
          here</a> to friend us on Facebook
        </div>        
        <div id="twitter">
          <a href="https://twitter.com/Militia_Hockey" class="twitter-follow-button" 
									data-show-count="false">Follow @Militia_Hockey</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
											if(!d.getElementById(id)){js=d.createElement(s);
												js.id=id;js.src="//platform.twitter.com/widgets.js";
												fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                </script>
        </div>
      </div>
      <div id="main-content-container">
        <?php include 'resources/partials/main_page_testimonials.html'; ?> 
        <?php include 'resources/partials/front_page_news.php'; ?>
      </div>
      <?php include 'resources/partials/footer.html'; ?>     
    </div>
  </body>
</html>

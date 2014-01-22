<div id="news-stories-container">
  <?php
    $con = mysqli_connect("localhost", "root", "root", "east_coast_militia");
    
    //check if connected
    if (mysqli_connect_errno()) {
      echo "<p>Failed to connect to MySQL: " . mysqli_connect_errno() . "</p>";
    }
   
    $result = mysqli_query($con, "SELECT * FROM news_stories ORDER BY created_at DESC LIMIT 7");
    
    if ($first_row = mysqli_fetch_array($result)) { 
      if (strpos($first_row['images'], "www.facebook.com/video")) {
        $top_story_img = "<iframe src='".$first_row['images']."' framborder='0'></iframe>";
      }
      else {
        $top_story_img = "<img src='/PHP/resources/images/news_images/".$first_row['images']."' />";
      }
      $content = "<div id='top-story'>
                    <div id='top-story-title'>"
                      .$first_row['title']
                  ."</div>
                    <div id='top-story-img'>"
                      .$top_story_img
                  ."</div>
                    <div id='top-story-content'>"
                      .$first_row['content']
                  ."</div>
                  </div>";
      echo $content;
    }

    while ($row = mysqli_fetch_array($result)) {
      if (strpos($row['images'], "www.facebook.com/video")) {
        $media = "<iframe src='".$row['images']."' frameborder='0'></iframe>";
      } else {
        $media = "<img src='/PHP/resources/images/news_images/".$row['images']."' />";
      }
      $caption = $row['title'];
      if (!empty($row['content'])) {
        $caption .= " read full story <span class='news-link'>here</span>";
      } 
      $content = "<div class='news-story'>
                    <div class='media'>"
                      .$media
                  ."</div>
                    <div class='caption'>"
                      .$caption
                  ."</div>
                  </div>";
      echo $content;
    }

    mysqli_close($con);
  ?>

  <div id="top-story">
    <div id="top-story-title">
      East Coast Militia Online Store Is Now Here
    </div>
    <div id="top-story-img">
      <img src="/PHP/resources/images/militia_store.png">
    </div>
    <div id="top-story-content" style="text-align:center;">
      Don't be the last one to get you and your family the latest Militia 
      clothing and apparel! Buy your gear 
      <a href="http://www.squadlocker.com/East-Coast-Militia/5069/400-5069/dept">now!</a>
    </div>
  </div>

  <?php include 'front_page_extras.html'; ?>
</div>

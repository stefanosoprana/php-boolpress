<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Post Detail</title>
    <link rel="stylesheet" href="css/css_post_detail/style.css">
  </head>
  <body>
    <?php

    $userSlug = $_GET['slug'];

    include 'data.php';
    include 'functions.php';

    foreach ($posts as $post) {
      if ($post['slug'] == $userSlug) { ?>
        <div class="container">
          <div class="header">
            <h2><?php echo $post['title'] ?></h2>
            <small> published <?php dateFormat($post['published_at']); ?></small>
          </div>
          <div class="main">
            <img src="<?php echo $post['image'] ?>">
            <div class="text">
              <?php echo $post['content'] ?>
            </div>
          </div>
          <div class="tag">
            Tag: <?php echo implode(', ',$post['tag']); ?>
          </div>
        </div>
      <?php  }
    } ?>
  </body>
</html>

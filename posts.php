<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BoolPress</title>
    <link rel="stylesheet" href="css/css_posts/style.css">
  </head>
  <body>
    <div class="container">
      <?php

        include 'data.php';
        include 'functions.php';

        $userTag = $_GET['tag'];

        foreach ($posts as $post) {
          if (in_array($userTag, $post['tag']) || $userTag == NULL || empty($userTag)) { ?>

            <div class="post">
              <div class="title">
                <h3><a href="http://localhost/esercizio7/post-detail.php?slug=<?php echo $post['slug'] ?>">
                  <?php echo $post['title']; ?>
                </a></h3>
                <small>Published <?php dateFormat($post['published_at']); ?></small>
              </div>
              <div class="text">
                <p><?php echo substr($post['content'],0,150) ?></p>
              </div>
            </div>

          <?php }
        } ?>
    </div>
  </body>
</html>

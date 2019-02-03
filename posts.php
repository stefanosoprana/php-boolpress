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

        foreach ($posts as $post) { ?>
          <div class="post">
            <div class="title">
              <h3><a href="http://localhost/esercizio7/post-detail.php?slug=<?php echo $post['slug'] ?>">
                <?php echo $post['title']; ?>
              </a></h3>
              <small><?php echo $post['published_at']; ?></small>
            </div>
            <div class="text">
              <p><?php echo substr($post['content'],0,150) ?></p>
            </div>
          </div>
      <?php } ?>
    </div>
  </body>
</html>

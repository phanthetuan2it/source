<?php include_once 'includes/functions.php'; ?>
<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Article">
<head>
  <!-- Place this data between the <head> tags of your website -->
  <title>Page Title. Maximum length 60-70 characters</title>
  <meta name="description" content="Page description. No longer than 155 characters." />
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="The Name or Title Here">
  <meta itemprop="description" content="This is the page description">
  <meta itemprop="image" content="http://www.example.com/image.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@publisher_handle">
  <meta name="twitter:title" content="Page Title">
  <meta name="twitter:description" content="Page description less than 200 characters">
  <meta name="twitter:creator" content="@author_handle">
  <!-- Twitter summary card with large image must be at least 280x150px -->
  <meta name="twitter:image:src" content="http://www.example.com/image.jpg">
  <!-- Open Graph data -->
  <meta property="og:title" content="Title Here" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://www.example.com/" />
  <meta property="og:image" content="http://example.com/image.jpg" />
  <meta property="og:description" content="Description Here" />
  <meta property="og:site_name" content="Site Name, i.e. Moz" />
  <meta property="article:published_time" content="2013-09-17T05:59:00+01:00" />
  <meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" />
  <meta property="article:section" content="Article Section" />
  <meta property="article:tag" content="Article Tag" />
  <meta property="fb:admins" content="Facebook numberic ID" />
  <!-- style -->
  <link rel="stylesheet" type="text/css" href="" />
</head>
<body>
  <div>asdas</div>
  <?php
    $files = array(
              'includes/js/jquery-3.3.1.js',
            );
    echo combine_my_files($files, 'content/cache/', '.js', 1);
  ?>
  <script type="text/javascript">
    $('div').fadeOut();
  </script>
</body>
</html>
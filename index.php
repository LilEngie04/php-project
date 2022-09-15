<?php
$title = 'My blog';
$numPosts = 0;
$hasPosts = $numPosts > 0;
$numPostsDisplay = "\"$numPosts\" posts";
$tags = ['php', 'docker', 'mysql'];
?>
<h1><?= $title ?></h1>
<h2><?= $numPostsDisplay ?></h2>
<?php foreach ($tags as $tag) {
  echo "$tag<br/>";
}
?>

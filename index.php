<?php
$title = 'My blog';
$numPosts = 0;
$hasPosts = $numPosts > 0;
$numPostsDisplay = "\"$numPosts\" posts";
?>
<h1><?= $title ?></h1>
<h2><?= $numPostsDisplay ?></h2>
<?= $hasPosts ? 'Posts exist.' : 'There are no posts.' ?>

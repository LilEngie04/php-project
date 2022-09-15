<?php
$title = 'My blog';
$numPosts = 3;
$hasPosts = $numPosts > 0;
$numPostsDisplay = "\"$numPosts\" posts";
?>
<h1><?= $title ?></h1>
<h2><?= $numPostsDisplay ?></h2>
<?php if ($hasPosts): ?>
    <?php if($numPosts === 3): ?>
        There are exactly 3 posts.
    <?php else: ?>
        Posts exist.
    <?php endif ?>
<?php else: ?>
    There are no posts
<?php endif ?>

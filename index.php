<?php
$title = 'My blog';
$numPosts = 0;
$hasPosts = $numPosts = 5;
$numPostsDisplay = "\"$numPosts\" posts";
?>
<h1><?= $title ?></h1>
<h2><?= $numPostsDisplay ?></h2>
<?php
if ($numPosts === 3) {
    echo 'There are exactly 3 posts.';
} elseif ($numPosts) {
    echo 'Posts exists.';
} else {
    echo 'There are no posts.';
}
?>
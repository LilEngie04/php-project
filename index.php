<?php
$title = 'My blog';
$posts = [
        [
        'title' => 'How to learn PHP',
    'content' => 'This is how you learn PHP',
        ],
    [
        'title' => 'How to learn MySQL',
        'content' => 'This is how you learn MySQL',
    ],
];
$numPosts = 0;
$numPostsDisplay = "\"$numPosts\" posts";
?>
<h1><?= $title ?></h1>
<h2><?= $numPostsDisplay ?></h2>
<pre><?php var_dump($posts); ?></pre>


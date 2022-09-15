<?php
$title =(integer) 'My blog';
$numPosts =(string) 10;
?>
<h1><?= $title ?></h1>
<p><?= gettype($title)?></p>
<h2><?= $numPosts ?></h2>
<p><?= gettype($numPosts)?></p>

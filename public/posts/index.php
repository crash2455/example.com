<?php
require '../../core/db_connect.php';

$meta=[];
$meta['title']="The Cow Jumped Over the Moon";

$content="<h1>The Cow Jumped Over the Moon</h1>";
$stmt=$pdo->query('SELECT * FROM posts');

while ($row = $stmt->fetch()){
  $content.="<a href=\"/posts/view.php?slug={$row['slug']}\">{$row['title']}</a>";
}

require '../../core/layout.php';

<?php
require '../../core/functions.php';
require '../../config/keys.php';
require '../../core/db_connect.php';


$input = filter_input_array(INPUT_GET);
$slug= preg_replace("/[^a-z0-9-]+/","",$input['slug']);

$content="<h1>The Cow Jumped Over the Moon</h1>";
$stmt=$pdo->prepare("SELECT * FROM posts where slug=?");
$stmt->execute([$slug]);
$row = $stmt->fetch();

$meta=[];
$meta['title']=$row['title'];
$meta['description']=$row['meta_description'];
$meta['keywords']=$row['meta_keywords'];

$content=<<<EOT
<h1>{$row['title']}</h1>
{$row['body']}

<hr>
<div>
  <a href="posts/edit.php?id={$row['id']}">Edit</a>
  <a class="btn btn-link text-danger" href="posts/delete.php?id={$row['id']}">Delete</a>
</div>

EOT;

//echo $content;

require '../../core/layout.php';

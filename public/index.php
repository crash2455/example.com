<?php

$meta=[];
$meta['title']="The Cow Jumped Over the Moon";
$meta['description']='I am a garbage monster';

$content = <<<EOT
<div class="jumbotron">
  <h1>Yes it is me the Space Cow</h1>
</div>
<div class="card-group">
  <div class="card text-white bg-dark mb-3">
    <img src="heyguys.png" class="card-img-top" alt="Hey Guys">
    <div class="card-body">
      <h5 class="card-title">Hey Guys</h5>
      <p class="card-text">Check me out on <a  class="text-secondary" href="http://orbitalbeef.com">twitch</a> and stuff.</p>
    </div>
  </div>
  <div class="card text-white bg-dark mb-3">
    <img src="lore.png" class="card-img-top" alt="Work">
    <div class="card-body">
      <h5 class="card-title">Buy my book</h5>
      <p class="card-text">I made an RPG about goblins <a  class="text-secondary" href="http://goblin.house">and you can buy it here.</a></p>
    </div>
  </div>
  <div class="card text-white bg-dark mb-3">
    <img src="thonk.png" class="card-img-top" alt="Oh No">
    <div class="card-body">
      <h5 class="card-title">I play a lot of videogames</h5>
      <p class="card-text">I play some of them fast.  <a class="text-secondary" href="https://www.speedrun.com/user/SpaceCow">Here's a big list of them.</a></p>
    </div>
  </div>
</div>
EOT;
require '../core/layout.php'

?>

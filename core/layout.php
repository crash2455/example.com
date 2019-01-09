<?php
//returns Active status for link spans without having to have a new layout on every page
function active($name){
  $current = basename($_SERVER['PHP_SELF']);
  if($current === $name){
    return 'active';
  }

  return null;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Required meta tags -->
    <?php if(!empty($meta)): ?>

      <?php if(!empty($meta['title'])): ?>
        <title><?php echo $meta['title']; ?></title>
      <?php endif;?>

      <?php if(!empty($meta['description'])): ?>
        <title><?php echo $meta['description']; ?></title>
      <?php endif;?>

      <?php if(!empty($meta['keywords'])): ?>
        <title><?php echo $meta['keywords']; ?></title>
      <?php endif;?>


    <?php endif;?>
      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Matt Campen</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo active('index.php'); ?>">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item <?php echo active('resume.php'); ?>">
                  <a class="nav-link" href="resume.php">Resume</a>
                </li>
                <li class="nav-item <?php echo active('contact.php'); ?>">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container">
    <br><br><br>
     <?php
      echo $content;
      ?>

    </main>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

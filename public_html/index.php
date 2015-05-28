<?php

require_once('database.php');

try {
  $results = $db->query('SELECT * FROM film;');
} catch (Exception $e) {
  echo $e->getMessage();
}

$films = $results->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <title>PHP Data Objects</title>
  <link rel="stylesheet" href="style.css">

</head>

<body id="home">

  <h1>Sakila Sample Database</h1>

  <h2>Films by Title</h2>

  <nav>
    <ul id="nav">
      <li class="navItem"><a href="index.php?pg=1" class="link">1</a></li>
      <li class="navItem"><a href="index.php?pg=2" class="link">2</a></li>
      <li class="navItem"><a href="index.php?pg=3" class="link">3</a></li>
      <li class="navItem"><a href="index.php?pg=4" class="link">4</a></li>
      <li class="navItem"><a href="index.php?pg=5" class="link">5</a></li>
      <li class="navItem"><a href="index.php?pg=6" class="link">6</a></li>
      <li class="navItem"><a href="index.php?pg=7" class="link">7</a></li>
      <li class="navItem"><a href="index.php?pg=8" class="link">8</a></li>
      <li class="navItem"><a href="index.php?pg=9" class="link">9</a></li>
      <li class="navItem"><a href="index.php?pg=10" class="link">10</a></li>
    </ul>
  </nav>

  <ol>
  <?php
    foreach ($films as $film) {
      echo '<li><i class="lens"></i><a href="films.php?id='.$film["film_id"].'">'.$film["title"].'</a></li>';
    }
  ?>
  </ol>

</body>

</html>
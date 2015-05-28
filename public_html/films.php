<?php

require_once('database.php');

if (!empty($_GET['id'])) {
  $film_id = intval($_GET['id']);

  try {
    $results = $db->prepare('SELECT * FROM film WHERE film_id = ?');
    $results->bindParam(1, $film_id);
    $results->execute();
  } catch (Exception $e) {
    echo $e->getMessage();
  }

  $film = $results->fetch(PDO::FETCH_ASSOC);
}

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

  <h2>
  <?php
    if ($film) {
      echo '<h3>'.$film["title"].'</h3>';
      echo '<p>'.$film['description'].'</p>';
    } else {
      echo "Sorry, this film could not be found.";
    }
  ?>
  </h2>

</body>

</html>
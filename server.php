<?php

include "db.php";

$result = [];
if (empty($_GET["author"]) || $_GET ["author"] == "All") {

  $result = $database;

} else {
  $author = $_GET["author"];

  foreach ($database as $album) {
    if($album["author"] == $author) {
      $result[] = $album;
    }
  }
}

  header('Content-Type : application/json');

  echo json_encode($result);

?>

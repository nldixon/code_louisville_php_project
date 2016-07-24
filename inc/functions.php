<?php

try {
  $db = new PDO('mysql:host=localhost;dbname=chardb;port=3306','root','');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}  catch (Exception $e) {
  echo 'Unable to connect to database!';
  exit;
}

try {
    $results = $db->query("SELECT `id`, `name`, `race`, `class`, `level` FROM `pcs`");
    echo "Results";
  } catch (Exception $e) {
    echo "No Results";
    var_dump($e);
    exit;
  }

?>

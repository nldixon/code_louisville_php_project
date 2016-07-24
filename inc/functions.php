<?php

function all_chars($chars) {
  include("connection.php");
    try {
        $sql = "SELECT `name`, `race`, `class`, `level`";

        $results = $db->prepare($sql . "FROM pcs");
        $results->bindParam(':all',$chars);
        $results->execute();
      } catch (Exception $e) {
        echo "SOMETHING WENT WRONG";
        var_dump($e);
        exit;
    }

    return $results->fetchAll(PDO::FETCH_ASSOC);
}

function by_name($name) {
  include("connection.php");
  try {
    $sql = "SELECT `name`, `race`, `class`, `level`";
    $results = $db->prepare($sql . "FROM `pcs` WHERE name LIKE :name");
    $results->bindParam(":name",$name);
    $results->execute();
  } catch (Exception $e) {
    echo "SOMETHING WENT WRONG";
    var_dump($e);
    exit;
  }

  return $results->fetchAll(PDO::FETCH_ASSOC);
}

function by_race($race) {
  include("connection.php");
  try {
    $sql = "SELECT `name`, `race`, `class`, `level`";
    $results = $db->prepare($sql . "FROM `pcs` WHERE race = :race");
    $results->bindParam(":race",$race);
    $results->execute();
  } catch (Exception $e) {
    echo "SOMETHING WENT WRONG";
    var_dump($e);
    exit;
  }

  return $results->fetchAll(PDO::FETCH_ASSOC);
}

function by_class($class) {
  include("connection.php");
  try {
    $sql = "SELECT `name`, `race`, `class`, `level`";
    $results = $db->prepare($sql . "FROM `pcs` WHERE class = :class");
    $results->bindParam(":class",$class);
    $results->execute();
  } catch (Exception $e) {
    echo "SOMETHING WENT WRONG";
    var_dump($e);
    exit;
  }

  return $results->fetchAll(PDO::FETCH_ASSOC);
}

function getChar_results($dpcs) {
  $display_pcs = "<ul><li>Name: " . $dpcs["name"] . "</li>" .
    "<li>Race: " . $dpcs["race"] . "</li>" .
    "<li>Class: " . $dpcs["class"] . "</li>" .
    "<li>Level: " . $dpcs["level"] . "</li></ul>";

   return $display_pcs;
}

?>

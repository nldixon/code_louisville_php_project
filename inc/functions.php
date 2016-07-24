<?php

function all_pcs() {
  include("connection.php");
    try {
        $results = $db->query("SELECT `id`, `name`, `race`, `class`, `level` FROM `pcs`");
      } catch (Exception $e) {
        echo "No Results";
        var_dump($e);
        exit;
    }

    $pcs = $results->fetchAll(PDO::FETCH_ASSOC);
    return $pcs;

}

?>

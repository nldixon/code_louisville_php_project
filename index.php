<html>
    <head>
        <meta charset-="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">

        <title>D&D 5e Basic - Pre-Generated Character Database</title>
    </head>

<?php

include("inc/functions.php");

$name = null;
// $race = null;
$class = null;
$results = null;
$chars = null;
// $level = null;

if (isset($_GET["getChar"])) {
  $name = filter_input(INPUT_GET,"s",FILTER_SANITIZE_STRING);
  $class = filter_input(INPUT_GET,"class",FILTER_SANITIZE_STRING);
  $race = filter_input(INPUT_GET,"race",FILTER_SANITIZE_STRING);

  $race = $_GET["race"];
  $class = $_GET["class"];
  $name = $_GET["s"];

  if ($name !== "") {
    $fresult = "Character named " . $name . " was found.";
    $results = by_name($name);
      } else if ($name == "" && $race !== "" && $class == "") {
          $fresult = "<u>Found all " . $race . " characters.</u>";
          $results = by_race($race);
      } else if ($name == "" && $race == "" && $class !== "") {
          $fresult = "<u>Found all " . $class . "s.</u>";
          $results = by_class($class);
      } else {
          $fresult = "<u>Displaying all characters.</u>";
          $results = all_chars($chars);
      }
}

?>

    <body>
        <header>
            <img src="img/site-logo.png" alt="Site Logo" class="site-logo"></img>
        </header>

        <div class="container info">
          <h4>Populate a field to search for a specific character or leave blank to display all characters.</h4>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3><u>Search by:</u></h3>
                    <form method="GET" action="index.php">
                    <table>
                        <tbody>
                            <tr>
                                <th>
                                    Character Name:
                                </th>
                                  <td>
                                    <input type="text" name="s" id="s">
                                  </td>
                            </tr>
                            <tr>
                                <th>
                                    Character Race:
                                </th>
                                <td>
                                    <select id="race" name="race">
                                      <option value=""></option>
                                      <option value="dragonborn">Dragonborn</option>
                                      <option value="drow">Drow</option>
                                      <option value="dwarf">Dwarf</option>
                                      <option value="elf">Elf</option>
                                      <option value="gnome">Gnome</option>
                                      <option value="half-elf">Half-Elf</option>
                                      <option value="halfling">Halfling</option>
                                      <option value="half-orc">Half-Orc</option>
                                      <option value="human">Human</option>
                                      <option value="tiefling">Tiefling</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Character Class:
                                </th>
                                <td>
                                    <select id="class" name="class">
                                      <option value=""></option>
                                      <option value="barbarian">Barbarian</option>
                                      <option value="bard">Bard</option>
                                      <option value="cleric">Cleric</option>
                                      <option value="fighter">Fighter</option>
                                      <option value="monk">Monk</option>
                                      <option value="paladin">Paladin</option>
                                      <option value="ranger">Ranger</option>
                                      <option value="rogue">Rogue</option>
                                      <option value="sorcerer">Sorcerer</option>
                                      <option value="warlock">Warlock</option>
                                      <option value="wizard">Wizard</option>
                                    </select>
                                </td>
                            </tr>
                              <td class="search">
                                <br>
                                <input type="submit" id="getChar" name="getChar" value="Search">
                              </td>
                        </tbody>
                    </table>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3><u>Results:<u></h3>
                    <div class="results-area" name="results-area">
                      <p><?php

                        if ($results !== null) {
                          if (is_array($results)) {
                            echo $fresult . "<br>";
                            // echo "Marker 1";
                              foreach ($results as $dpcs) {
                                echo getChar_results($dpcs);
                              }
                            // var_dump($results);
                        } else if ($results == null | $results == "") {
                          echo "No characters were found.";
                          // echo "SOMETHING WENT WRONG";
                          // foreach ($results as $display_pcs);
                          // echo getChar_results($display_pcs);
                          // var_dump(getChar_results($display_pcs));
                        }
                      }

                      ?></p>
                    </div>
                </div>
            </div>
        </div>
        <footer>
          <!-- Add contact information, links, etc. -->
        </footer>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>

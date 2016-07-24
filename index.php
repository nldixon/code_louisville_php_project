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

$name = "";
$race = "";
$class = "";

?>

    <body>
        <header>
            <img src="img/site-logo.png" alt="Site Logo" class="site-logo"></img>
        </header>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Search by...</h3>
                    <table>
                        <tbody>
                          <form action="index.php" method="POST">
                            <tr>
                                <th>
                                    Character Name:
                                </th>
                                <td>
                                    <input type="text" name="name">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Character Race:
                                </th>
                                <td>
                                    <select name="race">
                                      <option value="null"></option>
                                      <option value="dborn">Dragonborn</option>
                                      <option value="dwarf">Dwarf</option>
                                      <option value="elf">Elf</option>
                                      <option value="gnome">Gnome</option>
                                      <option value="helf">Half-Elf</option>
                                      <option value="hling">Halfling</option>
                                      <option value="horc">Half-Orc</option>
                                      <option value="human">Human</option>
                                      <option value="tling">Tiefling</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Character Class:
                                </th>
                                <td>
                                    <select name="class">
                                      <option value="null"></option>
                                      <option value="barb">Barbarian</option>
                                      <option value="bard">Bard</option>
                                      <option value="cleric">Cleric</option>
                                      <option value="fighter">Fighter</option>
                                      <option value="monk">Monk</option>
                                      <option value="paladin">Paladin</option>
                                      <option value="ranger">Ranger</option>
                                      <option value="rogue">Rogue</option>
                                      <option value="sorc">Sorcerer</option>
                                      <option value="warlock">Warlock</option>
                                      <option value="wizard">Wizard</option>
                                    </select>
                                </td>
                            </tr>
                              <td class="search">
                                <input type="submit" name="search" value="Search">
                              </td>
                            </form>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h3>Results...</h3>
                    <div class="results-area" name="results-area">
                      <?php
                        var_dump($results->fetchAll());
                      ?>
                    </div>
                </div>
            </div>
        </div>
        <footer>
          <!-- Add contact information, links, etc. -->
        </footer>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>

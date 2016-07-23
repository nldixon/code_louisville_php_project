<html>
    <head>
        <meta charset-="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">

        <title>D&D 5e Basic - Pre-Generated Character Database</title>
    </head>

<?php

include("inc/connection.php");
include("inc/functions.php");

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
                          <form>
                            <tr>
                                <th>
                                    Character Name:
                                </th>
                                <td>
                                    <input type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Character Race:
                                </th>
                                <td>
                                    <select>
                                      <option value="null"></option>
                                      <option value="dwarf">Dwarf</option>
                                      <option value="elf">Elf</option>
                                      <option value="hling">Halfling</option>
                                      <option value="human">Human</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Character Class:
                                </th>
                                <td>
                                    <select>
                                      <option value="null"></option>
                                      <option value="cleric">Cleric</option>
                                      <option value="fighter">Fighter</option>
                                      <option value="rogue">Rogue</option>
                                      <option value="wizard">Wizard</option>
                                    </select>
                                </td>
                            </tr>
                              <td class="search">
                                <input type="submit">
                              </td>
                            </form>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h3>Results...</h3>
                    <div class="results-area">
                      <?php

                      ?>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/script.js" type="text/javascript" charset="utf-8"></script>
    </body>

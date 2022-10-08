<?php
    $db = new SQLite3('vehicles.db');

    $tableCheck =$db->query(
        "SELECT name FROM sqlite_master WHERE name='cars'"
    );

    if ($tableCheck->fetchArray() === false){
        initializeDb($db);
    }

    function initializeDb ($db) {
      // Create Table
      $db->exec("CREATE TABLE cars(id INTEGER PRIMARY KEY, name TEXT, price INT)");
      
      // Insert Values
      $db->exec("INSERT INTO cars(name, price) VALUES('Audi', 52642)");
      $db->exec("INSERT INTO cars(name, price) VALUES('Mercedes', 57127)");
      $db->exec("INSERT INTO cars(name, price) VALUES('Skoda', 9000)");
      $db->exec("INSERT INTO cars(name, price) VALUES('Volvo', 29000)");
      $db->exec("INSERT INTO cars(name, price) VALUES('Bentley', 350000)");
      $db->exec("INSERT INTO cars(name, price) VALUES('Citroen', 21000)");
      $db->exec("INSERT INTO cars(name, price) VALUES('Hummer', 41400)");
      $db->exec("INSERT INTO cars(name, price) VALUES('Volkswagen', 21600)");
    }
?>
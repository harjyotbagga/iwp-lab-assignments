<?php

// connects to the mysql service
$mysqli = new mysqli("db", "root", "root");

// make sure connection is stable
if ($mysqli -> connect_error) {
    die("Mysql did not connect!");
}

// Create database
$sql = "CREATE DATABASE users";
if ($mysqli -> query($sql) === TRUE) {
  echo "Database created successfully <br />";
} else {
  echo "Error creating database: " . $mysqli -> error . "<br />";
}

// Change db to "test" db
$mysqli -> select_db("users");

// creating table numbers
$sql = "CREATE TABLE Numbers (name VARCHAR(20) NOT NULL, number int(2) NOT NULL PRIMARY KEY)";
$result = $mysqli -> query($sql);

// Inserting random records into Numbers
$sql = "INSERT INTO Numbers (name, number) VALUES('Sarthak', '3')";
$result = $mysqli -> query($sql);
$sql = "INSERT INTO Numbers (name, number) VALUES('Limph', '4')";
$result = $mysqli -> query($sql);

// Statement to select all records in the table Numbers
$sql = 'SELECT * FROM Numbers';

if ($result = $mysqli -> query($sql)) {
    while ($data = $result -> fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo $user -> name . " " . $user -> number;
    echo "<br>";
}

?>
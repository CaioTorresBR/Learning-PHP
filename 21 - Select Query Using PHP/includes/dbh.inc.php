<?php 

// DSN -> Data Source Name

//
$dsn = "mysql:host=localhost;dbname=my_first_database";
// database username
$dbusername = "root";
// database password
$dbpassword = "";

// Ways to connect to a database:
// mysql connection
// mysql i -> IMPROVED VERSION
// pdo -> php data objects -> more flexible

try {
    // instantiates a new pdo object
    // creating a database connection object
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    
    // allows to set attributes
    // ATTR_ERRMODE -> if we get and error, then ERRMODE_EXCEPTION throws an exception
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // gets the error in case an exception is thrown, shows it's error message
    echo "Connection failed: " . $e -> getMessage();
}
<!-- Script that submits the data from the form to the database -->

<?php 

// 1st thing: verify if user actually sent the data through the correct page -> submitting the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];


    try {
        // grab my connection to our database
        // links to another file
        require_once "dbh.inc.php"; 

        // creates a query that we can use inside of the database to insert data
        # $query = "INSERT INTO users (username, pwd, email) VALUES ($username, $pwd, $email);"; # the problem here
        #is that we can't insert user data directly inside of our query -> prone to data injections

        $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);"; #right way
        # ? acts like placeholders

        // statement -> equals to the database connection
        // inside of the prepare statement we submit our query
        $stmt = $pdo->prepare($query);

        // submit the user data
        $stmt->execute([$username, $pwd, $email]);

        // closes connection to the database -> best practices, free up ressources faster
        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");
        die();


    } catch(PDOException $e) {
        // function in php that terminates the script and output an error message
        die("Query failed: " . $e -> getMessage());
    }
}
else {
    // sends user back to front pahge, in case he didnt use proper request method
    header("Location: ../index.php");
}

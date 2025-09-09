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

        // UPDATE 
        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 2;";
        // inside of the prepare statement we submit our query
        $stmt = $pdo->prepare($query);

        $stmt -> bindParam(":username", $username);
        $stmt -> bindParam(":pwd", $pwd);
        $stmt -> bindParam(":email", $email);

        // submit the user data
        $stmt->execute();

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

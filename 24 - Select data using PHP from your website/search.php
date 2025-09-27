
<?php 

// 1st thing: verify if user actually sent the data through the correct page -> submitting the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];
    


    try {
        // grab my connection to our database
        // links to another file
        require_once "includes/dbh.inc.php"; 

        # we are selectin everything from comments where the username is equal to what we submitted on the website
        $query = "SELECT * FROM comments WHERE username = :usersearch";

        // inside of the prepare statement we submit our query
        $stmt = $pdo->prepare($query);

        // :usersearch is the placeholder for what we're gonna submit in the website, userSearch will store it
        $stmt -> bindParam(":usersearch", $userSearch);
      

        // submit the user data
        $stmt->execute();

        // takes statement and points it to method called fetchAll, so we can fetch all the results from the database.
        // inside the parenthesis, we tell it HOW do we wanna fetch this data.
        // we say we're using a PDO connection and we wanna fetch it as an associative array 
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // closes connection to the database -> best practices, free up ressources faster
        $pdo = null;
        $stmt = null;

    } catch(PDOException $e) {
        // function in php that terminates the script and output an error message
        die("Query failed: " . $e -> getMessage());
    }
}
else {
    // sends user back to front pahge, in case he didnt use proper request method
    header("Location: ../index.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>

</head>


<body>

    <section>
        <h3>Search results: </h3>

        <?php 

        // checks if the data exists in the database
        if (empty($results)) {
            echo "<div>";
            echo "<p>There were no results.</p>";
            echo "</div>";
        } else {

            foreach ($results as $row) {
                echo "<div>";
                echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
                echo "<p>" . htmlspecialchars($row["comment_text"]) . "</p>" ;
                echo "<p>" . htmlspecialchars($row["created_at"]) . "</p>" ;
                echo "</div>";
            }
        }


        ?>
    </section>

</body>
</html>
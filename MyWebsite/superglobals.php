<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFirstPHPWebsite</title>
</head>
<body>
    <?php 

        // --------------- Built-In Superglobal variables in PHP -----------------------------

        echo "Hello world!";
        // breaks line
        echo "<br>";

        // echo the folder root document (location of the file in our computer)
        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>";

        // echo the file 
        echo $_SERVER["PHP_SELF"];
        echo "<br>"; 
        
        // echo server's name
        echo $_SERVER["SERVER_NAME"];
        echo "<br>";

        // echo type of request method
        echo $_SERVER["REQUEST_METHOD"];
        echo "<br>";
        
        // gets and echo an specific attribute on the url (in this case "name") ex: "localhost/MyWebsite/index.php?name=caio"
        echo $_GET["name"];
        echo $_GET["eyecolor"];
        echo "<br>";

        // uses post or get method (better to use if we don't know exactly which one of them we're using)
        echo $_REQUEST["name"];
        echo "<br>";

        // used whenever we want t get data from a file uploaded to the server
        //   ex: a picture or a pdf being uploaded in a form
        //   we need to double check infos about the file before it being uploaded, like it's size (PREVENTS ATTACKS)
        $_FILES["name"];
        
        // store or grab information about cookies inside our website
        $_COOKIE["name"];

        // grab a session's data
        $_SESSION["username"] = "Caio Torres";
        echo $_SESSION["username"];

        // sensitive data...
        $_ENV[""]
        
    ?>  

</body>
</html>
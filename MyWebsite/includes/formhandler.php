<?php 

// how to let the user not access the code, if they didnt
//  access the file using the form

//var_dump($_SERVER["REQUEST_METHOD"]);

// checks if something is set currently
// isset()
// if (isset($_POST["submit"])){
// }


// everytime we submit data to another page, we want to run this condition, because this need to be check all the time
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

    // htmlsepcialchars() prevents the insertion of code inside of this data (increases security)
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);



    echo "These are the data, that the user submitted";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;

    header("Location: ../index.php");
}

<?php 

// how to not let the user access the code, if they didnt
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

    // if this returns 'true' it means that there's no data inside of the variable
    // which means the user did not submit a firstname  --> so we send the user back to the front page
    if (empty($firstname)) {
        header("Location: ../index.php");
        exit();

        // using required="" attribute on the frontend is dangerous for the security of the website
        // because the user can change it easily while inspecting the page and 
    }

    echo "These are the data, that the user submitted";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;

    // this would send the user back to the page
    //header("Location: ../index.php");
} else {
   header("Location: ../index.php"); 
}

?>

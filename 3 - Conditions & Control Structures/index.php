<!-- OPERATORS INSIDE PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWebsite - Operators</title>

</head>
<body>
  
    <?php

    // --- Conditions ---
    $bool = true;
    $a = 1;
    $b = 4;

        if ($a < $b && !$ $bool) {
            echo "First condition is true!";
        } else if ($a < $b && $bool) {
            echo "Second condition is true!";
        } else {
            echo "None of the conditions are true";
        }



    // --- Control structures --- 

        // Switch()
        // --> switches are usually used when we wanna check for a certain piece of data
        // so we check for one specific thing, differently than if else statements
    
        // inside parenthesis we wanna put variables we wanna check for
        switch($a) {
            // if variable $a is equal to 1
            case 1:
                echo "The first case is correct!";
                break;
            case 2:
                echo "The second case is correct";
            case 3:
                echo "The third case is correct";
            // if none of the cases are returned as true
            default:
                echo "None of the conditions were true!";
    }

        // Match()
        // if variable a is equal to something specific, then we want to return a value into our variable $result
        $result = match ($a) {
            1 => "Variable a is equal to one!",
            2 => "Variable a is equal to two",
            3, 4 => "Variable a is equal to three or four",
            // default is used in case that if none of the values match with the variable value 
            default => "None is a match"
        };
        echo $result;

    

    ?>

</body>
</html>
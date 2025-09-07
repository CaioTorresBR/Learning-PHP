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

    // --- String operator ----
        $a = "hello";
        $b = "world!";

        // . concatenates strings
        $c = $a . " " . $b;


    // --- Arithmetic operator ---

        // % is modulo. shows the leftovers of the division of 10/3
        $mod = 10 % 3; // 1
        
        // ** means 'to the power of...'
        $power = 10 ** 3; // 1000

        // parenthesis are used to change the precedence of expressions
        $precedence = (1 + 2) * 4;

    // --- Assignment operators ---
        // = is used to assign a value to a variable
        $x = 2;
        // += means equals x = x + 4
        $x += 4;

    // --- Comparison operators ---
        
        // verifies if this statement (a equals b) is true and returns true or false 
        $a == $b;
        // verifies if they're different
        $a != $b; 
        // === compares two pieces of data and their data types
        $deux = 2;
        $dois = "2";
        if ($deux === $dois) {
            echo "This statement is true";
        }
        

        // there's also <, >, <=, >=

    // --- Logical operators ---
        $caio = 4;
        $vasco = 4;

        $danilo = 2;
        $vegetti = 6;

        // || is 'or', && is 'and' -> although we can literally write 'or' or 'and'
        if ($caio == $vasco || $danilo == $veggeti && $caio == $danilo){
            echo "this statement is True";
        }

    // --- Incrementing / decrementing operators ---
        $a = 1;
        echo $a--;
        echo $a++;


    ?>

</body>
</html>
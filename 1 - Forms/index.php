<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFirstPHPWebsite</title>

    <link rel="stylesheet" href="css/main.css?v=2">
</head>
<body>
    
    <main>

        <section class="wrapper-main">
            <!-- tells php how we want to submit the data?-->
            <form action="includes/formhandler.php" method="post">
                <label for="firstname">Firstname?</label><br>
                <!-- name attribute is important because its the referecnce name that we will use in the next page -->
                <input required id="firstname" type="text" name="firstname" placeholder="Firstname...">
                <br><br>

                <label for="lastname">Lastname?</label><br>
                <input id="lastname" type="text" name="lastname" placeholder="Lastname..."> 
                <br><br>

                <label for="favouritepet">Favourite Pet?</label><br>
                <select id="favouritepet" name="favouritepet">
                        <option value="none">None</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="bird">Bird</option>
                    </select>
                    <br><br>

                <button type="submit">Submit</button>
            </form>
        </section> 
    </main>

</body>
</html>
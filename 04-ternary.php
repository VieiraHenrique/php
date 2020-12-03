<?php

/* $gender = "F";

$greet = $gender === "M" ? "Hello Mister" : "Hello Miss";

echo $greet;
 */

$srcCat = "https://media.giphy.com/media/BzyTuYCmvSORqs1ABM/giphy.gif";
$srcHuman = "https://media.giphy.com/media/3vZ0zEBTJjeSs/giphy.gif";
$srcUni = "https://media.giphy.com/media/26vUw5sYGcqmMDoBy/giphy.gif";

    $src = "";

    if(isset($_POST['submit'])) {

        $gender = $_POST['gender'];

        $gender === 'cat' ? $src = $srcCat : ($gender === 'human' ? $src = $srcHuman : $src=$srcUni);
        
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
    <form action="/php/04-ternary.php" method="POST">
        <h2>What are you ?</h2>
        <label for="human">Human</label>
        <input type="radio" name="gender" value="human" id="human">
        <label for="cat">Cat</label>
        <input type="radio" name="gender" value="cat" id="cat">
        <label for="unicorn">Unicorn</label>
        <input type="radio" name="gender" value="unicorn" id="unicorn">
        <br>
        <input type="submit" value="Send" name="submit">
    </form>

    <img src=<?php echo $src ?>>

</body>
</html>
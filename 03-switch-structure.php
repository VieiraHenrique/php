<?php

if(isset($_POST['submit'])) {

    $grade = $_POST["grade"];

    switch (true) {
        case $grade < 4 : echo "This work is really bad. What a dumb kid! "; break;
        case $grade < 10 : echo "This is not sufficient. More studying is required";; break;
        case $grade == 10 : echo "barely enough!"; break;
        case $grade < 15 : echo "Not bad !"; break;
        case $grade < 19 : echo "Bravo, bravissimo !"; break;
        
        default:
        echo "Too good to be true : confront the cheater!";
            break;
    }

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
    
<form action="/php/03-switch-structure.php" method="POST">
    <label for="grade">What's the grade ?</label>
    <input type="number" name="grade" id="grade" min=0 max=20>
    <input type="submit" value="Send" name="submit">
</form>

</body>
</html>
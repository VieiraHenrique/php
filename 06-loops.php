<?php

/* $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach ($pronouns as $key => $pronoun) {
    if ($pronoun === 'He/She') {
        echo "$pronoun codes <br>";
    } else {
    echo "$pronoun code <br>";
    }
} */

////////////////////////////////////////////////////////:

/* $num = 1;

while ($num <= 120) {
    echo "$num <br>";
    $num++;
}

for($i=1;$i<=120;$i++) {
    echo "$i <br>";
} */

///////////////////////////////////////////////////:///

/* $myFamily = ["Henrique", "Lillie", "Paulo", "Adriana", "Pedro", "Mariana"];

for ($i=0;$i<count($myFamily);$i++){
    echo "$myFamily[$i] <br>";
} */

///////////////////////////////////////////////////////

$countries = ["AR" => "Argentina", "AU"=>"Australia", "BE"=>"Belgium", "BR"=>"Brazil", "CA"=>"Canada", "CN"=>"China", "DK"=>"Denmark", "FR"=>"France", "DE"=>"Germany", "IT"=>"Italy"];

if(isset($_GET['country'])){
    $country = $_GET['country'];
    echo $country;
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
    
    <form action="/php/06-loops.php" method="GET">
        <label for="country">Select a country</label>
        <select name="country" id="country">
            <?php foreach($countries as $key => $country) {
                echo "<option value='$key'> $country </option>";
            }  ?>
        </select>
        <input type="submit" value="Select">
    </form>

</body>
</html>
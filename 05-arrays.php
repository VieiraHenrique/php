<?php

/* $myFamily = ['Lillie', 'Paulo','Adriana', 'Pedro', 'Mariana'];
print_r($myFamily);

$myRecipes = ['pizza', 'ice cream', 'pão de queijo'];
print_r($myRecipes);

$myMovies = ['Kill Bill', 'Godfather', 'Scarface'];
echo $myMovies[0];

echo '<pre>';
print_r($myFamily);
echo '</pre>';

$me = [
    "name" => "Henrique",
    "age" => 32,
    "season" => "winter", 
    "likeSoccer" => true,
    "hobbies" => ['pc', 'movies', 'musics', 'history']
];

echo '<pre>';
print_r($me);
echo '</pre>';

echo count($me['hobbies']); */

$web_development = [
    "frontend" => [],
    "backend" => [],
];

$web_development['frontend'][] = 'xhtml';
$web_development['backend'][] = 'Ruby on Rails';
$web_development['frontend'][] = 'css';
$web_development['frontend'][] = 'flash';
$web_development['frontend'][] = "javascript";
$web_development['frontend'][0] = 'html';
unset($web_development['frontend'][2]);

echo "<pre>";
print_r($web_development);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    

</body>
</html>
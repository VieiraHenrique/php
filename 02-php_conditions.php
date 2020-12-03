<?php

/* // 1.1 Clean your room Exercise 

$room_is_filthy = true;

if( $room_is_filthy ){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
} */

////////////////////////////////////////////////////////

/* // 1.2 Clean your room Exercise, improved

$possible_states = ["filthy", "dirty", "clean", "immaculate"];
$room_state = $possible_states[0];

if ($room_state==="filthy") {
    echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if ($room_state==="dirty") {
    echo "Yuk, Room is dirty : let's clean it up !";
} else if ($room_state==="clean") {
    echo "Good. Room is clean";
} else {
    echo "WTF ? This can't be true! It's perfect !";
} */

//////////////////////////////////////////////////////////

/* // 2. Display a different greeting message depending on the time of the day

$now = date("H:i");

if ($now >= "0500" && $now <= "0900") {
    echo "Good morning !";
} else if ($now > "0900" && $now <= "1200") {
    echo "Good day!";
} else if ($now > "1200" && $now <= "1600") {
    echo "Good afternoon !";
} else if ($now > "1600" && $now <= "2100") {
    echo "Good evening !";
} else {
    echo "Goodnight !";
} */

////////////////////////////////////////////////////////////

/* // 3. "Different greetings according to age"

if (isset($_POST['submit'])) {
    $age = $_POST['age'];
    if($age < 12) {
        echo "Hello kiddo!";
    } else if ($age < 18) {
        echo "Hello teenager";
    } else if ($age < 115) {
        echo "Hello adult";
    } else {
        echo "Wow ! Are you a robot ?";
    };
} */

/////////////////////////////////////////////////

// 3.2 Different greetings according to age and gender"

/* if (isset($_POST['submit'])) {
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    
    if($age < 12) {
        echo "Hello kiddo!";
    } else if ($age < 18) {
        if ($gender === "male") {
            echo "Hello, Mr teenager";
        } else {
            echo "Hi, Miss teenager";
        }
    } else if ($age < 115) {
        echo "Hello adult";
    } else {
        echo "Wow ! Are you a robot ?";
    };
} */

/////////////////////////////////////////////////////

/* if (isset($_POST['submit'])) {
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $english = $_POST['english'];

    echo $english;
    
    if($age < 12) {
        echo "Hello kiddo!";
    } else if ($age < 18) {
        if ($english === true) {
            if ($gender === "male") {
                echo "Hello, Mr teenager";
            } else {
                echo "Hi, Miss teenager";
            }
        } else {
            if ($gender === "male") {
                echo "Aloha, Mr teenager";
            } else {
                echo "Aloha, Miss teenager";
            }
        }
    } else if ($age < 115) {
        echo "Hello adult";
    } else {
        echo "Wow ! Are you a robot ?";
    };
} */

////////////////////////////////////////////////

/* if(isset($_POST['submit'])) {
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $name = $_POST['name'];

    if ($gender === "male") {
        echo "Sorry, you don't fit the criteria";
    } else {
        if ($age >= 21 && $age <= 40) {
            echo "Welcome to the team, ".$name;
        } else {
            echo "Sorry, you don't fit the criteria";
        }
    }
} */

/////////////////////////////////////////////////

/* if(isset($_POST['submit'])) {

    $grade = $_POST['grade'];

    if ($grade < 4) {
        echo "This work is really bad. What a dumb kid! ";
    } else if ($grade < 10) {
        echo "This is not sufficient. More studying is required";
    } else if ($grade == 10) {
        echo "barely enough!";
    } else if ($grade < 15) {
        echo "Not bad !";
    } else if ($grade < 19) {
        echo "Bravo, bravissimo !";
    } else {
        echo "Too good to be true : confront the cheater!";
    }

} */

//////////////////////////////////////////////////////



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>
<body>

<!-- <form action="/php/02-php_conditions.php" method="POST">
    <label for="age">How old are you ?</label>
    <input type="number" name="age" id="age">
    <br>
    <label for="male">Male</label>
    <input type="radio" name="gender" id="male" value="male">
    <label for="female">Female</label>
    <input type="radio" name="gender" id="female" value="female">
    <br>
    <label>Speak english ?</label>
    <label for="english">Yes</label>
    <input type="radio" name="english" id="english" value=true>
    <label for="noenglish">No</label>
    <input type="radio" name="english" id="noenglish" value=false>
    <br>
    <input type="submit" name="submit" value="Send">
</form> -->



<!-- /////////////////////////////////////////////////// -->
    

<!-- <form action="/php/02-php_conditions.php" method="POST">
    <label for="name">Enter your name:</label>
    <input type="text" id="name" name="name">
    <br>
    <label for="male">Male</label>
    <input type="radio" name="gender" id="male" value="male">
    <label for="female">Female</label>
    <input type="radio" name="gender" id="female" value="female">
    <br>
    <label for="age">Enter your age:</label>
    <input type="number" name="age" id="age">
    <br>
    <input type="submit" value="Send" name="submit">
</form> -->

<!-- ///////////////////////////////////////////////////// -->

<!-- <form action="/php/02-php_conditions.php" method="POST">
    <label for="grade">What's the grade ?</label>
    <input type="number" min=0 max=20 name="grade" id="grade">
    <input type="submit" value="Send" name="submit">
</form> -->

</body>
</html>
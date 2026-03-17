<?php

// conditional statement
$user_type = "moderator";

if ($user_type === "admin") {
    //run code inside a scode
    echo "welcome admin <br>";
} else {
    echo "not an admin <br>";
}

$user_plan  = "pro";

if ($user_plan === "pro") {
    echo "you are a $user_plan user <br>";
}
else if ($user_plan === "semipro") {
    echo "you are a $user_plan user <br>";
}else if($user_plan === "agent"){
    echo "you are a $user_plan user <br>";
}
else {
    echo "you are using free mode <br>";
}


// switch statement
$user_level = "admin"; 

switch($user_level){
            case "admin" :
                echo "welcome admin <br>";
                break;
            ;

            case "user" :
                echo "you are just a normal user <br>";
                break ;
                ;

                case "moderator":
                    echo "moderators can only see users but don't have authority to regulate users <br>";
                    break;
                    ;

            default : echo "your user level is not defined <br>";
}


// logical operators:
/**
 * || === or
 * && === and
 * 
 */


$username = "kenneth";
$password = "password123";

if($username === "kenneth" && $password === "password"){
    echo "<br> login successful <br>";
}else{
    echo "<br> invalid password or username <br>";
}


$name = "";
$phone  = "";
$email = "dev@software.com";

if(empty($name) || empty($phone) || empty($email)){
    echo "<br> fields cannot be empty <br>";
}else{
    echo "<br> registration completed successfully <br>";
}

<?php

// $filteredname = '';
if (isset($_POST['name'])){
   $name = $_POST['name'];
    
}

if (isset($_POST['email'])){
    $email = $_POST['email'];
}

if($name != ""){
$name = filter_var($name, FILTER_SANITIZE_STRING, FILTER_SANITIZE_SPECIAL_CHARS);

echo "<h3>Hello $name <h3/>";
}else{
echo "<h3>Please go back and enter a username<h3/>";
};

if($email != ""){
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<h3>User name registered under $email<h3/>";
    }else{
        echo "Please go back and enter a valid email address";
    }
}else{
    echo "No email address entered.";
};

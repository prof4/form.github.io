<?php

//define variables and set to empty values
$name_error = $email_error = $phone_error = $url_error = "";
$name = $email = $phone = $message = $url = "";

//form is submitted with POST method
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])){
        $name_error= "Name is required";
    } else{
        $name = test_input($_POST["name"]);
        // check if name only contains lettes and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)){
            $name_error = "Only letters and whitespace allowed";
        }
    }
    if (empty($_POST["email"])){
        $email_error= "email is required";
    } else{
        $email = test_input($_POST["email"]);
        // check if correct
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $name_error = "Only letters and whitespace allowed";
        }
    }
    if (empty($_POST["discord"])){
        $discord_error= "dicordname#tag is required";
    } else{
        $discord = test_input($_POST["discord"]);
        // check if correct
        if (!preg_match("[a-z0-9]#[0-9]", $name)){
            $discord_error = "invalid dicordname#tag";
        }
    }
    if (empty($_POST["url"])){
        $url_error= "";
    } else{
        $url = test_input($_POST["url"]);
        // check if URL adress syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)){
            $url_error = "Invalid URL";
        }
    }
    if (empty($_POST["message"])){
        $message= "";
    } else{
        $message = test_input($_POST["message"]);
    }
    
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
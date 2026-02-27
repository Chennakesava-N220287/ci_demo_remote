<?php

function validate_user($name, $email, $password) {
    if (empty($name)) {
        return "Name is required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format";
    }

    if (strlen($password) < 12) {
        return "Password must be at least 6 characters";
    }

    return "Success";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = validate_user($_POST["name"], $_POST["email"], $_POST["password"]);
    echo $result;
}
?>
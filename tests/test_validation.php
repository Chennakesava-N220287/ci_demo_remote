<?php
require_once __DIR__ . '/../register.php';

function assertEqual($a, $b) {
    if ($a !== $b) {
        echo "Test Failed: $a is not equal to $b\n";
        exit(1);
    }
}

assertEqual(validate_user("John", "john@gmail.com", "123456"), "Success");
assertEqual(validate_user("", "john@gmail.com", "123456"), "Name is required");
assertEqual(validate_user("John", "invalid-email", "123456"), "Invalid email format");
assertEqual(validate_user("John", "john@gmail.com", "123"), "Password must be at least 6 characters");

echo "All tests passed\n";
?>
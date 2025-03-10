<?php

function classifyPasswords($passwords) {
    foreach ($passwords as $password) {
        $length = strlen($password);
        $hasNumber = preg_match('/[0-9]/', $password);
        $hasSpecialChar = preg_match('/[^a-zA-Z0-9]/', $password);

        if ($length >= 12 && $hasNumber && $hasSpecialChar) {
            echo $password . " => Strong\n";
        } elseif ($length >= 8 && $hasNumber) {
            echo $password . " => Moderate\n";
        } else {
            echo $password . " => Weak\n";
        }
    }
}

$passwords = ["password", "Pass1234", "Strong#Pass12", "abc12!", "12345678", "P@ssw0rdStrong"];
classifyPasswords($passwords);

?>

<?php
declare(strict_types=1);

function check_signup_errors() {
    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];
        echo "<br>";
        foreach ($errors as $error) {
            echo "<h1>" . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . "</h1>";
        }
        unset($_SESSION["errors_signup"]);
    }
    else {
        echo "<h2>No errors found.</h2>"; // For debugging, can be removed
    }
}

<?php
// Set session security configurations
ini_set("session.use_only_cookies", 1); // Enforce using only cookies for session ID
ini_set("session.use_strict_mode", 1);  // Prevent reuse of old session IDs

// Set session cookie parameters
session_set_cookie_params([
    "lifetime" => 1000,        // Session cookie lifetime
    "domain" => "localhost",   // Domain scope
    "path" => "/",             // Path scope
    "secure" => false,         // Use true if HTTPS is enabled
    "httponly" => true         // Prevent JavaScript access to cookies
]);

// Start the session
session_start();

// Regenerate session ID if necessary
if (!isset($_SESSION["last_generated"])) {
    session_regenerate_id(true); // True deletes the old session
    $_SESSION["last_generated"] = time();
} else {
    $interval = 60 * 30; // Interval for regenerating session ID (30 minutes)
    if (time() - $_SESSION["last_generated"] >= $interval) {
        session_regenerate_id(true);
        $_SESSION["last_generated"] = time();
    }
}
?>

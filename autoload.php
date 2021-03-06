<?php
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    header("Status: 301 Moved Permanently", false, 301);
    header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
    // si le fichier est appelé via un navigateur, rick roll ! :)
    // sinon, donner les variables a PHP
} else {
    // https://medium.com/@hfally/how-to-create-an-environment-variable-file-like-laravel-symphonys-env-37c20fc23e72
    $success = include "env.php";

    if (!$success) {
        echo "Missing env.php, copy env.example.php to env.php\n";
        die();
    }

    // <env function to get env vars>
    if (!function_exists("env")) {
        function env($key, $default = null)
        {
            $value = getenv($key);
            if ($value === false) {
                return $default;
            }
            return $value;
        }
    }
    // </env function to get env vars>
}
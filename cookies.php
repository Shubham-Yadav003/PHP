<?php
$cookie_name = 'user';
$cookie_value = 'Ramanujam';

// Set the cookie (expires in 30 days)
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');

// Check if the cookie is set
if (!isset($_COOKIE[$cookie_name])) {
    echo 'Cookie named "' . $cookie_name . '" is not set.';
} else {
    echo 'Cookie named "' . $cookie_name . '" is set. Value: ' . $_COOKIE[$cookie_name];
}
?>
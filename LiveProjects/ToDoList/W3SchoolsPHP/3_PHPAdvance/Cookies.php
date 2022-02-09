<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie("test_cookie", "test", time() + 3600, '/');

// To modify a cookie, just set (again) the cookie using the setcookie() function:

// To delete a cookie, use the setcookie() function with an expiration date in the past:
// set the expiration date to one hour ago
// setcookie("user", "", time() - 3600);
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}

echo "<br>";
// The following example creates a small script that checks whether cookies are enabled. 
// First, try to create a test cookie with the setcookie() function, then count the $_COOKIE array variable:

if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
  } else {
    echo "Cookies are disabled.";
  }


?>



</body>
</html>
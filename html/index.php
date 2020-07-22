<?php

/**
 * cookie
 * index.php
 * @since 2020/07/23
 */

$flag = '';

if ($_COOKIE["cookie_for_login"] != md5("admin")) {
  setcookie("cookie_for_login", md5("guest"));
} else {
  $flag = "FLAG{you_can_use_cookie}";
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Secret site</title>
</head>

<body>
  <div>
    <p>hey, you are "guest".</p>
    <p>login as "admin"!</p>
    <?php echo $flag ?></p>
  </div>
</body>
</html>
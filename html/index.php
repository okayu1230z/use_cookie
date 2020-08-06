<?php

/**
 * user_cookie
 * index.php
 * @since 2020/07/23
 */

$flag = '';

if ($_COOKIE["cookie_for_login"] != md5("admin")) {
  $user = 'guest';
  setcookie("cookie_for_login", md5("guest"));
} else if ($_COOKIE["cookie_for_login"] == md5("admin")) {
  $user == 'admin';
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
    <?php if ($user == 'guest') : ?>
      <p>Hey, you are <?php print $user ?>.</p>
      <p>Only "admin" can be used.</p>
    <?php elseif ($_COOKIE["cookie_for_login"] == md5("admin")): ?>
      <p><?php echo $flag ?></p>
      <p>Thank you for getting this flag.</p>
    <?php else : ?>
      <p>who are you??</p>
      <p>Only "admin" can be used</p>
    <?php endif; ?>
  </div>
</body>
</html>
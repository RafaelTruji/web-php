<?php
  if (isset($_POST['validate'])) {
    echo isset($_POST['validate']);
    echo "User name: $_POST[login_email] <br>";
    echo "User pass: $_POST[login_password] <br>";
  }
?>

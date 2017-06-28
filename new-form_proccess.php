<?php
  include 'include/db.php';

if (isset($_POST['submit-form'])) {
  $name = strip_tags($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = strip_tags($_POST['subject']);
  $gender = $_POST['gender'];
  $country = $_POST['country'];
  $comments = trim($_POST['comments']);
  if (empty($_POST['skill1'])) {
    $skill1 = "";
  } else {
    $skill1 = $_POST['skill1'];
  }
  if (empty($_POST['skill2'])) {
    $skill2 = "";
  } else {
    $skill2 = $_POST['skill2'];
  }
  if (empty($_POST['skill3'])) {
    $skill3 = "";
  } else {
    $skill3 = $_POST['skill3'];
  }
  if (empty($_POST['skill4'])) {
    $skill4 = "";
  } else {
    $skill4 = $_POST['skill4'];
  }

  $ins_sql = "INSERT INTO comments (name, email_address, subject, gender, skill1, skill2, skill3,skill4, country, comments)
              VALUES ('$name' , '$email', '$subject', '$gender', '$skill1', '$skill2', '$skill3', '$skill4', '$country',
                      '$comments') ";
  $run_sql = mysqli_query($conn, $ins_sql);
} else {
  echo 'ERROR';
}


 ?>

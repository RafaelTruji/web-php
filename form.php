<?php
  $name = '';
  $email = '';
  $subject = '';
  $gender = '';
  $comments = '';
  $skills1 = '';
  $skills2 = '';
  $skills3 = '';
  $skills4 = '';
  $country = '';
  $result = '';

  if (isset($_POST['validate'])) {

    if ($_POST['name'] == '' ) {
      $name = '<span style="color:red">The name field is empty</span>';
    }
    else {
      $name = '<span style="color:green;">'.htmlspecialchars($_POST['name']).'</span>';
    }
    if ($_POST['email'] == '' ) {
      $email = '<span style="color:red">The email field is empty</span>';
    }
    else {
      $email = htmlspecialchars($_POST['email']);
    }
    if ($_POST['subject'] == '' ) {
      $subject = '<span style="color:red">The subject field is empty</span>';
    }
    else {
      $subject = htmlspecialchars($_POST['subject']);
    }
    if ($_POST['comments'] == '' ) {
      $comments = '<span style="color:red">The comments field is empty</span>';
    }
    else {
      $comments = htmlspecialchars($_POST['comments']);
    }
     if ($_POST['gender'] == '' ) {
       $gender = '<span style="color:red">The gender field is empty</span>';
     }
     else {
       $gender = htmlspecialchars($_POST['gender']);
     }
    // if ($_POST['skills1'] == '' ) {
    //   $skills1 = '<span style="color:red">The skills1 field is empty</span>';
    // }
    // else {
    //   $skills1 = htmlspecialchars($_POST['skills1']);
    // }
    // if ($_POST['skills2'] == '' ) {
    //   $skills2 = '<span style="color:red">The skills2 field is empty</span>';
    // }
    // else {
    //   $skills2 = htmlspecialchars($_POST['skills12']);
    // }
    // if ($_POST['skills3'] == '' ) {
    //   $skills3 = '<span style="color:red">The skills3 field is empty</span>';
    // }
    // else {
    //   $skills3 = htmlspecialchars($_POST['skills3']);
    // }
    // if ($_POST['skills4'] == '' ) {
    //   $skills4 = '<span style="color:red">The skills4 field is empty</span>';
    // }
    // else {
    //   $skills4 = htmlspecialchars($_POST['skills4']);
    // }
    if ($_POST['country'] == '' ) {
      $country = '<span style="color:red">The country field is empty</span>';
    }
    else {
      $country = htmlspecialchars($_POST['country']);
    }



    // echo "The name is:  " . htmlspecialchars( $_POST['name']) . '<br>';
    // echo "The email is: $_POST[email] <br>";
    // echo "The subject is: $_POST[subject] <br>";
    // echo "The comments are: $_POST[comments] <br>";
  }
  else {
    $result = 'Sorry there&apos;s no request we recived <br>';
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP form</title>
  </head>
  <body>
    <div class="">
      <form method="post" action="<?php echo  $_SERVER['PHP_SELF'];?>">
        <table>
          <tr>
            <td>Name *</td>
            <td><input type="text" name="name" value=""><?php echo $name ?></td>
          </tr>
          <tr>
            <td>email-a *</td>
            <td><input type="text" name="email" value=""><?php echo $email ?></td>
          </tr>
          <tr>
            <td>Subject *</td>
            <td><input type="text" name="subject" value=""><?php echo $subject ?></td>
          </tr>
          <tr>
            <td>Your gender *</td>
            <td>Male:<input type="radio" name="gender" value="male">Female:<input type="radio" name="gender" value="female"><?php echo $gender ?></td>
          </tr>
          <tr>
            <td>Skills</td>
            <td><input type="checkbox" name="skills1" value="hmtl">hmtl
              <input type="checkbox" name="skills2" value="css">css
            <input type="checkbox" name="skills3" value="js">js
          <input type="checkbox" name="skills4" value="php">php</td>
          </tr>
          <tr>
            <td>Country</td>
            <td>
              <select  name="country">
                <option value="">Select a country</option>
                <option value="spain">spain</option>
                <option value="france">france</option>
                <option value="russia">russia</option>
              </select>
              <?php echo $country ?>
            </td>
          </tr>
          <tr>
            <td>Comments</td>
            <td><textarea name="comments" ></textarea><?php echo $comments ?></td>
          </tr>
          <tr>
            <td><input type="hidden" name="validate" value="yes"></td>
            <td><input type="submit" name="login_submit" value="Submit"></td>
          </tr>
        </table>
        <?php echo $result; ?>
      </form>
    </div>
  </body>
</html>

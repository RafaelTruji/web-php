
<?php include 'include/db.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Retrieving data from database</title>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">

  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <h1>User Details</h1>
        <p>Let just get the complete details</p>

<?php
if (isset($_GET['user_id'])) {
  $sql = "SELECT * FROM comments WHERE id = '$_GET[user_id]'";
  $run = mysqli_query($conn, $sql);
  while ($rows = mysqli_fetch_assoc($run)){
    echo '
    <div class="row">
      <div class="col-sm-3"><strong>Name:</strong></div>
      <div class="col-sm-3">'.$rows['name'].'</div>
    </div>
    <div class="row">
      <div class="col-sm-3"><strong>Email:</strong></div>
      <div class="col-sm-3">'.$rows['email_address'].'</div>
    </div>
    <div class="row">
      <div class="col-sm-3"><strong>Subject:</strong></div>
      <div class="col-sm-3">'.$rows['subject'].'</div>
    </div>
    <div class="row">
      <div class="col-sm-3"><strong>gender:</strong></div>
      <div class="col-sm-3">'.$rows['gender'].'</div>
    </div>
    <div class="row">
      <div class="col-sm-3"><strong>Skills:</strong></div>
      <div class="col-sm-3">'.$rows['skill1'].'</div>
    </div>
    <div class="row">
      <div class="col-sm-3"><strong>Country:</strong></div>
      <div class="col-sm-3">'.$rows['country'].'</div>
    </div>
    <div class="row">
      <div class="col-sm-3"><strong>Comments:</strong></div>
      <div class="col-sm-3">'.$rows['comments'].'</div>
    </div>
    ';
  }

}
 ?>






      </div>

</div>
  </body>
</html>

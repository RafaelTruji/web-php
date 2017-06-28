
<?php include 'include/db.php';
  //////DELETE rows
    if (isset($_GET['del_id'])) {
      $del_sql = "DELETE FROM comments WHERE id = '$_GET[del_id]'";
      $run_sql = mysqli_query($conn,$del_sql);
    }
 ?>


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
    <div class="container-fluid">


    <table class="table table-striped">
      <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <!-- <th>Subject</th> -->
        <th>Gender</th>
        <!-- <th>Skills</th> -->
        <!-- <td>'.$rows['skill1'].','.$rows['skill2'].','.$rows['skill3'].','.$rows['skill4'].',' .'</td> -->
        <th>Country</th>
        <th>Acess</th>
        <th>Delete</th>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM comments";
          $run_sql = mysqli_query($conn,$sql);

          while ($rows = mysqli_fetch_array($run_sql)) {
            // echo $rows['subject'] . '<br>';
            // echo $rows['comments'] . '<br>';
            echo '
                  <tr>
                    <td>'.$rows['id'].'</td>
                    <td>'.$rows['name'].'</td>
                    <td>'.$rows['email_address'].'</td>
                    <td>'.$rows['gender'].'</td>
                    <td>'.$rows['country'].'</td>
                    <td><a class="btn btn-info" href="detail.php?user_id='.$rows['id'].'"">Access</a></td>
                    <td style="vertical-align:middle !important;"><a class="btn btn-danger btn-xs"  href="index.php?del_id='.$rows['id'].'">Delete</></td>
                  </tr>
                 ';
          }

         ?>

      </tbody>

    </table>
</div>
  </body>
</html>

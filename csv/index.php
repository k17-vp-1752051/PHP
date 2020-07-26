<?php
$connect = new mysqli ('localhost', 'user', '123', 'demo') or die("Fail!");
$query = "SELECT * FROM class ORDER BY ClassID DESC";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CSV</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
    <form method ="post" action="export.php">
    <input type="submit" name="export" value="CSV Export"/>
    </form>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ClassID</th>
      <th scope="col">ClassName</th>
    </tr>
  </thead>

  <?php
  while($row = mysqli_fetch_array($result)){
      ?>
      <tr>
        <td><?php echo $row["ClassID"]; ?></td>
        <td><?php echo $row["ClassName"]; ?></td>
      </tr>
      <?php
  }
  ?>
  </table>

  <form action ="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="import" required="required">
        <input type="submit" value="Import" name="sub"/>
        </form>

        <?php
       
        include ("import.php");
        $imp = new import();
        if(isset($_POST['sub'])){
      
          $imp->importFile($_FILES['file']['tmp_name']);
        }
        
        ?>
    </body>
</html>
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
    <!-- <form method ="post" action="export.php">
    <input type="submit" name="export" value="CSV Export"/>
    </form> -->
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
   <form method ="post" action="export.php">
    <input type="submit" name="export" value="CSV Export"/>
    </form>

  <!-- <form action ="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="file" required="required">
        <input type="submit" value="Import" name="sub"/>
        </form> -->

        <?php
       
      //   include ("import.php");
      //   $imp = new import();
      //   if(isset($_POST['sub'])){
      // if(isset($FILES['file'])){
      //   echo "success";
      // }else{
      //   echo "fail";
      // }
      //    // $imp->importFile($_FILES['file']['tmp_name']);
      //     //echo $_FILES['file'];
      //   }
        
        ?>

<table width="600">
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">

<tr>
<!-- <td width="20%">Select file</td> -->
<td width="80%"><input type="file" name="file" id="file" /></td>
</tr>

<tr>
<!-- <td>Submit</td> -->
<td><input type="submit" name="submit" /></td>
</tr>

</form>
</table>

<?php
//include ("import.php");

function importFile($file){
  $file = fopen($file, 'r');
  $i = 0;
  $class = rtrim($_FILES['file']['name'], ".csv");
  $start_row = 1;
  // $connect = new mysqli ('localhost', 'user', '123', 'demo') or die("Fail!");
  while($row = fgetcsv($file)){

    if($i >=$start_row){
      
      $ClassID = $row[0];
      $ClassName = $row[1];
      
      $q = "INSERT INTO `class`(`ClassID`, `ClassName`) VALUES ('$ClassID','$ClassName')";
      echo $q;
      mysqli_query($GLOBALS['connect'],$q);
      echo $q, "<br>";

     
    }
    $i++;
   
  }

 
}

if ( isset($_POST["submit"]) ) {

  if ( isset($_FILES["file"])) {

           //if there was an error uploading the file
       if ($_FILES["file"]["error"] > 0) {
           echo "Return Code: " . $_FILES["file"]["error"] . "<br />";

       }
       else {
                //Print file details
            // echo "Upload: " . $_FILES["file"]["name"] . "<br />";
            // echo "Type: " . $_FILES["file"]["type"] . "<br />";
            // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
            // echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

                //if file already exists
            if (file_exists("upload/" . $_FILES["file"]["name"])) {
           echo $_FILES["file"]["name"] . " already exists. ";

           $imp = importFile($_FILES['file']['tmp_name']);


           
            }
            else {
                  //Store file in directory "upload" with the name of "uploaded_file.txt"
           $storagename = "file.csv";
          // move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $storagename);
           echo "Stored in: " . "upload/" . $_FILES["file"]["name"] . "<br />";
           }
       }
    } else {
            echo "No file selected <br />";
    }
}

?>
    </body>
</html>
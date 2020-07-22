<?php
    $link = new mysqli ('localhost', 'user', '123', 'demo') or die("Fail!");
    mysqli_select_db($link,"demo") or die(mysql_error());
    
    if(isset($_GET['order'])){
        $order = $_GET['order'];
    }else{
        $order='ClassID';
    }

    if(isset($_GET['sort'])){
        $sort = $_GET['sort'];
    }else{
        $sort = 'ASC';
    }

    $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';

?>

<!DOCTYPE html>
 <html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="css/style1.css">
        <title>Class</title>
        
    </head>
    <body>
    <div class="container">
        <div class="content">
        <form action="class.php" method="GET">
	            <input type="text" name="query" />
	            <input type="submit" value="Search" /><br><br>
            </form>
        

        <div id = "noidung">
        <table width = "25%">
            <tr>
                <th>STT</th>
              
                <th><a href='?order=ClassID&&sort=<?php echo  $sort;?>'>ClassID</></a></th>
                <th><a href='?order=ClassName&&sort=<?php echo  $sort;?>'>ClassName</th>
            </tr>
        </div>
        </div>

    </div>

</body>
</html>


<?php
    $query = "SELECT * FROM class ORDER BY $order $sort";
    $result = mysqli_query($link, $query);
    if(mysqli_num_rows($result) > 0){
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $i++;
            $ClassID = $row['ClassID'];
            $ClassName = $row['ClassName'];
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$ClassID</td>";
            echo "<td>$ClassName</td>";
            echo "</td>";
            echo "<td><a href='delete.php?id=$ClassID'>Delete</a>
            <a href='update.php?id=$ClassID'>Update</a></td></tr> ";
        }
    }

    $link = new mysqli ('localhost', 'user', '123', 'demo');
    if(isset($_GET['order'])){
        $order = $_GET['order'];
    }else{
        $order='ClassID';
        
    }



?>
        </table>
        <table>
        <form method="post">
            <tr>
                <td>ClassID</td>
                <td><input type="text" name="ClassID"/>
            </tr>

            <tr>
                <td>ClassName</td>
                <td><input type="text" name="ClassName"/>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Add" name="insert"/>
            </tr>

        </table>
        </form>
<?php
    if(isset($_POST['insert'])){
        $ClassID = $_POST['ClassID'];
        $ClassName = $_POST['ClassName'];
        $query = "INSERT INTO class VALUE('$ClassID','$ClassName')";
        mysqli_query($link, $query) or die("Fail!");
        header('location:class.php');
    }
?>

<?php

    $query = $_GET['query']; 
    $min_length = 1;

    if(strlen($query) >= $min_length){   
        $query = htmlspecialchars($query); 
        $query = mysqli_real_escape_string($link, $query);
        $raw_results = mysqli_query($link, "SELECT * FROM class
            WHERE (`ClassID` LIKE '%".$query."%') OR (`ClassName` LIKE '%".$query."%')") or die(mysql_error());
         
        if(mysqli_num_rows($raw_results) > 0){ 
            while($results = mysqli_fetch_array($raw_results)){ 
                echo "<p><h3>".$results['ClassID']."</h3>".$results['ClassName']."</p>";
               
            } 
        }
        else{
            echo "No results";
        }   
   }
   else{ 
       echo "Minimum length is ".$min_length;
   }
?>

<?php
    $link = new mysqli ('localhost', 'user', '123', 'demo');
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
    
    $resultset = mysqli_query($link, "SELECT * FROM class ORDER BY $order $sort");
    if($resultset){

        $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';
        echo"
        <table boder='1'>
            <tr>
                <th><a href='?order=ClassID&&sort=$sort'>ClassID</></a></th>
                <th><a href='?order=ClassName&&sort=$sort'>ClassName</th>
                "; 
        while($rows=mysqli_fetch_assoc($resultset))
        {
            $ClassID = $rows['ClassID'];
            $ClassName = $rows['ClassName'];
               
        echo" 
        <tr>
            <td>$ClassID</td>
            <td>$ClassName</td>
        </tr>      ";
        }
        echo"
        </table>
";
    }else{
        echo "No records returned.";
    }
?>
<!DOCTYPE html>
 <html> 
    <head>
        <title>Sort</title>
        <style>
            table, tr, td, th
            {
                border: 1px solid black;
            }
        </style>
        
    </head>
    <body>
        <form action="search.php" method="post">


</form>
    </body>
</html>
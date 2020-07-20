<?php
    $link = new mysqli ('localhost', 'user', '123', 'demo') or die("Fail!");
?>

<h1>Content</h1>
    <div id = "noidung">
        <form method="post">
            Classname: <input type = "text" name = "ClassName" value="<?php $_GET['id'] ?>"/>
            <input type = "submit" name="update" value= "add"/>
        </form>

<?php
    if(isset($_POST['update'])){
        $ClassName = $_POST['ClassName'];
        $ClassID = $_GET['id'];
        $query = "UPDATE class SET ClassName = '$ClassName' WHERE ClassID = '$ClassID'";
        $result = mysqli_query($link, $query) or die("Fail!");
        header('location:class.php');
    }
?>
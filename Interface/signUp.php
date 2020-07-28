<?php
    $link = new mysqli ('localhost', 'user', '123', 'demo') or die("Fail!");
    mysqli_select_db($link,"demo") or die(mysql_error());
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/signUp.js" defer></script>

    </head>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="#" method="post" onsubmit = "return myfun()">
                    <h1>Create Account</h1>
                    <span>or use your email for registration</span>
                    <input type="text" placeholder="Username" id="name" name="username" value=""/>
                    <span id="messages1" style="color:red"></span>

                    <input type="email" placeholder="Email" id="mail" name="mail" value=""/>
                    <span id="messages2" style="color:red"></span>

                    <input type="password" placeholder="Password" id="password" name="password" value=""/>
                    <span id="messages" style="color:red"></span>

                    <input type="Confirm password" placeholder="Confirm password" id="passwords" name="passwords" value=""/>   
                    <button type="submit" class="btn btn-default" name="dangky">Sign Up</button>


<?php
		if(isset($_POST["dangky"])){
			$username = $_POST["username"];
			$password = $_POST["password"];
			$passwords = $_POST["passwords"];
			$mail = $_POST["mail"];
			
			if($password!=$passwords){
				header("location:signUp.php?page=dangky");
				setcookie("error", "Fail!", time()+1, "/","", 0);
			}
			else{
				$pass = md5($password);
				// mysqli_query($link,"
				// 	INSERT INTO account (UserName, ID, Email, Password)
				// 	values ('$username','$pass', '$mail')
                // ");
                
                $query = "INSERT INTO account VALUE('$username','$pass', '$mail')";
                mysqli_query($link, $query) or die("Fail!");

				header("location:signUp.php");
				setcookie("success", "Successful!", time()+1, "/","", 0);
			}
		}
 
?>

<?php
		if(isset($_GET["page"])&&$_GET["page"]=="dangky")
            include "signUp.php";
    ?>

<div class="row">
	<?php
		if(isset($_COOKIE["error"])){
    ?>
    
			<div class="alert alert-danger">
			  	<strong>'error'</strong> <?php echo $_COOKIE["error"]; ?>
			</div>
			<?php } ?>
			
			<?php
				if(isset($_COOKIE["success"])){
			?>
			<div class="alert alert-success">
			  	<strong>'Congratulate: '</strong> <?php echo $_COOKIE["success"]; ?>
			</div>
            <?php } ?>
			
 
		</div>

                </form>
            </div>

            <div class="form-container sign-in-container">
                <form action="signUp.php" method="POST">
                    <h1>Sign in</h1>
                    <span>or use your account</span>
                    <input type="email" placeholder="Email" name="mail"/>
                    <input type="password" placeholder="Password" name="pass"/>
                    <a href="#">Forgot your password?</a>
                    <button type="submit" class="btn btn-default" name="dangnhap">Sign In</button>
                

                    <!-- sign in -->
                <?php
                    if(isset($_POST['dangnhap'])){
                        $mail = mysqli_real_escape_string($link, $_POST['mail']);
                        $pass = mysqli_real_escape_string($link, $_POST['pass']);
                        $pass = md5($pass);
                        $sql = "SELECT * FROM account WHERE Email = '$mail' and Password = '$pass'";
                        $query=mysqli_query($link, $sql);
                        $num_row = mysqli_num_rows($query);
                        if($num_row != 0){
                            echo "<script>location.href='class.php';</script>";
                        }else{
                            echo "Email or Password is wrong!";
                        }
                    }
                    
                ?>
                </form>
            </div>
        </div>

    </body>
</html>
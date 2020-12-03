<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

    include 'dbcon.php';

    if(isset($_POST['submitL'])){
        $email = $_POST['emailL'];
        $password = $_POST['passwordL'];
    
        $email_search = " select * from registration where email='$email' ";
        $query = mysqli_query($con, $email_search);
        $email_count = mysqli_num_rows($query);
    
        if($email_count){
            $email_pass = mysqli_fetch_assoc($query);
    
            $db_pass = $email_pass['password'];
    
            $pass_decode = password_verify($password, $db_pass);
    
            if($pass_decode){
                ?>
                <script>
                    alert("Login Successful");
                    location.replace("index.html");
                </script>
                <?php
                
                
                }else{
                    ?>
                    <script>alert("Password Incorrect");</script>
                <?php
                
                }
            }else{
                ?>
                    <script>alert("Invalid Email");</script>
                <?php
            }
        }

?>

<form action = "<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"
    method="POST">
    <div class="popup hide" id="pop">
        <div class="login-box">
            <div class="cancel" >
                <a href="index.html" target="_self"><button class="cancel-btn" type="button"  name="">X</button></a>
            </div>
            <h1>Login</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Email-ID" name="emailL">
            </div>
        
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="passwordL">
            </div>
        
        <input class="btn" type="submit" name="submitL">
        
            <div class="signin">
                <p>don't have an accout?<a href="signin.php" target="_self"><button class="signin-btn" type="button" onclick="">Sign-in</button></a></p>
            </div>
        </div>
    </div>
</form>  



</body>
</html>
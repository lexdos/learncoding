<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign-in Page</title>
    <link rel="stylesheet" href="signin.css">   
</head>
<body>

    <?php
    //Signup validation 
    include 'dbcon.php';
    
    if(isset($_POST['submitS'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $username = mysqli_real_escape_string($con, $_POST['usernameS']);
        $password = mysqli_real_escape_string($con, $_POST['passwordS']);
    
        $pass = password_hash($password, PASSWORD_BCRYPT);
    
        $emailquery = " select * from registration where email='$email' ";
        $query = mysqli_query($con, $emailquery);
    
        $emailcount = mysqli_num_rows($query);
    
        if($emailcount>0){
            ?>
            <script>
                alert("Email already exists");
            </script>
        <?php
        }else{
            $insertquery = "insert into registration(email, username, password) values('$email', '$username', '$pass')";
            $iquery = mysqli_query($con, $insertquery);
    
            if($iquery){
                ?>
                    <script>
                        alert("Registered Successfully");
                        location.replace("index.html");
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        alert("Unable to Register");
                    </script>
                <?php
            }
        }
    }
    
    ?>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" 
        onsubmit="validateSigninForm();return false"
        method="POST">
        <div class="popupS" id="popS">
            <div class="signin-box">
                <div class="cancelS">
                    <a href="index.html" target="_self"><button class="cancel-btn" type="button">X</button></a> 
                </div>
                <h1>Sign-in</h1>
                <div class="textboxS">
                    <i class="fa fa-id-badge" aria-hidden="true"></i>
                    <input type="text" placeholder="Email-id" name="email">
                </div>
    
                <div class="textboxS">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Username" name="usernameS">
                </div>
            
                <div class="textboxS">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Password" name="passwordS">
                </div>
            
            <input class="btnS" type="submit" name="submitS">
            
                <div class="Login">
                    <p>Have an accout?<a href="login.php" target="_self"><button class="login-btn" type="button">Log-in</button></a></p>
                </div>
            </div>
        </div>
        </form>

<script>
    function cancelS(){
        var cancelElement = document.getElementById("popS");
        if(cancelElement.style.display === "none"){
            cancelElement.style.display = "block";
        }else{
            cancelElement.style.display = "none";
        }
    }
</script>

</body>    
</html>
<!DOCTYPE html>
<html>
<head>
<title>Checking</title>
<link rel="stylesheet" href="Aboutus.css">
<link rel="stylesheet" href="test.css">
</head>
<body>

<div class="menubar" >
        <div class="leftmenu">
            <p>Learn Coding</p>
        </div>

        <div class="responsive_menu">
            <i class="fa fa-bars fa-2x" aria-hidden="true" onclick="responsive_menu()"></i>
        </div>

        

        <div class="menu_list" id="nav_links">
            <ul>
                <li class="link"><a href="index.html">Home</a></li>
                <li class="link"><a href="language.html">Languages</a></li>
                <li class="link"><a href="devlopment.html">Development</a></li>
                <li class="link"><a href="aboutus.php">About Us</a></li>
                <li class="link"><a href="frequently_asked_Question.html">FAQ</a></li>
                <li class="link"><a href="login.php" class="logSign">Login/Sign-in</a></li>
            </ul> 
        </div>
               
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="images\profile.png">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Devanshu</h3>
                        <span class="post">Web Developer</span>
                    </div>
                    <ul class="social">
                        <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                        <li><i class="fa fa-google-plus-square" aria-hidden="true"></i></li>
                        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                        <li><i class="fa fa-linkedin-square" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="images\profile.png">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Rakshit</h3>
                        <span class="post">Web Developer</span>
                    </div>
                    <ul class="social">
                        <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                        <li><i class="fa fa-google-plus-square" aria-hidden="true"></i></li>
                        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                        <li><i class="fa fa-linkedin-square" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="images\profile.png">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Shoaib</h3>
                        <span class="post">Web Developer</span>
                    </div>
                    <ul class="social">
                        <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
                        <li><i class="fa fa-google-plus-square" aria-hidden="true"></i></li>
                        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                        <li><i class="fa fa-linkedin-square" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<script>

function responsive_menu(){
    var e = document.getElementById("nav_links");
    if(e.className === 'menu_list'){
        e.className += " responsive";
    }else{
        e.className = 'menu_list';
    }
}

</script>

</body>
</html>
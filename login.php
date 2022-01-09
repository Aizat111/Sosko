<!DOCTYPE html>
<html>
<head>
    <title>Log in Screen</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<div class="body1">
    <div class="welcome">
        <h1>
            Welcome to <br> <span style="color:#3cb371 ">SOSKO.</span> 
        </h1>
    </div>
    <div class="form">
        <form  autocomplete="off" method="post" name="form1" action="logindb.php" >

            <div class="input-icons">
            <i class="fa fa-envelope icon"></i>
            <input class="forms" name="username" type="text"  autocomplete="off"  placeholder="Username">
            </div>
            <br>
            <div class="input-icons">
            <i class="fa fa-key icon"></i>
            <input class="forms" name="password" type="password"  autocomplete="off"  placeholder="Password">
            </div>
            <div class="forgetPassword">
            <a href=""> Forget password?</a>
            <br><br><br><br><br><br>
            </div>
            <input class="btn" type="submit" name="submit" value="Log In">
            <div class="signin">Don't have a account?
                <a href="signin.php">Sign In</a>
            </div>
        </form>
    </div>
    
</div>
</body>

</html>
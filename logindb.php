<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Opertaions</title>
</head>
<body>
    <?php
 
    $mysqli= new mysqli("localhost:3307","root","","test");
    if($mysqli->connect_errno)
    {
        printf("Connect failed: %s <br />\n",$mysqli->connect_error);
        exit();
    }
  
    if(isset($_POST['username'])&& isset($_POST['password']))
    {
        $username=$_POST["username"];
        $password=$_POST["password"];
        $result=$mysqli->query("select ID from users where Username='$username' and Password='$password'");
        $rowcount=mysqli_num_rows($result);
        if($rowcount==0)
        {
            echo "Kullanici adi veya sifre yanlis";
        }
        else
        {
            echo "Giris basarili";
        }
        
    }
   
    ?>
</body>
</html>

<html>
<head>
    <title>Random</title>
    <style type="text/css">
        p {
color:white;
font-size:50px;
position: absolute;
top: 20%;
left: 40%;
transform: translate(-50%, -50%);
}
    </style>

</head>
<body style="background-color: black;color: yellow;">
    <center>
        <form method="post">
    <table border="1">
        <tr>
            <th colspan="2"> Login Sessions</th>
        </tr>
        <tr>
            <th>Username</th><th><input type="text" name="username"></th>
        </tr>
        <tr>
            <th>Password</th><th><input type="password" name="password"></th>
        </tr>        
        <tr hidden="">
            <th>count</th><th><input type="number" name="count"></th>
        </tr>
        <tr>
            <th colspan="2"><input type="submit" name="login" value="Login"><input type="submit" name="logout" value="Logout"></th>
        </tr> 
    </table>
</form>
    </center>
<?php


if(isset ($_POST["login"]))
{
        session_start();
        
if(($_SESSION["user_name"]==$_POST['username']) && ($_SESSION["password"]=$_POST['password']) && ($_SESSION["count"]>=1))
{
echo"welcome back";

$_SESSION['count'] += 1;
echo "You have logged in ".$_SESSION['count'] ."times";
}
else 
{

$_SESSION["user_name"]=$_POST['username'];
$_SESSION["password"]=$_POST['password'];
echo $_SESSION["user_name"];
$_SESSION['count'] = 1;
echo"<br>This is your first visit";
} }
if(isset ($_POST['logout'])){
$_SESSION['count'] = 0;
echo $_SESSION["user_name"]=$_POST['username'];
SESSION_unset();
echo"Logged Out";
}
?>
</body>
</html>
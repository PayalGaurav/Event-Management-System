<br />
<h1 class="header" align="center">LOGIN &nbsp;&nbsp;PAGE</h1>
<br />
<hr color="red" size="5" />
<?php
/*if(isset($_COOKIE["fullname"]))
{
    header("location:UserHome.php");
}*/
require "dbconnection.php";
?>
<head> 
<style>

.header
{
    color: white;
}

.maintable
{
    margin-left: 80px;
    width: 90%;
}

.login
{
    background-color: silver;
    color: black;
    width: 70%;
    margin: auto;
    margin-top: 20%;
    border: 4px solid black;
    border-collapse: collapse;
}
.login tr:first-child
{
    text-align: center;
    height: 60px;
    text-transform: uppercase;
    
}
.login td
{
    
    border: 1px solid;
    border-collapse: collapse;
    height: 60px;
    padding: 5px;
}
input[type="text"]
{
    height: 65%;
    width: 85%;
}
input[type="password"]
{
    height: 65%;
    width: 85%;
}
</style>
</head>
<body background="./Colours/darkmaroon.jpg">
<form method="post">
<br />
<table class="maintable">
<tr><td>
<table class="login">
<tr><td colspan="2">Login As Administrator</td></tr>
<tr><td>User Name :</td>
<td><input type="text" name="txtadmin" /></td>
</tr>
<tr><td>Password :</td>
<td><input type="password" name="txtpswdadmin" /></td>
</tr>
<tr>
<td><input type="checkbox" name="checkadmin" />Remember Me</td>
<td><input type="submit" name="btnloginadmin" value="LOGIN"/></td>
</tr>
<?php
    if (isset($_POST["btnloginadmin"]))
    {
        $username=$_POST["txtadmin"];
        $password=$_POST["txtpswdadmin"];
        $authquery="select username from Admin where username='$username' and password='$password'";
        //require 'dbconnection.php';
        $result=@mysqli_query($link,$authquery)or die(mysqli_error($link));
        if($row=mysqli_fetch_assoc($result))
        {
            session_start();
            $_SESSION["fullname"]=$row["username"];
            $_SESSION["logintime"]=date("d/m/y,h:i:s a");
            header("location:AdminHome.php");
        }
        else
        {
            echo "<font color=red size=4>Invalid UserName/Password</font>";
        }
        
    }
?>

</table>
</td>
<td>
<table class="login">
<tr><td colspan="2">Login As Participant</td></tr>
<tr><td>User Name :</td>
<td><input type="text" name="txtuser" /></td>
</tr>
<tr><td>Password :</td>
<td><input type="password" name="txtpswd" /></td>
</tr>
<tr>
<td><input type="checkbox" name="check" />Remember Me</td>
<td><input type="submit" name="btnlogin" value="LOGIN"/></td>
</tr>
<?php
    if (isset($_POST["btnlogin"]))
    {
        $username=$_POST["txtuser"];
        $password=$_POST["txtpswd"];
        $authquery="select p_id from participants where p_name='$username' and password='$password'";
        //require 'dbconnection.php';
        $result=@mysqli_query($link,$authquery)or die(mysqli_error($link));
        if($row=mysqli_fetch_assoc($result))
        {
            session_start();
            $_SESSION["participantID"]=$row["p_id"];
            $_SESSION["logintime"]=date("d/m/y,h:i:s a");
            header("location:ParticipantHome.php");
        }
        else
        {
            echo "<font color=red size=4>Invalid UserName/Password</font>";
        }
        
    }
?>

</table>
</td>
</tr>
</table>
</form>
</body>


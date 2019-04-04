<html>
<head>
<style>

.title td
{
    width: 25px;
}

h1
{
    text-transform: uppercase;
    color: brown;
    font-weight: bold;
}
.image td
{
    width: 20%;
}
.menu
{
    list-style: none;
    background-color: black;
    height: 30px;
    padding-top: 10px;
    border-radius: 10px;
    width: 100%;
}
.menu>li
{
    display: inline-block;
    width: 19%;
    text-align: center;
}

.menu a
{
    color: white;
    text-decoration:  none;
    height: 100%;
    
}

.menu a:hover
{
    color: orange;
    text-decoration: underline;
    text-transform: uppercase;
}

.sidemenu
{
    margin-left: 5px;
    width: 200px;
}

.sidemenu td
{
    width: 200px;
    height: 25px;
}

.sidemenu input[type=submit]
{
    width: 150px;
    border-color: yellow;
    background-color: pink;
    text-align: left;
}

.opt
{
    width: 100%;
    text-align: left;
    background-color: pink;
    border-color: black;
    height: 30px;
    
}

.sidemenu th
{
    color: yellow;
    text-decoration: underline;
    text-decoration-color: white;
}

.rightmenu
{
    margin-left: 50px;
    color: beige;
    
}

.mq
{
    color: goldenrod;
}

.reg
{
    background-color: black;
    color: orange;
    height: 35px;
    width: 100px;
}

</style>
</head>
<body background="./Colours/NavyBlue.jpg">

<form method="post"> 
 <table class="title"><tr><td style="width: 100px;"></td><td style="width: 920px;"><img src="./Images/title.jpg" height="180px"width="600px"/> </td><td><input type="submit" class="reg" name="register" value="Register"/></td><td><input type="submit" class="reg" name="btnlogin" value="Login" /><?php if(isset($_POST["register"]))
 {header("location:RegistrationForm.php"); exit;}?><?php if(isset($_POST["btnlogin"])){header("location:LoginPage.php");exit;}?></td></tr></table>
 <table class="image">
<tr>
<td><img src="./Images/8th Grade Dance.jpg" width="100%" height="300px"/></td>
<td><img src="./Images/code.jpg" width="100%" height="300px"/></td>
<td><img src="./Images/band-live-graphic.jpg" width="100%" height="300px"/></td>
<td><img src="./Images/football.jpg" width="100%" height="300px"/></td>
<td><img src="./Images/quiz-image.jpg" width="100%" height="300px"/></td>
</tr>
</table>
<ul class="menu">
<li><a href="Home.php">Home</a></li>
<li><a href="About.php">About us</a></li>
<li><a href="Contact.php">Contact us</a></li>
<li><a href="Awards.php">Awards</a></li>
<li><a href="query.php">Query</a></li>
</ul>
<marquee class="mq" direction="right" height="80px" scrollamount="10" onmouseover="stop()" onmouseout="start()">
Now also in Lucknow, Chandigarh, Noida, Mohali, Amritsar and Hyderabad.<br />
Turned into top 10 event managing company in just five years!!!
</marquee>
<table>
<tr>
<td>
<table class="sidemenu"><th>
EVENTS</th>

<tr><td><input type="submit" name="culevt" value="CULTURAL EVENTS"/></td><?php if(isset($_POST["culevt"])){header("location:Cultural.php");exit;}?></tr>
<tr><td><input type="submit" name="techevt" value="TECHNICAL EVENTS"/></td><?php if(isset($_POST["techevt"])){header("location:Technical.php");exit;}?></tr>
<tr><td><input type="submit" name="funevt" value="FUN EVENTS"/></td><?php if(isset($_POST["funevt"])){header("location:Fun.php");exit;}?></tr>
<tr><td><input type="submit" name="litevt" value="LITERARY EVENTS"/></td><?php if(isset($_POST["litevt"])){header("location:Literary.php");exit;}?></tr>
<tr><td><input type="submit" name="musevt" value="MUSICAL EVENTS"/></td><?php if(isset($_POST["musevt"])){header("location:Musical.php");exit;}?></tr>
</table></td>
<td style="color: white;margin-left: 200px;">
<h2>Welcome to India's Leading Event Management Company.<br /></h2>
<p style="color: chocolate;font-size: large;">

-We organise recreational events all over the country in 14 states in which students from <br />
different colleges or schools can participate.


</p>
</td>
<td>
<h3 style="color: yellowgreen;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LATEST EVENT !! !!</h3><br />
<table class="rightmenu">
<tr><td><b><u>21st and 22nd July</u> :</b><i>Cultural events</i></td></tr>
<tr><td><b><u>23rd July</u> : </b><i>Literary events</i></td></tr>
<tr><td><b><u>24th July</u> : </b><i>Technical events</i></td></tr>
<tr><td><b><u>25th July</u> : </b><i>Fun events</i></td></tr>
<tr><td><b><u>26th and 27th July</u> : </b><i>Musical events</i></td></tr>
</table>
</td>
</tr>
<tr><td colspan="3"><hr /></td></tr>
<tr>
<td>
Head office :<br />
Ashiana Galaxy, Exhibition Road, Patna.<br />
Office timing : 10:00 am to 8:00 pm
</td>
<td colspan="2">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Note: All the venues and timings can be changed or cancelled in case of emegency<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The company has all rights to cancel an event.<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
In any such case the money recieved from tickets or event registration will be returned back.
</td>
</tr>
</table>
</form>

</body>
</html>
<?php
/*
if(isset($_POST["culevt"]))
{
    header("location:Cultural.php");
    exit;
}

else if(isset($_POST["techevt"]))
{
    header("location:Technical.php");
    exit;
}

else if(isset($_POST["funevt"]))
{
    header("location:Fun.php");
    exit;
}

else if(isset($_POST["litevt"]))
{
    header("location:Literary.php");
    exit;
}

else if(isset($_POST["musevt"]))
{
    header("location:Musical.php");
    exit;
}
*/
?>
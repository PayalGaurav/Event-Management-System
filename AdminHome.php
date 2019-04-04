<?php 
require("dbconnection.php");
session_start();
if(isset($_SESSION["time"]))
{
    $difference=time()-$_SESSION["time"];
    if($difference>1800)
    {
        session_destroy();
        header("location:SessionExpire.php");
    }
}
    
$_SESSION["time"]=time();

?>
<head>

<style>

.op td
{
    width: 200px;
    color: beige;
}

.t
{
    border: 2px solid maroon;
    border-collapse: collapse;
}
.t td
{
    color: white;
    border: 1px solid maroon;
    border-collapse: collapse;
}

input[type=submit]
{
    width: 150px;
    height: 40px;
    border-color: beige;
    background-color: black;
    color: orange;
}

input[type=password]
{
    height: 25px;
    width: 150px;
}

input[type=text]
{
    height: 25px;
    width: 150px;
}

</style>

</head>
<body background="./Colours/DeepViolet.jpg">
<form method="post">
<h2 align="center" ><font color="beige">Welcome Admin</font></h2>
<br /><br />
<table align="center" class="op">
<tr>
<td>
<input type="submit" name="btn1" value="Participants Detail"/>
</td>
<td>
<input type="submit" name="btn2" value="Total Fees Collected"/>
</td>
<td>
<input type="submit" name="btn3" value="Event Details"/>
</td>
<td>
<input type="submit" name="btn6" value="Sign Out"/>
</td>
</tr>
</table>
<br /><br /><br /><br />
<table class="op">
<tr><td colspan="5" style="color: red;">To add another admin :</td></tr>
<tr>
<td>Enter new admin's username</td>
<td>
<input type="text" name="txtadmin" />
</td>
<td>Enter new admin's password</td>
<td>
<input type="password" name="adminpswd" />
</td>
<td>
<input type="submit" name="btn4" value="Add Another Admin"/>
</td>
</tr>
</table>
<br /><br /><br /><br />
<table class="op">
<tr><td colspan="3" style="color: red;">To change your password :</td>
</tr>
<tr>
<td>Enter new password</td>
<td>
<input type="password" name="change"  />
</td>
<td>
<input type="submit" name="btn5" value="Change Password"/>
</td>
</tr></table>
<br /><br /><br /><br />
<table>
<tr>
<td>
<?php 
if(isset($_SESSION["fullname"]))
{
    $n=$_SESSION["fullname"];
if(isset($_POST["btn1"]))
   {
       $selQry="select p_id,p_name,Gender,DOB,Age,Mobile,Email,Address,Event_city from participants";
       $result=@mysqli_query($link,$selQry)or die(mysqli_error($link));
       
       echo "<table align=center class=t>
       <tr>
       <td>Participant ID</td>
       <td>Participant Name</td>
       <td>Gender</td>
       <td>DOB</td>
       <td>Age</td>
       <td>Mobile</td>
       <td>Email</td>
       <td>Address</td>
       <td>Event City</td>
       </tr>";
       while($row=mysqli_fetch_row($result))
       {
           echo "<tr>";
           echo "<td>".$row[0]."</td>";
           echo "<td>".$row[1]."</td>";
           echo "<td>".$row[2]."</td>";
           echo "<td>".$row[3]."</td>";
           echo "<td>".$row[4]."</td>";
           echo "<td>".$row[5]."</td>";
           echo "<td>".$row[6]."</td>";
           echo "<td>".$row[7]."</td>";
           echo "<td>".$row[8]."</td>";
       }
       echo "</table>";
       
   }
if(isset($_POST["btn2"]))
   {
       $x=0;
       $selQry7="select fees from participants";
       $result7=@mysqli_query($link,$selQry7)or die(mysqli_error($link));
       while($row=mysqli_fetch_row($result7))
       {
          $x=$x+$row[0];
       }
       echo "<font color=white>Total fees Collected : ".$x."</font>";
   }
       
       
if(isset($_POST["btn3"]))
   {
       $selQry1="select e_id,e_name,e_date,e_time,e_fees,e_desc,participants_no from cultural_events";
       $result1=@mysqli_query($link,$selQry1)or die(mysqli_error($link));
       
       echo "<table class=t>
       <tr>
       <td>Event ID</td>
       <td>Event Name</td>
       <td>Event Date</td>
       <td>Event Time</td>
       <td>Event Fees</td>
       <td>Event Description</td>
       <td>No. of Participants</td>
       </tr>";
       while($row=mysqli_fetch_row($result1))
       {
           echo "<tr>";
           echo "<td>".$row[0]."</td>";
           echo "<td>".$row[1]."</td>";
           echo "<td>".$row[2]."</td>";
           echo "<td>".$row[3]."</td>";
           echo "<td>".$row[4]."</td>";
           echo "<td>".$row[5]."</td>";
           echo "<td>".$row[6]."</td>";
       }
       echo "</table>";
       
       
     $selQry2="select e_id,e_name,e_date,e_time,e_fees,e_desc,participants_no from technical_events";
       $result2=@mysqli_query($link,$selQry2)or die(mysqli_error($link));
       
       echo "<table class=t>
       <tr>
       <td>Event ID</td>
       <td>Event Name</td>
       <td>Event Date</td>
       <td>Event Time</td>
       <td>Event Fees</td>
       <td>Event Description</td>
       <td>No. of Participants</td>
       </tr>";
       while($row=mysqli_fetch_row($result2))
       {
           echo "<tr>";
           echo "<td>".$row[0]."</td>";
           echo "<td>".$row[1]."</td>";
           echo "<td>".$row[2]."</td>";
           echo "<td>".$row[3]."</td>";
           echo "<td>".$row[4]."</td>";
           echo "<td>".$row[5]."</td>";
           echo "<td>".$row[6]."</td>";
       }
       echo "</table>";
       
       $selQry3="select e_id,e_name,e_date,e_time,e_fees,e_desc,participants_no from literary_events";
       $result3=@mysqli_query($link,$selQry3)or die(mysqli_error($link));
       
       echo "<table class=t>
       <tr>
       <td>Event ID</td>
       <td>Event Name</td>
       <td>Event Date</td>
       <td>Event Time</td>
       <td>Event Fees</td>
       <td>Event Description</td>
       <td>No. of Participants</td>
       </tr>";
       while($row=mysqli_fetch_row($result3))
       {
           echo "<tr>";
           echo "<td>".$row[0]."</td>";
           echo "<td>".$row[1]."</td>";
           echo "<td>".$row[2]."</td>";
           echo "<td>".$row[3]."</td>";
           echo "<td>".$row[4]."</td>";
           echo "<td>".$row[5]."</td>";
           echo "<td>".$row[6]."</td>";
       }
       echo "</table>";
       
       $selQry4="select e_id,e_name,e_date,e_time,e_fees,e_desc,participants_no from fun_events";
       $result4=@mysqli_query($link,$selQry4)or die(mysqli_error($link));
       
       echo "<table class=t>
       <tr>
       <td>Event ID</td>
       <td>Event Name</td>
       <td>Event Date</td>
       <td>Event Time</td>
       <td>Event Fees</td>
       <td>Event Description</td>
       <td>No. of Participants</td>
       </tr>";
       while($row=mysqli_fetch_row($result4))
       {
           echo "<tr>";
           echo "<td>".$row[0]."</td>";
           echo "<td>".$row[1]."</td>";
           echo "<td>".$row[2]."</td>";
           echo "<td>".$row[3]."</td>";
           echo "<td>".$row[4]."</td>";
           echo "<td>".$row[5]."</td>";
           echo "<td>".$row[6]."</td>";
       }
       echo "</table>";
       
       $selQry5="select e_id,e_name,e_date,e_time from musical_events";
       $result5=@mysqli_query($link,$selQry5)or die(mysqli_error($link));
       
       echo "<table class=t>
       <tr>
       <td>Event ID</td>
       <td>Event Name</td>
       <td>Event Date</td>
       <td>Event Time</td>
       </tr>";
       while($row=mysqli_fetch_row($result5))
       {
           echo "<tr>";
           echo "<td>".$row[0]."</td>";
           echo "<td>".$row[1]."</td>";
           echo "<td>".$row[2]."</td>";
           echo "<td>".$row[3]."</td>";
       }
       echo "</table>";
       
       
   }
if(isset($_POST["btn4"]))
   {
       $name=$_POST["txtadmin"];
       $password=$_POST["adminpswd"];
       
       $insertQry="insert into admin values('$name','$password')";
       @mysqli_query($link,$insertQry)or die(mysqli_error($link));
       echo "<font color=green size=4>Admin Details Saved Successfully !!</font>";
    
   }
if(isset($_POST["btn5"]))
{
    $password=$_POST["change"];
    $upQry="update admin set password='$password' where username=$n ";
    @mysqli_query($link,$upQry)or die(mysqli_error($link));
       echo "<font color=green size=4>Admin Password updated Successfully !!</font>";
}


if(isset($_POST["btn6"]))
{
    header("location:Signout.php");
}
}
else
{
    if(isset($_POST["btn1"]))
    echo "<font color=white>You first need to login !!</font>"; 
   
    if(isset($_POST["btn2"]))
    echo "<font color=white>You first need to login !!</font>";
    
    if(isset($_POST["btn3"]))
    echo "<font color=white>You first need to login !!</font>"; 
   
    if(isset($_POST["btn4"]))
    echo "<font color=white>You first need to login !!</font>"; 
    
    if(isset($_POST["btn5"]))
    echo "<font color=white>You first need to login !!</font>"; 
}
?>
</table>
</td>
</tr>
</table>
</form>
</body>
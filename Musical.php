<?php
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
input[type="submit"]
{
    background-color: black;
    color: white;
    height: 35px;
    width: 120px;
    border-color: orange;
}

.pd1
{
    color: beige;
}

</style>
</head>
<body>
<table>
<tr>
<?php
require "Header.php";
?>
</tr>
</table>
<form method="post">
<table style="width: 100%;">

<tr>
<?php
require "dbconnection.php";
$selQry="select e_id,e_name,e_date,e_time,e_img from musical_events";
$result=@mysqli_query($link,$selQry)or die(mysqli_error($link));
echo "<table  style='width:1000px;'>";
       echo "<tr>";
       $i=1;
       while($row=mysqli_fetch_assoc($result))// while($row=mysqli_fetch_array($result))//while($row=mysqli_fetch_array($result,MYSQL_ASSOC))
       {
        
           echo"<td>";
           echo "<table class=pd1>";
           
           $path="./Images/".$row["e_img"];
           echo "<tr><td><img src='$path' width=250px height=300px alt=Image text/></td></tr>";
           
           echo "<tr><td><b>Event ID : </b><font color=orange>".$row["e_id"]."</font></td></tr>";
           echo "<tr><td><b>Event Name : </b><i><font color=orange>".$row["e_name"]."</font></i></td></tr>";
           echo "<tr><td><b>Event Date : </b><i><font color=orange>".$row["e_date"]."</font></i></td></tr>";
           echo "<tr><td><b>Event Time : </b><i><font color=orange>".$row["e_time"]."</font></i></td></tr>"; 
           $x=$row["e_id"];
           
           echo "</table></td>";
           if($i==5)
           {
            $i=1;
            echo "</tr>";
            echo "<tr>";
           }
           $i++;
       }
       echo "</tr></table>";
       ?>
       </tr></table>      
</tr>

</table>
</form>
<?php
if(isset($_POST["2001"]))
echo "1gfchgcvghvjggtggugjjkgkykykkgyuyugiugyugyugyugyuiguygyu";
?>
</body>
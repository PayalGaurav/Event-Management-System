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

.details
{
   background-color: white;
   width:1000px;
}

.pd1
{
    width: 250px;
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
<table>
<tr>
<td style="width: 300px; background-image: url(./Colours/Brown.jpg);"><table>
<tr><u><i>
List of events :-
</i></u></td></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<ul>
<li><b>Debate</b></li>
<li><b>Essay Writing</b></td></li>
<li><b>Poetry</b></td></li>
<li><b>Vocabulary Test</b></li>
<li><b>Bolg Writing</b></li>
</ul></tr>
<tr style="height: 600px;"></tr>
</table></td>
<td><table><tr>
<?php
require "dbconnection.php";
$selQry="select e_id,e_name,e_date,e_time,e_fees,e_desc,e_img from literary_events";
$result=@mysqli_query($link,$selQry)or die(mysqli_error($link));
echo "<table  class=details>";
       echo "<tr>";
       $i=1;
       while($row=mysqli_fetch_assoc($result))// while($row=mysqli_fetch_array($result))//while($row=mysqli_fetch_array($result,MYSQL_ASSOC))
       {
        
           echo"<td>";
           echo "<table class=pd1>";
           
           $path="./Images/".$row["e_img"];
           echo "<tr><td><img src='$path' width=240px height=200px alt=Image text/></td></tr>";
           
           echo "<tr><td><b>Event ID : </b>".$row["e_id"]."</td></tr>";
           echo "<tr><td><b>Event Name : </b><i>".$row["e_name"]."</i></td></tr>";
           echo "<tr><td><b>Event Date : </b><i>".$row["e_date"]."</i></td></tr>";
           echo "<tr><td><b>Event Time : </b><i>".$row["e_time"]."</i></td></tr>";
           echo "<tr><td><b>Event Fees : </b><i>".$row["e_fees"]."</i></td></tr>"; 
           echo "<tr><td><b>Event Desciption : </b><i>".$row["e_desc"]."</i></td></tr>";
           $x=$row["e_id"];
           echo "<tr></tr><tr></tr><tr></tr>";
           echo "<tr><td align=center><input type=checkbox name=$x /> $x Select Event</td></tr>";
           echo "<tr></tr><tr></tr><tr></tr>";
           echo "<tr></tr><tr></tr><tr></tr>";
           echo "</table></td>";
           if($i==3)
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
</td>       
</tr>
<pre>
                                                                                   <input type="submit" name="done" value="Done"/>
</pre>
</table>
</form>
<?php
echo "<font color=beige>";
if(isset($_POST["done"]))
{
    
    if(isset($_SESSION["participantID"]))
    {
       $pid=$_SESSION["participantID"];
    
    
    
    //$pid=$_POST["pid"];
    $selqry="select events from participants where p_id=$pid";
    $res=@mysqli_query($link,$selqry)or die(mysqli_error($link));
    while($row1=mysqli_fetch_assoc($res))
    {
       $x=$row1["events"];
    }
    
    $upqry5="select fees from participants where p_id=$pid";
    $up5=@mysqli_query($link,$upqry5)or die(mysqli_error($link));
    while($row7=mysqli_fetch_assoc($up5))
    {
       $f=$row7["fees"];
    }


 if(isset($_POST["4001"]))
      {
        $selqry1="select e_fees,participants_no from literary_events where e_id=4001";
        $res1=@mysqli_query($link,$selqry1)or die(mysqli_error($link));
        while($row2=mysqli_fetch_assoc($res1))
        {
           $f=$f+$row2["e_fees"];
           $n1=$row2["participants_no"];
           $n1++;
        }
        
        $updqry1="update literary_events set participants_no=$n1 where e_id=4001";
        @mysqli_query($link,$updqry1)or die(mysqli_error($link));
        $x=$x.",4001";
        echo "&nbsp;&nbsp;4001";
       
      }
 if(isset($_POST["4002"]))
      {
        $selqry2="select e_fees,participants_no from literary_events where e_id=4002";
        $res2=@mysqli_query($link,$selqry2)or die(mysqli_error($link));
        while($row3=mysqli_fetch_assoc($res2))
        {
           $f=$f+$row3["e_fees"];
           $n2=$row3["participants_no"];
           $n2++;
        }
        
        $updqry2="update literary_events set participants_no=$n2 where e_id=4002";
        @mysqli_query($link,$updqry2)or die(mysqli_error($link));
        $x=$x.",4002";
        echo "&nbsp;&nbsp;4002";
      }
 if(isset($_POST["4003"]))
      {
        $selqry3="select e_fees,participants_no from literary_events where e_id=4003";
        $res3=@mysqli_query($link,$selqry3)or die(mysqli_error($link));
        while($row4=mysqli_fetch_assoc($res3))
        {
           $f=$f+$row4["e_fees"];
           $n3=$row4["participants_no"];
           $n3++;
        }
        
        $updqry3="update literary_events set participants_no=$n3 where e_id=4003";
        @mysqli_query($link,$updqry3)or die(mysqli_error($link));
        $x=$x.",4003";
        echo "&nbsp;&nbsp;4003";
      }
 if(isset($_POST["4004"]))
      {
        $selqry4="select e_fees,participants_no from literary_events where e_id=4004";
        $res4=@mysqli_query($link,$selqry4)or die(mysqli_error($link));
        while($row5=mysqli_fetch_assoc($res4))
        {
           $f=$f+$row5["e_fees"];
           $n4=$row5["participants_no"];
           $n4++;
        }
        
        $updqry4="update literary_events set participants_no=$n4 where e_id=4004";
        @mysqli_query($link,$updqry4)or die(mysqli_error($link));
        $x=$x.",4004";
        echo "&nbsp;&nbsp;4004";
      }
 if(isset($_POST["4005"]))
      {
        $selqry5="select e_fees,participants_no from literary_events where e_id=4005";
        $res5=@mysqli_query($link,$selqry5)or die(mysqli_error($link));
        while($row6=mysqli_fetch_assoc($res5))
        {
           $f=$f+$row6["e_fees"];
           $n5=$row6["participants_no"];
           $n5++;
        }
        
        $updqry5="update literary_events set participants_no=$n5 where e_id=4005";
        @mysqli_query($link,$updqry5)or die(mysqli_error($link));
        $x=$x.",4005";
        echo "&nbsp;&nbsp;4005";
      }
      
  $upQry="update participants set events='$x' where p_id=$pid";
    @mysqli_query($link,$upQry)or die(mysqli_error($link));
    $upQry2="update participants set fees=$f where p_id=$pid";
    @mysqli_query($link,$upQry2)or die(mysqli_error($link));
       echo "<font color=green size=4>User Details Updated Successfully !!</font>";
    echo "<br>Total events selected from all categories : ".$x;
    echo "<br>Total amount to be paid : ".$f;
 }
 
    else
    {
        echo "<font color=orange>You First need to Login !!"; 
    }
    }
 echo "</font>";
 
?>
</body>
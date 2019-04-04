<?php

require "dbconnection.php";

?>

<h2 align="center">Working with HTML Form Elements</h2>
<hr color="red" size="5" />
<form method="post">
<table align="center" width="70%">
<tr><td>
<fieldset>
<legend>Registration Form</legend>
<table align="center" border="1px" cellspacing="0px" cellpadding="5px" width="90%">
<tr><td>Full Name</td><td><input type="text" name="txtname" id="name"/></td></tr>
<tr><td>Password</td><td><input type="password" name="txtpassword" id="password"/></td></tr>
<tr><td>Gender : </td>
<td>
<input type="radio" name="gender" value="Male" id="male" checked />Male
<input type="radio" name="gender" value="Female" id="female"/>Female
</td>
</tr>
<tr><td>DOB</td>
<td><input type="date" name="txtDOB" id="DOB"/></td></tr>
<tr>
<td>Age :</td>
<td><input type="number" name="txtage" min="20" max="100" step="5" id="age"/></td></tr>
<tr><td>City :</td>
<td>
<select name="txtcity" id="city">
<option value="-1">----Select City----</option>
<optgroup label="Bihar">
<option value="Patna">Patna</option>
<option value="Gaya">Gaya</option>
<option value="Bhagalpur">Bhagalpur</option>
</optgroup>
<optgroup label="UP">
<option value="Noida">Noida</option>
<option value="Agra">Agra</option>
<option value="Lucknow">Lucknow</option>
<option value="Varanasi">Varanasi</option>
</optgroup>
<optgroup label="Punjab">
<option value="Mohali">Mohali</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Amritsar">Amritsar</option>
</optgroup>
<optgroup label="Andhra Pradesh">
<option value="Hyderabad">Hyderabad</option>
<option value="Vishakapatnam">Vishakapatnam</option>
<option value="Kurnool">Kurnool</option>
</optgroup>
<option value="Delhi">Delhi</option>
</select></td>
</tr>
<tr>
<td>Email :</td>
<td><input type="email" name="txtemail" id="email"/></td>
</tr>
<tr><td>Mobile :</td>
<td><input type="number" name="nummobile" id="mobile"/></td></tr>
<tr><td>Address :</td>
<td>
<textarea name="txtaddress" rows="5" cols="20" id="address"></textarea>
</td>
</tr>
<td colspan="2" align="center">
<input type="submit" name="btnregister" value="Register Me" />
</td></tr>
</table>
</fieldset>
</td></tr>
</table>
</form>

<?php
   if(isset($_POST["btnregister"]))
   {
       $name=$_POST["txtname"];
       $password=$_POST["txtpassword"];
       $gen=$_POST["gender"];
       $dob=$_POST["txtDOB"];
       $age=$_POST["txtage"];
       $city=$_POST["txtcity"];
       $mobile=$_POST["nummobile"];
       $email=$_POST["txtemail"];
       $address=$_POST["txtaddress"];
       
       $i=1;
       $selQry="select p_id from participants";
       $result=@mysqli_query($link,$selQry)or die(mysqli_error($link));
       while($row=mysqli_fetch_assoc($result))
       {
        $i++;
       }
       $id=100+$i;
       
       $insertQry="insert into participants values($id,'$name','$password','$gen','$dob',$age,$mobile,'$email','$address','$city','NULL','NULL')";
       @mysqli_query($link,$insertQry)or die(mysqli_error($link));
       echo "<font color=green size=4>User Details Saved Successfully !!</font>";
    
   }
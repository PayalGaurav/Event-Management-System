<?php require("pthome.php");?>
<head>

<style>

input[type=submit]
{
    
   width: 350px;
   height: 35px;
   border-color: white;
   background-color: black;
   color: beige;
}

</style>

</head>

<body>

<form method="post">
<table>
<tr style="text-align: center;"><td style="width: 450px;"></td><td><br /><input type="submit" name="selectevt" value="Continue to Select Events" /></td><?php if(isset($_POST["selectevt"])){header("location:eventtypes.php");exit;}?></tr></table>
</form>
</body>

<?php require("pthome.php");?>
<head>

<style>

.options
{
    width: 450px;
    height: 300px;
    background-image:url(./Colours/grey.jpg);
}

.options td
{
    width: 30%;
}

.options tr
{
    height: 33%;
}

.options input[type=submit]
{
    height: 35px;
    width: 200px;
    border-color: yellow;
    background-color: black;
    color: beige;
}

</style>

</head>

<body>


<form method="post">
<table align="center" class="options">

<tr>
<td>
<input type="submit" name="culevt" value="Select In Cultural Events"/>
</td><?php if(isset($_POST["culevt"])){header("location:Cultural.php");exit;} ?>
<td>
<input type="submit" name="litevt" value="Select In Literary Events"/>
</td><?php if(isset($_POST["litevt"])){header("location:Literary.php");exit;} ?>
</tr>
<tr>
<td>
<input type="submit" name="techevt" value="Select In Technical Events"/>
</td><?php if(isset($_POST["techevt"])){header("location:Technical.php");exit;} ?>
<td>
<input type="submit" name="funevt" value="Select In Fun Events"/>
</td><?php if(isset($_POST["funevt"])){header("location:Fun.php");exit;} ?>
</tr>

</table>
</form>
</body>
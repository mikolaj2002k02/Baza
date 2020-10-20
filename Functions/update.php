<?php
include_once 'polacz.php';
if(count($_GET)>0) {
mysqli_query($baza,"UPDATE car set ID='" . $_GET['ID'] . "', mark='" . $_GET['mark'] . "', model='" . $_GET['model'] . "', color='" . $_GET['color'] . "' ,vintage='" . $_GET['vintage'] . "',transmission='" . $_GET['transmission'] . "' WHERE ID='" . $_GET['ID'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($baza,"SELECT * FROM car WHERE ID='" . $_GET['ID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update car Data</title>
</head>
<body>
<form name="frmUser" method="GET" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
ID: <br>
<input type="hidden" name="ID" class="txtField" value="<?php echo $row['ID']; ?>">
<input type="text" name="ID"  value="<?php echo $row['ID']; ?>">
<br>
mark: <br>
<input type="text" name="mark" class="txtField" value="<?php echo $row['mark']; ?>">
<br>
model:<br>
<input type="text" name="model" class="txtField" value="<?php echo $row['model']; ?>">
<br>
color:<br>
<input type="text" name="color" class="txtField" value="<?php echo $row['color']; ?>">
<br>
vintage:<br>
<input type="text" name="vintage" class="txtField" value="<?php echo $row['vintage']; ?>">
<br>
transmission:<br>
<input type="text" name="transmission" class="txtField" value="<?php echo $row['transmission']; ?>">
<br>
<a href="https://localhost/2pi/Lukasz/index.php"><input type="submit" name="submit" class="button">Powrót</a>

</form>
</body>
</html>
<table class="table table-hover table-dark">
    <thead>
<tr class="tabelka2">
    <th>
        ID
    </th>
    <th>
        ID samochodu
    </th>
    <th>
        Marka
    </th>
    <th>
        Model
    </th>
    <th>
        vintage
    </th>
    <th>
        color
    </th>
    <th>
        transmission
    </th>
    <th>
        Edytuj
    </th>
    <th>
        usuń
    </th>
</tr>

<?php
require_once('polacz.php');
$sql="SELECT * FROM car";
$result=mysqli_query($baza ,$sql);
$ctn=1;
if(mysqli_num_rows($result)>0)
{
 while($row=mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?= $ctn?></td>   
    <td><?= $row['ID']?></td>
    <td><?= $row['mark']?></td>
    <td><?= $row['model']?></td>
    <td><?= $row['vintage']?></td>
    <td><?= $row['color']?></td>
    <td><?= $row['transmission']?></td>
    <td><a href="Functions/update.php?ID=<?= $row['ID']?>&mark=<?= $row['mark']?>&model=<?= $row['model']?>&vintage=<?= $row['vintage']?>&color=<?= $row['color']?>&transmission=<?= $row['transmission']?>"><button  class="btn btn-warning">edytuj</button></a></td>
    <td><a href="Functions/delete.php?ID=<?= $row['ID']?>"><button class="btn btn-danger">usuń</button></a></td>
</tr>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form method="GET" action="Functions/process.php">
		ID:<br>
		<input type="int" name="ID">
		<br>
		model:<br>
		<input type="text" name="model">
		<br>
		mark:<br>
		<input type="text" name="mark">
		<br>
		Vintage:<br>
		<input type="text" name="vintage">
        <br>
		color:<br>
		<input type="text" name="color">
        <br>
		transmission:<br>
		<input type="text" name="transmission">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>
  </div>

</div>
<?php
$ctn++;
};
}
else{
?>
<TD colspan="7">
    <?= 'brak danych'?>
</TD>

<?php
}
mysqli_close($baza);
?>
</thead>
</table>
<button id="myBtn" class="btn btn-primary btn-lg btn-block" >dodaj</button>

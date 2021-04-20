<?php 
require("koneksi.php");

$hub = open_connection();
$a = @$_GET["a"];
$id = @$_GET["id"];
$sql = @$_POST["sql"];
switch ($sql) {
	case "create":
		create_prodi();
		break;
	case "update":
		update_prodi();
		break;
	case "delete":
		delete_prodi();
		break;
}
switch ($a) {
	case "list":
		read_data();
		break;
	case "input":
		input_data();
		break;
	case "edit":
		edit_data($id);
		break;
	case "hapus":
		hapus_data($id);
		break;
	default:
		read_data();
		break;
}
mysqli_close($hub);
?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome !</title>
  </head>
  <body background="pipes.png">
    

<?php
function read_data() {
	global $hub;
	$query = "select * from dt_prodi";
	$result = mysqli_query($hub, $query); ?>

	  <div style="max-width: 600px; margin: 9em auto">

	<h2 class="text-center">Read Data Program Studi
	 <a class="nav-link" href="home.php">HOME<span class="sr-only">(current)</span></a></h2>
	<hr>
<table class="table table-bordered table-striped">
		<tr>
			<td colspan="5"><a href="19753065_curd_4.php?a=input">INPUT</a></td>
		</tr>
		<tr>
			<td>ID</td>
			<td>KODE</td>
			<td>NAMA PRODI</td>
			<td>AKREDITASI</td>
			<td>AKSI</td>
		</tr>
		<?php while($row = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['idprodi']; ?></td>
			<td><?php echo $row['kdprodi']; ?></td>
			<td><?php echo $row['nmprodi']; ?></td>
			<td><?php echo $row['akreditas']; ?></td>
			<td>

				 <button type="button" class="btn btn-outline-success"> <a href="19753065_curd_4.php?a=edit&id=<?php echo $row ['idprodi']; ?>">EDIT</a></button>
        <button type="button" class="btn btn-outline-warning"><a href="19753065_curd_4.php?a=hapus&id=<?php echo $row ['idprodi']; ?>">HAPUS</a></button>
				
				
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
<?php } ?>

<?php 
function input_data(){
	$row = array(
			"kdprodi" => "",
			"nmprodi" => "",
			"akreditas" => "-"
			); ?>

	<h2>Input Data Program Studi</h2>
	<form action="19753065_curd_4.php?a=input" method="post"> 
		<input type="hidden" name="sql" value="create"> 
		Kode Prodi
		<input type="text" colspan="5" name="kdprodi" maxlength="6" size="6" value="<?php echo trim($row["kdprodi"]) ?>" />
		<br><br>
		Nama Prodi
		<input type="text" colspan="5" name="nmprodi" maxlength="70" size="70" value="<?php echo trim($row["nmprodi"]) ?>" />
		<br><br>
		akreditas Prodi
		<input type="radio" name="akreditas" value="-" <?php if($row["akreditas"]=='-' || $row["akreditas"]=='') { echo "checked=\"checked\""; } else {echo "";} ?>> -
		<input type="radio" name="akreditas" value="A" <?php if($row["akreditas"]=='A') { echo "checked=\"checked\""; } else {echo "";} ?>> A
		<input type="radio" name="akreditas" value="B" <?php if($row["akreditas"]=='B') { echo "checked=\"checked\""; } else {echo "";} ?>> B
		<input type="radio" name="akreditas" value="C" <?php if($row["akreditas"]=='C') { echo "checked=\"checked\""; } else {echo "";} ?>> C
		<br><br>
		<input type="submit" class="btn btn-outline-success" name="action" value="Simpan">
		<br>
		<a href="19753065_curd_4.php?a=list" class="btn btn-outline-warning">Batal</a>
	</form>
<?php } ?>

<?php
function edit_data($id ){
	global $hub;
	$query = "select*from dt_prodi where idprodi = $id"; 
	$result = mysqli_query($hub, $query);
	$row = mysqli_fetch_array($result); ?>

<h2>Edit Data Program Studi</h2>
	<form action="19753065_curd_4.php?a=list" method="post">
		<input type="hidden" name="sql" value="update">
		<input type="hidden" name="idprodi" value="<?php echo trim ($id) ?>">
		Kode Prodi
		<input type="text" colspan="5" name="kdprodi" maxlength="70" size="70" value="<?php echo trim($row["kdprodi"]) ?>" />
		<br><br>
		Nama Prodi 
		<input type="text" name="nmprodi" maxlength="70" size="70" value="<?php echo trim($row["nmprodi"]) ?>" />
		<br><br>
		Akreditas Prodi
		<input type="radio" name="akreditas" value="-" <?php if ($row["akreditas"]=="-" || $row["akreditas"]=='') { echo "checked=\"checked\""; } else {echo ""; } ?>> -
		<input type="radio" name="akreditas" value="A" <?php if ($row["akreditas"]=='A') {echo "checked=\"checked\""; } else {echo ""; } ?> > A
		<input type="radio" name="akreditas" value="B" <?php if ($row["akreditas"]=='B') {echo "checked=\"checked\""; } else {echo ""; } ?>> B
		<input type="radio" name="akreditas" value="C" <?php if ($row["akreditas"]=='C') {echo "checked=\"checked\""; } else {echo ""; } ?>> C
		<br><br>
		<input type="submit"class="btn btn-outline-success" name="action" value="Simpan">
		<br>
		<a href="19753065_curd_4.php?a=list" class="btn btn-outline-warning">Batal</a>
	</form>
<?php }  ?>
<?php
function hapus_data($id) {
	global $hub;
	$query = "select * from dt_prodi where idprodi= $id";
	$result = mysqli_query($hub, $query);
	$row = mysqli_fetch_array($result);?>
<h2> Hapus Data Program Studi</h2>
<form action="19753065_curd_4.php?a=list" method="post">
	<input type="hidden" name="sql" value="delete">
	<input type="hidden" name="idprodi" value="<?php echo trim($id)?>">
	<table>
		<tr>
			<td width=100>kode</td>
			<td><?php echo trim($row["kdprodi"])?></td>
		</tr>
		<tr>
			<td>Nama Prodi</td>
			<td><?php echo trim($row["nmprodi"])?></td>
		</tr>
			<tr>
			<td>Akreditasi</td>
			<td><?php echo trim($row["akreditas"])?></td>
		</tr>
	</table>
	<br>
	<input type="submit" name="action" value="Hapus">
	<br>
	<a href="19753065_curd_4.php?a=list">Batal</a>
	</form>
	<?php } ?>
<?php 
function create_prodi() {
	global $hub;
	global $_POST;
	$query = "insert into dt_prodi (kdprodi, nmprodi, akreditas) 
	value";
	$query .= "('".$_POST["kdprodi"]."', '".$_POST["nmprodi"]."', '".$_POST["akreditas"]."')";
	mysqli_query($hub, $query) or die(mysql_error());
}

function update_prodi() {
	global $hub;
	global $_POST;
	$query = "UPDATE dt_prodi";
	$query .= " SET kdprodi='".$_POST["kdprodi"]."', nmprodi='". $_POST["nmprodi"]."', akreditas='".$_POST["akreditas"]."'";
	$query .= " WHERE idprodi = ".$_POST["idprodi"];
	mysqli_query($hub, $query) or die(mysql_error());
}

function delete_prodi() {
	global $hub;
	global $_POST;
	$query = "DELETE FROM dt_prodi";
	$query .= " WHERE idprodi= ".$_POST["idprodi"];
	mysqli_query($hub, $query) or die(mysql_error());
}
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>



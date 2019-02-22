
<html>
<head>
	<title>INPUT DATA PAKET
	</title>
</head>
<body>
	<form method="post">
		<table>
			
			<tr>
				<td>Tgl Ambil</td>
				<td><input type="date" name="Tgl_Terima"></td>
			</tr>
			<tr>
				<td colspan="3">
						<input type="submit" name="submit" value="INPUT">
				</td>
			</tr>
		</table>
	
		<a href="tampilan.php">Back</a>
	</form>
</body>
</html>

<?php
if (isset($_POST['submit'])){
	$id = $_GET['id'];
	$tgl_terima = $_POST['tgl_terima'];
	
	
				$query= "UPDATE paket SET Tgl_Terima = '$tgl_terima' WHERE Id_Paket = '$id' ";
			
			$hasil = mysqli_query($con,$query);
			if($hasil){
				header("Location:3_tampil.php");
			}else{
				echo "data gagal diinput";
			}
	
	
}
?>


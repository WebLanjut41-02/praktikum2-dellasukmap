<html>
<head><title></title></head>
<body style="font-family: consolas;">
	<br><br><br><br><br><br>
	<center>
		<table style="border: solid thin #666; height: 250px; width: 300px;">
			<form action="<?php echo base_url()?>paket/ceklogin" method="post">
				<tr>
					<td colspan="2">
						<center>LOGIN</center>
					</td>
				</tr>
				<tr>
					<td>&nbspNIP</td>
					<td><input type="text" name="nip" style="width: 200px;"></td>
				</tr>
				<tr>
					<td>&nbspNama</td>
					<td><input type="text" name="nama" style="width: 200px;"></td>
				</tr>
				<tr>
					<td colspan="2"><br><center><input type="submit" name="submit" value="Login"></center></td>
				</tr>
				
		    </form>
		</table>
	</center>
	
</body>
</html>
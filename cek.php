<?php
 $username = $_POST['username'];
 $nama = $_POST['nama'];
 $ps1 = $_POST['ps1'];
 $ps2 = $_POST['ps2'];
 $notlp = $_POST['notlp'];
 $jk = $_POST['jk'];
 $alamat = $_POST['alamat'];
 $jurusan = $_POST['jurusan'];

//  if($username == ""){
//  	echo "<script> alert(' Username Konsong '); </script>";
//  	echo "<script> window.location='".site_url('index.php')."'; </script>";
//  }
//  else{
//  echo "Nama anda adalah ". $username;
// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nama User</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	  <div class="container">
      <div class="row" style="margin-top: 10px">
        <div class="col-md-12">
        <h1> DIGITAL TALENT  |<small> Data Diri Hasil Inputan</small> </h1>
          <div class="alert alert-none" role="alert">
<table class="table table-bordered table-hover">
	<tr>
		<th>Username</th>
		<th>Nama</th>
		<th>Password</th>
		<th>Konfirmasi Password</th>
		<th>No Telpon</th>
		<th>Jenis Kelamin</th>
		<th>Jurusan</th>
		<th>Alamat</th>
	
		<tbody>
			<td><?=$username?></td>
			<td><?=$nama?></td>
			<td><?=$ps1?></td>
			<td><?=$ps2?></td>
			<td><?=$notlp?></td>
			<td><?=$jk?></td>
			<td><?=$jurusan?></td>
			<td><?=$alamat?></td>
		</tbody>
	</tr>
</table>
</div></div></div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
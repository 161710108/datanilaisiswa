<html>
<head>
<title>input text</title>
</head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>biodata</title>
    

    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
     
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<body>
<form action="#" method="POST" name="input">
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Nama</span>
  <input type="text" name="nama" class="form-control" placeholder="nama" aria-describedby="sizing-addon2">
</div>
<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Kelas</span>
  <input type="text" name = "kelas "class="form-control" placeholder="kelas" aria-describedby="sizing-addon2">
</div>

<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Nilai Matematika</span>
  <input type="text" name="nilaimatematika" class="form-control" placeholder="nilaimatematika" aria-describedby="sizing-addon2">
</div>

<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Nilai Bahasa Indonesia</span>
  <input type="text" name="nilaibahasaindonesia" class="form-control" placeholder="nilaibahasaindonesia" aria-describedby="sizing-addon2">
</div>

<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Nilai Bahasa Inggris</span>
  <input type="text" name="nilaibahasainggris" class="form-control" placeholder="nilaibahasainggris" aria-describedby="sizing-addon2">
</div>

<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Nilai PAI</span>
  <input type="text" name="nilaipai" class="form-control" placeholder="nilaipai" aria-describedby="sizing-addon2">
</div>

<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Nilai Produktif</span>
  <input type="text" name="nilaiproduktif" class="form-control" placeholder="nilaiproduktif" aria-describedby="sizing-addon2">
</div>

<br>
<input type="submit" name="simpan" value="simpan">
</form>
<script src="dist/js/bootstrap.min.js"></script>
<table border="1">
<tr>
	<th>nama</th>
	<th>kelas</th>
	<th>matematika</th>
	<th>bahasa_indonesia</th>
	<th>bahasa_inggris</th>
	<th>pai</th>
	<th>produktif</th>
	<th>rata-rata</th>
	<th>grade</th>

</tr>
<td>
		<?php 
		if (isset($_POST['simpan'])){
        $nama=$_POST['nama'];
        echo $nama;
         }
         ?>
         </td>
		<td><?php 
		if (isset($_POST['simpan'])){
        $kelas=$_POST['kelas'];
        echo $kelas;
         }
         ?>
         </td>
		<td><?php 
		if (isset($_POST['simpan'])){
        $matematika=$_POST['nilaimatematika'];
        {
        if ($matematika >100){
		echo "ERROR";
	}
        echo $matematika;
         }
         ?></td>
		<td><?php 
		if (isset($_POST['simpan'])){
        $bahasa_indonesia=$_POST['nilaibahasaindonesia'];
        {
        	if ($bahasa_indonesia >100){
		echo "ERROR";
        }
        echo $bahasa_indonesia;
         }
         ?></td>
		<td><?php 
		if (isset($_POST['simpan'])){
        $bahasa_inggris=$_POST['nilaibahasainggris'];
        {
        if ($bahasa_inggris >100){
		echo "ERROR";
	}
        echo $bahasa_inggris;
         }
         ?></td>
		<td><?php 
		if (isset($_POST['simpan'])){
        $pai=$_POST['nilaipai'];
        {
        	 if ($pai >100){
		echo "ERROR";
        }
        echo $pai;
         }
         ?></td>
         <td><?php 
		if (isset($_POST['simpan'])){
        $produktif=$_POST['nilaiproduktif'];
        }
	      if ($produktif >100){
		echo "ERROR";
	}
        echo $produktif;
         }
         ?>
         </td>
		<td><?php 
		if (isset($_POST['simpan'])){
        $jumlah=($matematika + $bahasa_indonesia + $bahasa_inggris + $pai + $produktif)/5;
        echo $jumlah;
         }
         ?></td>
		<td><?php 
		if (isset($_POST['simpan'])){
       $Rata=$jumlah/5;
       {
	
	if ($jumlah > 90){
		echo "A";
	
	}
	else if ($jumlah < 80){
		echo"B";
	}
	else if ($jumlah <=70){
		echo"C";
	}
	else if ($jumlah <=60){
		echo"D";
	}
	else if ($jumlah <=50){
		echo"E";
	
	}
	else if ($jumlah <=50){
		echo"E";
	}
	
      
         }
     }
 }
}
}
     
         ?>
         	
         </td>
</tr>
</table>
</body>
</html>
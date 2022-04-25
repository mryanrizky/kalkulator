<html>
<head>
<title>Hasil Perhitungan</title>
<style>
	body {
 		height: 100%;
		background: linear-gradient(yellow,green);
		color:white;
	}
	.konten {
	    height: 100%;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	}
	.box {
		place-content: center;
	}
	.text {
		text-align: center;
		padding-top:20px;
		padding-bottom:20px;
		font-size: 100px;
		border-radius: 20px;
		background: rgba(255,255,255,0.30);
		width: 200px;
		height: 200px;
		color:white;
	}
	.judul {
		text-align: center;
	}
	.footer {
		text-align: center;
		color:white;
		padding: 20px;
	}
</style>
</head>
	<body>

	<div class="konten">
		<div class="box">

<?php
 	
	 $bil1 = $_POST['bilangan1'];
	 $bil2 = $_POST['bilangan2'];
	 $operasi = $_POST['hitung'];
if(!empty($_POST['bilangan1']) and !empty($_POST['bilangan2'])){
	switch ($operasi) {
			case '+':
				$hasil = $bil1+$bil2;
			break;
			case '-':
				$hasil = $bil1-$bil2;
			break;
			case '*':
				$hasil = $bil1*$bil2;
			break;
			case ':':
				$hasil = $bil1/$bil2;
			break;
	}
?>
 		<h1 class="judul">Hasilnya</h1>
		<input name="hitung" type="text" class="text" readonly value="<?= $hasil ?>">
		<div class="footer">Mochamad Ryan Rizky</div>
		<?php
} else {
?>
	<h1 class="judul">Hasilnya</h1>
	<input name="hitung" type="text" class="text" style="font-size:50px" readonly value="Error!">
	<div class="footer">Mochamad Ryan Rizky</div>

<?php } ?>
	</div>
	</div>
		
	</body>
</html>
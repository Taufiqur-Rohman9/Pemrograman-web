 <?php 	
 	  include ('conn.php'); 

	  if (isset($_POST['submit'])) {
	    $sku =$_POST['sku'];
 	    $nama = $_POST['nama'];
      $kategori = $_POST['kategori'];
      $stok = $_POST['stok'];
      $harga = $_POST['harga'];

      $query = "INSERT INTO barang (sku,nama, kategori, stok, harga) VALUES('$sku','$nama','$kategori','$stok','$harga')"; 

      $result = mysqli_query(connection(),$query);

       if ($result) {
       echo '<h3>Data berhasil disimpan</h3>';
      }
      else{
       echo '<h3>Data gagal disimpan</h3>';
      }
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Form Isi Data</title>
 	<style>
 		.menu ul{
 			display: flex;
 		}
 		.menu ul li{
 			flex-grow: 1;
 			list-style: none;
 			font-size: 25px;
 		}
 		.menu ul li a{
 			color: #800000;
 		}
 		h3{
 			text-align: center;
 			font-size: 20px;
 			color: grey;
 		}
    input{
      width: 50%;
      height: 30px;
      border-radius: 12px;
      border-width: 1px;
      margin-left: 25%;
    }
    select{
      width: 50.5%;
      height: 30px;
      border-radius: 12px;
      margin-left: 25%;
    }
    button{
      width: 30%;
      height: 30px;
      border-radius: 12px;
      border: none;
      margin-left: 34.5%;
    }
    label{
      margin-left: 45%;
    }
 	</style>
 		

 </head>
 <body>
    <div class="menu">
 		<ul>
 		<li style="margin-left: 320px"><a href="<?php echo "index.php"; ?>">Lihat Barang</a></li>
 		<li><a href="<?php echo "tambah.php"; ?>">Tambah Barang</a></li>
 		</ul>
 	</div>
 	<form method="POST">
 		<label>SKU BARANG</label><br>
 		<input type="text" name='sku' placeholder="&nbsp; Masukkan SKU Barang" required="required"><br>
 		<label>NAMA BARANG</label><br>
 		<input type="text" name='nama' placeholder="&nbsp;Masukkan Nama Barang" required="required"><br>
    <label>KATEGORI</label><br>
    <select name="kategori" required="required">
                <option value=''>PILIH KATEGORI</option>
                <option value='MAKANAN'>MAKANAN</option>
                <option value='MINUMAN'>MINUMAN</option>
                <option value='ATK'>ATK</option>
                <option value='SKINCARE'>SKINCARE</option>
                <option value='KEPERLUAN ANAK'>KEPERLUAN ANAK</option>
              </select> <br>
 		<label>JUMLAH STOK</label><br>
 		<input type="text" name='stok' placeholder="&nbsp;Masukkan Jumlah Stok" required="required"><br>
        <label>HARGA SATUAN</label><br>
 		<input type="text" name='harga' placeholder="&nbsp;Masukkan Harga Satuan" required="required"><br><br>
 		<button type="submit" name='submit'>Simpan</button>
 	</form>
 </body>
 </html>

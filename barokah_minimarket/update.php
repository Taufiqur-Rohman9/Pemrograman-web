<?php 
	include ('conn.php');

	if (isset($_GET['sku'])) {
		$sku1 = $_GET['sku'];
		$query = "SELECT * FROM barang WHERE sku = '$sku1'";

		$result = mysqli_query(connection(),$query);
	}

	 if (isset($_POST['submit'])) {
	    $sku =$_POST['sku'];
 	    $nama = $_POST['nama'];
      $kategori = $_POST['kategori'];
      $stok = $_POST['stok'];
      $harga = $_POST['harga'];
      $up = "UPDATE barang SET nama='$nama', kategori='$kategori', stok='$stok', harga='$harga'  WHERE sku='$sku'"; 

      $result = mysqli_query(connection(),$up);
      
       if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      header('Location: index.php?status='.$status);
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Update Data</title>
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
 	   <?php while($data = mysqli_fetch_array($result)): ?>
 		<label>SKU BARANG</label>
    <input type="text" name='sku' placeholder="&nbsp;Masukkan SKU Barang" value="&nbsp;<?php echo $data['sku'];  ?>" required="required" readonly>
    <label>NAMA BARANG</label>
    <input type="text" name='nama' placeholder="&nbsp;Masukkan Nama Barang" value="&nbsp;<?php echo $data['nama'];  ?>" required="required">
    <label>KATEGORI</label>
    <select name="kategori" required="required">
                <option value=''>PILIH KATEGORI</option>
                <option value='MAKANAN' <?php echo $data['kategori']=='MAKANAN' ? "selected" : "" ?> >MAKANAN</option>
                <option value='MINUMAN' <?php echo $data['kategori']=='MINUMAN' ? "selected" : "" ?> >MINUMAN</option>
                <option value='ATK' <?php echo $data['kategori']=='ATK' ? "selected" : "" ?> >ATK</option>
                <option value='SKINCARE' <?php echo $data['kategori']=='SKINCARE' ? "selected" : "" ?> >SKINCARE</option>
                <option value='KEPERLUAN ANAK' <?php echo $data['kategori']=='KEPERLUAN ANAK' ? "selected" : "" ?> >KEPERLUAN ANAK</option>
              </select>
    <label>JUMLAH STOK</label>
    <input type="text" name='stok' placeholder="&nbsp;Masukkan Jumlah Stok" value="&nbsp;<?php echo $data['stok'];  ?>" required="required">
        <label>HARGA SATUAN</label>
    <input type="text" name='harga' placeholder="&nbsp;Masukkan Harga Satuan" value="&nbsp;<?php echo $data['harga'];  ?>" required="required"> <br><br>
 		<?php endwhile; ?>
 		<button type="submit" name='submit'>Simpan</button>
 	</form>
 </body>
 </html>
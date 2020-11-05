<?php 
   include ('conn.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>BAROKAH Minimarket</title>
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
 		.tabel tr td {
 			text-align: center;
 		}
 		h2{
 			text-align: center;
 			color: grey;
 			font-size: 20px;
 		}
    .filter{
      text-align: center;
    }
    .cari{
      text-align: center;
    }
 	</style>
 </head>
 <body>
 	<?php 
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
                echo '<h2>Data berhasil di-update</h2>';
              }
              elseif($status=='err'){
                echo '<h2>Data gagal di-update</h2>';
              }

            }
           ?>
 	<div class="menu">
 		<ul>
 		<li style="margin-left: 330px"><a href="<?php echo "index.php"; ?>">Lihat Barang</a></li>
 		<li><a href="<?php echo "tambah.php"; ?>">Tambah Barang</a></li>
 		</ul>
 	</div>
  <div class="cari">
    <form method="GET">
      <label>CARI BARANG</label>
      <input type="text" name="cari" placeholder="SKU/NAMA/ KATEGORI">
      </select>
      <input type="submit" value="CARI">
    </form>
  </div>
  <br><br>
  <div class="filter">
    <form action="filter.php" method="POST">
    <label>MASUKKAN RENTANG HARGA</label>
    <input type="text" name="min" placeholder="Masukkan MIN Harga" required="required">
    <label>SAMPAI</label>
    <input type="text" name="max" placeholder="Masukkan MAX Harga" required="required">
    <input type="submit" name="filter" value="FILTER">
    </form>
  </div>
  <br><br>
	<div class="tabel">
		<table border="1" width="100%">
		<tr>
            <th>SKU BARANG</th>
            <th>NAMA BARANG</th>
            <th>KATEGORI</th>
            <th>JUMLAH STOK</th>
            <th>HARGA SATUAN</th>
            <th>ACTION</th>
        </tr>

		<?php 
         if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $query = "SELECT * FROM barang WHERE sku like'%".$cari."%' OR nama like '%".$cari."%' OR kategori like '%".$cari."%'";
            $result =mysqli_query(connection(),$query);
          }
          else{
            $result = mysqli_query(connection(),"SELECT * FROM barang");
          }
        ?>


       <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['sku'];  ?></td>
                    <td><?php echo $data['nama'];  ?></td>
                    <td><?php echo $data['kategori'];  ?></td>
                    <td><?php echo $data['stok'];  ?></td>
                    <td><?php echo $data['harga'];  ?></td>
                    <td>
                      <a href="<?php echo "update.php?sku=".$data['sku']; ?>"> Update</a>
                      &nbsp;&nbsp;
                      <a href="<?php echo "delete.php?sku=".$data['sku']; ?>"> Delete</a>
                    </td>
                  </tr>
         <?php endwhile ?>
		</table>
	</div>
 		
 	
 </body>
 </html>
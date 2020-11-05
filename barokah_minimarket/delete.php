<?php 
	include ('conn.php');
	 $status = '';
  	 $result = '';

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['sku'])) {
          $sku = $_GET['sku'];
          $query = "DELETE FROM barang WHERE sku = '$sku'"; 

          $result = mysqli_query(connection(),$query);

          header('Location: index.php');
      }  
  }
 ?>
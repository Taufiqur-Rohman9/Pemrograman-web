<?php 
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['nama'])) {
          $nama = $_GET['nama'];
          $query = "DELETE FROM academic WHERE nama = '$nama'"; 

          $result = mysqli_query(connection(),$query);

          header('Location: index.php');
      }  
  }
 ?>
<?php 
  include ('conn.php'); 

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['kid'])) {
          $kid = $_GET['kid'];
          $query = "SELECT * FROM hoby WHERE kid = '$kid'"; 

          $hoby = mysqli_query(connection(),$query);

          while($data = mysqli_fetch_array($hoby)){
            echo "<option value='".$data['id']."'>".$data['hoby']."</option>";
          }
      }  
  }
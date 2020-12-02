<?php 
include 'conn.php';

$result = mysqli_query(connection(),"SELECT * FROM academic");
if (mysqli_num_rows($result) >0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$link_hapus = "<a class='hapus' href='hapus.php?nama=".$row['nama']."'>Hapus</a>";
		echo $row['nama']." |$link_hapus <br/>";
	}
}

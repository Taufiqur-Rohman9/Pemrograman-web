<?php 
	include 'conn.php';

	if(isset($_POST['submit']))
{
$count = count($_POST["nama"]);
$nama=$_POST["nama"];	
if($count >0)
{
	for($i=0; $i<$count; $i++)
	{
		if(trim($_POST["nama"][$i] != ''))
		{
			$sql =mysqli_query(connection(),"INSERT INTO academic(nama) VALUES('$nama[$i]')");
		}
	}
echo "<script>alert('SUKSES');</script>";
}
else
{
echo "<script>alert('Maaf Mohon Mengisi Kembali');</script>";
}
}
 header('Location: index.php');
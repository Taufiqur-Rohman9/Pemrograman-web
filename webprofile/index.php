<?php 
	include ('conn.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>MY PROFILE</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
	<div class="head">
        <h1> &nbsp;&nbsp;HELLO, I AM TAUFIQUR <br><br>&nbsp;&nbsp;LET'S INTRODUCE MYSELF<p>My name is Taufiq. My favorite food is meatballs, while my favorite drink is ice tea. About the hobby, i really like to sing</p></h1>
        <img src="img/foto.png" alt="working" width="400px" height="240px"/>
    </div>
    <div class="container">
    	<h3>ACADEMIC</h3>
    	<div id="view">
    			
    	</div>
    	<div class="form-group">
				<form action="simpan.php" method="post" id="academic">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field">
							<tr>
								<td><input type="text" name="nama[]" placeholder="Masukkan Riwayat Pendidikan" class="form-control nama_list" /></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
							</tr>
						</table>
						<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
					</div>
				</form>
			</div>
		</div>
	<div class="container">
		<?php 
			$query = "SELECT * FROM k_hoby"; 
  
  			$kategori = mysqli_query(connection(),$query); 
		 ?>
		<form>
		<h3>HOBBIES</h3> <br>
		Kategori Hoby : 
		<select id="kategori">
			<option value="">--- Pilih ---</option>
			<?php while($data = mysqli_fetch_array($kategori)): ?>
				<option value="<?php echo $data['kid'] ?>"><?php echo  $data['kategori']?></option>
			<?php endwhile; ?>
		</select>
		<br>
		Hoby:
		<select id="hoby">
			<option value="">--- Pilih Kategori dahulu---</option>
		</select>
		<span id="load_hoby" style="display: none;">Loading hoby...</span>
	</form>
	</div>
	<div class="container">
		<h3>CONTACT</h3>
				<?php 
					$result = mysqli_query(connection(),"SELECT * FROM contact");
				 ?>
				 <?php 
				 if (mysqli_num_rows($result)>0) {
				 	while ($data = mysqli_fetch_assoc($result)) {
				 		echo $data['contact']."<br>";
				 	}
				 }
				  ?>
	</div>
</body>
<script>
	$("#kategori").on("change",function(){
		$("#load_hoby").show();
		var kid= $("#kategori").val();
        $.ajax({
            type: "GET",
            url: "hoby.php?kid=" + kid,
            success: function(msg){
                $("#load_hoby").hide();
                $('#hoby').html(msg);
            }	
        });
	});
	$(document).ready(function(){
		loadData();
		$("#academic").submit(function(e){
			// e.preventDefault();
			$.ajax({
				type:'POST',
				url:'simpan.php',
				data:$(this).serialize(),
				succes:function(){
					loadData();
				}
			});
		})
	})

	function loadData(){
		$.get('data.php', function(data){
			$('#view').html(data);
		});
	}

	function resetForm(){
		$('[type=text]').val('');
		$('[name=nama[]').focus();
	}

	$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="nama[]" placeholder="Masukkan Riwayat Pendidikan" class="form-control nama_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
});
</script>
</html>
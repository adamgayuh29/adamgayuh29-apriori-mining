 <?php
	 $id = $_GET['id'];

	 $sql = $koneksi->query("select * from branch where id='$id'");

	 $tampil = $sql->fetch_assoc();

 ?>

 <div class="panel panel-default">
 	<div class="panel-heading">
 		Edit Branch
 	</div>

 	<div class="panel-body">
 		<div class="row">
 			<div class="col-md-6">
 				<form method="POST">
 					<div class="form-group">
 						<label>Branch</label>
 						<input class="form-control" name="branch" value="<?php echo $tampil['branch'];?>" />  
 					</div>
	 				<div>
	 					<input type="submit" name="simpan" value="Ubah"  style="margin-top: 8px" class="btn btn-primary">
	 					<input type="button" value="Kembali" class="btn btn-danger" style="margin-top: 8px" onclick="history.back(-1)" />
	 				</div>
 				</form>
 		</div>
 	</div>
 </div>
</div>

<?php

$branch = $_POST ['branch'];


$simpan = $_POST ['simpan'];
if ($simpan )

{

	$sql = $koneksi->query("update branch set branch='$branch' where id='$id'");

	if ($sql)
	{
		?>		
		<script type="text/javascript">
			alert ("Data Berhasil Diubah");
 			window.location.href="?menu=input_data_report&input=masuk&page=branch";
		</script>
		<?php
	}
}

?>
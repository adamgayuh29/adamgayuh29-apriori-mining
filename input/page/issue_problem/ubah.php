 <?php
	 $id = $_GET['id'];

	 $sql = $koneksi->query("select * from issue_problem where id='$id'");

	 $tampil = $sql->fetch_assoc();

 ?>

 <div class="panel panel-default">
 	<div class="panel-heading">
 		Edit Issue Problem
 	</div>

 	<div class="panel-body">
 		<div class="row">
 			<div class="col-md-6">

 				<form method="POST">
 					<div class="form-group">
 						<label>Issue Problem</label>
 						<input class="form-control" name="issue_problem" value="<?php echo $tampil['issue_problem'];?>" />  
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

$issue_problem = $_POST ['issue_problem'];


$simpan = $_POST ['simpan'];
if ($simpan )

{

	$sql = $koneksi->query("update issue_problem set issue_problem='$issue_problem' where id='$id'");

	if ($sql)
	{
		?>		
		<script type="text/javascript">
			alert ("Data Berhasil Diubah");
 			window.location.href="?menu=input_data_report&input=masuk&page=issue_problem";
		</script>
		<?php
	}
}

?>
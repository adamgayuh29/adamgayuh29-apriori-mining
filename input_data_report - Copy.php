<?php
//session_start();
if (!isset($_SESSION['apriori_toko_id'])) {
    header("location:index.php?menu=forbidden");
}

include_once "database.php";
include_once "fungsi.php";
include_once "import/excel_reader2.php";
?>
<section class="page_head">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>Input Data Report</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
//object database class
$db_object = new database();

$pesan_error = $pesan_success = "";
if(isset($_GET['pesan_error'])){
    $pesan_error = $_GET['pesan_error'];
}
if(isset($_GET['pesan_success'])){
    $pesan_success = $_GET['pesan_success'];
}
?>

<div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                
                <form method="POST">
                    <div class="form-group">
                        <label>Tanggal Input</label>
                        <input class="form-control" name="transaction_date" type="date" />  
                    </div>
    
                    <div class="form-group">
                        <label>Subdistrict</label>
                        <select name="subdistrict">
                            <?php
                                $listsub ="select * from subdistrict";
                                $query=$db_object->db_list($listsub);
                                $result = mysqli_fetch_assoc($query);
                                // var_dump($result);die();
                                foreach($result as $key=>$valResult):
                            ?>

                            <option value="<?=$valResult['name_subdistrict']?>"><?=$valResult['name_subdistrict']?></option>
                            <?php endforeach?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>ISSUE PROBLEM</label>
                        <input class="form-control" name="issue_problem" />  
                    </div>

                    <div>
                        <input type="submit" name="simpan" value="Simpan" style="margin-top: 8px"  class="btn btn-primary">
                        <input type="button" value="Kembali" class="btn btn-danger" style="margin-top: 8px" onclick="history.back(-1)" />
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>

 <?php



if (isset($_POST['simpan']) )
 {
 $produk = $_POST['subdistrict'].', '.$_POST['issue_problem'];
 $transaction_date = $_POST['transaction_date']; 

    $sql = "insert into transaksi (transaction_date, produk) values('".$transaction_date."', '".$produk."' )";
$query=$db_object->db_query($sql);

    if ($query)
    {
        ?>      
        <script type="text/javascript">
            alert ("Data Berhasil Disimpan");
            window.location.href="?menu=input_data_report";
        </script>
        <?php
    }
 }

 ?>

<?php
function get_produk_to_in($produk){
    $ex = explode(",", $produk);
    //$temp = "";
    for ($i=0; $i < count($ex); $i++) { 

        $jml_key = array_keys($ex, $ex[$i]);
        if(count($jml_key)>1){
            unset($ex[$i]);
        }

        //$temp = $ex[$i];
    }
    return implode(",", $ex);
}

?>
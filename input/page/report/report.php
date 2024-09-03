  <div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
             Input Report Data 
         </div>
         <div class="panel-body">
            <a href="?menu=input_data_report&input=masuk&page=report&aksi=tambah" class="btn btn-success"><i class="fa fa-plus"></i> Input Report </a>
            
            <!-- export data to excel -->
            <!-- <a href="./laporan/laporan_buku_excel.php" target="blank" class="btn btn-default"><i class="fa fa-print"></i>Export To Excel </a> -->
            <div class="table-responsive">
                <table class="table table-striped" id="dataTables-example" width="100% ">
                    <thead>
                        <tr>
                            <th width="10">No</th>
                            <th>Date</th>
                            <th>Report</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = $koneksi->query("select * from transaksi order by transaction_date desc");

                        while ($data=$sql->fetch_assoc()) {


                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data["transaction_date"]; ?></td>
                                <td><?php echo $data["produk"]; ?></td>
                                <td>
                                    <a href="?menu=input_data_report&input=masuk&page=report&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info">Ubah</a>
                                    <a onclick="return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini ?')"
                                    href="?menu=input_data_report&input=masuk&page=report&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>

                            <?php
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>

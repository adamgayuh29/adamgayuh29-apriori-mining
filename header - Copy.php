<?php 
$menu = '';
if(isset($_GET['menu'])){
    $menu = $_GET['menu'];
}

?>

<header class="site-header container-fluid">
            <!-- /.top-header -->
            <div class="main-header">
                <div class="row">
                    <div class="main-header-left col-md-2 col-sm-6 col-xs-8">
                        <?php 
                        if (!isset($_GET['menu']) || $_GET['menu']=='home' ) {
                            //'', home
                        ?>
                        <a href="#" class="btn-left arrow-left fa fa-angle-left"></a>
                        <a href="#" class="btn-left arrow-right fa fa-angle-right"></a>
                        <?php 
                        }
                        ?>
                    </div> <!-- /.main-header-left -->
                    <div class="menu-wrapper col-md-10 col-sm-6 col-xs-4">
                        <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu hidden-xs hidden-sm">
                            <li <?php echo ($menu==''||$menu=='home')?"class='active'":""; ?> ><a href="index.php">Home</a></li>
                        <?php
                        if (empty($_SESSION['apriori_toko_id'])) {
                        ?>
                            <li><a href="login.php">Login</a></li>
                        <?php 
                        }
                        else{
                            if($_SESSION['apriori_toko_level']==1){
                        ?>

                            <li <?php echo ($menu=='input_data_report')?"class='active'":""; ?>><a href="index.php?menu=input_data_report&input=masuk&page=report">Input Data Report</a></li>
                            <li <?php echo ($menu=='data_transaksi')?"class='active'":""; ?> ><a href="index.php?menu=data_transaksi">Data Transaksi</a></li>
                            <li <?php echo ($menu=='proses_apriori')?"class='active'":""; ?>><a href="index.php?menu=proses_apriori">Proses Apriori</a></li>
                            <?php
                            }
                            ?>
                            <li <?php echo ($menu=='hasil_rule')?"class='active'":""; ?>><a href="index.php?menu=hasil_rule">Hasil Rule</a></li>
                            <li ><a href="logout.php">Logout</a></li>
                        <?php
                        }
                        ?>
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div id="responsive-menu">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <?php
                    if (empty($_SESSION['apriori_toko_id'])) {
                    ?>
                        <li><a href="login.php">Login</a></li>
                    <?php 
                    }
                    else{
                    ?>
                        <li <?php echo ($menu=='input_data_report')?"class='active'":""; ?>><a href="index.php?menu=input_data_report&input=masuk&page=report">Input Data Report</a></li>
                        <li <?php echo ($menu=='data_transaksi')?"class='active'":""; ?>><a href="index.php?menu=data_transaksi">Data Transaksi</a></li>
                        <li <?php echo ($menu=='proses_apriori')?"class='active'":""; ?>><a href="index.php?menu=proses_apriori">Proses Apriori</a></li>
                        <li <?php echo ($menu=='hasil_rule')?"class='active'":""; ?>><a href="index.php?menu=hasil_rule">Hasil Rule</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </header> <!-- /.site-header -->
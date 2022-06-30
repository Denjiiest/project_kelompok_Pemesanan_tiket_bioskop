<div class="container-fluid">
<div class="row">
        <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
            <div class="page-header">
                <span class="fas fa-users text-primary mt-2 "> Tiket yang sudah dibeli</span>
                <a class="text-danger" href="<?php echo base_url('user/data_user'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
            </div>
            <table class="table mt-3">
    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Judul FIlm</th>
                        <th>Tanggal Nonton</th>
                        <th>Jam Tayang</th>
                        <th>Harga </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($semuatiket as $semua) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $semua['nama']; ?></td>
                            <td><?= $semua['judul_tiket']; ?></td>
                            <td><?= $semua['tanggal_tiket']; ?></td>
                            <td><?= $semua['jam_tiket']; ?></td>
                            <td><?= $semua['harga_tiket']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
</table> 
</div>
    <!-- end of row table-->
</div>
<!-- /.container-fluid -->
</div>

    

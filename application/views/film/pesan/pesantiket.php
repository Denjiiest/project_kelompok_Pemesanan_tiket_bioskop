<form action="<?= base_url('pesanfilm/pembelian'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                <div class="container-fluid">
                    <img src="<?php echo base_url(); ?>assets/img/poster/logo.png" height="150" width="200">
                    <hr class="sidebar-divider">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Nama anda">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <select name="judul_tiket" class="form-control form-control-user">
                            <option value="">Pilih Film</option>
                            <?php foreach ($namafilm as $nama) { ?>
                            <option value="<?= $nama['id_film'];?>"><?= $nama['judul_film'];?></option>
                            <?php } ?>
                        </select>
                        <?= form_error('judul_tiket', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <select name="tanggal_tiket" class="form-control form-control-user">
                            <option value="">Pilih Tanggal</option>
                            <?php setlocale(LC_TIME, 'id_ID.utf8'); ?>
                            <?php foreach ($tanggalfilm as $tanggal) { ?>
                                <option value="<?= $tanggal['id_tanggal']; ?>"><?= date('D-d-m-Y',strtotime($tanggal['tanggal_film']));?> </option>
                               
                          <?php  } ?>
                        </select>
                        <?= form_error('tanggal_tiket', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                       <select name="jam_tiket" class="form-control form-control-user">
                        <option value=""> Pilih Jam Tayang </option>
                        <?php foreach ($jamfilm as $jam) { ?>
                            <option value ="<?= $jam['id_jam'];?>"><?= $jam['jam_awal']; ?></option>
                        <?php } ?>
                        </select>
                        <?= form_error('jam_tiket', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                       <select name="harga_tiket" class="form-control form-control-user">
                        <option value=""> Pilih berapa banyak beli </option>
                        <?php foreach ($harga as $hrg) { ?>
                            <option value ="<?= $hrg['kode_stok'];?>"><?= $hrg['jumlah_beli']; ?></option>
                        <?php } ?>
                        </select>
                        <?= form_error('harga_tiket', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i>Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Pesan</button>
     </div>
            </form>
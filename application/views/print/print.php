<div class="modal-body">
                <div class="container-fluid">
                     <img src="<?php echo base_url(); ?>assets/img/poster/logo.png" height="150" width="200">
                    <hr class="sidebar-divider">
<table class="table mt-2">
    <tr>
        <td> nama </td>
        <td>:</td>
        <td><?= $nama; ?></td>
</tr>
        <tr>
            <td> Judul film </td>
            <td>:</td>
        <td><?= $judul_tiket  ?></td>
</tr>
<tr>
    <td>Tanggal Nonton</td>
    <td>:</td>
        <td><?= $tanggal_tiket; ?></td>
</tr>
<tr>
    <td>Jam Tayang </td>
    <td>:</td>
        <td><?= $jam_tiket; ?></td>
</tr>
</table>
</br><a href ="<?php echo base_url('print') ?>"class="badge badge-info"><i class="fas fa-edit"></i> Print nota</a>
<script type="text/javascript">
    window.print();
    </script>
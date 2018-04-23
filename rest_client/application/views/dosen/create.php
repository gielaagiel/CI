<?php echo form_open('dosen/create');?>
<table>
    <tr><td>ID DOSEN</td><td><?php echo form_input('id_dosen');?></td></tr>
    <tr><td>NAMA DOSEN</td><td><?php echo form_input('nama_dosen');?></td></tr>
    <tr><td>KODE MAKUL</td><td><?php echo form_input('kdmk');?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('dosen','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
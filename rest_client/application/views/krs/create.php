<?php echo form_open('krs/create');?>
<table>
    <tr><td>KODE KRS</td><td><?php echo form_input('kd_krs');?></td></tr>
    <tr><td>NIM</td><td><?php echo form_input('nim');?></td></tr>
    <tr><td>SKS</td><td><?php echo form_input('sks');?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('krs','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
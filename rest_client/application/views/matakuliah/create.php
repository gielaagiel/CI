<?php echo form_open('matakuliah/create');?>
<table>
    <tr><td>KODE MAKUL</td><td><?php echo form_input('kdmk');?></td></tr>
    <tr><td>MATA KULIAH</td><td><?php echo form_input('nmmk');?></td></tr>
    <tr><td>SKS</td><td><?php echo form_input('sks');?></td></tr>
    <tr><td>PRODI</td><td><?php echo form_input('prodi');?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('matakuliah','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
<?php echo form_open('dosen/edit');?>
<?php echo form_hidden('id_dosen',$dosen[0]->id_dosen);?>
 
<table>
    <tr><td>ID DOSEN</td><td><?php echo form_input('',$dosen[0]->id_dosen,"disabled");?></td></tr>
    <tr><td>NAMA DOSEN</td><td><?php echo form_input('nama_dosen',$dosen[0]->nama_dosen);?></td></tr>
    <tr><td>KODE MAKUL</td><td><?php echo form_input('kdmk',$dosen[0]->kdmk);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('dosen','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
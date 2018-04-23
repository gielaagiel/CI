<?php echo form_open('matakuliah/edit');?>
<?php echo form_hidden('kdmk',$matakuliah[0]->kdmk);?>
 
<table>
    <tr><td>KODE MAKUL</td><td><?php echo form_input('',$matakuliah[0]->kdmk,"disabled");?></td></tr>
    <tr><td>MAKUL</td><td><?php echo form_input('nmmk',$matakuliah[0]->nmmk);?></td></tr>
    <tr><td>SKS</td><td><?php echo form_input('sks',$matakuliah[0]->sks);?></td></tr>
    <tr><td>PRODI</td><td><?php echo form_input('prodi',$matakuliah[0]->prodi);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('matakuliah','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
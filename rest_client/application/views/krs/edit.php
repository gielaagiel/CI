<?php echo form_open('krs/edit');?>
<?php echo form_hidden('kd_krs',$krs[0]->kd_krs);?>
 
<table>
    <tr><td>NIM</td><td><?php echo form_input('',$krs[0]->kd_krs,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nim',$krs[0]->nim);?></td></tr>
    <tr><td>PRODI</td><td><?php echo form_input('sks',$krs[0]->sks);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('krs','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
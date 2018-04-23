<?php echo $this->session->flashdata('hasil'); ?>
<table>
    <tr><th>KODE MAKUL</th><th>MAKUL</th><th>SKS</th><th>PRODI</th></tr>
    <?php
    foreach ($matakuliah as $m){
        echo "<tr>
              <td>$m->kdmk</td>
              <td>$m->nmmk</td>
              <td>$m->sks</td>            
              <td>$m->prodi</td>
              <td>".anchor('matakuliah/edit/'.$m->kdmk,'Edit')."
                  ".anchor('matakuliah/delete/'.$m->kdmk,'Delete')."</td>
              </tr>";
    }
    ?>
</table>
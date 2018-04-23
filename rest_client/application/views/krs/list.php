<?php echo $this->session->flashdata('hasil'); ?>
<table>
    <tr><th>KODE KRS</th><th>NIM</th><th>SKS</th><th></th></tr>
    <?php
    foreach ($krs as $m){
        echo "<tr>
              <td>$m->kd_krs</td>
              <td>$m->nim</td>
              <td>$m->sks</td>
              <td>".anchor('krs/edit/'.$m->kd_krs,'Edit')."
                  ".anchor('krs/delete/'.$m->kd_krs,'Delete')."</td>
              </tr>";
    }
    ?>
</table>
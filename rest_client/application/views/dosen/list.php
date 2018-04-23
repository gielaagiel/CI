<?php echo $this->session->flashdata('hasil'); ?>
<table>
    <tr><th>ID DOSEN</th><th>NAMA DOSEN</th><th>KODE MAKUL</th><th></th></tr>
    <?php
    foreach ($dosen as $d){
        echo "<tr>
              <td>$d->id_dosen</td>
              <td>$d->nama_dosen</td>
              <td>$d->kdmk</td>
              <td>".anchor('dosen/edit/'.$d->id_dosen,'Edit')."
                  ".anchor('dosen/delete/'.$d->id_dosen,'Delete')."</td>
              </tr>";
    }
    ?>
</table>
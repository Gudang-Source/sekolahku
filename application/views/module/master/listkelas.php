<?php if ($this->session->flashdata('sukses')):?>
  <?= $this->session->flashdata('sukses'); ?>
  <?php endif;?>
    <a class="btn btn-primary" href="<?= site_url('master/addKelas') ?>">add</a>
      <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%"> 
        <thead>
          <tr>
            <th>No</th>
            <th>Kelas</th>
            <th>Wali Kelas</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=0; foreach ($query as $key) :?>
          <tr>
           <td><?= ++$no;?></td>
            <td><?= $key->nama_kelas;?></td>
            <td><?= $key->nama_guru;?></td>
             <td wid_siswath="160px" class="text-center">
              <a href="<?=site_url('master/edit/'.$key->id_kelas); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Ubah</a>

              <a href="<?=site_url('master/delete/'.$key->id_kelas); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>

            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
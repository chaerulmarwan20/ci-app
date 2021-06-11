<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <?=$this->session->flashdata('flash');?>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?=base_url();?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-6">
      <form action="" method="POST">
        <div class="input-group">
          <input type="text" class="form-control" name="keyword" placeholder="Cari data mahasiswa..">
          <button class="btn btn-primary" type="submit">Cari</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-6">
      <h3>Daftar Mahasiswa</h3>
      <?php if (empty($mahasiswa)): ?>
        <div class="alert alert-danger" role="alert">
          Data mahasiswa tidak ditemukan
        </div>
      <?php endif;?>
      <ul class="list-group">
        <?php foreach ($mahasiswa as $mhs): ?>
          <li class="list-group-item">
            <?=$mhs['nama'];?>
            <a href="<?=base_url();?>mahasiswa/hapus/<?=$mhs['id'];?>" class="badge bg-danger float-end" onclick="return confirm('yakin?');">hapus</a>
            <a href="<?=base_url();?>mahasiswa/ubah/<?=$mhs['id'];?>" class="badge bg-success float-end">ubah</a>
            <a href="<?=base_url();?>mahasiswa/detail/<?=$mhs['id'];?>" class="badge bg-primary float-end">detail</a>
          </li>
        <?php endforeach;?>
      </ul>
    </div>
  </div>
</div>

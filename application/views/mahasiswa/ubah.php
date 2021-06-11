<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Ubah Data Mahasiswa
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <input type="hidden" name="id" value="<?=$mahasiswa['id'];?>">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?=$mahasiswa['nama'];?>">
              <small class="text-danger">
                <?=form_error('nama');?>
              </small>
            </div>
            <div class="mb-3">
              <label for="nrp" class="form-label">NRP</label>
              <input type="text" class="form-control" id="nrp" name="nrp" value="<?=$mahasiswa['nrp'];?>">
              <small class="text-danger">
                <?=form_error('nrp');?>
              </small>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="<?=$mahasiswa['email'];?>">
              <small class="text-danger">
                <?=form_error('email');?>
              </small>
            </div>
            <div class="mb-3">
              <label for="jurusan" class="form-label">Jurusan</label>
              <select class="form-select" id="jurusan" name="jurusan">
                <?php foreach ($jurusan as $j): ?>
                  <?php if ($j == $mahasiswa['jurusan']): ?>
                    <option value="<?=$j;?>" selected><?=$j;?></option>
                  <?php else: ?>
                    <option value="<?=$j;?>"><?=$j;?></option>
                  <?php endif;?>
                <?php endforeach;?>
              </select>
            </div>
            <button type="submit" name="ubah" class="btn btn-primary float-end">Ubah Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

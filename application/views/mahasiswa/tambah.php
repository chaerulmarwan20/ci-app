<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Tambah Data Mahasiswa
        </div>
        <div class="card-body">
          <?php if (validation_errors()): ?>
            <div class="alert alert-danger" role="alert">
              <?=validation_errors();?>
            </div>
          <?php endif;?>
          <form action="" method="POST">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
              <label for="nrp" class="form-label">NRP</label>
              <input type="text" class="form-control" id="nrp" name="nrp">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
              <label for="jurusan" class="form-label">Jurusan</label>
              <select class="form-select" id="jurusan" name="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Komputer">Teknik Komputer</option>
              </select>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-end">Tambah Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

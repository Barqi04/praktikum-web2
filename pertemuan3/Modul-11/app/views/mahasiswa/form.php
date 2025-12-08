<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><?= $data['judul']; ?></h4>
        </div>

        <div class="card-body">
            <form action="<?= BASEURL; ?>/mahasiswa/<?= $data['aksi']; ?>" method="post">

                <?php if(isset($data['mhs']['id'])): ?>
                    <input type="hidden" name="id" value="<?= $data['mhs']['id']; ?>">
                <?php endif; ?>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" 
                           name="nama" 
                           value="<?= isset($data['mhs']['nama']) ? $data['mhs']['nama'] : ''; ?>" 
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">NPM</label>
                    <input type="text" class="form-control" 
                           name="npm" 
                           value="<?= isset($data['mhs']['npm']) ? $data['mhs']['npm'] : ''; ?>" 
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" 
                           name="email" 
                           value="<?= isset($data['mhs']['email']) ? $data['mhs']['email'] : ''; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <select class="form-select" name="jurusan">
                        <?php $j = isset($data['mhs']['jurusan']) ? $data['mhs']['jurusan'] : ''; ?>
                        <option value="Teknik Informatika" <?= $j == 'Teknik Informatika' ? 'selected' : ''; ?>>Teknik Informatika</option>
                        <option value="Sistem Informasi" <?= $j == 'Sistem Informasi' ? 'selected' : ''; ?>>Sistem Informasi</option>
                        <option value="Teknik Industri" <?= $j == 'Teknik Industri' ? 'selected' : ''; ?>>Teknik Industri</option>
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-outline-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>

            </form>
        </div>
    </div>
</div>

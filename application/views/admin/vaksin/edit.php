<div class="card">
  <div class="card-header">
    Edit Warga
  </div>
  <div class="card-body">
    <?php if ($this->session->pesan) echo $this->session->pesan; ?>
    <form action="<?= base_url('admin/warga/edit/' . $id_warga); ?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">NIK</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIK" name="nik" value="<?= set_value('nik', $nik); ?>" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Lengkap</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Lengkap" name="nama" value="<?= set_value('nama', $nama); ?>" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Tempat Lahir</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Tempat Lahir" name="tempat_lahir" value="<?= set_value('tempat_lahir', $tempat_lahir); ?>" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Tanggal Lahir</label>
        <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Lengkap" name="tanggal_lahir" value="<?= set_value('tanggal_lahir', $tanggal_lahir); ?>" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Alamat</label>
        <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" placeholder="Masukan Nama Lengkap" required><?= set_value('alamat', $alamat); ?></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Status Perkawinan</label>
        <select name="status_perkawinan" id="status_perkawinan" class="form-control" required>
          <option value="menikah" <?= $status_perkawinan == 'menikah' ? 'selected' : '' ; ?>>Menikah</option>
          <option value="belum_menikah" <?= $status_perkawinan == 'belum_menikah' ? 'selected' : '' ; ?>>Belum Menikah</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Foto</label>
        <input type="file" class="form-control" id="exampleInputPassword1" name="foto">
        <input type="hidden" name="foto_lama" value="<?= $foto; ?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
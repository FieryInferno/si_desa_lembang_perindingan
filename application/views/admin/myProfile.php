<div class="card">
  <div class="card-header">
    My Profile
  </div>
  <div class="card-body">
    <?php if ($this->session->pesan) echo $this->session->pesan; ?>
    <form id="formEdit" action="<?= base_url(); ?>admin/my_profile/edit.html" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <?= $edit == true ? '<input type="file" name="foto" id="foto">' : '<img src="" alt="" id="photoUrl" class="photoUrl">' ; ?>
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" <?= $edit == true ? '' : 'readonly' ; ?> name="nama" value="<?= $this->session->nama; ?>">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="emailAdmin" <?= $edit == true ? '' : 'readonly' ; ?> name="email" value="<?= $this->session->email; ?>">
      </div>
      <?php
        if ($edit) { ?>
          <button type="submit" class="btn btn-success">Simpan</button>
        <?php } else { ?>
          <a href="<?= base_url(); ?>admin/my_profile/edit.html" class="btn btn-primary">Edit</a>
        <?php }
      ?>
    </form>
  </div>
</div>
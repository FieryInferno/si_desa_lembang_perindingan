<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <table class="table">
    <thead>
      <tr>
      <th scope="col">#</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Tempat, Tanggal Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Status Perkawinan</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $no = 1;
        foreach ($bantuan as $key) { ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $key['nik']; ?></td>
            <td><?= $key['nama']; ?></td>
            <td><?= $key['tempat_lahir'] . ', ' . $key['tanggal_lahir']; ?></td>
            <td><?= $key['alamat']; ?></td>
            <td>
              <?php 
                switch ($key['status_perkawinan']) {
                  case 'menikah':
                    echo 'Menikah';
                    break;
                  case 'belum_menikah':
                    echo 'Belum Menikah';
                    break;
                  
                  default:
                    # code...
                    break;
                }
              ?>
            <td><img src="<?= base_url('assets/' . $key['foto']); ?>" alt="" width="50%"></td>
            <td>
              <button class="btn btn-success mb-3"type="button" data-toggle="modal" data-target="#exampleModal<?= $key['id_bantuan']; ?>">Edit</button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal<?= $key['id_bantuan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="<?= base_url('admin/edit_bantuan/' . $key['id_bantuan']); ?>" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Warga</label>
                          <select name="id_warga" id="id_warga" class="form-control">
                            <option>Pilih Warga</option>
                            <?php
                              foreach ($warga as $value) { 
                                if ($value['id_warga'] == $key['id_warga']) {
                                  $selected = 'selected';
                                } else {
                                  $selected = '';
                                } ?>
                                <option value="<?= $value['id_warga']; ?>" <?= $selected; ?>><?= $value['nama']; ?></option>
                              <?php }
                            ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Jenis Bantuan</label>
                          <select name="jenis_bantuan" id="jenis_bantuan" class="form-control" readonly>
                            <option value="<?= $jenisBantuan; ?>"><?= strtoupper($jenisBantuan); ?></option>
                          </select>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <a href="<?= base_url('admin/hapus_bantuan/' . $key['id_bantuan']); ?>" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
        <?php }
      ?>
    </tbody>
  </table>
</body>
</html>
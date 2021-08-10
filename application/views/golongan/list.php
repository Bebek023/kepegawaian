<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="id" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/smenu.css'; ?>">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/bayar.css'; ?>">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/pegawai">Pegawai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/cuti">Cuti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/lembur">Lembur<span class="sr-only">(current)</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url(); ?>/golongan">Golongan<span class="sr-only">(current)</a>
        </li>
      </ul>
      <?php echo form_open("login/logout") ?>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
      <?php echo form_close() ?>
    </div>
  </nav>
  <div class="section">
    <div class="container">
      <h3>List Lembur</h3>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah"> Tambah Golongan Baru </button>
      <!-- modal create -->
      <div class="modal fade bd-example-modal-lg" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Ubah Golongan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open("golongan/create_data") ?>
            <div class="modal-body">
              <div class="form-group">
                <label for="gol">Nama Golongan</label>
                <input type="text" class="form-control" placeholder="Nama Golongan" name="gol">
              </div>
              <div class="form-group">
                <label for="gj">Gaji Pokok</label>
                <input type="text" class="form-control" placeholder="Gaji Pokok" name="gj">
              </div>
              <div class="form-group">
                <label for="lmbr">Bonus Lembur</label>
                <input type="text" class="form-control" placeholder="Bonus Lembur" name="lmbr">
              </div>
              <div class="form-group">
                <label for="istri">Tunjangan Istri</label>
                <input type="text" class="form-control" placeholder="Tunjangan Istri" name="istri">
              </div>
              <div class="form-group">
                <label for="anak">Tunjangan Anak</label>
                <input type="text" class="form-control" placeholder="Tunjangan Anak" name="anak">
              </div>
              <div class="form-group">
                <label for="trsprt">Tunjangan Transportasi</label>
                <input type="text" class="form-control" placeholder="Tunjangan Transportasi" name="trsprt">
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" data-toggle="modal"> Ubah </button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
            <?php echo form_close() ?>
          </div>
        </div>
      </div>
      <table class="table table-hover">
        <thead align="center">
          <tr>
            <th scope="col" rowspan="2">Golongan
            <th scope="col" rowspan="2">Gaji Pokok
            <th scope="col" rowspan="2">Bonus Lembur
            <th scope="col" colspan="3">Tunjangan
            <th scope="col" rowspan="2">
          </tr>
          <tr>
            <td scope="row">Istri</td>
            <td>Anak</td>
            <td>Transportasi</td>
          </tr>
        </thead>
        <?php foreach ($data as $value) : ?>
          <tr align="center">
            <td scope="row"><?php echo $value->nama_golongan ?></td>
            <td><?php echo $value->gaji_pokok ?></td>
            <td><?php echo $value->bonus_lembur ?></td>
            <td><?php echo $value->tunjangan_istri ?></td>
            <td><?php echo $value->tunjangan_anak ?></td>
            <td><?php echo $value->tunjangan_transportasi ?></td>
            <td>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus<?php echo $value->id ?>"> Hapus </button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalUbah<?php echo $value->id ?>"> Ubah </button>
              <!-- modal hapus -->
              <div class="modal fade" id="modalHapus<?php echo $value->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Hapus Golongan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <label class="txt">Hapus data golongan ini?</label>
                    </div>
                    <div class="modal-footer">
                      <a class="btn btn-danger" href="<?php echo site_url() ?>/golongan/delete?id=<?php echo $value->id ?>" role="button">Hapus</a>
                      <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal update -->
              <div class="modal fade bd-example-modal-lg" id="modalUbah<?php echo $value->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Ubah Golongan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <?php echo form_open("golongan/update_data") ?>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="gol">Nama Golongan</label>
                        <input type="text" class="form-control" placeholder="Nama Golongan" name="gol" value="<?php echo $value->nama_golongan ?>">
                      </div>
                      <div class="form-group">
                        <label for="gj">Gaji Pokok</label>
                        <input type="text" class="form-control" placeholder="Gaji Pokok" name="gj" value="<?php echo $value->gaji_pokok ?>">
                      </div>
                      <div class="form-group">
                        <label for="lmbr">Bonus Lembur</label>
                        <input type="text" class="form-control" placeholder="Bonus Lembur" name="lmbr" value="<?php echo $value->bonus_lembur ?>">
                      </div>
                      <div class="form-group">
                        <label for="istri">Tunjangan Istri</label>
                        <input type="text" class="form-control" placeholder="Tunjangan Istri" name="istri" value="<?php echo $value->tunjangan_istri ?>">
                      </div>
                      <div class="form-group">
                        <label for="anak">Tunjangan Anak</label>
                        <input type="text" class="form-control" placeholder="Tunjangan Anak" name="anak" value="<?php echo $value->tunjangan_anak ?>">
                      </div>
                      <div class="form-group">
                        <label for="trsprt">Tunjangan Transportasi</label>
                        <input type="text" class="form-control" placeholder="trsprt" name="trsprt" value="<?php echo $value->tunjangan_transportasi ?>">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" data-toggle="modal"> Ubah </button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $value->id ?>">
                    <?php echo form_close() ?>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</body>

</html>
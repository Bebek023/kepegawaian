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
          <a class="nav-link" href="<?php echo site_url(); ?>/pegawai">Pegawai <span class="sr-only">(current)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/cuti">Cuti</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url(); ?>/lembur">Lembur<span class="sr-only">(current)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/golongan">Golongan</a>
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
      <table class="table table-hover">
        <thead align="center">
          <tr>
            <th scope="col">NIP
            <th scope="col">Nama Pegawai
            <th scope="col">Tanggal mulai lembur
            <th scope="col">Tanggal selesai lembur
            <th scope="col">
          </tr>
        </thead>
        <?php foreach ($data as $value) : ?>
          <tr align="center">
            <td scope="row"><?php echo $value->nip ?></td>
            <td><?php echo $value->nama ?></td>
            <td><?php echo $value->tanggal_mulai ?></td>
            <td><?php echo $value->tanggal_selesai ?></td>
            <td>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus<?php echo $value->nip ?>"> Hapus </button>
              <!-- modal hapus -->
              <div class="modal fade" id="modalHapus<?php echo $value->nip ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Hapus Cuti</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <label class="txt">Hapus data cuti ini?</label>
                    </div>
                    <div class="modal-footer">
                      <a class="btn btn-danger" href="<?php echo site_url() ?>/lembur/delete?id=<?php echo $value->id ?>" role="button">Hapus</a>
                      <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
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
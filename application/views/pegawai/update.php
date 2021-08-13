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
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url(); ?>/pegawai">Pegawai <span class="sr-only">(current)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/cuti">Cuti</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/lembur">Lembur</a>
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
      <?php echo form_open("pegawai/update_data") ?>
      <?php foreach ($data as $value) { ?>
        <div class="form-group">
          <label for="nip">NIP</label>
          <input type="text" class="form-control" placeholder="NIP" name="nip" value="<?php echo $value->nip ?>">
        </div>
        <div class="form-group">
          <label for="nik">NIK</label>
          <input type="text" class="form-control" placeholder="NIK" name="nik" value="<?php echo $value->nik ?>">
        </div>
        <div class=" form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $value->nama ?>">
        </div>
        <div class=" form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $value->alamat ?>">
        </div>
        <div class=" form-group">
          <label for="agama">Agama</label>
          <input type="text" class="form-control" placeholder="Agama" name="agama" value="<?php echo $value->agama ?>">
        </div>
        <div class=" form-group">
          <label for="golongan">Golongan</label>
          <select class="form-control" name="golongan">
            <?php foreach ($data_gol as $val) {
              if ($val->id == $value->id_golongan) { ?>
                <option selected value="<?php echo $val->id ?>"><?php echo $val->nama_golongan ?></option>
              <?php } else { ?>
                <option value="<?php echo $val->id ?>"><?php echo $val->nama_golongan ?></option>
            <?php }
            } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="telepon">Telepon</label>
          <input type="text" class="form-control" placeholder="Telepon" name="telepon" value="<?php echo $value->telepon ?>">
        </div>
        <div class=" form-group">
          <label for="tgl-lahir">Tanggal Lahir</label>
          <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $value->tanggal_lahir ?>">
        </div>
        <div class=" form-group">
          <label for="jk">Jenis Kelamin</label>
          <select class="form-control" name="jk">
            <?php if ($value->jenis_kelamin == "L") { ?>
              <option selected value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            <?php } elseif ($value->jenis_kelamin == "P") { ?>
              <option value="L">Laki-Laki</option>
              <option selected value="P">Perempuan</option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="nikah">Status Nikah</label>
          <select class="form-control" name="nikah">
            <?php if ($value->status_nikah == 1) { ?>
              <option selected value="1">Sudah Menikah</option>
              <option value="0">Belum Menikah</option>
            <?php } elseif ($value->status_nikah == 0) { ?>
              <option value="1">Sudah Menikah</option>
              <option selected value="0">Belum Menikah</option>
            <?php } ?>

          </select>
        </div>
        <div class="form-group">
          <label for="juml-anak">Jumlah Anak</label>
          <input type="number" class="form-control" placeholder="Jumlah Anak" name="anak" value="<?php echo $value->jumlah_anak ?>">
        </div>
        <div class=" form-group">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <input type="hidden" name="id" value="<?php echo $value->id ?>">
      <?php } ?>
      <?php echo form_close() ?>
    </div>
  </div>
</body>

</html>
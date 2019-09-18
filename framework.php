<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-light" style="">
  <a class="navbar-brand" href="#">CHRYSIE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- AKHIR DARI HEADER -->

<!-- KONTEN -->
<div class="container">
    <div class="row justify-content-center" style="padding : 20px">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">FORMULIR</div>
                    <div class="card-body">
                    <!-- isi Disini goblog,lain diditu tolol -->
                    <div class="form-group">
                    <form action="" method="POST">
                        <label for="">Name :</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group card-body">
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                        <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                    </div>
                    </form>
                    <?php
                        if (isset($_POST['simpan'])) {
                            $a = $_POST['name'];
                            $b = $_POST['alamat'];
                        } ?>
                    <!-- Hasil -->
                    <div class="row">
                        <div class="col-md-12">
                          <table class="table">
                            <tr>
                              <th>Nama</th>
                              <th>Alamat</th>
                            </tr>
                            <tr>
                              <th><?php echo $a; ?></th>
                              <th><?php echo $b; ?></th>
                            </tr>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- AKHIR DARI KONTEN -->

<!-- INI JS SLURRR -->
<!-- JQUEARY PERTAMA,SELANJUTNYA BEBAS.JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
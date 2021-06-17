<?php
if (isset($_GET['data'])){
  $id_kategori_artikel = $_GET['data'];
  $_SESSION['id_kategori_artikel'] = $id_kategori_artikel;
  //get data tag
  $sql_ad = "SELECT `kategori_artikel` FROM `kategori_artikel` WHERE `id_kategori_artikel` = '$id_kategori_artikel'";
  $query_ad = mysqli_query($koneksi,$sql_ad);
  while ($data_ad = mysqli_fetch_row($query_ad)){
    $kategori_artikel= $data_ad[0];
    }
  } 
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Kategori Artikel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="kategori-artikel">Kategori Artikel</a></li>
              <li class="breadcrumb-item active">Edit Kategori Artikel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Kategori Artikel</h3>
        <div class="card-tools">
          <a href="kategori-artikel" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
        <?php if (!empty($_GET['notif'])) { ?>
              <?php if ($_GET['notif']=="kategorikosong") { ?>
                <div class="alert alert-danger" role="alert">Maaf data Kategori artikel wajib di isi</div>
              <?php } ?>
            
          <?php } ?>
          
      </div>
      <form class="form-horizontal" method="post" action="konfirmasi-edit-kategori-artikel">
        <div class="card-body">
          <div class="form-group row">
            <label for="Artikel" class="col-sm-3 col-form-label">Edit Kategori artikel</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="Artikel" name="kategori_artikel" value="<?php echo $kategori_artikel; ?>">
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->
    </section>

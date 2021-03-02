<?php 

session_start();
if(isset($_SESSION['admin_Kullanici_Adi'])){
  
} else {
  header('Location:login.php');
}


include 'header.php'; 
include 'navbar.php'; 

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Site Genel Ayarları</h1>
            <p>Footer bölümünün  ayarlarını buradan kontrol edebilir ve güncelleyebilirsiniz.</p>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Site Genel Ayarları</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Footer Ayarları</h3>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="islem.php" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Telif Hakkı</label>
                    <div class="col-sm-10">
                      <input type="text" name="telif_hakki" value="<?php echo $ayar_cek['telif_hakki']; ?>" class="form-control" id="inputEmail3" placeholder="Exp: Copyright 2020-2021">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Copyright Link</label>
                    <div class="col-sm-10">
                      <input type="text" name="telif_url" value="<?php echo $ayar_cek['telif_url']; ?>" class="form-control" id="inputEmail3" placeholder="Exp: www.oldthiefstudio.com">
                    </div>
                  </div>
                
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Copyright ismi</label>
                    <div class="col-sm-10">
                      <input type="text"  name="copyright_isim" value="<?php echo $ayar_cek['copyright_isim']; ?>" class="form-control" id="inputEmail3" placeholder="Exp: oldthiefstudio">
                    </div>
                  </div>
                 
                </div>
                
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="kayit_Footer" class="btn btn-dark"> Kaydet</button>
                  
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
         
    </section>
    <!-- /.content -->
  </div>
<?php include 'footer.php'; ?>
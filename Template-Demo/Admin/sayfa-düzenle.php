<?php 

session_start();
if(isset($_SESSION['admin_Kullanici_Adi'])){
  
} else {
  header('Location:login.php');
}


include 'header.php'; 
include 'navbar.php'; 

$dersler_id=$_GET['ders_id'];
$dersleri_sor = $baglan->query("select * from dersler where dersler_id='$dersler_id'");
$dersleri_cek = mysqli_fetch_assoc($dersleri_sor)


?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ders Ayarları</h1>
          </div>
          <hr>
         
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Ders Ayarları</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <hr>
    <div >
           <p style="text-align:left; margin-left:2%;"> Buradan segmentten dersleri düzenleyebilirsiniz.</p>
          </div>
          <br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-dark">
            
              <div class="card-header">
                <h3 class="card-title">Ders Düzenle</h3>
              </div>
              
              
              
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="islem.php" method="POST">
              <input type="hidden" name="dersler_id" value="<?php echo $dersleri_cek['dersler_id'];?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Yeni Ders Adı</label>
                    <div class="col-sm-10">
                      <input type="text" name="ders_ad_duzenle" value="<?php echo $dersleri_cek['ders_ad']; ?>" class="form-control"  id="inputEmail3"  placeholder="Exp: Araştırmalar">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Yeni Ders İçeriği</label>
                    <div class="col-sm-10">
                      <input type="text" name="ders_icerik_duzenle"value="<?php echo $dersleri_cek['ders_icerik']; ?>" class="form-control" id="inputPassword3" placeholder="Exp: www.oldthiefstudio.com or localy arastirma.php">
                    </div>
                    
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Yeni Ders Linki</label>
                    <div class="col-sm-10">
                      <input type="text" name="ders_link_duzenle"value="<?php echo $dersleri_cek['ders_link']; ?>" class="form-control" id="inputPassword3" placeholder="Exp: www.oldthiefstudio.com or localy arastirma.php">
                    </div>
                    
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Yeni Ders Sırası</label>
                    <div class="col-sm-10">
                      <input type="text" name="ders_kodlama_link_duzenle"value="<?php echo $dersleri_cek['ders_kodlama_link']; ?>" class="form-control" id="inputPassword3" placeholder="Exp: www.oldthiefstudio.com or localy arastirma.php">
                    </div>
                    
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-dark" name="ders_Duzenle"> Değiştir</button>
                  
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php include 'footer.php'; ?>
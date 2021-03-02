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
            <h1>Sayfa Ayarları</h1>
          </div>
          <hr>
         
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Sayfa Ayarları</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <hr>
    <div >
           <p style="text-align:left; margin-left:2%;"> Buradan segmentten yeni sayfa ekleyebilirsiniz.</p>
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
                <h3 class="card-title">Ders Ekleme</h3>
              </div>
              
              
              
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="islem.php" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Sayfa Adı</label>
                    <div class="col-sm-10">
                      <input type="text" name="ders_ad" class="form-control"  id="inputEmail3"  placeholder="Exp: Makine Öğrenmesine Giriş">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Sayfa İçeriği</label>
                    <div class="col-sm-10">
                      <input type="text" name="ders_icerik" class="form-control"  id="inputEmail3"  placeholder="Exp: Bu içerik derin öğrenme içindir. NN yapısını barındırır.">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Sayfa Sırası</label>
                    <div class="col-sm-10">
                      <input type="text" name="ders_sira"class="form-control" id="inputPassword3" placeholder="Exp: 1711404011">
                    </div>
                    
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Sayfa Görünürlüğü</label>
                    <div class="col-sm-10">
                    <select class="form-control select2bs4" name="ders_sayfa" style="width: 10%;">
                    <option  value="1" >Evet</option>
                    <option value="2" >Hayır</option>
                    
                  </select>
                    </div>
                    
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Sayfa Tipi</label>
                    <div class="col-sm-10">
                    <select class="form-control select2bs4" name="ders_link" style="width: 10%;">
                    <option  value="../Portofilo.php" >Portofilo</option>
                    <option value="../GeneticAlgorithm.php" >Contact</option>
                    <option  value="../404-NotFound.php" >Empty</option>
                    
                    
                  </select>
                    </div>
                    
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Sayfa URL</label>
                    <div class="col-sm-10">
                      <input type="text" name="ders_kodlama_link"class="form-control" id="inputPassword3" placeholder="Exp: www.oldthiefstudio.com or localy arastirma.php">
                    </div>
                    
                  </div>
                  
                    
                  </div>
                 
               
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-dark" name="ders_Kayit_Et"> Sayfayı Kaydet</button>
                  
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
<?php 

session_start();
if(isset($_SESSION['admin_Kullanici_Adi'])){
  
} else {
  header('Location:login.php');
}


include 'header.php'; 
include 'navbar.php'; 



?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Başlık</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Harika sitenizi yaratmaya başlayın! Bu template websitenizin genel ayar yönetimini, kullanıcı kayıt ve md5 şifreleme ile session temelli kullanıcı girişini. 
          Otomatik login sayfası yönlendirme işlemlerini, dinamik menu yaratma sistemini ve php mail gönderme ve smtp controller arayüzünü içermektedir. 
          Kendi dinamik widget sisteminizi ekleyerek kolaylıkla kullanıma hazır hale getirebilirsiniz. Php kodlamasında phpmyadmin üzerinde kullanılan veritabanı github dosyası içerisinde bulunmaktadır.
          Kendi veritabanlarınızı oluşturduğunuzda gerekli güncellemeleri, veritabanı backup'ına bakarak yapabilir veya mevcut veritabanı üzerinden geliştirmeye devamedebilirsiniz.
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    </section>
    <!-- /.content -->
  </div>
<?php include 'footer.php'; ?>
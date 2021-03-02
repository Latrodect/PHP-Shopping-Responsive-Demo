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
            <p>Yeni sayfa ekleme işlemleri ve ders linklerini bu bölmeden ayarlayabilirsiniz.</p>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Sayfalar</a></li>
              <li class="breadcrumb-item active">Sayfa Ayarları</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sayfalarınızı buradan yönetin.</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
              <div class="col-sm">
              <p>Yeni sayfa elemanı eklemek için butona tıkayın.</p>
              </div>
              <div class="col-sm12">
              <a class="btn btn-success pull-right" href="sayfa-ekle.php" role="button">Yeni Sayfa Ekle</a>
              
              </div>
    
              
              
              </div>
              
              <hr>
              <div class="panel-heading">Ekli Olan Dersler.</div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Ders Id</th>
                    <th>Ders Adı</th>
                    <th>Ders Linkleri</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
										$dersleri_sor = $baglan->query("select * from dersler");
										
										while($dersleri_cek = mysqli_fetch_assoc($dersleri_sor)) {
											$ders_isim =   $dersleri_cek["ders_ad"]; 
											
                  echo '<tr>';
                    echo '<td>'.$dersleri_cek["dersler_id"].'</td>';
                    echo '<td>'.$dersleri_cek["ders_ad"].'</td>';
                    echo '<td>'.$dersleri_cek["ders_link"].'</td>';
                    echo '<td>  <a class="btn btn-dark pull-right" href="sayfa-düzenle.php?ders_id='.$dersleri_cek["dersler_id"].'" role="button">Düzenle</a></td>';
                    echo '<td>  <a class="btn btn-danger pull-right" href="islem.php?ders_id='.$dersleri_cek["dersler_id"].'&derskaldir=ok" role="button">Kaldır</a></td>';
                  echo '</tr>';
                }
                ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Sayfa Id</th>
                    <th>Sayfa Adı</th>
                    <th>Sayfa Linkleri</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php include 'footer.php'; ?>
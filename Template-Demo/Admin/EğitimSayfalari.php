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
            <h1>Eğitim Safları</h1>
            Eğitim sayflarını ders oluştururken link olarak ekleyiniz.
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Eğitim Sayfalarını İnceleyin.</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
              <div class="col-sm">
              </div>
              <div class="col-sm12">
              
              </div>
    
              
              
              </div>
              
              <hr>
              <div class="panel-heading">Ekli Olan Menuler.</div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Eğitim Id</th>
                    <th>Eğitim Adı</th>
                    <th>Eğitim Açıklaması </th>
                    <th>Eğitim Linki</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
										$egitimi_Sor = $baglan->query("select * from egitim_sayfalari");
										
										while($egitimi_Cek = mysqli_fetch_assoc($egitimi_Sor)) {
											$egitim_adi =   $egitimi_Cek["egitim_adi"]; 
											
                  echo '<tr>';
                    echo '<td>'.$egitimi_Cek["egitim_id"].'</td>';
                    echo '<td>'.$egitimi_Cek["egitim_adi"].'</td>';
                    echo '<td>'.$egitimi_Cek["egitim_aciklamasi"].'</td>';
                    echo '<td>  '.$egitimi_Cek["egitim_linki"].'</td>';
                  echo '</tr>';
                }
                ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Eğitim Id</th>
                    <th>Eğitim Adı</th>
                    <th>Eğitim Açıklaması </th>
                    <th>Eğitim Linki</th>
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
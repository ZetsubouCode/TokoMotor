<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Antok Motor</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('tets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css? family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('test/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>
 
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Antok Motor</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Home</span></a>
      </li>

   


      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/barang') }}" >
          <i class="fas fa-fw fa-wrench"></i>
          <span>Product</span>
        </a>
        
      </li>

    

    

      <!-- Nav Item - Charts -->
      

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/manifest') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan </span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/ganti_user') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>User</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/logout">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Logout</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

    

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       
        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>         
        </nav>
        <!-- End of Topbar -->

 <!-- Awal tamplate  -->
    
    <!-- Awal tamplate  -->
     <div class="container">
        <h2>Edit Stok</h2><br>        
        <div class="  text-center" >
          
          <form action="/updatestok" method="post"> 
           
              @csrf
              <table>
                <input type="hidden" name="id" value="{{$data->id_barang}}">
                <tr>
                  <td><span>Kode Barang </span></td>
                  <td><input type="text" style="width:265px; height:30px;" name="kodebarang" ></td>
                </tr>              
                <tr>
                  <td><span>Nama Barang </span></td>
                  <td><textarea style="width:265px; height:30px;" name="namabarang"> </textarea></td>
                </tr>
                <!-- <tr>
                  <td><span>Tanggal Masuk </span></td>
                  <td><input type="date" style="width:265px; height:30px;" name="date_arrival" /></td>
                </tr> -->
                <tr>
                  <td><span>Harga beli </span></td>
                  <td><input type="text" id="txt2" style="width:265px; height:30px;" name="hargabeli" onkeyup="sum();" Required></td> 
                </tr>

                <tr>
                  <td><span>Jumlah Barang : </span></td>
                  <td><input type="number" style="width:265px; height:35px;" min="0" id="" onkeyup="sum();" name="jumlahbarang" Required ><br></td>
                </tr>
                <tr>
                  <td></td>
                  <td ><button type="submit" class="btn btn-primary btn-block"> Save</button></td>
                </tr>
              

          </div>
      </div> 
      </table>
      </div>
    </form>
</div>
         
         

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>AntokSparepart &copy; 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('tets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('tets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('tets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('tets/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('tets/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('tets/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('tets/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>

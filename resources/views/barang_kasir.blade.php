<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <title>Barang kasir</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('tets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('test/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>
 
<body id="page-top">
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Beli</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         
         <form action="" method="post"> 
          <div class="card-body"> 
              @csrf
              <table>
                 
                <tr>
                  <td><span>Name </span></td>
                  <td><textarea style="width:265px; height:30px;" name="namabarang"> </textarea></td>
                </tr>             
                <tr>
                  <td><span>Jumlah Barang : </span></td>
                  <td><input type="number" style="width:265px; height:35px;" min="0" id="txt11" onkeyup="sum();" name="stok" Required ><br></td>
                </tr>
               <!--  <tr>
                  <td></td>
                  <td ><button class="btn btn-primary btn-block" type="submit"> Save</button></td>  
                </tr> -->
        

          </div>
      
      </table>
      </div>
    </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
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

      <li class="nav-item active">
        <a class="nav-link collapsed" href="kasir">
          <i class="fas fa-fw fa-cog"></i>
          <span>Kasir</span>
        </a>
      </li> 
      

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="barang_kasir" >
          <i class="fas fa-fw fa-wrench"></i>
          <span>Product</span>
        </a>
        
      </li>

    

    

      <!-- Nav Item - Charts -->

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="manifest_kasir">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan </span></a>
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

 <!-- awal -->
<div class="container-fluid">
    <h2>List Barang</h2>
    
    <br><br>
    <input type="text" class='rounded' name="filter" value="" id="filter" placeholder="Scan barcode / search produk" autocomplete="off" /><br>
   
   <table class="table table-bordered text-center " id="resultTable" data-responsive="table">
    <tr class="bg-primary text-white" style="font-size: 19px;">
      <th>  No </th>
      <th> Kode Barang </th>
      <th> Nama Barang </th>
      <th> Merk </th>      
      <th>Harga Jual</th>
      <th> Stok </th>
      <th>Action</th>
      
    </tr>
    @foreach($data as $a)
    <tr style="color: black; font-size: 18px;">      
      <td>{{$a->id_barang}}</td>
      <td>{{$a->kode_barang}}</td>
      <td>{{$a->nama_barang}}</td>      
      <td>{{$a->merk}}</td>
      <td>{{$a->harga_jual}}</td>
      <td>{{$a->stok}}</td>        
      <td>
        <a  href="" class="btn btn-warning"  data-toggle="modal" data-target="#exampleModal">Beli</a>
      </td>
    </tr>
    @endforeach
  </table>
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

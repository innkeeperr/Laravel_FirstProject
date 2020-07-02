<!DOCTYPE html>
<html lang="en">

@include('layouts.master')

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
  
    <!-- Navbar -->
  @include('layouts.navbar')

  <!-- Main Sidebar Container -->
  @include('layouts.sidebar')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Contact Section</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

  {{-- Here is content to update on each site --}}
  <div class="row justify-content-center">
    <div class="col-md-6">
      
        <div class="card text-center">
            <div class="card-header">
              <h3>Contact with us!</h3> 
            </div>
            <div class="card-body">
              <h4 class="card-title">Email Address: main@edu.cdv.pl</h4>
            </div>
            <div class="card-body m-0">
              <h4 class="card-title">Phone Number: 123 965 874</h4>           
            </div>
            <div class="card-body">
                <h4 class="card-title">Address: Poznań, Stary Rynek 99/1</h4>           
              </div>
            <div class="card-footer text-muted">
                <a href="/home" class="btn btn-primary">Back To Dashboard</a>
            </div>
          </div>

    </div>
  </div>



  <!-- Main Footer -->
  @include('layouts.footer')

  </div>

  <!-- REQUIRED SCRIPTS -->
  @include('layouts.required-scripts')

</body>
</html>
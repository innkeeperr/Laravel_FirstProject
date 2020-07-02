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
            {{-- <h1 class="m-0 text-dark">Hello, {{ $loggedUser -> name}}</h1> --}}
          </div>
          <div class="col-sm-6">
            <h1 class="m-0 mr-4 text-dark text-right">Developers</h1>         
          </div>
        </div>
      </div>
    </div>



    {{-- <style>
      table{
          border-collapse: collapse;
          width: 90%;
      }
      th{
          border-bottom: 2px solid rgb(134, 133, 133);
          height: 50px;
          padding: 10px;
      }
      td{
          border-bottom: 2px solid rgb(134, 133, 133);
          height: 30px;
          padding: 10px;
      }
      tr:hover {background-color: #f5f5f5;}
  </style> --}}

  <style type="text/css">
    /* @font-face {
      font-family: OpenSans-Regular;
      src: url('../../../fonts/OpenSans/OpenSans-Regular.ttf'); 
    } */

    table.table-style-three {
      width: 90%;
      font-family: Bahnschrift Light;
      font-size: 15px;
      color: #333333;
      border-width: 1px;
      border-color: #3A3A3A;
      border-collapse: collapse;
    }
    table.table-style-three th {
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #0b0a2e;
      background-color: #0b0a2e;
      color: #ffffff;
    }
    table.table-style-three tr:hover td {
      cursor: pointer;
    }
    table.table-style-three tr:nth-child(even) td{
      background-color: #e3e5e6;
    }
    table.table-style-three td {
      border-width: 1px;
      padding: 8px;
      border-style: solid;
      border-color: #0b0a2e;
      background-color: #ffffff;
    }

    a{
      text-decoration: none;
      color: black;
    }
  </style>

    <!-- Main content -->
    <div class="row">
      <div class="col-md-12">       

        <div style="width: 100%; display: flex; align-items:center; justify-content: center; flex-direction: column;">
          <table class="table-style-three">
              <tr>
                  <th>Link</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Created Year</th>
              </tr>

              @foreach ($dataDev as $item)
                  <tr>
                      <td><a href="/dev/{{ $item -> id}}">Details</a></td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->description }}</td>
                      <td>{{ $item->created }}</td>
                  </tr>
              
              @endforeach
          </table>
          {{-- {{ $dataGames->links() }} --}}
        </div>

      </div>
    </div>


  <!-- Main Footer -->
  @include('layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('layouts.required-scripts')

</body>
</html>

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
            <h1 class="m-0 text-dark">Hello, {{ $loggedUser -> name}}</h1>
          </div>
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">Game </h1>         
          </div>
        </div>
      </div>
    </div>  

  <style type="text/css">

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
      /* border-style: solid; */
      border-color: #0b0a2e;
      background-color: #0b0a2e;
      color: #ffffff;
    }
    table.table-style-three tr:hover td {
      cursor: pointer;
      /* background-color: #949090; */
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
      <div class="col-md-12" style="display: flex; align-items:center; justify-content: center;">       
   
        @foreach ($dataGame as $item)
        <div class="card" style="display: flex; align-items:center; justify-content: center; width: 60%">
          <h3 class="card-header">{{ $item->title }}</h3>
          <div class="card-body">
            <h4 class="card-text">Developer: {{ $item->name }}</h4>
            <h4 class="card-text">Production year: {{ $item->game_created }}</h4>
            
            <h5 class="card-title mt-4">Description:</h5>
            <p class="card-text">{{ $item->description }}</p>
            <a href="/home" class="btn btn-primary">Go back</a>
          </div>
        </div>
        @endforeach

      </div>
    </div>

    {{-- <h1 class="mt-4 text-dark text-center">Change Game Properties</h1>
    <div class="row">
      <div class="col-md-12" style="display: flex; align-items:center; justify-content: center;"> 

        

        <form method="POST" action="{{url('account')}}" style="display: flex; align-items:center; justify-content: center; width: 60%;">

          {{ csrf_field() }}
          {{ method_field('PATCH') }}

          @foreach ($dataGame as $item)
          <div class="card" style="width: 100%">
            <div class="card-body">
              <h5 class="card-title">
                <div class="form-group">
                  <label class="text-dark font-italic" for="gameNameId">Change Game Name</label>
                  <input type="text" class="form-control d-inline-block" id="gameNameId" aria-describedby="gameNameHelp" placeholder="{{ $item->title}}" name="gameName">
                </div>
              </h5>

              <div class="form-group">
                <textarea  type="text" class="form-control d-inline-block" id="gameDescriptionId"  name="gameDescription" rows="5">{{ $item->description}}</textarea>
              </div>
              
              <p class="card-text"></p>
              <a type="submit" name="submitGameChange" class="btn btn-primary">Save Changes</a>
            </div>
          </div>
          @endforeach

        </form>
      </div>
    </div> --}}


  <!-- Main Footer -->
  @include('layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('layouts.required-scripts')

</body>
</html>

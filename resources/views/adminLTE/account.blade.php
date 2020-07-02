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
              <h1 class="m-0 text-dark">Account Settings</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active">AccountSettings</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

  {{-- Here is content to update on each site --}}
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h3 class="my-3 text-dark text-center">Change Your Settings:</h3>

      <form method="POST" action="{{url('/account')}}">

        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="form-group">
          <label class="text-dark font-italic" for="exampleInputEmail1">First Name</label>
          <input type="text" class="form-control" id="firstNameChangeId" aria-describedby="nameHelp" placeholder="{{ $loggedUser -> name}}" name="firstNameChange">
          {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>

        <div class="form-group">
          <label class="text-dark font-italic" for="exampleInputEmail1">Last Name</label>
          <input type="text" class="form-control" id="surnnameChangeId" aria-describedby="surnameHelp" placeholder="{{ $loggedUser -> surname}}" name="surnnameChange">
        </div>

        <div class="form-group">
          
          <div class="row">
            <div class="col-md-6">
              <label for="city" class="text-dark font-italic">{{ __('Your City') }}</label>
              <select class="form-control @error('city') is-invalid @enderror" id="city" name="city">   


                  @foreach ($myCity as $item)
                    <option class="text-capitalize" value="{{ $item->id }}">{{ $item->city }}</option>
                  @endforeach
                      {{-- <option value="{{ $myCity -> id }}">{{ $myCity -> name }}</option> --}}
                  @foreach ($cityData as $item)
                      <option value="{{ $item->id }}">{{ $item->city }}</option>
                  @endforeach

              </select>
              @error('city')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="col-md-6">
              <label for="state" class="text-dark font-italic">{{ __('Your State') }}</label>
              <select disabled class="form-control @error('state') is-invalid @enderror" id="state" name="state">   
             
                  @foreach ($stateData as $item)
                      <option class="text-capitalize" value="{{ $item->id }}">{{ $item->state }}</option>
                  @endforeach
                  
              </select>
              @error('state')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          
        </div>

        <button type="submit" class="btn btn-primary" name="submitChanges">Change Settings</button>
      </form>

    </div>
  </div>



  <!-- Main Footer -->
  @include('layouts.footer')

  </div>

  <!-- REQUIRED SCRIPTS -->
  @include('layouts.required-scripts')

</body>
</html>
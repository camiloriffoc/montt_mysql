@extends('layouts.app')

@section('content')
    
<div>
    <div class="wrapper" id="app">
      
            <!-- Main Header -->
            @include('smartbricks.main-header')
            <!-- Left side column. contains the logo and sidebar -->
            @include('smartbricks.main-sidebar')
            <!-- Content Wrapper. Contains page content -->
            @include('smartbricks.content-wrapper')
            <!-- /.content-wrapper -->
                <!-- Main Footer -->
            @include('smartbricks.main-footer')
            <!-- Control Sidebar -->
            @include('smartbricks.control-sidebar')
        <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
     </div>
</div>

 
@endsection
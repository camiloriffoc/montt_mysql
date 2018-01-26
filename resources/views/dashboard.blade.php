@extends('layouts.app')

@section('content')



<div >
	<div class="wrapper" id="app">
        
            <!-- Main Header -->
            @include('smartbricks_cliente.main-header')
            <!-- Left side column. contains the logo and sidebar -->
            @include('smartbricks_cliente.main-sidebar')
            <!-- Content Wrapper. Contains page content -->
            @include('smartbricks_cliente.content-wrapper')
            <!-- /.content-wrapper -->
                <!-- Main Footer -->
            @include('smartbricks_cliente.main-footer')
            <!-- Control Sidebar -->
            @include('smartbricks_cliente.control-sidebar')
        <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
     </div>
</div>


@endsection

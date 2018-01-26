<aside class="main-sidebar"  style="height: 430px; overflow-y: scroll; position: fixed;">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('img/user.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{--Session::get('user')->First_Name}} {{Session::get('user')->Last_Name--}}</p>
                <!-- Status -->
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input id="filtrar" type="text" class="form-control" placeholder="Buscar">
          <span class="input-group-btn">
              <button name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <script src="{{ asset('js/buscador.js') }}"></script>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree" id="buscar_aca">
            <li class="header"><a href="{{ url('/sociedades') }}">Sociedades</a></li>
            <!-- Optionally, you can add icons to the links -->
            {{--<li class="active"><a href="#"><i class="fa fa-building"></i> <span>Link</span></a></li>--}}
            {{--<li><a href="#"><i class="fa fa-building"></i> <span>Another Link</span></a></li>--}}
            @include('partials.nav_cuentas')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

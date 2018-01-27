<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Montt</title>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/smartbricks.css') }}" rel="stylesheet">
  <script src="{{ asset('js/smartbricks.js') }}"></script>
  <script src="{{ asset('js/code_highcharts.js') }}"></script>
  <script src="{{ asset('js/code_highcharts_3d.js') }}"></script>
  <script src="{{ asset('js/code_highcharts_modules.js') }}"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Modal -->
  <div class="modal fade" id="myAlertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          ¡Registro guardado!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>


  @yield('content')
  <script src="{{ asset('js/render_ajax.js') }}"></script>


</body>
</html> 
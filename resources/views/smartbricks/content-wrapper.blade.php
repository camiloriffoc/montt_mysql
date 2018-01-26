<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
<section  class="content container-fluid" id="content" style="margin-top: 3%">
    @if(Session::has('flash_message'))

        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Éxito!</strong> {{Session::get('flash_message')}}.
        </div>
    @endif
    <div style="display: none;" id="resultado" align="center" >
        <br>
        <img src="{{ asset('img/cargando.gif') }}" align="middle" alt="cargador"> &nbsp;<label style="color:#ABB6BA">Realizando tarea solicitada ...</label>
        <br>
        <hr style="color:#003" width="50%">
        <br>
    </div>
    <!-- /.content -->
    <div id="principalPanel">
        <div class="container-fluid">
            @section('myContent')
 
            @show
        </div>
    </div>
    <!-- /.content -->
</section>
</div>
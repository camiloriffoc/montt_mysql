@if(Session::get('allSociedades') != null)
	@foreach(Session::get('allSociedades') as $sociedad)
		<li class="treeview" id="lista_filtro">
			<a href="#"><i class="fa fa-link"></i> <span>{{str_limit(ucfirst(mb_strtolower($sociedad->razon_social)), $limit = 20, $end = '...')}}</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
				<ul class="treeview-menu" id="close-open">                   
					@include('partials.nav_form_spa')
				</ul>
		</li>
	@endforeach
@endif


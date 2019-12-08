<div class="row">
	<div class="col-md-12">
		<div class="list-group">
			<a href="{{route('home')}}" 
			class="list-group-item list-group-item-action {{
				(Str::startsWith(Route::currentRouteName(), 'home')) ? 'active' : '' }}">Inicio
			</a>	
			<a href="{{route('season.index')}}" class="list-group-item list-group-item-action {{
				(Str::startsWith(Route::currentRouteName(), 'season')) ? 'active' : '' }}">Temporadas
			</a>
			<a href="{{route('freestyler.index')}}" class="list-group-item list-group-item-action {{
				(Str::startsWith(Route::currentRouteName(), 'freestyler')) ? 'active' : '' }}">Freestylers
			</a>
			<a href="{{route('session.index')}}" class="list-group-item list-group-item-action {{
				(Str::startsWith(Route::currentRouteName(), 'session')) ? 'active' : '' }}">Jornadas
			</a>
			<a href="{{route('battle.index')}}" class="list-group-item list-group-item-action {{
				(Str::startsWith(Route::currentRouteName(), 'battle')) ? 'active' : '' }}">Batallas
			</a>
		</div>
	</div>
</div>
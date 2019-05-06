<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
	<div class="container">
		<a class="navbar-brand logo" href="{{ url('/') }}">
			<span class="outer-logo-color">meal<strong class="inner-logo-color">io</strong>s</span>
				{{-- {{ config('app.name', 'Laravel') }} --}}
		</a>

		<div class="navbar" id="navbarSupportedContent">
			<!-- Left Side Of Navbar -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					{{-- <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a> --}}
				</li>
			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="navbar-nav ml-auto">
				<!-- Authentication Links -->
				@guest
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
					</li>
					@if (Route::has('register'))
						<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
						</li>
					@endif
				@else

				<div class="btn-group nav-settings-menu">
					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <i class="material-icons text-color-ash">settings</i>
					</button>
					<div class="dropdown-menu dropdown-menu-right nav-settings-menu">
				    	<button class="dropdown-item nav-settings-menu" type="button">

				    		<a class="nav-settings-menu" href="{{ route('logout') }}"
							   onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>

				    	</button>
					</div>
				</div>
				@endguest
			</ul>
		</div>
	</div>
</nav>

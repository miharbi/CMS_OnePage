@if(isset($edit) && $edit)
	<nav class="navbar navbar-default navbar-fixed-top" style="z-index: 1035;">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a type="button" class="btn btn-success btn-xs" href="auth/logout">
	        Finalizar Edición
	      </a>
	      <a type="button" class="btn btn-info btn-xs" target="_blank" href="{{ url('/') }}" >
	        Vista Previa
	      </a>
	    </div>
	  </div>
	</nav>
@endif

<nav class="navbar navbar-default banner top-menu navbar-fixed-top">
  <div class="container-fluid header-bottom ">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="{{ url('/') }}">
		<img src="{{ asset('images/logo.png') }}" width="218px" height="82px" alt="/">
	  </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1">
		<ul class="cl-effect-16 nav navbar-nav navbar-right" style="margin-top: 2.5em;">
			<li><a class="active" href=" @if(isset($edit) && $edit) /cms @else {{ url('/') }} @endif">Home</a></li>
			<li><a href="{{ url('/') }}#nosotras">Nosotras</a></li>
			<li><a href="{{ url('/') }}#clases">Clases</a></li>
			<li><a href="{{ url('/') }}#horarios">Horarios</a></li>
			<li><a href="{{ url('/') }}#staff">Staff</a></li>
			<li><a href="{{ url('/') }}#eventos">Eventos</a></li>
			<li><a href="@if(isset($edit) && $edit) /cmsgallery @else /gallery @endif">Galeria</a></li>
			<li><a href="@if(isset($edit) && $edit) /cmstestimonios @else /testimonios @endif">Testimonios</a></li>
			<li><a href="{{ url('/contact') }}">{{trans('about.contact')}}</a></li>
		</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="social_box">
	<ul class="list-inline">
		<li><a href="{{ env('FACEBOOK') }}" target="_blank"> 
    		<img style="width: 4.5em;" src="{{ asset('images/facebook.svg') }}" alt="FACEBOOK">
    	</a></li>
		<li><a href="{{ env('TWITTER') }}" target="_blank"> 
    		<img style="width: 4.5em;" src="{{ asset('images/twitter.svg') }}" alt="TWITTER">
    	</a></li>
		<li><a href="{{ env('INSTAGRAM') }}" target="_blank"> 
    		<img style="width: 4.5em;" src="{{ asset('images/instagram.svg') }}" alt="INSTAGRAM">
    	</a></li>
    	<li><a href="{{ env('YOUTUBE') }}" target="_blank"> 
    		<img style="width: 4.8em;" src="{{ asset('images/YOUTUBE.svg') }}" alt="YOUTUBE">
    	</a></li>
	</ul>
</div>
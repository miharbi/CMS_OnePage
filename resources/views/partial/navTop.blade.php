@if(isset($edit) && $edit)
	<nav class="navbar navbar-default navbar-fixed-top">
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
<div class="banner" id="home">
	<div class="header-bottom fixed">
	 <div class="fixed-header">
		<div class="container">
			<div class="logo">
				<a href="{{ url('/') }}">
					<img src="{{ asset('images/logo.png') }}" width="218px" height="82px" alt="/">
				</a>
			</div><a href="index.html">
			<span class="menu"> </span>
			</a><div class="top-menu"><a href="{{ url('/') }}">
			</a><nav class="navigation"><a href="{{ url('/') }}">
				</a><ul class="cl-effect-16"><a href="{{ url('/') }}">
					</a><li><a href="{{ url('/') }}"></a><a class="active" href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('/') }}#us">Nosotras</a></li>
					<li><a href="{{ url('/') }}#staff">Staff</a></li>
					<li><a href="{{ url('/') }}#events">Eventos</a></li>
					<li><a href="{{ url('/') }}#schedules">Horarios</a></li>
					<li><a href="{{ url('/') }}#courses">Clases</a></li>
					<li><a href="@if(isset($edit) && $edit) /cmsgallery @else /gallery @endif">Galeria</a></li>
					<li><a href="{{ url('/') }}#reviews">Testimonios</a></li>
					<li><a href="{{ url('/contact') }}">{{trans('about.contact')}}</a></li>
				<ul>
			</ul></ul></nav>		
			</div>
		
			<div class="clearfix"></div>
		</div>
	 </div>
	</div>
</div>

<script>
	$( "span.menu" ).click(function() {
	  $( ".top-menu" ).slideToggle( "slow", function() {
		// Animation complete.
	  });
	});

	$(document).ready(function() {
		 var navoffeset=$(".header-bottom").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".header-bottom").addClass("fixed");
			}else{
				$(".header-bottom").removeClass("fixed");
			}
		 });
		 
	});
</script>
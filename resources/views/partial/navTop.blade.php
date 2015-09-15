
		<div class="banner" id="home">
			<div class="header-bottom fixed">
			 <div class="fixed-header">
				<div class="container">
					<div class="logo">
						<a href="{{ url('/') }}">
							<img src="{{ asset('images/logo.png') }}" width="266px" height="82px" alt="/">
						</a>
					</div><a href="index.html">
					<span class="menu"> </span>
					</a><div class="top-menu"><a href="{{ url('/') }}">
					</a><nav class="navigation"><a href="{{ url('/') }}">
						</a><ul class="cl-effect-16"><a href="{{ url('/') }}">
							</a><li><a href="{{ url('/') }}"></a><a class="active" href="{{ url('/') }}">Home</a></li>
							<li><a href="#">Nosotras</a></li>
							<li><a href="#">Staff</a></li>
							<li><a href="#">Eventos</a></li>
							<li><a href="#">Horario</a></li>
							<li><a href="#">Clases</a></li>
							<li><a href="#">Galeria</a></li>
							<li><a href="#">testimonios</a></li>
							<li><a href="{{ url('/contact') }}">{{trans('about.contact')}}</a></li>
						<ul>
					</ul></ul></nav>		
					</div>
				
					<div class="clearfix"></div>
				</div>
			 </div>
		</div>
</div>
@section('script')
<!-- script for menu -->
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
@stop
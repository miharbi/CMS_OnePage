<div class="tainers-section">
	<div class="container">
		<!--sreen-gallery-cursual-->
		<div class="col-md-3 tainer wow bounceInLeft" data-wow-delay="0.4s">
		      <h3>Eventos</h3>
			  
		</div>
		<div class="col-md-9 sreen-gallery-cursual wow bounceInRight" data-wow-delay="0.4s">
			<!-- start content_slider -->
		       <div class="owl-staff owl-carousel" >
		       		@foreach($staff as $person )
		                <div class="item">
		                	<img src="{{ $person->image }}" />
		                	<div>{{ $person->content }}</div>
		                </div>
	                @endforeach
				</div>
		</div>
	</div>
</div>	
<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script>
    $(document).ready(function() {
      $(".owl-staff").owlCarousel({
        items :3,
        autoPlay : true,
        navigation :true,
        navigationText :  false,
        pagination : false,
      });
    });
  </script>	
	
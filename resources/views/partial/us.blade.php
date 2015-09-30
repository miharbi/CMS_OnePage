	<div class="banner-bottom wow bounceIn animated " data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;">
		<div class="container">
		    <h2>{!! $mision->title !!}</h2>
			{!! $mision->content !!}
		 </div>
	</div>
	
  	<div class="trainee-section">
		<div class="container">
		<div class="trainee-grids">
			@foreach( $owners as $owner)
				<div class="col-md-4 trainee-grid wow {{ ['zoomInLeft','fadeInUpBig','zoomInRight'][rand (0,2)] }}">
					 <img src="{{ $owner->image }}" class="img-responsive" alt="" /> 
					 <h1><center>{{ $owner->title }}</center></h1>
					 <h4>{{ $owner->content }}</h4>
					 <h4></h4>
					 <h4></h4>
				</div>
			@endforeach
			<div class="clearfix"></div>
	   	</div>
	</div>

	</div>
	<div class="banner-bottom wow bounceIn animated" data-wow-delay="0.4s">
	    <h2>{!! $us->title !!}</h2>
		<p>{!! $us->content !!}</p>
	</div>
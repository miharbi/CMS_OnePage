<div class="new-section">
	<div class="container">
	<h3>Testimonios</h3>
     @foreach($reviews as $review)
		 <div class="new">
		    <div class="col-md-6 new-text wow rollIn animated {{ $review->id % 2 == 0 ? 'two' : '' }}" data-wow-delay="0.4s">
				<a href="single.html"><h4>{{ $review->title }}</h4></a>
			   	<p>{{ $review->content }}</p>
		    </div>
			<div class="col-md-6 ">
				<img src="{{ $review->image }}" alt="image" class="img-responsive zoom-img">
			</div>
		   	<div class="clearfix"> </div>
	   	</div>
	@endforeach
	</div>
</div>
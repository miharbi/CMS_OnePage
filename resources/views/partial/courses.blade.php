<div class="new-section">
	<div class="container">
	<h3>Nuestras Clases</h3>
     @foreach($courses as $course)
		 <div class="new">
		    <div class="col-md-6 new-text wow rollIn animated {{ $course->id % 2 == 0 ? 'two' : '' }}" data-wow-delay="0.4s">
				<a href="single.html"><h4>{{ $course->title }}</h4></a>
			   	<p>{{ $course->content }}</p>
		    </div>
			<div class="col-md-6 ">
				<img src="{{ $course->image }}" alt="image" class="img-responsive zoom-img">
			</div>
		   	<div class="clearfix"> </div>
	   	</div>
	@endforeach
	</div>
</div>
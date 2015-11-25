<div class="tainers-section" id="eventos">
	<div class="container">
		<!--sreen-gallery-cursual-->
		<div class="col-md-3 tainer wow bounceInLeft" data-wow-delay="0.4s">
			<h3>Eventos
			@if($edit)
			<a type="button" href="cms/create?type=event" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal">
				+
			</a>
			@endif
			</h3>
			<img src="images/flecha_izquierda.jpg" class="event prev">
			<img src="images/flecha_derecha.jpg" class="event next">
		</div>
		<div class="col-md-9 sreen-gallery-cursual wow bounceInRight" data-wow-delay="0.4s">
			<!-- start content_slider -->
			<div class=" @if(!$edit) owl-event owl-carousel @endif" >
				@foreach($events as $event )
				<div class="item">
					@if($edit)
					{!! Form::open(array('url' => 'cms/'.$event->id, 'method' => 'put', 'files' => true)) !!}
					<input name="image" type="file" id="selectedFile_{{ $event->id }}" style="display: none;" onchange="this.form.submit()" />
					<h3 style="cursor: pointer;"
					onclick="$('#selectedFile_{{ $event->id }}').click();"
					class="pull-left">
					<span class="glyphicon glyphicon-edit"></span>
					</h3>
					<input type="hidden" name="path" value="event">
					<input type="hidden" name="width" value="265">
					<input type="hidden" name="height" value="444">
					<input type="hidden" name="old" value="{{ $event->image }}">
				</form>
				@endif
				<img src="{{ $event->image }}" />
				@if($edit)
				<h4 style="cursor: pointer;">
				<span class="glyphicon glyphicon-floppy-disk save_{{$event->id}} hide pull-right"
				onclick="saveContent({{$event->id}})" ></span>
				<span class="glyphicon glyphicon glyphicon-ok text-success saved_{{$event->id}} hide pull-right"></span>
				</h4>
				@endif
				<h4 @if($edit)
				contenteditable="true"
				id="title_{{$event->id}}"
				onclick="$('.save_{{$event->id}}').removeClass('hide');"  @endif>
				{{ $event->title }}
				</h4>
				<div @if($edit)
					contenteditable="true"
					id="content_{{$event->id}}"
					onclick="$('.save_{{$event->id}}').removeClass('hide');"  @endif>
				{{ $event->content }}</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
</div>
<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script>
	@if(!$edit)
	$(document).ready(function() {
			owl_event = $(".owl-event");
	owl_event.owlCarousel({
	items :3,
	autoPlay : true,
	navigation :true,
	navigationText :  false,
	pagination : false,
	});
	$(".event.next").click(function(){
		owl_event.trigger('owl.next');
		});
		$(".event.prev").click(function(){
		owl_event.trigger('owl.prev');
		});
	});
	@endif
</script>
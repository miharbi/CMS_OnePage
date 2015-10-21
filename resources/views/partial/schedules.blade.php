<div class="tainers-section" id="horario">
	<div class="container">

<img src="images/horario.jpg"</div>
		<!--sreen-gallery-cursual-->
		<div class="col-md-3 tainer wow bounceInLeft" data-wow-delay="0.4s">
		      



		      <h3>Horarios</h3>

		      

			  
		</div>
		<div class="col-md-9 sreen-gallery-cursual wow bounceInRight" data-wow-delay="0.4s">
			<!-- start content_slider -->
		       <div class=" @if(!$edit) owl-schedule owl-carousel @endif" >
		       		@foreach($schedules as $schedule )
		                <div class="item">
							@if($edit)
								{!! Form::open(array('url' => 'cms/'.$schedule->id, 'method' => 'put', 'files' => true)) !!}
									<input name="image" type="file" id="selectedFile_{{ $schedule->id }}" style="display: none;" onchange="this.form.submit()" />
									<h3 style="cursor: pointer;"
										onclick="$('#selectedFile_{{ $schedule->id }}').click();"
										class="pull-left">
										<span class="glyphicon glyphicon-edit"></span>
									</h3>
									<input type="hidden" name="path" value="schedules">
									<input type="hidden" name="width" value="265">
									<input type="hidden" name="height" value="444">
									<input type="hidden" name="old" value="{{ $schedule->image }}">
								</form>
							@endif
							<img src="{{ $schedule->image }}" />
		                	@if($edit)
								<h4 style="cursor: pointer;">
							    	<span class="glyphicon glyphicon-floppy-disk save_{{$schedule->id}} hide pull-right" 
							    		  onclick="saveContent({{$schedule->id}})" ></span>
							    	<span class="glyphicon glyphicon glyphicon-ok text-success saved_{{$schedule->id}} hide pull-right"></span>
						    	</h4>	  
						    @endif
							<h4 @if($edit) 
					    		contenteditable="true" 
					    		id="title_{{$schedule->id}}" 
					    		onclick="$('.save_{{$schedule->id}}').removeClass('hide');"  @endif>
				    		{{ $schedule->title }}
				    		</h4>
		                	<div @if($edit) 
					    		contenteditable="true" 
					    		id="content_{{$schedule->id}}" 
					    		onclick="$('.save_{{$schedule->id}}').removeClass('hide');"  @endif>
		    				{{ $schedule->content }}</div>
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
	      $(".owl-schedule").owlCarousel({
	        items :3,
	        autoPlay : true,
	        navigation :true,
	        navigationText :  false,
	        pagination : false,
	      });
	    });
	@endif    
</script>	
	
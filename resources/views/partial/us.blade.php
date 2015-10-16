<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like pull-right"></div>

	<div class="banner-bottom wow bounceIn animated " data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: bounceIn;" id="nosotras">
		<div class="container">
			@if($edit)
				<h4 style="cursor: pointer;">
			    	<span class="glyphicon glyphicon-floppy-disk save_{{$mision->id}} hide pull-right" 
			    		  onclick="saveContent({{$mision->id}})" ></span>
			    	<span class="glyphicon glyphicon glyphicon-ok text-success saved_{{$mision->id}} hide pull-right"></span>	  
		    	</h4>	  
		    @endif
		    <h2 @if($edit) 
		    		contenteditable="true" 
		    		id="title_{{$mision->id}}" 
		    		onclick="$('.save_{{$mision->id}}').removeClass('hide');"  @endif>
		    	{!! $mision->title !!} 
		    </h2>
			<div @if($edit) 
		    		contenteditable="true" 
		    		id="content_{{$mision->id}}" 
		    		onclick="$('.save_{{$mision->id}}').removeClass('hide');"  @endif>
		    	{!! $mision->content !!}
		    </div>
		 </div>
	</div>
	
  	<div class="trainee-section">
		<div class="container">
		<div class="trainee-grids">
			@foreach( $owners as $owner)
				<div class="col-md-4 trainee-grid wow {{ ['zoomInLeft','fadeInUpBig','zoomInRight'][rand (0,2)] }}">
					{{-- imagen  --}}
					@if($edit)
							{!! Form::open(array('url' => 'cms/'.$owner->id, 'method' => 'put', 'files' => true)) !!}
								<input name="image" type="file" id="selectedFile_{{ $owner->id }}" style="display: none;" onchange="this.form.submit()" />
								<h3 style="cursor: pointer;"
									onclick="$('#selectedFile_{{ $owner->id }}').click();"
									class="pull-right">
									<span class="glyphicon glyphicon-edit"></span>
								</h3>
								<input type="hidden" name="path" value="us">
								<input type="hidden" name="width" value="300">
								<input type="hidden" name="height" value="300">
								<input type="hidden" name="old" value="{{ $owner->image }}">
							</form>
						@endif
					 <img src="{{ $owner->image }}" class="img-responsive" alt="" /> 

				    @if($edit)
						<div style="cursor: pointer; font-size: 20px;">
					    	<span class="glyphicon glyphicon-floppy-disk save_{{$owner->id}} hide pull-right" 
					    		  onclick="saveContent({{$owner->id}})" ></span>
					    	<span class="glyphicon glyphicon glyphicon-ok text-success saved_{{$owner->id}} hide pull-right"></span>	  
				    	</div>	  
				    @endif
					<h1 @if($edit) 
				    		contenteditable="true" 
				    		id="title_{{$owner->id}}" 
				    		onclick="$('.save_{{$owner->id}}').removeClass('hide');"  	
				    	@endif 
				    		style="text-align: center;">
		    			{{ $owner->title }}	
		    		</h1>
					<h4 @if($edit) 
				    		contenteditable="true" 
				    		id="content_{{$owner->id}}" 
				    		onclick="$('.save_{{$owner->id}}').removeClass('hide');"  @endif>
		    			{{ $owner->content }}
		    		</h4>
					<h4></h4>
					<h4></h4>
				</div>
			@endforeach
			<div class="clearfix"></div>
	   	</div>
	</div>

	</div>
	<div class="banner-bottom wow bounceIn animated" data-wow-delay="0.4s">
		@if($edit)
			<div style="cursor: pointer; font-size: 20px;">
		    	<span class="glyphicon glyphicon-floppy-disk save_{{$us->id}} hide pull-right" 
		    		  onclick="saveContent({{$us->id}})" ></span>
		    	<span class="glyphicon glyphicon glyphicon-ok text-success saved_{{$us->id}} hide pull-right"></span>	  
	    	</div>	  
	    @endif
	    <h2 @if($edit) 
	    		contenteditable="true" 
	    		id="title_{{$us->id}}" 
	    		onclick="$('.save_{{$us->id}}').removeClass('hide');"  	
	    	@endif >
			{!! $us->title !!}</h2>
		<p @if($edit) 
    		contenteditable="true" 
    		id="content_{{$us->id}}" 
    		onclick="$('.save_{{$us->id}}').removeClass('hide');"  
    	   @endif>
			{!! $us->content !!}</p>
	</div>
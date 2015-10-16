@extends('app')
@section('title')@parent - {{ trans('home.gallery') }} @stop
@section('content')
<div class="new-section" id="reviews">
	<div class="container">
	<h3>Testimonios</h3>
	<?php $cont=1; ?>
     @foreach($reviews as $review)
     <?php $cont++; ?>
		 <div class="new">
		    <div class="col-md-6 new-text wow rollIn animated {{ $cont % 2 == 0 ? 'two' : '' }}" data-wow-delay="0.4s">
		    @if($edit)
				<h4 style="cursor: pointer;">
			    	<span class="glyphicon glyphicon-floppy-disk save_{{$review->id}} hide pull-right" 
			    		  onclick="saveContent({{$review->id}})" ></span>
			    	<span class="glyphicon glyphicon glyphicon-ok text-success saved_{{$review->id}} hide pull-right"></span>	  
		    	</h4>	  
		    @endif
				<a href="javascript:void(0);">
					<h4 @if($edit) 
			    		contenteditable="true" 
			    		id="title_{{$review->id}}" 
			    		onclick="$('.save_{{$review->id}}').removeClass('hide');"  @endif>
		    		{{ $review->title }}
		    		</h4>
		    	</a>
			   	<div @if($edit) 
		    		contenteditable="true" 
		    		id="content_{{$review->id}}" 
		    		onclick="$('.save_{{$review->id}}').removeClass('hide');"  @endif>
		    		{{ $review->content }}
		    	</div>
		    </div>
			<div class="col-md-6 ">
				@if($edit)
					{!! Form::open(array('url' => 'cms/'.$review->id, 'method' => 'put', 'files' => true)) !!}
						<input name="image" type="file" id="selectedFile_{{ $review->id }}" style="display: none;" onchange="this.form.submit()" />
						<h3 style="cursor: pointer;"
							onclick="$('#selectedFile_{{ $review->id }}').click();"
							class="{{ $review->id % 2 == 0 ? 'pull-left' : 'pull-right' }}">
							<span class="glyphicon glyphicon-edit"></span>
						</h3>
						<input type="hidden" name="path" value="reviews">
						<input type="hidden" name="width" value="570">
						<input type="hidden" name="height" value="332">
						<input type="hidden" name="old" value="{{ $review->image }}">
					</form>
				@endif
				<img src="{{ $review->image }}" alt="image" class="img-responsive zoom-img">
			</div>
		   	<div class="clearfix"> </div>
	   	</div>
	@endforeach
	</div>
</div>
@endsection
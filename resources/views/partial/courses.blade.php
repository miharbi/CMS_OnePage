<div class="new-section" id="clases">
	<div class="container">
	<h3>Nuestras Clases</h3>
	<?php $cont=0; ?>
     @foreach($courses as $course)
     <?php $cont++; ?>
		 <div class="new">
		    <div class="col-md-6 new-text wow rollIn animated {{ $cont % 2 == 0 ? 'two' : '' }}" data-wow-delay="0.4s">
		    @if($edit)
				<h4 style="cursor: pointer;">
			    	<span class="glyphicon glyphicon-floppy-disk save_{{$course->id}} hide pull-right" 
			    		  onclick="saveContent({{$course->id}})" ></span>
			    	<span class="glyphicon glyphicon glyphicon-ok text-success saved_{{$course->id}} hide pull-right"></span>	  
		    	</h4>	  
		    @endif
				<a href="javascript:void(0);">
					<h4 @if($edit) 
			    		contenteditable="true" 
			    		id="title_{{$course->id}}" 
			    		onclick="$('.save_{{$course->id}}').removeClass('hide');"  @endif>
		    		{{ $course->title }}
		    		</h4>
		    	</a>
			   	<div @if($edit) 
		    		contenteditable="true" 
		    		id="content_{{$course->id}}" 
		    		onclick="$('.save_{{$course->id}}').removeClass('hide');"  @endif>
		    		{{ $course->content }}
		    	</div>
		    </div>
			<div class="col-md-6 ">
				@if($edit)
					{!! Form::open(array('url' => 'cms/'.$course->id, 'method' => 'put', 'files' => true)) !!}
						<input name="image" type="file" id="selectedFile_{{ $course->id }}" style="display: none;" onchange="this.form.submit()" />
						<h3 style="cursor: pointer;"
							onclick="$('#selectedFile_{{ $course->id }}').click();"
							class="{{ $course->id % 2 == 0 ? 'pull-left' : 'pull-right' }}">
							<span class="glyphicon glyphicon-edit"></span>
						</h3>
						<input type="hidden" name="path" value="courses">
						<input type="hidden" name="width" value="570">
						<input type="hidden" name="height" value="332">
						<input type="hidden" name="old" value="{{ $course->image }}">
					</form>
				@endif
				<img src="{{ $course->image }}" alt="image" class="img-responsive zoom-img">
			</div>
		   	<div class="clearfix"> </div>
	   	</div>
	@endforeach
	</div>
</div>
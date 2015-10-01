<div class="slider">
	 <div id="cbp-fwslider" class="cbp-fwslider">
		<ul style="width: 500%; transition: transform 500ms ease;">
			@foreach($sliders as $slider)
				<li style="width: 20%;">
						@if($edit)
							{!! Form::open(array('url' => 'cms/'.$slider->id, 'method' => 'put', 'files' => true)) !!}
								<input name="image" type="file" id="selectedFile_{{ $slider->id }}" style="display: none;" onchange="this.form.submit()" />
								<h3 style="cursor: pointer;"
									onclick="$('#selectedFile_{{ $slider->id }}').click();"
									class="pull-right">
									<span class="glyphicon glyphicon-edit"></span>
								</h3>
								<input type="hidden" name="path" value="slider">
								<input type="hidden" name="width" value="1345">
								<input type="hidden" name="height" value="450">
								<input type="hidden" name="old" value="{{ $slider->image }}">
							</form>
						@endif
					
						<img src="{{ $slider->image }}" alt="img05">
					 
				</li>
			@endforeach
		</ul>
	<nav><span class="cbp-fwprev" style="display: none;"></span><span class="cbp-fwnext"></span></nav><div class="cbp-fwdots"><span class="cbp-fwcurrent"></span><span></span><span></span><span></span><span></span></div></div>
</div>

	<script src="{{ asset('js/jquery.cbpFWSlider.min.js') }}"></script>
	<script>
			$( function() {
				$( '#cbp-fwslider' ).cbpFWSlider();
			@if(!$edit)	
				setInterval( function(){
                    if($('.cbp-fwnext').is(":visible"))
                        {
                            $('.cbp-fwnext').click();   
		                }
	                else{
	                        $('.cbp-fwdots').find('span').click();
	                    }
		        } ,3000 );
		    @endif    
			} );
	</script>
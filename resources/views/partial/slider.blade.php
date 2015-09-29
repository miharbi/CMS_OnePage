<div class="slider">
	 <div id="cbp-fwslider" class="cbp-fwslider">
		<ul style="width: 500%; transition: transform 500ms ease;">
			<li style="width: 20%;"><img src="images/slider/slide2.png" alt="img01"></li>
			<li style="width: 20%;"><img src="images/slider/slide3.png" alt="img02"></li>
			<li style="width: 20%;"><img src="images/slider/slide4.png" alt="img03"></li>
			<li style="width: 20%;"><img src="images/slider/slide5.png" alt="img04"></li>
			<li style="width: 20%;"><img src="images/slider/slide6.png" alt="img05"></li>
			@foreach($sliders as $slider)
				<li style="width: 20%;">
						@if($edit)
							<form action="">
								<input type="file" id="selectedFile" style="display: none;" />
								<a href="javascript:void(0);" onclick="$('#selectedFile').click();" class="pull-right"> <h3><span class="glyphicon glyphicon-edit"></span></h3></a>
							</form>
						@endif
					
						<img src="{{ $slider->image }}" alt="img05">
					 
				</li>
			@endforeach
		</ul>
	<nav><span class="cbp-fwprev" style="display: none;"></span><span class="cbp-fwnext"></span></nav><div class="cbp-fwdots"><span class="cbp-fwcurrent"></span><span></span><span></span><span></span><span></span></div></div>
</div>
@section('script')
	<script src="{{ asset('js/jquery.cbpFWSlider.min.js') }}"></script>
	<script>
			$( function() {
				$( '#cbp-fwslider' ).cbpFWSlider();
				// setInterval( function(){
    //                 if($('.cbp-fwnext').is(":visible"))
    //                     {
    //                         $('.cbp-fwnext').click();   
		  //               }
	   //              else{
	   //                      $('.cbp-fwdots').find('span').click();
	   //                  }
		  //       } ,3000 );
			} );
	</script>
@stop
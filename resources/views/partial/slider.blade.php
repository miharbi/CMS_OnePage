<div class="slider">
	 <div id="cbp-fwslider" class="cbp-fwslider">
		<ul style="width: 500%; transition: transform 500ms ease;">
			<li style="width: 20%;"><a href="#"><img src="images/slider/slide2.png" alt="img01"></a></li>
			<li style="width: 20%;"><a href="#"><img src="images/slider/slide3.png" alt="img02"></a></li>
			<li style="width: 20%;"><a href="#"><img src="images/slider/slide4.png" alt="img03"></a></li>
			<li style="width: 20%;"><a href="#"><img src="images/slider/slide5.png" alt="img04"></a></li>
			<li style="width: 20%;"><a href="#"><img src="images/slider/slide6.png" alt="img05"></a></li>
		</ul>
	<nav><span class="cbp-fwprev" style="display: none;"></span><span class="cbp-fwnext"></span></nav><div class="cbp-fwdots"><span class="cbp-fwcurrent"></span><span></span><span></span><span></span><span></span></div></div>
</div>
@section('script')
	<script src="{{ asset('js/jquery.cbpFWSlider.min.js') }}"></script>
	<script>
			$( function() {
				$( '#cbp-fwslider' ).cbpFWSlider();
			} );
	</script>
@stop
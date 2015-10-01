<div class="tainers-section">
	<div class="container">
		<!--sreen-gallery-cursual-->
		<div class="col-md-3 tainer wow bounceInLeft" data-wow-delay="0.4s">
		      <h3>Staff</h3>
			  <p>Conoce el personal que trabajará con usted</p>
		</div>
		<div class="col-md-9 sreen-gallery-cursual wow bounceInRight" data-wow-delay="0.4s">
			<!-- start content_slider -->
		       <div class="owl-staff owl-carousel" >
	                <div class="item">
	                	<img src="images/staff/t1.jpg" />
	                </div>
	                <div class="item">
	                	<img src="images/staff/t2.jpg" />
	                </div>
	                 <div class="item">
	                	<img src="images/staff/t3.jpg" />
                     </div>
		             <div class="item">
		                	<img src="images/staff/t4.jpg" />
                     </div>
				</div>
		</div>
	</div>
</div>	

	<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
	<script src="{{ asset('js/owl.carousel.js') }}"></script>
	<style>
		.owl-staff .item{
		  margin: 0px;
		}
		.owl-staff .item img{
		  display: block;
		  width: 100%;
		  height: auto;
		}
	</style>
	<script>
	    $(document).ready(function() {
	      $(".owl-staff").owlCarousel({
	        items :3,
	        autoPlay : true,
	        navigation :true,
	        navigationText :  false,
	        pagination : false,
	      });
	    });
  </script>	
	
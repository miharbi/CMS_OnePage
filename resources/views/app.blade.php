<!DOCTYPE html>
<html lang="es" >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@section('title'){{env('MAIN_NAME')}}@show</title>

	<!-- Latest compiled and minified CSS -->
	<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">

		<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script src="{{ asset('js/modernizr.custom.js') }}"></script>

	<link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">

	<link href="{{ asset('css/component.css') }}" rel="stylesheet" type="text/css">

	<script src="{{ asset('js/wow.min.js') }}"></script>

	<script>
		new WOW().init();
		@if($edit)
		function saveContent(id){
			$('.save_'+id).addClass('hide');
			var title = $('#title_'+id).html();
			var content = $('#content_'+id).html();
			$.ajax({
			  url: 'cms/'+id,
			  type: 'PUT',
			  data: {title : title, content : content, _token : '{{ csrf_token() }}'},
			  success: function(data) {
			  	if (data == 'ok') {
					$('.saved_'+id).removeClass('hide');
					setTimeout(function () {
						$('.saved_'+id).addClass('hide');
					}, 2000);
			  	}else{
			  		alert('Ocurrio un error, intente de nuevo.');
			  	}
			  }
			});
		}	
		@endif
	</script>

	<!-- Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700|Orbitron:400,500,700,900" rel="stylesheet" type="text/css">

</head>
<body >
	
	@include('partial.navTop')

	@yield('content')

	@include('partial.navFooter')

</body>
</html>

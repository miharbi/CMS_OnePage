@extends('app')
@section('title')@parent - {{ trans('home.gallery') }} @stop
@section('content')
@if(!$id && $edit)
@include('partial.modal')
@endif
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="{{ asset('css/bootstrap-image-gallery.min.css') }}">
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
	<!-- The container for the modal slides -->
	<div class="slides"></div>
	<!-- Controls for the borderless lightbox -->
	<h3 class="title"></h3>
	<a class="prev">‹</a>
	<a class="next">›</a>
	<a class="close">×</a>
	<a class="play-pause"></a>
<ol class="indicator"></ol>
<!-- The modal dialog, which will be used to wrap the lightbox content -->
<div class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" aria-hidden="true">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body next"></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left prev">
				<i class="glyphicon glyphicon-chevron-left"></i>
				Anterior
				</button>
				<button type="button" class="btn btn-primary next">
				Siguiente
				<i class="glyphicon glyphicon-chevron-right"></i>
				</button>
			</div>
		</div>
	</div>
</div>
</div>
{{--  --}}
<div class="banner-bottom wow bounceIn animated">
<div class="container">
	<h2>	@if($id)
	<a  href="@if(isset($edit) && $edit) /cmsgallery @else /gallery @endif"  class="pull-right"  >
		<span class="glyphicon glyphicon-home pull-right">&nbsp;</span>
	</a>
	@endif
	@if($edit)
	@if($id)
	
	{!! Form::open(array('url' => 'cms', 'method' => 'post', 'files' => true)) !!}
	<input name="image" type="file" id="new_pic" style="display: none;" onchange="this.form.submit()" />
	<span style="cursor: pointer;"
		onclick="$('#new_pic').click();"
	class="glyphicon glyphicon-picture pull-right">&nbsp;</span>
	<input type="hidden" name="path" value="gallery">
	<input type="hidden" name="dad" value="{{ $id }}">
	<input type="hidden" name="width" value="800">
	<input type="hidden" name="height" value="450">
</form>
{!! Form::open(array('url' => 'cms', 'method' => 'post', 'files' => true, 'id' => 'youtubeForm_')) !!}
<input type="hidden" name="youtube" id="youtube_" value="">
<input type="hidden" name="path" value="gallery">
<input type="hidden" name="dad" value="{{ $id }}">
<span style="cursor: pointer;"
	onclick="getYoutubeId()"
class="glyphicon glyphicon-film pull-right">&nbsp;</span>
</form>
@else
<!-- Button trigger modal -->
<a type="button" href="cms/create?type=gallery" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal">
Agregar Album
</a>
@endif
@endif
Galería @if($id) :: {{ $gallery[0]->title }} @endif</h2>
<br>
<div id="links">
@if(!$id)
@foreach($gallery as $pic)
<div class="col-lg-3 col-md-4 col-xs-12 col-sm-6 thumb">
	@if($edit)
	{!! Form::open(array('url' => 'cms/'.$pic->id, 'method' => 'put', 'files' => true)) !!}
	<input name="image" type="file" id="selectedFile_{{ $pic->id }}" style="display: none;" onchange="this.form.submit()" />
	<h6 style="cursor: pointer;"
	onclick="$('#selectedFile_{{ $pic->id }}').click();"
	class="pull-right">
	<span class="glyphicon glyphicon-edit"></span>
	</h6>
	<input type="hidden" name="path" value="gallery">
	<input type="hidden" name="width" value="800">
	<input type="hidden" name="dad" value="{{ $pic->dad }}">
	<input type="hidden" name="height" value="450">
	<input type="hidden" name="old_thumbnail"
	value="{{ str_replace('/'.$pic->id.'_', '/thumbnail_'.$pic->id.'_', $pic->image) }}">
	<input type="hidden" name="old" value="{{ $pic->image }}">
</form>
@endif
<a href="@if(isset($edit) && $edit) /cmsgallery/{{$pic->id}} @else /gallery/{{$pic->id}} @endif" >
	<img class="thumbnail" style="width:100%" src="{{ str_replace('/'.$pic->id.'_', '/thumbnail_'.$pic->id.'_', $pic->image) }}" >
	<h5>{{ $pic->title }}</h5>
</a>
</div>
@endforeach
@else
@foreach($gallery as $pic)
<div class="col-lg-3 col-md-4 col-xs-12 col-sm-6 thumb">
@if(!$pic->youtube)
@if($edit)
{!! Form::open(array('url' => 'cms/'.$pic->id, 'method' => 'put', 'files' => true)) !!}
<input name="image" type="file" id="selectedFile_{{ $pic->id }}" style="display: none;" onchange="this.form.submit()" />
<h6 style="cursor: pointer;"
onclick="$('#selectedFile_{{ $pic->id }}').click();"
class="pull-right">
<span class="glyphicon glyphicon-edit"></span>
</h6>
<input type="hidden" name="path" value="gallery">
<input type="hidden" name="dad" value="{{ $pic->dad ? $pic->dad : $pic->id }}">
<input type="hidden" name="width" value="800">
<input type="hidden" name="height" value="450">
<input type="hidden" name="old_thumbnail"
value="{{ str_replace('/'.$pic->id.'_', '/thumbnail_'.$pic->id.'_', $pic->image) }}">
<input type="hidden" name="old" value="{{ $pic->image }}">
</form>
@endif
<a href="{{ $pic->image }}"  data-gallery>
<img class="thumbnail img-responsive" style="width:100%" src="{{ str_replace('/'.$pic->id.'_', '/thumbnail_'.$pic->id.'_', $pic->image) }}" >
</a>
@else
@if($edit)
{!! Form::open(array('url' => 'cms/'.$pic->id, 'method' => 'put', 'id' => 'youtubeForm_'.$pic->id)) !!}
<input type="hidden" name="youtube" id="youtube_{{ $pic->id }}" value="">
<input type="hidden" name="path" value="gallery">
<input type="hidden" name="dad" value="{{ $id }}">
<h6 style="cursor: pointer;"
onclick="getYoutubeId('{{ $pic->id }}')"
class="pull-right">
<span class="glyphicon glyphicon-edit"></span>
</h6>
</form>
@endif
<a href="https://www.youtube.com/watch?v={{ $pic->youtube }}"  type="text/html"
data-youtube="{{ $pic->youtube }}"
poster="http://img.youtube.com/vi/{{ $pic->youtube }}/0.jpg"  data-gallery>
<img class="thumbnail img-responsive" style=" min-height:255px;" src="http://img.youtube.com/vi/{{ $pic->youtube }}/0.jpg" >
</a>
@endif
</div>
@endforeach
@endif
{!! $gallery->render() !!}
</div>
</div>
</div>
{{--  --}}
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="{{ asset('js/bootstrap-image-gallery.min.js' ) }}"></script>
<script>
	function getYoutubeId (id) {
		if (!id) {
			id='';
		}
		var url = prompt("Introduzca la Url del video en youtube");
		var videoid = url.match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);
		if(videoid != null) {
		$('#youtube_'+id).val(videoid[1]);
		$('#youtubeForm_'+id).submit();
		} else {
		alert("Esta Url Youtube no es valida!");
		}
	}
</script>
@endsection
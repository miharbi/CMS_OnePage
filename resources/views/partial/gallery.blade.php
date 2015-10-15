@extends('app')
@section('title')@parent - {{ trans('home.gallery') }} @stop
@section('content')

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
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
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
		<h2>@if($edit)
				{!! Form::open(array('url' => 'cms', 'method' => 'post', 'files' => true)) !!}
					<input name="image" type="file" id="new_pic" style="display: none;" onchange="this.form.submit()" />
					<span style="cursor: pointer;" 
						  onclick="$('#new_pic').click();" 
						  class="glyphicon glyphicon-plus pull-right"></span>
					<input type="hidden" name="path" value="gallery">
					<input type="hidden" name="width" value="800">
					<input type="hidden" name="height" value="450">
				</form>
			@endif
			Galería</h2>
		<div id="links">
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
							<input type="hidden" name="height" value="450">
							<input type="hidden" name="old_thumbnail" 
								   value="{{ str_replace('/'.$pic->id.'_', '/thumbnail_'.$pic->id.'_', $pic->image) }}">
							<input type="hidden" name="old" value="{{ $pic->image }}">
						</form>
					@endif

					<a href="{{ $pic->image }}"  data-gallery>
				        <img class="thumbnail" src="{{ str_replace('/'.$pic->id.'_', '/thumbnail_'.$pic->id.'_', $pic->image) }}" >
				    </a>
				</div>
			@endforeach
   			{!! $gallery->render() !!}
		</div>
	</div>

</div>



{{--  --}}

<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="{{ asset('js/bootstrap-image-gallery.min.js' ) }}"></script>
@endsection
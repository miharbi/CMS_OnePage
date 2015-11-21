<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="myModalLabel">{{$title}}</h4>
</div>
{!! Form::open(array('url' => 'cms', 'method' => 'post', 'files' => true)) !!}
	<div class="modal-body">
		@if($hasTitle)
		<div class="form-group">
			<label for="recipient-name" class="control-label">Título:</label>
			<input type="text" class="form-control" name="title" required>
		</div>
		@endif
		@if($hasContent)
		<div class="form-group">
			<label for="recipient-name" class="control-label">Contenido:</label>
			<textarea  class="form-control" name="content" required></textarea>
		</div>
		@endif
		@if($hasImg)
		<div class="form-group">
			<label for="message-text" class="control-label">Foto:</label>
			<input name="image" type="file" required />
		</div>
		
		<input type="hidden" name="width" value="{{$hasImg['width']}}">
		<input type="hidden" name="height" value="{{$hasImg['height']}}">
		@endif
		<input type="hidden" name="path" value="{{$path}}">
		
		
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		<button type="submit" class="btn btn-primary" >Crear</button>
	</div>
</form>
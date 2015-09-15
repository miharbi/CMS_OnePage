@include('partial.errorsMessage')
@if(Session::has('message'))
    <div class="alert alert-success" role="alert">
    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    	@if(is_array(Session::has('message')))
    	<ul>
    		@foreach(Session::get('message') as $session_message)
                    <li>{{ $session_message }}</li>
            @endforeach
    	</ul>
    	@else
    	{{ Session::get('message')  }}
    	@endif
    	{{ Session::forget('message') }}
    </div>
@endif
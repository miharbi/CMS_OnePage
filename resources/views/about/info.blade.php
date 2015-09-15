<address>
  <strong>{{ env('MAIN_NAME') }}</strong><br>
  {{ env('address') }}<br>
  {{ env('city') }}, {{ env('state') }} {{ env('zip_code') }}<br>
  <abbr title="Phone">{{ trans('about.phone_numbers')}}:</abbr> {{ env('phone_number') }} @if(env('cell_phone')!='')/ {{ env('cell_phone') }} @endif
</address>

<address>
  <strong>{{ trans('about.emails') }}</strong><br>
  <small>
	  @if(env('contact_email')!='')
	  <a href="mailto:{{env('contact_email') }}">{{env('contact_email') }}</a>
	  @endif
	  @if(env('sales_email')!='')
	   / <a href="mailto:{{env('sales_email') }}">{{env('sales_email') }}</a>
	  @endif
	  @if(env('support_email')!='')
	   / <a href="mailto:{{env('support_email') }}">{{env('support_email') }}</a>
	  @endif
  </small>
</address>
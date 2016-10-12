<address>
  <strong>{{ env('MAIN_NAME') }}</strong><br>
  {{ env('address') }}<br>
  {{ env('city') }}, {{ env('state') }} {{ env('zip_code') }}<br>
  <abbr title="Phone">{{ trans('about.phone_numbers')}}:</abbr> {{ env('phone_number') }} @if(env('cell_phone')!='')/ {{ env('cell_phone') }} @endif
</address>

<address>
  <strong>{{ trans('about.emails') }}</strong><br>
  <small style="font-size: 120%;">
	  @if(env('contact_email')!='')
	  {{env('contact_email') }}
	  @endif
	  @if(env('sales_email')!='')
	   / {{env('sales_email') }}
	  @endif
	  @if(env('support_email')!='')
	   / {{env('support_email') }}
	  @endif
  </small>
</address>
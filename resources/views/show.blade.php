@extends('master')

@section('content')
  <div class="page-header">
      <h1>SHOW TODO LIST - ITEM</h1>
  </div>
	    <p class="form-group">
	        {{ $item->text }}
	    </p>
	    <p class="form-group">
	    	<a href="{{ url('/') }}" class="btn-sm btn-default" role="button">Back</a>
	    </p>
	</form>	
@endsection
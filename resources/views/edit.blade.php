@extends('master')

@section('content')
  <div class="page-header">
      <h1>EDIT TODO LIST - ITEM</h1>
  </div>

	<form id="edit-form" action="/item/{{ $item->id }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		{{ method_field('PATCH') }}

    <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
        <textarea class="form-control" name="text" id="text" rows="4" required autofocus>{{ old('text')?old('text'):$item->text }}</textarea>

        @if ($errors->has('text'))
            <span class="help-block">
                <strong>{{ $errors->first('text') }}</strong>
            </span>
        @endif

    </div>

    <p class="form-group">
        <input class="btn-sm btn-danger" type="submit" value="Save">
        <a href="{{ url('/') }}" class="btn-sm btn-default" role="button">Back</a>
    </p>
  </form>	
@endsection
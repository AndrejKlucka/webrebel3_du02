@extends('master')

@section('content')
  <div class="page-header">
      <h1>VERY MUCH TODO LIST</h1>
  </div>

  <ul class="list-group col-sm-6">
    @forelse ( $items as $item )
      <li class="list-group-item">
        {{ $item->text }}
        <div class="controls pull-right item-links">
          <a href="/item/{{$item->id}}/edit" class="edit-link">edit</a>
          <form action="/item/{{$item->id}}" method="POST" class="form-inline">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="close delete-link" data-dismiss="alert">&times;</button>
          </form>
        </div>
      </li>
    @empty
      <p>No items :(</p>
    @endforelse
  </ul>

	<aside>
		<form id="add-form" class="col-sm-6" action="/item/" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
          <textarea class="form-control" name="text" id="text" rows="4" required autofocus>{{ old('text') }}</textarea>

          @if ($errors->has('text'))
              <span class="help-block">
                  <strong>{{ $errors->first('text') }}</strong>
              </span>
          @endif

      </div>
      <p class="form-group">
          <input class="btn-sm btn-danger" type="submit" value="add new thing">
      </p>
    </form>
	</aside>
@endsection


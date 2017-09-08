@extends('layouts.default')

@section('content')

    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">Add Item</div>
            <div class="panel-body">
                <div class="col-md-10">
                    <form method="post" action="{{ route('items.store')  }}">
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" type="text" class="form-control" placeholder="Item name or something" value="{{ old('title') }}">
                        </div>
                        @if ($errors->has('title'))
                            <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                        @endif
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control"  name="description" placeholder="Some more details about the item">{{ old('description') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

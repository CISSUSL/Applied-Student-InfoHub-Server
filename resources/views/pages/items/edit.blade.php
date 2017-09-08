@extends('layouts.default')

@section('content')

    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Item</div>
            <div class="panel-body">
                <div class="col-md-10">
                    <form method="post" action="{{ route('items.update', $item->id) }}">
                        <!-- Add a fake field to make the method patch. This is not required if you're using laravel in-build form syntax -->
                        <input type="hidden" name="_method" value="patch">
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" type="text" class="form-control" placeholder="Category name or something" value="{{ $item->title }}">
                        </div>
                        @if ($errors->has('title'))
                            <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                        @endif
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control"  name="description" placeholder="Some more details about the category">{{$item->description }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
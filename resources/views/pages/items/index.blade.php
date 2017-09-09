@extends('layouts.default')

@section('content')
    <div class="col-md-9">

        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                Items
                <a href="{{route('items.create')}}" type="button" class="btn btn-primary btn-xs pull-right">Add New</a>
            </div>
            <div class="panel-body">
                <div class="list-group">
                    @foreach($items as $item)
                        <div class="list-group-item">
                            <div class="row">
                                <div class="col-md-9">
                                    <a href="{{url('items/'.$item->id)}}"><h4>{{$item->title}}</h4></a>
                                </div>
                                <div class="col-md-3">
                                    <div class="pull-right">
                                        <a href="{{url('items/'.$item->id.'/edit')}}" class="btn btn-success btn-xs ">Edit</a>

                                        <form title="Delete Vehicle" style="display: inline;" method="POST" action="{{url('items/' . $item->id)}}" accept-charset="UTF-8">
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button onclick="return confirm('Are you sure ?')" type="submit" class="btn btn-danger btn-xs ">
                                                Delete
                                            </button>
                                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

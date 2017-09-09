@extends('layouts.default')

@section('content')

    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">{{ $item->title }}</div>
            <div class="panel-body">
                <div class="col-md-10">
                    {{ $item->description }}
                </div>
            </div>
        </div>
    </div>

@endsection
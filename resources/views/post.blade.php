@extends('layout.template')

@section('content')
    <h1 class="text-center pb-5">Posts Branch</h1>

    <div class="card text-center">
        <div class="card-header bg-success">
            <h3>{{ $data['title'] }} </h3>
        </div>
        <div class="card-body ">
            {{ $data['body'] }}
        </div>

    </div>







@endsection

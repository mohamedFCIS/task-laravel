@extends('layout.template')

@section('content')
    <h1 class="text-center pb-5">All Posts</h1>

    <table class="table text-center table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                @foreach ($data as $key => $value)
                    <th> {{ $value['title'] }}</th>

                @endforeach

            </tr>
        </thead>
        i <tbody>
            <tr>
                @foreach ($data as $key => $value)
                    <td>{{ $value['body'] }}</td>

                @endforeach

            </tr>

        </tbody>
    </table>


@endsection

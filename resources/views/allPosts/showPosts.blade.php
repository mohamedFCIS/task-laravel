@extends('layout.template')

@section('content')
    <h1 class="text-center pb-5">All Posts</h1>

    <table class="table text-center table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Slug</th>
                <th>Version</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($data as $value)
                <tr>
                    <td> {{ $value['title'] }}</td>
                    <td> {{ $value['body'] }}</td>
                    <td> {{ $value['slug'] }}</td>
                    <td> {{ $value['version'] }}</td>
                </tr>

            @endforeach



        </tbody>
    </table>


@endsection
